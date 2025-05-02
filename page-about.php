<?php get_header(); ?>

<section class="caption">
	<div class="caption__content">
		<div class="caption__title">十万山クリニックについて</div><!-- /.mainvisual__title -->
		<div class="caption__lead">お子さまのことなら、<br>
			どんなことでも、まずはご相談ください</div><!-- /.mainvisual__lead -->
	</div>
</section>
<!--ヘッダー-->
<!-- breadcrumb -->
<?php echo get_template_part('include/breadcrumb'); ?>
<!-- /breadcrumb -->

<section class="about-clinic inner  wow fadeInUp" data-wow-delay=".4s">
	<!--名前の由来-->
	<div class="about-clinic__name section__inner">
		<h2 class="util-ttl">名前の由来</h2>
		<p class="about-clinic__name__explanation">
			十万山は、天草市の中央にある小高い山です。<br>
			頂上からは、天草市本渡町近隣を四方に見渡すことができます。<br>
			天草地域の人、みんなが知ってる「十万山」から、名前をもらいました。
		</p>
	</div>

	<!--ドクターからのご挨拶-->
	<div class="about-clinic__greeting section__inner">
		<h2 class="util-ttl">ご挨拶</h2>
		<div class="about-clinic__container">
			<div class="about-clinic__flex">
				<p class="about-clinic__flex-txt">
					こんにちは、十万山クリニック 院長の中村弓美（なかむらゆみ）です。<br>
					小児科医として働き続けて、もうすぐ40年になります。<br>
					子どもさんや親御さんが、来て安心できる小児科です。<br>
					お母さんお父さん方が明るく子育てを楽しめるようにサポートさせて頂きます。よろしくお願いします。
				</p>
				<div class="about-clinic__flex-img">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-greeting-doctor_01.png" alt="">
				</div>
			</div>
			<div class="about-clinic__carrier">
				<ul class="timeline">
					<li>
						<p class="timeline-date">1958年</p>
						<div class="timeline-content">
							<h3>福岡県北九州市に生まれる</h3>
						</div>
					</li>
					<li>
						<p class="timeline-date">1983年</p>
						<div class="timeline-content">
							<h3>山口大学医学部卒業</h3>
						</div>
					</li>
					<li>
						<p class="timeline-date">1988年</p>
						<div class="timeline-content">
							<h3>相方のふるさと天草へ転居</h3>
							<p>重症心身障害児者はまゆう療育園勤務</p>
						</div>
					</li>
					<li>
						<p class="timeline-date">2004年</p>
						<div class="timeline-content">
							<h3>中村こども・内科クリニック勤務</h3>
						</div>
					</li>
					<li>
						<p class="timeline-date">2006年</p>
						<div class="timeline-content">
							<h3>十万山クリニック開院</h3>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!--スタッフの紹介-->
	<!-- <div class="about-clinic__staff section__inner">
                    <h2 class="util-ttl">スタッフの紹介</h2>
                    <ul class="about-clinic__staff__container">
                        <li class="about-clinic__staff__flex">
                            <div class="about-clinic__staff__flex-icon">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-greeting-doctor_01.png" alt="">
                            </div>
                            <p class="about-clinic__staff__flex-txt">
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                            </p>
                        </li>
                        <li class="about-clinic__staff__flex">
                            <div class="about-clinic__staff__flex-icon">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-greeting-doctor_01.png" alt="">
                            </div>
                            <p class="about-clinic__staff__flex-txt">
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                            </p>
                        </li>
                        <li class="about-clinic__staff__flex">
                            <div class="about-clinic__staff__flex-icon">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-greeting-doctor_01.png" alt="">
                            </div>
                            <p class="about-clinic__staff__flex-txt">
                                ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                            </p>
                        </li>
                    </ul>
                </div> -->

	<!--委託園医-->
	<div class="about-clinic__consign section__inner">
		<h2 class="util-ttl">委託園医・学校医</h2>
		<ul class="about-clinic__consign__lists">
			<li>愛燐保育園</li>
			<li>大矢崎保育園</li>
			<li>佐伊津保育園</li>
			<li>ふたば保育園</li>
			<li>箱の水保育園</li>
			<li>本渡北幼稚園</li>
			<li>本渡南幼稚園</li>
			<li>亀川幼稚園</li>
			<li>みこころ幼稚園</li>
			<li>本渡中学校</li>
		</ul>
	</div>

	<!--十万山クリニックの紹介-->
	<div class="about-clinic__photo section__inner">
		<h2 class="util-ttl">クリニックの紹介</h2>
		<div class="about-clinic__photo__box">
			<ul>
				<li class="img_1"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-clinik-photo01.png" alt="">
				</li>
				<li class="img_2"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-clinik-photo02.png" alt="">
				</li>
				<li class="img_3"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-clinik-photo03.png" alt="">
				</li>
				<li class="img_4"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-clinik-photo04.png" alt="">
				</li>
				<li class="img_5"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-clinik-photo05.png" alt="">
				</li>
				<li class="img_6"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-clinik-photo06.png" alt="">
				</li>
				<li class="img_7"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-clinik-photo07.png" alt="">
				</li>
			</ul>
		</div>
	</div>

	<!--中村子供クリニック-->
	<div class="about-clinic__child section__inner">
		<h2 class="util-ttl">中村こども・内科クリニック</h2>
		<p class="about-clinic__child__explanation">
			中村こども・内科クリニックは、2003年、五和町ニ江に継承開業しました。<br>
			かかりつけ医として、子どもから高齢者まで、地域の方の安心をサポートしています。<br>
			院長は中村英一（なかむらえいいち）です。<br>
			本渡小学校・本渡中学校の出身で、大学は自治医科大学を卒業しました。<br>
			在宅療養しておられる方の訪問診療や看取り、特別養護老人ホーム慈晃園の嘱託医もしています。

		</p>
		<div class="about-clinic__child__container">
			<div class="about-clinic__child__flex">
				<div class="about-clinic__child__flex-img">
					<!-- <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-clinic-child-01.png" alt=""> -->
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/footer_nakamura-kodomo-clinic (1).jpg" alt="">
				</div>
				<p class="about-clinic__child__flex-txt">
					地域で古くから利用されていたクリニックです。外観は頼りないですが、院長とスタッフは明るく元気で頼れます。
				</p>
			</div>
			<div class="about-clinic__child__flex">
				<div class="about-clinic__child__flex-img">
					<img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-clinic-child-02.png" alt="">
				</div>
				<p class="about-clinic__child__flex-txt">
					昔風の待合室です。以前は、有床クリニックでしたので、トイレは沢山あります。
				</p>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
