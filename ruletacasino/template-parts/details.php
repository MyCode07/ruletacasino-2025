<?php
$anchors = get_field('anchors');
if ($anchors) : ?>
    <div class="details">
        <details open>
            <summary>Contenido</summary>
            <?php foreach ($anchors as $link): ?>
                <a href="#<?php echo strtolower($link['anchor_link'])  ?>"><?php echo $link['anchor_text'] ?></a>
            <?php endforeach; ?>
        </details>
    </div>
<?php endif; ?>