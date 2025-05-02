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
				<h1 class="archive-title m_category"><?php the_archive_title(); ?></h1><!-- /archive-title -->
				<div class="archive-description">
					<p>
						<?php the_archive_description(); ?>
					</p>
				</div><!-- /archive-description -->
			</div><!-- /archive-head -->


			<!-- entries -->
			<?php if(have_posts()): ?>
			<div class="entries m_horizontal">

				<?php while(have_posts()): the_post(); ?>
				<!-- entry-item -->
				<a href="<?php the_permalink(); ?>" class="entry-item">
					<!-- entry-item-img -->
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
					</div><!-- /entry-item-img -->
					<!-- entry-item-body -->
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
							<!-- /entry-item-published -->
						</div><!-- /entry-item-meta -->
						<h2 class="entry-item-title"><?php the_title(); ?></h2><!-- /entry-item-title -->
						<div class="entry-item-excerpt">
							<p><?php the_excerpt(); ?></p>
						</div><!-- /entry-item-excerpt -->
					</div><!-- /entry-item-body -->
				</a><!-- /entry-item -->
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
					<!-- <span class="page-numbers current">1</span>
						<a class="page-numbers" href="#">2</a>
						<a class="page-numbers" href="#">3</a>
						<a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a> -->
				</div><!-- /pagenation -->

		</main><!-- /primary -->

		<!------- secondary ------->
		<?php get_sidebar(); ?>
		<!-- secondary -->
	</div><!-- /content-inner -->
</div><!-- /content -->

<?php get_footer(); ?>
