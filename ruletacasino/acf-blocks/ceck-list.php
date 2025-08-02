<?php 
    $list = get_field('check_list');
    $hide = get_field('hide_block');

    if($list){
        foreach($list as $li){
            $unchekced = $li['unchecked'];
            if($unchekced){
                $class = 'unchecked';
            }
            else{
                $class = '';
            }

            $list_elems .= '<li class="'.$class.'">'.$li['list_item'].'</li>';
        }
    }
    else{
        $list_elems = '';
    }
?>

<?php if (!$hide): ?>
<div class="flex__check">
    <ol>
        <?php echo $list_elems ?>
    </ol>
</div>
<?php endif ?>

