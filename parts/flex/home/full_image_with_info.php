<?php
$main_image = get_sub_field('home_main_image');
$picture = $main_image['sizes']['full_hd'];
$main_title = get_sub_field('home_main_title');
$main_button = get_sub_field('home_main_button');
?>

<section class="home-main-section" data-bg="<?php echo $picture; ?>">
    <div class="main-info-box">
        <?php echo $main_title; ?>
        <a class="main-button" href="<?php echo $main_button['url']?>"><?php echo $main_button['title'];?></a>
    </div>
</section>