<?php

/* register block types */
add_action('acf/init', 'acf_blocks_init');
function acf_blocks_init() {

    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'free_games_section',
            'title'             => 'Free Games Slider',
            'description'       => 'Games Slider (12 hames in slider)',
            'render_template'   => 'acf-blocks/games-slder.php',   
            'category'          => 'formatting', 
        )); 

        acf_register_block_type(array(
            'name'              => 'top_bonus_section',
            'title'             => 'Casino Slider',
            'description'       => 'All casisno in slider',
            'render_template'   => 'acf-blocks/casino-slider.php',   
            'category'          => 'formatting', 
        )); 

        acf_register_block_type(array(
            'name'              => 'improve_section',
            'title'             => 'Article Slider',
            'description'       => 'Last 12 articles in slider',
            'render_template'   => 'acf-blocks/article-slider.php',   
            'category'          => 'formatting', 
        )); 

        acf_register_block_type(array(
            'name'              => 'cadrs',
            'title'             => 'Cards Grid',
            'description'       => 'Cards grid section',
            'render_template'   => 'acf-blocks/cadrs.php',   
            'category'          => 'formatting', 
        )); 

        acf_register_block_type(array(
            'name'              => 'section_faq',
            'title'             => 'Faq Section',
            'description'       => 'Frequently asked questions block',
            'render_template'   => 'acf-blocks/faq-section.php',   
            'category'          => 'formatting', 
        )); 

        acf_register_block_type(array(
            'name'              => 'block_faq',
            'title'             => 'Faq Block',
            'description'       => 'Frequently asked questions block',
            'render_template'   => 'acf-blocks/faq-block.php',   
            'category'          => 'formatting', 
        ));

        acf_register_block_type(array(
            'name'              => 'popular_pages',
            'title'             => 'Popular Pages Grid',
            'description'       => 'Max 7 most popular pages',
            'render_template'   => 'acf-blocks/popular-pages.php',   
            'category'          => 'formatting', 
        ));

        acf_register_block_type(array(
            'name'              => 'card_list',
            'title'             => 'Card list block',
            'description'       => 'Max 5 cards',
            'render_template'   => 'acf-blocks/card-list.php',   
            'category'          => 'formatting', 
        ));

        acf_register_block_type(array(
            'name'              => 'check_list',
            'title'             => 'Ceck List',
            'description'       => 'Ceck list with icons',
            'render_template'   => 'acf-blocks/ceck-list.php',   
            'category'          => 'formatting', 
        ));
    }   
}