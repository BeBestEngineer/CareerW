<?php
/**
 * The template for displaying newsletter form.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php if ( get_option( 'gp_theprint_entry_newsletter_enable' ) != '' ): ?>

<div class="entry-newsletter">
	<?php if ( get_option( 'gp_theprint_entry_newsletter_title' ) != '' ): ?><h4 class="gp-theprint-block-title"><?php echo esc_attr( get_option( 'gp_theprint_entry_newsletter_title' ) ); ?></h4><?php endif; ?>

	<?php if ( get_option( 'gp_theprint_entry_newsletter_text' ) != '' ): ?><p><?php echo get_option( 'gp_theprint_entry_newsletter_text' ); ?></p><?php endif; ?>

	<?php if ( get_option( 'gp_theprint_entry_newsletter_code' ) != '' ): ?><?php echo get_option( 'gp_theprint_entry_newsletter_code' ); ?><?php endif; ?>

	<?php if ( get_option( 'gp_theprint_entry_newsletter_guarantee' ) != '' ): ?><span><?php echo esc_attr( get_option( 'gp_theprint_entry_newsletter_guarantee' ) ); ?></span><?php endif; ?>
</div><!-- .entry-newsletter -->

<?php endif; ?>