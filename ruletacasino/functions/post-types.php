<?php

register_post_type('casino', array(
        'labels'             =>  array(
        'name'               => 'Casinos',
        'menu_name'          => 'Casinos',
        'singular_name'      => 'Casino',
        'all_items'          => 'Casinos',
        'name_admin_bar'     => 'Add a New Casino',
        'add_new'            => 'New Casino',
        'add_new_item'       => 'Add a New Casino',
        'edit_item'          => 'Edit the Casino',
        'view_item'          => false,
        'search_items'       => 'Search Casinos',
        'no_found'           => 'Casino not found',
        'not_found_in_trash' => 'Empty Trash'
    ),
    'exclude_from_search' => false,
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_rest'        => true,
    'query_var'           => true,
    'show_in_nav_menus'   => true,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'rewrite'             => array('slug' => 'casinos', 'with_front' => false),
    'supports'            => array('title', 'thumbnail', 'editor', 'custom-fields',), 
    'has_archive'         => false,
    'menu_icon'           => 'dashicons-sos',
));

register_post_type('question', array(
        'labels'             =>  array(
        'name'               => 'Questions',
        'menu_name'          => 'Questions',
        'singular_name'      => 'Question',
        'all_items'          => 'Questions',
        'name_admin_bar'     => 'Add a New Question',
        'add_new'            => 'New Question',
        'add_new_item'       => 'Add a New Question',
        'edit_item'          => 'Edit the Question',
        'view_item'          => false,
        'search_items'       => 'Search Questions',
        'no_found'           => 'Questions not found',
        'not_found_in_trash' => 'Empty Trash'
    ),
    'exclude_from_search' => false,
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_rest'        => false,
    // 'query_var'           => true,
    'show_in_nav_menus'   => false,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'rewrite'             => array('slug' => 'question', 'with_front' => false),
    'supports'            => array('title', 'custom-fields'), 
    'has_archive'         => false,
    'menu_icon'           => 'dashicons-editor-help',
));

register_post_type('game', array(
        'labels'             =>  array(
        'name'               => 'Games',
        'menu_name'          => 'Games',
        'singular_name'      => 'Game',
        'all_items'          => 'Games',
        'name_admin_bar'     => 'Add a New Game',
        'add_new'            => 'New Game',
        'add_new_item'       => 'Add a New Game',
        'edit_item'          => 'Edit the Game',
        'view_item'          => false,
        'search_items'       => 'Search Games',
        'no_found'           => 'Games not found',
        'not_found_in_trash' => 'Empty Trash'
    ),
    'exclude_from_search' => false,
    'public'              => true,
    'publicly_queryable'  => true,
    'show_ui'             => true,
    'show_in_rest'        => false,
    // 'query_var'           => true,
    'show_in_nav_menus'   => false,
    'capability_type'     => 'post',
    'hierarchical'        => false,
    'rewrite'             => array('slug' => 'game', 'with_front' => false),
    'supports'            => array('title', 'thumbnail', 'custom-fields', 'page-attributes'), 
    'has_archive'         => false,
    'menu_icon'           => 'dashicons-games',
));