<?php 
    $free_games_section = get_field('free_games_section');
    $free_games_section_title = $free_games_section['title'];
    $free_games_section_subtitle = $free_games_section['subtitle'];
    $hide = $free_games_section['hide_block'];
?>

<?php if (!$hide): ?>
    <section class="casino-slider">
        <div class="casino-slider__container _container">
            <div class="casino-slider__body">
                <h2><?php echo $free_games_section_title ?></h2>
                <p class="_text"><?php echo $free_games_section_subtitle ?></p>
            </div>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php get_games('slide', 8); ?>
            </div>
        </div>
    </section>
<?php endif ?>