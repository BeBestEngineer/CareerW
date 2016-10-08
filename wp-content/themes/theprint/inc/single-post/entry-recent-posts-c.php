<?php
/**
 * The template used for displaying recent posts with style B.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php if ( get_option( 'gp_theprint_entry_recent_posts' ) != '' ): ?>

<div class="entry-recent-posts style-c">
	<h4 class="gp-theprint-block-title"><?php esc_html_e( 'Recent Posts', 'theprint' ); ?></h4>

	<?php 
	// Start the query.
	$entry_recent_posts = new WP_Query( array( 'showposts' => 8 ) ); 
	?>
		<?php if( $entry_recent_posts->have_posts() ) : ?>
		   	<?php 
		   	// Start the loop.
		   	while( $entry_recent_posts->have_posts() ): $entry_recent_posts->the_post();
		   	?>

		    	<div class="entry-recent-post style-c">
					<div class="featured-image">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php esc_url( the_permalink() ); ?>">
								<?php the_post_thumbnail( 'gp-theprint-360x260', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>

								<?php gp_theprint_entry_format(); ?>
							</a>
						<?php endif; ?>
					</div><!-- .featured-image -->

					<div class="entry-description">
						<div class="entry-header">
							<p class="entry-meta-category">
								<span class="entry-category"><?php echo gp_theprint_entry_meta_category_style(); ?></span>
							</p>
								
							<h5 class="entry-title">
								<a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h5>
						</div><!-- .entry-header -->

						<div class="entry-excerpt">
							<p><?php $content = get_the_content(); $trimmed_content = wp_trim_words( $content, 20, '...' ); echo $trimmed_content; ?></p>
						</div><!-- .entry-excerpt -->
					</div><!-- .entry-description -->
				</div><!-- .entry-recent-post -->

			<?php 
			// End the loop.
			endwhile; 
			?> 
		<?php endif; ?>
	<?php 
	// Restore original Post Data.
	wp_reset_postdata();
	?>
</div><!-- .entry-recent-posts -->

<?php endif; ?>