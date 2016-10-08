<?php
/**
 * Writer functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 * 
 * @see https://codex.wordpress.org/Plugin_API/Action_Reference/after_setup_theme
 *
 * @since The Print 1.0.0
 *
 */
function gp_theprint_setup() {
	/*
	 * Make the theme available for translation.
	 * Translations can be added to the /languages/ directory.
	 *
	 */
	load_theme_textdomain( 'theprint', get_template_directory() . '/languages' );

	/* 
	 * Add title tag. 
	 * @see https://codex.wordpress.org/Title_Tag
	 *
	 */
	add_theme_support( 'title-tag' );

	/* 
	 * Add feed links. 
	 * @see http://codex.wordpress.org/Automatic_Feed_Links
	 *
	 */
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Load the live customizer.
	 * 
	 */
	require get_template_directory() . '/inc/customizer/customizer.php';

	/* 
	 * Add post-formats
	 * @see https://codex.wordpress.org/Post_Formats
	 *
	 */
	add_theme_support('post-formats', array('gallery', 'video', 'audio'));
	add_post_type_support('post', 'post-formats');

	/* 
	 * Add post thumbnail supports. 
	 * @see https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 *
	 */
	add_theme_support( 'post-thumbnails' );

	/* Post thumbnail.
	 * Featured posts A
	 */
	add_image_size( 'gp-theprint-589x340', 589, 340, true );

	/* Post thumbnail.
	 * Featured posts A
	 * Staff picks A
	 */
	add_image_size( 'gp-theprint-392x270', 392, 270, true );

	/* Post thumbnail.
	 * Featured posts B
	 */
	add_image_size( 'gp-theprint-589x300', 589, 300, true );

	/* Post thumbnail.
	 * Featured posts C
	 */
	add_image_size( 'gp-theprint-589x280', 589, 280, true );

	/* Post thumbnail.
	 * Featured posts C
	 * Featured posts D
	 * Featured posts F
	 * Staff picks B
	 */
	add_image_size( 'gp-theprint-294x280', 294, 280, true );

	/* Post thumbnail.
	 * Featured posts D
	 */
	add_image_size( 'gp-theprint-589x562', 589, 562, true );

	/* Post thumbnail.
	 * Featured posts E
	 */
	add_image_size( 'gp-theprint-710x562', 710, 562, true );

	/* Post thumbnail.
	 * Featured posts E
	 */
	add_image_size( 'gp-theprint-468x280', 468, 280, true );

	/* Post thumbnail.
	 * Mega menu
	 * Front posts A & B & E
	 * Homepage #1 A & C & D
	 * Homepage #2 A & C & D
	 * Homepage #3 A & C & D
	 * Sidebar B & C
	 * Related posts
	 */
	add_image_size( 'gp-theprint-355x220', 355, 220, true );

	/* Post thumbnail.
	 * Front posts C & F & G & H & I & J
	 * Homepage #1 B
	 * Homepage #2 B
	 * Homepage #3 B
	 * Single recent posts
	 */
	add_image_size( 'gp-theprint-360x260', 360, 260, true );

	// Front posts D & F.
	add_image_size( 'gp-theprint-740x320', 740, 320, true );

	// Front posts K. 
	add_image_size( 'gp-theprint-740x440', 740, 440, true );

	/* Post thumbnail.
	 * Homepage #1 C & D
	 * Homepage #2 C & D
	 * Homepage #3 C & E
	 * Sidebar A & C
	 */
	add_image_size( 'gp-theprint-110x85', 110, 85, true );

	/* Post thumbnail.
	 * Sidebar D
	 */
	add_image_size( 'gp-theprint-150x110', 150, 110, true );

	/* Post thumbnail.
	 * Entry navigation
	 */
	add_image_size( 'gp-theprint-100x100', 100, 100, true );

	/*
	 * Add menu supports.
	 * @see http://codex.wordpress.org/Function_Reference/register_nav_menus
	 */
	add_theme_support( 'menus' );
	register_nav_menus( array(
		'gp_theprint_primary_navigation' => esc_html__( 'Primary Navigation', 'theprint' ),
		'gp_theprint_secondary_navigation' => esc_html__( 'Secondary Navigation', 'theprint' ),
		'gp_theprint_footer_navigation' => esc_html__( 'Footer Navigation', 'theprint' ),
		'gp_theprint_mobile_navigation' => esc_html__( 'Mobile Navigation', 'theprint' )
	) );	

	/*
	 * Add HTML 5 support.
	 * 
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Load custom template tags.
	 * 
	 */
	require get_template_directory() . '/inc/template-tags.php';

	/*
	 * Load the mega menu.
	 * 
	 */
	require get_template_directory() . '/inc/mega-menu.php';

	/*
	 * Load the breadcrumbs template.
	 * 
	 */
	require get_template_directory() . '/inc/breadcrumbs.php';

	/*
	 * Load the contributors template.
	 * 
	 */
	require get_template_directory() . '/inc/contributors.php';

	/*
	 * Load the homepage widgets.
	 * 
	 */
		// Homepage widget area one.
		require get_template_directory() . '/inc/widgets/homepage-1-posts-a.php';
		require get_template_directory() . '/inc/widgets/homepage-1-posts-b.php';
		require get_template_directory() . '/inc/widgets/homepage-1-posts-c.php';
		require get_template_directory() . '/inc/widgets/homepage-1-posts-d.php';
		require get_template_directory() . '/inc/widgets/homepage-1-posts-e.php';
		require get_template_directory() . '/inc/widgets/homepage-1-posts-f.php';

		// Homepage widget area #2.
		require get_template_directory() . '/inc/widgets/homepage-2-posts-a.php';
		require get_template_directory() . '/inc/widgets/homepage-2-posts-b.php';
		require get_template_directory() . '/inc/widgets/homepage-2-posts-c.php';
		require get_template_directory() . '/inc/widgets/homepage-2-posts-d.php';
		require get_template_directory() . '/inc/widgets/homepage-2-posts-e.php';
		require get_template_directory() . '/inc/widgets/homepage-2-posts-f.php';

		// Homepage widget area #3.
		require get_template_directory() . '/inc/widgets/homepage-3-posts-a.php';
		require get_template_directory() . '/inc/widgets/homepage-3-posts-b.php';
		require get_template_directory() . '/inc/widgets/homepage-3-posts-c.php';
		require get_template_directory() . '/inc/widgets/homepage-3-posts-d.php';
		require get_template_directory() . '/inc/widgets/homepage-3-posts-e.php';
		require get_template_directory() . '/inc/widgets/homepage-3-posts-f.php';

	/*
	 * Load the sidebar widgets.
	 * 
	 */
		// Sidebar widgets.
		require get_template_directory() . '/inc/widgets/recent-posts-a.php';
		require get_template_directory() . '/inc/widgets/recent-posts-b.php';
		require get_template_directory() . '/inc/widgets/recent-posts-c.php';
		require get_template_directory() . '/inc/widgets/recent-posts-d.php';
		require get_template_directory() . '/inc/widgets/recent-posts-e.php';
		require get_template_directory() . '/inc/widgets/recent-posts-f.php';
		require get_template_directory() . '/inc/widgets/trending-posts-a.php';
		require get_template_directory() . '/inc/widgets/trending-posts-b.php';
		require get_template_directory() . '/inc/widgets/trending-posts-c.php';
		require get_template_directory() . '/inc/widgets/trending-posts-d.php';
		require get_template_directory() . '/inc/widgets/trending-posts-e.php';
		require get_template_directory() . '/inc/widgets/trending-posts-f.php';
		require get_template_directory() . '/inc/widgets/recent-reviews-a.php';
		require get_template_directory() . '/inc/widgets/recent-reviews-b.php';
		require get_template_directory() . '/inc/widgets/recent-reviews-c.php';
		require get_template_directory() . '/inc/widgets/recent-reviews-d.php';
		require get_template_directory() . '/inc/widgets/recent-reviews-e.php';
		require get_template_directory() . '/inc/widgets/recent-reviews-f.php';
		require get_template_directory() . '/inc/widgets/newsletter-form.php';
		require get_template_directory() . '/inc/widgets/recent-comments.php';

}
add_action('after_setup_theme', 'gp_theprint_setup');

