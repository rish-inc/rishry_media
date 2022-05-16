<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Rishry ファッション＆メイク初心者さんのための情報サイト">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/common/ico/favicon.ico">

		<!-- css -->
		<!-- <title><?php bloginfo( 'name' ); ?></title> -->

		<!-- jQuery -->
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
		<?php wp_head(); ?>
	</head>

	<body class="home" <?php body_class(); ?>>
		<header class="l-header">
			<div class="l-header__catchphrase">
				<p class="c-title--sub"><?php bloginfo( 'description' ); ?></p>
			</div>
			<div class="p-header">
				<div class="p-header__abreast">
					<button class="p-hamburger js-hamburger">
						<span>メニュー展開ボタン</span>
					</button>
					<h1 class="p-header__abreast__logo"><a href="/"><img class="c-img--logo" src="<?php echo get_theme_file_uri( '/images/logo.png' ); ?>" alt="Rishry ロゴ"></a></h1>
				</div>
				<div class class="c-drawer-bg-sp js-drawer-bg"></div>
				<div class="p-parallel--header">
					<div class="p-header--nav js-drawer">
						<nav class="p-header--nav__menu">
							<ul class="p-header--nav__menu__list">
								<?php wp_nav_menu( array(
									'theme_location' => 'header-menu',
									'items_wrap' => '%3$s',
									'container' => false
								) ); ?>
							</ul>
						</nav>
						<nav class="p-header--nav__sns">
							<ul class="p-header--nav__sns__icon">
								<?php if ( ssam_url()[ 'twitter' ] ) : ?>
									<li class="twitter"><a href="<?php echo esc_attr( ssam_url()['twitter'] ); ?>" target="_blank"><img class="c-sns--icon-drawer" src="<?php echo get_theme_file_uri( 'images/sns/t_logo.png' ); ?>" alt="Twitterアイコン"></a></li>
								<?php endif; ?>
								<?php if ( ssam_url()[ 'facebook' ] ) : ?>
									<li class="facebook"><a href="#"><img class="c-sns--icon-drawer" src="images/sns/f_logo.png" alt="Facebookアイコン"></a></li>
								<?php endif; ?>
								<?php if ( ssam_url()[ 'instagram' ] ) : ?>
									<li class="instagram"><a href="#"><img class="c-sns--icon-drawer" src="images/sns/i_logo.png" alt="Instagramアイコン"></a></li>
								<?php endif; ?>
							</ul>
						</nav>
					</div>
					<div class="p-parallel--header__search">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>
		</header>
