<?php
$content = get_sub_field('content');
?>
<section class="fourth-section">
    <?php if($content):?>
        <?php echo $content; ?>
    <?php endif;?>
</section>
