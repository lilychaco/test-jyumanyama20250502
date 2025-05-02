<?php get_header(); ?>
<div id="splash">
<div id="splash-logo">小児科・内科<br> - 十万山クリニック - </div>
</div>  
<body>    
    

        <div id="js-mv" class="mv mv__inner">
            <div class="mv__box">
                <div class="mv__top">
                    <h2 class="mv__ttl">
                        <img class="wow fadeInLeft" data-wow-duration="2s" src="<?php echo get_theme_file_uri(); ?>/assets/img/mv-txt-top.png" alt="">
                    </h2>
                    <p class="mv__txt">
                        <img class="wow fadeInLeft" data-wow-duration="3s" src="<?php echo get_theme_file_uri(); ?>/assets/img/mv-txt-bottom.png" alt="">
                    </p>
                </div>
                <div class="mv__content">
                    <div class="mv__img  wow fadeInRight" data-wow-duration="3s"></div>
                </div>
            </div>
        </div><!-- /.mv -->

        <main>
            <section id="line" class="line inner wow fadeInUp" data-wow-delay=".4s">
                <div class="section__inner">
                    <h2 class="util-ttl">公式LINE</h2>
                        <p class="line__txt">休日小児科当番医のお知らせや、土曜日診療のお知らせ、診療時間の変更などが届きます。</p>
                        <p class="line__txt">定期ワクチンや、コロナワクチンについてもお知らせしています。</p>
                        <p class="line__txt">コロナ陽性または濃厚接触者で自宅療養しておられ、病状に不安がある方は、LINE（トーク画面）で、話しかけてください。個別チャットで対応いたします。</p>
                        <!-- <p class="line__txt">LINE公式にご登録いただき、スマホ画面のメニューからお申込みください。</p> -->
                    </p>
                    <div class="line__box">
                        <div class="line__box-left">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/img/line-icon.png" alt="">
                        </div>
                        <div class="line__box-right">
                            <p class="line__copy">＼　QRコードを読み込んで登録　／</p>
                            <figure>
                                <a href="https://liff.line.me/1656076666-PD64a1Gm/landing?follow=%40190ptcol&amp;lp=Qbezaj&amp;liff_id=1656076666-PD64a1Gm">
                                <img src="https://scdn.line-apps.com/n/line_add_friends/btn/ja.png" alt="友だち追加" height="36" border="0"></a></figure>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.line -->
            <section class="info inner  wow fadeInUp"data-wow-delay=".4s">
                <div class="section__inner">
                    <h2 id="guide" class="util-ttl">診療案内</h2>
                    <ul class="card__list">
                        <li class="card__item">
                            <h3 class="card__item-head">小児科診療</h3>
                            <div class="card__item-img">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/service_01.jpeg" alt="">
                            </div>
                            <p class="card__item-txt">
                                乳児から小中高生まで、感染症を中心に診療しています。小さな外傷や熱傷の処置もできます。
                            </p>
                            <div class="btns-center">
                                <a href="/kodomo/" class="rounded-btn deg rounded-btn--large">詳しくはこちら</a>
                            </div>
                        </li>
                        <li class="card__item">
                            <h3 class="card__item-head">予防接種</h3>
                            <div class="card__item-img">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/service_02.jpeg" alt="">
                            </div>
                            <p class="card__item-txt">
                                天草市の定期予防接種の指定医療機関です。高齢者の肺炎球菌ワクチンもできます。
                            </p>
                            <div class="btns-center">
                                <a href="/yobou/" class="rounded-btn deg rounded-btn--large">詳しくはこちら</a>
                            </div>
                        </li>
                        <li class="card__item">
                            <h3 class="card__item-head">乳幼児健診</h3>
                            <div class="card__item-img">
                                <img src="<?php echo get_theme_file_uri(); ?>/assets/img/service_03.jpeg" alt="">
                            </div>
                            <p class="card__item-txt">
                                乳児前期・後期健診、１歳半健診、3歳半健診を、市の委託を受け、個別に健診しております。
                            </p>
                            <div class="btns-center">
                                <a href="/infants/" class="rounded-btn deg rounded-btn--large">詳しくはこちら</a>
                            </div>
                        </li>
                    </ul>
                    
                    <div class="btns-center">
                        <span class="sp btn-copy">＼ネットで簡単5分／</span>
                        <a href="https://park.paa.jp/park2/clinics/1460/businesses/01" target="_blank" rel="noopener" class="rounded-btn rounded-btn--large btn-pink">
                            <span class="btn-deg1"></span>
                            <span class="btn-deg2"></span>
                            <span class="btn-deg3"></span>

                            <span class="pc">ネットで簡単</span><br class="pc">
                            受付予約<span class="sp">はこちら ▶︎</span>
                        </a>
                    </div>
                </div>
            </section>
            <!--info-->
            <section id="sch" class="schedule inner wow fadeInUp"data-wow-delay=".4s">
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
                                <td class="sat">○<div class="huteiki">不定期</div></td><!-- 土 -->
                            </tr>
                            <tr>
                                <td class="light">13:30 ~ <br class="sp">14:30</td>
                                <td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/img/icon_yobou-sessyu.png"></td><!-- 月 -->
                                <td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/img/icon_yobou-sessyu.png"></td><!-- 火 -->
                                <td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/img/icon_yobou-sessyu.png"></td><!-- 水 -->
                                <td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/img/icon_yobou-sessyu.png"></td><!-- 木 -->
                                <td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/img/icon_yobou-sessyu.png"></td><!-- 金 -->
                                <td></td><!-- 土 -->
                            </tr>
                            <tr>
                                <td class="light">14:30 ~<br class="sp"> 15:30</td>
                                <td>○</td><!-- 月 -->
                                <td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/img/icon_kenshin.png"></td><!-- 火 -->
                                <td>○</td><!-- 水 -->
                                <td><img class="icon-clinic" src="<?php echo get_theme_file_uri(); ?>/assets/img/icon_kenshin.png"></td><!-- 木 -->
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
                            <img class="pc" src="<?php echo get_theme_file_uri(); ?>/assets/img/table_shinryou.png" alt="">
                            <img class="sp" src="<?php echo get_theme_file_uri(); ?>/assets/img/table-sp_shinryou.png" alt="">
                        </div>
                        <div class="table__icon">
                            <img class="pc" src="<?php echo get_theme_file_uri(); ?>/assets/img/table_yobou-sessyu.png" alt="">
                            <img class="sp" src="<?php echo get_theme_file_uri(); ?>/assets/img/table-sp_yobou-sessyu.png" alt="">
                        </div>
                        <div class="table__icon">
                            <img class="pc" src="<?php echo get_theme_file_uri(); ?>/assets/img/table_kenshin.png" alt="">
                            <img class="sp" src="<?php echo get_theme_file_uri(); ?>/assets/img/table-sp_kenshin.png" alt="">
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
                        <p class="g-map">
                            <iframe style="border-width: 0;"
                                src="https://calendar.google.com/calendar/b/2/embed?title=%E5%8D%81%E4%B8%87%E5%B1%B1%E3%82%AF%E3%83%AA%E3%83%8B%E3%83%83%E3%82%AF%E3%80%80%E8%A8%BA%E7%99%82%E3%81%A8%E4%BC%91%E8%A8%BA%E6%97%A5%E3%81%AE%E3%81%8A%E7%9F%A5%E3%82%89%E3%81%9B&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=jmyc2006%40gmail.com&amp;color=%232952A3&amp;src=tu9ngfa2df3ka0pcpbji03saf8%40group.calendar.google.com&amp;color=%235F6B02&amp;src=t5rtokkni79gaiqe09u2g5gnog%40group.calendar.google.com&amp;color=%23711616&amp;src=cifgo0evunbfd7ip6v2t0p4alg%40group.calendar.google.com&amp;color=%23875509&amp;src=36c682hevrloqbu0alj0lhp5fc%40group.calendar.google.com&amp;color=%235F6B02&amp;src=ja.japanese%23holiday%40group.v.calendar.google.com&amp;color=%23125A12&amp;ctz=Asia%2FTokyo"
                                width="700" height="600" frameborder="0" scrolling="no"></iframe>
                        </p>
                        <p class="kousin">2020年3月30日 更新</p>
                    </div>
                </div>
            </section>
            <!--schedule-->
            <section class="about inner wow fadeInUp"data-wow-delay=".4s">
                <div class="about__inner">
                    <h2 class="util-ttl">十万山クリニックに<br class="sp">ついて</h2>
                    <h3>– 熊本県天草市の<br class="sp">小児科クリニック –</h3>
                    <div class="about__txt">
                        <p>十万山は、天草市の中央にある小高い山です。<br>
                            頂上からは、天草市本渡町近隣を四方に見渡すことができます。<br>
                            天草地域の人、みんなが知ってる「十万山」から、名前をもらいました。
                        </p>
                    </div>
                    <div class="about-btn">
                        <p>ドクタースタッフの<br>
                            紹介です
                        </p>
                        <a href="<?php echo home_url('/about'); ?>"><span>詳しくはこちら</span></a>
                    </div>
                </div>
            </section>
            <!--about-->
            <section class="news inner wow fadeInUp"data-wow-delay=".4s">
                <div class="section__inner">
                    <h2 class="util-ttl">お知らせ</h2>
                    <?php
                        $args = [
                            'post_type' => 'news',
                            'post_per_page' => '3',
                        ]; 
                        $my_query = new WP_Query($args);
                    ?>
                    <?php if ($my_query->have_posts()):  ?>
                    <ul class="news__lists">
                        <?php while($my_query->have_posts()): $my_query->the_post(); ?>
                            <li class="news__list">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="news__time">
                                        <time datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                    </div>
                                    <p>
                                    <?php the_title();?>
                                    </p>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                    <?php else:
                      '<p>まだ投稿がありません。</p>'; 
                     endif; wp_reset_postdata(); ?>
                    
                    <a href="<?php echo home_url('news/') ?>" class="news-link">&raquo;これまでのお知らせ一覧はこちら</a>
                </div>
            </section>
            <!--news-->
            <section class="blog inner wow fadeInUp"data-wow-delay=".4s">
                <div class="section__inner">
                    <h2 class="util-ttl">院長のブログ</h2>
                    <ul class="blog__list">
                        <?php if(have_posts()): ?>
                            <?php while(have_posts()): the_post(); ?>
                         <li class="blog__list-item">
                            <a href="<?php the_permalink(); ?>" class="blog__card">
                                <div class="blog__card-thumb">
                                <?php
                                    if (has_post_thumbnail() ) {
                                    // アイキャッチ画像が設定されてれば大サイズで表示
                                    the_post_thumbnail('large');
                                    } else {
                                    // なければnoimage画像をデフォルトで表示
                                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/noimg.png" alt="">';
                                    }
                                    ?>
                                </div>
                                <div class="blog__card-ttl"><?php the_title(); ?></div>
                                <p class="blog__card-meta">
                                <?php echo get_flexible_excerpt(30); ?>    
                                </p>
                                <p class="blog__card-datetime"><time datetime=”<?php the_time('c'); ?>”><?php the_time('Y/n/j'); ?></time></p>
                            </a>
                            <div class="btns-center">
                                <a href="<?php the_permalink(); ?>" class="rounded-btn deg rounded-btn--large">詳しくはこちら</a>
                            </div>
                        </li>
                        <?php endwhile; endif; ?>
                    </ul>
                    <a href="<?php the_time('Y/n/'); ?>" class="news-link">&raquo;これまでのブログ一覧はこちら</a>
                </div>
            </section>


<?php get_footer(); ?>