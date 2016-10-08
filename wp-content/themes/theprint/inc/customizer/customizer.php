<?php
/**
 * This file contains the settings for the WordPress Theme Customizer (backend)
 */

function gp_theprint_customizer( $wp_customize ) {


// Remove sections.
$wp_customize->remove_section( 'colors');
$wp_customize->remove_section( 'background_image');


/*-----------------------------------------------------------------------------------*/
/*	Generals
/*-----------------------------------------------------------------------------------*/

$wp_customize->add_panel( 'gp_theprint_generals', 
	array(
		'title' => 'Generals',
		'description' => '',
		'priority' => 1,
		'capability' => 'edit_theme_options',
		'theme_supports' => ''
	) 
);

	/* Site Title & Tagline
	--------------------------------------------- */

	$wp_customize->get_section( 'title_tagline' ) -> panel = 'gp_theprint_generals';

	$wp_customize->get_section( 'title_tagline' ) -> priority = '1';

	/* Site Logo
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_image_logo', 
		array(
			'title' => 'Image Logo',
			'priority' => 2,
			'panel' => 'gp_theprint_generals',
		) 
	);

		/* Turn ON/OFF Logo Image */
		$wp_customize->add_setting( 'gp_theprint_image_logo_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_image_logo_enable',
	    		array(
	        		'label' => 'Turn ON/OFF Image Logo',
	        		'section' => 'gp_theprint_image_logo',
	        		'settings' => 'gp_theprint_image_logo_enable',
	        		'type' => 'checkbox',
	    		)
			);

		/* Logo Image Upload */
		$wp_customize->add_setting( 'gp_theprint_image_logo_upload', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) 
		);

			$wp_customize->add_control(
				new WP_Customize_Image_Control( $wp_customize, 'gp_theprint_image_logo_upload', 
					array(
	            		'label' => 'Upload Image Logo',
	            		'section' => 'gp_theprint_image_logo',
	            		'settings' => 'gp_theprint_image_logo_upload',
	    			)
				)
			);


	/* Favicon
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_favicon', 
		array(
			'title' => 'Favicon',
			'priority' => 3,
			'panel' => 'gp_theprint_generals',
		) 
	);
		/* Normal favicon. */
		$wp_customize->add_setting( 'gp_theprint_favicon', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) 
		);

			$wp_customize->add_control(
				new WP_Customize_Image_Control( $wp_customize, 'gp_theprint_favicon', 
					array(
	            		'label' => 'Upload favicon.',
	            		'section' => 'gp_theprint_favicon',
	            		'settings' => 'gp_theprint_favicon',
	    			)
				)
			);

	/* Site Cover
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_site_cover', 
		array(
			'title' => 'Site Cover',
			'priority' => 4,
			'panel' => 'gp_theprint_generals',
		) 
	);

		/* Show the site cover. */
		$wp_customize->add_setting( 'gp_theprint_site_cover_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_site_cover_enable',
	    		array(
	        		'label' => 'Show the site cover.',
	        		'section' => 'gp_theprint_site_cover',
	        		'settings' => 'gp_theprint_site_cover_enable',
	        		'type' => 'checkbox',
	    		)
			);

		/* Site cover max height. */
		$wp_customize->add_setting( 'gp_theprint_site_cover_max_height', 
			array(
				'default' => '200',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_site_cover_max_height',
	    		array(
	        		'label' => 'Site cover max height px.',
	        		'section' => 'gp_theprint_site_cover',
	        		'settings' => 'gp_theprint_site_cover_max_height',
	        		'type' => 'text',
	    		)
			);

		/* Site cover background. */
		$wp_customize->add_setting( 'gp_theprint_site_cover_background_image_upload', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) 
		);

			$wp_customize->add_control(
				new WP_Customize_Image_Control( $wp_customize, 'gp_theprint_site_cover_background_image_upload', 
					array(
	            		'label' => 'Upload the site cover.',
	            		'section' => 'gp_theprint_site_cover',
	            		'settings' => 'gp_theprint_site_cover_background_image_upload'
	    			)
				)
			);

		/* Site cover background image repeat. */
		$wp_customize->add_setting( 'gp_theprint_site_cover_background_image_repeat',
			array(
				'default' => 'inherit',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_site_cover_background_image_repeat',
	    		array(
        			'label' => 'Site cover background image repeat.',
        			'section' => 'gp_theprint_site_cover',
        			'settings' => 'gp_theprint_site_cover_background_image_repeat',
        			'type' => 'select',
        			'choices' => array(
        				'inherit' => 'Inherit',
            			'no-repeat' => 'No Repeat',
            			'repeat' => 'Repeat',
            			'repeat-x' => 'Repeat Horizontally',
            			'repeat-y' => 'Repeat Vertically',
       				)
    			)
			);

		/* Site cover background image size. */
		$wp_customize->add_setting( 'gp_theprint_site_cover_background_image_size',
			array(
				'default' => 'inherit',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_site_cover_background_image_size',
	    		array(
        			'label' => 'Site cover background image size.',
        			'section' => 'gp_theprint_site_cover',
        			'settings' => 'gp_theprint_site_cover_background_image_size',
        			'type' => 'select',
        			'choices' => array(
        				'inherit' => 'Inherit',
            			'cover' => 'Cover',
            			'contain' => 'Contain',
       				)
    			)
			);

		/* Site cover background image attachment. */
		$wp_customize->add_setting( 'gp_theprint_site_cover_background_image_attachment',
			array(
				'default' => 'inherit',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_site_cover_background_image_attachment',
	    		array(
        			'label' => 'Site cover background image attachment.',
        			'section' => 'gp_theprint_site_cover',
        			'settings' => 'gp_theprint_site_cover_background_image_attachment',
        			'type' => 'select',
        			'choices' => array(
        				'inherit' => 'Inherit',
            			'scroll' => 'Scroll',
            			'fixed' => 'Fixed',
       				)
    			)
			);

		/* Site cover background image position. */
		$wp_customize->add_setting( 'gp_theprint_site_cover_background_image_position',
			array(
				'default' => 'center top',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_site_cover_background_image_position',
	    		array(
        			'label' => 'Site cover background image position.',
        			'section' => 'gp_theprint_site_cover',
        			'settings' => 'gp_theprint_site_cover_background_image_position',
        			'type' => 'select',
        			'choices' => array(
        				'left-top' => 'Left Top',
            			'left-center' => 'Left Center',
            			'left-bottom' => 'Left Bottom',
            			'center-top' => 'Center Top',
            			'center-center' => 'Center Center',
            			'center-bottom' => 'Center Bottom',
            			'right-top' => 'Right Top',
            			'right-center' => 'Right Center',
            			'right-bottom' => 'Right Bottom',
       				)
    			)
			);

	/* Schema.Org
	--------------------------------------------- */
	$wp_customize->add_section('gp_theprint_schema_seo', 
		array(
			'title' => 'Schema for SEO',
			'priority' => 5,
			'panel' => 'gp_theprint_generals',
		) 
	);

		/* Schema for SEO. */
		$wp_customize->add_setting( 'gp_theprint_schema_seo',
			array(
				'default' => 'blogpost',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control( 'gp_theprint_schema_seo',
		    	array(
	        		'label' => 'Select the schema options.',
	        		'section' => 'gp_theprint_schema_seo',
	        		'settings' => 'gp_theprint_schema_seo',
	        		'type' => 'select',
	        		'choices' => array(
	        			'blogpost' => 'Blog Posting',
	        			'article' => 'News Article',
	       			)
	    		)
			);

	/* Social Media
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_social_media', 
		array(
			'title' => 'Social Media',
			'priority' => 6,
			'panel' => 'gp_theprint_generals',
		) 
	);

		/* Facebook URL. */
		$wp_customize->add_setting( 'gp_theprint_facebook_url', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_facebook_url',
	    		array(
	        		'label' => 'Facebook URL',
	        		'section' => 'gp_theprint_social_media',
	        		'settings' => 'gp_theprint_facebook_url',
	        		'type' => 'text',
	    		)
			);

		/* Twitter URL. */
		$wp_customize->add_setting( 'gp_theprint_twitter_url', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_twitter_url',
	    		array(
	        		'label' => 'Twitter URL',
	        		'section' => 'gp_theprint_social_media',
	        		'settings' => 'gp_theprint_twitter_url',
	        		'type' => 'text',
	    		)
			);

		/* Google Plus URL. */
		$wp_customize->add_setting( 'gp_theprint_google_plus_url', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_google_plus_url',
	    		array(
	        		'label' => 'Google+ URL',
	        		'section' => 'gp_theprint_social_media',
	        		'settings' => 'gp_theprint_google_plus_url',
	        		'type' => 'text',
	    		)
			);

		/* Linkedin URL. */
		$wp_customize->add_setting( 'gp_theprint_linkedin_url', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_linkedin_url',
	    		array(
	        		'label' => 'Linkedin URL',
	        		'section' => 'gp_theprint_social_media',
	        		'settings' => 'gp_theprint_linkedin_url',
	        		'type' => 'text',
	    		)
			);

		/* Pinterest URL. */
		$wp_customize->add_setting( 'gp_theprint_pinterest_url', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_pinterest_url',
	    		array(
	        		'label' => 'Pinterest URL',
	        		'section' => 'gp_theprint_social_media',
	        		'settings' => 'gp_theprint_pinterest_url',
	        		'type' => 'text',
	    		)
			);

		/* Instagram URL. */
		$wp_customize->add_setting( 'gp_theprint_instagram_url', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_instagram_url',
	    		array(
	        		'label' => 'Instagram URL',
	        		'section' => 'gp_theprint_social_media',
	        		'settings' => 'gp_theprint_instagram_url',
	        		'type' => 'text',
	    		)
			);

		/* Youtube URL. */
		$wp_customize->add_setting( 'gp_theprint_youtube_url', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_youtube_url',
	    		array(
	        		'label' => 'Youtube URL',
	        		'section' => 'gp_theprint_social_media',
	        		'settings' => 'gp_theprint_youtube_url',
	        		'type' => 'text',
	    		)
			); 

		/* RSS feed URL. */
		$wp_customize->add_setting( 'gp_theprint_rss_url', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_rss_url',
	    		array(
	        		'label' => 'RSS URL',
	        		'section' => 'gp_theprint_social_media',
	        		'settings' => 'gp_theprint_rss_url',
	        		'type' => 'text',
	    		)
			);


/*-----------------------------------------------------------------------------------*/
/*	Typography
/*-----------------------------------------------------------------------------------*/
	
$wp_customize->add_panel( 'gp_theprint_typography_options', 
	array(
		'title' => 'Typography',
		'description' => '',
		'priority' => 2,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
	) 
);

	/* Google Fonts
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_google_fonts', 
		array(
			'title' => 'Google Fonts Script',
			'priority' => 1,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Enable Google fonts. */
		$wp_customize->add_setting( 'gp_theprint_google_fonts_enable',
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_google_fonts_enable',
	    		array(
	        		'label' => 'Use Google fonts.',
	        		'section' => 'gp_theprint_google_fonts',
	        		'settings' => 'gp_theprint_google_fonts_enable',
	        		'type' => 'checkbox',
	    		)
			);

		/* Google fonts script code. */
		$wp_customize->add_setting( 'gp_theprint_google_fonts_script_code',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_google_fonts_script_code',
	    		array(
	        		'label' => 'Google fonts script code.',
	        		'section' => 'gp_theprint_google_fonts',
	        		'settings' => 'gp_theprint_google_fonts_script_code',
	        		'type' => 'textarea',
	    		)
			);

	/* Typekit
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_typekit_fonts', 
		array(
			'title' => 'Typekit Fonts Script',
			'priority' => 1,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Enable Typekit fonts. */
		$wp_customize->add_setting( 'gp_theprint_typekit_fonts_enable',
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_typekit_fonts_enable',
	    		array(
	        		'label' => 'Use Typekit fonts.',
	        		'section' => 'gp_theprint_typekit_fonts',
	        		'settings' => 'gp_theprint_typekit_fonts_enable',
	        		'type' => 'checkbox'
	    		)
			);

		/* Typekit fonts script code. */
		$wp_customize->add_setting( 'gp_theprint_typekit_fonts_script_code',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_typekit_fonts_script_code',
	    		array(
	        		'label' => 'Typekit fonts script code.',
	        		'section' => 'gp_theprint_typekit_fonts',
	        		'settings' => 'gp_theprint_typekit_fonts_script_code',
	        		'type' => 'textarea'
	    		)
			);

	/* Logo
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_logo_font', 
		array(
			'title' => 'Logo',
			'priority' => 3,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Logo font family. */
		$wp_customize->add_setting( 'gp_theprint_logo_font_family',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_logo_font_family',
	    		array(
	        		'label' => 'Logo font family code.',
	        		'description' => 'Ex: font-family: "Open Sans", sans-serif;.',
	        		'section' => 'gp_theprint_logo_font',
	        		'settings' => 'gp_theprint_logo_font_family',
	        		'type' => 'text',
	    		)
			);

		/* Logo font weight. */
		$wp_customize->add_setting( 'gp_theprint_logo_font_weight',
			array(
				'default' => '700',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_logo_font_weight',
	    		array(
	        		'label' => 'Logo font weight.',
	        		'section' => 'gp_theprint_logo_font',
	        		'settings' => 'gp_theprint_logo_font_weight',
	        		'type' => 'select',
	        		'choices' => array(
            			'100' => 'Thin 100',
            			'300' => 'Book 300',
            			'400' => 'Normal 400',
            			'600' => 'Semi-Bold 600',
            			'700' => 'Bold 700',
            			'800' => 'Extra-Bold 800',
            			'900' => 'Ultra-Bold 900',
       				)
	    		)
			);

		/* Logo font text transform. */
		$wp_customize->add_setting( 'gp_theprint_logo_font_text_tranform',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_logo_font_text_tranform',
	    		array(
	        		'label' => 'Logo font text transform.',
	        		'section' => 'gp_theprint_logo_font',
	        		'settings' => 'gp_theprint_logo_font_text_tranform',
	        		'type' => 'select',
	        		'choices' => array(
	        			'default' => 'Default',
            			'none' => 'Normal',
            			'uppercase' => 'Uppercase',
       				)
	    		)
			);

		/* Logo font letter spacing. */
		$wp_customize->add_setting( 'gp_theprint_logo_font_letter_spacing',
			array(
				'default' => '0',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_logo_font_letter_spacing',
	    		array(
	        		'label' => 'Logo font letter spacing.',
	        		'description' => 'From -5px to 5px. Default is 0px.',
	        		'section' => 'gp_theprint_logo_font',
	        		'settings' => 'gp_theprint_logo_font_letter_spacing',
	        		'type' => 'range',
	        		'input_attrs' => array(
            			'min'   => -5,
        				'max'   => 5,
        				'step'  => 0.5,
       				)
	    		)
			);

	/* Primary navigation.
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_primary_navigation_font', 
		array(
			'title' => 'Primary Navigation',
			'priority' => 4,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Primary navigation family. */
		$wp_customize->add_setting( 'gp_theprint_primary_navigation_font_family',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_primary_navigation_font_family',
	    		array(
	        		'label' => 'Primary navigation font family code.',
	        		'description' => 'Ex: font-family: "Open Sans", sans-serif;.',
	        		'section' => 'gp_theprint_primary_navigation_font',
	        		'settings' => 'gp_theprint_primary_navigation_font_family',
	        		'type' => 'text',
	    		)
			);

		/* Primary navigation font weight. */
		$wp_customize->add_setting( 'gp_theprint_primary_navigation_font_weight',
			array(
				'default' => '700',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_primary_navigation_font_weight',
	    		array(
	        		'label' => 'Primary navigation font weight.',
	        		'section' => 'gp_theprint_primary_navigation_font',
	        		'settings' => 'gp_theprint_primary_navigation_font_weight',
	        		'type' => 'select',
	        		'choices' => array(
            			'100' => 'Thin 100',
            			'300' => 'Book 300',
            			'400' => 'Normal 400',
            			'600' => 'Semi-Bold 600',
            			'700' => 'Bold 700',
            			'800' => 'Extra-Bold 800',
            			'900' => 'Ultra-Bold 900',
       				)
	    		)
			);

		/* Primary navigation font text transform. */
		$wp_customize->add_setting( 'gp_theprint_primary_navigation_font_text_tranform',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_primary_navigation_font_text_tranform',
	    		array(
	        		'label' => 'Primary navigation font text transform.',
	        		'section' => 'gp_theprint_primary_navigation_font',
	        		'settings' => 'gp_theprint_primary_navigation_font_text_tranform',
	        		'type' => 'select',
	        		'choices' => array(
	        			'default' => 'Default',
            			'none' => 'Normal',
            			'uppercase' => 'Uppercase',
       				)
	    		)
			);

		/* Primary navigation font letter spacing. */
		$wp_customize->add_setting( 'gp_theprint_primary_navigation_font_letter_spacing',
			array(
				'default' => '0',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_primary_navigation_font_letter_spacing',
	    		array(
	        		'label' => 'Primary navigation font letter spacing.',
	        		'description' => 'From -5px to 5px. Default is 0px.',
	        		'section' => 'gp_theprint_primary_navigation_font',
	        		'settings' => 'gp_theprint_primary_navigation_font_letter_spacing',
	        		'type' => 'range',
	        		'input_attrs' => array(
            			'min'   => -5,
        				'max'   => 5,
        				'step'  => 0.5,
       				)
	    		)
			);

	/* Secondary navigation
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_secondary_navigation_font', 
		array(
			'title' => 'Secondary Navigation',
			'priority' => 5,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Secondary navigation font family. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_font_family',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_secondary_navigation_font_family',
	    		array(
	        		'label' => 'Secondary navigation font family code.',
	        		'description' => 'Ex: font-family: "Open Sans", sans-serif;.',
	        		'section' => 'gp_theprint_secondary_navigation_font',
	        		'settings' => 'gp_theprint_secondary_navigation_font_family',
	        		'type' => 'text',
	    		)
			);

		/* Secondary navigation font weight. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_font_weight',
			array(
				'default' => '700',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_secondary_navigation_font_weight',
	    		array(
	        		'label' => 'Secondary navigation font weight.',
	        		'section' => 'gp_theprint_secondary_navigation_font',
	        		'settings' => 'gp_theprint_secondary_navigation_font_weight',
	        		'type' => 'select',
	        		'choices' => array(
            			'100' => 'Thin 100',
            			'300' => 'Book 300',
            			'400' => 'Normal 400',
            			'600' => 'Semi-Bold 600',
            			'700' => 'Bold 700',
            			'800' => 'Extra-Bold 800',
            			'900' => 'Ultra-Bold 900',
       				)
	    		)
			);

		/* Secondary navigation font text transform. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_font_text_transform',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_secondary_navigation_font_text_transform',
	    		array(
	        		'label' => 'Secondary navigation font text transform.',
	        		'section' => 'gp_theprint_secondary_navigation_font',
	        		'settings' => 'gp_theprint_secondary_navigation_font_text_transform',
	        		'type' => 'select',
	        		'choices' => array(
	        			'default' => 'Default',
            			'none' => 'Normal',
            			'uppercase' => 'Uppercase',
       				)
	    		)
			);

		/* Secondary navigation title font letter spacing. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_font_letter_spacing',
			array(
				'default' => '0',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_secondary_navigation_font_letter_spacing',
	    		array(
	        		'label' => 'Secondary navigation font letter spacing.',
	        		'description' => 'From -5px to 5px. Default is 0px.',
	        		'section' => 'gp_theprint_secondary_navigation_font',
	        		'settings' => 'gp_theprint_secondary_navigation_font_letter_spacing',
	        		'type' => 'range',
	        		'input_attrs' => array(
            			'min'   => -5,
        				'max'   => 5,
        				'step'  => 0.5,
       				)
	    		)
			);

	/* Footer navigation
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_footer_navigation_font', 
		array(
			'title' => 'Footer Navigation',
			'priority' => 6,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Footer navigation font family. */
		$wp_customize->add_setting( 'gp_theprint_footer_navigation_font_family',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_footer_navigation_font_family',
	    		array(
	        		'label' => 'Footer navigation font family code.',
	        		'description' => 'Ex: font-family: "Open Sans", sans-serif;.',
	        		'section' => 'gp_theprint_footer_navigation_font',
	        		'settings' => 'gp_theprint_footer_navigation_font_family',
	        		'type' => 'text',
	    		)
			);

		/* Footer navigation font weight. */
		$wp_customize->add_setting( 'gp_theprint_footer_navigation_font_weight',
			array(
				'default' => '700',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_footer_navigation_font_weight',
	    		array(
	        		'label' => 'Footer navigation font weight.',
	        		'section' => 'gp_theprint_footer_navigation_font',
	        		'settings' => 'gp_theprint_footer_navigation_font_weight',
	        		'type' => 'select',
	        		'choices' => array(
            			'100' => 'Thin 100',
            			'300' => 'Book 300',
            			'400' => 'Normal 400',
            			'600' => 'Semi-Bold 600',
            			'700' => 'Bold 700',
            			'800' => 'Extra-Bold 800',
            			'900' => 'Ultra-Bold 900',
       				)
	    		)
			);

		/* Footer navigation font text transform. */
		$wp_customize->add_setting( 'gp_theprint_footer_navigation_font_text_transform',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_footer_navigation_font_text_transform',
	    		array(
	        		'label' => 'Footer navigation font text transform.',
	        		'section' => 'gp_theprint_footer_navigation_font',
	        		'settings' => 'gp_theprint_footer_navigation_font_text_transform',
	        		'type' => 'select',
	        		'choices' => array(
	        			'default' => 'Default',
            			'none' => 'Normal',
            			'uppercase' => 'Uppercase',
       				)
	    		)
			);

		/* Footer navigation title font letter spacing. */
		$wp_customize->add_setting( 'gp_theprint_footer_navigation_font_letter_spacing',
			array(
				'default' => '0',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_footer_navigation_font_letter_spacing',
	    		array(
	        		'label' => 'Footer navigation font letter spacing.',
	        		'description' => 'From -5px to 5px. Default is 0px.',
	        		'section' => 'gp_theprint_footer_navigation_font',
	        		'settings' => 'gp_theprint_footer_navigation_font_letter_spacing',
	        		'type' => 'range',
	        		'input_attrs' => array(
            			'min'   => -5,
        				'max'   => 5,
        				'step'  => 0.5,
       				)
	    		)
			);

	/* Headlines
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_headlines_font', 
		array(
			'title' => 'Headlines',
			'priority' => 8,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Headlines font family. */
		$wp_customize->add_setting( 'gp_theprint_headlines_font_family',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_headlines_font_family',
	    		array(
	        		'label' => 'Headlines font family code.',
	        		'description' => 'Ex: font-family: "Open Sans", sans-serif;.',
	        		'section' => 'gp_theprint_headlines_font',
	        		'settings' => 'gp_theprint_headlines_font_family',
	        		'type' => 'text',
	    		)
			);

		/* Headlines font weight */
		$wp_customize->add_setting( 'gp_theprint_headlines_font_weight',
			array(
				'default' => '700',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_headlines_font_weight',
	    		array(
	        		'label' => 'Headlines font weight.',
	        		'section' => 'gp_theprint_headlines_font',
	        		'settings' => 'gp_theprint_headlines_font_weight',
	        		'type' => 'select',
	        		'choices' => array(
            			'100' => 'Thin 100',
            			'300' => 'Book 300',
            			'400' => 'Normal 400',
            			'600' => 'Semi-Bold 600',
            			'700' => 'Bold 700',
            			'800' => 'Extra-Bold 800',
            			'900' => 'Ultra-Bold 900',
       				)
	    		)
			);

		/* Headlines font text transform. */
		$wp_customize->add_setting( 'gp_theprint_headlines_font_text_tranform',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_headlines_font_text_tranform',
	    		array(
	        		'label' => 'Headlines font text transform.',
	        		'section' => 'gp_theprint_headlines_font',
	        		'settings' => 'gp_theprint_headlines_font_text_tranform',
	        		'type' => 'select',
	        		'choices' => array(
            			'default' => 'Default',
            			'none' => 'Normal',
            			'uppercase' => 'Uppercase',
       				)
	    		)
			);

		/* Headlines font line height. */
		$wp_customize->add_setting( 'gp_theprint_headlines_font_line_height',
			array(
				'default' => '1.3',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_headlines_font_line_height',
	    		array(
	        		'label' => 'Headlines font line height.',
	        		'description' => 'From 1 to 2. Default is 1.3.',
	        		'section' => 'gp_theprint_headlines_font',
	        		'settings' => 'gp_theprint_headlines_font_line_height',
	        		'type' => 'range',
	        		'input_attrs' => array(
            			'min'   => 1,
        				'max'   => 2,
        				'step'  => 0.1,
       				)
	    		)
			);

		/* Headlines font letter spacing. */
		$wp_customize->add_setting( 'gp_theprint_headlines_font_letter_spacing',
			array(
				'default' => '0',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_headlines_font_letter_spacing',
	    		array(
	        		'label' => 'Headlines font letter spacing.',
	        		'description' => 'From -5px to 5px. Default is 0.',
	        		'section' => 'gp_theprint_headlines_font',
	        		'settings' => 'gp_theprint_headlines_font_letter_spacing',
	        		'type' => 'range',
	        		'input_attrs' => array(
            			'min'   => -5,
        				'max'   => 5,
        				'step'  => 0.5,
       				)
	    		)
			);

	/* Widget title.
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_widget_title_font', 
		array(
			'title' => 'Widget Title',
			'priority' => 9,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Widget title font family. */
		$wp_customize->add_setting( 'gp_theprint_widget_title_font_family',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_widget_title_font_family',
	    		array(
	        		'label' => 'Widget title font family code.',
	        		'description' => 'Ex: font-family: "Open Sans", sans-serif;.',
	        		'section' => 'gp_theprint_widget_title_font',
	        		'settings' => 'gp_theprint_widget_title_font_family',
	        		'type' => 'text',
	    		)
			);

		/* Widget title font weight */
		$wp_customize->add_setting( 'gp_theprint_widget_title_font_weight',
			array(
				'default' => '700',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_widget_title_font_weight',
	    		array(
	        		'label' => 'Widget title font weight.',
	        		'section' => 'gp_theprint_widget_title_font',
	        		'settings' => 'gp_theprint_widget_title_font_weight',
	        		'type' => 'select',
	        		'choices' => array(
            			'100' => 'Thin 100',
            			'300' => 'Book 300',
            			'400' => 'Normal 400',
            			'600' => 'Semi-Bold 600',
            			'700' => 'Bold 700',
            			'800' => 'Extra-Bold 800',
            			'900' => 'Ultra-Bold 900',
       				)
	    		)
			);

		/* Widget title font text transform. */
		$wp_customize->add_setting( 'gp_theprint_widget_title_font_text_tranform',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_widget_title_font_text_tranform',
	    		array(
	        		'label' => 'Widget title font text transform.',
	        		'section' => 'gp_theprint_widget_title_font',
	        		'settings' => 'gp_theprint_widget_title_font_text_tranform',
	        		'type' => 'select',
	        		'choices' => array(
            			'default' => 'Default',
            			'none' => 'Normal',
            			'uppercase' => 'Uppercase',
       				)
	    		)
			);

		/* Widget title font letter spacing. */
		$wp_customize->add_setting( 'gp_theprint_widget_title_font_letter_spacing',
			array(
				'default' => '0',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_widget_title_font_letter_spacing',
	    		array(
	        		'label' => 'Widget title font letter spacing.',
	        		'description' => 'From -5px to 5px. Default is 0px.',
	        		'section' => 'gp_theprint_widget_title_font',
	        		'settings' => 'gp_theprint_widget_title_font_letter_spacing',
	        		'type' => 'range',
	        		'input_attrs' => array(
            			'min'   => -5,
        				'max'   => 5,
        				'step'  => 0.5,
       				)
	    		)
			);


	/* Featured Posts
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_featured_posts_font', 
		array(
			'title' => 'Featured Posts',
			'priority' => 11,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Featured posts font weight */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_font_weight',
			array(
				'default' => '700',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_featured_posts_font_weight',
	    		array(
	        		'label' => 'Featured posts font weight.',
	        		'section' => 'gp_theprint_featured_posts_font',
	        		'settings' => 'gp_theprint_featured_posts_font_weight',
	        		'type' => 'select',
	        		'choices' => array(
            			'100' => 'Thin 100',
            			'300' => 'Book 300',
            			'400' => 'Normal 400',
            			'600' => 'Semi-Bold 600',
            			'700' => 'Bold 700',
            			'800' => 'Extra-Bold 800',
            			'900' => 'Ultra-Bold 900',
       				)
	    		)
			);

		/* Featured posts text transform. */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_text_transform',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_featured_posts_text_transform',
	    		array(
	        		'label' => 'Featured posts font text transform.',
	        		'section' => 'gp_theprint_featured_posts_font',
	        		'settings' => 'gp_theprint_featured_posts_text_transform',
	        		'type' => 'select',
	        		'choices' => array(
            			'default' => 'Default',
            			'none' => 'Normal',
            			'uppercase' => 'Uppercase',
       				)
	    		)
			);

		/* Featured posts text align. */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_text_align',
			array(
				'default' => 'left',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_featured_posts_text_align',
	    		array(
	        		'label' => 'Featured posts font text align.',
	        		'section' => 'gp_theprint_featured_posts_font',
	        		'settings' => 'gp_theprint_featured_posts_text_align',
	        		'type' => 'select',
	        		'choices' => array(
            			'left' => 'Left',
            			'center' => 'Center',
       				)
	    		)
			);

		/* Featured posts font letter spacing. */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_font_letter_spacing',
			array(
				'default' => '0',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_featured_posts_font_letter_spacing',
	    		array(
	        		'label' => 'Featured posts font letter spacing.',
	        		'description' => 'From -5px to 5px. Default is 0.',
	        		'section' => 'gp_theprint_featured_posts_font',
	        		'settings' => 'gp_theprint_featured_posts_font_letter_spacing',
	        		'type' => 'range',
	        		'input_attrs' => array(
            			'min'   => -5,
        				'max'   => 5,
        				'step'  => 0.5,
       				)
	    		)
			);


	/* Staff Posts
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_staff_posts_font', 
		array(
			'title' => 'Staff Posts',
			'priority' => 12,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Staff posts font weight */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_font_weight',
			array(
				'default' => '700',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_staff_posts_font_weight',
	    		array(
	        		'label' => 'Staff posts font weight.',
	        		'section' => 'gp_theprint_staff_posts_font',
	        		'settings' => 'gp_theprint_staff_posts_font_weight',
	        		'type' => 'select',
	        		'choices' => array(
            			'100' => 'Thin 100',
            			'300' => 'Book 300',
            			'400' => 'Normal 400',
            			'600' => 'Semi-Bold 600',
            			'700' => 'Bold 700',
            			'800' => 'Extra-Bold 800',
            			'900' => 'Ultra-Bold 900',
       				)
	    		)
			);

		/* Staff posts text transform. */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_text_transform',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_staff_posts_text_transform',
	    		array(
	        		'label' => 'Staff posts font text transform.',
	        		'section' => 'gp_theprint_staff_posts_font',
	        		'settings' => 'gp_theprint_staff_posts_text_transform',
	        		'type' => 'select',
	        		'choices' => array(
            			'default' => 'Default',
            			'none' => 'Normal',
            			'uppercase' => 'Uppercase',
       				)
	    		)
			);

		/* Staff posts text align. */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_text_align',
			array(
				'default' => 'left',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_staff_posts_text_align',
	    		array(
	        		'label' => 'Staff posts font text align.',
	        		'section' => 'gp_theprint_staff_posts_font',
	        		'settings' => 'gp_theprint_staff_posts_text_align',
	        		'type' => 'select',
	        		'choices' => array(
            			'left' => 'Left',
            			'center' => 'Center',
       				)
	    		)
			);

		/* Staff posts font letter spacing. */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_font_letter_spacing',
			array(
				'default' => '0',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_staff_posts_font_letter_spacing',
	    		array(
	        		'label' => 'Staff posts font letter spacing.',
	        		'description' => 'From -5px to 5px. Default is 0.',
	        		'section' => 'gp_theprint_staff_posts_font',
	        		'settings' => 'gp_theprint_staff_posts_font_letter_spacing',
	        		'type' => 'range',
	        		'input_attrs' => array(
            			'min'   => -5,
        				'max'   => 5,
        				'step'  => 0.5,
       				)
	    		)
			);


	/* Entry Meta Category
	--------------------------------------------- */
	$wp_customize->add_section('gp_theprint_post_entry_meta_category_font', 
		array(
			'title' => 'Entry Meta Category',
			'priority' => 13,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Entry meta category font family. */
		$wp_customize->add_setting( 'gp_theprint_post_entry_meta_category_font_family',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_post_entry_meta_category_font_family',
	    		array(
	        		'label' => 'Entry meta category font family code.',
	        		'description' => 'Ex: font-family: "Open Sans", sans-serif;.',
	        		'section' => 'gp_theprint_post_entry_meta_category_font',
	        		'settings' => 'gp_theprint_post_entry_meta_category_font_family',
	        		'type' => 'text',
	    		)
			);

		/* Entry meta category font weight. */
		$wp_customize->add_setting( 'gp_theprint_post_entry_meta_category_font_weight',
			array(
				'default' => '700',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_post_entry_meta_category_font_weight',
	    		array(
	        		'label' => 'Entry meta category font weight.',
	        		'section' => 'gp_theprint_post_entry_meta_category_font',
	        		'settings' => 'gp_theprint_post_entry_meta_category_font_weight',
	        		'type' => 'select',
	        		'choices' => array(
            			'100' => 'Thin 100',
            			'300' => 'Book 300',
            			'400' => 'Normal 400',
            			'600' => 'Semi-Bold 600',
            			'700' => 'Bold 700',
            			'800' => 'Extra-Bold 800',
            			'900' => 'Ultra-Bold 900',
       				)
	    		)
			);

		/* Entry meta category font text transform. */
		$wp_customize->add_setting( 'gp_theprint_post_entry_meta_category_font_text_transform',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_post_entry_meta_category_font_text_transform',
	    		array(
	        		'label' => 'Entry meta category font text transform.',
	        		'section' => 'gp_theprint_post_entry_meta_category_font',
	        		'settings' => 'gp_theprint_post_entry_meta_category_font_text_transform',
	        		'type' => 'select',
	        		'choices' => array(
            			'default' => 'Default',
            			'none' => 'Normal',
            			'uppercase' => 'Uppercase',
       				)
	    		)
			);



	/* Entry Meta
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_entry_meta_font', 
		array(
			'title' => 'Entry Meta',
			'priority' => 13,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Entry meta font family. */
		$wp_customize->add_setting( 'gp_theprint_entry_meta_font_family',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_entry_meta_font_family',
	    		array(
	        		'label' => 'Entry meta font family code.',
	        		'description' => 'Ex: font-family: "Open Sans", sans-serif;.',
	        		'section' => 'gp_theprint_entry_meta_font',
	        		'settings' => 'gp_theprint_entry_meta_font_family',
	        		'type' => 'text',
	    		)
			);

		/* Entry meta font weight. */
		$wp_customize->add_setting( 'gp_theprint_entry_meta_font_weight',
			array(
				'default' => '400',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_entry_meta_font_weight',
	    		array(
	        		'label' => 'Entry meta font weight.',
	        		'section' => 'gp_theprint_entry_meta_font',
	        		'settings' => 'gp_theprint_entry_meta_font_weight',
	        		'type' => 'select',
	        		'choices' => array(
            			'100' => 'Thin 100',
            			'300' => 'Book 300',
            			'400' => 'Normal 400',
            			'600' => 'Semi-Bold 600',
            			'700' => 'Bold 700',
            			'800' => 'Extra-Bold 800',
            			'900' => 'Ultra-Bold 900',
       				)
	    		)
			);

		/* Entry meta font text transform. */
		$wp_customize->add_setting( 'gp_theprint_entry_meta_font_text_tranform',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_entry_meta_font_text_tranform',
	    		array(
	        		'label' => 'Entry meta font text transform.',
	        		'section' => 'gp_theprint_entry_meta_font',
	        		'settings' => 'gp_theprint_entry_meta_font_text_tranform',
	        		'type' => 'select',
	        		'choices' => array(
            			'default' => 'Default',
            			'none' => 'Normal',
            			'uppercase' => 'Uppercase',
       				)
	    		)
			);


	/* Single Entry Title
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_single_entry_title', 
		array(
			'title' => 'Singe Entry Title',
			'priority' => 14,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Single entry title font family. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_title_font_family',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_single_entry_title_font_family',
	    		array(
	        		'label' => 'Single entry title font family code.',
	        		'description' => 'Ex: font-family: "Open Sans", sans-serif;.',
	        		'section' => 'gp_theprint_single_entry_title',
	        		'settings' => 'gp_theprint_single_entry_title_font_family',
	        		'type' => 'text',
	    		)
			);

		/* Single entry title font weight. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_title_font_weight',
			array(
				'default' => '700',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_single_entry_title_font_weight',
	    		array(
	        		'label' => 'Single entry title font weight.',
	        		'section' => 'gp_theprint_single_entry_title',
	        		'settings' => 'gp_theprint_single_entry_title_font_weight',
	        		'type' => 'select',
	        		'choices' => array(
            			'100' => 'Thin 100',
            			'300' => 'Book 300',
            			'400' => 'Normal 400',
            			'600' => 'Semi-Bold 600',
            			'700' => 'Bold 700',
            			'800' => 'Extra-Bold 800',
            			'900' => 'Ultra-Bold 900',
       				)
	    		)
			);

		/* Single entry title font text transform. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_title_font_text_tranform',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_single_entry_title_font_text_tranform',
	    		array(
	        		'label' => 'Entry meta font text transform.',
	        		'section' => 'gp_theprint_single_entry_title',
	        		'settings' => 'gp_theprint_single_entry_title_font_text_tranform',
	        		'type' => 'select',
	        		'choices' => array(
            			'default' => 'Default',
            			'none' => 'Normal',
            			'uppercase' => 'Uppercase',
       				)
	    		)
			);

		/* Single entry title font letter spacing. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_title_font_letter_spacing',
			array(
				'default' => '0',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_single_entry_title_font_letter_spacing',
	    		array(
	        		'label' => 'Single entry font letter spacing.',
	        		'description' => 'From -5px to 5px. Default is 0.',
	        		'section' => 'gp_theprint_single_entry_title',
	        		'settings' => 'gp_theprint_single_entry_title_font_letter_spacing',
	        		'type' => 'range',
	        		'input_attrs' => array(
            			'min'   => -5,
        				'max'   => 5,
        				'step'  => 0.5,
       				)
	    		)
			);


	/* Body.
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_body_font', 
		array(
			'title' => 'Body',
			'priority' => 15,
			'panel' => 'gp_theprint_typography_options',
		) 
	);

		/* Body font family. */
		$wp_customize->add_setting( 'gp_theprint_body_font_family',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_body_font_family',
	    		array(
	        		'label' => 'Body font family code.',
	        		'description' => 'Ex: font-family: "Open Sans", sans-serif;.',
	        		'section' => 'gp_theprint_body_font',
	        		'settings' => 'gp_theprint_body_font_family',
	        		'type' => 'text',
	    		)
			);

		/* Body font size. */
		$wp_customize->add_setting( 'gp_theprint_body_font_size',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control( 'gp_theprint_body_font_size',
	    		array(
	        		'label' => 'Body font size. Default is 16.',
	        		'section' => 'gp_theprint_body_font',
	        		'settings' => 'gp_theprint_body_font_size',
	        		'type' => 'text',
	    		)
			);


/*-----------------------------------------------------------------------------------*/
/*	Design Options
/*-----------------------------------------------------------------------------------*/
	
$wp_customize->add_panel( 'gp_theprint_design_options', 
	array(
		'title' => 'Design Options',
		'description' => '',
		'priority' => 2,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
	) 
);

	/* Featured posts.
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_featured_posts', 
		array(
			'title' => 'Featured Posts',
			'priority' => 1,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		/* Show featured posts */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_featured_posts_enable',
	    		array(
	        		'label' => 'Show the featured posts on homepage.',
	        		'section' => 'gp_theprint_featured_posts',
	        		'settings' => 'gp_theprint_featured_posts_enable',
	        		'type' => 'checkbox'
	    		)
			);

		/* Featured posts style */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_style',
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control( 'gp_theprint_featured_posts_style',
		    	array(
	        		'label' => 'Select the featured posts layout style.',
	        		'section' => 'gp_theprint_featured_posts',
	        		'settings' => 'gp_theprint_featured_posts_style',
	        		'type' => 'select',
	        		'choices' => array(
	            		'featured-a' => 'Featured posts style A',
	            		'featured-b' => 'Featured posts style B',
	            		'featured-c' => 'Featured posts style C',
	            		'featured-d' => 'Featured posts style D',
	            		'featured-e' => 'Featured posts style E',
	            		'featured-f' => 'Featured posts style F',
	       			)
	    		)
			);

		/* Featured posts shadow style */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_shadow_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control( 'gp_theprint_featured_posts_shadow_style',
		    	array(
	        		'label' => 'Select the featured posts shadow style.',
	        		'section' => 'gp_theprint_featured_posts',
	        		'settings' => 'gp_theprint_featured_posts_shadow_style',
	        		'type' => 'select',
	        		'choices' => array(
	            		'style-a' => 'Style A',
	            		'style-b' => 'Style B',
	            		'style-c' => 'Style C',
	            		'style-d' => 'Style D',
	            		'style-e' => 'Style E',
	            		'style-f' => 'Style F',
	       			)
	    		)
			);

		/* Featured posts shadow color */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_shadow_color',
			array(
				'default' => '#000000',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_shadow_color',
	        		array(
	            		'label' => 'Shadow Color',
	            		'description' => 'Pick the shadow color for featured posts.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_shadow_color'
	       			)
	    		)
			);

		/* Featured posts category hide */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_entry_meta_category_hide',
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control( 'gp_theprint_featured_posts_entry_meta_category_hide',
	    		array(
	        		'label' => 'Hide the featured posts entry meta category.',
	        		'section' => 'gp_theprint_featured_posts',
	        		'settings' => 'gp_theprint_featured_posts_entry_meta_category_hide',
	        		'type' => 'checkbox'
	    		)
			);	

		/* Featured posts category style */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_entry_meta_category_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control( 'gp_theprint_featured_posts_entry_meta_category_style',
		    	array(
	        		'label' => 'Select the featured posts category style.',
	        		'section' => 'gp_theprint_featured_posts',
	        		'settings' => 'gp_theprint_featured_posts_entry_meta_category_style',
	        		'type' => 'select',
	        		'choices' => array(
	            		'style-a' => 'Style A',
	            		'style-b' => 'Style B',
	            		'style-c' => 'Style C',
	            		'style-d' => 'Style D',
	            		'style-e' => 'Style E',
	            		'style-f' => 'Style F',
	       			)
	    		)
			);

		/* Featured posts category color */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_entry_meta_category_primary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_entry_meta_category_primary_color',
	        		array(
	            		'label' => 'Category Primary Color',
	            		'description' => 'Pick the entry meta category primary color.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_entry_meta_category_primary_color'
	       			)
	    		)
			);

		/* Featured posts category secondary color */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_entry_meta_category_secondary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_entry_meta_category_secondary_color',
	        		array(
	            		'label' => 'Category Secondary Color',
	            		'description' => 'Pick the entry meta category secondary color.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_entry_meta_category_secondary_color'
	       			)
	    		)
			);

		/* Featured posts entry meta category link color */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_entry_meta_category_link_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_entry_meta_category_link_color',
	        		array(
	            		'label' => 'Category Link Color',
	            		'description' => 'Pick the entry meta category link color.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_entry_meta_category_link_color'
	       			)
	    		)
			);

		/* Color #1 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_shadow_d_color_1',
			array(
				'default' => '#292484',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_shadow_d_color_1',
	        		array(
	            		'label' => 'Shadow style D color #1',
	            		'description' => 'Pick the color #1 for the shadow style D.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_shadow_d_color_1'
	       			)
	    		)
			);

		/* Color #2 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_shadow_d_color_2',
			array(
				'default' => '#dc4225',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_shadow_d_color_2',
	        		array(
	            		'label' => 'Shadow style D color #2',
	            		'description' => 'Pick the color #2 for the shadow style D.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_shadow_d_color_2'
	       			)
	    		)
			);

		/* Color #3 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_shadow_d_color_3',
			array(
				'default' => '#002f4b',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_shadow_d_color_3',
	        		array(
	            		'label' => 'Shadow style D color #3',
	            		'description' => 'Pick the color #3 for the shadow style D.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_shadow_d_color_3'
	       			)
	    		)
			);

		/* Color #4 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_shadow_d_color_4',
			array(
				'default' => '#417711',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_shadow_d_color_4',
	        		array(
	            		'label' => 'Shadow style D color #4',
	            		'description' => 'Pick the color #4 for the shadow style D.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_shadow_d_color_4'
	       			)
	    		)
			);

		/* Color #5 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_shadow_d_color_5',
			array(
				'default' => '#d38312',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_shadow_d_color_5',
	        		array(
	            		'label' => 'Shadow style D color #5',
	            		'description' => 'Pick the color #5 for the shadow style D.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_shadow_d_color_5'
	       			)
	    		)
			);

		/* Color #6 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_shadow_d_color_6',
			array(
				'default' => '#a83279',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_shadow_d_color_6',
	        		array(
	            		'label' => 'Shadow style D color #6',
	            		'description' => 'Pick the color #6 for the shadow style D.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_shadow_d_color_6'
	       			)
	    		)
			);

		/* Color #7 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_shadow_d_color_7',
			array(
				'default' => '#e0be00',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_shadow_d_color_7',
	        		array(
	            		'label' => 'Shadow style D color #7',
	            		'description' => 'Pick the color #7 for the shadow style d.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_shadow_d_color_7'
	       			)
	    		)
			);

		/* Color #8 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_featured_posts_shadow_d_color_8',
			array(
				'default' => '#dc4225',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_featured_posts_shadow_d_color_8',
	        		array(
	            		'label' => 'Shadow style D color #8',
	            		'description' => 'Pick the color #8 for the shadow style D.',
	            		'section' => 'gp_theprint_featured_posts',
	            		'settings' => 'gp_theprint_featured_posts_shadow_d_color_8'
	       			)
	    		)
			);


	/* Staff Posts
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_staff_posts', 
		array(
			'title' => 'Staff Posts',
			'priority' => 2,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		/* Show staff posts */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_staff_posts_enable',
	    		array(
	        		'label' => 'Show the staff posts on homepage.',
	        		'section' => 'gp_theprint_staff_posts',
	        		'settings' => 'gp_theprint_staff_posts_enable',
	        		'type' => 'checkbox'
	    		)
			);

		/* Staff posts style */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control( 'gp_theprint_staff_posts_style',
		    	array(
	        		'label' => 'Select the staff posts style.',
	        		'section' => 'gp_theprint_staff_posts',
	        		'settings' => 'gp_theprint_staff_posts_style',
	        		'type' => 'select',
	        		'choices' => array(
	            		'style-a' => 'Style A',
	            		'style-b' => 'Style B',
	       			)
	    		)
			);

		/* Staff posts background color style */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_background_color_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control( 'gp_theprint_staff_posts_background_color_style',
		    	array(
	        		'label' => 'Background color style.',
	        		'section' => 'gp_theprint_staff_posts',
	        		'settings' => 'gp_theprint_staff_posts_background_color_style',
	        		'type' => 'select',
	        		'choices' => array(
	            		'style-a' => 'Style A',
	            		'style-b' => 'Style B',
	       			)
	    		)
			);

		/* Staff picks title background primary color */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_background_primary_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_background_primary_color',
	        		array(
	            		'label' => 'Background primary color.',
	            		'description' => 'Pick the staff posts title background primary color.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_background_primary_color'
	       			)
	    		)
			);

		/* Staff picks title background secondary color */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_background_secondary_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_background_secondary_color',
	        		array(
	            		'label' => 'Background secondary color.',
	            		'description' => 'Pick the staff posts title background secondary color.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_background_secondary_color'
	       			)
	    		)
			);

		/* Staff picks title collor */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_title_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_title_color',
	        		array(
	            		'label' => 'Title text color.',
	            		'description' => 'Pick the staff posts title text color.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_title_color'
	       			)
	    		)
			);

		/* Staff posts shadow style */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_shadow_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control( 'gp_theprint_staff_posts_shadow_style',
		    	array(
	        		'label' => 'Select the staff posts shadow style.',
	        		'section' => 'gp_theprint_staff_posts',
	        		'settings' => 'gp_theprint_staff_posts_shadow_style',
	        		'type' => 'select',
	        		'choices' => array(
	            		'style-a' => 'Style A',
	            		'style-b' => 'Style B',
	            		'style-c' => 'Style C',
	            		'style-d' => 'Style D',
	            		'style-e' => 'Style E',
	            		'style-f' => 'Style F',
	       			)
	    		)
			);

		/* Staff posts shadow color */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_shadow_color',
			array(
				'default' => '#000000',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_shadow_color',
	        		array(
	            		'label' => 'Shadow Color',
	            		'description' => 'Pick the shadow color for staff posts.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_shadow_color'
	       			)
	    		)
			);

		/* Staff posts category hide */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_entry_meta_category_hide',
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control( 'gp_theprint_staff_posts_entry_meta_category_hide',
	    		array(
	        		'label' => 'Hide the staff posts entry meta category.',
	        		'section' => 'gp_theprint_staff_posts',
	        		'settings' => 'gp_theprint_staff_posts_entry_meta_category_hide',
	        		'type' => 'checkbox'
	    		)
			);

		/* Staff posts category style */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_entry_meta_category_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control( 'gp_theprint_staff_posts_entry_meta_category_style',
		    	array(
	        		'label' => 'Select the staff posts category style.',
	        		'section' => 'gp_theprint_staff_posts',
	        		'settings' => 'gp_theprint_staff_posts_entry_meta_category_style',
	        		'type' => 'select',
	        		'choices' => array(
	            		'style-a' => 'Style A',
	            		'style-b' => 'Style B',
	            		'style-c' => 'Style C',
	            		'style-d' => 'Style D',
	            		'style-e' => 'Style E',
	            		'style-f' => 'Style F',
	       			)
	    		)
			);

		/* Staff posts category primary color */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_entry_meta_category_primary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_entry_meta_category_primary_color',
	        		array(
	            		'label' => 'Category Primary Color',
	            		'description' => 'Pick the staff posts entry meta category primary color.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_entry_meta_category_primary_color'
	       			)
	    		)
			);

		/* Staff posts category secondary color */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_entry_meta_category_secondary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_entry_meta_category_secondary_color',
	        		array(
	            		'label' => 'Category Secondary Color',
	            		'description' => 'Pick the staff posts entry meta category secondary color.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_entry_meta_category_secondary_color'
	       			)
	    		)
			);

		/* Staff posts entry meta category link color */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_entry_meta_category_link_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_entry_meta_category_link_color',
	        		array(
	            		'label' => 'Category Link Color',
	            		'description' => 'Pick the entry meta category link color.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_entry_meta_category_link_color'
	       			)
	    		)
			);

		/* Color #1 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_shadow_d_color_1',
			array(
				'default' => '#292484',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_shadow_d_color_1',
	        		array(
	            		'label' => 'Shadow style D color #1',
	            		'description' => 'Pick the color #1 for the shadow style D.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_shadow_d_color_1'
	       			)
	    		)
			);

		/* Color #2 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_shadow_d_color_2',
			array(
				'default' => '#dc4225',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_shadow_d_color_2',
	        		array(
	            		'label' => 'Shadow style D color #2',
	            		'description' => 'Pick the color #2 for the shadow style D.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_shadow_d_color_2'
	       			)
	    		)
			);

		/* Color #3 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_shadow_d_color_3',
			array(
				'default' => '#002f4b',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_shadow_d_color_3',
	        		array(
	            		'label' => 'Shadow style D color #3',
	            		'description' => 'Pick the color #3 for the shadow style D.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_shadow_d_color_3'
	       			)
	    		)
			);

		/* Color #4 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_shadow_d_color_4',
			array(
				'default' => '#417711',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_shadow_d_color_4',
	        		array(
	            		'label' => 'Shadow style D color #4',
	            		'description' => 'Pick the color #4 for the shadow style D.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_shadow_d_color_4'
	       			)
	    		)
			);

		/* Color #5 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_shadow_d_color_5',
			array(
				'default' => '#d38312',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_shadow_d_color_5',
	        		array(
	            		'label' => 'Shadow style D color #5',
	            		'description' => 'Pick the color #5 for the shadow style D.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_shadow_d_color_5'
	       			)
	    		)
			);

		/* Color #6 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_shadow_d_color_6',
			array(
				'default' => '#a83279',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_shadow_d_color_6',
	        		array(
	            		'label' => 'Shadow style D color #6',
	            		'description' => 'Pick the color #6 for the shadow style D.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_shadow_d_color_6'
	       			)
	    		)
			);

		/* Color #7 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_shadow_d_color_7',
			array(
				'default' => '#e0be00',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_shadow_d_color_7',
	        		array(
	            		'label' => 'Shadow style D color #7',
	            		'description' => 'Pick the color #7 for the shadow style D.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_shadow_d_color_7'
	       			)
	    		)
			);

		/* Color #8 for the shadow style D */
		$wp_customize->add_setting( 'gp_theprint_staff_posts_shadow_d_color_8',
			array(
				'default' => '#dc4225',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_staff_posts_shadow_d_color_8',
	        		array(
	            		'label' => 'Shadow style D color #8',
	            		'description' => 'Pick the color #8 for the shadow style D.',
	            		'section' => 'gp_theprint_staff_posts',
	            		'settings' => 'gp_theprint_staff_posts_shadow_d_color_8'
	       			)
	    		)
			);

			
	/* Primary Color
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_primary_color', 
		array(
			'title' => 'Primary Color',
			'priority' => 4,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		$wp_customize->add_setting( 'gp_theprint_primary_color',
			array(
				'default' => '#689fce',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_primary_color',
	        		array(
	            		'label' => 'Primary Color',
	            		'section' => 'gp_theprint_primary_color',
	            		'settings' => 'gp_theprint_primary_color'
	       			)
	    		)
			);

	/* Secondary Color
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_secondary_color', 
		array(
			'title' => 'Secondary Color',
			'priority' => 5,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		$wp_customize->add_setting( 'gp_theprint_secondary_color',
			array(
				'default' => '#e6a87a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_secondary_color',
	        		array(
	            		'label' => 'Secondary Color',
	            		'section' => 'gp_theprint_secondary_color',
	            		'settings' => 'gp_theprint_secondary_color'
	       			)
	    		)
			);

	/* Header Style
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_header_options', 
		array(
			'title' => 'Header Style',
			'priority' => 6,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		/* Header style. */
		$wp_customize->add_setting( 'gp_theprint_header_style',
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control( 'gp_theprint_header_style',
	    		array(
        			'label' => 'Select the header style.',
        			'section' => 'gp_theprint_header_options',
        			'settings' => 'gp_theprint_header_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
            			'style-f' => 'Style F',
            			'style-g' => 'Style G',
            			'style-h' => 'Style H',
            			'style-i' => 'Style I',
            			'style-j' => 'Style J',
            			'style-k' => 'Style K',
            			'style-l' => 'Style L',
            			'style-m' => 'Style M',
            			'style-n' => 'Style N',
            			'style-o' => 'Style O',
            			'style-p' => 'Style P',
            			'style-q' => 'Style Q',
            			'style-r' => 'Style R',
            			'style-s' => 'Style S',
            			'style-t' => 'Style T',
       				)
    			)
			);

		/* Header color style. */
		$wp_customize->add_setting( 'gp_theprint_header_color_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_header_color_style',
	    		array(
        			'label' => 'Select the header color style.',
        			'section' => 'gp_theprint_header_options',
        			'settings' => 'gp_theprint_header_color_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
            			'style-f' => 'Style F',
            			'style-g' => 'Style G',
            			'style-h' => 'Style H',
            			'style-i' => 'Style I',
            			'style-j' => 'Style J',
            			'style-k' => 'Style K',
            			'style-l' => 'Style L',
            			'style-m' => 'Style M',
            			'style-n' => 'Style N',
            			'style-o' => 'Style O',
            			'style-p' => 'Style P',
            			'style-q' => 'Style Q',
            			'style-r' => 'Style R',
            			'style-s' => 'Style S',
            			'style-t' => 'Style T',
       				)
    			)
			);

		/* Header background primary color. */
		$wp_customize->add_setting( 'gp_theprint_header_background_primary_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_header_background_primary_color',
	        		array(
	            		'label' => 'Pick the header background primary color.',
	            		'section' => 'gp_theprint_header_options',
	            		'settings' => 'gp_theprint_header_background_primary_color'
	       			)
	    		)
			);

		/* Header background secondary color. */
		$wp_customize->add_setting( 'gp_theprint_header_background_secondary_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_header_background_secondary_color',
	        		array(
	            		'label' => 'Pick the header background secondary color.',
	            		'section' => 'gp_theprint_header_options',
	            		'settings' => 'gp_theprint_header_background_secondary_color'
	       			)
	    		)
			);

		/* Header text color. */
		$wp_customize->add_setting( 'gp_theprint_header_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_header_color',
	        		array(
	            		'label' => 'Pick the header text color.',
	            		'section' => 'gp_theprint_header_options',
	            		'settings' => 'gp_theprint_header_color'
	       			)
	    		)
			);

		/* Header shadow. */
		$wp_customize->add_setting( 'gp_theprint_header_shadow',
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_header_shadow',
		    		array(
		        		'label' => 'Enable the header shadow.',
		        		'section' => 'gp_theprint_header_options',
		        		'settings' => 'gp_theprint_header_shadow',
		        		'type' => 'checkbox'
		    		)
				);

	/* Primary Navigation
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_primary_navigation', 
		array(
			'title' => 'Primary Navigation',
			'priority' => 7,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		/* Primary navigation hover style. */
		$wp_customize->add_setting( 'gp_theprint_primary_navigation_hover_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_primary_navigation_hover_style',
	    		array(
        			'label' => 'Select the primary navigation hover style.',
        			'section' => 'gp_theprint_primary_navigation',
        			'settings' => 'gp_theprint_primary_navigation_hover_style',
        			'type' => 'select',
        			'choices' => array(
            			'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
       				)
    			)
			);

		/* Primary navigation hover primary color. */
		$wp_customize->add_setting( 'gp_theprint_primary_navigation_hover_primary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_primary_navigation_hover_primary_color',
	        		array(
	            		'label' => 'Pick the primary navigation hover primary color',
	            		'section' => 'gp_theprint_primary_navigation',
	            		'settings' => 'gp_theprint_primary_navigation_hover_primary_color'
	       			)
	    		)
			);

		/* Primary navigation hover secondary color. */
		$wp_customize->add_setting( 'gp_theprint_primary_navigation_hover_secondary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_primary_navigation_hover_secondary_color',
	        		array(
	            		'label' => 'Pick the primary navigation hover secondary color',
	            		'section' => 'gp_theprint_primary_navigation',
	            		'settings' => 'gp_theprint_primary_navigation_hover_secondary_color'
	       			)
	    		)
			);

		/* Primary navigation dropmenu style. */
		$wp_customize->add_setting( 'gp_theprint_primary_navigation_dropmenu_style',
			array(
				'default' => 'white',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_primary_navigation_dropmenu_style',
	    		array(
        			'label' => 'Select the primary navigation dropmenu style.',
        			'section' => 'gp_theprint_primary_navigation',
        			'settings' => 'gp_theprint_primary_navigation_dropmenu_style',
        			'type' => 'select',
        			'choices' => array(
            			'white' => 'White',
            			'gray' => 'Gray',
            			'dark' => 'Dark'
       				)
    			)
			);

	/* Secondary Navigation
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_secondary_navigation', 
		array(
			'title' => 'Secondary Navigation',
			'priority' => 8,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		/* Secondary navigation style. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_secondary_navigation_style',
	    		array(
        			'label' => 'Select the secondary navigation style.',
        			'section' => 'gp_theprint_secondary_navigation',
        			'settings' => 'gp_theprint_secondary_navigation_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
            			'style-f' => 'Style F',
            			'style-g' => 'Style G',
            			'style-h' => 'Style H',
            			'style-i' => 'Style I',
            			'style-j' => 'Style J',
            			'style-k' => 'Style K',
            			'style-l' => 'Style L',
            			'style-m' => 'Style M',
            			'style-n' => 'Style N',
            			'style-o' => 'Style O',
            			'style-p' => 'Style P',
            			'style-q' => 'Style Q',
            			'style-r' => 'Style R',
            			'style-s' => 'Style S',
            			'style-t' => 'Style T',
       				)
    			)
			);

		/* Secondary navigation background primary color. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_background_primary_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_secondary_navigation_background_primary_color',
	        		array(
	            		'label' => 'Pick the secondary navigation background primary color.',
	            		'section' => 'gp_theprint_secondary_navigation',
	            		'settings' => 'gp_theprint_secondary_navigation_background_primary_color'
	       			)
	    		)
			);

		/* Secondary navigation background secondary color. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_background_secondary_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_secondary_navigation_background_secondary_color',
	        		array(
	            		'label' => 'Pick the secondary navigation background secondary color.',
	            		'section' => 'gp_theprint_secondary_navigation',
	            		'settings' => 'gp_theprint_secondary_navigation_background_secondary_color'
	       			)
	    		)
			);

		/* Secondary navigation text color. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_secondary_navigation_color',
	        		array(
	            		'label' => 'Pick the secondary navigation text color.',
	            		'section' => 'gp_theprint_secondary_navigation',
	            		'settings' => 'gp_theprint_secondary_navigation_color'
	       			)
	    		)
			);

		/* Secondary navigation hover style. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_hover_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_secondary_navigation_hover_style',
	    		array(
        			'label' => 'Select the secondary navigation hover style.',
        			'section' => 'gp_theprint_secondary_navigation',
        			'settings' => 'gp_theprint_secondary_navigation_hover_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
       				)
    			)
			);

		/* Secondary navigation hover primary color. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_hover_primary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_secondary_navigation_hover_primary_color',
	        		array(
	            		'label' => 'Pick the secondary navigation hover primary color',
	            		'section' => 'gp_theprint_secondary_navigation',
	            		'settings' => 'gp_theprint_secondary_navigation_hover_primary_color'
	       			)
	    		)
			);

		/* Secondary navigation hover secondary color. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_hover_secondary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_secondary_navigation_hover_secondary_color',
	        		array(
	            		'label' => 'Pick the secondary navigation hover secondary color',
	            		'section' => 'gp_theprint_secondary_navigation',
	            		'settings' => 'gp_theprint_secondary_navigation_hover_secondary_color'
	       			)
	    		)
			);

		/* Secondary navigation shadow. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_shadow',
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		); 

			$wp_customize->add_control( 'gp_theprint_secondary_navigation_shadow',
		    		array(
		        		'label' => 'Enable the secondary navigation shadow.',
		        		'section' => 'gp_theprint_secondary_navigation',
		        		'settings' => 'gp_theprint_secondary_navigation_shadow',
		        		'type' => 'checkbox'
		    		)
				);

		/* Secondary navigation dropmenu style. */
		$wp_customize->add_setting( 'gp_theprint_secondary_navigation_dropmenu_style',
			array(
				'default' => 'white',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_secondary_navigation_dropmenu_style',
	    		array(
        			'label' => 'Select the secondary navigation dropmenu style.',
        			'section' => 'gp_theprint_secondary_navigation',
        			'settings' => 'gp_theprint_secondary_navigation_dropmenu_style',
        			'type' => 'select',
        			'choices' => array(
            			'white' => 'White',
            			'gray' => 'Gray',
            			'dark' => 'Dark'
       				)
    			)
			);

	/* Footer Style
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_footer_options', 
		array(
			'title' => 'Footer Style',
			'priority' => 9,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		/* Footer style. */
		$wp_customize->add_setting( 'gp_theprint_footer_style',
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control( 'gp_theprint_footer_style',
	    		array(
        			'label' => 'Select the footer style.',
        			'section' => 'gp_theprint_footer_options',
        			'settings' => 'gp_theprint_footer_style',
        			'type' => 'select',
        			'choices' => array(
        				'footer-a' => 'Footer A',
            			'footer-b' => 'Footer B',
       				)
    			)
			);

		/* Footer color style. */
		$wp_customize->add_setting( 'gp_theprint_footer_color_style',
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);  

			$wp_customize->add_control( 'gp_theprint_footer_color_style',
	    		array(
        			'label' => 'Select the footer color style.',
        			'section' => 'gp_theprint_footer_options',
        			'settings' => 'gp_theprint_footer_color_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
       				)
    			)
			);

		/* Footer primary color. */
		$wp_customize->add_setting( 'gp_theprint_footer_primary_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_footer_primary_color',
	        		array(
	            		'label' => 'Pick the footer primary color.',
	            		'section' => 'gp_theprint_footer_options',
	            		'settings' => 'gp_theprint_footer_primary_color'
	       			)
	    		)
			);

		/* Footer secondary color. */
		$wp_customize->add_setting( 'gp_theprint_footer_secondary_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_footer_secondary_color',
	        		array(
	            		'label' => 'Pick the footer secondary color.',
	            		'section' => 'gp_theprint_footer_options',
	            		'settings' => 'gp_theprint_footer_secondary_color'
	       			)
	    		)
			);

		/* Footer text color. */
		$wp_customize->add_setting( 'gp_theprint_footer_text_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_footer_text_color',
	        		array(
	            		'label' => 'Pick the footer text color.',
	            		'section' => 'gp_theprint_footer_options',
	            		'settings' => 'gp_theprint_footer_text_color'
	       			)
	    		)
			);


	/* Sidebar Style
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_sidebar_style', 
		array(
			'title' => 'Sidebar Style',
			'priority' => 10,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		/* Enable sticky sidebar */
		$wp_customize->add_setting( 'gp_theprint_sticky_sidebar', 
				array(
					'default' => false,
					'type' => 'option',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'gp_theprint_sanitize_text',
				) 
			);

				$wp_customize->add_control( 'gp_theprint_sticky_sidebar',
		    		array(
		        		'label' => 'Enable the sticky sidebar.',
		        		'section' => 'gp_theprint_sidebar_style',
		        		'settings' => 'gp_theprint_sticky_sidebar',
		        		'type' => 'checkbox'
		    		)
				);

		/* Sidebar color style */
		$wp_customize->add_setting( 'gp_theprint_sidebar_color_style', 
				array(
					'default' => 'style-a',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'gp_theprint_sanitize_text',
				) 
			);

			$wp_customize->add_control( 'gp_theprint_sidebar_color_style',
	    		array(
        			'label' => 'Select the sidebar color style.',
        			'section' => 'gp_theprint_sidebar_style',
        			'settings' => 'gp_theprint_sidebar_color_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
            			'style-f' => 'Style F',
            			'style-g' => 'Style G',
       				)
    			)
			);

		/* Sidebar color */
		$wp_customize->add_setting( 'gp_theprint_sidebar_color', 
				array(
					'default' => '#ffffff',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'gp_theprint_sanitize_text',
				) 
			);

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_sidebar_color',
	        		array(
	            		'label' => 'Pick the sidebar color.',
	            		'section' => 'gp_theprint_sidebar_style',
	            		'settings' => 'gp_theprint_sidebar_color'
	       			)
	    		)
			);


	/* Body Background
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_body_background', 
		array(
			'title' => 'Body Background',
			'priority' => 11,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		/* Body background color. */
		$wp_customize->add_setting( 'gp_theprint_body_background',
			array(
				'default' => '#f3f4f5',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_body_background',
	        		array(
	            		'label' => 'Body Background',
	            		'section' => 'gp_theprint_body_background',
	            		'settings' => 'gp_theprint_body_background'
	       			)
	    		)
			);

		/* Using body background image. */
		$wp_customize->add_setting( 'gp_theprint_body_background_image_enable',
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_body_background_image_enable',
		    		array(
		        		'label' => 'Using body background image.',
		        		'section' => 'gp_theprint_body_background',
		        		'settings' => 'gp_theprint_body_background_image_enable',
		        		'type' => 'checkbox'
		    		)
				);

		/* Body background image upload. */	
		$wp_customize->add_setting( 'gp_theprint_body_background_image_upload',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

			$wp_customize->add_control(
				new WP_Customize_Image_Control( $wp_customize, 'gp_theprint_body_background_image_upload', 
					array(
	            		'label' => 'Upload body background image.',
	            		'section' => 'gp_theprint_body_background',
	            		'settings' => 'gp_theprint_body_background_image_upload'
	    			)
				)
			);

		/* Body background image repeat. */
		$wp_customize->add_setting( 'gp_theprint_body_background_image_repeat',
			array(
				'default' => 'inherit',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_body_background_image_repeat',
	    		array(
        			'label' => 'Body background image repeat.',
        			'section' => 'gp_theprint_body_background',
        			'settings' => 'gp_theprint_body_background_image_repeat',
        			'type' => 'select',
        			'choices' => array(
        				'inherit' => 'Inherit',
            			'no-repeat' => 'No Repeat',
            			'repeat' => 'Repeat',
            			'repeat-x' => 'Repeat Horizontally',
            			'repeat-y' => 'Repeat Vertically'
       				)
    			)
			);

		/* Body background image size. */
		$wp_customize->add_setting( 'gp_theprint_body_background_image_size',
			array(
				'default' => 'inherit',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_body_background_image_size',
	    		array(
        			'label' => 'Body background image size.',
        			'section' => 'gp_theprint_body_background',
        			'settings' => 'gp_theprint_body_background_image_size',
        			'type' => 'select',
        			'choices' => array(
        				'inherit' => 'Inherit',
            			'cover' => 'Cover',
            			'contain' => 'Contain'
       				)
    			)
			);

		/* Body background image attachment. */
		$wp_customize->add_setting( 'gp_theprint_body_background_image_attachment',
			array(
				'default' => 'inherit',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_body_background_image_attachment',
	    		array(
        			'label' => 'Body background image attachment.',
        			'section' => 'gp_theprint_body_background',
        			'settings' => 'gp_theprint_body_background_image_attachment',
        			'type' => 'select',
        			'choices' => array(
        				'inherit' => 'Inherit',
            			'scroll' => 'Scroll',
            			'fixed' => 'Fixed'
       				)
    			)
			);

		/* Body background image position. */
		$wp_customize->add_setting( 'gp_theprint_body_background_image_position',
			array(
				'default' => 'center top',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_body_background_image_position',
	    		array(
        			'label' => 'Body background image position.',
        			'section' => 'gp_theprint_body_background',
        			'settings' => 'gp_theprint_body_background_image_position',
        			'type' => 'select',
        			'choices' => array(
        				'left-top' => 'Left Top',
            			'left-center' => 'Left Center',
            			'left-bottom' => 'Left Bottom',
            			'center-top' => 'Center Top',
            			'center-center' => 'Center Center',
            			'center-bottom' => 'Center Bottom',
            			'right-top' => 'Right Top',
            			'right-center' => 'Right Center',
            			'right-bottom' => 'Right Bottom'
       				)
    			)
			);


	/* Widget Style
	--------------------------------------------- */
	$wp_customize->add_section('gp_theprint_widget_style', 
		array(
			'title' => 'Widget Style',
			'priority' => 12,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		/* Widget style. */
		$wp_customize->add_setting( 'gp_theprint_widget_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_widget_style',
	    		array(
        			'label' => 'Select the widget style.',
        			'section' => 'gp_theprint_widget_style',
        			'settings' => 'gp_theprint_widget_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
            			'style-f' => 'Style F',
            			'style-g' => 'Style G',
            			'style-h' => 'Style H',
            			'style-i' => 'Style I',
            			'style-j' => 'Style J',
            			'style-k' => 'Style K',
            			'style-l' => 'Style L',
            			'style-m' => 'Style M',
            			'style-n' => 'Style N',
            			'style-o' => 'Style O',
            			'style-p' => 'Style P',
            			'style-q' => 'Style Q',
            			'style-r' => 'Style R',
            			'style-s' => 'Style S',
            			'style-t' => 'Style T',
            			'style-u' => 'Style U',
            			'style-v' => 'Style V',
            			'style-w' => 'Style W',
            			'style-x' => 'Style X',
       				)
    			)
			);

		/* Homepage widget background primary color. */
		$wp_customize->add_setting( 'gp_theprint_homepage_widget_background_primary_color',
			array(
				'default' => '#f2f3f4',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_homepage_widget_background_primary_color',
	        		array(
	            		'label' => 'Pick the homepage widget background primary color.',
	            		'section' => 'gp_theprint_widget_style',
	            		'settings' => 'gp_theprint_homepage_widget_background_primary_color'
	       			)
	    		)
			);

		/* Homepage widget background secondary color. */
		$wp_customize->add_setting( 'gp_theprint_homepage_widget_background_secondary_color',
			array(
				'default' => '#f2f3f4',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_homepage_widget_background_secondary_color',
	        		array(
	            		'label' => 'Pick the homepage widget background secondary color.',
	            		'section' => 'gp_theprint_widget_style',
	            		'settings' => 'gp_theprint_homepage_widget_background_secondary_color'
	       			)
	    		)
			);

		/* Homepage widget text color. */
		$wp_customize->add_setting( 'gp_theprint_homepage_widget_text_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_homepage_widget_text_color',
	        		array(
	            		'label' => 'Pick the homepage widget text color.',
	            		'section' => 'gp_theprint_widget_style',
	            		'settings' => 'gp_theprint_homepage_widget_text_color'
	       			)
	    		)
			);

		/* Sidebar widget background primary color. */
		$wp_customize->add_setting( 'gp_theprint_sidebar_widget_background_primary_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_sidebar_widget_background_primary_color',
	        		array(
	            		'label' => 'Pick the sidebar widget background primary color.',
	            		'section' => 'gp_theprint_widget_style',
	            		'settings' => 'gp_theprint_sidebar_widget_background_primary_color'
	       			)
	    		)
			);

		/* Sidebar widget background secondary color. */
		$wp_customize->add_setting( 'gp_theprint_sidebar_widget_background_secondary_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_sidebar_widget_background_secondary_color',
	        		array(
	            		'label' => 'Pick the sidebar widget background secondary color.',
	            		'section' => 'gp_theprint_widget_style',
	            		'settings' => 'gp_theprint_sidebar_widget_background_secondary_color'
	       			)
	    		)
			);

		/* Sidebar widget text color. */
		$wp_customize->add_setting( 'gp_theprint_sidebar_widget_text_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);   

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_sidebar_widget_text_color',
	        		array(
	            		'label' => 'Pick the sidebar widget text color.',
	            		'section' => 'gp_theprint_widget_style',
	            		'settings' => 'gp_theprint_sidebar_widget_text_color'
	       			)
	    		)
			);


	/* Pagination Style
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_pagination_options', 
		array(
			'title' => 'Pagination Style',
			'priority' => 13,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		/* Pagination style */
		$wp_customize->add_setting( 'gp_theprint_pagination_style', 
				array(
					'default' => 'default',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'gp_theprint_sanitize_text',
				) 
			);

			$wp_customize->add_control( 'gp_theprint_pagination_style',
	    		array(
        			'label' => 'Select the pagination style.',
        			'section' => 'gp_theprint_pagination_options',
        			'settings' => 'gp_theprint_pagination_style',
        			'type' => 'select',
        			'choices' => array(
        				'default' => 'Default',
            			'infinite-scroll' => 'Infinite Scroll',
            			'scroll-load-button' => 'Scroll Load Button',
       				)
    			)
			);

		/* Pagination color style */
		$wp_customize->add_setting( 'gp_theprint_pagination_color_style', 
				array(
					'default' => 'default',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'gp_theprint_sanitize_text',
				) 
			);

			$wp_customize->add_control( 'gp_theprint_pagination_color_style',
	    		array(
        			'label' => 'Select the pagination color style.',
        			'section' => 'gp_theprint_pagination_options',
        			'settings' => 'gp_theprint_pagination_color_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
       				)
    			)
			);

		/* Pagination background primary color */
		$wp_customize->add_setting( 'gp_theprint_pagination_background_primary_color', 
				array(
					'default' => '#f2f3f4',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'gp_theprint_sanitize_text',
				) 
			);

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_pagination_background_primary_color',
	        		array(
	            		'label' => 'Pick the pagination background primary color.',
	            		'section' => 'gp_theprint_pagination_options',
	            		'settings' => 'gp_theprint_pagination_background_primary_color'
	       			)
	    		)
			);

		/* Pagination background secondary color */
		$wp_customize->add_setting( 'gp_theprint_pagination_background_secondary_color', 
				array(
					'default' => '#f2f3f4',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'gp_theprint_sanitize_text',
				) 
			);

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_pagination_background_secondary_color',
	        		array(
	            		'label' => 'Pick the pagination background secondary color.',
	            		'section' => 'gp_theprint_pagination_options',
	            		'settings' => 'gp_theprint_pagination_background_secondary_color'
	       			)
	    		)
			);

		/* Pagination text color */
		$wp_customize->add_setting( 'gp_theprint_pagination_text_color', 
				array(
					'default' => '#444444',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'gp_theprint_sanitize_text',
				) 
			);

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_pagination_text_color',
	        		array(
	            		'label' => 'Pick the pagination text color.',
	            		'section' => 'gp_theprint_pagination_options',
	            		'settings' => 'gp_theprint_pagination_text_color'
	       			)
	    		)
			);
			

	/* Mobile Menu Style
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_mobile_menu_style', 
		array(
			'title' => 'Mobile Menu Style',
			'priority' => 14,
			'panel' => 'gp_theprint_design_options',
		) 
	);

		/* Mobile menu style */
		$wp_customize->add_setting( 'gp_theprint_mobile_menu_style', 
				array(
					'default' => 'white',
					'type' => 'option',
					'capability' => 'edit_theme_options',
					'sanitize_callback' => 'gp_theprint_sanitize_text',
				) 
			);

			$wp_customize->add_control( 'gp_theprint_mobile_menu_style',
	    		array(
        			'label' => 'Select the mobile menu style.',
        			'section' => 'gp_theprint_mobile_menu_style',
        			'settings' => 'gp_theprint_mobile_menu_style',
        			'type' => 'select',
        			'choices' => array(
        				'white' => 'White',
        				'gray' => 'Gray',
            			'dark' => 'Dark',
       				)
    			)
			);


