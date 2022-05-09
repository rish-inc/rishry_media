<?php
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' ); //アイキャッチ表示
	register_nav_menus( array (
		'header-menu' => 'header-menu',
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
	wp_enqueue_style( 'style', get_theme_file_uri( '/css/main.css' ), array(), '1.0.0' );
	wp_enqueue_style( 'hamburger', get_theme_file_uri( '/src/scripts/hamburger.js' ), array(), '1.0.0', true );
	wp_enqueue_style( 'dorower', get_theme_file_uri( '/src/scripts/dorower.js' ), array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'rishrymedia_scripts' );

/*
 * SVG ファイルをメディアライブラリで表示
 */
add_filter( 'upload_mimes', function ( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
});

add_filter( 'manage_media_columns', function ( $columns ) {
	echo '<style>.media-icon img[src$=".svg"]{width:100%;}</style>';
	return $columns;
});

/*
 * 「前へ」「次へ」に class 名を付与
 */
function add_prev_post_link_class( $output ) {
	return str_replace( '<a href=', '<a class="p-link--page__btn__prev" href=', $output ); // 前の記事へのリンク
}
add_filter( 'previous_post_link', 'add_prev_post_link_class' );
function add_next_post_link_class( $output ) {
	return str_replace( '<a href=', '<a class="p-link--page__btn__next" href=', $output ); // 次の記事へのリンク
}
add_filter( 'next_post_link', 'add_next_post_link_class' );


/*
 * アイキャッチ画像設定
 */
add_filter( 'post_thumbnail_html', 'custom_attribute' );
function custom_attribute( $html ) {
	// class を削除
	$html = preg_replace( '/(width|height)="\d*"\s/', '', $html );
	return $html;
}


/*
 * カテゴリーを取得
 */
// function rishrymedia_category() {
// 	$cats = get_the_category();
// 	if( $cats ) : // $cats が空ではない場合
// 		foreach( $cats as $cat ) :
// 			echo esc_html( $cat -> name ); // カテゴリー名を出力
// 		endforeach;
// 	endif;
// }
