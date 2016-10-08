<?php
/**
 * The template used for displaying content with style I.
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

	<?php if ( ($count == 1 || $count == 4 || $count == 7 || $count == 11 || $count == 14 || $count == 17 || $count == 21 || $count == 24 || $count == 27) ) : ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('gp-theprint-front-post-i style-a front-post'); ?>>
			<div class="featured-image">
				<?php if ( has_post_thumbnail() ): ?>
					<a href="<?php esc_url( the_permalink() ); ?>">
						<?php the_post_thumbnail( 'gp-theprint-360x260', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>

						<?php gp_theprint_entry_format(); ?>
					</a>

					<?php 
					// Entry share.
					get_template_part('inc/front-posts/entry', 'share'); 
					?>
				<?php endif; ?>
			</div>

			<div class="entry-description">
				<header class="entry-header">
					<p class="entry-meta-category">
						<span class="entry-category"><?php echo gp_theprint_entry_meta_category_style(); ?></span>
					</p>

					<h2 class="entry-title">
						<a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
				</header><!-- .entry-header -->

				<div class="entry-excerpt">
					<p><?php $content = get_the_content(); $trimmed_content = wp_trim_words( $content, 25, '...' ); echo $trimmed_content; ?></p>
				</div><!-- .entry-excerpt -->

				<?php 
				// Entry meta.
				get_template_part('inc/front-posts/entry', 'meta'); 
				?>
			</div><!-- .entry-description -->
		</article><!-- .hentry -->

	<?php else: ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('gp-theprint-front-post-i style-b front-post'); ?>>
			<div class="featured-image">
				<?php if ( has_post_thumbnail() ): ?>
					<a href="<?php esc_url( the_permalink() ); ?>">
						<?php the_post_thumbnail( 'gp-theprint-360x260', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>

						<?php gp_theprint_entry_format(); ?>
					</a>

					<?php 
					// Entry share.
					get_template_part('inc/front-posts/entry', 'share'); 
					?>
				<?php endif; ?>
			</div>

			<div class="entry-description">
				<header class="entry-header">
					<p class="entry-meta-category">
						<span class="entry-category"><?php echo gp_theprint_entry_meta_category_style(); ?></span>
					</p>

					<h2 class="entry-title">
						<a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a>
					</h2>
				</header><!-- .entry-header -->

				<div class="entry-excerpt">
					<p><?php $content = get_the_content(); $trimmed_content = wp_trim_words( $content, 18, '...' ); echo $trimmed_content; ?></p>
				</div><!-- .entry-excerpt -->

				<?php 
				// Entry meta.
				get_template_part('inc/front-posts/entry', 'meta'); 
				?>
			</div><!-- .entry-description -->
		</article><!-- .hentry -->

	<?php endif; ?>

<?php 
// End the loop.
endwhile; 
?>