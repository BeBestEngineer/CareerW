<?php
/**
 * The template used for displaying entry ad under.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 **/

?>

<?php if ( get_option( 'gp_theprint_single_ad_under_content_enable' ) != '' ): ?>

<div class="entry-ad-under">
	<?php if ( get_option( 'gp_theprint_single_ad_under_content_code' ) != '' ): ?><?php echo get_option( 'gp_theprint_single_ad_under_content_code' ); ?><?php endif; ?>
</div><!-- .entry-ad-under -->

<?php endif; ?>