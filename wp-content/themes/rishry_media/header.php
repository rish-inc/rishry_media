<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Rishry ファッション＆メイク初心者さんのための情報サイト">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.ico">

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

    <body class="home">
        <header class="l-header">
            <div class="l-header__lead">
                <p><?php bloginfo( 'description' ); ?></p>
            </div>
            <div class="p-head-pc">
                <div class="p-head-flex-sp">
                    <button class="p-hamburger-menu is-hamburger">
                        <span>メニュー展開ボタン</span>
                    </button>
                    <h1 class="logo p-head-flex-sp__logo"><a href="/"><img src="./images/logo.png" alt="Rishry ロゴ"></a></h1>
                </div>
                <div class class="c-dorower-bg-sp"></div>
                <div class="p-head-nav-flex">
                    <div class="p-head-nav">
                        <nav class="p-head-nav__navigation">
                            <ul class="p-head-nav__navigation__menu">
                                <li><a href="/">HOME</a></li>
                                <li><a href="#">ABOUT</a></li>
                                <li><a href="#">NEWS</a></li>
                                <li><a href="#">BRAND</a></li>
                                <li><a href="#">FASHION</a></li>
                                <li><a href="./contact.html">CONTACT</a></li>
                                <li><a href="#">PRIVACY POLICY</a></li>
                            </ul>
                        </nav>
                        <nav class="p-head-nav__sns">
                            <ul class="p-head-nav__icon c-sns__icon">
                                <li class="twitter"><a href="#"><img src="images/sns/t_logo.png" alt="twitter"></a></li>
                                <li class="facebook"><a href="#"><img src="images/sns/f_logo.png" alt="facebook"></a></li>
                                <li class="instagram"><a href="#"><img src="images/sns/i_logo.png" alt="instagram"></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="p-head-nav-flex__search">
                        <form class="c-search-window" action="/" name="search-form" method="post">
                            <input type="text" name="search" placeholder="Search">
                            <button type="submit" class="c-search-window__button" aria-label="search" value="">
                                <img class="c-search-window__img" src="./images/search/search.svg" alt="">
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </header>