/**
 * Load the advanced custom fields.
 *
 * @see https://wordpress.org/plugins/advanced-custom-fields/ & http://www.advancedcustomfields.com/pro/
 *
 * @since The Print 1.0.0
 *
 */
require get_template_directory() . '/inc/acf/acf.php';
require get_template_directory() . '/inc/acf-fields/acf-fields.php';

/**
 * Set up the content width value based on the theme's design.
 *
 * @see https://codex.wordpress.org/Content_Width
 *
 * @since The Print 1.0.0
 *
 */
if ( ! isset( $content_width ) ) {
	$content_width = 679;
}

function gp_theprint_content_width_full_width_page() {
	global $content_width;
	if ( is_page_template('page-templates/full-width.php') ) { 
		$content_width = 1000;
	}
}
add_action( 'template_redirect', 'gp_theprint_content_width_full_width_page' );

/**
 * Google fonts.
 * 
 * @see https://gist.github.com/kailoon/e2dc2a04a8bd5034682c
 *
 * @since The Print 1.0.0
 *
 */
function gp_theprint_google_fonts_url() {
    $fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';
 
	/* translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'theprint' ) ) {
		$fonts[] = 'Open Sans:400,700,400italic,700italic';
	}

	/* translators: If there are characters in your language that are not supported by Poppins, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'theprint' ) ) {
		$fonts[] = 'Poppins:400,700';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}

/**
 * Enqueue scripts & styles the front end.
 *
 * @see https://codex.wordpress.org/Function_Reference/wp_enqueue_script
 * 
 * @since The Print 1.0.0
 *
 */
function gp_theprint_theme_js() {
	if(!is_admin()) {
		// Load the jquery.
		wp_enqueue_script( 'jquery' );
		
		// Load the plugin javascripts.
		wp_register_script('gp-theprint-infinite-scroll', get_template_directory_uri() . '/js/infinite-scroll.js', array('jquery'), '2.0.2', true );
		if( get_option( 'gp_theprint_pagination_style' ) == 'infinite-scroll' || get_option( 'gp_theprint_pagination_style' ) == 'scroll-load-button') {
			wp_enqueue_script( 'gp-theprint-infinite-scroll' );
		}

		wp_register_script('gp-theprint-manual-trigger', get_template_directory_uri() . '/js/manual-trigger.js', array('jquery'), '1.0.0', true );
		if( get_option( 'gp_theprint_pagination_style' ) == 'scroll-load-button') {
			wp_enqueue_script( 'gp-theprint-manual-trigger' );
		}

		wp_register_script('gp-theprint-plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'gp-theprint-plugins' );

		// Load the custom javascript.
		wp_register_script('gp-theprint-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );
		wp_enqueue_script( 'gp-theprint-custom' );
		
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		// Load Google fonts, used in the main stylesheet.
		wp_enqueue_style( 'gp_theprint_google_fonts', gp_theprint_google_fonts_url(), array(), null );

		// Load the main stylesheet.
		wp_enqueue_style( 'gp-theprint-main-style', get_stylesheet_uri() );

		// Load the Font Awesome stylesheet.
		wp_register_style( 'gp-theprint-font-awesome', get_template_directory_uri() . '/css/css/font-awesome.min.css', array(), '4.5.0' ); 
		wp_enqueue_style( 'gp-theprint-font-awesome' ); 
	}
}
add_action('wp_enqueue_scripts', 'gp_theprint_theme_js');

/**
 * Custom styles, typography and scripts for the front end.
 * 
 * @since The Print 1.0.0
 *
 */

function gp_theprint_custom_style() {
	// Load the custom css.
	require get_template_directory() . '/inc/custom-style.php';
}
add_action('wp_head', 'gp_theprint_custom_style');

function gp_theprint_custom_typography() {
	// Load the custom typography.
	require get_template_directory() . '/inc/custom-typography.php';
}
add_action('wp_head', 'gp_theprint_custom_typography');

function gp_theprint_header_scripts() {
	// Load the custom header scripts.
	require get_template_directory() . '/inc/header-scripts.php';
}
add_action('wp_head', 'gp_theprint_header_scripts');

function gp_theprint_footer_scripts() {
	// Load the custom footer scripts.
	require get_template_directory() . '/inc/footer-scripts.php';
}
add_action('wp_footer', 'gp_theprint_footer_scripts');

/**
 * This theme styles the visual editor to resemble the theme style.
 *
 * @see https://codex.wordpress.org/Editor_Style
 * 
 * @since The Print 1.0.0
 *
 */
function gp_theprint_css_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'after_setup_theme', 'gp_theprint_css_editor_styles' );

/**
 * Register five widget areas.
 *
 * @see https://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @since The Print 1.0.0
 *
 */
if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' 			=> 'Default Sidebar',
		'id'            => 'sidebar-1',
		'before_widget' => '<div id="%1$s" class="gp-theprint-widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="gp-theprint-widget-title"><span>',
		'after_title' 	=> '</span><span class="after"></span></h4>',
	));
}

