<?php
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); //アイキャッチ表示
    register_nav_menus( array (
		'header-menu'   => 'header-menu',
		'footer-menu' => 'footer-menu'
    ));


function rishrymedia_title( $title ) {
    if ( is_front_page() && is_home() ) { //トップページなら
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) { //シングルページなら
        $title = single_post_title( '', false );
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'rishrymedia_title' );


/*
 * スタイルとスクリプトの読み込み
 */
function rishrymedia_scripts() {
    wp_enqueue_style( 'google-web-style',);
    wp_enqueue_style( 'reset', get_theme_file_uri( '/src/styles/foundation/reset.min.css' ), array(), '1.0.0' );
    wp_enqueue_style( 'style', get_theme_file_uri( '/css/style.css' ), array(), '1.0.0' );
    wp_enqueue_style( 'hamburger', get_theme_file_uri( '/src/scripts/hamburger.js' ), array(), '1.0.0', true );
    wp_enqueue_style( 'dorower', get_theme_file_uri( '/src/scripts/dorower.js' ), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'rishrymedia_scripts' );