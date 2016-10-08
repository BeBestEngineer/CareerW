<?php
/**
 * The template for displaying the header style P.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<div class="gp-theprint-site-header sticky-header">
	<div class="gp-theprint-row">
		<div class="gp-theprint-wrap">
			<div class="gp-theprint-menu-button">
				<button id="open-button" class="menu-button">
					<span class="top"></span>
					<span class="mid"></span>
					<span class="bot"></span>
				</button>
			</div><!-- .gp-theprint-menu-button -->

			<div class="gp-theprint-logo">
				<?php if ( is_front_page() && is_home() ) : ?>

					<?php if ( get_option( 'gp_theprint_image_logo_enable' ) != '' ) : ?>
						<h1 class="site-logo" itemprop="headline">
							<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php if ( get_option( 'gp_theprint_image_logo_upload' ) != '' ) : ?><?php echo esc_url( get_option( 'gp_theprint_image_logo_upload' ) ); ?><?php endif; ?>" alt="<?php esc_attr( bloginfo('name') ); ?>">

								<span style="display:none;"><?php bloginfo('name'); ?></span>
							</a>
						</h1>

						<p class="site-description" itemprop="description"><?php bloginfo('description'); ?></p>
					<?php else: ?>
						<h1 class="site-title" itemprop="headline">
							<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
						</h1>

						<p class="site-description" itemprop="description"><?php bloginfo('description'); ?></p>
					<?php endif; ?>

				<?php else: ?>

					<?php if ( get_option( 'gp_theprint_image_logo_enable' ) != '' ) : ?>
						<p class="site-logo" itemprop="headline">
							<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php if ( get_option( 'gp_theprint_image_logo_upload' ) != '' ) : ?><?php echo esc_url( get_option( 'gp_theprint_image_logo_upload' ) ); ?><?php endif; ?>" alt="<?php esc_attr( bloginfo('name') ); ?>">

								<span style="display:none;"><?php bloginfo('name'); ?></span>
							</a>
						</p>

						<p class="site-description" itemprop="description"><?php bloginfo('description'); ?></p>
					<?php else: ?>
						<p class="site-title" itemprop="headline">
							<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
						</p>

						<p class="site-description" itemprop="description"><?php bloginfo('description'); ?></p>
					<?php endif; ?>
						
				<?php endif; ?>
			</div><!-- .gp-theprint-logo -->

			<nav class="gp-theprint-primary-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<?php wp_nav_menu( array(
					'theme_location' => 'gp_theprint_primary_navigation',
					'echo' => true,
					'items_wrap' => '<ul>%3$s</ul>',
					'walker' => new gp_theprint_mega_menu()
				) ); ?>
			</nav><!-- .gp-theprint-primary-navigation -->

			<div class="gp-theprint-header-icons">
				<ul>
					<?php if ( get_option( 'gp_theprint_facebook_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_facebook_url' ) ); ?>"><i class="fa fa-facebook"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_twitter_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_twitter_url' ) ); ?>"><i class="fa fa-twitter"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_google_plus_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_google_plus_url' ) ); ?>"><i class="fa fa-google"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_linkedin_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_linkedin_url' ) ); ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_pinterest_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_pinterest_url' ) ); ?>"><i class="fa fa-pinterest"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_instagram_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_instagram_url' ) ); ?>"><i class="fa fa-instagram"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_youtube_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_youtube_url' ) ); ?>"><i class="fa fa-youtube"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_rss_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_rss_url' ) ); ?>"><i class="fa fa-rss"></i></a></li>
					<?php endif; ?>

					<li class="search-icon">
						<a href="#" id="gp-theprint-search-trigger"><i class="fa fa-search"></i></a>

						<div class="gp-theprint-search-bar">
							<?php get_search_form(); ?>
						</div><!-- .gp-theprint-search-bar -->
					</li>
				</ul>
			</div><!-- .gp-theprint-header-icons -->
		</div><!-- .gp-theprint-wrap -->
	</div><!-- .gp-theprint-row -->
</div><!-- .gp-theprint-site-header -->

<nav class="gp-theprint-secondary-navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
	<div class="gp-theprint-row">
		<div class="gp-theprint-wrap">
			<?php wp_nav_menu( array(
				'theme_location' => 'gp_theprint_secondary_navigation',
				'echo' => true,
				'items_wrap' => '<ul>%3$s</ul>'
			) ); ?>
		</div><!-- .gp-theprint-wrap -->
	</div><!-- .gp-theprint-row -->
</nav><!-- .gp-theprint-secondary-navigation -->

<div class="gp-theprint-header-blocks" style="margin-top: 1.563rem;">
	<?php if ( !is_singular()  || ( get_field('gp_theprint_single_post_style') != 'style-f' ) ): ?>
		<?php get_template_part('inc/top', 'ad'); ?>
	<?php endif; ?>
</div><!-- .gp-theprint-header-blocks -->