<?php
/**
 * Homepage newsletter.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

?>

<?php if ( get_option( 'gp_theprint_homepage_newsletter_enable' ) != '' ): ?>

<div class="gp-theprint-homepage-newsletter">
	<div class="gp-theprint-wrap">

		<div class="newsletter-content">
			<?php if ( get_option( 'gp_theprint_homepage_newsletter_title' ) != '' ): ?>
				<h4><?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_title' ) ); ?></h4>
			<?php endif; ?>

			<?php if ( get_option( 'gp_theprint_homepage_newsletter_text' ) != '' ): ?>
				<p><?php echo esc_attr( get_option( 'gp_theprint_homepage_newsletter_text' ) ); ?></p>
			<?php endif; ?>

			<?php if ( get_option( 'gp_theprint_homepage_newsletter_code' ) != '' ): ?>
				<?php echo get_option( 'gp_theprint_homepage_newsletter_code' ); ?>
			<?php endif; ?>

			<?php if ( get_option( 'gp_theprint_homepage_newsletter_guarantee' ) != '' ): ?>
				<span><?php echo get_option( 'gp_theprint_homepage_newsletter_guarantee' ); ?></span>
			<?php endif; ?>
		</div><!-- .newsletter-content -->

		<?php if ( get_option( 'gp_theprint_homepage_newsletter_image' ) != '' ): ?>
			<div class="newsletter-image" style="background-image: url('<?php echo esc_url( get_option( 'gp_theprint_homepage_newsletter_image' ) ); ?>');"></div>
		<?php endif; ?>

		<div class="newsletter-overlay"></div>

	</div><!-- .gp-theprint-wrap -->
</div><!-- .gp-theprint-homepage-newsletter -->

<?php endif; ?>