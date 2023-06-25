<?php

/**
 * my_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package my_theme
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function my_theme_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on my_theme, use a find and replace
		* to change 'my_theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('my_theme', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'my_theme'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'my_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'my_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function my_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('my_theme_content_width', 640);
}
add_action('after_setup_theme', 'my_theme_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function my_theme_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'my_theme'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'my_theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'my_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
// function my_theme_scripts() {
// 	wp_enqueue_style( 'my_theme-style', get_stylesheet_uri(), array(), _S_VERSION );
// 	wp_style_add_data( 'my_theme-style', 'rtl', 'replace' );

// 	wp_enqueue_script( 'my_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}
// }
// add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

// cssとjsの読み込み。トップページとそれ以外で条件分岐
function my_enqueue_styles_and_scripts()
{
	// wp_enqueue_style('google-fonts_style1', 'https://gmpg.org/xfn/11', array(), '1.0', 'all');
	// 出力時にはcrossorigin属性を追加する
	// wp_enqueue_style('google-fonts_style2', 'https://fonts.gstatic.com', array(), '1.0', 'all');
	wp_enqueue_style('google-fonts_style3', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700&family=Noto+Serif+JP:wght@400;500;600;700&display=swap', array(), '1.0', 'all');
	wp_enqueue_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0', 'all');
	wp_enqueue_style('myguten', get_template_directory_uri() . '/css/myguten.css', array(), '1.0', 'all');
	wp_enqueue_style('normalize', get_template_directory_uri() . '/css/vendors/normalize.css', array(), '1.0', 'all');
	wp_enqueue_style('css-reset', get_template_directory_uri() . '/css/vendors/css-reset.css', array(), '1.0', 'all');
	wp_enqueue_style('swiper-bundle.min', get_template_directory_uri() . '/css/vendors/swiper-bundle.min.css', array(), '1.0', 'all');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');

	// 条件分岐してスクリプトのパスを定義
	if (is_front_page()) {
		$scriptPath = '/scripts/main.js';
	} else {
		$scriptPath = '/scripts/sub.js';
	};
	wp_enqueue_script('scroll', get_template_directory_uri() . '/scripts/libs/scroll.js', array(), '1.0', 'all');
	wp_enqueue_script('tab', get_template_directory_uri() . '/scripts/libs/tab.js', array(), '1.0', 'all');
	wp_enqueue_script('mocile-menu-drop', get_template_directory_uri() . '/scripts/libs/mobile-menu-drop.js', array(), '1.0', 'all');
	wp_enqueue_script('swiper', get_template_directory_uri() . '/scripts/vendors/swiper-bundle.min.js', array(), '1.0', 'all');
	wp_enqueue_script('hero-slider', get_template_directory_uri() . '/scripts/libs/hero-slider.js', array(), '1.0', 'all');
	wp_enqueue_script('main', get_template_directory_uri() . $scriptPath, array(), '1.0', 'all');
};

add_action('wp_enqueue_scripts', 'my_enqueue_styles_and_scripts');
// cssとjsの読み込みここまで

// ブロックエディタ用のスクリプトの読み込み
function myguten_enqueue()
{
	wp_enqueue_script('myguten-script', get_template_directory_uri() . '/scripts/libs/myguten.js', array(), '1.0', 'all');
}

add_action('enqueue_block_editor_assets', 'myguten_enqueue');

// jsへのdiffer属性の追加
add_filter('script_loader_tag', 'add_defer', 10, 2);
function add_defer($tag, $handle)
{
	// 識別名がmain_script以外はそのまま返却
	if ($handle !== 'main') {
		return $tag;
	}
	// deferを追加して返却する
	return str_replace(' src=', ' defer src=', $tag);
}

// cssへのcrossorigin属性の追加
// add_filter('style_loader_tag', 'add_crossorigin', 10, 2);
// function add_crossorigin($tag, $handle)
// {
// 	// 識別名がmain_script以外はそのまま返却
// 	if ($handle !== 'google-fonts_style2') {
// 		return $tag;
// 	}
// 	// crossorigin属性を追加して返却する
// 	return str_replace(' rel=', ' crossorigin rel=', $tag);
// }

// アイキャッチ画像の有効化
add_action('init', function () {
	add_theme_support('post-thumbnails');
});

//カスタム投稿の作成
add_action('init', function () {
	register_post_type('news', [
		'label' => 'お知らせ',
		'public' => true,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-bell',
		'supports' => ['thumbnail', 'title', 'editor', 'page-attributes'],
		'has_archive' => true,
		'hierarchical' => true,
		'show_in_rest' => true
	]);
});

//  カスタム投稿に分類を追加
register_taxonomy('genre', 'news', [
	'label' => 'お知らせ種別',
	'hierarchical' => true,
	'show_in_rest' => true,
]);

// カテゴリーページでのメインループの表示件数を指定
function custom_loop_rules($query)
{
	// 管理画面や、メインクエリ以外の処理に影響を及ぼさないように
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	// カテゴリーのアーカイブページ
	if ($query->is_category()) {
		$query->set('posts_per_page', 6); // 1ページあたりの表示件数を6件に変更
	}
}
add_action('pre_get_posts', 'custom_loop_rules');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
