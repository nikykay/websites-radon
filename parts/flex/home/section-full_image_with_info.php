<?php
$main_image = get_sub_field('home_main_image');
$picture = $main_image['sizes']['full_hd'];
$main_title = get_sub_field('home_main_title');
$main_button = get_sub_field('home_main_button');
$direction = get_sub_field('direction');
?>
<section data-bg='<?php echo $picture; ?>' <?php bg($picture); ?> class="<?php if($direction == 'left') echo 'home-main-section'; else echo 'home-main-section-right'?>">
    <div class="overlay">
    </div>
        <div class="<?php if($direction == 'left') {
            echo 'main-info-box';
        }else {
            echo 'main-info-box-right';
        }?>">
            <?php if($main_title):?>
                <?php echo $main_title; ?>
            <?php endif;?>
            <?php if($main_button):?>
            <a class="<?php if($direction == 'left') {
                echo 'main-button';
            }else {
                echo 'main-button-right';
            }?>" href="<?php echo $main_button['url']?>"><?php echo $main_button['title'];?></a>
            <?php endif;?>
        </div>
</section>