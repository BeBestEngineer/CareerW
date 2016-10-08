<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<article <?php post_class( 'entry-single' ); ?> itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
	<header class="entry-header">
		<h1 class="entry-title"><?php esc_html_e('Sorry, no results were found.', 'theprint'); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="text">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

		<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'theprint' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

		<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'theprint' ); ?></p>
		<?php get_search_form(); ?>

		<?php else : ?>

		<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'theprint' ); ?></p>
		<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .entry-content -->
</article><!-- .hentry -->
