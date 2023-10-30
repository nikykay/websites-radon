<?php
/**
 * Archive
 *
 * Standard loop for the archive page
 */
$page_title = get_field('page_title','review_post');
$logo_link = get_field('logo_link','review_post');
$picture = $logo_link['sizes']['full_hd'];
get_header(); ?>
    <div class="mainerr">
<main class="post-main-content">
                    <?php if($page_title):?>
                        <h1 class="review-title"><?php echo $page_title;?></h1>
                    <?php endif;?>

                    <?php if($picture):?>
                        <a class="review-btn" target="_blank" href="https://www.google.com/search?q=affordable+environmental+services+charlotte+nc&rlz=1C1CHBD_enUS837US837&oq=afford&aqs=chrome.1.69i57j69i59j35i39j69i60l3.2877j0j7&sourceid=chrome&ie=UTF-8#lrd=0x88569d58d4874119:0x1d702b9882b2aa50,3"><img class="review-logo-link" src="<?php echo $picture?>" alt="alt text"/></a>
                    <?php endif;?>
                    <div class="post-box">
                        <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'parts/loop', 'post' ); // Post item ?>
                                <h3 class="post-title"><?php the_title_attribute(); ?></h3>
                        <?php endwhile; ?>
				        <?php endif; ?>
                    </div>
				<!-- BEGIN of pagination -->
				<?php starter_pagination(); ?>
				<!-- END of pagination -->

</main>
    </div>



<?php get_footer(); ?>