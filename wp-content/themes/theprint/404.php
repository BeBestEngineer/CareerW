<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

get_header(); ?>

<div id="main" class="gp-theprint-main">
	<div class="gp-theprint-row">
		<div class="gp-theprint-site-main">
			<main id="content" class="gp-theprint-content single-page">
				<article class="hentry entry-page error-404" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
					<?php echo gp_theprint_breadcrumbs(); ?>
					
					<header class="entry-header">
						<h1 class="entry-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'theprint'); ?></h1>	
					</header><!-- .entry-header -->	

					<div class="entry-content">
						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'theprint' ); ?></p>

						<?php get_search_form(); ?>
					</div><!-- .entry-content -->

					<div class="gp-theprint-archive-lists">
						<h4><?php esc_html_e('Recent Posts', 'theprint') ?></h4>		
						<ul>
							<?php $recent_posts = new WP_Query(array('showposts' => 10)); ?>
								<?php if ($recent_posts->have_posts()) : ?>
									<?php while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
										<li><a href="<?php esc_url( the_permalink() ); ?>"><?php the_title();?></a></li>
									<?php endwhile; ?>
								<?php endif; ?>
							<?php wp_reset_query(); ?>
						</ul>

						<h4><?php esc_html_e('Pages:', 'theprint') ?></h4>
						<ul>
							<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
						</ul>	
							
						<h4><?php esc_html_e('Monthly:', 'theprint') ?></h4>	
						<ul>
							<?php wp_get_archives('type=monthly'); ?>
						</ul>
				
						<h4><?php esc_html_e('Categories:', 'theprint') ?></h4>	
						<ul>
							<?php wp_list_categories( 'title_li=' ); ?>
						</ul>

						<h4><?php esc_html_e('Authors:', 'theprint') ?></h4>	
						<ul>
							<?php wp_list_authors(); ?>
						</ul>
					</div><!-- .gp-theprint-archive-lists -->
				</article><!-- .hentry -->
			</main><!-- #content## -->

			<?php 
			// Get the sidebar.
			get_sidebar(); 
			?>
		</div><!-- .gp-theprint-site-main -->
	</div><!-- .gp-theprint-row -->
</div><!-- #main## -->
		
<?php get_footer(); ?>