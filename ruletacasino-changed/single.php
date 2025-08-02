<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ruletacasino
 */

get_header();
?>

<main>
    <?php
    $banner = get_field('banner');
    $banner_title = $banner['title'];
    $banner_descr = $banner['description'];
    $banner_button_1 = $banner['button_1'];
    $banner_button_2 = $banner['button_2'];

    $banner_button_1_btn =  get_link_info($banner_button_1, '_button _button-gradient', true);
    $banner_button_2_btn =  get_link_info($banner_button_2, '_button');
    ?>

    <section class="hero hero-page">
        <picture>
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/category/category-bgi-mobile.webp"
                media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/category/category-bgi-mobile.png"
                media="(max-width: 768px)" type="image/png">
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/category/category-bgi.webp"
                type="image/webp">
            <img class="bgc" src="<?php bloginfo('template_url') ?>/assets/img/category/category-bgi.png" alt="&"
                aria-hidden="true" width="1920" height="555" decoding="async">
        </picture>

        <picture>
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/hero-fishka.webp" type="image/webp">
            <img class="fishka" src="<?php bloginfo('template_url') ?>/assets/img/hero-fishka.png" alt="&"
                width="1241" height="648" aria-hidden="true" decoding="async">
        </picture>

        <div class="hero__container _container">
            <div class="hero__body">
                <div class="hero__left">
                    <h1><?php echo $banner_title ?></h1>
                    <p class="_text"><?php echo $banner_descr ?></p>
                    <div>
                        <?php echo $banner_button_1_btn ?>
                        <?php echo $banner_button_2_btn ?>
                    </div>
                </div>
                <div class="hero__right">
                    <?php get_best_rating_casino('banner') ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/breadcrumbs') ?>

    <section class="main" data-replace-width="768">
        <div class="main__container _container">
            <div class="main__body">
                <div class="main__top" data-replace-new-position="afterend">
                    <h2><?php the_title() ?></h2>
                    <button class="main__sidebar-open" aria-label="Open Menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="main__flex">
                    <div class="main__content">

                        <?php
                        get_template_part('template-parts/details');

                        while (have_rows('first_section_content')) {
                            the_row();
                            $layout = get_row_layout();
                            $layout_path = 'acf-blocks/first-section/' . $layout;

                            if (!get_sub_field('hide')) {
                                get_template_part($layout_path, '', $layout);
                            }
                        }
                        ?>

                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php the_content() ?>

</main>

<?php
get_footer();