/*-----------------------------------------------------------------------------------*/
/*	Front Posts
/*-----------------------------------------------------------------------------------*/
	
$wp_customize->add_panel( 'gp_theprint_front_posts_options', 
	array(
		'title' => 'Front Posts',
		'description' => '',
		'priority' => 3,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
	) 
);

	/* Hide All Front Posts
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_front_posts_hide_posts', 
		array(
			'title' => 'Hide Front Posts',
			'priority' => 1,
			'panel' => 'gp_theprint_front_posts_options',
		) 
	);

		/* Hide all front posts. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_hide_posts', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_front_posts_hide_posts',
	    		array(
	        		'label' => 'Hide all front posts.',
	        		'section' => 'gp_theprint_front_posts_hide_posts',
	        		'settings' => 'gp_theprint_front_posts_hide_posts',
	        		'type' => 'checkbox',
	    		)
			);


	/* Front Posts Style
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_front_posts_style', 
		array(
			'title' => 'Front Posts Style',
			'priority' => 2,
			'panel' => 'gp_theprint_front_posts_options',
		) 
	);

		/* Front posts style. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_front_posts_style',
	    		array(
        			'label' => 'Select front posts style.',
        			'section' => 'gp_theprint_front_posts_style',
        			'settings' => 'gp_theprint_front_posts_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
            			'style-f' => 'Style F',
            			'style-g' => 'Style G',
            			'style-h' => 'Style H',
            			'style-i' => 'Style I',
            			'style-j' => 'Style J',
            			'style-k' => 'Style K',
       				)
    			)
			);	


	/* Entry Title
	--------------------------------------------- */
	$wp_customize->add_section('gp_theprint_front_posts_entry_title', 
		array(
			'title' => 'Entry Title Color',
			'priority' => 3,
			'panel' => 'gp_theprint_front_posts_options',
		) 
	);

		/* Entry title link color. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_entry_title_link_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_front_posts_entry_title_link_color',
	        		array(
	            		'label' => 'Pick the entry title link color.',
	            		'section' => 'gp_theprint_front_posts_entry_title',
	            		'settings' => 'gp_theprint_front_posts_entry_title_link_color'
	       			)
	    		)
			);

		/* Entry title link color. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_entry_title_link_hover_color',
			array(
				'default' => '#666666',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_front_posts_entry_title_link_hover_color',
	        		array(
	            		'label' => 'Pick the entry title link hover color.',
	            		'section' => 'gp_theprint_front_posts_entry_title',
	            		'settings' => 'gp_theprint_front_posts_entry_title_link_hover_color'
	       			)
	    		)
			);


	/* Entry meta category
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_front_posts_entry_meta_category', 
		array(
			'title' => 'Entry Meta Category',
			'priority' => 4,
			'panel' => 'gp_theprint_front_posts_options',
		) 
	);

		/* Entry meta category style. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_entry_meta_category_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_front_posts_entry_meta_category_style',
	    		array(
        			'label' => 'Select the entry meta category style.',
        			'section' => 'gp_theprint_front_posts_entry_meta_category',
        			'settings' => 'gp_theprint_front_posts_entry_meta_category_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
            			'style-f' => 'Style F',
            			'style-g' => 'Style G',
       				)
    			)
			);

		/* Entry meta category primary color. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_entry_meta_category_primary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_front_posts_entry_meta_category_primary_color',
	        		array(
	            		'label' => 'Pick the entry meta category primary color.',
	            		'section' => 'gp_theprint_front_posts_entry_meta_category',
	            		'settings' => 'gp_theprint_front_posts_entry_meta_category_primary_color'
	       			)
	    		)
			);

		/* Entry meta category secondary color. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_entry_meta_category_secondary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_front_posts_entry_meta_category_secondary_color',
	        		array(
	            		'label' => 'Pick the entry meta category secondary color.',
	            		'section' => 'gp_theprint_front_posts_entry_meta_category',
	            		'settings' => 'gp_theprint_front_posts_entry_meta_category_secondary_color'
	       			)
	    		)
			);

		/* Entry meta category link color. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_entry_meta_category_link_color',
			array(
				'default' => '#b2b2b2',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_front_posts_entry_meta_category_link_color',
	        		array(
	            		'label' => 'Pick the entry meta category link color.',
	            		'section' => 'gp_theprint_front_posts_entry_meta_category',
	            		'settings' => 'gp_theprint_front_posts_entry_meta_category_link_color'
	       			)
	    		)
			);


	/* Entry Meta
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_front_posts_entry_meta', 
		array(
			'title' => 'Entry Meta',
			'priority' => 5,
			'panel' => 'gp_theprint_front_posts_options',
		) 
	);

		/* Show the entry meta. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_entry_meta_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_front_posts_entry_meta_enable',
	    		array(
	        		'label' => 'Show the entry meta.',
	        		'section' => 'gp_theprint_front_posts_entry_meta',
	        		'settings' => 'gp_theprint_front_posts_entry_meta_enable',
	        		'type' => 'checkbox',
	    		)
			);

		/* Entry meta link color. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_entry_meta_link_color',
			array(
				'default' => '#b2b2b2',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_front_posts_entry_meta_link_color',
	        		array(
	            		'label' => 'Pick the entry meta link color.',
	            		'section' => 'gp_theprint_front_posts_entry_meta',
	            		'settings' => 'gp_theprint_front_posts_entry_meta_link_color'
	       			)
	    		)
			);


	/* Entry share
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_front_posts_entry_share', 
		array(
			'title' => 'Entry Share',
			'priority' => 5,
			'panel' => 'gp_theprint_front_posts_options',
		) 
	);

		/* Show the entry share. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_entry_share_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_front_posts_entry_share_enable',
	    		array(
	        		'label' => 'Show the entry share.',
	        		'section' => 'gp_theprint_front_posts_entry_share',
	        		'settings' => 'gp_theprint_front_posts_entry_share_enable',
	        		'type' => 'checkbox',
	    		)
			);

		/* Entry share style. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_entry_share_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_front_posts_entry_share_style',
	    		array(
        			'label' => 'Select the entry share style.',
        			'section' => 'gp_theprint_front_posts_entry_share',
        			'settings' => 'gp_theprint_front_posts_entry_share_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
       				)
    			)
			);

		/* Entry share color. */
		$wp_customize->add_setting( 'gp_theprint_front_posts_entry_share_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_front_posts_entry_share_color',
	        		array(
	            		'label' => 'Pick the entry share color.',
	            		'section' => 'gp_theprint_front_posts_entry_share',
	            		'settings' => 'gp_theprint_front_posts_entry_share_color'
	       			)
	    		)
			);

		/* Twitter username. */
		$wp_customize->add_setting( 'gp_theprint_entry_share_twitter_username',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_entry_share_twitter_username',
	    		array(
	        		'label' => 'Enter your Twitter username for the entry share.',
	        		'section' => 'gp_theprint_front_posts_entry_share',
	        		'settings' => 'gp_theprint_entry_share_twitter_username',
	        		'type' => 'text',
	    		)
			);


