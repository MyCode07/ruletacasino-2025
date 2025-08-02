<?php

    $id = get_the_ID();
    $link = get_field('button',$id);
    $logo = get_field('detail_logo',$id);
    $link_btn =  get_link_info($link, '_button _button-gradient', true);

    $rating = get_field('rating', $id);
    $rating_rounded = round($rating);
?>

<div class="swiper-slide">
    <div class="roulette-slide">
        <a href="<?php the_permalink()?>" target="_blank" class="roulette-slide__top" aria-label="open link">
            <img src="<?php echo $logo ?>" alt="&" width="115" height="33" decoding="async" loading="lazy"
                aria-hidden="true">
        </a>
        <div class="roulette-slide__rating">
            <div class="rating">
                <span>Calificación</span>
                <label>
                    <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/rating/rating-<?php echo $rating_rounded ?>.svg"
                        alt="&" width="145" height="25" decoding="async" loading="lazy" aria-hidden="true">
                </label>
            </div>
        </div>
        <div class="roulette-slide__bonus">
            <span>Bono de hasta</span>
            <label>$<?php the_field('bonus', $id); ?></label>
        </div>
        <?php echo $link_btn ?>
    </div>
</div>