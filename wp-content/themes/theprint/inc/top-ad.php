<?php
/**
 * The top ad.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 **/

?>

<?php if ( get_option( 'gp_theprint_top_ad_enable' ) != '' ) : ?>

<div class="gp-theprint-row">
	<div class="gp-theprint-top-ad">
		<?php if ( get_option( 'gp_theprint_top_ad_code' ) != '' ) : ?><?php echo get_option( 'gp_theprint_top_ad_code' ); ?><?php endif; ?>
	</div><!-- .gp-theprint-top-ad -->
</div><!-- .gp-theprint-row -->

<?php endif; ?>