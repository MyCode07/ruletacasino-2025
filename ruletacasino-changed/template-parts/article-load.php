<article>
    <a href="<?php the_permalink()?>" target="_blank" class="category__article-image">
        <img src="<?php the_post_thumbnail_url()?>"  alt="">
    </a>
    <div class="category__article-info">
        <h3><a href="<?php the_permalink()?>" target="_blank"><?php the_title()?></a></h3>
        <p><?php the_field('excerpt')?></p>
        <a href="<?php the_permalink()?>" target="_blank" class="_button _button-gradient">Más información</a>
    </div>
</article>