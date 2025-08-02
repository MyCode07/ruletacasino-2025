<?php 
    $section_faq = get_field('section_faq');
    $section_faq_title = $section_faq['title'];
    $section_faq_subtitle = $section_faq['subtitle'];
    $section_faq_questions = $section_faq['questions'];
    $hide = $section_faq['hide_block'];


    if($section_faq_subtitle){
        $section_faq_subtitle_elem = '<p class="_text">'.$section_faq_subtitle.'</p>';
    }
    else{
        $section_faq_subtitle_elem = '';
    }

    $columns = $section_faq['faq_columns'];
    if($columns == 1){
        $type = 'accordion__flex';
    }
    else{
        $type = '';
    }
?>

<?php if (!$hide): ?>
<section class="faq">
    <div class="faq__container _container">
        <div class="faq__body">
            <h2><?php echo  $section_faq_title  ?></h2>
            <?php echo $section_faq_subtitle_elem ?>
            <?php echo get_questions($section_faq_questions, $type) ?>
        </div>
    </div>
</section>
<?php endif ?>