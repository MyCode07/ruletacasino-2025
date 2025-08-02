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
                    <ol class="hero__author" itemscope itemtype="http://schema.org/Article">
                        <li itemprop="author" itemscope itemtype="http://schema.org/Person">
                            <span>Author</span>
                            <span itemprop="name">James Martinez</span>
                        </li>
                        <li itemprop="editor" itemscope itemtype="http://schema.org/Person">
                            <span>Editor</span>
                            <span itemprop="name">Sarah Anderson</span>
                        </li>
                        <li class="update">
                            <span>Last Updated on</span>
                            <span itemprop="dateModified">JULY 25, 2025</span>
                        </li>
                        <div class="hero__author-info" itemprop="author" itemscope itemtype="http://schema.org/Person">
                            <div>
                                <img src="<?php bloginfo('template_url') ?>/assets/img/author.png" alt="" itemprop="image">
                                <span>
                                    <span itemprop="name">James Martinez</span>
                                    <a href="" itemprop="url">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect width="24" height="24" rx="2" fill="#262626" />
                                            <path
                                                d="M5.72387 7.97793C5.40771 7.68448 5.25049 7.32123 5.25049 6.88904C5.25049 6.45685 5.40856 6.07764 5.72387 5.78334C6.04002 5.48989 6.44699 5.34275 6.94561 5.34275C7.44422 5.34275 7.83522 5.48989 8.15053 5.78334C8.46669 6.0768 8.62391 6.44592 8.62391 6.88904C8.62391 7.33216 8.46585 7.68448 8.15053 7.97793C7.83438 8.27138 7.43329 8.41853 6.94561 8.41853C6.45792 8.41853 6.04002 8.27138 5.72387 7.97793ZM8.35822 9.66128V18.6582H5.51534V9.66128H8.35822Z"
                                                fill="#FEFFFC" />
                                            <path
                                                d="M17.8219 10.5499C18.4416 11.2226 18.751 12.1458 18.751 13.3213V18.4992H16.0511V13.6862C16.0511 13.0934 15.8972 12.6326 15.5903 12.3047C15.2834 11.9768 14.8697 11.812 14.3518 11.812C13.8338 11.812 13.4201 11.976 13.1132 12.3047C12.8063 12.6326 12.6524 13.0934 12.6524 13.6862V18.4992H9.93652V9.6359H12.6524V10.8114C12.9274 10.4196 13.2982 10.1101 13.764 9.88227C14.2298 9.6544 14.7537 9.54089 15.3364 9.54089C16.374 9.54089 17.203 9.87722 17.8219 10.5499Z"
                                                fill="#FEFFFC" />
                                        </svg>
                                    </a>
                                </span>
                            </div>
                            <span itemprop="description">Adebisi Oladele ist Leiter des Southwest Bureau bei The Nation Newspapers und ein erfahrener regionaler...</span>
                            <a href="" itemprop="url">Read Full Description</a>
                        </div>
                    </ol>
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
