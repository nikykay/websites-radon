<?php
/**
 * Template Name: About-Us
 */
get_header(); ?>
        <?php if (have_rows('content')): ?>
            <div class="mainer">
            <?php while (have_rows('content')): the_row(); ?>

            <?php get_template_part('parts/flex/home/section', get_row_layout()); // Flexible content row ?>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
<?php get_footer(); ?>