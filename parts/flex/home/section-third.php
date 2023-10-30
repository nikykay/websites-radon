<?php
$content = get_sub_field('content');
$image = get_sub_field('image');
$picture = $image['sizes']['full_hd'];
$button = get_sub_field('button');
?>

<section class="third-section">
    <div class="info-box">
        <?php if($content):?>
            <?php echo $content; ?>
        <?php endif; ?>
        <?php if($button):?>
            <a href="<?php echo $button['url'];?>"><?php echo $button['title'];?></a>
        <?php endif;?>
    </div>
    <div class="img-box">
        <?php if($picture):?>
            <img src="<?php echo $picture;?>" alt="aside-image"/>
        <?php endif;?>
    </div>
</section>
