<?php
/**
 * ruletacasino functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ruletacasino
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}


add_action( 'after_setup_theme', 'ruletacasino_setup' );
function ruletacasino_setup() {
	
	load_theme_textdomain( 'ruletacasino', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ruletacasino' ),
		)
	);

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


add_action( 'widgets_init', 'ruletacasino_widgets_init' );
function ruletacasino_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar 1', 'ruletacasino' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ruletacasino' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
/*

add_action( 'wp_enqueue_scripts', 'ruletacasino_scripts' );
function ruletacasino_scripts() {
	wp_enqueue_style( 'ruletacasino-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ruletacasino-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ruletacasino-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}*/

// theme functions
require_once 'functions/theme-functions.php';


//add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action( 'plugins_loaded', 'remove_block_css', 100 );
function remove_block_css() {
	if (!is_admin()) {
		wp_dequeue_style( 'wp-block-library' ); // Wordpress core
		wp_dequeue_style( 'wp-block-library-theme' ); // Wordpress core
		wp_dequeue_style( 'wc-block-style' ); // WooCommerce
		wp_dequeue_style( 'storefront-gutenberg-blocks' ); // Storefront theme
	}
}

function remove_styles_css() {
	if (!is_admin()) {
		wp_dequeue_style('wp-block-library');
		wp_deregister_style('wp-block-library');

		wp_dequeue_style('classic-theme-styles');
		wp_deregister_style('classic-theme-styles');

		wp_dequeue_style('core-block-supports-inline');
		wp_deregister_style('core-block-supports-inline');
	}
}
add_action('plugins_loaded', 'remove_styles_css');

function remove_scripts() {
	if (!is_admin()) {
		wp_dequeue_script('wp-polyfill-inert');
		wp_deregister_script('wp-polyfill-inert');

		wp_dequeue_script('regenerator-runtime');
		wp_deregister_script('regenerator-runtime');

		wp_dequeue_script('wp-polyfill');
		wp_deregister_script('wp-polyfill');

		wp_dequeue_script('wp-autop');
		wp_deregister_script('wp-autop');

		wp_dequeue_script('wp-blob');
		wp_deregister_script('wp-blob');

		wp_dequeue_script('wp-block-serialization-default-parser');
		wp_deregister_script('wp-block-serialization-default-parser');

		wp_dequeue_script('react');
		wp_deregister_script('react');

		wp_dequeue_script('wp-hooks');
		wp_deregister_script('wp-hooks');

		wp_dequeue_script('wp-deprecated');
		wp_deregister_script('wp-deprecated');

		wp_dequeue_script('wp-dom');
		wp_deregister_script('wp-dom');

		wp_dequeue_script('react-dom');
		wp_deregister_script('react-dom');

		wp_dequeue_script('wp-escape-html');
		wp_deregister_script('wp-escape-html');

		wp_dequeue_script('wp-element');
		wp_deregister_script('wp-element');

		wp_dequeue_script('wp-is-shallow-equal');
		wp_deregister_script('wp-is-shallow-equal');

		wp_dequeue_script('wp-i18n');
		wp_deregister_script('wp-i18n');
	}
}
add_action('init', 'remove_scripts');

/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
* Filter function used to remove the tinymce emoji plugin.
* 
* @param array $plugins 
* @return array Difference betwen the two arrays
*/
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

/**
* Remove emoji CDN hostname from DNS prefetching hints.
*
* @param array $urls URLs to print for resource hints.
* @param string $relation_type The relation type the URLs are printed for.
* @return array Difference betwen the two arrays.
*/
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		/** This filter is documented in wp-includes/formatting.php */
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}


add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( $scripts ) {
	if ( empty( $scripts->registered['jquery'] ) || is_admin() ) {
		return;
	}

	$deps = & $scripts->registered['jquery']->deps;

	$deps = array_diff( $deps, [ 'jquery' ] );
	$deps = array_diff( $deps, [ 'jquery-migrate' ] );
}


function wpassist_remove_block_library_css(){
	if (!is_admin()) {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'classic-theme-styles' );
	}
}
add_action( 'wp_enqueue_scripts', 'wpassist_remove_block_library_css' );

function modify_jquery() {
    if (!is_admin()) {
        wp_dequeue_script( 'jquery' );
        wp_deregister_script( 'jquery' );
    }
}
add_action( 'init', 'modify_jquery', 999 );