<?php
/**
 * Header
 */
$top_top_menu_logo = get_field('top_top_menu_logo','options');
$top_top_menu_title = get_field('top_top_menu_title','options');
$top_menu_icon = get_field('top_menu_icon','options');
$icon = $top_menu_icon['sizes']['medium'];
$header_menu_logo = get_field('header_menu_logo','options');
$logo = $header_menu_logo['sizes']['large'];
$header_menu_text = get_field('header_menu_text','options');
$head_menu_image_button = get_field('head_menu_image_button','options');
$picture = $head_menu_image_button['sizes']['medium']
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Set up Meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta charset="<?php bloginfo('charset'); ?>">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
    <!-- Remove Microsoft Edge's & Safari phone-email styling -->
    <meta name="format-detection" content="telephone=no,email=no,url=no">
    <!-- Color mobile browser tab -->
    <!--	<meta name="theme-color" content="#4285f4" />-->

    <!-- Add external fonts below (GoogleFonts / Typekit) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap"
          rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class('no-outline'); ?>>
<?php wp_body_open(); ?>

<img src="" alt="body-bg" class="body-fixed-bg">

<!-- <div class="preloader hide-for-medium">
	<div class="preloader__icon"></div>
</div> -->

<!-- BEGIN of header -->
<header class="header">
    <div class="top-menu">
        <?php if ($top_top_menu_logo): ?>
            <a href="#">
                <img class="top-logo" src="<?php echo $top_top_menu_logo['url']; ?>" alt="Top Logo">
            </a>
        <?php endif; ?>
        <?php if ($top_top_menu_title): ?>
            <h2 class="top-logo-text"><?php echo $top_top_menu_title;?></h2>
        <?php endif; ?>
    </div>



        <nav class="top-bar" id="main-menu">
            <ul class="top-bar-list">
                <div class="dropdown-menu">
                    <div class="dropdown-hover">
                        <a class="dropdown-item" href="https://www.facebook.com/people/Affordable-Environmental-Services/100086842556252/" target="_blank"><i class="fa-brands fa-facebook-f"></i>Facebook</a>
                    </div>
                </div>
                <li class="top-bar-item">
                    <?php if ( $phone = get_field( 'phone', 'options' ) ): ?>
                        <a href="tel:<?php echo sanitize_number( $phone ); ?>"><i class="fa-solid fa-phone"><?php echo $phone;?></i></a>
                    <?php endif; ?>
                </li>
                <li class="top-bar-item">FOLLOW US</li>
            </ul>
        </nav>



        <div class="main-menu-box">
            <div class="l-box">
                <?php if($logo):?>
                    <a title="Affordable Environmental Services" href="https://gobeyondraddev.wpengine.com/">
                    <img src="<?php echo $logo?>" alt="Header Logo">
                    </a>
                <?php endif;?>
            </div>

            <div class="r-box">
                <i id="plus-new" class="fa-solid fa-square-plus"></i>
                <i id="lines-new" class="fa-solid fa-list lines"></i>
                <?php if($header_menu_text):?>
                    <h3 class="main-menu-text"><?php echo $header_menu_text;?></h3>
                <?php endif;?>
                
                <?php if($picture):?>
                    <a  href="https://www.google.com/search?q=affordable+environmental+services+charlotte+nc&rlz=1C1CHBD_enUS837US837&oq=afford&aqs=chrome.1.69i57j69i59j35i39j69i60l3.2877j0j7&sourceid=chrome&ie=UTF-8#lrd=0x88569d58d4874119:0x1d702b9882b2aa50,3" target="_blank">
                        <img src="<?php echo $picture;?>" alt="google review logo">
                    </a>
                <?php endif;?>

                <?php if (has_nav_menu('header-menu')) : ?>
                    <nav class="top-bar-main" id="main-menu">

                        <?php wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'menu_class' => 'menu header-menu',
                            'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown" data-submenu-toggle="true" data-multi-open="false" data-close-on-click-inside="false">%3$s</ul>',
                            'walker' => new Starter_Navigation(),
                            'sub_menu' => true,
                            'depth' => 0
                        )); ?>
                    </nav>
                <?php endif; ?>

            </div>


        </div>


</header>
<div class="phone-box">
    <?php if ( $phone = get_field( 'phone', 'options' ) ): ?>
        <a href="tel:<?php echo sanitize_number( $phone ); ?>"><i class="fa-solid fa-phone"><?php echo $phone;?></i></a>
    <?php endif; ?>
</div>
<?php if(is_front_page()):?>
    <div class="txt-box">
        <h3>THE SOUTHEAST'S RADON SPECIALISTS SINCE 2006</h3>
    </div>
<?php endif?>
<div class="modal-new" id="modal-new" style="display: none">
    <!--        <h2 class="close-modal">Close</h2>-->
    <i id="close-modal-new" class="fa-solid fa-circle-xmark close-modal"></i>
    <?php if($header_menu_text):?>
        <h3 class="main-menu-text1"><?php echo $header_menu_text;?></h3>
    <?php endif;?>

    <?php if($picture):?>
        <a class="google-review" href="https://www.google.com/search?q=affordable+environmental+services+charlotte+nc&rlz=1C1CHBD_enUS837US837&oq=afford&aqs=chrome.1.69i57j69i59j35i39j69i60l3.2877j0j7&sourceid=chrome&ie=UTF-8#lrd=0x88569d58d4874119:0x1d702b9882b2aa50,3" target="_blank">
            <img src="<?php echo $picture;?>" alt="google review logo">
        </a>
    <?php endif;?>

    <?php if (has_nav_menu('header-menu')) : ?>
        <nav class="top-bar-main" id="main-menu">

            <?php wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'menu_class' => 'menu header-menu1',
                'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion large-dropdown" data-submenu-toggle="true" data-multi-open="false" data-close-on-click-inside="false">%3$s</ul>',
                'walker' => new Starter_Navigation(),
                'sub_menu' => true,
                'depth' => 0
            )); ?>
        </nav>
    <?php endif; ?>
</div>

<div class="modal2" id="modal-new-2" style="display: none">
    <div class="modal2-header-div">
        <h3 class="modal2-header">Follow Us</h3>
        <i class="fa-solid fa-circle-xmark close-modal2"></i>
        <!--                <div class="dropdown-menu">-->
        <div class="fb-div">
            <a class="dropdown-item" href="https://www.facebook.com/people/Affordable-Environmental-Services/100086842556252/" target="_blank"><i class="fa-brands fa-facebook-f ff"></i>Facebook</a>
        </div>
        <!--                </div>-->

    </div>
</div>


<!-- END of header -->

