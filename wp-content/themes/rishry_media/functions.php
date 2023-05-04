<?php
//develop mode config
define( "IS_VITE_DEVELOPMENT", true );

//define
define( 'DIST_DEF', 'dist' );
define( 'DIST_URI',  get_template_directory_uri() . '/' . DIST_DEF );
define( 'DIST_PATH', get_template_directory()	 . '/' . DIST_DEF );

define( 'JS_DEPENDENCY', array() ) ; // array( 'jquery' ) as example
define( 'JS_LOAD_IN_FOOTER', true ) ; // load scripts in footer?

define( 'VITE_SERVER', 'http://localhost:3000' );
define( "VITE_ENTRY_POINT", "/main.js" );

function cors_http_header() {
	header( "Access-Control-Allow-Origin: *" );
}
add_action( 'send_headers', 'cors_http_header' );

/*
 * init theme support
 */
function custom_theme_support()
{
	add_theme_support( 'menus' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array (
		'header-menu'  => 'header-menu',
		'sidebar-menu' => 'sidebar-menu',
		'footer-menu'  => 'footer-menu',
		'sns-list'     => 'sns-menu',
	));
}
add_action('after_setup_theme', 'custom_theme_support');

add_action( 'wp_enqueue_scripts', function() {
	if ( defined( 'IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true ) {
		//develop mode
		function vite_head_module_hook() {
			echo '<script type="module" crossorigin src="' . VITE_SERVER . VITE_ENTRY_POINT . '"></script>';
		}
		add_action( 'wp_footer', 'vite_head_module_hook' );
	} else {
		// production mode, 'npm run build' must be executed in order to generate assets

		// read manifest.json to figure out what to enqueue
		$manifest = json_decode( file_get_contents( DIST_PATH . '/manifest.json'), true );
		// is ok
		if ( is_array( $manifest ) ) {

			// get first key, by default is 'main.js'
			$manifest_key = array_keys( $manifest );

			if ( isset( $manifest_key[0] ) ) {
				// enqueue CSS files
				foreach( @$manifest["main.css"] as $css_file ) {
					wp_enqueue_style( 'main', DIST_URI . '/' . $css_file );
				}

				// enqueue main JS file
				$js_file = @$manifest["main.js"]['file'];
				if ( ! empty( $js_file ) ) {
					wp_enqueue_script( 'main', DIST_URI . '/' . $js_file, JS_DEPENDENCY, '', JS_LOAD_IN_FOOTER );
				}
			}
		}
	}
} );


// function rishrymedia_title( $title ) {
//	 if ( is_front_page() && is_home() ) {
//		 $title = get_bloginfo( 'name', 'display' );
//	 } elseif ( is_singular() ) {
//		 $title = single_post_title( '', false );
//	 }
//	 return $title;
// }
// add_filter( 'pre_get_document_title', 'rishrymedia_title' );

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
 * the_posts_pagination()内のクラス名の変更
 */
function custom_the_posts_pagination( $template ) {
	$template = '
	<nav class="c-pagination u-boundary-line" role="navigation">
		<ul class="c-pagination__list">%3$s</ul>
	</nav>';
	return $template;
}
add_filter( 'navigation_markup_template', 'custom_the_posts_pagination' );

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
