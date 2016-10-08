<?php
/**
 * The template used for displaying author bio
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php if ( get_option( 'gp_theprint_entry_author_box' ) != '' ): ?>

<section class="entry-author-box" itemscope="itemscope" itemprop="author" itemtype="http://schema.org/Person">
	<h4 class="gp-theprint-block-title"><?php esc_html_e( 'About the Author' , 'theprint' ); ?></h4>

	<div class="author-avatar">
		<?php echo get_avatar( get_the_author_meta( 'email' ), '100' ); ?>
	</div><!-- .author-avatar -->

	<h2 class="vcard author author-title"><span class="fn" itemprop="name"><?php the_author(); ?></span></h2>

	<div class="author-description" itemprop="description">
		<p><?php the_author_meta( 'description' ); ?></p>
	</div><!-- .author-description -->
</section><!-- .entry-author-box -->

<?php endif; ?>
