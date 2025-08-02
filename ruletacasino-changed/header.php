<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ruletacasino
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, shrink-to-fit=no">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preload" href="<?php bloginfo('template_url') ?>/assets/fonts/Oswald-Bold.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="<?php bloginfo('template_url') ?>/assets/fonts/Nunito-Regular.woff2" as="font"
        type="font/woff2" crossorigin>


    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    <link href="//www.googletagmanager.com" rel="preconnect" crossorigin>

    <!-- <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/critical.css"> -->

    <script defer src="<?php bloginfo('template_url') ?>/assets/js/load.js"></script>
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>

    <?php
    $banner = get_field('banner', get_option('page_on_front'));
    $banner_button_1 = $banner['button_1'];
    $banner_button_2 = $banner['button_2'];

    $banner_button_1_btn =  get_link_info($banner_button_1, '_button _button-gradient', true);
    $banner_button_2_btn =  get_link_info($banner_button_2, '_button');
    ?>

    <div class="wrapper">
        <header class="header">
            <div class="header__container _container">
                <div class="header__body">
                    <a href="/" class="header__logo _logo">
                        <img class="logo" src="<?php bloginfo('template_url') ?>/assets/img/logo.webp" alt="logo"
                            width="164" height="89" decoding="async">
                        <img class="ellipse" src="<?php bloginfo('template_url') ?>/assets/img/logo-ellipse.svg"
                            alt="&" width="143" height="92" aria-hidden="true" decoding="async">
                    </a>
                    <div class="header__buttons">
                        <?php echo $banner_button_1_btn ?>
                        <?php echo $banner_button_2_btn ?>
                    </div>
                    <div class="header__text">
                        <span><?php echo the_field('header_text', 'option'); ?></span>
                        <span><?php echo the_field('header_number', 'option'); ?></span>
                    </div>
                </div>
            </div>
        </header>