<?php
//develop mode config
define( "IS_VITE_DEVELOPMENT", false );

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
	add_theme_support( 'custom-background' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', [ 'search-form' ] );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'automatic-feed-links' );
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
	$template =
	'<nav class="c-pagination u-boundary-line %1$s" role="navigation">
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

/*
 * OGPタグ/Twitterカード設定を出力
 */
function my_meta_ogp() {
	if( is_front_page() || is_home() || is_singular() ) {
		global $post;
		$ogp_title = '';
		$ogp_descr = '';
		$ogp_url = '';
		$ogp_img = '';
		$insert = '';

	  if( is_singular() ) { //記事＆固定ページ
			setup_postdata($post);
			$ogp_title = $post->post_title;
			$ogp_descr = mb_substr(get_the_excerpt(), 0, 100);
			$ogp_url = get_permalink();
			wp_reset_postdata();
	  } elseif ( is_front_page() || is_home() ) { //トップページ
			$ogp_title = get_bloginfo('name') . ' メディア';
			$ogp_descr = get_bloginfo('description');
			$ogp_url = home_url();
		}

		//og:type
		$ogp_type = ( is_front_page() || is_home() ) ? 'website' : 'article';

		//og:image
		if ( is_singular() && has_post_thumbnail() ) {
			$ps_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
			$ogp_img = $ps_thumb[0];
		} else {
		$ogp_img = 'http://rishrymedia.local/wp-content/uploads/2023/05/rishry.png';
		}

		//出力するOGPタグをまとめる
		$insert .= '<meta property="og:title" content="'.esc_attr($ogp_title).'" />' . "\n";
		$insert .= '<meta property="og:description" content="'.esc_attr($ogp_descr).'" />' . "\n";
		$insert .= '<meta property="og:type" content="'.$ogp_type.'" />' . "\n";
		$insert .= '<meta property="og:url" content="'.esc_url($ogp_url).'" />' . "\n";
		$insert .= '<meta property="og:image" content="'.esc_url($ogp_img).'" />' . "\n";
		$insert .= '<meta property="og:site_name" content="'.esc_attr(get_bloginfo('name')).'" />' . "\n";
		$insert .= '<meta name="twitter:card" content="summary_large_image" />' . "\n";
		$insert .= '<meta name="twitter:site" content="" />' . "\n";
		$insert .= '<meta property="og:locale" content="ja_JP" />' . "\n";

		echo $insert;
	}
}
add_action( 'wp_head','my_meta_ogp' ); //headにOGPを出力

function add_additional_class_on_li( $classes, $item, $args )
{
  if ( isset( $args->add_li_class ) ) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter( 'nav_menu_css_class', 'add_additional_class_on_li', 1, 3 );


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

register_block_style(
    'core/image', // ブロック名
    [
        'name'         => 'shadow', // スタイルで付けるクラスに使う名前
        'label'        => '影付き',
        'inline_style' => '.is-style-shadow {
            box-shadow: 10px 5px 5px black;
        }', // 追加するCSS
    ]
);

add_action( 'init', function()  {
	register_block_pattern(
		'rishry_media/my-awesome-pattern',
		array(
			'title'    => __( 'Two buttons', 'rishry_media' ),
			'content'  => "<!-- wp:buttons  -->
					<div class=\"wp-block-buttons\">
					<!-- wp:button -->
					<div class=\"wp-block-button\">
					<a class=\"wp-block-button__link\">" . esc_html__( 'Button One', 'rishry_media' ) . "</a>
					</div>
					<!-- /wp:button -->
					<!-- wp:button -->
					<div class=\"wp-block-button is-style-outline\">
					<a class=\"wp-block-button__link has-text-color\">" . esc_html__( 'Button Two', 'rishry_media' ) . "</a>
					</div>
					<!-- /wp:button --></div>
					<!-- /wp:buttons -->",
			'categories' => array( 'my-cat' ),
			)
		);
	});

function wpdocs_theme_add_editor_styles() {
	add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );

// 検索で投稿記事のみを対象にする
function SearchFilter( $query ) {
	if ( $query -> is_search ) {
		$query -> set( 'post_type', 'post' );
	}
	return $query;
}
add_filter( 'pre_get_posts', 'SearchFilter' );
