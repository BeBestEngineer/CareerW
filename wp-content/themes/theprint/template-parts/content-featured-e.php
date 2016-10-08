<?php
/**
 * The template used for displaying featured content with style E.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php if ( get_option( 'gp_theprint_featured_posts_enable' ) != '' ) : ?>
	<?php 
	// Only on homepage.
	if( is_home() && !is_paged() ): ?>

	<div class="gp-theprint-row">
		<div class="gp-theprint-featured-posts">
			<div class="gp-theprint-articles">
				<?php 
				// Start the query.
				$featured_posts_e = new WP_Query( array(
					'showposts' => 3, 
					'meta_key' => 'gp_theprint_featured_post_add', 
					'meta_value' => '1', 
				) ); 
				?>
					<?php if ( $featured_posts_e->have_posts() ) : ?>
						<?php 
						// Start the loop.
						$count = 0;
						while( $featured_posts_e->have_posts() ): $featured_posts_e->the_post(); $count++;
						?>

							<?php if ($count == 1): ?>
								
								<div class="gp-theprint-featured-post-e featured-post style-a">
									<div class="featured-image">
										<?php if ( get_option( 'gp_theprint_featured_posts_shadow_style' ) == 'style-d' ): ?>
											<div class="entry-perfect-shadow"></div><!-- .entry-perfect-shadow -->
										<?php else: ?>
											<div class="entry-overlay"></div><!-- .entry-overlay -->
										<?php endif; ?>

										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'gp-theprint-710x562', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
										<?php endif; ?>

										<div class="entry-description">
											<header class="entry-header">
												<?php if ( get_option( 'gp_theprint_featured_posts_entry_meta_category_hide' ) != '' ): ?>
												<?php else: ?>
													<p class="entry-meta-category">
														<span class="entry-category">
															<?php echo gp_theprint_featured_posts_category_style(); ?>
														</span>
													</p>
												<?php endif; ?>

												<h2 class="entry-title"><?php the_title(); ?></h2>
											</header><!-- .entry-header -->

											<?php if ( get_option( 'gp_theprint_featured_posts_shadow_style' ) == 'style-c' ): ?>
												<div class="entry-shadow"></div>
											<?php endif; ?>
										</div><!-- .entry-description -->

										<a class="entry-link" href="<?php esc_url( the_permalink() ); ?>"></a><!-- .entry-link -->
									</div><!-- .featured-image -->
								</div><!-- .gp-theprint-featured-post-e -->

							<?php else: ?>

								<div class="gp-theprint-featured-post-e featured-post style-b">
									<div class="featured-image">
										<?php if ( get_option( 'gp_theprint_featured_posts_shadow_style' ) == 'style-d' ): ?>
											<div class="entry-perfect-shadow"></div><!-- .entry-perfect-shadow -->
										<?php else: ?>
											<div class="entry-overlay"></div><!-- .entry-overlay -->
										<?php endif; ?>

										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'gp-theprint-468x280', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
										<?php endif; ?>

										<div class="entry-description">
											<header class="entry-header">
												<?php if ( get_option( 'gp_theprint_featured_posts_entry_meta_category_hide' ) != '' ): ?>
												<?php else: ?>
													<p class="entry-meta-category">
														<span class="entry-category">
															<?php echo gp_theprint_featured_posts_category_style(); ?>
														</span>
													</p>
												<?php endif; ?>

												<h2 class="entry-title"><?php the_title(); ?></h2>
											</header><!-- .entry-header -->

											<?php if ( get_option( 'gp_theprint_featured_posts_shadow_style' ) == 'style-c' ): ?>
												<div class="entry-shadow"></div>
											<?php endif; ?>
										</div><!-- .entry-description -->

										<a class="entry-link" href="<?php esc_url( the_permalink() ); ?>"></a><!-- .entry-link -->
									</div><!-- .featured-image -->
								</div><!-- .gp-theprint-featured-post-e -->

							<?php endif; ?>

						<?php 
						// End the loop.
						endwhile; 
						?>
					<?php endif; ?>
				<?php 
				// Restore original Post Data.
				wp_reset_postdata();
				?>
			</div><!-- .gp-theprint-articles -->
		</div><!-- .gp-theprint-featured-posts -->
	</div><!-- .gp-theprint-row -->

	<?php endif; ?>
<?php endif; ?>