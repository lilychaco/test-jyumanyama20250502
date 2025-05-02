<?php
/**
 * Archive news
 */
get_header(); ?>
<!--ヘッダー-->
<section class="caption">
	<div class="caption__content">
		<div class="caption__title">予約について</div><!-- /.mainvisual__title -->
	</div>
</section>
<!--ヘッダー-->
<!-- breadcrumb -->
<?php get_template_part('include/breadcrumb'); ?>
<!-- /breadcrumb -->
<!---->
<!-- content -->
<div id="content" class="content-work">
	<div class="inner">

		<!-- primary -->
		<main id="primary">

			<!--タクソノミー-->
			<div class="genre-nav">
				<div class="genre-nav-link"><a class="is-active"
						href="<?php echo esc_url( get_post_type_archive_link( 'タクソノミー名' ) ); ?>">すべて</a></div>
				<!-- /.genre-nav-link -->
				<?php
                $genre_terms = get_terms( 'reserve', array( 'hide_empty' => false ) );
                foreach ( $genre_terms as $genre_term ) :
            ?>
				<div class="genre-nav-link"><a
						href="<?php echo esc_url( get_term_link( $genre_term, 'タクソノミー名' ) ); ?>"><?php echo esc_html( $genre_term->name ); ?></a>
				</div><!-- /.genre-nav-link -->
				<?php
                endforeach;
            ?>
			</div><!-- /.genre-nav -->
			<!--タクソノミー-->

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
					<div class="entry-item-body">
						<div class="entry-item-meta">
							<div class="entry-item-meta">
								<div class="entry-item-tag">
									<?php echo esc_html( get_the_terms( get_the_ID(), 'reserve' )[0]->name ); ?>
								</div><!-- /.entry-item-tag -->
							</div><!-- /.entry-item-meta -->
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
						); ?></div>
				<?php endif; ?>
		</main><!-- /primary -->
		<!------- secondary ------->
		<?php get_sidebar(); ?>
	</div><!-- /.inner -->
</div><!-- /.content -->
<?php get_footer(); ?>
