<?php get_header(); ?>

<section class="caption">
	<div class="caption__content">
		<div class="caption__title">記事一覧</div><!-- /.mainvisual__title -->
	</div>
</section>
<!--ヘッダー-->
<!-- breadcrumb -->
<?php echo get_template_part('include/breadcrumb'); ?>
<!-- /breadcrumb -->
<!-- content -->
<div id="content" class="inner">
	<div class="content-inner">
		<!-- primary -->
		<main id="primary">
			<div class="archive-head m_description">
				<div class="archive-lead">ARCHIVE</div>
				<h1 class="archive-title m_category"><?php the_archive_title(); ?></h1>
			</div>

			<!-- entries -->
			<?php if(have_posts()): ?>
			<div class="entries m_horizontal">
				<?php while(have_posts()): the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="entry-item">
					<div class="entry-item-img">
						<?php
							if (has_post_thumbnail() ) {
							// アイキャッチ画像が設定されてれば大サイズで表示
							the_post_thumbnail('large');
							} else {
							// なければnoimage画像をデフォルトで表示
							echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/noimg.png" alt="">';
							}
							?>
					</div>

					<?php
						$category = get_the_category();
						?>
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<?php
										if($category[0]){
											echo '<div class="entry-item-tag">' .$category[0]->cat_name. '</div>';
										}
									?>
							<time class="entry-item-published" datetime="<?php the_time('c') ?>"><?php the_time('Y/n/j'); ?></time>
						</div>
						<h2 class="entry-item-title"><?php the_title(); ?></h2>
						<div class="entry-item-excerpt">
							<p><?php the_excerpt(); ?></p>
						</div>
					</div>
				</a>
				<?php endwhile; ?>
				<?php endif; ?>
				<!-- entry-item -->
				<!-- /entries -->


				<?php if( paginate_links() ) : ?>
				<!-- pagenation -->
				<div class="pagenation">
					<?php echo
						paginate_links(
							array(
								'end_size' => 0,
								'mid_size' => 1,
								'prev_next' => true,
								'prev_next' => '<i class="fas fa-angle-left"></i></a>',
								'next_text' => '<i class="fas fa-angle-right"></i></a>',
							)
						); ?>
					<?php endif; ?>
				</div>
		</main><!-- /primary -->

		<!------- secondary ------->
		<?php get_sidebar(); ?>
		<!--aside-->
	</div><!-- /content-inner -->
</div><!-- /content -->

<?php get_footer(); ?>
