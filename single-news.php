<?php

/**
 * Single Work
 */

get_header(); ?>
<!--singleのヘッダー-->
<section class="caption">
	<div class="caption__content">
		<div class="caption__title">お知らせ詳細</div><!-- /.mainvisual__title -->
	</div>
</section>
<!--singleのヘッダー-->
<!-- breadcrumb -->
<?php get_template_part('include/breadcrumb'); ?>
<!-- /breadcrumb -->


<!-- content -->
<div id="content" class="inner">
	<div class="content-inner">
		<article <?php post_class(array('entry')); ?>>

			<!-- entry-header -->
			<div class="entry-header news-title">
				<?php
				$news_title = get_post_meta( get_the_ID(), 'news-title', true );
				if ( $news_title ) :
				echo '<h1>' . esc_html( $news_title ) . '</h1>';
				else :
				the_title( '<h1>', '</h1>' );
				endif;
					?>
				<!-- /entry-title -->
				<!-- entry-meta -->
				<div class="entry-meta">
					<time class="entry-published" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('Y/n/j'); ?></time>
					<?php if (get_the_modified_time('Y-m-d') !== get_the_time('Y-m-d')) : ?>
					<time class="entry-updated" datetime="<?php the_modified_time('c'); ?>">最終更新日
						<?php the_modified_time('Y/n/j'); ?></time>
					<?php endif; ?>
				</div><!-- /entry-meta -->
				<!-- entry-img -->
				<div class="entry-img">
					<?php
                                if (has_post_thumbnail()) {
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
				<?php
		$news_text = get_post_meta( get_the_ID(), 'news-text', true );
		if ( $news_text ) :
		echo '<div>' . nl2br(esc_html( $news_text )) . '</div>';
		else :
		the_content( '<div>', '</div>' );
		endif;
		?>


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
		</article> <!-- /entry -->
	</div>



	<?php
$current_post_id = get_the_ID();
$args = array(
    'post_type' => 'news',
    'post__not_in' => array($current_post_id),
    'posts_per_page' => 3,
);

$related_posts = new WP_Query($args);
if($related_posts->have_posts()):
    echo '<div class="content-inner">';
    echo '<ul class="news-others">';
    while($related_posts->have_posts()): $related_posts->the_post();
        $related_news_title = get_post_meta( get_the_ID(), 'news-title', true );
        if (!$related_news_title) {
            $related_news_title = get_the_title();
        }
        echo '<li><a href="' . get_the_permalink() . '">' . esc_html($related_news_title) . '</a>';
        echo ' (' . get_the_date() . ')'; // 公開日を表示
        echo '</li>';
    endwhile;
    echo '</ul>';
    echo '</div>';
    wp_reset_postdata();
endif;
?>


</div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>