/*-----------------------------------------------------------------------------------*/
/*	Single Post
/*-----------------------------------------------------------------------------------*/

$wp_customize->add_panel( 'gp_theprint_single_post', 
	array(
		'title' => 'Single Post',
		'description' => '',
		'priority' => 4,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
	) 
);

	/* Single Entry Meta Category
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_single_entry_meta_category', 
		array(
			'title' => 'Entry Meta Category',
			'priority' => 1,
			'panel' => 'gp_theprint_single_post',
		) 
	);

		/* Entry meta category style. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_meta_category_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_single_entry_meta_category_style',
	    		array(
        			'label' => 'Select the single entry meta category style.',
        			'section' => 'gp_theprint_single_entry_meta_category',
        			'settings' => 'gp_theprint_single_entry_meta_category_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
            			'style-f' => 'Style F',
            			'style-g' => 'Style G',
       				)
    			)
			);

		/* Entry meta category primary color. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_meta_category_primary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_single_entry_meta_category_primary_color',
	        		array(
	            		'label' => 'Pick the single entry meta category primary color.',
	            		'section' => 'gp_theprint_single_entry_meta_category',
	            		'settings' => 'gp_theprint_single_entry_meta_category_primary_color'
	       			)
	    		)
			);

		/* Entry meta category secondary color. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_meta_category_secondary_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_single_entry_meta_category_secondary_color',
	        		array(
	            		'label' => 'Pick the single entry meta category secondary color.',
	            		'section' => 'gp_theprint_single_entry_meta_category',
	            		'settings' => 'gp_theprint_single_entry_meta_category_secondary_color'
	       			)
	    		)
			);

		/* Entry meta category link color. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_meta_category_link_color',
			array(
				'default' => '#b2b2b2',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_single_entry_meta_category_link_color',
	        		array(
	            		'label' => 'Pick the single entry meta category link color.',
	            		'section' => 'gp_theprint_single_entry_meta_category',
	            		'settings' => 'gp_theprint_single_entry_meta_category_link_color'
	       			)
	    		)
			);

	/* Single Entry Meta
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_single_entry_meta', 
		array(
			'title' => 'Entry Meta',
			'priority' => 2,
			'panel' => 'gp_theprint_single_post',
		) 
	);

		/* Hide the entry meta. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_meta_hide', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_single_entry_meta_hide',
	    		array(
	        		'label' => 'Hide the entry meta in single post.',
	        		'section' => 'gp_theprint_single_entry_meta',
	        		'settings' => 'gp_theprint_single_entry_meta_hide',
	        		'type' => 'checkbox',
	    		)
			);

		/* Entry meta link color. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_meta_link_color',
			array(
				'default' => '#b2b2b2',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_single_entry_meta_link_color',
	        		array(
	            		'label' => 'Pick the single entry meta link color.',
	            		'section' => 'gp_theprint_single_entry_meta',
	            		'settings' => 'gp_theprint_single_entry_meta_link_color'
	       			)
	    		)
			);

	/* Entry Share
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_single_entry_share', 
		array(
			'title' => 'Entry Share',
			'priority' => 3,
			'panel' => 'gp_theprint_single_post',
		) 
	);

		/* Show the entry share buttons. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_share_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_single_entry_share_enable',
	    		array(
	        		'label' => 'Show the single entry share buttons.',
	        		'section' => 'gp_theprint_single_entry_share',
	        		'settings' => 'gp_theprint_single_entry_share_enable',
	        		'type' => 'checkbox',
	    		)
			);

		/* Sticky entry share buttons. */
		$wp_customize->add_setting( 'gp_theprint_single_sticky_entry_share', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_single_sticky_entry_share',
	    		array(
	        		'label' => 'Active the single sticky entry share.',
	        		'section' => 'gp_theprint_single_entry_share',
	        		'settings' => 'gp_theprint_single_sticky_entry_share',
	        		'type' => 'checkbox',
	    		)
			);

		/* Entry share buttons style. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_share_style',
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);	

			$wp_customize->add_control( 'gp_theprint_single_entry_share_style',
	    		array(
        			'label' => 'Select the single entry share style.',
        			'section' => 'gp_theprint_single_entry_share',
        			'settings' => 'gp_theprint_single_entry_share_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
       				)
    			)
			);

		/* Entry share color. */
		$wp_customize->add_setting( 'gp_theprint_single_entry_share_color',
			array(
				'default' => '#444444',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_single_entry_share_color',
	        		array(
	            		'label' => 'Pick the single entry share color.',
	            		'section' => 'gp_theprint_single_entry_share',
	            		'settings' => 'gp_theprint_single_entry_share_color'
	       			)
	    		)
			);

	/* Entry Newsletter Form
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_entry_newsletter', array(
		'title' => 'Newsletter Form',
		'priority' => 4,
		'panel' => 'gp_theprint_single_post',
	));

		/* Show the entry newsletter. */
		$wp_customize->add_setting( 'gp_theprint_entry_newsletter_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_entry_newsletter_enable',
	    		array(
	        		'label' => 'Show the entry newsletter.',
	        		'section' => 'gp_theprint_entry_newsletter',
	        		'settings' => 'gp_theprint_entry_newsletter_enable',
	        		'type' => 'checkbox'
	    		)
			);

		/* Entry newsletter title. */
		$wp_customize->add_setting( 'gp_theprint_entry_newsletter_title',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_entry_newsletter_title',
	    		array(
	        		'label' 	=> 'Title',
	        		'description' => 'The entry newsletter title.',
	        		'section' 	=> 'gp_theprint_entry_newsletter',
	        		'settings'	=> 'gp_theprint_entry_newsletter_title',
	        		'type' 		=> 'text'
	    		)
		);

		/* Entry newsletter text. */
		$wp_customize->add_setting( 'gp_theprint_entry_newsletter_text',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);      

			$wp_customize->add_control( 'gp_theprint_entry_newsletter_text',
	    		array(
	        		'label' => 'Text',
	        		'description' => 'The entry newsletter text.',
	        		'section' => 'gp_theprint_entry_newsletter',
	        		'settings' => 'gp_theprint_entry_newsletter_text',
	        		'type' => 'textarea'
	    		)
			);

		/* Entry newsletter code. */
		$wp_customize->add_setting( 'gp_theprint_entry_newsletter_code',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);      

			$wp_customize->add_control( 'gp_theprint_entry_newsletter_code',
	    		array(
	        		'label' => 'Form Code',
	        		'description' => 'The entry newsletter code.',
	        		'section' => 'gp_theprint_entry_newsletter',
	        		'settings' => 'gp_theprint_entry_newsletter_code',
	        		'type' => 'textarea'
	    		)
			);

		/* Entry newsletter guarantee. */
		$wp_customize->add_setting( 'gp_theprint_entry_newsletter_guarantee',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);      

			$wp_customize->add_control( 'gp_theprint_entry_newsletter_guarantee',
	    		array(
	        		'label' => 'Guarantee',
	        		'description' => 'The entry newsletter guarantee.',
	        		'section' => 'gp_theprint_entry_newsletter',
	        		'type' => 'textarea',
	        		'settings' => 'gp_theprint_entry_newsletter_guarantee'
	    		)
			);

	/* Entry Author Box
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_entry_author_box', 
		array(
			'title' => 'Author Box',
			'priority' => 5,
			'panel' => 'gp_theprint_single_post',
		) 
	);

		/* Show the entry author box. */
		$wp_customize->add_setting( 'gp_theprint_entry_author_box', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_entry_author_box',
	    		array(
	        		'label' => 'Show the entry author box.',
	        		'section' => 'gp_theprint_entry_author_box',
	        		'settings' => 'gp_theprint_entry_author_box',
	        		'type' => 'checkbox'
	    		)
			);

	/* Entry Related Posts
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_entry_related_posts', 
		array(
			'title' => 'Related Posts',
			'priority' => 6,
			'panel' => 'gp_theprint_single_post',
		) 
	);

		/* Show the entry related posts. */
		$wp_customize->add_setting( 'gp_theprint_entry_related_posts', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_entry_related_posts',
	    		array(
	        		'label' => 'Show the entry related posts.',
	        		'section' => 'gp_theprint_entry_related_posts',
	        		'settings' => 'gp_theprint_entry_related_posts',
	        		'type' => 'checkbox'
	    		)
			);

		/* Entry related posts number. */
		$wp_customize->add_setting( 'gp_theprint_entry_related_posts_number', 
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_entry_related_posts_number',
	    		array(
	        		'label' => 'The entry related posts number.',
	        		'section' => 'gp_theprint_entry_related_posts',
	        		'settings' => 'gp_theprint_entry_related_posts_number',
	        		'type' => 'select',
        			'choices' => array(
        				'default' => 'Default',
            			'3' => '3',
            			'6' => '6',
            			'9' => '9',
            			'12' => '12',
            			'15' => '15',
       				)
	    		)
			);

	/* Entry Recent Posts
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_entry_recent_posts', 
		array(
			'title' => 'Recent Posts',
			'priority' => 7,
			'panel' => 'gp_theprint_single_post',
		) 
	);

		/* Show the entry recent posts. */
		$wp_customize->add_setting( 'gp_theprint_entry_recent_posts', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_entry_recent_posts',
	    		array(
	        		'label' => 'Show the entry recent posts.',
	        		'section' => 'gp_theprint_entry_recent_posts',
	        		'settings' => 'gp_theprint_entry_recent_posts',
	        		'type' => 'checkbox'
	    		)
			);

		/* Entry recent posts style. */
		$wp_customize->add_setting( 'gp_theprint_entry_recent_posts_style', 
			array(
				'default' => 'default',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_entry_recent_posts_style',
	    		array(
	        		'label' => 'Select the entry recent posts style.',
	        		'section' => 'gp_theprint_entry_recent_posts',
	        		'settings' => 'gp_theprint_entry_recent_posts_style',
	        		'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
       				)
	    		)
			);

	/* Entry Navigation
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_entry_navigation', 
		array(
			'title' => 'Entry Navigation',
			'priority' => 8,
			'panel' => 'gp_theprint_single_post',
		) 
	);

		/* Enable entry navigation */
		$wp_customize->add_setting( 'gp_theprint_entry_navigation', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_entry_navigation',
	    		array(
	        		'label' => 'Show the entry navigation.',
	        		'section' => 'gp_theprint_entry_navigation',
	        		'settings' => 'gp_theprint_entry_navigation',
	        		'type' => 'checkbox'
	    		)
			);

	/* Entry Block Title
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_entry_block_title', 
		array(
			'title' => 'Block Titles',
			'priority' => 9,
			'panel' => 'gp_theprint_single_post',
		) 
	);

		/* Block title border color. */
		$wp_customize->add_setting( 'gp_theprint_block_title_border_color',
			array(
				'default' => '#f2f3f4',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_block_title_border_color',
	        		array(
	            		'label' => 'Pick the block title border color.',
	            		'section' => 'gp_theprint_entry_block_title',
	            		'settings' => 'gp_theprint_block_title_border_color'
	       			)
	    		)
			);


