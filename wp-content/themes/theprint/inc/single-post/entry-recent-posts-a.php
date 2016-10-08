<?php
/**
 * The template used for displaying recent posts.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php if ( get_option( 'gp_theprint_entry_recent_posts' ) != '' ): ?>

<div class="entry-recent-posts">
	<h4 class="gp-theprint-block-title"><?php esc_html_e( 'Recent Posts', 'theprint' ); ?></h4>

	<div class="gp-theprint-articles">
		<?php 
		// Start the query.
		$entry_recent_posts = new WP_Query( array( 'showposts' => 6 ) ); 
		?>
		    <?php if( $entry_recent_posts->have_posts() ) : ?>
		   		<?php 
		   		// Start the loop.
		   		while( $entry_recent_posts->have_posts() ): $entry_recent_posts->the_post();
		   		?>

		    		<div class="entry-recent-post style-a">
						<div class="featured-image">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php esc_url( the_permalink() ); ?>">
									<?php the_post_thumbnail( 'gp-theprint-355x220', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
									
									<?php gp_theprint_entry_format(); ?>
								</a>
							<?php endif; ?>
						</div><!-- .featured-image -->

						<div class="entry-header">
							<p class="entry-meta-category">
								<span class="entry-category"><?php echo gp_theprint_entry_meta_category_style(); ?></span>
							</p>
							
							<h5 class="entry-title">
								<a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h5>
						</div><!-- .entry-header -->
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
	</div><!-- .gp-theprint-articles -->
</div><!-- .entry-recent-posts -->

<?php endif; ?>