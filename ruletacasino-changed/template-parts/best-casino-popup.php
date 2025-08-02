<?php
    $link = get_field('button');
    if($link){
        $link_url = $link['url'];
        $link_text = $link['title'];
        $link_target = $link['target'];
    }
    else{
        $link_url = '#';
        $link_text = '';
        $link_target = '_blank';
    }

    $rating = get_field('rating');
    $rating_rounded = round($rating);
?>

<article>
    <a href="<?php the_permalink()?>" target="_blank" class="casino-logo" aria-label="open link">
        <img src="<?php the_field('detail_logo') ?>" alt="&" width="150" height="43" decoding="async" loading="lazy"
            aria-hidden="true">
    </a>

    <div class="casino-rating">
        <div class="rating">
            <span>Calificación</span>
            <label>
                <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/rating/rating-<?php echo $rating_rounded ?>.svg"
                    alt="Calificación" width="145" height="25" decoding="async" loading="lazy" aria-hidden="true">
                <i><?php echo $rating_rounded ?>/5</i>
            </label>
        </div>
    </div>
    <div class="casino-bonus">
        <span>Bono</span>
        <label>$<?php the_field('bonus') ?> CLP</label>
    </div>

    <div class="casino-buttons">
        <a href="<?php echo $link_url ?>" target="<?php echo $link_target ?>" class="play _button _button-gradient"
            rel="nofollow">
            <?php echo $link_text ?>
        </a>
        <a href="<?php the_permalink()?>" target="_blank" class="read _button ">
            Leer Reseña
        </a>
    </div>
</article>