<?php
/**
 * Footer
 */
$fixed_button = get_field('fixed_button','options')
?>

<!-- BEGIN of footer -->
<footer class="footer">
    <?php
    if ( has_nav_menu( 'footer-menu' ) ) {
        wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu menu', 'depth' => 0 , 'sub_menu' => true) );

    }
    ?>
    <div class="footer-logo-box">
        <a title="Affordable Environmental Services" href="https://gobeyondraddev.wpengine.com/">
        <?php if ( $footer_logo = get_field( 'footer_logo', 'options' ) ):
            echo wp_get_attachment_image( $footer_logo['id'], 'large' );
        else:
            show_custom_logo();
        endif; ?>
        </a>
    </div>

    <div class="copyright-box">
        <?php if ( $copyright = get_field( 'copyright', 'options' ) ): ?>
            <?php echo $copyright; ?>
        <?php endif; ?>
    </div>

    <?php if($fixed_button):?>
        <div class="fixed-div">
            <a class="fixed-btn" href="<?php echo $fixed_button['url']?>"><?php echo $fixed_button['title']; ?></a>
            <?php if ( $phone = get_field( 'phone', 'options' ) ): ?>
                <a id="call-now" href="tel:<?php echo sanitize_number( $phone ); ?>"><i class="fa-solid fa-phone"></i><span>Call Now</span></a>
            <?php endif; ?>

        </div>
    <?php endif;?>

</footer>
<!-- END of footer -->

<?php wp_footer(); ?>
</body>
</html>
