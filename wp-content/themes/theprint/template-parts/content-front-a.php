<?php
/**
 * The template used for displaying content with style A.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php 
// Start the loop.
$count = 0;
while (have_posts()) : the_post(); $count++;
?>

	<?php if ( ($count == 1 || $count == 3 || $count == 5 || $count == 7 || $count == 9 || $count == 11 || $count == 13 || $count == 15 || $count == 17 || $count == 19 || $count == 21 || $count == 23 || $count == 25 || $count == 27 || $count == 29) ) : ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'gp-theprint-front-post-a front-post first' ); ?>>
			<div class="featured-image">
				<?php if ( has_post_thumbnail() ): ?>
					<a href="<?php esc_url( the_permalink() ); ?>">
						<?php the_post_thumbnail( 'gp-theprint-355x220', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>

						<?php gp_theprint_entry_format(); ?>
					</a>

					<?php 
					// Entry share.
					get_template_part('inc/front-posts/entry', 'share'); 
					?>
				<?php endif; ?>
			</div><!-- .featured-image -->

			<header class="entry-header">
				<p class="entry-meta-category">
					<span class="entry-category"><?php echo gp_theprint_entry_meta_category_style(); ?></span>
				</p>

				<h2 class="entry-title">
					<a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				
				<?php 
				// Entry meta.
				get_template_part('inc/front-posts/entry', 'meta'); 
				?>
			</header><!-- .entry-header -->
		</article><!-- .hentry -->

	<?php else: ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class( 'gp-theprint-front-post-a front-post' ); ?>>
			<div class="featured-image">
				<?php if ( has_post_thumbnail() ): ?>
					<a href="<?php esc_url( the_permalink() ); ?>">
						<?php the_post_thumbnail( 'gp-theprint-355x220', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>

						<?php gp_theprint_entry_format(); ?>
					</a>

					<?php 
					// Entry share.
					get_template_part('inc/front-posts/entry', 'share'); 
					?>
				<?php endif; ?>
			</div><!-- .featured-image -->

			<header class="entry-header">
				<p class="entry-meta-category">
					<span class="entry-category"><?php echo gp_theprint_entry_meta_category_style(); ?></span>
				</p>

				<h2 class="entry-title">
					<a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				
				<?php 
				// Entry meta.
				get_template_part('inc/front-posts/entry', 'meta'); 
				?>
			</header><!-- .entry-header -->
		</article><!-- .hentry -->

	<?php endif; ?>

<?php 
// End the loop.
endwhile; 
?>