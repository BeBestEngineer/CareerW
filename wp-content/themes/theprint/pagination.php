<?php
/**
 * The template for displaying pagination.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<div class="gp-theprint-pagination<?php if ( get_option( 'gp_theprint_pagination_style' ) == 'infinite-scroll' || get_option( 'gp_theprint_pagination_style' ) == 'scroll-load-button' ): ?> hide<?php endif; ?>">
	<?php gp_theprint_pagination(); ?>
</div><!-- .gp-theprint-pagination -->

<?php if ( get_option( 'gp_theprint_pagination_style' ) == 'infinite-scroll' || get_option( 'gp_theprint_pagination_style' ) == 'scroll-load-button' ): ?>
	<div class="gp-theprint-loading-text"></div>
<?php endif; ?>

<?php 
// > 1 page.
if ($wp_query->max_num_pages > 1): 
?>
	<?php if ( get_option( 'gp_theprint_pagination_style' ) == 'scroll-load-button' ): ?>
		<div class="gp-theprint-ajax-loading-button">
			<h5><a id="gp-theprint-infinite-trigger" href="#"><?php esc_html_e('Load More Stories', 'theprint'); ?></a></h5>
		</div><!-- .gp-theprint-ajax-loading-button -->
	<?php endif; ?>
<?php 
// End if.
endif; 
?>