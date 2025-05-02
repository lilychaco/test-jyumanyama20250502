<?php get_header(); ?>

<!--ヘッダー-->
<section class="caption">
	<div class="caption__content">
		<div class="caption__title">診療日時のご案内</div><!-- /.mainvisual__title -->
		<div class="caption__lead">お子さまのことなら、<br>
			どんなことでも、まずはご相談ください</div><!-- /.mainvisual__lead -->
	</div>
</section>
<!--ヘッダー-->
<!-- breadcrumb -->
<?php echo get_template_part('include/breadcrumb'); ?>
<!-- /breadcrumb -->

<!--info-->
<section class="schedule inner wow fadeInUp" data-wow-delay=".4s">
	<div class="section__inner">
		<h2 id="time" class="util-ttl">診療日時の<span>ご案内</span></h2>
		<div class="util-ttl-head">
			<h3>診療時間について</h3>
		</div>

		<table class="table-wrap">
			<tbody>
				<tr>
					<th class="light">時間</th>
					<th>月</th>
					<th>火</th>
					<th>水</th>
					<th>木</th>
					<th>金</th>
					<th class="sat">土</th>
				</tr>
				<tr>
					<td class="light">8:45 ~<br class="sp"> 12:00</td>
					<td>○</td><!-- 月 -->
					<td>○</td><!-- 火 -->
					<td>○</td><!-- 水 -->
					<td>○</td><!-- 木 -->
					<td>○</td><!-- 金 -->
					<td class="sat">○<div class="huteiki">不定期</div>
					</td><!-- 土 -->
				</tr>
				<tr>
					<td class="light">13:30 ~ <br class="sp">14:30</td>
					<td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/images/icon_yobou-sessyu.png">
					</td><!-- 月 -->
					<td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/images/icon_yobou-sessyu.png">
					</td><!-- 火 -->
					<td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/images/icon_yobou-sessyu.png">
					</td><!-- 水 -->
					<td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/images/icon_yobou-sessyu.png">
					</td><!-- 木 -->
					<td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/images/icon_yobou-sessyu.png">
					</td><!-- 金 -->
					<td></td><!-- 土 -->
				</tr>
				<tr>
					<td class="light">14:30 ~<br class="sp"> 15:30</td>
					<td>○</td><!-- 月 -->
					<!-- <td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/images/icon_kenshin.png"></td> -->
					<td>○</td>
					<!-- 火 -->
					<td>○</td><!-- 水 -->
					<!-- <td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/images/icon_kenshin.png"></td> -->
					<td>○</td>
					<!-- 木 -->
					<td>○</td><!-- 金 -->
					<td></td><!-- 土 -->
				</tr>
				<tr>
					<td class="light">15:30 ~<br class="sp"> 17:30</td>
					<td>○</td><!-- 月 -->
					<td>○</td><!-- 火 -->
					<td>○</td><!-- 水 -->
					<td>○</td><!-- 木 -->
					<td>○</td><!-- 金 -->
					<td><span class="huteiki">休診</span></td><!-- 土 -->
				</tr>
			</tbody>
		</table>

		<div class="table__icons">
			<div class="table__icon">
				<img class="pc" src="<?php echo get_theme_file_uri(); ?>/assets/images/table_shinryou.png" alt="">
				<img class="sp" src="<?php echo get_theme_file_uri(); ?>/assets/images/table-sp_shinryou.png" alt="">
			</div>
			<div class="table__icon">
				<img class="pc" src="<?php echo get_theme_file_uri(); ?>/assets/images/table_yobou-sessyu.png" alt="">
				<img class="sp" src="<?php echo get_theme_file_uri(); ?>/assets/images/table-sp_yobou-sessyu.png" alt="">
			</div>
			<div class="table__icon">
				<img class="pc" src="<?php echo get_theme_file_uri(); ?>/assets/images/table_kenshin.png" alt="">
				<img class="sp" src="<?php echo get_theme_file_uri(); ?>/assets/images/table-sp_kenshin.png" alt="">
			</div>
		</div>
		<div class="table__txt">
			<p>※ 医師の研修や健診等で、診療時間の変更をするときがあります。</p>
			<p>※ 午後の診療は、乳児健診や保育園・幼稚園・学校健診へ出かけるさい、開始時間が予定より遅くなることがあります。</p>
			<p>※ 診療担当医師を変更する場合もあります。 ご迷惑をおかけしますが、ご理解のほど、よろしくお願いいたします。 </p>
			<p>休診・診療時間等詳細について、下記診療予定表カレンダーと十万山クリニック:アイチケットで、お知らせしていますので、そちらをご覧ください。</p>
		</div>
		<div class="schedule__box">
			<div class="util-ttl-head">
				<h3>休診日はこちらからご確認ください。</h3>
			</div>
			<div>
				<?php if( get_field('closed-days-image', 854) ): ?>
				<img src="<?php the_field('closed-days-image', 854); ?>" />
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!--schedule-->
<?php get_footer(); ?>
