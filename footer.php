<section class="footer__container wow fadeInUp" data-wow-delay=".4s">
	<div class="footer__items footer__container__inner">
		<div class="footer__item-top">
			<div class="footer__item">
				<div class="util-ttl-head">
					<h3>診療情報</h3>
				</div>
				<figure class="footer__item-table">
					<table>
						<tbody>
							<tr>
								<td class="footer__item-ttl">診療所名</td>
								<td class="footer__item-lead">医療法人 扶桑会 <span class="footer__item-name">十万山クリニック</span></td>
							</tr>
							<tr>
								<td class="footer__item-ttl">診療科目</td>
								<td class="footer__item-lead">小児科・内科</td>
							</tr>
							<tr>
								<td class="footer__item-ttl">診療時間</td>
								<td class="footer__item-lead"><a href="#sch">こちら</a>を参照してください</td>
							</tr>
							<tr>
								<td class="footer__item-ttl">休診日</td>
								<td class="footer__item-lead">土曜・日曜・祝日 詳しくはこちらの診療予定表をご確認ください。</td>
							</tr>
							<tr>
								<td class="footer__item-ttl">住所</td>
								<td class="footer__item-lead">〒863-0001<br>
									熊本県 天草市本渡町広瀬５−２１</td>
							</tr>
							<tr>
								<td class="footer__item-ttl">電話</td>
								<td class="footer__item-lead"><a href="tel:0969247700">0969−24−7700</a></td>
							</tr>
							<tr>
								<td class="footer__item-ttl">医師</td>
								<td class="footer__item-lead">中村弓美・中村英一</td>
							</tr>
						</tbody>
					</table>
				</figure>
			</div>
			<div class="footer__item">
				<div id="access" class="util-ttl-head">
					<h3>アクセス</h3>
				</div>
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3366.2735362840567!2d130.1981069155553!3d32.46537470711643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x353fee46dfdeb35f%3A0xa81fe1e0947243f4!2z5Yy755mC5rOV5Lq6IOaJtuahkeS8miDljYHkuIflsbHjgq_jg6rjg4vjg4Pjgq8!5e0!3m2!1sja!2sjp!4v1623382428086!5m2!1sja!2sjp"
					height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
		<div class="footer__item-bottom">
			<div class="footer__item">
				<div class="util-ttl-head">
					<h3><a href="https://nkodomo.com">中村こども・内科クリニック</a></h3>
				</div>
				<p>
					<a href="https://nkodomo.com">
						<img class="footer-clinic"
							src="<?php echo get_theme_file_uri(); ?>/assets/images/footer_nakamura-kodomo-clinic (1).jpg" alt="">
					</a>
				</p>
			</div>
			<div class="footer__item">
				<div class="util-ttl-head">
					<h3>休診情報</h3>
				</div>
				<div>
					<?php if( get_field('closed-days-image', 854) ): ?>
					<img src="<?php the_field('closed-days-image', 854); ?>" />
					<?php endif; ?>
				</div>
				<!-- <p class="footer__item-tgmap"> -->
				<!-- <iframe style="border-width: 0;"
						src="https://calendar.google.com/calendar/b/2/embed?title=%E5%8D%81%E4%B8%87%E5%B1%B1%E3%82%AF%E3%83%AA%E3%83%8B%E3%83%83%E3%82%AF%E3%80%80%E8%A8%BA%E7%99%82%E3%81%A8%E4%BC%91%E8%A8%BA%E6%97%A5%E3%81%AE%E3%81%8A%E7%9F%A5%E3%82%89%E3%81%9B&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=jmyc2006%40gmail.com&amp;color=%232952A3&amp;src=tu9ngfa2df3ka0pcpbji03saf8%40group.calendar.google.com&amp;color=%235F6B02&amp;src=t5rtokkni79gaiqe09u2g5gnog%40group.calendar.google.com&amp;color=%23711616&amp;src=cifgo0evunbfd7ip6v2t0p4alg%40group.calendar.google.com&amp;color=%23875509&amp;src=36c682hevrloqbu0alj0lhp5fc%40group.calendar.google.com&amp;color=%235F6B02&amp;src=ja.japanese%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FTokyo"
						frameborder="0" scrolling="no"></iframe> -->
				<!-- </p> -->
			</div>
		</div>
	</div>
	<!--footer__items-->
</section>
<!--footer-container-->

</div><!-- /.wrapper -->
<footer class="footer">
	<a href="#" class="footer__totopLink"></a>
	<div class="footer__inner">
		<div class="footer-box">
		</div>
		<div class="footer__company">
			<small class="footer__copyright">&copy; copyright 2006 十万山クリニック</small>
		</div>
	</div>
</footer><!-- /.footer -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXv
ZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/swiper.min.js" defer></script>
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/cookey.js" defer></script>
<script src="<?php echo get_theme_file_uri(); ?>/assets/js/script.js" defer></script>

<?php wp_footer(); ?>
</body>

</html>
