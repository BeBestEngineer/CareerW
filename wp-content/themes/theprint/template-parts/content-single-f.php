<?php
/**
 * The template used for displaying single content with style F.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<style type="text/css">
	.gp-theprint-site-header {
		margin: 0;
		position: relative;
		z-index: 9999;
	}
	.gp-theprint-main {
		margin: 0;
	}
	.gp-theprint-header-blocks {
		display: none;
	}
	.gp-theprint-site-main {
		margin-top: 0;
	}
</style>

<div id="main" class="gp-theprint-main">
	<div class="entry-cover style-f">
		<div class="featured-image parallax-window" data-parallax="scroll" data-image-src="<?php if (has_post_thumbnail( $post->ID ) ): ?><?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?><?php echo $image[0]; ?><?php endif; ?>">
			<div class="entry-overlay"></div>

			<header class="entry-header">
				<div class="vertical-middle">
					<div class="gp-theprint-row">
						<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>

						<p class="entry-meta">	
							<span class="slash first"><?php esc_html_e('By', 'theprint'); ?> </span>
							<span class="entry-author vcard author" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a rel="author" itemprop="url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="fn" itemprop="name"><?php the_author(); ?></span></a></span>
							<span class="slash"> <?php esc_html_e('on', 'theprint'); ?> </span>
							<span class="entry-time"><time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" itemprop="datePublished"><?php the_time( get_option( 'date_format' ) ); ?></time></span>
							<span class="slash"> / </span>
							<span class="entry-comment"><?php comments_popup_link(esc_html__( '0 Comments', 'theprint' ), esc_html__( '1 Comment', 'theprint' ), '% '.esc_html__( 'Comments', 'theprint' )); ?></span>
						</p>
					</div><!-- .gp-theprint-row -->
				</div><!-- .vertical-middle -->
			</header><!-- .entry-header -->

			<div class="entry-parallax-button">
				<a id="parallax-trigger" href="#"><i class="fa fa fa-angle-down"></i></a>
			</div><!-- .entry-parallax-button -->
		</div><!-- .featured-image -->
	</div><!-- .entry-cover -->

	<div class="gp-theprint-row">
		<div class="gp-theprint-site-main">
			<main id="content" class="gp-theprint-content single-post" role="main">
				<?php 
				// Start the loop.
				while ( have_posts() ) : the_post(); 
				?>

					<article <?php post_class('entry-single style-f'); ?> itemscope="itemscope" itemtype="http://schema.org/<?php if ( get_field('gp_theprint_enable_rating') == '1' ): 
?>Review<?php else: ?><?php if ( get_option( 'gp_theprint_schema_seo' ) == 'article' ): ?>NewsArticle<?php else: ?>BlogPosting<?php endif; ?><?php endif; ?>">
						<meta itemscope itemprop="mainEntityOfPage"  itemType="https://schema.org/WebPage" itemid="<?php esc_url( the_permalink() ); ?>"/>

						<?php echo gp_theprint_breadcrumbs(); ?>

						<h1 class="hide entry-title" itemprop="headline"><?php the_title(); ?></h1>

						<p class="hide entry-meta">	
							<span class="slash first"><?php esc_html_e('By', 'theprint'); ?> </span>
							<span class="entry-author vcard author" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a rel="author" itemprop="url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="fn" itemprop="name"><?php the_author(); ?></span></a></span>
							<span class="slash"> <?php esc_html_e('on', 'theprint'); ?> </span>
							<span class="entry-time"><time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" itemprop="datePublished"><?php the_time( get_option( 'date_format' ) ); ?></time></span>
							<span class="slash"> / </span>
							<span class="entry-comment"><?php comments_popup_link(esc_html__( '0 Comments', 'theprint' ), esc_html__( '1 Comment', 'theprint' ), '% '.esc_html__( 'Comments', 'theprint' )); ?></span>
						</p>

						<meta itemprop="datePublished" content="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"/>
						<meta itemprop="dateModified" content="<?php the_modified_time('c'); ?>"/>

						<div class="hide" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
						  	<div class="hide" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
						      	<img src="<?php if ( get_option( 'gp_theprint_image_logo_upload' ) != '' ) : ?><?php echo esc_url( get_option( 'gp_theprint_image_logo_upload' ) ); ?><?php endif; ?>"/>

						      	<meta itemprop="url" content="<?php if ( get_option( 'gp_theprint_image_logo_upload' ) != '' ) : ?><?php echo esc_url( get_option( 'gp_theprint_image_logo_upload' ) ); ?><?php endif; ?>">
						    </div>

						  	<meta itemprop="name" content="<?php bloginfo('name'); ?>">
						</div>

						<?php 
						  	$gp_theprint_thumbnail_id = get_post_thumbnail_id( $post->ID );
							$gp_theprint_thumbnail_img = wp_get_attachment_image_src( $gp_theprint_thumbnail_id, 'full' );
							$gp_theprint_thumbnail_width = $gp_theprint_thumbnail_img[1];
							$gp_theprint_thumbnail_height = $gp_theprint_thumbnail_img[2]; 
						?>
						<div class="hide" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
							<img src="<?php the_post_thumbnail_url(); ?>"/>
							<meta itemprop="url" content="<?php the_post_thumbnail_url(); ?>">
							<meta itemprop="width" content="<?php echo $gp_theprint_thumbnail_width; ?>">
							<meta itemprop="height" content="<?php echo $gp_theprint_thumbnail_height; ?>">
						</div>

						<div class="entry-wrap">
							<div class="entry-blocks<?php if ( get_field('gp_theprint_post_sidebar') == 'post_sidebar_off' ): ?> full-width<?php endif; ?>">
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
								get_template_part( 'inc/single-post/entry', 'rating' ); 
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
								// Comments
								if ( comments_open() || get_comments_number() ) { comments_template(); } 
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
								get_sidebar(); 
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
		</div><!-- .gp-theprint-site-content -->
	</div><!-- .gp-theprint-row -->

	<div class="hide">
		<?php 
		// Entry navigation.
		get_template_part( 'inc/single-post/entry', 'navigation' ); 
		?>
	</div><!-- .hide -->

	<?php 
	// Entry share mobile.
	get_template_part('inc/single-post/entry', 'share-mobile'); 
	?>
</div><!-- #main## -->