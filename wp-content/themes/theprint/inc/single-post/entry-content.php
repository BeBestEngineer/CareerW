<?php
/**
 * The template used for displaying entry content.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 **/

?>

<div class="entry-content" itemprop="text">
	<?php the_content(); ?>
									
	<?php 
		// Link pages.
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'theprint' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
		) );
	?>
</div><!-- .entry-content -->