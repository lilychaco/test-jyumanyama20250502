<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>十万山クリニック</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
		integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/animation.css">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo get_theme_file_uri(); ?>/assets/css/button.css">
	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<header id="js-header" class="header">
			<div class="header__inner">
				<div class="header__icon">
					<img class="drawer-pc" src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.png" alt="">
				</div>
				<h1 class="header__title">
					<a class="header__home" href="/">
						<span>小児科・内科</span><br class="sp">
						十万山クリニック
						<span class="h-comp__1"></span>
						<span class="h-comp__2"></span>
						<span class="h-comp__3"></span>
					</a>
				</h1>
				<button id="js-toggle" class="header__burger" aria-label="menu">
					<span class="header__burger-inline"></span>
					<span class="header__burger-inline"></span>
					<span class="header__burger-inline"></span>
				</button>
				<ul class="header__nav-list">
					<li class="header__nav-item"><a href="<?php echo home_url('/') ?>" class="header__nav-link js-navLink"><i
								class="fas fa-home"></i></a></li>
					<li class="header__nav-item"><a href="<?php echo home_url('/guide') ?>"
							class="header__nav-link js-navLink">診療案内</a></li>
					<li class="header__nav-item"><a href="<?php echo home_url('/schedule') ?>"
							class="header__nav-link js-navLink">診療日時</a></li>
					<li class="header__nav-item"><a href="#access" class="header__nav-link js-navLink">アクセス</a></li>
				</ul>
				<div class="header__buttons">
					<a href=" https://park.paa.jp/park2/clinics/1460/businesses/01" target="_blank" rel="noopener"
						class="header__button-tel">
						ネットで受付
						<span>▶︎ アイチケットへ</span>
					</a>
					<a href="https://lin.ee/kRbXNLH" target="_blank" rel="noopener" class="header__button-line">
						LINEに登録
						<span>▶︎ 公式LINE</span>
					</a>
				</div>
			</div>

			<div id="js-overlay" class="header__overlay"></div>
		</header>

		<!-- <nav class="header__nav--sp drawer-sp">
			<div class="header__home" href="<?php echo home_url('/'); ?>">
				<div class="header__icon--sp">
					<a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.png"
							alt="十万山クリニックのロゴ"></a>
				</div>
				<h1 class="header__title header__title-sub drawer-sp">
					<a href="<?php echo home_url('/'); ?>">
						<span class="">小児科・内科</span>
						十万山クリニック
					</a>
				</h1>
			</div>
		</nav> -->