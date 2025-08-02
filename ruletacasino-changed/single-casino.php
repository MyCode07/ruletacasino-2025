<?php

/**
 * The template for displaying all single casino posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ruletacasino
 */

get_header();
?>

<main>
    <?php
    $link = get_field('button');
    $link_btn =  get_link_info($link, '_button _button-gradient', true);

    $rating = get_field('rating');
    $rating_rounded = round($rating);
    ?>

    <section class="hero casino-review hero-page">
        <picture>
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/category/category-bgi-mobile.webp"
                media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/category/category-bgi-mobile.png"
                media="(max-width: 768px)" type="image/png">
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/casino-review/casino-review-bgi.webp"
                type="image/webp">
            <img class="bgc" src="<?php bloginfo('template_url') ?>/assets/img/casino-review/casino-review-bgi.png"
                alt="&" aria-hidden="true" width="1920" height="551" decoding="async">
        </picture>
        <picture>
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/hero-fishka.webp" type="image/webp">
            <img class="fishka" src="<?php bloginfo('template_url') ?>/assets/img/hero-fishka.png" alt="&"
                width="1241" height="648" aria-hidden="true" decoding="async">
        </picture>

        <div class="hero__container _container">
            <div class="hero__body">
                <div class="hero__left">
                    <h1><?php the_field('page_title') ?></h1>
                    <p class="_text"><?php the_field('page_subtitle') ?></p>
                    <div>
                        <?php echo $link_btn ?>
                        <span>Bono $<?php the_field('bonus') ?></span>
                    </div>
                    <div class="labels">
                        <label><b>Calificación:</b> <?php echo $rating ?>/5</label>
                        <label><b>Pagos:</b> <?php the_field('playouts') ?>%</label>
                    </div>
                </div>

                <div class="hero__right">
                    <div class="hero__right-review">
                        <img src="<?php the_field('detail_logo') ?>" alt="&" width="468" height="133"
                            aria-hidden="true" decoding="async">
                    </div>
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
                <div class="main__flex flex">
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


    <?php
    $payemnt = get_field('payemnt');
    $payemnt_title = $payemnt['title'];
    $payemnt_options = $payemnt['options'];

    foreach ($payemnt_options as $opt) {

        $images .= '<img src="' . get_template_directory_uri() . '/assets/img/casino-review/' . $opt . '.png"  alt="&" width="53" height="32" aria-hidden="true" loading="lazy" decoding="async">';
    }
    ?>

    <section class="flex">
        <div class="flex__container _container">
            <div class="flex__body">
                <div class="flex__flex">
                    <div class="flex__content">
                        <h2><?php echo $payemnt_title ?></h2>
                        <div class="flex__payment">
                            <?php echo $images ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $pros_cons = get_field('pros_&_cons');
    $pros_cons_title = $pros_cons['title'];

    $pros = $pros_cons['pros'];
    $cons = $pros_cons['cons'];

    $pros_title = $pros['title'];
    $cons_title = $cons['title'];

    $pros_list = $pros['list'];
    $cons_list = $cons['list'];

    foreach ($pros_list as $li) {
        $pros_list_elems .= '<li>' . $li['item'] . '</li>';
    }

    foreach ($cons_list as $li) {
        $cons_list_elems .= '<li class="unchecked">' . $li['item'] . '</li>';
    }
    ?>

    <section class="flex flex-bgc">
        <div class="flex__container _container">
            <div class="flex__body">
                <div class="flex__flex">
                    <div class="flex__content">
                        <h2><?php echo $pros_cons_title ?></h2>
                        <div class="flex__check">
                            <div class="flex__flex">
                                <div>
                                    <h3><?php echo $pros_title ?></h3>
                                    <ol>
                                        <?php echo $pros_list_elems ?>
                                    </ol>
                                </div>
                                <div>
                                    <h3><?php echo $cons_title ?></h3>
                                    <ol>
                                        <?php echo $cons_list_elems ?>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $ratings = get_field('ratings');
    $ratings_gs = $ratings['games_&_software'];
    $ratings_safety = $ratings['safety'];
    $ratings_support = $ratings['support'];
    $ratings_banking = $ratings['banking'];
    $ratings_bonuses = $ratings['bonuses'];

    $ratings_gs_percent = $ratings_gs * 10;
    $ratings_safety_percent = $ratings_safety * 10;
    $ratings_support_percent = $ratings_support * 10;
    $ratings_bonuses_percent = $ratings_bonuses * 10;
    $ratings_bonuses_percent = $ratings_bonuses * 10;
    ?>

    <section class="flex flex-ratings">
        <div class="flex__container _container">
            <div class="flex__body">
                <div class="flex__content">
                    <h2>Calificaciones</h2>

                    <div class="flex__flex">
                        <div class="flex__rating-items">
                            <div>
                                <p>
                                    <label>Juegos y software</label>
                                    <label><?php echo $ratings_gs ?>/10</label>
                                </p>
                                <span style="--procent:<?php echo $ratings_gs_percent ?>%"></span>
                            </div>
                            <div>
                                <p>
                                    <label>Seguridad</label>
                                    <label><?php echo $ratings_safety ?>/10</label>
                                </p>
                                <span style="--procent:<?php echo $ratings_gs_percent ?>%"></span>
                            </div>
                            <div>
                                <p>
                                    <label>Soporte</label>
                                    <label><?php echo $ratings_support ?>/10</label>
                                </p>
                                <span style="--procent:<?php echo $ratings_gs_percent ?>%"></span>
                            </div>
                        </div>
                        <div class="flex__rating-items">
                            <div>
                                <p>
                                    <label>Métodos de pago</label>
                                    <label><?php echo $ratings_banking ?>/10</label>
                                </p>
                                <span style="--procent:<?php echo $ratings_gs_percent ?>%"></span>
                            </div>
                            <div>
                                <p>
                                    <label>Bonos</label>
                                    <label><?php echo $ratings_bonuses ?>/10</label>
                                </p>
                                <span style="--procent:<?php echo $ratings_gs_percent ?>%"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php the_content() ?>

</main>

<?php
get_footer();
