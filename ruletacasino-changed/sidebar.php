<?php
$menus = wp_get_nav_menus(array('orderby' => 'count'));
?>
<div class="main__sidebar">
    <div class="main__sidebar-body" data-replace-old-position="beforeend">

        <?php foreach ($menus as $menu):

            $menu_item = wp_get_nav_menu_object($menu);

            $add = get_field('add_to_sidebar_menu', $menu_item);

            if ($add):
                $menu_args = [
                    'menu' => $menu_item->term_id,
                    'container' => '',
                    'container_class' => '',
                    'echo' => false,
                    'menu_class' => '',
                    'items_wrap' => '%3$s',
                ];
        ?>
                <nav>
                    <ul>
                        <li><?php echo  $menu_item->name ?></li><?php echo wp_nav_menu($menu_args) ?>
                    </ul>
                </nav>
        <?php
            endif;
        endforeach;
        ?>

        <div class="ganando" data-replace-element>
            <h4>¡Ganando!</h4>
            <div class="ganando-list">
                <div class="ganando-item">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/topcasion-1.png" alt="">
                    <p>
                        MIKE
                        <span>$500,000 CPL</span>
                    </p>
                </div>
                <div class="ganando-item">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/topcasion-1.png" alt="">
                    <p>
                        MIKE
                        <span>$500,000 CPL</span>
                    </p>
                </div>
                <div class="ganando-item">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/topcasion-1.png" alt="">
                    <p>
                        MIKE
                        <span>$500,000 CPL</span>
                    </p>
                </div>
                <div class="ganando-item">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/topcasion-1.png" alt="">
                    <p>
                        MIKE
                        <span>$500,000 CPL</span>
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>