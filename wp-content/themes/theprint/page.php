<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

get_header(); ?>

<div id="main" class="gp-theprint-main">
	<div class="gp-theprint-row">
		<div class="gp-theprint-site-main">
			<main id="content" class="gp-theprint-content single-page">
				<?php if (have_posts()) : ?>
					<?php 
					// Start the loop.
					while (have_posts()) : the_post(); 
					?>
						<?php get_template_part('template-parts/content', 'page'); ?>
					<?php 
					// End the loop.
					endwhile; 
					?>
				<?php endif; ?>
			</main><!-- #content## -->

			<?php 
			// Sidebar.
			get_sidebar(); 
			?>
		</div><!-- .gp-theprint-site-main -->
	</div><!-- .gp-theprint-row -->
</div><!-- #main## -->
		
<?php get_footer(); ?>