<?php
/**
 * The custom header scripts.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php if ( get_option( 'gp_theprint_header_scripts' ) != '' ) : ?>
	<?php echo get_option( 'gp_theprint_header_scripts' ); ?>
<?php endif; ?>