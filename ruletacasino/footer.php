<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ruletacasino
 */

?>

<?php
if (!is_page(404) || !is_search() || !is_archive()) {
    get_template_part('template-parts/author');
}
?>

<footer class="footer">
    <div class="footer__container _container">
        <div class="footer__body">
            <a href="/" class="footer__logo _logo" aria-label="Home">
                <img class="logo" src="<?php bloginfo('template_url') ?>/assets/img/logo.webp" alt="logo" width="216"
                    height="116" loading="lazy" decoding="async">
                <img class="ellipse" src="<?php bloginfo('template_url') ?>/assets/img/logo-ellipse.svg" alt="&"
                    aria-hidden="true" width="188" height="120" loading="lazy" decoding="async">
            </a>

            <div class="footer__center">
                <div>
                    <img src="<?php bloginfo('template_url') ?>/assets/img/footer/image-13.png" alt="&" aria-hidden="true">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/footer/image-17.png" alt="&" aria-hidden="true">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/footer/Sin-juego.png" alt="&" aria-hidden="true">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/footer/Group-440.png" alt="&" aria-hidden="true">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/footer/image-14.png" alt="&" aria-hidden="true">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/footer/image-18.png" alt="&" aria-hidden="true">
                </div>
                <label><?php echo date('Y') ?> RuletaCasino.cl</label>
            </div>

            <?php echo get_footer_menu() ?>
        </div>
    </div>
</footer>
</div>



<a href="#" class="to-top" aria-label="To top">
    <img src="<?php bloginfo('template_url') ?>/assets/img/icons/totop.svg" alt="&" aria-hidden="true" width="24"
        height="14" loading="lazy" decoding="async">
</a>

<div class="popup">
    <div class="popup__header">
        <div class="popup__header-container _container">
            <div class="popup__header-body">
                <div>American Roulette</div>
                <div class="popup__header-actions">
                    <button class="popup__header-fullscreen" aria-label="fillscreen">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/icons/fillscreen.svg" alt="&"
                            aria-hidden="true" width="26" height="26" loading="lazy" decoding="async">
                    </button>
                    <button class="popup__close" aria-label="close">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/icons/close.svg" alt="&"
                            aria-hidden="true" width="30" height="30" loading="lazy" decoding="async">
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="popup__body">

        <button class="popup__footer-toggle" aria-label="toggle">
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="popup__footer">
        <div class="popup__footer-height">
            <div class="popup__footer-container _container">
                <div class="popup__footer-body main__content-casinos">
                    <?php get_best_rating_casino('popup') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>

</html>