if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' 			=> 'Sidebar Wiget Area Two',
		'id'            => 'sidebar-7',
		'before_widget' => '<div id="%1$s" class="gp-theprint-widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="gp-theprint-widget-title"><span>',
		'after_title' 	=> '</span><span class="after"></span></h4>',
	));
}

if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' 			=> 'Sidebar for Single Posts',
		'id'            => 'sidebar-2',
		'before_widget' => '<div id="%1$s" class="gp-theprint-widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="gp-theprint-widget-title">',
		'after_title' 	=> '</h4>',
	));
}

if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' 			=> 'Sidebar for Sinlge Pages',
		'id'            => 'sidebar-3',
		'before_widget' => '<div id="%1$s" class="gp-theprint-widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="gp-theprint-widget-title">',
		'after_title' 	=> '</h4>',
	));
}

if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' 			=> 'Homepage Widget Area #1',
		'id'            => 'sidebar-4',
		'before_widget' => '<div id="%1$s" class="gp-theprint-widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="gp-theprint-widget-title"><span>',
		'after_title' 	=> '</span><span class="after"></span></h4>',
	));
}

if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' 			=> 'Homepage Widget Area #2',
		'id'            => 'sidebar-5',
		'before_widget' => '<div id="%1$s" class="gp-theprint-widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="gp-theprint-widget-title"><span>',
		'after_title' 	=> '</span><span class="after"></span></h4>',
	));
}

