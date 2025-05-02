<?php
/**
 * Archive news
 */
get_header(); ?>

<!--ヘッダー-->
<section class="caption">
	<div class="caption__content">
		<div class="caption__title">お知らせ一覧</div>
	</div>
</section>
<!--ヘッダー-->
<!-- breadcrumb -->
<?php echo get_template_part('include/breadcrumb'); ?>
<!-- /breadcrumb -->
<!---->
<!-- content -->
<div class="inner">
	<div id="content" class="content-work">
		<!-- entries -->
		<?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
		<div class="entries m_horizontal">
			<a href="<?php the_permalink(); ?>" class="entry-item">
				<!-- entry-item-img -->
				<div class="entry-item-img">
					<?php
                                    if (has_post_thumbnail()) {
                                        // アイキャッチ画像が設定されてれば大サイズで表示
                                        the_post_thumbnail('large');
                                    } else {
                                        // なければnoimage画像をデフォルトで表示
                                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/images/noimg.png" alt="">';
                                    }
                                    ?>
				</div><!-- /entry-item-img -->
				<!-- entry-item-body -->
				<div class="entry-item-body">
					<div class="entry-item-meta">
						<time class="entry-item-published" datetime="<?php the_time('c') ?>"><?php the_time('Y/n/j'); ?></time>
					</div><!-- /entry-item-meta -->
					<h2 class="entry-item-title">
						<?php
		$news_title = get_post_meta( get_the_ID(), 'news-title', true );
		if ( $news_title ) :
		echo '<div>' . esc_html( $news_title ) . '</div>';
		else :
		the_title( '<div>', '</div>' );
		endif;
		?>
					</h2>
					<div class="entry-item-excerpt">
						<p><?php
		$news_excerpt = get_post_meta( get_the_ID(), 'news-excerpt', true );
		if ( $news_excerpt ) :
		echo '<div>' . esc_html( $news_excerpt ) . '</div>';
		else :
		the_excerpt( '<div>', '</div>' );
		endif;
		?></p>
					</div><!-- /entry-item-excerpt -->
				</div><!-- /entry-item-body -->
			</a><!-- /entry-item -->
			<?php endwhile; ?>
			<?php endif; ?>
			<!-- entry-item -->
			<!-- /entries -->


		</div><!-- /.inner -->
	</div><!-- /.content -->
</div>
<?php get_footer(); ?>
