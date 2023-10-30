<!-- BEGIN of Post -->
<article id="post-<?php the_ID(); ?>" <?php post_class( 'preview preview--' . get_post_type() ); ?> style="background-color: rgba(130, 130, 130, 0.1);">
	<div class="grid-x grid-margin-x">
<!--		<div class="medium-4 small-12 cell text-center medium-text-left">-->
<!--			<a href="--><?php //the_permalink(); ?><!--" title="--><?php //the_title_attribute(); ?><!--">-->
<!--				--><?php //echo get_attachment_fallback( get_post_thumbnail_id(), 'medium', [ 'class' => 'preview__thumb' ] ) ?>
<!--			</a>-->
<!--		</div>-->
		<div class="cell auto">
<!--			<h3 class="preview__title">-->
<!--				<a href="--><?php //the_permalink(); ?><!--"-->
<!--				   title="--><?php //echo esc_attr( sprintf( __( 'Permalink to %s', 'default' ), the_title_attribute( 'echo=0' ) ) ); ?><!--"-->
<!--				   rel="bookmark">--><?php //echo get_the_title() ?: __( 'No title', 'default' ); ?>
<!--				</a>-->
<!--			</h3>-->
			<?php if ( is_sticky() ) : ?>
				<span class="secondary label preview__sticky"><?php _e( 'Sticky', 'default' ); ?></span>
			<?php endif; ?>
			<div class="preview__excerpt">
				<?php the_content(); // Use wp_trim_words() instead if you need specific number of words ?>
			</div>
		</div>
	</div>
</article>
<!-- END of Post -->