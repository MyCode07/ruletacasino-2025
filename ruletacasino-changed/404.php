<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ruletacasino
 */

get_header();
?>

<main class="empty">
    <section class="main error-404" data-replace-width="768">
        <div class="main__container _container">
            <div class="main__body">
                <?php get_template_part('template-parts/breadcrumbs') ?>

                <div class="main__top" data-replace-new-position="afterend">
                    <h1>404 <span>Nothing found</span></h1>
                    <button class="main__sidebar-open" aria-label="Open Menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

                <div class="main__flex">
                    <div class="main__content"></div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
