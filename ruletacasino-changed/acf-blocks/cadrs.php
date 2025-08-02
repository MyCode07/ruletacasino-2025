<?php 
    $cards = get_field('cadrs');
    $cards_title = $cards['title'];
    $cards_subtitle = $cards['subtitle'];
    $cards_list = $cards['cards_list'];
    $hide = $cards['hide_block'];

    $cards_list_elems = '';

    if($cards_list){
        foreach($cards_list as $list){
            $cards_list_icon = $list['icon'];
            $cards_list_title = $list['title'];
            $cards_list_description = $list['description'];
            $cards_list_button = $list['button'];

            $cards_list_button_btn =  get_link_info($cards_list_button, '_button _button-gradient', true);


            $cards_list_elems .= ' <div class="cards__grid-item">
                                        <div class="cards__grid-item-icon">
                                        <img src="'.$cards_list_icon.'" alt="&" aria-hidden="true" width="56" height="70" loading="lazy" decoding="async">
                                        </div>
                                        <div class="cards__grid-item-content">
                                            <h3>'.$cards_list_title.'</h3>
                                            <p>'.$cards_list_description.'</p>
                                        </div>
                                        '.$cards_list_button_btn.'
                                    </div>';
        }
    }
?>

<?php if (!$hide): ?>
<section class="cards">
    <div class="cards__container _container">
        <div class="cards__body">
            <h2><?php echo $cards_title ?></h2>
            <p class="_text"><?php echo $cards_subtitle ?></p>

            <div class="cards__grid">
                <?php echo  $cards_list_elems ?>
            </div>
        </div>
    </div>
</section>
<?php endif ?>