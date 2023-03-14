<?php

//develop mode config
define( "IS_VITE_DEVELOPMENT", true );

//define
define( 'DIST_DEF', 'dist' );
define( 'DIST_URI',  get_template_directory_uri() . '/' . DIST_DEF );
define( 'DIST_PATH', get_template_directory()     . '/' . DIST_DEF );

define( 'JS_DEPENDENCY', array() ) ; // array( 'jquery' ) as example
define( 'JS_LOAD_IN_FOOTER', true ) ; // load scripts in footer?

define('VITE_SERVER', 'http://localhost:3000');
define('VITE_ENTRY_POINT', '/main.js');

function cors_http_header() {
	header( "Access-Control-Allow-Origin: *" );
}
add_action( 'send_headers', 'cors_http_header' );

/*
 * init theme support
 */
add_theme_support( 'menus' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
register_nav_menus( array (
    'header-menu' => 'header-menu',
    'footer-menu' => 'footer-menu'
));

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
				var_dump( @$manifest[$manifest_key[0]] );
				// enqueue CSS files
				foreach( @$manifest[$manifest_key[0]]['css'] as $css_file ) {
					wp_enqueue_style( 'main', DIST_URI . '/' . $css_file );
				}
				
				// enqueue main JS file
				$js_file = @$manifest[$manifest_key[0]]['file'];
				if ( ! empty( $js_file ) ) {
					wp_enqueue_script( 'main', DIST_URI . '/' . $js_file, JS_DEPENDENCY, '', JS_LOAD_IN_FOOTER );
				}
			}
		}
	}
} );


function rishrymedia_title( $title ) {
    if ( is_front_page() && is_home() ) {
        $title = get_bloginfo( 'name', 'display' );
    } elseif ( is_singular() ) {
        $title = single_post_title( '', false );
    }
    return $title;
}
add_filter( 'pre_get_document_title', 'rishrymedia_title' );

/*
 * Read styles and Scripts
 */
// function rishrymedia_scripts() {
//     wp_enqueue_style( 'google-web-style',);
//     wp_enqueue_style( 'reset', get_theme_file_uri( '/src/styles/foundation/reset.min.css' ), array(), '1.0.0' );
//     wp_enqueue_style( 'style', get_theme_file_uri( '/css/main.css' ), array(), '1.0.0' );
//     wp_enqueue_style( 'hamburger', get_theme_file_uri( '/src/scripts/hamburger.js' ), array(), '1.0.0', true );
//     wp_enqueue_style( 'dorower', get_theme_file_uri( '/src/scripts/dorower.js' ), array(), '1.0.0', true );
// }
// add_action( 'wp_enqueue_scripts', 'rishrymedia_scripts' );