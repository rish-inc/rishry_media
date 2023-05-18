<!DOCTYPE html>
<html class="js-html_margin" lang="<?php language_attributes(); ?>">
	<head prefix="og:http://ogp.me/ns#">
		<meta charset="utf-8">
		<meta name="description" content="Rishry ファッション＆メイク初心者さんのための情報サイト">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?php echo esc_url( get_theme_file_uri( './assets/images/common/ico/favicon.ico' )); ?>">
		<title><?php bloginfo( 'name' ); ?></title>
		<?php wp_head(); ?>
	</head>

	<body class="home" <?php body_class(); ?>>
		<header class="l-header">
			<div class="l-header__catchphrase">
				<p>私らしく生きるためのライフメディア</p>
			</div>
			<div class="p-head-pc">
				<div class="c-header-flex-beside">
					<button class="p-hamburger js-hamburger">
						<span>メニュー展開ボタン</span>
					</button>
					<h1 class="c-header-flex-beside__logo">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/logo.png' )); ?>" alt="Rishry ロゴ">
						</a>
					</h1>
				</div>
				<div class="c-dorower-bg-sp"></div>
				<div class="p-head-nav-flex">
					<div class="p-head-nav">
						<nav class="p-head-nav__navigation">
							<ul class="p-head-nav__navigation__menu">
								<?php wp_nav_menu( array(
									'theme_location' => 'header-menu',
									'items_wrap' => '%3$s',
									'container' => false
								) ); ?>
							</ul>
						</nav>
						<nav class="p-head-nav__sns">
							<ul class="p-head-nav__icon c-sns__icon">
								<li class="twitter"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( '/dist/assets/images/t_logo.png' )); ?>" alt="twitter"></a></li>
								<li class="facebook"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( '/dist/assets/images/f_logo.png' )); ?>" alt="facebook"></a></li>
								<li class="instagram"><a href="#"><img src="<?php echo esc_url( get_theme_file_uri( '/dist/assets/images/i_logo.png' )); ?>" alt="instagram"></a></li>
							</ul>
						</nav>
					</div>
					<div class="p-head-nav-flex__search">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</header>