if(function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' 			=> 'Homepage Widget Area #3',
		'id'            => 'sidebar-6',
		'before_widget' => '<div id="%1$s" class="gp-theprint-widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="gp-theprint-widget-title"><span>',
		'after_title' 	=> '</span><span class="after"></span></h4>',
	));
}

/**
 * Advanced Custom Fields is the perfect solution for any wordpress website which needs more flexible data like other Content Management Systems.
 *
 * @see https://wordpress.org/plugins/advanced-custom-fields/
 *
 * @since The Print 1.0.0
 *
 */
function gp_theprint_remove_acf_menu() {
    // provide a list of usernames who can edit custom field definitions here
    $admins = array();

    // get the current user
    $current_user = wp_get_current_user();

    // match and remove if needed
    if( !in_array( $current_user->user_login, $admins ) )
    {
        remove_menu_page('edit.php?post_type=acf');
    }
}
add_action( 'admin_menu', 'gp_theprint_remove_acf_menu', 999 );

/**
 *	Fix the menu error.
 *
 */
function gp_theprint_chrome_fix() {
	if ( strpos( $_SERVER['HTTP_USER_AGENT'], 'Chrome' ) !== false )
		wp_add_inline_style( 'wp-admin', '#adminmenu { transform: translateZ(0); }' );
}
add_action('admin_enqueue_scripts', 'gp_theprint_chrome_fix');