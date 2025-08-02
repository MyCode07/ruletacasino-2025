<?php
/*
    Template Name: home
    Template Post Type: page
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
    $first_section_title = $banner['first_section_title'];
    $first_section_btn = $banner['first_section_link'];

    $banner_button_1_btn =  get_link_info($banner_button_1, '_button _button-gradient', true);
    $banner_button_2_btn =  get_link_info($banner_button_2, '_button');

    $first_section_btn_btn =  get_link_info($first_section_btn, 'main__content-casinos-more _button', true);
    ?>

    <section class="hero">
        <picture>
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/hero-img-mobile.webp"
                media="(max-width: 768px)" type="image/webp">
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/hero-img-mobile.png"
                media="(max-width: 768px)" type="image/png">
            <source srcset="<?php bloginfo('template_url') ?>/assets/img/hero-img.webp" type="image/webp">
            <img class="bgc" src="<?php bloginfo('template_url') ?>/assets/img/hero-img.png" alt="&"
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
                </div>
            </div>
        </div>
    </section>

    <section class="main" data-replace-width="768">
        <div class="main__container _container">
            <div class="main__body">
                <div class="main__top" data-replace-new-position="afterend">
                    <h2><?php echo $first_section_title ?></h2>
                    <button class="main__sidebar-open" aria-label="Open Menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <div class="main__flex">
                    <div class="main__content">
                        <div class="main__content-casinos">
                            <?php echo get_casino('casino-card'); ?>
                        </div>
                        <?php echo $first_section_btn_btn ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php the_content() ?>

</main>

<?php get_footer();
