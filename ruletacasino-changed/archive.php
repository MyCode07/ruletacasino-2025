<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ruletacasino
 */

get_header();

?>
<main>

    <?php
    $cat = get_queried_object();

    $banner = get_field('banner', $cat);
    $banner_title = $banner['title'];
    $banner_descr = $banner['description'];
    $banner_button_1 = $banner['button_1'];
    $banner_button_2 = $banner['button_2'];

    $banner_button_1_btn =  get_link_info($banner_button_1, '_button _button-gradient', true);
    $banner_button_2_btn =  get_link_info($banner_button_2, '_button');
    ?>

    <section class="hero hero-page">
        <picture>
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/category/category-bgi.png"
                media="(min-width: 769px)">
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/category/category-bgi-mobile.png"
                media="(max-width: 768px)">
            <img class="bgc" src="<?php bloginfo('template_url') ?>/assets/img/category/category-bgi.png" alt="">
        </picture>

        <img class="fishka" src="<?php bloginfo('template_url') ?>/assets/img/category/category-fishka.png" alt="">

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
                    <h2>All articles</h2>
                    <button class="main__sidebar-open" aria-label="Open Menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="main__flex">
                    <div class="main__content">
                        <div class="main__category">
                            <div class="category__articles">
                                <?php echo get_articles('card') ?>
                            </div>
                        </div>
                        <a href="#" class="_button _button-gradient category__articles-more">Más</a>
                    </div>
                    <?php get_sidebar(); ?>

                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
