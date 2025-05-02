<?php get_header(); ?>

<section class="caption">
	<div class="caption__content">
		<div class="caption__title">記事詳細</div>
	</div>
</section>
<!-- breadcrumb -->
<?php get_template_part('include/breadcrumb'); ?>
<!-- /breadcrumb -->
<!-- content -->
<div id="content" class="inner">
	<div class="content-inner">
		<!-- entry -->
		<?php
					if ( have_posts() ) :
					while ( have_posts() ) : the_post();
					?>
		<article>
			<?php
			$cat_ids = array();
					$category = get_the_category();
					if ( ! empty($category) && isset($category[0]) ) :
					?>
			<!-- entry-header -->
			<div class="entry-header">
				<div class="entry-label">
					<a href="<?php echo esc_url( get_category_link( $category[0]->term_id));?>">
						<?php echo $category[0]->cat_name; ?>
					</a>
				</div>
				<?php endif; ?>

				<h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

				<!-- entry-meta -->
				<div class="entry-meta">
					<time class="entry-published" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('Y/n/j'); ?></time>
					<?php if(get_the_modified_time( 'Y-m-d' ) !== get_the_time('Y-m-d')) :?>
					<time class="entry-updated" datetime="<?php the_modified_time('c'); ?>">最終更新日
						<?php the_modified_time('Y/n/j');?></time>
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

			<?php $post_tags = get_the_tags(); ?>
			<div class="entry-tag-items">
				<!-- <div class="entry-tag-head">タグ</div> -->
				<?php if($post_tags) : ?>
				<?php foreach($post_tags as $tag): ?>
				<div class="entry-tag-item">
					<a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>">
						<?php echo esc_html($tag->name);?></a>
				</div><!-- /entry-tag-item -->
				<?php endforeach; ?>
				<?php endif; ?>
			</div><!-- /entry-tag-items -->

			<div class="entry-related">
				<div class="related-title">関連記事</div>
				<?php if( has_category() ){
							$post_cats = get_the_category();
							$cat_ids = array();
							foreach($post_cats as $cat){
								$cat_ids[] = $cat->term_id;
							}
						}
						$cat_ids = array();//has_category()がfalseの場合、$cat_idsは定義されません。これが警告やエラーの原因となる可能性があります。
																//$cat_ids を事前に初期化しておく
						$myposts = get_posts( array(
							'posts_per_page' => 3,
							'post_type'  => 'post',
							'orderby' => 'rand',
							'post__not_in' => array( $post->ID ),// 表示中の投稿を除外
							'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
						));
						if( $myposts ) :?>
				<div class="related-items">
					<?php foreach($myposts as $post): setup_postdata($post); ?>
					<a class="related-item" href="<?php the_permalink(); ?>">
						<div class="related-item-img">
							<?php
									if (has_post_thumbnail() ) {
									// アイキャッチ画像が設定されてればミディアムサイズで表示
									the_post_thumbnail('medium');
									} else {
									// なければnoimage画像をデフォルトで表示
									echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/noimg.png" alt="">';
									}
									?></div>
						<div class="related-item-title"><?php the_title(); ?></div>
					</a>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
				<?php endif; ?>
			</div>
		</article>
		<?php endwhile; endif; ?>

	</div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>
