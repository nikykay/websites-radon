<?php
$content = get_sub_field('content');
$border = get_sub_field('border');
?>

<section class="<?php if($border) {
    echo 'fourth-section-border';
}else {
    echo 'fourth-section';
}?>">
    <div class="<?php if ($border) {
        echo 'border-class';
}else {
        echo 'bx';
}?>">
        <?php if ($content): ?>
            <?php echo $content; ?>
        <?php endif; ?>

    </div>

</section>


