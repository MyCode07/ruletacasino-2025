<?php 
    $hide = get_field('hide_block');
    if (!$hide){
        echo get_popular_pages();
    }
?>
