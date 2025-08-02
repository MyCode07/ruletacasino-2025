<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ruletacasino
 */

get_header();
?>

<main>
    <section class="main error-404" data-replace-width="768">
        <div class="main__container _container">
            <div class="main__body">
                <?php get_template_part('template-parts/breadcrumbs') ?>

                <div class="main__top" data-replace-new-position="afterend">
                    <h1><?php the_title() ?></h1>
                    <button class="main__sidebar-open">
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
