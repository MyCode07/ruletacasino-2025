<?php 
    $improve_section = get_field('improve_section');
    $improve_section_title = $improve_section['title'];
    $improve_section_subtitle = $improve_section['subtitle'];
    $hide = $improve_section['hide_block'];
?>

<?php if (!$hide): ?>
<section class="dark-slider">
    <div class="dark-slider__container _container">
        <div class="dark-slider__body">
            <h2><?php echo $improve_section_title ?></h2>
            <p class="_text"><?php echo $improve_section_subtitle ?></p>
        </div>
    </div>

    <div class="swiper">
        <div class="swiper-wrapper">
            <?php echo get_articles('slide', 8) ?>
        </div>
    </div>
</section>
<?php endif ?>