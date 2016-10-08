<?php
/**
 * The template for displaying all single posts and attachments.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

get_header(); ?>

	<?php if ( get_field('gp_theprint_single_post_style') == 'style-b' ): ?>
		<?php 
		// Get single post with style B.
		get_template_part('template-parts/content', 'single-b'); 
		?>
	<?php elseif ( get_field('gp_theprint_single_post_style') == 'style-c' ): ?>
		<?php 
		// Get single post with style C.
		get_template_part('template-parts/content', 'single-c'); 
		?>
	<?php elseif ( get_field('gp_theprint_single_post_style') == 'style-d' ): ?>
		<?php 
		// Get single post with style D.
		get_template_part('template-parts/content', 'single-d'); 
		?>
	<?php elseif ( get_field('gp_theprint_single_post_style') == 'style-e' ): ?>
		<?php 
		// Get single post with style E.
		get_template_part('template-parts/content', 'single-e'); 
		?>
	<?php elseif ( get_field('gp_theprint_single_post_style') == 'style-f' ): ?>
		<?php 
		// Get single post with style F.
		get_template_part('template-parts/content', 'single-f'); 
		?>
	<?php else: ?>
		<?php 
		// Get single post with style A.
		get_template_part('template-parts/content', 'single-a'); 
		?>
	<?php endif; ?>
		
<?php get_footer(); ?>