<?php get_header(); ?>


<section class="caption">
	<div class="caption__content">
		<div class="caption__title">診療案内</div><!-- /.mainvisual__title -->
		<div class="caption__lead">お子さまのことなら、<br>
			どんなことでも、まずはご相談ください</div><!-- /.mainvisual__lead -->
	</div>
</section>
<!--ヘッダー-->
<main>
	<section class="info inner  wow fadeInUp" data-wow-delay=".4s">
		<div class="section__inner">
			<h2 id="guide" class="util-ttl">診療案内</h2>
			<ul class="card__list">
				<li class="card__item">
					<h3 class="card__item-head">小児科診療</h3>
					<div class="card__item-img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/service_01.jpeg" alt="">
					</div>
					<p class="card__item-txt">
						乳児から小中高生まで、感染症を中心に診療しています。小さな外傷や熱傷の処置もできます。
					</p>
					<div class="btns-center">
						<a href="/kodomo/" class="rounded-btn rounded-btn--large btn-main-bg  slide">詳しくはこちら<span
								class="deg"></span></a>
					</div>
				</li>
				<li class="card__item">
					<h3 class="card__item-head">予防接種</h3>
					<div class="card__item-img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/service_02.jpeg" alt="">
					</div>
					<p class="card__item-txt">
						天草市の定期予防接種の指定医療機関です。高齢者の肺炎球菌ワクチンもできます。
					</p>
					<div class="btns-center">
						<a href="/yobou/" class="rounded-btn rounded-btn--large btn-main-bg slide">詳しくはこちら<span
								class="deg"></span></a>
					</div>
				</li>
				<li class="card__item">
					<h3 class="card__item-head">乳幼児健診</h3>
					<div class="card__item-img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/service_03.jpeg" alt="">
					</div>
					<p class="card__item-txt">
						乳児前期・後期健診、１歳半健診、3歳半健診を、市の委託を受け、個別に健診しております。
					</p>
					<div class="btns-center">
						<a href="/infants/" class="rounded-btn rounded-btn--large btn-main-bg slide">詳しくはこちら<span
								class="deg"></span></a>
					</div>
				</li>
			</ul>

			<div class="btns-center">
				<span class="sp btn-copy">＼ネットで簡単5分／</span>
				<a href="https://park.paa.jp/park2/clinics/1460/businesses/01" target="_blank" rel="noopener"
					class="rounded-btn rounded-btn--large btn-yellow">
					<span class="btn-deg1"></span>
					<span class="btn-deg2"></span>
					<span class="btn-deg3"></span>
					<span class="pc">ネットで簡単</span><br class="pc">
					受付予約<span class="sp">はこちら ▶︎</span>
				</a>
			</div>
		</div>
	</section>

	<section id="line" class="line inner wow fadeInUp" data-wow-delay=".4s">
		<div class="section__inner">
			<h2 class="util-ttl">公式LINE</h2>
			<p class="line__txt">休日小児科当番医のお知らせや、土曜日診療のお知らせ、診療時間の変更などが届きます。</p>
			<p class="line__txt">定期ワクチンについてもお知らせしています。</p>
			<div class="line__box">
				<div class="line__box-left">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/line-icon.png" alt="">
				</div>
				<div class="line__box-right">
					<p class="line__copy">＼　QRコードを読み込んで登録　／</p>
					<figure>
						<a
							href="https://liff.line.me/1656076666-PD64a1Gm/landing?follow=%40190ptcol&amp;lp=Qbezaj&amp;liff_id=1656076666-PD64a1Gm">
							<img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36"
								border="0"></a>
					</figure>
					<p class="line__copy">@190ptcol</p>
				</div>
			</div>
		</div>
	</section>
	<!-- /.line -->

	<?php get_footer(); ?>
