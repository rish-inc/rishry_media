<?php
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' ); //アイキャッチ表示
	register_nav_menus( array (
		'header-menu' => 'header-menu',
		'footer-menu' => 'footer-menu',
		'sns-list' => 'sns-list'
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
	wp_enqueue_style( 'hamburger', get_theme_file_uri( '/src/scripts/hamburger.js' ), array( 'jquery' ), '1.0.0', true );
	wp_enqueue_style( 'drawer', get_theme_file_uri( '/src/scripts/drawer.js' ), array( 'jquery' ), '1.0.0', true );
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
 * ウィジェットを追加
 */
function rishrymedia_widgets_init() {
	register_sidebar(
		array(
			'name' => 'サイドバーウィジェット',
			'id' => 'category_widget',
			'description' => 'サイドバー用ウィジェットです',
			'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget' => '</li>',
			'before_title' => '<h3 class="p-side__title c-title--side c-headline-border">',
			'after_title' => '</h3>\n',
		)
	);
}
add_action( 'widgets_init', 'rishrymedia_widgets_init' );


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
 * li a に任意の class を追加
 */
// wp_nav_menuのliにclass追加
function rishrymedia_additional_class_on_li( $classes, $item, $args ) {
	if (isset( $args -> add_li_class )) {
		$classes['class'] = $args -> add_li_class;
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'rishrymedia_additional_class_on_li', 1, 3 );

// wp_nav_menuのaにclass追加
function rishrymedia_additional_class_on_a($classes, $item, $args) {
	if (isset( $args -> add_a_class )) {
		$classes['class'] = $args -> add_a_class;
	}
	return $classes;
}
add_filter( 'nav_menu_link_attributes', 'rishrymedia_additional_class_on_a', 1, 3 );


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
