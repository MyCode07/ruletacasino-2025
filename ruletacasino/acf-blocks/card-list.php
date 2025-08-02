<?php 
    $passo = get_field('card_list');
    $passo_title = $passo['title'];
    $passo_subtitle = $passo['subtitle'];
    $passo_list = $passo['cards_list'];
    $hide = $passo['hide_block'];
    $background_image = $passo['background_image'];

    $passo_list_elems = '';

    if($passo_list){
        $count = 1;
        foreach($passo_list as $list){
            $passo_list_image = $list['image'];
            $passo_list_title = $list['title'];
            $passo_list_description = $list['description'];



            $passo_list_elems .= '<div class="passo__flex-item">
                                    <div class="passo__flex-image">
                                        <img src="'.$passo_list_image.'" alt="&" width="138" height="138" decoding="async" loading="lazy" aria-hidden="true">
                                        <span>'.$count.'</span>
                                    </div>
                                    <div class="passo__flex-info">
                                        <h3>'.$passo_list_title.'</h3>
                                        <p class="_text">'.$passo_list_description.'</p>
                                    </div>
                                </div>';
            $count++;
        }
    }

    if ($background_image){
        $class = 'passo-color';
    }
    else{
        $class = '';
    }
   
?>

<?php if (!$hide): ?>
<section class="passo <?php echo $class ?>">
    <?php if (!$background_image): ?>
    <img class="passo-card" id="card-1" src="<?php bloginfo( 'template_url' ) ?>/assets/img/passo/passo-card-1.png"
        alt="&" decoding="async" loading="lazy" aria-hidden="true" width="123" height="174">
    <img class="passo-card" id="card-2" src="<?php bloginfo( 'template_url' ) ?>/assets/img/passo/passo-card-2.png"
        alt="&" decoding="async" loading="lazy" aria-hidden="true" width="64" height="71">
    <img class="passo-card" id="card-3" src="<?php bloginfo( 'template_url' ) ?>/assets/img/passo/passo-card-3.png"
        alt="&" decoding="async" loading="lazy" aria-hidden="true" width="87" height="89">
    <img class="passo-card" id="card-4" src="<?php bloginfo( 'template_url' ) ?>/assets/img/passo/passo-card-4.png"
        alt="&" decoding="async" loading="lazy" aria-hidden="true" width="111" height="174">
    <img class="passo-card" id="flesh-1" src="<?php bloginfo( 'template_url' ) ?>/assets/img/passo/passo-flesh-1.png"
        alt="&" decoding="async" loading="lazy" aria-hidden="true" width="44" height="40">
    <img class="passo-card" id="flesh-2" src="<?php bloginfo( 'template_url' ) ?>/assets/img/passo/passo-flesh-2.png"
        alt="&" decoding="async" loading="lazy" aria-hidden="true" width="49" height="35">
    <picture>
        <source srcset="<?php bloginfo( 'template_url' ) ?>/assets/img/passo/passo-bgc-mobile.webp"
            media="(max-width: 768px)" type="image/png">
        <source srcset="<?php bloginfo( 'template_url' ) ?>/assets/img/passo/passo-bgc-mobile.png"
            media="(max-width: 768px)" type="image/png">
        <source srcset="<?php bloginfo( 'template_url' ) ?>/assets/img/passo/passo-bgc.webp" type="image/webp">
        <img class="passo-bgc" src="<?php bloginfo( 'template_url' ) ?>/assets/img/passo/passo-bgc.png" alt="&"
            decoding="async" loading="lazy" aria-hidden="true" width="1920" height="962">
    </picture>
    <?php endif ?>


    <div class="passo__container _container">
        <div class="passo__body">
            <div class="passo__top">
                <h2><?php echo $passo_title ?></h2>
                <p class="_text"><?php echo $passo_subtitle ?></p>
            </div>
            <div class="passo__flex">
                <?php echo $passo_list_elems ?>
            </div>
        </div>
    </div>
</section>
<?php endif ?>