/*-----------------------------------------------------------------------------------*/
/*	Ad Units
/*-----------------------------------------------------------------------------------*/

$wp_customize->add_panel( 'gp_theprint_ad_units', array(
	'title' => 'Ad Units',
	'description' => '',
	'priority' => 5,
	'capability' => 'edit_theme_options',
	'theme_supports' => ''
) );

	/* Top Ad
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_top_ad', array(
		'title' => 'Top Ad',
		'priority' => 1,
		'panel' => 'gp_theprint_ad_units',
	));

		/* Show the top ad. */
		$wp_customize->add_setting( 'gp_theprint_top_ad_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_top_ad_enable',
	    		array(
	        		'label' => 'Show the top ad.',
	        		'section' => 'gp_theprint_top_ad',
	        		'settings' => 'gp_theprint_top_ad_enable',
	        		'type' => 'checkbox'
	    		)
			);

		/* Top ad code. */
		$wp_customize->add_setting( 'gp_theprint_top_ad_code',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);      

			$wp_customize->add_control( 'gp_theprint_top_ad_code',
	    		array(
	        		'label' => 'Top ad code.',
	        		'description' => 'The top ad code. Best size is 1200x.',
	        		'section' => 'gp_theprint_top_ad',
	        		'settings' => 'gp_theprint_top_ad_code',
	        		'type' => 'textarea'
	    		)
			);

	/* Single Post - Ad Above The Content
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_single_ad_above_content', array(
		'title' => 'Single Ad - Above The Content',
		'priority' => 2,
		'panel' => 'gp_theprint_ad_units',
	));

		/* Show ad above the content. */
		$wp_customize->add_setting( 'gp_theprint_single_ad_above_content_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_single_ad_above_content_enable',
	    		array(
	        		'label' => 'Show the single ad above the content.',
	        		'section' => 'gp_theprint_single_ad_above_content',
	        		'settings' => 'gp_theprint_single_ad_above_content_enable',
	        		'type' => 'checkbox'
	    		)
			);

		/* Single ad above the content code. */
		$wp_customize->add_setting( 'gp_theprint_single_ad_above_content_code',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);      

			$wp_customize->add_control( 'gp_theprint_single_ad_above_content_code',
	    		array(
	        		'label' => 'The ad code.',
	        		'description' => 'The single ad code above the content. Best size is 695x.',
	        		'section' => 'gp_theprint_single_ad_above_content',
	        		'settings' => 'gp_theprint_single_ad_above_content_code',
	        		'type' => 'textarea'
	    		)
			);

	/* Single Post - Ad Under The Content
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_single_ad_under_content', array(
		'title' => 'Single Ad - Under The Content',
		'priority' => 3,
		'panel' => 'gp_theprint_ad_units',
	));

		/* Show the single ad under the content. */
		$wp_customize->add_setting( 'gp_theprint_single_ad_under_content_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_single_ad_under_content_enable',
	    		array(
	        		'label' => 'Show the single ad under the content.',
	        		'section' => 'gp_theprint_single_ad_under_content',
	        		'settings' => 'gp_theprint_single_ad_under_content_enable',
	        		'type' => 'checkbox'
	    		)
			);

		/* Single ad above the content code. */
		$wp_customize->add_setting( 'gp_theprint_single_ad_under_content_code',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);      

			$wp_customize->add_control( 'gp_theprint_single_ad_under_content_code',
	    		array(
	        		'label' => 'The ad code.',
	        		'description' => 'The single ad code under the content. Best size is 695x.',
	        		'section' => 'gp_theprint_single_ad_under_content',
	        		'settings' => 'gp_theprint_single_ad_under_content_code',
	        		'type' => 'textarea'
	    		)
			);	


