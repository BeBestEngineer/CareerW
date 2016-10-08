<?php
/**
 * The template for custom typography.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

?>

<?php if ( get_option( 'gp_theprint_google_fonts_enable' ) != '' ): ?>
	<?php if ( get_option( 'gp_theprint_google_fonts_script_code' ) != '' ): ?>
		<?php echo get_option( 'gp_theprint_google_fonts_script_code' ); ?>
	<?php endif; ?>
<?php endif; ?>

<?php if ( get_option( 'gp_theprint_typekit_fonts_enable' ) != '' ): ?>
	<?php if ( get_option( 'gp_theprint_typekit_fonts_script_code' ) != '' ): ?>
		<?php echo get_option( 'gp_theprint_typekit_fonts_script_code' ); ?>
	<?php endif; ?>
<?php endif; ?>

	<style type="text/css">
	
		/* Logo font */
		<?php if ( get_option( 'gp_theprint_logo_font_family' ) != '' ): ?>
			.gp-theprint-logo h1.site-title, 
			.gp-theprint-logo p.site-title {
				<?php echo get_option( 'gp_theprint_logo_font_family' ); ?>
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_logo_font_weight' ) != '' ): ?>
			.gp-theprint-logo h1.site-title, 
			.gp-theprint-logo p.site-title {
				font-weight: <?php echo get_option( 'gp_theprint_logo_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_logo_font_weight' ) != '' ): ?>
			.gp-theprint-logo h1.site-title, 
			.gp-theprint-logo p.site-title {
				font-weight: <?php echo get_option( 'gp_theprint_logo_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_logo_font_text_tranform' ) != '' ): ?>
			.gp-theprint-logo h1.site-title, 
			.gp-theprint-logo p.site-title {
				text-transform: <?php echo get_option( 'gp_theprint_logo_font_text_tranform' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_logo_font_letter_spacing' ) != '' ): ?>
			.gp-theprint-logo h1.site-title, 
			.gp-theprint-logo p.site-title {
				letter-spacing: <?php echo get_option( 'gp_theprint_logo_font_letter_spacing' ); ?>px;
			}
		<?php endif; ?>


		/* Primary navigation */
		<?php if ( get_option( 'gp_theprint_primary_navigation_font_family' ) != '' ): ?>
			.gp-theprint-primary-navigation {
				<?php echo get_option( 'gp_theprint_primary_navigation_font_family' ); ?>
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_primary_navigation_font_weight' ) != '' ): ?>
			.gp-theprint-primary-navigation {
				font-weight: <?php echo get_option( 'gp_theprint_primary_navigation_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_primary_navigation_font_text_tranform' ) != '' ): ?>
			.gp-theprint-primary-navigation {
				text-transform: <?php echo get_option( 'gp_theprint_primary_navigation_font_text_tranform' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_primary_navigation_font_letter_spacing' ) != '' ): ?>
			.gp-theprint-primary-navigation {
				letter-spacing: <?php echo get_option( 'gp_theprint_primary_navigation_font_letter_spacing' ); ?>px;
			}
		<?php endif; ?>


		/* Secondary navigation */
		<?php if ( get_option( 'gp_theprint_secondary_navigation_font_family' ) != '' ): ?>
			.gp-theprint-secondary-navigation {
				<?php echo get_option( 'gp_theprint_secondary_navigation_font_family' ); ?>
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_secondary_navigation_font_weight' ) != '' ): ?>
			.gp-theprint-secondary-navigation {
				font-weight: <?php echo get_option( 'gp_theprint_secondary_navigation_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_secondary_navigation_font_text_transform' ) != '' ): ?>
			.gp-theprint-secondary-navigation {
				text-transform: <?php echo get_option( 'gp_theprint_secondary_navigation_font_text_transform' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_secondary_navigation_font_letter_spacing' ) != '' ): ?>
			.gp-theprint-secondary-navigation {
				letter-spacing: <?php echo get_option( 'gp_theprint_secondary_navigation_font_letter_spacing' ); ?>px;
			}
		<?php endif; ?>

		/* Footer navigation */
		<?php if ( get_option( 'gp_theprint_footer_navigation_font_family' ) != '' ): ?>
			.gp-theprint-footer-navigation {
				<?php echo get_option( 'gp_theprint_footer_navigation_font_family' ); ?>
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_footer_navigation_font_weight' ) != '' ): ?>
			.gp-theprint-footer-navigation {
				font-weight: <?php echo get_option( 'gp_theprint_footer_navigation_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_footer_navigation_font_text_transform' ) != '' ): ?>
			.gp-theprint-footer-navigation {
				text-transform: <?php echo get_option( 'gp_theprint_footer_navigation_font_text_transform' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_footer_navigation_font_letter_spacing' ) != '' ): ?>
			.gp-theprint-footer-navigation {
				letter-spacing: <?php echo get_option( 'gp_theprint_footer_navigation_font_letter_spacing' ); ?>px;
			}
		<?php endif; ?>


		/* Headlines */
		<?php if ( get_option( 'gp_theprint_headlines_font_family' ) != '' ): ?>
			h1, h2, h3, h4, h5, h6,
			button, input[type="button"], input[type="reset"], input[type="submit"],
			.entry-rating .rating-score-box .score-description .score-box .score-total,
			.entry-rating .rating-score-box .score-description .score-box .score-title,
			.gp-theprint-pagination {
				<?php echo get_option( 'gp_theprint_headlines_font_family' ); ?>
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_headlines_font_weight' ) != '' ): ?>
			h1, h2, h3, h4, h5, h6,
			.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title,
			.gp-theprint-pagination {
				font-weight: <?php echo get_option( 'gp_theprint_headlines_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_headlines_font_text_tranform' ) != '' ): ?>
			h1, h2, h3, h4, h5, h6,
			.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title,
			.gp-theprint-pagination {
				text-transform: <?php echo get_option( 'gp_theprint_headlines_font_text_tranform' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_headlines_font_line_height' ) != '' ): ?>
			h1, h2, h3, h4, h5, h6,
			button, input[type="button"], input[type="reset"], input[type="submit"],
			.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title,
			.gp-theprint-pagination {
				line-height: <?php echo get_option( 'gp_theprint_headlines_font_line_height' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_headlines_font_letter_spacing' ) != '' ): ?>
			h1, h2, h3, h4, h5, h6,
			.gp-theprint-primary-navigation ul li div.sub-menu ul.sub-posts li a.entry-title,
			.gp-theprint-pagination {
				letter-spacing: <?php echo get_option( 'gp_theprint_headlines_font_letter_spacing' ); ?>px;
			}
		<?php endif; ?>


		/* Widget titles */
		<?php if ( get_option( 'gp_theprint_widget_title_font_family' ) != '' ): ?>
			.gp-theprint-staff-picks h4.gp-theprint-staff-title,
			h1.gp-theprint-page-title, 
			h4.gp-theprint-page-title,
			h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title,
			h4.gp-theprint-block-title,
			.comment-title h3, 
			#respond h3#reply-title {
				<?php echo get_option( 'gp_theprint_widget_title_font_family' ); ?>
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_widget_title_font_weight' ) != '' ): ?>
			.gp-theprint-staff-picks h4.gp-theprint-staff-title,
			h1.gp-theprint-page-title, 
			h4.gp-theprint-page-title,
			h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title,
			h4.gp-theprint-block-title,
			.comment-title h3, 
			#respond h3#reply-title {
				font-weight: <?php echo get_option( 'gp_theprint_widget_title_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_widget_title_font_text_tranform' ) != '' ): ?>
			.gp-theprint-staff-picks h4.gp-theprint-staff-title,
			h1.gp-theprint-page-title, 
			h4.gp-theprint-page-title,
			h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title,
			h4.gp-theprint-block-title,
			.comment-title h3, 
			#respond h3#reply-title {
				text-transform: <?php echo get_option( 'gp_theprint_widget_title_font_text_tranform' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_widget_title_font_letter_spacing' ) != '' ): ?>
			.gp-theprint-staff-picks h4.gp-theprint-staff-title,
			h1.gp-theprint-page-title, 
			h4.gp-theprint-page-title,
			h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-1 h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-2 h4.gp-theprint-widget-title,
			.gp-theprint-homepage-widget-area-3 h4.gp-theprint-widget-title,
			h4.gp-theprint-block-title,
			.comment-title h3, 
			#respond h3#reply-title {
				letter-spacing: <?php echo get_option( 'gp_theprint_widget_title_font_letter_spacing' ); ?>px;
			}
		<?php endif; ?>


		/* Featured posts */
		<?php if ( get_option( 'gp_theprint_featured_posts_font_weight' ) != '' ): ?>
			.featured-post h2.entry-title {
				font-weight: <?php echo get_option( 'gp_theprint_featured_posts_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_featured_posts_text_transform' ) != '' ): ?>
			.featured-post h2.entry-title {
				text-transform: <?php echo get_option( 'gp_theprint_featured_posts_text_transform' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_featured_posts_text_align' ) != '' ): ?>
			.featured-post .entry-description {
				text-align: <?php echo get_option( 'gp_theprint_featured_posts_text_align' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_featured_posts_font_letter_spacing' ) != '' ): ?>
			.featured-post h2.entry-title {
				letter-spacing: <?php echo get_option( 'gp_theprint_featured_posts_font_letter_spacing' ); ?>px;
			}
		<?php endif; ?>


		/* Staff posts */
		<?php if ( get_option( 'gp_theprint_staff_posts_font_weight' ) != '' ): ?>
			.gp-theprint-staff-post h2.entry-title {
				font-weight: <?php echo get_option( 'gp_theprint_staff_posts_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_staff_posts_text_transform' ) != '' ): ?>
			.gp-theprint-staff-post h2.entry-title {
				text-transform: <?php echo get_option( 'gp_theprint_staff_posts_text_transform' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_staff_posts_text_align' ) != '' ): ?>
			.gp-theprint-staff-post .entry-description {
				text-align: <?php echo get_option( 'gp_theprint_staff_posts_text_align' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_staff_posts_font_letter_spacing' ) != '' ): ?>
			.gp-theprint-staff-post h2.entry-title {
				letter-spacing: <?php echo get_option( 'gp_theprint_staff_posts_font_letter_spacing' ); ?>px;
			}
		<?php endif; ?>


		/* Entry meta category */
		<?php if ( get_option( 'gp_theprint_post_entry_meta_category_font_family' ) != '' ): ?>
			.entry-meta-category {
				<?php echo get_option( 'gp_theprint_post_entry_meta_category_font_family' ); ?>
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_post_entry_meta_category_font_weight' ) != '' ): ?>
			.entry-meta-category {
				font-weight: <?php echo get_option( 'gp_theprint_post_entry_meta_category_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_post_entry_meta_category_font_text_transform' ) != '' ): ?>
			.entry-meta-category {
				text-transform: <?php echo get_option( 'gp_theprint_post_entry_meta_category_font_text_transform' ); ?>;
			}
		<?php endif; ?>


		/* Entry meta */
		<?php if ( get_option( 'gp_theprint_entry_meta_font_family' ) != '' ): ?>
			.entry-meta {
				<?php echo get_option( 'gp_theprint_entry_meta_font_family' ); ?>
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_entry_meta_font_weight' ) != '' ): ?>
			.entry-meta {
				font-weight: <?php echo get_option( 'gp_theprint_entry_meta_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_entry_meta_font_text_tranform' ) != '' ): ?>
			.entry-meta {
				text-transform: <?php echo get_option( 'gp_theprint_entry_meta_font_text_tranform' ); ?>;
			}
		<?php endif; ?>


		/* Single entry title */
		<?php if ( get_option( 'gp_theprint_single_entry_title_font_family' ) != '' ): ?>
			h1.entry-title {
				<?php echo get_option( 'gp_theprint_single_entry_title_font_family' ); ?>
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_single_entry_title_font_weight' ) != '' ): ?>
			h1.entry-title {
				font-weight: <?php echo get_option( 'gp_theprint_single_entry_title_font_weight' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_single_entry_title_font_text_tranform' ) != '' ): ?>
			h1.entry-title {
				text-transform: <?php echo get_option( 'gp_theprint_single_entry_title_font_text_tranform' ); ?>;
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_single_entry_title_font_letter_spacing' ) != '' ): ?>
			h1.entry-title {
				letter-spacing: <?php echo get_option( 'gp_theprint_single_entry_title_font_letter_spacing' ); ?>;
			}
		<?php endif; ?>


		/* Body */
		<?php if ( get_option( 'gp_theprint_body_font_family' ) != '' ): ?>
			body {
				<?php echo get_option( 'gp_theprint_body_font_family' ); ?>
			}
		<?php endif; ?>

		<?php if ( get_option( 'gp_theprint_body_font_size' ) != '' ): ?>
			body {
				font-size: <?php echo get_option( 'gp_theprint_body_font_size' ); ?>px;
			}
		<?php endif; ?>

	</style>