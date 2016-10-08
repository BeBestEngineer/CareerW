<?php
/**
 * The template used for displaying related posts.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php if ( get_option( 'gp_theprint_entry_related_posts' ) != '' ): ?>

<div class="entry-related-posts">
	<h4 class="gp-theprint-block-title"><?php esc_html_e( 'Related Posts', 'theprint' ); ?></h4>

	<div class="gp-theprint-articles">
		<?php 
		// Get the related posts number.
		$related_posts_number = get_option( 'gp_theprint_entry_related_posts_number' ); 
		?>
		<?php $orig_post = $post; $categories = get_the_category( $post->ID ); ?>
		<?php if ( $categories ): ?> 
		<?php $category_ids = array(); foreach( $categories as $individual_category ) $category_ids[] = $individual_category->term_id; $args=array( 'category__in' => $category_ids, 'post__not_in' => array( $post->ID ), 'posts_per_page'=> $related_posts_number, 'orderby'=> 'rand', 'ignore_sticky_posts'=> 1 ); ?>
   	 	<?php $related_posts = new wp_query( $args ); ?>
    		<?php if( $related_posts->have_posts() ): ?>
   				<?php 
   				// Start the loop.
   				while( $related_posts->have_posts() ): $related_posts->the_post();
   				?>

    				<div class="entry-related-post">
						<div class="featured-image">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php esc_url( the_permalink() ); ?>">
									<?php the_post_thumbnail( 'gp-theprint-355x220', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
									
									<?php gp_theprint_entry_format(); ?>
								</a>
							<?php endif; ?>
						</div><!-- .featured-image -->

						<h5 class"entry-title"><a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a></h5>
					</div><!-- .entry-related-post -->

				<?php 
				// End the loop.
				endwhile; 
				?> 
			<?php endif; ?>
		<?php endif; ?>
		<?php 
		// Restore original Post Data.
		wp_reset_postdata();
		?>

	</div><!-- .gp-theprint-articles -->
</div><!-- .entry-related-posts -->

<?php endif; ?>