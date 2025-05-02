<?php get_header(); ?>

<section class="caption">
	<div class="caption__content">
		<div class="caption__title">詳細記事</div>
	</div>
</section>
<!-- breadcrumb -->
<?php get_template_part('include/breadcrumb'); ?>
<!-- /breadcrumb -->
<!-- content -->
<div id="content" class="inner">
	<div class="content-inner">
		<main>
			<?php
					if ( have_posts() ) :
					while ( have_posts() ) : the_post();
					?>
			<article>
				<div class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->
					<!-- entry-img -->
					<div class="entry-img">
						<?php
									if (has_post_thumbnail() ) {
									// アイキャッチ画像が設定されてればミディアムサイズで表示
									the_post_thumbnail('medium');
									} else {
									// なければnoimage画像をデフォルトで表示
									echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/noimg.png" alt="">';
									}
									?>
					</div><!-- /entry-img -->
				</div><!-- /entry-header -->
				<!-- entry-body -->
				<div class="entry-body">
					<?php the_content(); ?>
					<?php
							//改ページを有効にするための記述
							wp_link_pages(
							array(
							'before' => '<nav class="entry-links">',
							'after' => '</nav>',
							'link_before' => '',
							'link_after' => '',
							'next_or_number' => 'number',
							'separator' => '',
							)
							);
							?>
				</div><!-- /entry-body -->
				<?php endwhile; endif; ?>
			</article>
		</main><!-- /primary -->
	</div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>
