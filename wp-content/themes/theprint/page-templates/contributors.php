<?php
/**
 * The template for contributors page.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
/* Template Name: Contributors Template */

get_header(); ?>

<div id="main" class="gp-theprint-main">
	<div class="gp-theprint-row">
		<div class="gp-theprint-site-main">
			<main id="content" class="gp-theprint-content single-page" role="main">
				<?php if (have_posts()) : ?>
					<?php 
						// Start the Loop.
						while (have_posts()) : the_post(); 
					?>
							<article <?php post_class('entry-page'); ?> itemscope="itemscope" itemtype="http://schema.org/CreativeWork">	
								<?php echo gp_theprint_breadcrumbs(); ?>

								<header class="entry-header">
									<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>

									<p class="entry-meta hide">
										<span class="entry-author vcard author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"><a class="fn" rel="author" itemprop="url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span itemprop="name"><?php the_author(); ?></span></a></span>
										<span class="entry-time"><time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" itemprop="datePublished"><?php the_time( get_option( 'date_format' ) ); ?></time></span>
									</p>
								</header><!-- .entry-header -->

								<div class="entry-content" itemprop="text">
									<?php gp_theprint_list_authors(); ?>
								</div><!-- .entry-content -->
							</article><!-- .hentry -->
					<?php 
						// End the loop.
						endwhile; 
					?>
				<?php endif; ?>
			</main><!-- #content## -->

			<?php 
				// Sidebar.
				get_sidebar(); 
			?>
		</div><!-- .gp-theprint-site-main -->
	</div><!-- .gp-theprint-row -->
</div><!-- #main## -->
		
<?php get_footer(); ?>