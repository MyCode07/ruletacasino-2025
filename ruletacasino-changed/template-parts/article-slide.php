<?php
    $id = get_the_ID();
?>

<div class="swiper-slide">
    <div class="dark-slide">
        <div class="dark-slide__top">
            <img src="<?php the_post_thumbnail_url()?>" alt="&" width="415" height="163" decoding="async" loading="lazy"
                aria-hidden="true">
        </div>
        <div class="dark-slide__bottom">
            <h3><a href="<?php the_permalink()?>" target="_blank"><?php the_title()?></a></h3>
            <p><?php the_field('excerpt', $id)?></p>
            <a href="<?php the_permalink()?>" target="_blank" class="_button _button-gradient">Más información</a>
        </div>
    </div>
</div>