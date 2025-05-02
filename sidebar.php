        <aside id="secondary">
        	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
        	<?php dynamic_sidebar( 'sidebar' ); ?>
        	<?php endif ?>

        	<!-- <div class="widget widget_text widget_custom_html">
						<div class="widget-title">プロフィール</div>

						<div class="wprofile">
							<div class="wprofile-img">
								<img src="<?php// echo get_theme_file_uri();?>/assets/img/about-clinik-photo02.png" alt="">
							</div>
							<div class="wprofile-content">
								<p>
									テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
								</p>
							</div>

							<nav class="wprofile-sns">
								<div class="wprofile-sns-item m_twitter"><a href="" rel="noopener noreferrer" target="_blank"><i
											class="fab fa-twitter"></i></a></div>
								<div class="wprofile-sns-item m_facebook"><a href="" rel="noopener noreferrer" target="_blank"><i
											class="fab fa-facebook-f"></i></a></div>
								<div class="wprofile-sns-item m_instagram"><a href="" rel="noopener noreferrer" target="_blank"><i
											class="fab fa-instagram"></i></a></div>
							</nav>
						</div>
					</div> -->


        	<!-- <div class="widget widget_search">
						<div class="widget-title">検索</div>

						<form method="get" class="search-form" action="#">
							<input type="search" class="search-field" value="" placeholder="キーワード" name="s" id="s">
							<button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
						</form>
					</div> -->



        	<!-- <div class="widget widget_popular">
						<div class="widget-title">人気記事</div>
						<div class="wpost-items m_ranking">
							<a class="wpost-item" href="#">
								<div class="wpost-item-img"><img src="img/entry2.png" alt=""></div>
								<div class="wpost-item-body">
									<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
								</div>
							</a>
						</div>
					</div> -->

        	<!-- <div class="widget widget_recent">
						<div class="widget-title">新着記事</div>

						<div class="wpost-items">


							<a class="wpost-item" href="#">
								<div class="wpost-item-img"><img src="./assets/img/about-clinic-child-01.png" alt=""></div>
								<div class="wpost-item-body">
									<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
								</div>
							</a>
							<a class="wpost-item" href="#">
								<div class="wpost-item-img"><img src="./assets/img/about-clinic-child-01.png" alt=""></div>
								<div class="wpost-item-body">
									<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
								</div>
							</a>
						</div>
					</div> -->

        	<div class="widget widget_archive">
        		<div class="widget-title">ブログ-アーカイブ</div>
        		<ul>
        			<?php
						//初期値なので$argsは書かなくてもOK
						$args = array(
						'type' => 'monthly',
						'limit' => '',
						'format' => 'html',
						'before' => '',
						'after' => '',
						'show_post_count' => false,
						'echo' => 1,
						'order' => 'DESC',
						'post_type' => 'post'
						);
						wp_get_archives( $args );
						?>
        		</ul>

        	</div>
        	<div class="widget widget_archive">
        		<ul>
        			<?php dynamic_sidebar( 'sidebar-news' ); ?>
        		</ul>

        	</div>

        </aside>
