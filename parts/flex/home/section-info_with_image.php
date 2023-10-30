<?php
$content = get_sub_field('content');
$image = get_sub_field('image');
$picture = $image['sizes']['full_hd'];
$button = get_sub_field('button');
$direction = get_sub_field('position');
$list = get_sub_field('list');
?>

<!--<section class="ifmar nonmar">-->
<section class="<?php if($direction == 'left') {
    echo 'third-section';
} else {
    echo 'm-t';
}?>">
    <div class="<?php if ($direction == 'left') {
        echo 'box-info';
    } else {
        echo 'box-info-right';
    } ?>">
        <?php if ($content): ?>
            <?php echo $content; ?>
        <?php endif; ?>
        <?php if ($button): ?>
            <a class="third-sec-btn" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?><i class="fa-solid fa-chevron-right"></i></a>
        <?php endif; ?>
    </div>

    <div class="<?php if($direction == 'left') {
        echo 'img-box';
    } else {
        echo 'img-box-right';
    }?>">
        <?php if ($picture): ?>
            <img src="<?php echo $picture; ?>" alt="aside-image"/>
        <?php endif; ?>
    </div>
</section>

<!--</section>-->

