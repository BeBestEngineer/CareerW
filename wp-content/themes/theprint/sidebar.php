<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php 
// If at single post.
if ( is_single() ): 
?>

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<aside class="gp-theprint-sidebar<?php if ( get_option( 'gp_theprint_sticky_sidebar' ) != '' ): ?> sticky-sidebar<?php endif; ?>" itemscope itemtype="http://schema.org/WPSideBar">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</aside><!-- .gp-sidebar -->
	<?php endif; ?>

<?php 
// If at single page.
elseif ( is_page() ):
?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<aside class="gp-theprint-sidebar<?php if ( get_option( 'gp_theprint_sticky_sidebar' ) != '' ): ?> sticky-sidebar<?php endif; ?>" itemscope itemtype="http://schema.org/WPSideBar">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</aside><!-- .gp-sidebar -->
	<?php endif; ?>

<?php 
// Default sidebar.
else: 
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<aside class="gp-theprint-sidebar<?php if ( get_option( 'gp_theprint_sticky_sidebar' ) != '' ): ?> sticky-sidebar<?php endif; ?>" itemscope itemtype="http://schema.org/WPSideBar">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- .gp-sidebar -->
	<?php endif; ?>

<?php 
// End if.
endif; 
?>