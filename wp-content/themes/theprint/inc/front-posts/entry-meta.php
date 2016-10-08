<?php
/**
 * Entry meta.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php if ( get_option( 'gp_theprint_front_posts_entry_meta_enable' ) != '' ): ?>

<p class="entry-meta">
	<span class="entry-author vcard author"><a class="fn" rel="author" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span><?php the_author(); ?></span></a></span>

	<span class="slash"><?php esc_html_e( ' / ', 'theprint' ); ?></span>
	
	<span class="entry-time"><time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time></span>
</p><!-- .entry-meta -->

<?php endif; ?>