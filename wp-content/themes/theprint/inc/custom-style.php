<?php
/**
 * Custom style.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

?>

<style type="text/css">

	/* Primary color */
	<?php if ( get_option( 'gp_theprint_primary_color' ) != '' ): ?>
		a,a:hover,
		.entry-rating .rating-score-box .score-description .score-box .score-total,
		.entry-rating .rating-score-box .score-description .score-box .score-title {
			color: <?php echo esc_attr( get_option( 'gp_theprint_primary_color' ) ); ?>;
		}

		.entry-rating .rating-score-box .score-description .score-box {
			border: 4px solid <?php echo esc_attr( get_option( 'gp_theprint_primary_color' ) ); ?>;
		}

		.entry-rating .rating-breakdown .item .score-outer .score-line {
			background: <?php echo esc_attr( get_option( 'gp_theprint_primary_color' ) ); ?>;
		}
	<?php endif; ?>

	/* Secondary color */
	<?php if ( get_option( 'gp_theprint_secondary_color' ) != '' ): ?>
	.gp-theprint-recent-reviews-a ul li .featured-image .entry-review-badge,
	.gp-theprint-recent-reviews-b ul li .featured-image .entry-review-badge,
	.gp-theprint-recent-reviews-c ul li .featured-image .entry-review-badge,
	.gp-theprint-recent-reviews-d ul li .featured-image .entry-review-badge,
	.gp-theprint-recent-reviews-e ul li .entry-review-badge,
	.gp-theprint-recent-reviews-f ul li .entry-review-badge,
	.gp-theprint-recent-posts-e ul li .entry-counter, 
	.gp-theprint-trending-posts-e ul li .entry-counter, 
	.gp-theprint-recent-reviews-e ul li .entry-counter,
	.gp-theprint-recent-reviews-e ul li .entry-date-review-badge .entry-review-bar-overlay,
	.gp-theprint-recent-reviews-f ul li .entry-date-review-badge .entry-review-bar-overlay {
		background-color: <?php echo esc_attr( get_option( 'gp_theprint_secondary_color' ) ); ?>;
	}
	<?php endif; ?>


	/* Header style */
	<?php if( get_option( 'gp_theprint_header_style' ) == 'style-e'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-primary-navigation,
		.gp-theprint-header-icons {
			line-height: 3.750rem;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-f'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-primary-navigation,
		.gp-theprint-header-icons {
			line-height: 3.750rem;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-g'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-primary-navigation,
		.gp-theprint-header-icons {
			line-height: 3.750rem;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-h'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-primary-navigation,
		.gp-theprint-header-icons {
			line-height: 3.750rem;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-i'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-header-icons {
			line-height: 5.000rem;
		}

		.gp-theprint-primary-navigation {
			font-size: 1.000rem;
			line-height: 2.500rem;
			margin: 1.250rem 0 1.250rem 2.500rem;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-j'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-header-icons {
			line-height: 5.000rem;
		}

		.gp-theprint-primary-navigation {
			font-size: 1.000rem;
			line-height: 2.500rem;
			margin: 1.250rem 0 1.250rem 2.500rem;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-k'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-header-icons {
			line-height: 6.250rem;
		}

		.gp-theprint-primary-navigation {
			font-size: 1.000rem;
			line-height: 2.500rem;
			margin: 1.875rem 0 1.875rem 2.500rem;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-l'): ?>
		.gp-theprint-header-icons {
			font-size: 1.000rem;
			line-height: 2.375rem;
		}

		.gp-theprint-primary-navigation {
			font-size: 0.813rem;
			line-height: 2.375rem;
			margin-left: 0;
		}

		.gp-theprint-primary-navigation ul li.menu-item-has-children ul li a {
			font-size: 0.813rem;
		}

		.gp-theprint-logo {
			width: 100%;
			max-width: 100%;
			text-align: center;
		}

		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title {
			font-size: 3.125rem;
			margin-bottom: 1.563rem;
		}

		.gp-theprint-logo h1.site-logo, 
		.gp-theprint-logo p.site-logo {
			margin-bottom: 1.563rem;
		}

		.gp-theprint-logo h1.site-title a, 
		.gp-theprint-logo p.site-title a {
			color: #444444 ! important;
		}

		.gp-theprint-logo h1.site-title a:hover, 
		.gp-theprint-logo p.site-title a:hover {
			color: #666666 ! important;
		}

		.gp-theprint-secondary-navigation {
			font-size: 0.938rem;
			line-height: 3.375rem;
			text-align: center;
		}

		.gp-theprint-secondary-navigation ul li {
			float: none;
			display: inline-block;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-m'): ?>
		.gp-theprint-header-icons {
			font-size: 1.000rem;
			line-height: 2.375rem;
		}

		.gp-theprint-primary-navigation {
			font-size: 0.813rem;
			line-height: 2.375rem;
			margin-left: 0;
		}

		.gp-theprint-primary-navigation ul li.menu-item-has-children ul li a {
			font-size: 0.813rem;
		}

		.gp-theprint-logo {
			width: 100%;
			max-width: 100%;
			text-align: center;
		}

		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title {
			font-size: 3.125rem;
			margin-bottom: 1.563rem;
		}

		.gp-theprint-logo h1.site-logo, 
		.gp-theprint-logo p.site-logo {
			margin-bottom: 1.563rem;
		}

		.gp-theprint-logo h1.site-title a, 
		.gp-theprint-logo p.site-title a {
			color: #444444 ! important;
		}

		.gp-theprint-logo h1.site-title a:hover, 
		.gp-theprint-logo p.site-title a:hover {
			color: #666666 ! important;
		}

		.gp-theprint-secondary-navigation {
			font-size: 0.938rem;
			line-height: 3.375rem;
			text-align: center;
			z-index: 999;
		}

		.gp-theprint-secondary-navigation ul li {
			float: none;
			display: inline-block;
		}

		.sticky-secondary-navigation {
			z-index: 999;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-n'): ?>
		.gp-theprint-header-icons {
			font-size: 1.000rem;
			line-height: 2.375rem;
		}

		.gp-theprint-primary-navigation {
			font-size: 0.813rem;
			line-height: 2.375rem;
			margin-left: 0;
		}

		.gp-theprint-primary-navigation ul li.menu-item-has-children ul li a {
			font-size: 0.813rem;
		}

		.gp-theprint-logo {
			width: 100%;
			max-width: 100%;
			text-align: center;
		}

		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title {
			font-size: 3.125rem;
			margin-bottom: 1.563rem;
		}

		.gp-theprint-logo h1.site-logo, 
		.gp-theprint-logo p.site-logo {
			margin-bottom: 1.563rem;
		}

		.gp-theprint-logo h1.site-title a, 
		.gp-theprint-logo p.site-title a {
			color: #444444 ! important;
		}

		.gp-theprint-logo h1.site-title a:hover, 
		.gp-theprint-logo p.site-title a:hover {
			color: #666666 ! important;
		}

		.gp-theprint-secondary-navigation {
			font-size: 0.938rem;
			line-height: 3.375rem;
			margin-bottom: 1.875rem;
			text-align: center;
			z-index: 999;
		}

		.gp-theprint-secondary-navigation ul li {
			float: none;
			display: inline-block;
		}

		.sticky-secondary-navigation {
			z-index: 999;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-o'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-primary-navigation,
		.gp-theprint-header-icons {
			line-height: 3.750rem;
		}

		.gp-theprint-site-header {
			margin-bottom: 0;
		}

		.gp-theprint-secondary-navigation {
			font-size: 0.813rem;
			margin-bottom: 1.563rem;
			line-height: 2.500rem;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-p'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-primary-navigation,
		.gp-theprint-header-icons {
			line-height: 3.750rem;
		}
		
		.gp-theprint-site-header {
			margin-bottom: 0;
		}

		.gp-theprint-secondary-navigation {
			font-size: 0.813rem;
			margin-bottom: 1.563rem;
			line-height: 2.500rem;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-q'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-primary-navigation,
		.gp-theprint-header-icons {
			line-height: 3.750rem;
		}
		
		.gp-theprint-site-header {
			margin-bottom: 0;
		}

		.gp-theprint-secondary-navigation {
			font-size: 0.813rem;
			margin-bottom: 1.563rem;
			line-height: 2.500rem;
		}

		.gp-theprint-secondary-navigation {
			z-index: 999;
		}

		.sticky-secondary-navigation {
			z-index: 999;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-r'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-primary-navigation,
		.gp-theprint-header-icons {
			line-height: 4.375rem;
		}
		
		.gp-theprint-site-header {
			margin-bottom: 0;
		}

		.gp-theprint-primary-navigation {
			font-size: 0.938rem;
			line-height: 2.500rem;
			margin-top: 0.938rem;
			margin-bottom: 0.938rem;
		}

		.gp-theprint-secondary-navigation {
			font-size: 0.875rem;
			margin-bottom: 1.563rem;
			line-height: 3.375rem;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-s'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-primary-navigation,
		.gp-theprint-header-icons {
			line-height: 4.375rem;
		}
		
		.gp-theprint-site-header {
			margin-bottom: 0;
		}

		.gp-theprint-primary-navigation {
			font-size: 0.938rem;
			line-height: 2.500rem;
			margin-top: 0.938rem;
			margin-bottom: 0.938rem;
		}

		.gp-theprint-secondary-navigation {
			font-size: 0.875rem;
			margin-bottom: 1.563rem;
			line-height: 3.375rem;
		}
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-t'): ?>
		.gp-theprint-logo h1.site-title, 
		.gp-theprint-logo p.site-title,
		.gp-theprint-primary-navigation,
		.gp-theprint-header-icons {
			line-height: 4.375rem;
		}
		
		.gp-theprint-site-header {
			margin-bottom: 0;
		}

		.gp-theprint-primary-navigation {
			font-size: 0.938rem;
			line-height: 2.500rem;
			margin-top: 0.938rem;
			margin-bottom: 0.938rem;
		}

		.gp-theprint-secondary-navigation {
			font-size: 0.875rem;
			margin-bottom: 0;
			line-height: 3.375rem;
		}

		.gp-theprint-secondary-navigation {
			z-index: 999;
		}

		.sticky-secondary-navigation {
			z-index: 999;
		}
	<?php endif; ?>


	/* Header background */
	<?php if( get_option( 'gp_theprint_header_background_primary_color' ) != ''): ?>
		.gp-theprint-site-header,
		.gp-theprint-search-bar {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>; 
		}
	<?php endif; ?>


	/* Header text color */
	.gp-theprint-logo h1.site-title a, 
	.gp-theprint-logo p.site-title a,
	.gp-theprint-logo h1.site-title a:hover,
	.gp-theprint-logo p.site-title a:hover,
	.gp-theprint-primary-navigation ul li a,
	.gp-theprint-primary-navigation ul li a:hover,
	.gp-theprint-header-icons ul li a,
	.gp-theprint-header-icons ul li a:hover {
		color: <?php echo esc_attr( get_option( 'gp_theprint_header_color' ) ); ?>; 
	}

	button.menu-button span,
	button.menu-button span:hover {
		background-color: <?php echo esc_attr( get_option( 'gp_theprint_header_color' ) ); ?>;
	}


	/* Header background color style */
	<?php if( get_option( 'gp_theprint_header_color_style' ) == 'style-b'): ?>
		.gp-theprint-site-header {
			background: <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
		    background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?> 100%);
		    background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?> 100%);
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-c'): ?>
		.gp-theprint-site-header {
			background: <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-d'): ?>
		.gp-theprint-site-header {
			background: <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-e'): ?>
		.gp-theprint-site-header {
			background: <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-f'): ?>
		.gp-theprint-site-header {
			background: <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 0.625rem solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-g'): ?>
		.gp-theprint-site-header {
			background: <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-h'): ?>
		.gp-theprint-site-header {
			background: <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-i'): ?>
		.gp-theprint-site-header {
			background: <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-top: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-j'): ?>
		.gp-theprint-site-header {
			background: <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-top: 0.625rem solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-k'): ?>
		.gp-theprint-site-header {
			background: #ffffff;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-l'): ?>
		.gp-theprint-site-header {
			background: #ffffff;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-m'): ?>
		.gp-theprint-site-header {
			background: #ffffff;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-n'): ?>
		.gp-theprint-site-header {
			background: #ffffff;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-o'): ?>
		.gp-theprint-site-header {
			background: #ffffff;
			border-top: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-p'): ?>
		.gp-theprint-site-header {
			background: #ffffff;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-q'): ?>
		.gp-theprint-site-header {
			background: #ffffff;
			border-top: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-r'): ?>
		.gp-theprint-site-header {
			background: #ffffff;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-s'): ?>
		.gp-theprint-site-header {
			background: #ffffff;
			border-top: 0.625rem solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_header_color_style' ) == 'style-t'): ?>
		.gp-theprint-site-header {
			background: #ffffff;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
			border-bottom: 0.625rem solid <?php echo esc_attr( get_option( 'gp_theprint_header_background_secondary_color' ) ); ?>;
		}
	<?php else: ?>
		.gp-theprint-site-header {
			background: <?php echo esc_attr( get_option( 'gp_theprint_header_background_primary_color' ) ); ?>;
		}
	<?php endif; ?>


	/* Header shadow */
	<?php if( get_option( 'gp_theprint_header_shadow' ) != ''): ?>
		.gp-theprint-site-header {
			box-shadow: 0 2px 10px 0 rgba(0,0,0,0.10);
		}
	<?php endif; ?>


	/* Primary navigation hover style */
	<?php if( get_option( 'gp_theprint_primary_navigation_hover_style' ) == 'style-b'): ?>
		.gp-theprint-primary-navigation ul li.current-menu-item a,
		.gp-theprint-primary-navigation ul li:hover a {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_primary_navigation_hover_primary_color' ) ); ?>;
			color: #ffffff;
			opacity: 1;
		}

		.gp-theprint-primary-navigation ul li ul li a,
		.gp-theprint-primary-navigation ul li.current-menu-item ul li a,
		.gp-theprint-primary-navigation ul li.menu-item-has-children ul li a,
		.gp-theprint-primary-navigation ul li.menu-item-has-children div.sub-menu ul.sub-links li a,
		.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title {
			background: none;
		}

		.gp-theprint-primary-navigation ul li.current-menu-item ul li a,
		.gp-theprint-primary-navigation ul li ul li.current-menu-item a {
			background: none;
		}
	<?php elseif( get_option( 'gp_theprint_primary_navigation_hover_style' ) == 'style-c'): ?>
		.gp-theprint-primary-navigation ul li.current-menu-item a,
		.gp-theprint-primary-navigation ul li:hover a {
			background: <?php echo esc_attr( get_option( 'gp_theprint_primary_navigation_hover_primary_color' ) ); ?>;
		    background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_primary_navigation_hover_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_primary_navigation_hover_secondary_color' ) ); ?> 100%);
		    background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_primary_navigation_hover_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_primary_navigation_hover_secondary_color' ) ); ?> 100%);
			color: #ffffff;
			opacity: 1;
		}

		.gp-theprint-primary-navigation ul li ul li a,
		.gp-theprint-primary-navigation ul li.current-menu-item ul li a,
		.gp-theprint-primary-navigation ul li.menu-item-has-children ul li a,
		.gp-theprint-primary-navigation ul li.menu-item-has-children div.sub-menu ul.sub-links li a,
		.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title {
			background: none;
		}

		.gp-theprint-primary-navigation ul li.current-menu-item ul li a,
		.gp-theprint-primary-navigation ul li ul li.current-menu-item a {
			background: none;
		}
	<?php elseif( get_option( 'gp_theprint_primary_navigation_hover_style' ) == 'style-d'): ?>
		.gp-theprint-primary-navigation ul li.current-menu-item a:before,
		.gp-theprint-primary-navigation ul li:hover a:before {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_primary_navigation_hover_primary_color' ) ); ?>;
    		content: "";
   	 		width: 100%;
    		height: 4px;
    		position: absolute;
    		bottom: 0;
    		left: 0;
    		opacity: 1;
		}

		.gp-theprint-primary-navigation ul li ul li a:before,
		.gp-theprint-primary-navigation ul li ul li a:hover:before {
			display: none;
		}

		.gp-theprint-primary-navigation ul li a:hover {
			opacity: 1;
		}
	<?php elseif( get_option( 'gp_theprint_primary_navigation_hover_style' ) == 'style-e'): ?>
		.gp-theprint-primary-navigation ul li.current-menu-item a:before,
		.gp-theprint-primary-navigation ul li:hover a:before {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_primary_navigation_hover_primary_color' ) ); ?>;
    		content: "";
   	 		width: 100%;
    		height: 4px;
    		position: absolute;
    		top: 0;
    		left: 0;
		}

		.gp-theprint-primary-navigation ul li ul li a:before,
		.gp-theprint-primary-navigation ul li ul li a:hover:before {
			display: none;
		}

		.gp-theprint-primary-navigation ul li a:hover {
			opacity: 1;
		}
	<?php endif; ?>


	/* Primary navigation dropmenu style */
	<?php if( get_option( 'gp_theprint_primary_navigation_dropmenu_style' ) == 'dark'): ?>
		.gp-theprint-primary-navigation ul li.menu-item-has-children ul {
			background-color: #3d3d3d;
		}

		.gp-theprint-primary-navigation ul li.menu-item-has-children ul li a {
			color: #ffffff;
		}

		.gp-theprint-primary-navigation ul li.menu-item-has-children ul li a:hover {
			color: #ffffff;
		}

		.gp-theprint-primary-navigation ul li div.sub-menu {
			background-color: #3d3d3d;
		}

		.gp-theprint-primary-navigation ul li.menu-item-has-children div.sub-menu ul.sub-links li a {
			color: #ffffff;
		}

		.gp-theprint-primary-navigation ul li.menu-item-has-children div.sub-menu ul.sub-links li a:hover {
			color: #ffffff;
			-webkit-opacity: 0.85;
			opacity: 0.85;
		}

		.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li .featured-image a:hover img {
			opacity: 1;
			-webkit-opacity: 1;
		}

		.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title {
			color: #ffffff;
		}

		.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li a:hover.entry-title {
			color: #ffffff;
			-webkit-opacity: 0.85;
			opacity: 0.85;
		}

		.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li p.entry-meta {
			color: #d3d3d3;
		}
	<?php elseif( get_option( 'gp_theprint_primary_navigation_dropmenu_style' ) == 'gray'): ?>
		.gp-theprint-primary-navigation ul li.menu-item-has-children ul {
			background-color: #e3e3e3;
		}

		.gp-theprint-primary-navigation ul li div.sub-menu {
			background-color: #e3e3e3;
		}
	<?php endif; ?>


	/* Secondary navigation background */
	.gp-theprint-secondary-navigation {
		background-color: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
	}
	

	/* Secondary navigation text color */
	.gp-theprint-secondary-navigation ul li a,
	.gp-theprint-secondary-navigation ul li a:hover {
		color: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_color' ) ); ?>;
	}


	/* Secondary navigation style */
	<?php if( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-b'): ?>
		.gp-theprint-secondary-navigation {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?> 100%);
			background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?> 100%);
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-c'): ?>
		.gp-theprint-secondary-navigation {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-d'): ?>
		.gp-theprint-secondary-navigation {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-e'): ?>
		.gp-theprint-secondary-navigation {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-f'): ?>
		.gp-theprint-secondary-navigation {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-g'): ?>
		.gp-theprint-secondary-navigation {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-h'): ?>
		.gp-theprint-secondary-navigation {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 0.625rem solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-i'): ?>
		.gp-theprint-secondary-navigation {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-j'): ?>
		.gp-theprint-secondary-navigation {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-k'): ?>
		.gp-theprint-secondary-navigation {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-top: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-l'): ?>
		.gp-theprint-secondary-navigation {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-top: 0.625rem solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-m'): ?>
		.gp-theprint-secondary-navigation {
			background: #ffffff;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-n'): ?>
		.gp-theprint-secondary-navigation {
			background: #ffffff;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-o'): ?>
		.gp-theprint-secondary-navigation {
			background: #ffffff;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-p'): ?>
		.gp-theprint-secondary-navigation {
			background: #ffffff;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-q'): ?>
		.gp-theprint-secondary-navigation {
			background: #ffffff;
			border-top: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-r'): ?>
		.gp-theprint-secondary-navigation {
			background: #ffffff;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-s'): ?>
		.gp-theprint-secondary-navigation {
			background: #ffffff;
			border-top: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_style' ) == 'style-t'): ?>
		.gp-theprint-secondary-navigation {
			background: #ffffff;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
			border-bottom: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_secondary_color' ) ); ?>;
		}
	<?php else: ?>
		.gp-theprint-secondary-navigation {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_background_primary_color' ) ); ?>;
		}
	<?php endif; ?>


	/* Secondary navigation hover style */
	<?php if( get_option( 'gp_theprint_secondary_navigation_hover_style' ) == 'style-b'): ?>
		.gp-theprint-secondary-navigation ul li.current-menu-item a,
		.gp-theprint-secondary-navigation ul li:hover a {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_hover_primary_color' ) ); ?>;
			color: #ffffff;
			opacity: 1;
		}

		.gp-theprint-secondary-navigation ul li ul li a,
		.gp-theprint-secondary-navigation ul li.current-menu-item ul li a,
		.gp-theprint-secondary-navigation ul li.menu-item-has-children ul li a,
		.gp-theprint-secondary-navigation ul li.menu-item-has-children div.sub-menu ul.sub-links li a,
		.gp-theprint-secondary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title {
			background: none;
		}

		.gp-theprint-secondary-navigation ul li.current-menu-item ul li a,
		.gp-theprint-secondary-navigation ul li ul li.current-menu-item a {
			background: none;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_hover_style' ) == 'style-c'): ?>
		.gp-theprint-secondary-navigation ul li.current-menu-item a,
		.gp-theprint-secondary-navigation ul li:hover a {
			background: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_hover_primary_color' ) ); ?>;
		    background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_hover_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_hover_secondary_color' ) ); ?> 100%);
		    background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_hover_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_hover_secondary_color' ) ); ?> 100%);
			color: #ffffff;
			opacity: 1;
		}

		.gp-theprint-secondary-navigation ul li ul li a,
		.gp-theprint-secondary-navigation ul li.current-menu-item ul li a,
		.gp-theprint-secondary-navigation ul li.menu-item-has-children ul li a,
		.gp-theprint-secondary-navigation ul li.menu-item-has-children div.sub-menu ul.sub-links li a,
		.gp-theprint-secondary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title {
			background: none;
		}

		.gp-theprint-secondary-navigation ul li.current-menu-item ul li a,
		.gp-theprint-secondary-navigation ul li ul li.current-menu-item a {
			background: none;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_hover_style' ) == 'style-d'): ?>
		.gp-theprint-secondary-navigation ul li.current-menu-item a:before,
		.gp-theprint-secondary-navigation ul li:hover a:before {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_secondary_navigation_hover_primary_color' ) ); ?>;
    		content: "";
   	 		width: 100%;
    		height: 4px;
    		position: absolute;
    		bottom: 0;
    		left: 0;
    		opacity: 1;
		}

		.gp-theprint-secondary-navigation ul li ul li a:before,
		.gp-theprint-secondary-navigation ul li ul li a:hover:before {
			display: none;
		}

		.gp-theprint-secondary-navigation ul li a:hover {
			opacity: 1;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_hover_style' ) == 'style-e'): ?>
		.gp-theprint-secondary-navigation ul li.current-menu-item a:before,
		.gp-theprint-secondary-navigation ul li:hover a:before {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_primary_navigation_hover_primary_color' ) ); ?>;
    		content: "";
   	 		width: 100%;
    		height: 4px;
    		position: absolute;
    		top: 0;
    		left: 0;
		}

		.gp-theprint-secondary-navigation ul li ul li a:before,
		.gp-theprint-secondary-navigation ul li ul li a:hover:before {
			display: none;
		}

		.gp-theprint-secondary-navigation ul li a:hover {
			opacity: 1;
		}
	<?php endif; ?>


	/* Secondary navigation shadow */
	<?php if ( get_option( 'gp_theprint_secondary_navigation_shadow' ) != '' ): ?>
		.gp-theprint-secondary-navigation {
			box-shadow: 0 2px 10px 0 rgba(0,0,0,0.10);
		}
	<?php endif; ?>


	/* Secondary navigation dropmenu style */
	<?php if( get_option( 'gp_theprint_secondary_navigation_dropmenu_style' ) == 'dark'): ?>
		.gp-theprint-secondary-navigation ul li.menu-item-has-children ul {
			background-color: #3d3d3d;
		}

		.gp-theprint-secondary-navigation ul li.menu-item-has-children ul li a {
			color: #ffffff;
		}

		.gp-theprint-secondary-navigation ul li.menu-item-has-children ul li a:hover {
			color: #ffffff;
		}

		.gp-theprint-secondary-navigation ul li div.sub-menu {
			background-color: #3d3d3d;
		}

		.gp-theprint-secondary-navigation ul li.menu-item-has-children div.sub-menu ul.sub-links li a {
			color: #ffffff;
		}

		.gp-theprint-secondary-navigation ul li.menu-item-has-children div.sub-menu ul.sub-links li a:hover {
			color: #ffffff;
			-webkit-opacity: 0.85;
			opacity: 0.85;
		}

		.gp-theprint-secondary-navigation ul li div.sub-menu ul.sub-posts li .featured-image a:hover img {
			opacity: 1;
			-webkit-opacity: 1;
		}

		.gp-theprint-secondary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title {
			color: #ffffff;
		}

		.gp-theprint-secondary-navigation ul li div.sub-menu ul.sub-posts li a:hover.entry-title {
			color: #ffffff;
			-webkit-opacity: 0.85;
			opacity: 0.85;
		}

		.gp-theprint-secondary-navigation ul li div.sub-menu ul.sub-posts li p.entry-meta {
			color: #d3d3d3;
		}
	<?php elseif( get_option( 'gp_theprint_secondary_navigation_dropmenu_style' ) == 'gray'): ?>
		.gp-theprint-secondary-navigation ul li.menu-item-has-children ul {
			background-color: #e3e3e3;
		}

		.gp-theprint-secondary-navigation ul li div.sub-menu {
			background-color: #e3e3e3;
		}
	<?php endif; ?>


	/* Featured posts - Entry shadow */
	<?php if ( get_option( 'gp_theprint_featured_posts_shadow_style' ) == 'style-b' ): ?>
		.featured-post .entry-overlay {
			background: -moz-linear-gradient(rgba(0,0,0,0),#000000);
    		background: -webkit-linear-gradient(rgba(0,0,0,0),#000000);
    		background: linear-gradient(rgba(0,0,0,0),#000000);
    		opacity: 0.85;
		}

		.featured-post .featured-image:hover .entry-overlay {
			opacity: 1;
		}
	<?php elseif ( get_option( 'gp_theprint_featured_posts_shadow_style' ) == 'style-c' ): ?>
		.featured-post .entry-description .entry-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_color' ) ); ?>;
		}
	<?php elseif ( get_option( 'gp_theprint_featured_posts_shadow_style' ) == 'style-d' ): ?>
		.featured-post:nth-child(1) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_1' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_2' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_2' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_2' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_2' ) ); ?>);
		}

		.featured-post:nth-child(2) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_4' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_4' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_4' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_4' ) ); ?>);
		}

		.featured-post:nth-child(3) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_5' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>);
		}

		.featured-post:nth-child(4) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_7' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_7' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_8' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_7' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_8' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_7' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_8' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_7' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_8' ) ); ?>);
		}

		.featured-post:nth-child(5) .entry-perfect-shadow {
		    background-color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_5' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_6' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_6' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_6' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_6' ) ); ?>);
		}

		.featured-post:nth-child(6) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_4' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_4' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_2' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_4' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_2' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_4' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_2' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_4' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_2' ) ); ?>);
		}

		.featured-post:nth-child(7) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_1' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_7' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_7' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_7' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_7' ) ); ?>);
		}

		.featured-post:nth-child(8) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_8' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_8' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_8' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_8' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_8' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_d_color_3' ) ); ?>);
		}
	<?php elseif ( get_option( 'gp_theprint_featured_posts_shadow_style' ) == 'style-e' ): ?>
		.gp-theprint-featured-post-f h2.entry-title {
			display: inline;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_color' ) ); ?>;
			box-shadow: 5px 0 0 <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_color' ) ); ?>,-5px 0 0 <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_color' ) ); ?>;
			color: #000000;
			text-shadow: none;
		}

		.featured-post .entry-meta-category {
			display: none;
		}
	<?php elseif ( get_option( 'gp_theprint_featured_posts_shadow_style' ) == 'style-f' ): ?>
		.gp-theprint-featured-post-f h2.entry-title {
			display: inline;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_color' ) ); ?>;
			box-shadow: 5px 0 0 <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_color' ) ); ?>,-5px 0 0 <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_shadow_color' ) ); ?>;
			color: #ffffff;
			text-shadow: none;
		}

		.featured-post .entry-meta-category {
			display: none;
		}
	<?php endif; ?>


	/* Featured posts - Entry meta category */
	<?php if ( get_option( 'gp_theprint_featured_posts_entry_meta_category_style' ) == 'style-b' ): ?>
		.featured-post .entry-meta-category {
			margin: 0 0 0.313rem;
		}

		.featured-post .entry-meta-category .entry-category a {
			color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_entry_meta_category_link_color' ) ); ?>;
			text-shadow: none;
		}
	<?php elseif ( get_option( 'gp_theprint_featured_posts_entry_meta_category_style' ) == 'style-c' ): ?>
		.featured-post .entry-meta-category .entry-category a {
			background: none;
			border: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_entry_meta_category_link_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 2px 5px;
		}
	<?php elseif ( get_option( 'gp_theprint_featured_posts_entry_meta_category_style' ) == 'style-d' ): ?>
		.featured-post .entry-meta-category .entry-category a {
			background: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_entry_meta_category_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 2px 5px;
			text-shadow: none;
		}
	<?php elseif ( get_option( 'gp_theprint_featured_posts_entry_meta_category_style' ) == 'style-e' ): ?>
		.featured-post .entry-meta-category .entry-category a {
			background: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_entry_meta_category_primary_color' ) ); ?>;
			background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_entry_meta_category_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_entry_meta_category_secondary_color' ) ); ?> 100%);
    		background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_entry_meta_category_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_featured_posts_entry_meta_category_secondary_color' ) ); ?> 100%);
			padding: 2px 5px;
			text-shadow: none;
		}
	<?php elseif( get_option( 'gp_theprint_featured_posts_entry_meta_category_style' ) == 'style-f'): ?>
		.featured-post .entry-meta-category .entry-category a { 
			background: <?php echo esc_attr( get_option( 'gp_theprint_featured_posts_entry_meta_category_primary_color' ) ); ?>;
			padding: 2px 5px;
			text-shadow: none;
		}
	<?php else: ?>
		.featured-post .entry-meta-category {
			margin: 0 0 0.313rem;
		}

		.featured-post .entry-meta-category .entry-category a {
			color: #ffffff;
		}
	<?php endif; ?>


	/* Staff posts - Background & color */
	.gp-theprint-staff-posts h4.gp-theprint-staff-posts-title {
		background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_background_primary_color' ) ); ?>;
	}

	.gp-theprint-staff-posts h4.gp-theprint-staff-posts-title {
		color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_title_color' ) ); ?>;
	}


	/* Staff posts background color style */
	<?php if ( get_option( 'gp_theprint_staff_posts_background_color_style' ) == 'style-b' ): ?>
		.gp-theprint-staff-posts h4.gp-theprint-staff-title {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_background_primary_color' ) ); ?>;
			background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_background_secondary_color' ) ); ?> 100%);
    		background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_background_secondary_color' ) ); ?> 100%);
		}
	<?php endif; ?>


	/* Staff posts - Entry shadow */
	<?php if ( get_option( 'gp_theprint_staff_posts_shadow_style' ) == 'style-b' ): ?>
		.staff-post .entry-overlay {
			background: -moz-linear-gradient(rgba(0,0,0,0),#000000);
    		background: -webkit-linear-gradient(rgba(0,0,0,0),#000000);
    		background: linear-gradient(rgba(0,0,0,0),#000000);
    		opacity: 0.85;
		}

		.staff-post .featured-image:hover .entry-overlay {
			opacity: 1;
		}
	<?php elseif ( get_option( 'gp_theprint_staff_posts_shadow_style' ) == 'style-c' ): ?>
		.staff-post .entry-description .entry-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_color' ) ); ?>;
		}
	<?php elseif ( get_option( 'gp_theprint_staff_posts_shadow_style' ) == 'style-d' ): ?>
		.staff-post:nth-child(1) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_2' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_2' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_2' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_2' ) ); ?>);
		}

		.staff-post:nth-child(2) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_4' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_4' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_4' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_4' ) ); ?>);
		}

		.staff-post:nth-child(3) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>);
		}

		.staff-post:nth-child(4) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_7' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_7' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_8' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_7' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_8' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_7' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_8' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_7' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_8' ) ); ?>);
		}

		.staff-post:nth-child(5) .entry-perfect-shadow {
		    background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_6' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_6' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_6' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_6' ) ); ?>);
		}

		.staff-post:nth-child(6) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_4' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_4' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_2' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_4' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_2' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_4' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_2' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_4' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_2' ) ); ?>);
		}

		.staff-post:nth-child(7) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_7' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_7' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_7' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_7' ) ); ?>);
		}

		.staff-post:nth-child(8) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_8' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_8' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_8' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_8' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_8' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_3' ) ); ?>);
		}

		.staff-post:nth-child(9) .entry-perfect-shadow {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>;
		    background-image: -webkit-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>);
		    background-image: -moz-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>);
		    background-image: -o-linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>);
		    background-image: linear-gradient(135deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_5' ) ); ?>,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_d_color_1' ) ); ?>);
		}
	<?php elseif ( get_option( 'gp_theprint_staff_posts_shadow_style' ) == 'style-e' ): ?>
		.staff-post h2.entry-title {
			display: inline;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_color' ) ); ?>;
			box-shadow: 5px 0 0 <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_color' ) ); ?>,-5px 0 0 <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_color' ) ); ?>;
			line-height: 1.15;
			color: #000000;
			text-shadow: none;
		}

		.staff-post .entry-meta-category {
			display: none;
		}
	<?php elseif ( get_option( 'gp_theprint_staff_posts_shadow_style' ) == 'style-f' ): ?>
		.staff-post h2.entry-title {
			display: inline;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_color' ) ); ?>;
			box-shadow: 5px 0 0 <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_color' ) ); ?>,-5px 0 0 <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_shadow_color' ) ); ?>;
			line-height: 1.15;
			color: #ffffff;
			text-shadow: none;
		}

		.staff-post .entry-meta-category {
			display: none;
		}
	<?php endif; ?>


	/* Staff posts - Entry meta category */
	<?php if ( get_option( 'gp_theprint_staff_posts_entry_meta_category_style' ) == 'style-b' ): ?>
		.staff-post .entry-meta-category {
			margin-bottom: 0.313rem;
		}

		.staff-post .entry-meta-category .entry-category a {
			color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_entry_meta_category_link_color' ) ); ?>;
			text-shadow: none;
		}
	<?php elseif ( get_option( 'gp_theprint_staff_posts_entry_meta_category_style' ) == 'style-c' ): ?>
		.staff-post .entry-meta-category .entry-category a {
			background: none;
			border: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_entry_meta_category_link_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 2px 5px;
		}
	<?php elseif ( get_option( 'gp_theprint_staff_posts_entry_meta_category_style' ) == 'style-d' ): ?>
		.staff-post .entry-meta-category .entry-category a {
			background: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_entry_meta_category_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 2px 5px;
			text-shadow: none;
		}
	<?php elseif ( get_option( 'gp_theprint_staff_posts_entry_meta_category_style' ) == 'style-e' ): ?>
		.staff-post .entry-meta-category .entry-category a {
			background: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_entry_meta_category_primary_color' ) ); ?>;
			background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_entry_meta_category_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_entry_meta_category_secondary_color' ) ); ?> 100%);
    		background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_entry_meta_category_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_staff_posts_entry_meta_category_secondary_color' ) ); ?> 100%);
			padding: 2px 5px;
			text-shadow: none;
		}
	<?php elseif( get_option( 'gp_theprint_staff_posts_entry_meta_category_style' ) == 'style-f'): ?>
		.staff-post .entry-meta-category .entry-category a { 
			background: <?php echo esc_attr( get_option( 'gp_theprint_staff_posts_entry_meta_category_primary_color' ) ); ?>;
			padding: 2px 5px;
			text-shadow: none;
		}
	<?php else: ?>
		.staff-post .entry-meta-category {
			margin-bottom: 0.313rem;
		}

		.staff-post .entry-meta-category .entry-category a {
			color: #ffffff;
		}
	<?php endif; ?>


	/* Front posts - Entry title */
	.hentry .entry-title a,
	.gp-theprint-widget h5.entry-title a,
	.entry-related-posts .entry-related-post h5 a,
	.entry-recent-posts .entry-recent-post h5 a,
	.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title,
	.gp-theprint-secondary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title {
		color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_title_link_color' ) ); ?>;
	}

	.hentry .entry-title a:hover,
	.gp-theprint-widget h5.entry-title a:hover,
	.entry-related-posts .entry-related-post h5 a:hover,
	.entry-recent-posts .entry-recent-post h5 a:hover,
	.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li a:hover.entry-title,
	.gp-theprint-secondary-navigation ul li div.sub-menu ul.sub-posts li a:hover.entry-title {
		color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_title_link_hover_color' ) ); ?>;
	}


	/* Front posts - Entry meta */
	.hentry.front-post .entry-meta a,
	.hentry.front-post .entry-meta a:hover {
		color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_link_color' ) ); ?>;
	}


	/* Front posts - Entry meta category */
	<?php if( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-b'): ?>
		.hentry.front-post .entry-meta-category {
			font-size: 0.813rem;
		}

		.hentry.front-post .entry-meta-category a,
		.hentry.front-post .entry-meta-category a:hover {
			display: inline-block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 1px 5px;
		}
	<?php elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-c'): ?>
		.hentry.front-post .entry-meta-category {
			font-size: 0.813rem;
		}

		.hentry.front-post .entry-meta-category a,
		.hentry.front-post .entry-meta-category a:hover {
			display: inline-block;
			border: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 1px 5px;
		}
	<?php elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-d'): ?>
		.hentry.front-post .entry-meta-category {
			font-size: 0.813rem;
		}

		.hentry.front-post .entry-meta-category a,
		.hentry.front-post .entry-meta-category a:hover {
			display: inline-block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_primary_color' ) ); ?>;
			background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_secondary_color' ) ); ?> 100%);
    		background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_secondary_color' ) ); ?> 100%);
			color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 1px 5px;
		}
	<?php elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-f'): ?>
		.hentry.front-post .entry-meta-category {
			font-size: 0.813rem;
		}

		.hentry.front-post .entry-meta-category a,
		.hentry.front-post .entry-meta-category a:hover {
			padding: 1px 5px;
		}
	<?php elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-g'): ?>
		.hentry.front-post .entry-meta-category {
			font-size: 0.813rem;
		}

		.hentry.front-post .entry-meta-category a,
		.hentry.front-post .entry-meta-category a:hover {
			display: inline-block;
			color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 1px 5px;
		}
	<?php else: ?>
		.hentry.front-post .entry-meta-category a,
		.hentry.front-post .entry-meta-category a:hover {
			color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_link_color' ) ); ?>;
		}
	<?php endif; ?>


	/* Front posts - Entry meta */
	<?php if( get_option( 'gp_theprint_single_entry_meta_hide' ) != ''): ?>
		.hentry.front-post .entry-meta {
			display: none;
		}
	<?php endif; ?>

	.hentry.front-post .entry-meta a,
	.hentry.front-post .entry-meta a:hover {
		color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_link_color' ) ); ?>;
	}


	/* Front posts - Entry share */
	<?php if( get_option( 'gp_theprint_front_posts_entry_share_style' ) == 'style-b'): ?>
		.featured-image .entry-share {
			top: 2px;
			right: 1px;
		}

		.featured-image .entry-share ul li a {
			display: inline-block;
			background-color: #ffffff;
			color: #000000;
			width: 26px;
			height: 26px;
			font-size: 16px;
			line-height: 26px;
			text-align: center;
			text-decoration: none;
			text-shadow: none;
		}

		.featured-image .entry-share ul li a:hover {
			color: #333333;
			text-decoration: none;
		}
	<?php elseif( get_option( 'gp_theprint_front_posts_entry_share_style' ) == 'style-c'): ?>
		.featured-image .entry-share {
			background-color: #000000;
			top: 0;
			right: 0;
		}

		.featured-image .entry-share ul li {
			margin: 0 0 2px;
		}

		.featured-image .entry-share ul li a {
			font-size: 1.000rem;
			color: #ffffff;
			text-shadow: none;
		}

		.featured-image .entry-share {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_share_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_front_posts_entry_share_style' ) == 'style-d'): ?>
		.featured-image .entry-share {
			top: 0;
			right: 0;
		}

		.featured-image .entry-share ul li a {
			display: inline-block;
			background-color: #696969;
			color: #ffffff;
			width: 28px;
			height: 28px;
			font-size: 16px;
			line-height: 28px;
			text-align: center;
			text-decoration: none;
			text-shadow: none;
		}

		.featured-image .entry-share ul li.facebook a {
			background-color: #3b5998;
		}

		.featured-image .entry-share ul li.twitter a {
			background-color: #55acee;
		}

		.featured-image .entry-share ul li.google-plus a {
			background-color: #dd4b39;
		}
	<?php endif; ?>


	/* Pagination background */
	.gp-theprint-ajax-loading-button a {
		background-color: <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
	}


	/* Pagination text color */
	.gp-theprint-ajax-loading-button a {
		color: <?php echo esc_attr( get_option( 'gp_theprint_pagination_text_color' ) ); ?>;
	}


	/* Pagination style */
	<?php if( get_option( 'gp_theprint_pagination_color_style' ) == 'style-b'): ?>
		.gp-theprint-ajax-loading-button a {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
			background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_pagination_background_secondary_color' ) ); ?> 100%);
    		background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_pagination_background_secondary_color' ) ); ?> 100%);
		}
	<?php elseif( get_option( 'gp_theprint_pagination_color_style' ) == 'style-c'): ?>
		.gp-theprint-ajax-loading-button a {
			background: none;
			border: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
		}

		.gp-theprint-ajax-loading-button a:hover {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
			border: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
			color: #ffffff;
		}
	<?php elseif( get_option( 'gp_theprint_pagination_color_style' ) == 'style-d'): ?>
		.gp-theprint-ajax-loading-button a {
			background: none;
			border: 2px solid <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
			line-height: 2.875rem;
		}

		.gp-theprint-ajax-loading-button a:hover {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
			border: 2px solid <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
			color: #ffffff;
		}
	<?php elseif( get_option( 'gp_theprint_pagination_color_style' ) == 'style-e'): ?>
		.gp-theprint-ajax-loading-button a {
			background: none;
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
			line-height: 2.875rem;
		}

		.gp-theprint-ajax-loading-button a:hover {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
			color: #ffffff;
		}
	<?php else: ?>
		.gp-theprint-ajax-loading-button a {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_pagination_background_primary_color' ) ); ?>;
		}
	<?php endif; ?>


	/* Homepage newsletter */
	<?php if( get_option( 'gp_theprint_homepage_newsletter_style' ) == 'style-b'): ?>
		.gp-theprint-homepage-newsletter .newsletter-content form input[type="submit"],
		.gp-theprint-homepage-newsletter .newsletter-content form input[type="button"],
		.gp-theprint-homepage-newsletter .newsletter-content form button {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_primary_color' ) ); ?>;
			background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_secondary_color' ) ); ?> 100%);
    		background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_secondary_color' ) ); ?> 100%);
		}

		.gp-theprint-homepage-newsletter .newsletter-content form input[type="submit"]:hover,
		.gp-theprint-homepage-newsletter .newsletter-content form input[type="button"]:hover,
		.gp-theprint-homepage-newsletter .newsletter-content form button:hover {
			background: #333333; 
		}
	<?php elseif( get_option( 'gp_theprint_homepage_newsletter_style' ) == 'style-c'): ?>
		.gp-theprint-homepage-newsletter .newsletter-content form input[type="submit"],
		.gp-theprint-homepage-newsletter .newsletter-content form input[type="button"],
		.gp-theprint-homepage-newsletter .newsletter-content form button {
			background: none;
			border: 2px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_primary_color' ) ); ?>;
			line-height: 3.000rem;
		}

		.gp-theprint-homepage-newsletter .newsletter-content form input[type="submit"]:hover,
		.gp-theprint-homepage-newsletter .newsletter-content form input[type="button"]:hover,
		.gp-theprint-homepage-newsletter .newsletter-content form button:hover {
			background: <?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_primary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_homepage_newsletter_style' ) == 'style-d'): ?>
		.gp-theprint-homepage-newsletter .newsletter-content form input[type="submit"],
		.gp-theprint-homepage-newsletter .newsletter-content form input[type="button"],
		.gp-theprint-homepage-newsletter .newsletter-content form button {
			background: none;
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_primary_color' ) ); ?>;
			line-height: 2.875rem;
		}

		.gp-theprint-homepage-newsletter .newsletter-content form input[type="submit"]:hover,
		.gp-theprint-homepage-newsletter .newsletter-content form input[type="button"]:hover,
		.gp-theprint-homepage-newsletter .newsletter-content form button:hover {
			background: <?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_primary_color' ) ); ?>;
		}
	<?php else: ?>
		.gp-theprint-homepage-newsletter .newsletter-content form input[type="submit"],
		.gp-theprint-homepage-newsletter .newsletter-content form input[type="button"],
		.gp-theprint-homepage-newsletter .newsletter-content form button {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_primary_color' ) ); ?>;
		}
	<?php endif; ?>


	/* Sidebar newsletter */
	<?php if( get_option( 'gp_theprint_sidebar_newsletter_style' ) == 'style-b'): ?>
		.gp-theprint-newsletter-widget input[type="submit"], 
		.gp-theprint-newsletter-widget input[type="button"], 
		.gp-theprint-newsletter-widget button {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_primary_color' ) ); ?>;
			background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_secondary_color' ) ); ?> 100%);
    		background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_secondary_color' ) ); ?> 100%);
		}

		.gp-theprint-newsletter-widget input[type="submit"]:hover, 
		.gp-theprint-newsletter-widget input[type="button"]:hover, 
		.gp-theprint-newsletter-widget button:hover {
			background: #333333;
			color: #ffffff;
		}
	<?php elseif( get_option( 'gp_theprint_sidebar_newsletter_style' ) == 'style-c'): ?>
		.gp-theprint-newsletter-widget input[type="submit"], 
		.gp-theprint-newsletter-widget input[type="button"], 
		.gp-theprint-newsletter-widget button {
			background: none;
			border: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_text_color' ) ); ?>;
		}

		.gp-theprint-newsletter-widget input[type="submit"]:hover, 
		.gp-theprint-newsletter-widget input[type="button"]:hover, 
		.gp-theprint-newsletter-widget button:hover {
			background: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_primary_color' ) ); ?>;
			color: #ffffff;
		}
	<?php elseif( get_option( 'gp_theprint_sidebar_newsletter_style' ) == 'style-d'): ?>
		.gp-theprint-newsletter-widget input[type="submit"], 
		.gp-theprint-newsletter-widget input[type="button"], 
		.gp-theprint-newsletter-widget button {
			background: none;
			border: 2px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_text_color' ) ); ?>;
			line-height: 2.750rem;
		}

		.gp-theprint-newsletter-widget input[type="submit"]:hover, 
		.gp-theprint-newsletter-widget input[type="button"]:hover, 
		.gp-theprint-newsletter-widget button:hover {
			background: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_primary_color' ) ); ?>;
			color: #ffffff;
		}
	<?php elseif( get_option( 'gp_theprint_sidebar_newsletter_style' ) == 'style-e'): ?>
		.gp-theprint-newsletter-widget input[type="submit"], 
		.gp-theprint-newsletter-widget input[type="button"], 
		.gp-theprint-newsletter-widget button {
			background: none;
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_text_color' ) ); ?>;
			line-height: 2.625rem;
		}

		.gp-theprint-newsletter-widget input[type="submit"]:hover, 
		.gp-theprint-newsletter-widget input[type="button"]:hover, 
		.gp-theprint-newsletter-widget button:hover {
			background: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_primary_color' ) ); ?>;
			color: #ffffff;
		}
	<?php else: ?>
		.gp-theprint-newsletter-widget input[type="submit"], 
		.gp-theprint-newsletter-widget input[type="button"], 
		.gp-theprint-newsletter-widget button {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_newsletter_text_color' ) ); ?>;
		}

		.gp-theprint-newsletter-widget input[type="submit"]:hover, 
		.gp-theprint-newsletter-widget input[type="button"]:hover, 
		.gp-theprint-newsletter-widget button:hover {
			background: #333333;
			color: #ffffff;
		}
	<?php endif; ?>


	/* Sidebar color style */
	<?php if( get_option( 'gp_theprint_sidebar_color_style' ) == 'style-b'): ?>
		.gp-theprint-sidebar {
			background: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_color' ) ); ?>;
			padding: 1.563rem 1.563rem 0 1.563rem;
		}
	<?php elseif( get_option( 'gp_theprint_sidebar_color_style' ) == 'style-c'): ?>
		.gp-theprint-sidebar .gp-theprint-widget {
			background: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_color' ) ); ?>;
			padding: 1.563rem;
		}
	<?php elseif( get_option( 'gp_theprint_sidebar_color_style' ) == 'style-d'): ?>
		.gp-theprint-sidebar {
			background: none;
			border: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_color' ) ); ?>;
			padding: 1.563rem 1.563rem 0 1.563rem;
		}
	<?php elseif( get_option( 'gp_theprint_sidebar_color_style' ) == 'style-e'): ?>
		.gp-theprint-sidebar {
			background: none;
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_color' ) ); ?>;
			padding: 1.563rem 1.563rem 0 1.563rem;
		}
	<?php elseif( get_option( 'gp_theprint_sidebar_color_style' ) == 'style-f'): ?>
		.gp-theprint-sidebar .gp-theprint-widget {
			background: none;
			border: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_color' ) ); ?>;
			padding: 1.563rem;
		}
	<?php elseif( get_option( 'gp_theprint_sidebar_color_style' ) == 'style-g'): ?>
		.gp-theprint-sidebar .gp-theprint-widget {
			background: none;
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_color' ) ); ?>;
			padding: 1.563rem;
		}
	<?php endif; ?>


	/* Sidebar widget background */
	h4.gp-theprint-widget-title span {
		background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
	}


	/* Sidebar widget color */
	h4.gp-theprint-widget-title,
	h4.gp-theprint-widget-title a,
	h4.gp-theprint-widget-title a:hover {
		color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_text_color' ) ); ?>;
	}


	/* Sidebar widget style */
	<?php if( get_option( 'gp_theprint_widget_style' ) == 'style-b'): ?>
		h4.gp-theprint-widget-title {
			font-size: 1.250rem;
		}

		h4.gp-theprint-widget-title span {
			background: none;
			line-height: 1;
			padding: 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-c'): ?>
		h4.gp-theprint-widget-title {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ) ); ?>;
		}

		h4.gp-theprint-widget-title span {
			display: inline-block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-d'): ?>
		h4.gp-theprint-widget-title span {
			display: block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			text-align: center;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-e'): ?>
		h4.gp-theprint-widget-title span {
			display: block;
			background: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
		    background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ) ); ?> 100%);
		    background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ) ); ?> 100%);
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-f'): ?>
		h4.gp-theprint-widget-title span {
			display: inline-block;
			background: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
		    background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ) ); ?> 100%);
		    background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ) ); ?> 100%);
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-g'): ?>
		h4.gp-theprint-widget-title span {
			display: block;
			background: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
		    background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ) ); ?> 100%);
		    background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ) ); ?> 100%);
		    text-align: center;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-h'): ?>
		h4.gp-theprint-widget-title {
			font-size: 0.875rem;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
		}

		h4.gp-theprint-widget-title span {
			display: inline-block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			line-height: 1;
			padding: 0.500rem 0.750rem 0.313rem 0.750rem;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-i'): ?>
		h4.gp-theprint-widget-title {
			font-size: 0.875rem;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
		}

		h4.gp-theprint-widget-title span {
			display: inline-block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			line-height: 1;
			padding: 0.313rem 0.750rem 0.500rem 0.750rem;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-j'): ?>
		h4.gp-theprint-widget-title {
			font-size: 1.125rem;
		}

		h4.gp-theprint-widget-title span {
			display: inline-block;
			background: none;
			border-top: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			line-height: 1;
			padding: 0.625rem 0 0 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-k'): ?>
		h4.gp-theprint-widget-title {
			font-size: 1.125rem;
		}

		h4.gp-theprint-widget-title span {
			display: inline-block;
			background: none;
			border-bottom: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			line-height: 1;
			padding: 0 0 0.625rem 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-l'): ?>
		h4.gp-theprint-widget-title {
			font-size: 1.125rem;
		}

		h4.gp-theprint-widget-title span {
			display: block;
			background: none;
			border-top: 0.625rem solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			line-height: 1;
			padding: 0.625rem 0 0 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-m'): ?>
		h4.gp-theprint-widget-title {
			font-size: 1.125rem;
		}

		h4.gp-theprint-widget-title span {
			display: block;
			background: none;
			border-bottom: 0.625rem solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			line-height: 1;
			padding: 0 0 0.625rem 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-n'): ?>
		h4.gp-theprint-widget-title {
			font-size: 1.125rem;
		}

		h4.gp-theprint-widget-title span {
			display: inline-block; 
			background-color: #ffffff; 
			line-height: 1;
			padding: 0 0.750rem 0 0; 
			position: relative; 
			z-index: 99;
		}

		h4.gp-theprint-widget-title span.after {
			display: block;
			content: ''; 
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>; 
			width: 100%; 
			height: 6px; 
			margin-top: -3px; 
			position: absolute; 
			top: 50%; 
			left: 0; 
			z-index: 9;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-o'): ?>
		h4.gp-theprint-widget-title {
			font-size: 1.250rem;
		}

		h4.gp-theprint-widget-title span {
			display: inline-block; 
			background-color: #ffffff; 
			line-height: 1;
			padding: 0 0.750rem 0 0; 
			position: relative; 
			z-index: 99;
		}

		h4.gp-theprint-widget-title span.after {
			display: block;
			content: ''; 
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>; 
			width: 100%; 
			height: 0.750rem; 
			margin-top: -0.375rem; 
			position: absolute; 
			top: 50%; 
			left: 0; 
			z-index: 9;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-p'): ?>
		h4.gp-theprint-widget-title {
			font-size: 1.250rem;
			text-align: center;
		}

		h4.gp-theprint-widget-title span {
			display: inline-block; 
			background-color: #ffffff; 
			line-height: 1;
			padding: 0 0.750rem 0 0.750rem; 
			position: relative; 
			z-index: 99;
		}

		h4.gp-theprint-widget-title span.after {
			display: block;
			content: ''; 
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>; 
			width: 100%; 
			height: 1px; 
			margin-top: -0.5px; 
			position: absolute; 
			top: 50%; 
			left: 0; 
			z-index: 9;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-q'): ?>
		h4.gp-theprint-widget-title {
			font-size: 1.250rem;
			text-align: center;
		}

		h4.gp-theprint-widget-title span {
			display: inline-block; 
			background-color: #ffffff; 
			line-height: 1;
			padding: 0 0.750rem 0 0.750rem; 
			position: relative; 
			z-index: 99;
		}

		h4.gp-theprint-widget-title span.after {
			display: block;
			content: ''; 
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>; 
			width: 100%; 
			height: 0.750rem; 
			margin-top: -0.375rem; 
			position: absolute; 
			top: 50%; 
			left: 0; 
			z-index: 9;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-r'): ?>
		h4.gp-theprint-widget-title span {
			display: block; 
			background: none; 
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			line-height: 2.500rem;
			padding: 0 0.750rem;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-s'): ?>
		h4.gp-theprint-widget-title span {
			display: inline-block; 
			background: none; 
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			line-height: 2.500rem;
			padding: 0 0.750rem;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-t'): ?>
		h4.gp-theprint-widget-title span {
			display: block; 
			background: none; 
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			line-height: 2.500rem;
			padding: 0 0.750rem;
			text-align: center;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-u'): ?>
		h4.gp-theprint-widget-title span {
			background: none;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ) ); ?>;
			line-height: 2.625rem;
			padding: 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-v'): ?>
		h4.gp-theprint-widget-title span {
			background: none;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ) ); ?>;
			line-height: 2.625rem;
			padding: 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-w'): ?>
		h4.gp-theprint-widget-title span {
			background: none;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ) ); ?>;
			line-height: 2.750rem;
			padding: 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-x'): ?>
		h4.gp-theprint-widget-title span {
			background: none;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ) ); ?>;
			line-height: 2.500rem;
			padding: 0;
		}
	<?php else: ?>
		h4.gp-theprint-widget-title span {
			background: <?php echo esc_attr( get_option( 'gp_theprint_sidebar_widget_background_primary_color' ) ); ?>;
		}
	<?php endif; ?>


	/* Homepage widget background */
	h1.gp-theprint-page-title span, 
	h4.gp-theprint-page-title span,
	.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
	.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
	.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
		background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
	}


	/* Homepage widget color */
	h1.gp-theprint-page-title, 
	h4.gp-theprint-page-title,
	.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
	.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title a,
	.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title a:hover,
	.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
	.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title a,
	.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title a:hover,
	.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title,
	.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title a,
	.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title a:hover {
		color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_text_color' ) ); ?>;
	}


	/* Homepage widget style */
	<?php if( get_option( 'gp_theprint_widget_style' ) == 'style-b'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			font-size: 1.250rem;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			background: none;
			line-height: 1;
			height: auto;
			padding: 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-c'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_secondary_color' ) ); ?>;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: inline-block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-d'): ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			text-align: center;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-e'): ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: block;
			background: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
		    background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_secondary_color' ) ); ?> 100%);
		    background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_secondary_color' ) ); ?> 100%);
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-f'): ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: inline-block;
			background: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
		    background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_secondary_color' ) ); ?> 100%);
		    background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_secondary_color' ) ); ?> 100%);
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-g'): ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: block;
			background: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
		    background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_secondary_color' ) ); ?> 100%);
		    background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_secondary_color' ) ); ?> 100%);
		    text-align: center;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-h'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			font-size: 0.875rem;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: inline-block;
			line-height: 1;
			padding: 0.500rem 0.750rem 0.313rem 0.750rem;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-i'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			font-size: 0.875rem;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: inline-block;
			line-height: 1;
			padding: 0.313rem 0.750rem 0.500rem 0.750rem;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-j'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			font-size: 1.125rem;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: inline-block;
			background: none;
			border-top: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			line-height: 1;
			padding: 0.625rem 0 0 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-k'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			font-size: 1.125rem;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: inline-block;
			background: none;
			border-bottom: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			line-height: 1;
			padding: 0 0 0.625rem 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-l'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			font-size: 1.125rem;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: block;
			background: none;
			border-top: 0.625rem solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			line-height: 1;
			padding: 0.625rem 0 0 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-m'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			font-size: 1.125rem;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: block;
			background: none;
			border-bottom: 0.625rem solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			line-height: 1;
			padding: 0 0 0.625rem 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-n'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			font-size: 1.125rem;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: inline-block; 
			background-color: #ffffff;
			line-height: 1;
			padding: 0 0.750rem 0 0; 
			position: relative; 
			z-index: 99;
		}

		h1.gp-theprint-page-title span.after,
		h4.gp-theprint-page-title span.after,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span.after,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span.after,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span.after {
			display: block;
			content: ''; 
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>; 
			width: 100%; 
			height: 6px; 
			margin-top: -3px; 
			position: absolute; 
			top: 50%; 
			left: 0; 
			z-index: 9;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-o'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			font-size: 1.250rem;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: inline-block; 
			background-color: #ffffff; 
			line-height: 1;
			padding: 0 0.750rem 0 0; 
			position: relative; 
			z-index: 99;
		}

		h1.gp-theprint-page-title span.after,
		h4.gp-theprint-page-title span.after,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span.after,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span.after,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span.after {
			display: block;
			content: ''; 
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>; 
			width: 100%; 
			height: 0.750rem; 
			margin-top: -0.375rem; 
			position: absolute; 
			top: 50%; 
			left: 0; 
			z-index: 9;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-p'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			font-size: 1.250rem;
			text-align: center;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: inline-block; 
			background-color: #ffffff; 
			line-height: 1;
			padding: 0 0.750rem 0 0.750rem; 
			position: relative; 
			z-index: 99;
		}

		h1.gp-theprint-page-title span.after,
		h4.gp-theprint-page-title span.after,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span.after,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span.after,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span.after {
			display: block;
			content: ''; 
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>; 
			width: 100%; 
			height: 1px; 
			margin-top: -0.5px; 
			position: absolute; 
			top: 50%; 
			left: 0; 
			z-index: 9;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-q'): ?>
		h1.gp-theprint-page-title,
		h4.gp-theprint-page-title,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title {
			font-size: 1.250rem;
			text-align: center;
		}

		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: inline-block; 
			background-color: #ffffff; 
			line-height: 1;
			padding: 0 0.750rem 0 0.750rem; 
			position: relative; 
			z-index: 99;
		}

		h1.gp-theprint-page-title span.after,
		h4.gp-theprint-page-title span.after,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span.after,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span.after,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span.after {
			display: block;
			content: ''; 
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>; 
			width: 100%; 
			height: 0.750rem; 
			margin-top: -0.375rem; 
			position: absolute; 
			top: 50%; 
			left: 0; 
			z-index: 9;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-r'): ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			background: none;
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			line-height: 2.500rem;
			padding: 0 0.750rem;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-s'): ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span  {
			display: inline-block;
			background: none;
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			line-height: 2.500rem;
			padding: 0 0.750rem;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-t'): ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			display: block;
			background: none;
			border: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			line-height: 2.500rem;
			padding: 0 0.750rem;
			text-align: center;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-u'): ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			background: none;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_secondary_color' ) ); ?>;
			line-height: 2.625rem;
			padding: 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-v'): ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			background: none;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_secondary_color' ) ); ?>;
			line-height: 2.625rem;
			padding: 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-w'): ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			background: none;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			border-bottom: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_secondary_color' ) ); ?>;
			line-height: 2.750rem;
			padding: 0;
		}
	<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-x'): ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			background: none;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
			border-bottom: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_secondary_color' ) ); ?>;
			line-height: 2.500rem;
			padding: 0;
		}
	<?php else: ?>
		h1.gp-theprint-page-title span,
		h4.gp-theprint-page-title span,
		.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title span,
		.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title span {
			background: <?php echo esc_attr( get_option( 'gp_theprint_homepage_widget_background_primary_color' ) ); ?>;
		}
	<?php endif; ?>


	/* Entry block title */
	<?php if( get_option( 'gp_theprint_block_title_border_color' ) != ''): ?>
		h4.gp-theprint-block-title,
		.comment-title h3,
		#respond h3#reply-title {
			border-color: <?php echo esc_attr( get_option( 'gp_theprint_block_title_border_color' ) ); ?>;
		}
	<?php endif; ?>


	/* Footer background */
	.gp-theprint-footer {
		background-color: <?php echo esc_attr( get_option( 'gp_theprint_footer_primary_color' ) ); ?>;
	}


	/* Footer text color */
	.gp-theprint-footer,
	.gp-theprint-footer a,
	.gp-theprint-footer a:hover,
	.gp-theprint-footer-navigation ul li a,
	.gp-theprint-footer-navigation ul li a:hover,
	.gp-theprint-footer-icons ul li a,
	.gp-theprint-footer-icons ul li a:hover {
		color: <?php echo esc_attr( get_option( 'gp_theprint_footer_text_color' ) ); ?>;
	}


	/* Footer color style */
	<?php if( get_option( 'gp_theprint_footer_color_style' ) == 'style-b'): ?>
		.gp-theprint-footer {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_footer_primary_color' ) ); ?>;
			border-top: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_footer_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_footer_color_style' ) == 'style-c'): ?>
		.gp-theprint-footer {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_footer_primary_color' ) ); ?>;
			border-top: 3px solid <?php echo esc_attr( get_option( 'gp_theprint_footer_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_footer_color_style' ) == 'style-d'): ?>
		.gp-theprint-footer {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_footer_primary_color' ) ); ?>;
			border-top: 5px solid <?php echo esc_attr( get_option( 'gp_theprint_footer_secondary_color' ) ); ?>;
		}
	<?php elseif( get_option( 'gp_theprint_footer_color_style' ) == 'style-e'): ?>
		.gp-theprint-footer {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_footer_primary_color' ) ); ?>;
			border-top: 10px solid <?php echo esc_attr( get_option( 'gp_theprint_footer_secondary_color' ) ); ?>;
		}
	<?php else: ?>
		.gp-theprint-footer {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_footer_primary_color' ) ); ?>;
		}
	<?php endif; ?>


	/* Single post - Entry share */
	<?php if( get_option( 'gp_theprint_single_entry_share_style' ) == 'style-b'): ?>
		.single-entry-share ul li {
			margin-bottom: 5px;
		}

		.single-entry-share ul li a {
			display: inline-block;
			width: 2.625rem;
			height: 2.625rem;
			background-color: #ffffff;
			font-size: 1.000rem;
			line-height: 2.500rem;
			color: #333333;
			text-align: center;
			text-decoration: none;
			border: 1px solid #e9e9e9;
		}

		.single-entry-share-mobile ul li a {
			display: inline-block;
			background-color: #ffffff;
			font-size: 1.000rem;
			line-height: 2.500rem;
			color: #333333;
			text-align: center;
			text-decoration: none;
			border: 1px solid #e9e9e9;
		}
	<?php elseif( get_option( 'gp_theprint_single_entry_share_style' ) == 'style-c'): ?>
		.single-entry-share ul li a,
		.single-entry-share-mobile ul li a {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_single_entry_share_color' ) ); ?>;
			color: #ffffff;
		}
	<?php elseif( get_option( 'gp_theprint_single_entry_share_style' ) == 'style-d'): ?>
		.single-entry-share ul li a,
		.single-entry-share-mobile ul li a {
			background-color: #777777;
			color: #ffffff;
		}

		.single-entry-share ul li.facebook a,
		.single-entry-share-mobile ul li.facebook a {
			background-color: #3b5998;
		}

		.single-entry-share ul li.twitter a,
		.single-entry-share-mobile ul li.twitter a {
			background-color: #55acee;
		}

		.single-entry-share ul li.linkedin a,
		.single-entry-share-mobile ul li.linkedin a {
			background-color: #0374b3;
		}

		.single-entry-share ul li.google-plus a,
		.single-entry-share-mobile ul li.google-plus a {
			background-color: #dd4b39;
		}

		.single-entry-share ul li.pinterest a,
		.single-entry-share-mobile ul li.pinterest a {
			background-color: #ca0034;
		}
	<?php endif; ?>


	/* Single post - Entry meta category */
	<?php if( get_option( 'gp_theprint_single_entry_meta_category_style' ) == 'style-b'): ?>
		.entry-single.style-a .single-entry-meta-category a,
		.entry-single.style-a .single-entry-meta-category a:hover,
		.entry-single.style-b .single-entry-meta-category a,
		.entry-single.style-b .single-entry-meta-category a:hover {
			display: inline-block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_link_color' ) ); ?>;
			padding: 2px 8px;
		}
	<?php elseif( get_option( 'gp_theprint_single_entry_meta_category_style' ) == 'style-c'): ?>
		.entry-single.style-a .single-entry-meta-category a,
		.entry-single.style-a .single-entry-meta-category a:hover,
		.entry-single.style-b .single-entry-meta-category a,
		.entry-single.style-b .single-entry-meta-category a:hover {
			display: inline-block;
			border: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_link_color' ) ); ?>;
			padding: 2px 8px;
		}
	<?php elseif( get_option( 'gp_theprint_single_entry_meta_category_style' ) == 'style-d'): ?>
		.entry-single.style-a .single-entry-meta-category a,
		.entry-single.style-a .single-entry-meta-category a:hover,
		.entry-single.style-b .single-entry-meta-category a,
		.entry-single.style-b .single-entry-meta-category a:hover {
			display: inline-block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_primary_color' ) ); ?>;
			background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_secondary_color' ) ); ?> 100%);
    		background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_secondary_color' ) ); ?> 100%);
			color: <?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_link_color' ) ); ?>;
			padding: 2px 8px;
		}
	<?php elseif( get_option( 'gp_theprint_single_entry_meta_category_style' ) == 'style-f'): ?>
		.entry-single.style-a .single-entry-meta-category a,
		.entry-single.style-a .single-entry-meta-category a:hover,
		.entry-single.style-b .single-entry-meta-category a,
		.entry-single.style-b .single-entry-meta-category a:hover {
			padding: 2px 8px;
		}
	<?php elseif( get_option( 'gp_theprint_single_entry_meta_category_style' ) == 'style-g'): ?>
		.entry-single.style-a .single-entry-meta-category a,
		.entry-single.style-a .single-entry-meta-category a:hover,
		.entry-single.style-b .single-entry-meta-category a,
		.entry-single.style-b .single-entry-meta-category a:hover {
			display: inline-block;
			color: <?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_link_color' ) ); ?>;
			padding: 2px 8px;
		}
	<?php else: ?>
		.entry-single.style-a .single-entry-meta-category a,
		.entry-single.style-a .single-entry-meta-category a:hover,
		.entry-single.style-b .single-entry-meta-category a,
		.entry-single.style-b .single-entry-meta-category a:hover {
			color: <?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_category_link_color' ) ); ?>;
		}
	<?php endif; ?>


	/* Single post - Entry meta */
	<?php if( get_option( 'gp_theprint_single_entry_meta_hide' ) != ''): ?>
		.entry-single .entry-header .entry-meta,
		.entry-single .entry-cover .entry-meta,
		.entry-cover.style-f .entry-meta {
			display: none;
		}
	<?php endif; ?>

	.entry-single.style-a .entry-meta a,
	.entry-single.style-a .entry-meta a:hover,
	.entry-single.style-b .entry-meta a,
	.entry-single.style-b .entry-meta a:hover {
		color: <?php echo esc_attr( get_option( 'gp_theprint_single_entry_meta_link_color' ) ); ?>;
	}


	/* Single post - Recent posts */
	<?php if( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-b'): ?>
		.entry-recent-post .entry-meta-category {
			font-size: 0.813rem;
		}

		.entry-recent-post .entry-meta-category a,
		.entry-recent-post .entry-meta-category a:hover {
			display: inline-block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 1px 5px;
		}
	<?php elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-c'): ?>
		.entry-recent-post .entry-meta-category {
			font-size: 0.813rem;
		}

		.entry-recent-post .entry-meta-category a,
		.entry-recent-post .entry-meta-category a:hover {
			display: inline-block;
			border: 1px solid <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_primary_color' ) ); ?>;
			color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 1px 5px;
		}
	<?php elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-d'): ?>
		.entry-recent-post .entry-meta-category {
			font-size: 0.813rem;
		}

		.entry-recent-post .entry-meta-category a,
		.entry-recent-post .entry-meta-category a:hover {
			display: inline-block;
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_primary_color' ) ); ?>;
			background: -webkit-linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_secondary_color' ) ); ?> 100%);
    		background: linear-gradient(55deg,<?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_primary_color' ) ); ?> 0%,<?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_secondary_color' ) ); ?> 100%);
			color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 1px 5px;
		}
	<?php elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-f'): ?>
		.entry-recent-post .entry-meta-category {
			font-size: 0.813rem;
		}

		.entry-recent-post .entry-meta-category a,
		.entry-recent-post .entry-meta-category a:hover {
			padding: 1px 5px;
		}
	<?php elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-g'): ?>
		.entry-recent-post .entry-meta-category {
			font-size: 0.813rem;
		}

		.entry-recent-post .entry-meta-category a,
		.entry-recent-post .entry-meta-category a:hover {
			display: inline-block;
			color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_link_color' ) ); ?>;
			padding: 1px 5px;
		}
	<?php else: ?>
		.entry-recent-post .entry-meta-category a,
		.entry-recent-post .entry-meta-category a:hover {
			color: <?php echo esc_attr( get_option( 'gp_theprint_front_posts_entry_meta_category_link_color' ) ); ?>;
		}
	<?php endif; ?>


	/* Mobile menu */
	<?php if( get_option( 'gp_theprint_mobile_menu_style' ) == 'dark'): ?>
		.gp-theprint-menu-wrap {
			background: #222222;
		}

		.gp-theprint-search-mobile form.gp-theprint-search-form input[type="text"] {
			background: #e9e9e9;
			border: 1px solid #333333;
		}

		.gp-theprint-social-icons-mobile {
			border-bottom: 1px dotted #333333;
		}

		.gp-theprint-social-icons-mobile ul li a,
		.gp-theprint-social-icons-mobile ul li a:hover {
			color: #ffffff;
		}

		.gp-theprint-mobile-menu ul li a,
		.gp-theprint-mobile-menu ul li a:hover {
			color: #ffffff;
			border-bottom: 1px dotted #333333;
		}
	<?php elseif( get_option( 'gp_theprint_mobile_menu_style' ) == 'gray'): ?>
		.gp-theprint-menu-wrap {
			background: #e3e3e3;
		}

		.gp-theprint-social-icons-mobile {
			border-bottom: 1px dotted #c1c1c1;
		}

		.gp-theprint-social-icons-mobile ul li a,
		.gp-theprint-social-icons-mobile ul li a:hover {
			color: #333333;
		}

		.gp-theprint-mobile-menu ul li a,
		.gp-theprint-mobile-menu ul li a:hover {
			color: #333333;
			border-bottom: 1px dotted #c1c1c1;
		}
	<?php endif; ?>


	/* Background */
	<?php if( get_option( 'gp_theprint_body_background' ) != ''): ?>
		body {
			background-color: <?php echo esc_attr( get_option( 'gp_theprint_body_background' ) ); ?>;
		}
	<?php endif; ?>


	/* Background image */
	<?php if( get_option( 'gp_theprint_body_background_image_enable' ) != ''): ?>
		body {
			<?php if( get_option( 'gp_theprint_body_background_image_upload' ) != ''): ?>
				background-image: url('<?php echo esc_url( get_option( 'gp_theprint_body_background_image_upload' ) ); ?>');
			<?php endif; ?>

				background-repeat:
				<?php if( get_option( 'gp_theprint_body_background_image_repeat' ) == 'no-repeat'): ?>
					no-repeat
				<?php elseif( get_option( 'gp_theprint_body_background_image_repeat' ) == 'repeat'): ?>
					repeat
				<?php elseif( get_option( 'gp_theprint_body_background_image_repeat' ) == 'repeat-x'): ?>
					repeat-x
				<?php elseif( get_option( 'gp_theprint_body_background_image_repeat' ) == 'repeat-y'): ?>
					repeat-y
				<?php else: ?>
					inherit
				<?php endif; ?>;

				background-size: 
				<?php if( get_option( 'gp_theprint_body_background_image_size' ) == 'cover'): ?>
					cover
				<?php elseif( get_option( 'gp_theprint_body_background_image_size' ) == 'contain'): ?>
					contain
				<?php else: ?>
					inherit
				<?php endif; ?>;

				background-attachment:
				<?php if( get_option( 'gp_theprint_body_background_image_attachment' ) == 'scroll'): ?>
					scroll
				<?php elseif( get_option( 'gp_theprint_body_background_image_attachment' ) == 'fixed'): ?>
					fixed
				<?php else: ?>
					inherit
				<?php endif; ?>;

				background-position: 
				<?php if( get_option( 'gp_theprint_body_background_image_position' ) == 'left-top'): ?>
					left top
				<?php elseif( get_option( 'gp_theprint_body_background_image_position' ) == 'left-center'): ?>
					left center
				<?php elseif( get_option( 'gp_theprint_body_background_image_position' ) == 'left-bottom'): ?>
					left bottom
				<?php elseif( get_option( 'gp_theprint_body_background_image_position' ) == 'center-center'): ?>
					center center
				<?php elseif( get_option( 'gp_theprint_body_background_image_position' ) == 'center-bottom'): ?>
					center bottom
				<?php elseif( get_option( 'gp_theprint_body_background_image_position' ) == 'right-top'): ?>
					right top
				<?php elseif( get_option( 'gp_theprint_body_background_image_position' ) == 'right-center'): ?>
					right center
				<?php elseif( get_option( 'gp_theprint_body_background_image_position' ) == 'right-bottom'): ?>
					right bottom
				<?php else: ?>
					center top
				<?php endif; ?>;
		}
	<?php endif; ?>


	/* Site cover */
	<?php if ( get_option( 'gp_theprint_site_cover_enable' ) != '' ): ?>
	.gp-theprint-site-cover {
		<?php if ( get_option( 'gp_theprint_site_cover_background_image_upload' ) != '' ): ?>
			background-image: url('<?php echo esc_url( get_option( 'gp_theprint_site_cover_background_image_upload' ) ); ?>');
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_site_cover_max_height' ) != '' ): ?>
			height: <?php echo esc_attr( get_option( 'gp_theprint_site_cover_max_height' ) ); ?>px;
		<?php else: ?>
			height: 200px;
		<?php endif; ?>

			background-repeat:
			<?php if( get_option( 'gp_theprint_site_cover_background_image_repeat' ) == 'no-repeat'): ?>
				no-repeat
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_repeat' ) == 'repeat'): ?>
				repeat
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_repeat' ) == 'repeat-x'): ?>
				repeat-x
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_repeat' ) == 'repeat-y'): ?>
				repeat-y
			<?php else: ?>
				inherit
			<?php endif; ?>;

			background-size: 
			<?php if( get_option( 'gp_theprint_site_cover_background_image_size' ) == 'cover'): ?>
				cover
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_size' ) == 'contain'): ?>
				contain
			<?php else: ?>
				inherit
			<?php endif; ?>;

			background-attachment:
			<?php if( get_option( 'gp_theprint_site_cover_background_image_attachment' ) == 'scroll'): ?>
				scroll
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_attachment' ) == 'fixed'): ?>
				fixed
			<?php else: ?>
				inherit
			<?php endif; ?>;

			background-position: 
			<?php if( get_option( 'gp_theprint_site_cover_background_image_position' ) == 'left-top'): ?>
				left top
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_position' ) == 'left-center'): ?>
				left center
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_position' ) == 'left-bottom'): ?>
				left bottom
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_position' ) == 'center-center'): ?>
				center center
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_position' ) == 'center-bottom'): ?>
				center bottom
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_position' ) == 'right-top'): ?>
				right top
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_position' ) == 'right-center'): ?>
				right center
			<?php elseif( get_option( 'gp_theprint_site_cover_background_image_position' ) == 'right-bottom'): ?>
				right bottom
			<?php else: ?>
				center top
			<?php endif; ?>;
	}
	<?php endif; ?>

</style>

<?php if( get_option( 'gp_theprint_custom_css' ) != ''): ?>

<style type="text/css">
	<?php echo get_option( 'gp_theprint_custom_css' ); ?>
</style>

<?php endif; ?>