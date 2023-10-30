<?php
/**
 * Template Name: Contact
 */
$content = get_field('content');
$form = get_field('form');
$form_title = get_field('form_title');
$title = get_field('title');
$description = get_field('description');
$button = get_field('button');
$list = get_field('list');
$map = get_field('map');
$info = get_field('info');
get_header(); ?>
<div class="mainer300">
<section class="section-contact">


    <?php if($content):?>
        <?php echo $content;?>
    <?php endif;?>
    <div class="flex-box add3">
        <?php if($form = get_field('form')): ?>
            <div class="gform">
                <?php if($form_title):?>
                    <h3 class="form-title"><?php echo $form_title;?></h3>
                <?php endif;?>
                <?php echo do_shortcode("[gravityform id='{$form['id']}' title='false' description='false' ajax='true']"); ?>
            </div>

            <div class="info-box">
                <?php if($info):?>
                    <?php echo $info;?>
                <?php endif;?>
            </div>

        <?php endif; ?>
    </div>

</section>

<section class="service-section">
    <div class="gray-box">
        <?php if($title):?>
            <h1 class="service-title"><a class="service-title-btn" href="<?php echo $title['url'] ?>"><?php echo $title['title'] ?></a></h1>
        <?php endif; ?>
        <?php if($description):?>
            <p class="service-description"><?php echo $description; ?></p>
        <?php endif; ?>
        <div class="link-box">
            <?php if($button):?>
                <a class="service-btn" href="<?php echo $button['url'] ?>"><?php echo $button['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="flex-box for-g">
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
</div>
<?php get_footer(); ?>



