<?php 
    $faq = get_field('block_faq');
    $faq_questions = $faq['questions'];
    $hide = $faq['hide_block'];
    $columns = $faq['faq_columns'];

    if($columns == 2){
        $type = 'accordion__flex';
    }
    else{
        $type = '';
    }
   
    if (!$hide){
        echo get_questions($faq_questions, $type);
    } 
?>