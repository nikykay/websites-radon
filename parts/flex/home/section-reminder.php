<?php
$content = get_sub_field('content');
$button = get_sub_field('button');
?>

<section class="reminder-section">
    <div class="content-box">
        <?php if($content):?>
            <?php echo $content;?>
        <?php endif;?>

        <?php if($button):?>
            <a class="reminder-button" href="<?php echo $button['url'];?>"><?php echo $button['title']?><i class="fa-solid fa-chevron-right"></i></a>
        <?php endif;?>
    </div>
</section>
