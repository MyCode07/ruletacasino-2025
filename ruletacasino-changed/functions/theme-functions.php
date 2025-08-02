<?php

require_once 'post-types.php';
require_once 'block-types.php';
require_once 'breadcrumbs.php';
require_once 'helpers.php';
require_once 'ajax-functions.php';

remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');

// menu
add_filter('nav_menu_css_class', 'nav_css_filter');
function nav_css_filter($classes)
{
    return $classes = [];
}


// acf options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title'     => 'Edit Common Fields',
        'menu_title'    => 'Common Fields',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'        => false
    ));
}

// fix path issue
add_filter('block_editor_rest_api_preload_paths', 'acf_filter_rest_api_preload_paths', 10, 1);
function acf_filter_rest_api_preload_paths($preload_paths)
{
    global $post;
    $rest_path   = rest_get_route_for_post($post);
    $remove_path = add_query_arg('context', 'edit', $rest_path);

    return array_filter(
        $preload_paths,
        function ($url) use ($remove_path) {
            return $url !== $remove_path;
        }
    );
}



add_action('wp_enqueue_scripts', 'main_scripts');
function main_scripts()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.min.css', array(), true);
    //wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), true);

    //wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/js/app.min.js', array(), 'null', true );
    wp_enqueue_script('ajax-functions', get_template_directory_uri() . '/assets/ajax.js', array('jquery'), 'null', true);

    $ajaxurl = array(
        'ajaxurl' => admin_url('admin-ajax.php'),
    );
    wp_localize_script('ajax-functions', 'adminajaxurl', $ajaxurl);
}


add_action('after_setup_theme', 'cssstyle_setup');
function cssstyle_setup()
{
    add_theme_support('editor-styles');
    add_editor_style('assets/style-editor.css');
}
