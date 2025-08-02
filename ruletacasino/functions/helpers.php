<?php

// header menu
function get_header_menu()
{
    $menu_args = [
        'menu'            => 3,
        'container'       => 'nav',
        'container_class' => '',
        'menu_class'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
    ];
    return wp_nav_menu($menu_args);
}


// footer menu
function get_footer_menu()
{
    $menu_args = [
        'menu'            => 3,
        'container'       => 'nav',
        'container_class' => '',
        'echo' => false,
        'menu_class'      => '',
        'items_wrap'      => '<ul>%3$s</ul>',
    ];
    return wp_nav_menu($menu_args);
}


// logo url
function get_logo_url()
{
    $custom_logo__url = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
    return $custom_logo__url[0];
}


// get link text and url
function get_link_info($link, $class, $rel = false)
{
    if ($link) {
        $link_url = $link['url'];
        $link_text = $link['title'];
        $link_target = $link['target'];
    } else {
        $link_url = '#';
        $link_text = '';
        $link_target = '_blank';
    }


    if ($rel) {
        $link_btn = '<a href="' . $link_url . '" target="' . $link_target . '" class="' . $class . '" rel="nofollow">' . $link_text . '</a>';
    } else {
        $link_btn = '<a href="' . $link_url . '" target="' . $link_target . '" class="' . $class . '" >' . $link_text . '</a>';
    }

    return $link_btn;
}


// get questions
function get_questions($faqs, $class = '')
{
    if ($faqs) {
        $accordeon = '<div class="accordion ' . $class . '" data-accordion data-width="10000">';

        $count = 0;
        foreach ($faqs as $faq) {
            $question = get_the_title($faq->ID);
            $answer = get_field('answer', $faq->ID);

            if ($count == 0) {
                $data = 'data-open';
            } else {
                $data = '';
            }

            $accordeon .= '<div class="accordion__item" data-accordion-item ' . $data . '>
                                <div class="accordion__item-title" data-accordion-title>
                                    <p>' . $question . '</p>
                                    <span></span>
                                </div>
                                <div class="accordion__item-content" data-accordion-content>
                                    <div>
                                        <p>' . $answer . '</p>
                                    </div>
                                </div>
                            </div>';
            $count++;
        }

        $accordeon .= '</div>';
    }
    return $accordeon;
}


// get popuplar pages
function get_popular_pages()
{
    $section_popular_pages = get_field('section_popular_pages', 'option');
    if ($section_popular_pages) {
        $title = $section_popular_pages['title'];
        $subtitle = $section_popular_pages['subtitle'];
        $pop_pages = $section_popular_pages['pages'];

        if ($subtitle) {
            $subtitle_elem = '<p class="_text">' . $subtitle . '</p>';
        } else {
            $subtitle_elem = '';
        }

        $pages = '<section class="grid">
                    <div class="grid__container _container">
                        <div class="grid__body">
                            <h2>' . $title . '</h2>
                            ' . $subtitle_elem . '
                            <div class="grid__grid">';

        foreach ($pop_pages as $p) {
            $title = get_the_title($p->ID);
            $image = get_the_post_thumbnail_url($p->ID);
            $link = get_the_permalink($p->ID);



            if (!$image) {
                $image_url = get_template_directory_uri() . '/assets/img/popularpages-3.png';
            } else {
                $image_url = get_the_post_thumbnail_url($p->ID);
            }

            $pages .= '<article>
                            <a href="' . $link . '" target="_blank">
                                <img  src="' . $image_url . '" alt="' . $title . '" width="415" height="415" decoding="async" loading="lazy">
                                <h3>' . $title . '</h3>
                            </a>
                        </article>';
        }

        $pages .= '</div>
            </div>
        </div>
    </section>';
    }
    return $pages;
}


// get table
function get_table($table)
{
    if ($table) {
        $head = 0;
        $thead = '<thead>';
        $tbody = '<tbody>';

        foreach ($table as $t) {
            $cell_1 = $t['cell_1'];
            $cell_2 = $t['cell_2'];
            $cell_3 = $t['cell_3'];

            if ($head == 0) {
                $thead .= '<tr><td><p>' . $cell_1 . '</p></td><td><p>' . $cell_2 . '</p></td><td><p>' . $cell_3 . '</p></td></tr>';
            } else {
                $tbody .= '<tr><td><p>' . $cell_1 . '</p></td><td><p>' . $cell_2 . '</p></td><td><p>' . $cell_3 . '</p></td></tr>';
            }

            $head++;
        }

        $thead .= '</tbody>';
        $tbody .= '</tbody>';
        $table_elem = '<table>' . $thead . $tbody . '</table>';
    }
    return $table_elem;
}


