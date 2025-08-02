<?php 
    $top_bonus_section = get_field('top_bonus_section');
    $top_bonus_section_title = $top_bonus_section['title'];
    $top_bonus_section_subtitle = $top_bonus_section['subtitle'];
    $hide = $top_bonus_section['hide_block'];
?>

<?php if (!$hide): ?>
<section class="roulette-slider">
    <div class="roulette-slider__container _container">
        <div class="roulette-slider__body">
            <h2><?php echo $top_bonus_section_title ?></h2>
            <p class="_text"><?php echo $top_bonus_section_subtitle ?></p>
        </div>
    </div>

    <div class="swiper">
        <div class="swiper-wrapper">
            <?php echo get_casino('casino-slide'); ?> 
        </div>
    </div>
</section>
<?php endif ?>