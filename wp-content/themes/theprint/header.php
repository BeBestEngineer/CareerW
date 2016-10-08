<?php
/**
 * The template for displaying the header.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php if ( get_option( 'gp_theprint_favicon' ) != '' ) : ?>
<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
echo '<link rel="shortcut icon" type="image/x-icon" href="'. esc_url( get_option( "gp_theprint_favicon" ) ) .'" />';
} ?>
<?php endif; ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="container" class="gp-theprint-container">

<div class="gp-theprint-menu-wrap">
	<div class="gp-theprint-search-mobile">
		<form class="gp-theprint-search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<input type="hidden" id="post_type-mobile" name="post_type" value="post" />
			<input type="text" id="search-mobile" name="s" placeholder="<?php esc_attr_e('Search...', 'theprint'); ?>"/>

			<button type="submit" id="button-mobile"><i class="fa fa-search"></i></button>
		</form><!-- .gp-search-form -->
	</div><!-- .gp-theprint-search-mobile -->

	<div class="gp-theprint-social-icons-mobile">
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
		</ul>
	</div><!-- .gp-theprint-social-icons-mobile -->

	<nav id="mobile-menu" class="gp-theprint-mobile-menu<?php if ( get_option( 'gp_theprint_mobile_menu_style' ) == 'dark' ): ?> dark<?php endif; ?>">
		<?php wp_nav_menu( array (
			'theme_location' => 'gp_theprint_mobile_navigation',
			'echo' => true,
			'items_wrap' => '<ul>%3$s</ul>'
		) ); ?>
	</nav><!-- #mobile-menu## -->
</div><!-- .gp-theprint-menu-wrap -->

<div class="gp-theprint-content-wrap-mobile">

<div class="gp-theprint-content-wrap">

<?php if ( get_option( 'gp_theprint_site_cover_enable' ) != '' ): ?>
	<?php if ( !is_singular()  || ( get_field('gp_theprint_single_post_style') != 'style-f' ) ): ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div id="cover" class="gp-theprint-site-cover"></div><!-- #cover## -->
	</a>
	<?php endif; ?>
<?php endif; ?>

<header id="header" class="gp-theprint-header" itemscope itemtype="http://schema.org/WPHeader">
	<?php if( get_option( 'gp_theprint_header_style' ) == 'style-b'): ?>
		<?php 
		// Get header with style B.
		get_template_part('inc/header-styles/header', 'b'); 
		?>
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-c'): ?>
		<?php 
		// Get header with style C.
		get_template_part('inc/header-styles/header', 'c'); 
		?>
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-d'): ?>
		<?php 
		// Get header with style D.
		get_template_part('inc/header-styles/header', 'd'); 
		?>	
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-e'): ?>
		<?php 
		// Get header with style E.
		get_template_part('inc/header-styles/header', 'e'); 
		?>	
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-f'): ?>
		<?php 
		// Get header with style F.
		get_template_part('inc/header-styles/header', 'f'); 
		?>	
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-g'): ?>
		<?php 
		// Get header with style G.
		get_template_part('inc/header-styles/header', 'g'); 
		?>	
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-h'): ?>
		<?php 
		// Get header with style H.
		get_template_part('inc/header-styles/header', 'h'); 
		?>	
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-i'): ?>
		<?php 
		// Get header with style I.
		get_template_part('inc/header-styles/header', 'i'); 
		?>	
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-j'): ?>
		<?php 
		// Get header with style J.
		get_template_part('inc/header-styles/header', 'j'); 
		?>	
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-k'): ?>
		<?php 
		// Get header with style K.
		get_template_part('inc/header-styles/header', 'k'); 
		?>	
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-l'): ?>
		<?php 
		// Get header with style L.
		get_template_part('inc/header-styles/header', 'l'); 
		?>
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-m'): ?>
		<?php 
		// Get header with style M.
		get_template_part('inc/header-styles/header', 'm'); 
		?>	
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-n'): ?>
		<?php 
		// Get header with style N.
		get_template_part('inc/header-styles/header', 'n'); 
		?>	
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-o'): ?>
		<?php 
		// Get header with style O.
		get_template_part('inc/header-styles/header', 'o'); 
		?>
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-p'): ?>
		<?php 
		// Get header with style P.
		get_template_part('inc/header-styles/header', 'p'); 
		?>
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-q'): ?>
		<?php 
		// Get header with style Q.
		get_template_part('inc/header-styles/header', 'q'); 
		?>
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-r'): ?>
		<?php 
		// Get header with style R.
		get_template_part('inc/header-styles/header', 'r'); 
		?>
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-s'): ?>
		<?php 
		// Get header with style S.
		get_template_part('inc/header-styles/header', 's'); 
		?>
	<?php elseif( get_option( 'gp_theprint_header_style' ) == 'style-t'): ?>
		<?php 
		// Get header with style T.
		get_template_part('inc/header-styles/header', 't'); 
		?>
	<?php else: ?>
		<?php 
		// Get header with style A.
		get_template_part('inc/header-styles/header', 'a'); 
		?>
	<?php endif; ?>
</header><!-- #header## -->