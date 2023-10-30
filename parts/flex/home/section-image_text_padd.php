<?php
$content = get_sub_field('content');
$image = get_sub_field('image');
$picture = $image['sizes']['full_hd']
?>


<section class="image-text-padd-section">
        <div class="content-container str">
            <?php if($content):?>
                <?php echo $content;?>
            <?php endif;?>
        </div>
</section>