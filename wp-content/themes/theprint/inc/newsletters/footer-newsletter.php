<?php
/**
 * Footer newsletter.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

?>

<?php if ( get_option( 'gp_theprint_footer_newsletter_enable' ) != '' ): ?>

<div class="gp-theprint-footer-newsletter">
	<?php if ( get_option( 'gp_theprint_footer_newsletter_code' ) != '' ): ?>
		<?php echo get_option( 'gp_theprint_footer_newsletter_code' ); ?>
	<?php endif; ?>
</div><!-- .gp-theprint-footer-newsletter -->

<?php endif; ?>