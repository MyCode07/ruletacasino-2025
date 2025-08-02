<?php

if(!defined(ABSPATH)){
    $pagePath = explode('/wp-content/', dirname(__FILE__));
    include_once(str_replace('wp-content/' , '', $pagePath[0] . '/wp-load.php'));
}

add_action('wp_ajax_load_more_posts' , 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts','load_more_posts');
function load_more_posts(){
    global $post;

    $paged = $_POST['page'];

    $args =  array( 
        'post_type' => 'post', 
        'post_status' =>'publish',
        'posts_per_page' => 12,
        'numberposts' => 12,
        'paged' => $paged,
    );
    $the_query = new WP_Query($args);

    if($the_query->have_posts()) {
        while($the_query->have_posts()) {
            $the_query->the_post();
            $posts_elem .= get_template_part( 'template-parts/article-load' );
        }
        wp_reset_postdata();
    } 
    else{
        $posts_elem = 0;
    }

    echo $posts_elem;
    die();
}


add_action('wp_ajax_load_more_games' , 'load_more_games');
add_action('wp_ajax_nopriv_load_more_games','load_more_games');
function load_more_games(){
    global $post;

    $paged = $_POST['page'];

    $args =  array( 
        'post_type' => 'game', 
        'post_status' =>'publish',
        'posts_per_page' => 12,
        'numberposts' => 12,
        'paged' => $paged,
        'orderby'=> 'menu_order', 
        'order' => 'ASC'
    );
    $the_query = new WP_Query($args);

    if($the_query->have_posts()) {
        while($the_query->have_posts()) {
            $the_query->the_post();
            $posts_elem .=   get_template_part( 'template-parts/game-card-load' );
        }
        wp_reset_postdata();
    } 
    else{
        $posts_elem = 0;
    }

    echo $posts_elem;
    die();
}


add_action('wp_ajax_load_game_iframe' , 'load_game_iframe');
add_action('wp_ajax_nopriv_load_game_iframe','load_game_iframe');
function load_game_iframe(){
    global $post;

    $id = $_POST['id'];

    $args =  array( 
        'post_type' => 'game', 
        'post_status' =>'publish',
        'posts_per_page' => 1,
        'numberposts' => 1,
        'post__in' => array($id),
    );
    $the_query = new WP_Query($args);

    if($the_query->have_posts()) {
        while($the_query->have_posts()) {
            $the_query->the_post();
            $posts_elem = get_field('iframe');
        }
        wp_reset_postdata();
    } 
    else{
        $posts_elem = 0;
    }

    echo $posts_elem;
    die();
}