// get casinos by rating
function get_casino($type)
{
    $args = array(
        'post_type' => 'casino',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'numberposts' => -1,
        'meta_key' => 'rating',
        'orderby' => 'meta_value_num',
        'order' =>   'DESC',
    );
    $posts = new WP_Query($args);
    $casino = '';
    if ($posts->have_posts()) {
        while ($posts->have_posts()) {
            $posts->the_post();
            $casino .= get_template_part('template-parts/' . $type);
        }
        wp_reset_postdata();
    } else {
        $casino = 'Nothing found';
    }

    return $casino;
}


// get most rated casino
function get_best_rating_casino($type)
{

    $args = array(
        'post_type' => 'casino',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'numberposts' => 1,
        'meta_key' => 'rating',
        'orderby' => 'meta_value_num',
        'order' =>   'DESC',
    );
    $posts = new WP_Query($args);
    if ($posts->have_posts()) {
        while ($posts->have_posts()) {
            $posts->the_post();

            $casino = get_template_part('template-parts/best-casino-' . $type);
        }
        wp_reset_postdata();
    } else {
        $casino = '';
    }

    return $casino;
}


// get custo msidebar
function get_sidebar_menu()
{

    return 'use get_sidebar';
}


// get post readcrumbs
function get_post_breadcrumbs()
{
    $anchors = get_field('anchors');

    if ($anchors) {
        $breadcambs = '<div class="breadcambs"><ul>';


        foreach ($anchors as $link) {
            $breadcambs .= '<li>
                                <a href="#' . strtolower($link['anchor_link']) . '">' . $link['anchor_text'] . '
                                    <span>
                                        <svg width="13" height="24" viewBox="0 0 13 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.4166 13.0607C13.0024 12.4749 13.0024 11.5251 12.4166 10.9393L2.87065 1.3934C2.28486 0.807612 1.33512 0.807612 0.749331 1.3934C0.163544 1.97918 0.163544 2.92893 0.749331 3.51472L9.23461 12L0.749331 20.4853C0.163544 21.0711 0.163544 22.0208 0.749331 22.6066C1.33512 23.1924 2.28486 23.1924 2.87065 22.6066L12.4166 13.0607ZM10 13.5H11.3559V10.5H10V13.5Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </a>
                            </li>';
        }

        $breadcambs .= '</ul></div>';
    } else {
        $breadcambs = '';
    }

    return 'use details';
}


// get articles
function get_articles($type, $count = 12)
{
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => $count,
        'numberposts' => $count,
    );
    $posts = new WP_Query($args);

    $posts_elem = '';
    if ($posts->have_posts()) {

        while ($posts->have_posts()) {
            $posts->the_post();

            $posts_elem .= get_template_part('template-parts/article-' . $type);
        }
        wp_reset_postdata();
    } else {
        $posts_elem = 'No Articles';
    }

    return $posts_elem;
}


// get articles
function get_games($type, $count = 12)
{
    $args = array(
        'post_type' => 'game',
        'post_status' => 'publish',
        'posts_per_page' => $count,
        'numberposts' => $count,
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    $posts = new WP_Query($args);

    $posts_elem = '';
    if ($posts->have_posts()) {

        while ($posts->have_posts()) {
            $posts->the_post();

            $posts_elem .= get_template_part('template-parts/game-' . $type);
        }
        wp_reset_postdata();
    }

    return $posts_elem;
}

// get 2 fav games

function get_fav_games($games)
{
    if ($games) {
        $games_elem = '<div class="hero__right-roulette">
                        <span>OUR FAVOURITES</span>
                        <label>Best Free Roulette Games</label>
                        <div class="hero__right-roulette-row">';

        foreach ($games as $game) {
            $question = get_the_title($game->ID);
            $answer = get_field('answer', $game->ID);

            $games_elem .= '<div class="casino-slide" id="' . $game->ID . '">
                                <img src="' . get_the_post_thumbnail_url($game->ID) . '" alt="&" width="289" height="220" aria-hidden="true" decoding="async">
                                <a href="#" target="_blank" class="_button _button-gradient open-popup">Jugar Gratis</a>
								<span style="display:none" data-title>' . get_the_title($game->ID) . '</span>
                            </div>';
        }

        $games_elem .= '</div></div>';
    }
    return $games_elem;
}
