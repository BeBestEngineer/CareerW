<?php
/**
 * The template used for displaying entry ad above.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 **/

?>

<?php if ( get_option( 'gp_theprint_single_ad_above_content_enable' ) != '' ): ?>

<div class="entry-ad-above">
	<?php if ( get_option( 'gp_theprint_single_ad_above_content_code' ) != '' ): ?><?php echo get_option( 'gp_theprint_single_ad_above_content_code' ); ?><?php endif; ?>
</div><!-- .entry-ad-above -->

<?php endif; ?>