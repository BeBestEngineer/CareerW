<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

get_header(); ?>

<div class="gp-theprint-main">

	<?php if ( get_option( 'gp_theprint_featured_posts_style' ) == 'featured-b' ): ?>
		<?php 
		// Get the featured content with style b.
		get_template_part('template-parts/content', 'featured-b'); 
		?>
	<?php elseif ( get_option( 'gp_theprint_featured_posts_style' ) == 'featured-c' ): ?>
		<?php 
		// Get the featured content with style c.
		get_template_part('template-parts/content', 'featured-c'); 
		?>
	<?php elseif ( get_option( 'gp_theprint_featured_posts_style' ) == 'featured-d' ): ?>
		<?php 
		// Get the featured content with style d.
		get_template_part('template-parts/content', 'featured-d'); 
		?>
	<?php elseif ( get_option( 'gp_theprint_featured_posts_style' ) == 'featured-e' ): ?>
		<?php 
		// Get the featured content with style e.
		get_template_part('template-parts/content', 'featured-e'); 
		?>
	<?php elseif ( get_option( 'gp_theprint_featured_posts_style' ) == 'featured-f' ): ?>
		<?php 
		// Get the featured content with style f.
		get_template_part('template-parts/content', 'featured-f'); 
		?>
	<?php else: ?>
		<?php 
		// Get the featured content with style a.
		get_template_part('template-parts/content', 'featured-a'); 
		?>
	<?php endif; ?>

	<div class="gp-theprint-row">
		<div class="gp-theprint-site-main">
			<div class="gp-theprint-wrap">
				<main id="content" class="gp-theprint-content">

				<?php if ( get_option( 'gp_theprint_homepage_posts_hide' ) != '' ): ?>
				<?php else: ?>
					<?php if ( !have_posts() ): ?>
						<?php get_template_part('template-parts/content', 'none'); ?>
					<?php else: ?>
                                    
                                                <?php if( is_home() && !is_paged() ): ?>
                                                        <?php 
                                                        // Homepage widget area #3.
                                                        if ( is_active_sidebar( 'sidebar-6' ) ) : 
                                                        ?>
                                                                <div class="gp-theprint-homepage-widget-area-3">
                                                                        <?php dynamic_sidebar( 'sidebar-6' ); ?>
                                                                </div><!-- .gp-homepage-widget-area-3 -->
                                                        <?php
                                                        // End homepage widget area #3.
                                                        endif; 
                                                        ?>
                                                <?php endif; ?>                                    
						
						<h4 class="gp-theprint-page-title">
							<span><?php //esc_html_e('Latest Posts', 'theprint'); ?></span>
							<span class="after"></span>
						</h4>

						<div class="gp-theprint-articles front-posts<?php if ( get_option( 'gp_theprint_front_posts_style' ) == 'style-a' || get_option( 'gp_theprint_front_posts_style' ) == 'style-b' || get_option( 'gp_theprint_front_posts_style' ) == 'style-e' ): ?> with-padding<?php endif; ?>">
							<?php if ( get_option( 'gp_theprint_front_posts_style' ) == 'style-b' ): ?>
								<?php 
								// Get the front post style b.
								get_template_part('template-parts/content', 'front-b'); 
								?>
							<?php elseif ( get_option( 'gp_theprint_front_posts_style' ) == 'style-c' ): ?>
								<?php 
								// Get the front post style c.
								get_template_part('template-parts/content', 'front-c'); 
								?>
							<?php elseif ( get_option( 'gp_theprint_front_posts_style' ) == 'style-d' ): ?>
								<?php 
								// Get the front post style d.
								get_template_part('template-parts/content', 'front-d'); 
								?>
							<?php elseif ( get_option( 'gp_theprint_front_posts_style' ) == 'style-e' ): ?>
								<?php 
								// Get the front post style E.
								get_template_part('template-parts/content', 'front-e'); 
								?>
							<?php elseif ( get_option( 'gp_theprint_front_posts_style' ) == 'style-f' ): ?>
								<?php 
								// Get the front post style F.
								get_template_part('template-parts/content', 'front-f'); 
								?>
							<?php elseif ( get_option( 'gp_theprint_front_posts_style' ) == 'style-g' ): ?>
								<?php 
								// Get the front post style G.
								get_template_part('template-parts/content', 'front-g'); 
								?>
							<?php elseif ( get_option( 'gp_theprint_front_posts_style' ) == 'style-h' ): ?>
								<?php 
								// Get the front post style h.
								get_template_part('template-parts/content', 'front-h'); 
								?>
							<?php elseif ( get_option( 'gp_theprint_front_posts_style' ) == 'style-i' ): ?>
								<?php 
								// Get the front post style i.
								get_template_part('template-parts/content', 'front-i'); 
								?>
							<?php elseif ( get_option( 'gp_theprint_front_posts_style' ) == 'style-j' ): ?>
								<?php 
								// Get the front post style j.
								get_template_part('template-parts/content', 'front-j'); 
								?>
							<?php elseif ( get_option( 'gp_theprint_front_posts_style' ) == 'style-k' ): ?>
								<?php 
								// Get the front post style k.
								get_template_part('template-parts/content', 'front-k'); 
								?>
							<?php else: ?>
								<?php 
								// Get the front post style a.
								get_template_part('template-parts/content', 'front-a'); 
								?>
							<?php endif; ?>
						</div><!-- .gp-theprint-articles-->

						
					<?php endif; ?>

					
					<?php 
					// Get the pagination.
					get_template_part('pagination'); 
					?>
					
				<?php endif; ?>

					<?php if( is_home() && !is_paged() ): ?>
						<?php 
						// Homepage widget area #1.
						if ( is_active_sidebar( 'sidebar-4' ) ): 
						?>
							<div class="gp-theprint-homepage-widget-area-1">
								<?php //dynamic_sidebar( 'sidebar-4' ); ?>
							</div><!-- .gp-theprint-homepage-widget-area-1 -->
						<?php 
						// End homepage widget area #1.
						endif; 
						?>
					<?php endif; ?>
				</main><!-- #content## -->

				<?php 
				// Showing sidebar.
				get_sidebar(); 
				?>
			</div><!-- .gp-theprint-wrap -->

			<?php if ( get_option( 'gp_theprint_staff_posts_style' ) == 'style-b' ): ?>
				<?php 
				// Get the staff posts with style B.
				get_template_part('template-parts/content', 'staff-posts-b'); 
				?>
			<?php else: ?>
				<?php 
				// Get the staff posts with style A.
				get_template_part('template-parts/content', 'staff-posts-a'); 
				?>
			<?php endif; ?>

			<?php 
			// Get the homepage newsletter.
			get_template_part('inc/newsletters/homepage', 'newsletter'); 
			?>

			<?php if( is_home() && !is_paged() ): ?>
				<div class="gp-theprint-wrap">
					<?php 
					// Homepage widget area #2.
					if ( is_active_sidebar( 'sidebar-5' ) ) : 
					?>
						<div id="content-2" class="gp-theprint-content">
							<div class="gp-theprint-homepage-widget-area-2">
								<?php dynamic_sidebar( 'sidebar-5' ); ?>
							</div><!-- .gp-theprint-homepage-widget-area-three -->
						</div>
					<?php endif; ?>

					<?php 
					// Sidebar widget area #2.
					if ( is_active_sidebar( 'sidebar-7' ) ) : 
					?>
						<?php 
						// Get the sidebar #2.
						get_sidebar('two'); 
						?>
					<?php endif; ?>

				</div><!-- .gp-theprint-wrap -->
			<?php endif; ?>

			
		</div><!-- .gp-site-main -->
	</div><!-- .gp-row -->
</div><!-- #main## -->

<?php get_footer(); ?>