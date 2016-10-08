<?php
/**
 * Sidebar widget area two.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
	<aside class="gp-theprint-sidebar<?php if ( get_option( 'gp_theprint_sticky_sidebar' ) != '' ): ?> sticky-sidebar<?php endif; ?>" itemscope itemtype="http://schema.org/WPSideBar">
		<?php dynamic_sidebar( 'sidebar-7' ); ?>
	</aside><!-- .gp-sidebar -->
<?php endif; ?>