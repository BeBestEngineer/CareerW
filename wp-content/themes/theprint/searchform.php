<?php
/**
 * The template for displaying search form.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<form class="gp-theprint-search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="hidden" id="post_type" name="post_type" value="post" />
	<input type="text" id="search" name="s" placeholder="<?php esc_attr_e('Search...', 'theprint'); ?>"/>

	<button type="submit" id="button"><i class="fa fa-search"></i></button>
</form><!-- .gp-search-form -->
