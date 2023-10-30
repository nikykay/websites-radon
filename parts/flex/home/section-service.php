<?php
$title = get_sub_field('title');
$description = get_sub_field('description');
$button = get_sub_field('button');
$list = get_sub_field('list');
$map = get_sub_field('map')
?>

<section class="service-section">
    <div class="gray-box">
        <?php if($title):?>
            <h3 class="service-title"><a class="service-title-btn" href="<?php echo $title['url'] ?>"><?php echo $title['title'] ?></a></h3>
        <?php endif; ?>

        <?php if($description):?>
            <p class="service-description"><?php echo $description; ?></p>
        <?php endif; ?>
        <div class="link-box">
        <?php if($button):?>
            <a class="service-btn" href="<?php echo $button['url'] ?>"><?php echo $button['title']; ?><i class="fa-solid fa-chevron-right"></i></a>
        <?php endif; ?>
        </div>
    </div>
    <div class="flex-box-service">
        <div class="service-listing">
            <?php if($list):?>
                <?php echo $list; ?>
            <?php endif;?>
        </div>

        <div class="map">
            <iframe src="<?php echo $map; ?>"></iframe>
        </div>
    </div>

</section>


<!--<iframe src="https://maps.google.com/maps?q=--><?//= $long ?><!--, --><?//= $atitude ?><!--&z=15&output=embed" width="360"-->
<!--        height="270" frameborder="0" style="border:0"></iframe>-->