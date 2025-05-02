<?php get_header(); ?>
<!--ヘッダー-->
<section class="caption">
	<div class="caption__content">
		<div class="caption__title">診療案内</div><!-- /.mainvisual__title -->
		<div class="caption__lead">お子さまのことなら、<br>
			どんなことでも、まずはご相談ください</div><!-- /.mainvisual__lead -->
	</div>
</section>
<!--ヘッダー-->
<!-- breadcrumb -->
<?php echo get_template_part('include/breadcrumb'); ?>
<!-- /breadcrumb -->
<!--
    prevention - 予防接種
-->
<!--予防接種-->
<section class="prevention inner  wow fadeInUp" data-wow-delay=".4s">
	<div class="section__inner">
		<h2 class="util-ttl">予防接種</h2>
		<div class="util-ttl-head">
			<h3>基本の診療姿勢について</h3>
		</div>
		<p class="prevention__txt">十万山クリニックは、天草市の定期予防接種指定医療機関です。
		</p>
		<p class="prevention__txt">天草市の定期予防接種は、すべて個別接種で行われます。
			天草市の定期予防接種体制については、天草市の広報等にもお知らせが出ますので、そちらもご覧ください。</p>
		<p class="prevention__txt"> 定期予防接種については、「<a href="https://www.city.amakusa.kumamoto.jp/kiji0035964/index.html"
				target="_blank" rel="noopener">天草市定期予防接種</a>」のページでご案内しています。
		</p>
		<div class="util-ttl-head">
			<h3>ワクチンスケジュール</h3>
		</div>
		<figure class="prevention__figure">
			<figcaption>出典：VPDを知って子どもを守ろう（<a href="https://www.know-vpd.jp/index.php" target="_blank"
					rel="noopener">https://www.know-vpd.jp/index.php）</a></figcaption>
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/vaccine-schedule-0.jpg" alt="">
		</figure>
		<figure class="prevention__figure">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/vaccine-schedule-7.jpg" alt="">
		</figure>

		<div class="util-ttl-head">
			<h3>ワクチンで、VPDを防ごう！</h3>
		</div>
		<h4 class="util-ttl-point">Vaccine（ワクチン）Preventable（防げる）Diseases（病気）の略です</h4>
		<p class="prevention__txt">「ワクチンで防げる病気」をVPDと呼びます。<br>
			下のバナーをクリックすると、ワクチンやVPDのことを詳しく知ることができます。
		</p>
		<div class="prevention__img">
			<p class="prevention__img-copy">＼ ワクチンやVPDのことを詳しく知る ／</p>
			<a href="https://www.know-vpd.jp/" target="_blank" rel="noopener"><img
					src="<?php echo get_theme_file_uri(); ?>/assets/images/know-vbd-banner.png" alt="KNOW-VPDのバナー"></a>
		</div>
		<div class="util-ttl-head">
			<h3>十万山クリニックで接種できるワクチン</h3>
		</div>
		<h4 class="util-ttl-point">定期予防接種</h4>
		<div class="prevention__items">
			<ul class="prevention__lists">
				<li class="prevention__list">・BCGワクチン</li>
				<li class="prevention__list">・ロタウイルスワクチン</li>
				<li class="prevention__list">・ヒブワクチン</li>
				<li class="prevention__list">・小児用肺炎球菌ワクチン</li>
			</ul>
			<ul class="prevention__lists">
				<li class="prevention__list">・四種混合ワクチン</li>
				<li class="prevention__list">・B型肝炎ワクチン</li>
				<li class="prevention__list">・麻疹風疹ワクチン</li>
				<li class="prevention__list">・水痘ワクチン</li>
			</ul>
			<ul class="prevention__lists">
				<li class="prevention__list">・日本脳炎ワクチン</li>
				<li class="prevention__list">・二種混合ワクチン</li>
				<li class="prevention__list">・子宮頸がん予防ワクチン</li>
			</ul>
		</div>
		<h4 class="util-ttl-point">任意予防接種</h4>
		<div class="prevention__items">
			<ul class="prevention__lists">
				<li class="prevention__list">・インフルエンザワクチン</li>
			</ul>
			<ul class="prevention__lists">
				<li class="prevention__list">・おたふくかぜワクチン</li>
			</ul>
		</div>
		<h4 class="util-ttl-point">海外渡航用ワクチン</h4>
		<div class="prevention__items">
			<ul class="prevention__lists">
				<li class="prevention__list">海外渡航用にワクチン希望の方は、ご相談ください。対応できます。</li>
			</ul>
		</div>

		<div class="page__nav">
			<div class="page__nav-box">
				<?php if( is_page('kodomo')): ?>

				<div class="btns-center">
					<a href="/yobou/" class="rounded-btn rounded-btn--large btn-main-bg  slide">予防接種はこちら<span
							class="deg"></span></a>
				</div>
				<div class="btns-center">
					<a href="/infants/" class="rounded-btn rounded-btn--large btn-main-bg  slide">乳幼児検診はこちら<span
							class="deg"></span></a>
				</div>

				<?php elseif( is_page('infants')): ?>
				<div class="btns-center">
					<a href="/yobou/" class="rounded-btn rounded-btn--large btn-main-bg  slide">予防接種はこちら<span
							class="deg"></span></a>
				</div>
				<div class="btns-center">
					<a href="/kodomo/" class="rounded-btn rounded-btn--large btn-main-bg  slide">小児科診療はこちら<span
							class="deg"></span></a>
				</div>
				<?php elseif( is_page('yobou')): ?>
				<div class="btns-center">
					<a href="/kodomo/" class="rounded-btn rounded-btn--large btn-main-bg  slide">小児科診療はこちら<span
							class="deg"></span></a>
				</div>
				<div class="btns-center">
					<a href="/infants/" class="rounded-btn rounded-btn--large btn-main-bg  slide">乳幼児検診はこちら<span
							class="deg"></span></a>
				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
