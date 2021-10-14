<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Rishry ファッション＆メイク初心者さんのための情報サイト">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/common/ico/favicon.ico">

        <!-- css -->
        <link rel="stylesheet" href="css/reset.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title><?php bloginfo( 'name' ); ?></title>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- <script src="./js/jquery-3.6.0.min.js"></script> -->
        <script src="./js/hamburger.js"></script>
        <script src="./js/dorower.js"></script>
    </head>

    <body class="home" <?php body_class(); ?>>
        <header class="l-header">
            <div class="l-header__catchphrase">
                <p><?php bloginfo( 'description' ); ?></p>
            </div>
            <div class="p-head-pc">
                <div class="c-head-flex-sp">
                    <button class="p-hamburger is-hamburger">
                        <span>メニュー展開ボタン</span>
                    </button>
                    <h1 class="logo c-head-flex-sp__logo"><a href="/"><img src="./images/logo.png" alt="Rishry ロゴ"></a></h1>
                </div>
                <div class class="c-dorower-bg-sp"></div>
                <div class="p-head-nav-flex">
                    <div class="p-head-nav">
                        <?php wp_nav_menu(); ?>
                        <nav class="p-head-nav__sns">
                            <ul class="p-head-nav__icon c-sns__icon">
                                <li class="twitter"><a href="#"><img src="images/sns/t_logo.png" alt="twitter"></a></li>
                                <li class="facebook"><a href="#"><img src="images/sns/f_logo.png" alt="facebook"></a></li>
                                <li class="instagram"><a href="#"><img src="images/sns/i_logo.png" alt="instagram"></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="p-head-nav-flex__search">
                        <?php get_search_form(); ?>
                    </div>
                </div>
            </div>
        </header>