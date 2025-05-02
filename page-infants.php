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
<?php get_template_part('include/breadcrumb'); ?>
<!-- /breadcrumb -->
<!--予防接種-->
<section class="infants inner  wow fadeInUp" data-wow-delay=".4s">
	<div class="section__inner">
		<h2 class="util-ttl">乳幼児健診</h2>
		<p class="infants__txt-explanation">
			十万山クリニックでは、天草市の委託を受けて、下記の健診を実施しています。<br><br>
			<span> 【３･４か月児健診】<br class="sp">【７･８か月児健診】<br class="sp">【１歳６か月児健診】<br class="sp">【３歳６か月児健診】</span>
		</p>

		<div class="util-ttl-head">
			<h3>３･４か月児健診</h3>
		</div>
		<p class="infants__txt">2021年4月から、３・４か月児健診は、指定医療機関での個別健診となりました。<br>
			成長発達の確認、離乳食開始についてのアドバイス等行います。
		</p>
		<h4 class="util-ttl-point">どんなところを見ているの？</h4>
		<div class="infants__txt-box">
			<p>
				先天性心疾患、股関節脱臼、脳性麻痺がないか、気をつけてみています。
			</p>
			<p>
				首座りは、4ヶ月で達成できるので、5ヶ月で座っていないと、遅いと考えます。<br>
				（予定日よりも早く生まれた赤ちゃんは、修正月齢で考えます。）
			</p>
			<p>
				じっと見ることができるか、目で追いかけて見ているか、チェックしています。<br>
				できない時は、視力障害や知的障害を考えることもあります。
			</p>
		</div>
		<!---->
		<div class="util-ttl-head">
			<h3>７･８か月児健診</h3>
		</div>
		<p class="infants__txt">管轄の保健福祉センターで個別の問診・計測・相談を行います。
		</p>
		<h4 class="util-ttl-point">どんなところを見ているの？</h4>
		<div class="infants__txt-box">
			<p>
				お母さんを認識するようになって、親子関係が強くなってくる時期です。
			</p>
			<p>
				寝返り、手を伸ばして物をつかめるか、お座りができるか、ハンカチを顔にかけられたら手で取るか、両手をつかっているかなどをみています。
			</p>
			<p>
				早い子は、ハイハイができて、つかまり立ちをするようになります。9ヶ月になって、お座りできない時、遅れがあると考えます。
			</p>
		</div>
		<!---->
		<div class="util-ttl-head">
			<h3>１歳６か月児健診</h3>
		</div>
		<p class="infants__txt">管轄の保健福祉センターで個別の問診・計測・相談を行います。
		</p>
		<h4 class="util-ttl-point">どんなところを見ているの？</h4>
		<div class="infants__txt-box">
			<p>
				手をはなして自分で歩けるようになっているか、言葉がはっきり出なくても表情や身振りでコミュニケーションできているかをみています。
			</p>
			<p>
				発達障害がある子どもでは、この頃からコミュニケーションの問題が垣間見えることがあります。
			</p>
		</div>
		<!---->
		<div class="util-ttl-head">
			<h3>３歳６か月児健診</h3>
		</div>
		<p class="infants__txt">管轄の保健福祉センターで個別の問診・計測・相談を行います。
		</p>
		<h4 class="util-ttl-point">どんなところを見ているの？</h4>
		<div class="infants__txt-box">
			<p>
				歩き方、体の使い方、言葉や身振り手振りが出るかどうかをみています。
			</p>
			<p>
				バイバイとタッチができれば、まずはコミュニケーションOKですね。<br>
				視機能検査機械で、視力障害の有無がチェックされます。<br>
			</p>
			<p>
				異常の指摘がでても、すぐに治療が必要とは限りませんが、必ず眼科を受診しましょう。
			</p>
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
