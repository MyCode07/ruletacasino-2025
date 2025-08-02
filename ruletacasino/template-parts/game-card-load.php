<?php
    $button = get_field('button');
    $banner_btn =  get_link_info($button, '_button _button-gradient', true);
?>
<div class="casino-slide" id="<?php echo get_the_ID()?>">
    <div class="casino-slide__top">
        <img src="<?php the_post_thumbnail_url() ?>" class="casino-slide__image">
        <div>
            <?php echo $banner_btn ?>
            <a href="#" class="_button _button-backdrop open-popup">Jugar gratis</a>
        </div>

        <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/casino-cat.png" alt="&" class="casino-slide__cat"
            width="38" height="38" decoding="async" loading="lazy" aria-hidden="true">
    </div>
    <div class="casino-slide__bottom">
        <h3><a href="<?php the_permalink() ?>" target="_blank" data-title><?php the_title() ?></a></h3>
    </div>
</div>