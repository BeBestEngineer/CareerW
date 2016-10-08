<?php
/**
 * The template used for displaying featured content with style C.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php if ( get_option( 'gp_theprint_featured_posts_enable' ) != '' ) : ?>

<div class="gp-theprint-row">
	<?php 
	// Only on homepage.
	if( is_home() && !is_paged() ): 
	?>
		<div class="gp-theprint-featured-posts">
			<div class="gp-theprint-articles">
				<?php 
				// Start the query.
				$featured_posts_c = new WP_Query( array(
					'showposts' => 6, 
					'meta_key' => 'gp_theprint_featured_post_add', 
					'meta_value' => '1', 
				) ); 
				?>
					<?php if ( $featured_posts_c->have_posts() ): ?>
						<?php 
						// Start the loop.
						$count = 0;
						while( $featured_posts_c->have_posts() ): $featured_posts_c->the_post(); $count++;
						?>

							<?php if ( $count == 1 || $count == 6 ): ?>
								
								<div class="gp-theprint-featured-post-c featured-post style-a">
									<div class="featured-image">
										<?php if ( get_option( 'gp_theprint_featured_posts_shadow_style' ) == 'style-d' ): ?>
											<div class="entry-perfect-shadow"></div><!-- .entry-perfect-shadow -->
										<?php else: ?>
											<div class="entry-overlay"></div><!-- .entry-overlay -->
										<?php endif; ?>

										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'gp-theprint-589x280', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
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
										</div><!-- .entry-description -->

										<a class="entry-link" href="<?php esc_url( the_permalink() ); ?>"></a><!-- .entry-link -->
									</div><!-- .featured-image -->
								</div>

							<?php else: ?>

								<div class="gp-theprint-featured-post-c featured-post style-b">
									<div class="featured-image">
										<?php if ( get_option( 'gp_theprint_featured_posts_shadow_style' ) == 'style-d' ): ?>
											<div class="entry-perfect-shadow"></div><!-- .entry-perfect-shadow -->
										<?php else: ?>
											<div class="entry-overlay"></div><!-- .entry-overlay -->
										<?php endif; ?>

										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'gp-theprint-294x280', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
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
										</div><!-- .entry-description -->

										<a class="entry-link" href="<?php esc_url( the_permalink() ); ?>"></a><!-- .entry-link -->
									</div><!-- .featured-image -->
								</div>

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
	<?php endif; ?>	
</div><!-- .gp-theprint-row -->

<?php endif; ?>