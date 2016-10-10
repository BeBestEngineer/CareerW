<?php
/**
 * The template used for displaying single content with style A.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<div id="main" class="gp-theprint-main">
	<div class="gp-theprint-row">
		<div class="gp-theprint-site-main">
			<main id="content" class="gp-theprint-content single-post<?php if ( get_field('gp_theprint_post_sidebar') == 'post_sidebar_off' ): ?> full-width<?php endif; ?>">

				<?php 
				// Start the loop.
				while ( have_posts() ) : the_post(); 
				?>

					<article <?php post_class( 'entry-single style-a' ); ?> itemscope="itemscope" itemtype="http://schema.org/<?php if ( get_field('gp_theprint_enable_rating') == '1' ): 
?>Review<?php else: ?><?php if ( get_option( 'gp_theprint_schema_seo' ) == 'article' ): ?>NewsArticle<?php else: ?>BlogPosting<?php endif; ?><?php endif; ?>">
						<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="<?php esc_url( the_permalink() ); ?>"/>
						
						<?php echo gp_theprint_breadcrumbs(); ?>
						
						<header class="entry-header">
							<div class="single-entry-meta-category">
								<span class="entry-category"><?php echo ''.gp_theprint_single_entry_meta_category_style(); ?></span>
							</div>

							<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>

							<?php 
							// Entry meta.
							get_template_part('inc/single-post/entry', 'meta'); 
							?>
						</header><!-- .entry-header -->

						<div class="entry-wrap">
							<div class="entry-blocks">
								<?php 
								// Entry share.
								get_template_part('inc/single-post/entry', 'share'); 
								?>

								<?php 
								// Entry ad above.
								get_template_part('inc/single-post/entry', 'ad-above'); 
								?>

								<?php 
								// Entry content.
								get_template_part('inc/single-post/entry', 'content'); 
								?>

								<?php 
								// Entry rating.
								get_template_part('inc/single-post/entry', 'rating'); 
								?>

								<?php 
								// Entry ad under.
								get_template_part('inc/single-post/entry', 'ad-under'); 
								?>

								<?php 
								// Entry footer.
								get_template_part('inc/single-post/entry', 'footer'); 
								?>

								<?php 
								// Entry newsletter.
								get_template_part('inc/single-post/entry', 'newsletter'); 
								?>

								<?php 
								// Entry author box.
								get_template_part('inc/single-post/entry', 'author-box'); 
								?>

								<?php 
								// Entry related posts.
								get_template_part('inc/single-post/entry', 'related-posts'); 
								?>

								<?php 
								// Comments.
								if ( comments_open() || get_comments_number() ) { /*comments_template();*/ } 
								?>

								<?php if( get_option( 'gp_theprint_entry_recent_posts_style' ) == 'style-b'): ?>
									<?php 
									// Entry recent posts with style B.
									get_template_part('inc/single-post/entry', 'recent-posts-b'); 
									?>
								<?php elseif( get_option( 'gp_theprint_entry_recent_posts_style' ) == 'style-c'): ?>
									<?php 
									// Entry recent posts with style C.
									get_template_part('inc/single-post/entry', 'recent-posts-c'); 
									?>
								<?php endif; ?>
							</div><!-- .entry-blocks -->

							<?php if ( get_field('gp_theprint_post_sidebar') == 'post_sidebar_off' ): ?>
							<?php else: ?>
								<?php 
								// Get the sidebar.
								//get_sidebar(); 
							?>
							<?php endif; ?>
						</div><!-- .entry-wrap -->
					</article><!-- .hentry -->

					<?php if( get_option( 'gp_theprint_entry_recent_posts_style' ) == 'style-b'): ?>
					<?php elseif( get_option( 'gp_theprint_entry_recent_posts_style' ) == 'style-c'): ?>
					<?php elseif( get_option( 'gp_theprint_entry_recent_posts_style' ) == 'style-d'): ?>
						<?php 
						// Entry recent posts with style D.
						get_template_part('inc/single-post/entry', 'recent-posts-d'); 
						?>
					<?php else: ?>
						<?php 
						// Entry recent posts with style A.
						get_template_part('inc/single-post/entry', 'recent-posts-a'); 
						?>
					<?php endif; ?>

				<?php 
				// End the loop.
				endwhile; 
				?>

			</main><!-- #content## -->
		</div><!-- .gp-theprint-site-main -->
	</div><!-- .gp-theprint-row -->

	<?php 
	// Entry navigation.
	get_template_part( 'inc/single-post/entry', 'navigation' ); 
	?>

	<?php 
	// Entry share mobile.
	get_template_part('inc/single-post/entry', 'share-mobile'); 
	?>
</div><!-- #main## -->