/*-----------------------------------------------------------------------------------*/
/*	Newsletters
/*-----------------------------------------------------------------------------------*/

$wp_customize->add_panel( 'gp_theprint_newsletters', array(
	'title' => 'Newsletters',
	'description' => '',
	'priority' => 6,
	'capability' => 'edit_theme_options',
	'theme_supports' => ''
) );

	/* Newsletter - Homepage
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_homepage_newsletter', array(
		'title' => 'Homepage Newsletter',
		'priority' => 1,
		'panel' => 'gp_theprint_newsletters',
	));

		/* Show the homepage newsletter. */
		$wp_customize->add_setting( 'gp_theprint_homepage_newsletter_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_homepage_newsletter_enable',
	    		array(
	        		'label' => 'Show the homepage newsletter.',
	        		'section' => 'gp_theprint_homepage_newsletter',
	        		'settings' => 'gp_theprint_homepage_newsletter_enable',
	        		'type' => 'checkbox'
	    		)
			);

		/* Entry newsletter title. */
		$wp_customize->add_setting( 'gp_theprint_homepage_newsletter_title',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_homepage_newsletter_title',
	    		array(
	        		'label' 	=> 'Title',
	        		'description' => 'The homepage newsletter title.',
	        		'section' 	=> 'gp_theprint_homepage_newsletter',
	        		'settings'	=> 'gp_theprint_homepage_newsletter_title',
	        		'type' 		=> 'text'
	    		)
		);

		/* Homepage newsletter text. */
		$wp_customize->add_setting( 'gp_theprint_homepage_newsletter_text',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);

			$wp_customize->add_control( 'gp_theprint_homepage_newsletter_text',
	    		array(
	        		'label' 	=> 'Text',
	        		'description' => 'The homepage newsletter title.',
	        		'section' 	=> 'gp_theprint_homepage_newsletter',
	        		'settings'	=> 'gp_theprint_homepage_newsletter_text',
	        		'type' 		=> 'textarea'
	    		)
		);

		/* Homepage newsletter code. */
		$wp_customize->add_setting( 'gp_theprint_homepage_newsletter_code',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);      

			$wp_customize->add_control( 'gp_theprint_homepage_newsletter_code',
	    		array(
	        		'label' => 'Form Code',
	        		'description' => 'The homepage newsletter code.',
	        		'section' => 'gp_theprint_homepage_newsletter',
	        		'settings' => 'gp_theprint_homepage_newsletter_code',
	        		'type' => 'textarea'
	    		)
			);

		/* Homepage newsletter guarantee. */
		$wp_customize->add_setting( 'gp_theprint_homepage_newsletter_guarantee',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);      

			$wp_customize->add_control( 'gp_theprint_homepage_newsletter_guarantee',
	    		array(
	        		'label' => 'Guarantee',
	        		'description' => 'The homepage newsletter guarantee.',
	        		'section' => 'gp_theprint_homepage_newsletter',
	        		'type' => 'textarea',
	        		'settings' => 'gp_theprint_homepage_newsletter_guarantee'
	    		)
			);

		/* Homepage newsletter style */
		$wp_customize->add_setting( 'gp_theprint_homepage_newsletter_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_homepage_newsletter_style',
	    		array(
        			'label' => 'Select the homepage newsletter style.',
        			'section' => 'gp_theprint_homepage_newsletter',
        			'settings' => 'gp_theprint_homepage_newsletter_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
       				)
    			)
			);

		/* Homepage newsletter primary color. */
		$wp_customize->add_setting( 'gp_theprint_homepage_newsletter_primary_color',
			array(
				'default' => '#e6a87a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_homepage_newsletter_primary_color',
	        		array(
	            		'label' => 'Pick the homepage newsletter primary color.',
	            		'section' => 'gp_theprint_homepage_newsletter',
	            		'settings' => 'gp_theprint_homepage_newsletter_primary_color'
	       			)
	    		)
			);

		/* Homepage newsletter secondary color. */
		$wp_customize->add_setting( 'gp_theprint_homepage_newsletter_secondary_color',
			array(
				'default' => '#e6a87a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_homepage_newsletter_secondary_color',
	        		array(
	            		'label' => 'Pick the homepage newsletter secondary color.',
	            		'section' => 'gp_theprint_homepage_newsletter',
	            		'settings' => 'gp_theprint_homepage_newsletter_secondary_color'
	       			)
	    		)
			);

		/* Homepage newsletter image. */	
		$wp_customize->add_setting( 'gp_theprint_homepage_newsletter_image',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'esc_url_raw',
			)
		);

			$wp_customize->add_control(
				new WP_Customize_Image_Control( $wp_customize, 'gp_theprint_homepage_newsletter_image', 
					array(
	            		'label' => 'Upload the homepage newsletter image.',
	            		'section' => 'gp_theprint_homepage_newsletter',
	            		'settings' => 'gp_theprint_homepage_newsletter_image'
	    			)
				)
			);


	/* Newsletter - Sidebar
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_sidebar_newsletter', array(
		'title' => 'Sidebar Newsletter',
		'priority' => 2,
		'panel' => 'gp_theprint_newsletters',
	));

		/* Sidebar newsletter style */
		$wp_customize->add_setting( 'gp_theprint_sidebar_newsletter_style',
			array(
				'default' => 'style-a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);

			$wp_customize->add_control( 'gp_theprint_sidebar_newsletter_style',
	    		array(
        			'label' => 'Select the sidebar newsletter style.',
        			'section' => 'gp_theprint_sidebar_newsletter',
        			'settings' => 'gp_theprint_sidebar_newsletter_style',
        			'type' => 'select',
        			'choices' => array(
        				'style-a' => 'Style A',
            			'style-b' => 'Style B',
            			'style-c' => 'Style C',
            			'style-d' => 'Style D',
            			'style-e' => 'Style E',
       				)
    			)
			);

		/* Sidebar newsletter primary color. */
		$wp_customize->add_setting( 'gp_theprint_sidebar_newsletter_primary_color',
			array(
				'default' => '#e6a87a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_sidebar_newsletter_primary_color',
	        		array(
	            		'label' => 'Pick the sidebar newsletter primary color.',
	            		'section' => 'gp_theprint_sidebar_newsletter',
	            		'settings' => 'gp_theprint_sidebar_newsletter_primary_color'
	       			)
	    		)
			);

		/* Sidebar newsletter secondary color. */
		$wp_customize->add_setting( 'gp_theprint_sidebar_newsletter_secondary_color',
			array(
				'default' => '#e6a87a',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_sidebar_newsletter_secondary_color',
	        		array(
	            		'label' => 'Pick the sidebar newsletter secondary color.',
	            		'section' => 'gp_theprint_sidebar_newsletter',
	            		'settings' => 'gp_theprint_sidebar_newsletter_secondary_color'
	       			)
	    		)
			);

		/* Sidebar newsletter text color. */
		$wp_customize->add_setting( 'gp_theprint_sidebar_newsletter_text_color',
			array(
				'default' => '#ffffff',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			)
		);      

			$wp_customize->add_control(
	    		new WP_Customize_Color_Control( $wp_customize, 'gp_theprint_sidebar_newsletter_text_color',
	        		array(
	            		'label' => 'Pick the sidebar newsletter text color.',
	            		'section' => 'gp_theprint_sidebar_newsletter',
	            		'settings' => 'gp_theprint_sidebar_newsletter_text_color'
	       			)
	    		)
			);


	/* Newsletter - Footer
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_footer_newsletter', array(
		'title' => 'Footer Newsletter',
		'priority' => 3,
		'panel' => 'gp_theprint_newsletters',
	));

		/* Show the footer newsletter. */
		$wp_customize->add_setting( 'gp_theprint_footer_newsletter_enable', 
			array(
				'default' => false,
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_text',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_footer_newsletter_enable',
	    		array(
	        		'label' => 'Show the footer newsletter.',
	        		'section' => 'gp_theprint_footer_newsletter',
	        		'settings' => 'gp_theprint_footer_newsletter_enable',
	        		'type' => 'checkbox'
	    		)
			);

		/* Footer newsletter code. */
		$wp_customize->add_setting( 'gp_theprint_footer_newsletter_code',
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			)
		);      

			$wp_customize->add_control( 'gp_theprint_footer_newsletter_code',
	    		array(
	        		'label' => 'Form Code',
	        		'description' => 'The footer newsletter code.',
	        		'section' => 'gp_theprint_footer_newsletter',
	        		'settings' => 'gp_theprint_footer_newsletter_code',
	        		'type' => 'textarea'
	    		)
			);


/*-----------------------------------------------------------------------------------*/
/*	Custom Code
/*-----------------------------------------------------------------------------------*/

$wp_customize->add_panel( 'gp_theprint_custom_code', array(
	'title' => 'Custom Code',
	'description' => '',
	'priority' => 7,
	'capability' => 'edit_theme_options',
	'theme_supports' => ''
) );

	/* Custom CSS
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_custom_css', 
		array(
			'title' => 'Custom CSS',
			'priority' => 1,
			'panel' => 'gp_theprint_custom_code',
		) 
	);

		/* Custom css code. */
		$wp_customize->add_setting( 'gp_theprint_custom_css', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_custom_css',
	    		array(
	        		'label' => 'Custom CSS',
	        		'description' => 'Quickly add some CSS.',
	        		'section' => 'gp_theprint_custom_css',
	        		'settings' => 'gp_theprint_custom_css',
	        		'type' => 'textarea'
	    		)
			);

	/* Custom Scripts
	--------------------------------------------- */

	$wp_customize->add_section('gp_theprint_custom_scripts', 
		array(
			'title' => 'Custom Scripts',
			'priority' => 2,
			'panel' => 'gp_theprint_custom_code',
		) 
	);

		/* Header scripts. */
		$wp_customize->add_setting( 'gp_theprint_header_scripts', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_header_scripts',
	    		array(
	        		'label' => 'Header Scripts',
	        		'description' => 'Add scripts before the closing &lt;/head&gt; tag.',
	        		'section' => 'gp_theprint_custom_scripts',
	        		'settings' => 'gp_theprint_header_scripts',
	        		'type' => 'textarea'
	    		)
			);

		/* Footer scripts. */
		$wp_customize->add_setting( 'gp_theprint_footer_scripts', 
			array(
				'default' => '',
				'type' => 'option',
				'capability' => 'edit_theme_options',
				'sanitize_callback' => 'gp_theprint_sanitize_textarea',
			) 
		);

			$wp_customize->add_control( 'gp_theprint_footer_scripts',
	    		array(
	        		'label' => 'Footer Scripts',
	        		'description' => 'Add scripts before the closing &lt;/body&gt; tag.',
	        		'section' => 'gp_theprint_custom_scripts',
	        		'settings' => 'gp_theprint_footer_scripts',
	        		'type' => 'textarea'
	    		)
			);


/*-----------------------------------------------------------------------------------*/
/*	The End!
/*-----------------------------------------------------------------------------------*/

}

add_action('customize_register', 'gp_theprint_customizer');


/**
 * Sanitize.
 */

// Text, color, checkbox, select.
function gp_theprint_sanitize_text( $str ) {
	return sanitize_text_field( $str );
} 

// Textarea.
function gp_theprint_sanitize_textarea( $textarea ) {
	return $textarea;
} 

/**
 * Customize preview.
 */

function gp_theprint_customize_preview_js() {
	wp_enqueue_script( 'gp-theprint-customize-preview', get_template_directory_uri() . '/inc/customizer/customize-preview.js', array( 'customize-preview' ), '100', true );
}
add_action( 'customize_preview_init', 'gp_theprint_customize_preview_js' );

?>