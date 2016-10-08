<?php
/**
 * The template for displaying author archive pages.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

get_header(); ?>

<div id="main" class="gp-theprint-main">
	<div class="gp-theprint-row">
		<div class="gp-theprint-site-main">
			<main id="content" class="gp-theprint-content">
				<?php echo gp_theprint_breadcrumbs(); ?>

				<?php if (!have_posts()) : ?>
					<?php get_template_part('template-parts/content', 'none'); ?>
				<?php else: ?>	
					<header class="archive-header">
						<h1 class="archive-title">
							<?php
								/*
								 * Author title.
								 */
								 printf( esc_html__( 'All posts by %s', 'theprint' ), get_the_author() );
							?>
						</h1>
					</header><!-- .archive-header -->

					<div class="gp-theprint-author-box">
						<div class="author-avatar">
							<?php echo get_avatar( get_the_author_meta( 'email' ), '100' ); ?>
						</div><!-- .author-avatar -->

						<h2 class="vcard author author-title"><span class="fn" itemprop="name"><?php the_author(); ?></span></h2>

						<div class="author-description" itemprop="description">
							<p><?php the_author_meta( 'description' ); ?></p>
						</div><!-- .author-description -->
					</div><!-- .gp-theprint-author-box -->

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
					</div><!-- .gp-theprint-articles -->
				<?php endif; ?>

				<?php 
				// Get the pagination.
				get_template_part('pagination'); 
				?>
			</main><!-- #content## -->

			<?php 
			// Get the sidebar.
			get_sidebar(); 
			?>
		</div><!-- .gp-theprint-site-main -->
	</div><!-- .gp-theprint-row -->
</div><!-- #main## -->
		
<?php get_footer(); ?>