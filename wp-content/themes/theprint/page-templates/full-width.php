<?php
/**
 * The template for displaying full-width page.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since THe Print 1.0.0
 */
/* Template Name: Full-Width Template */
get_header(); ?>

<div id="main" class="gp-theprint-main">
	<div class="gp-theprint-row">
		<div class="gp-theprint-site-main">
			<main id="content" class="gp-theprint-content single-page" role="main">
				<?php if (have_posts()) : ?>
					<?php 
						// Start the Loop.
						while (have_posts()) : the_post(); 
					?>
						<?php get_template_part('template-parts/content', 'page'); ?>

					<?php 
						// End the loop.
						endwhile; 
					?>
				<?php endif; ?>
			</main><!-- #content -->
		</div><!-- .gp-theprint-site-main -->
	</div><!-- .gp-theprint-row -->
</div><!-- #main -->
		
<?php get_footer(); ?>