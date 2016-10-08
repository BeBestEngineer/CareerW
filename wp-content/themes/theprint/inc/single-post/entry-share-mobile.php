<?php
/**
 * Entry share mobile.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 **/

if (has_post_thumbnail( $post->ID ) ) {
	$pinterest_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
} ?>

<?php if ( get_option( 'gp_theprint_entry_share_buttons' ) != '' ): ?>

<div class="single-entry-share-mobile">
	<ul>
		<li class="facebook"><a target="_blank" href="http://www.facebook.com/plugins/like.php?href=<?php esc_url( the_permalink() ); ?>" onclick="javascript:window.open(this.href,
									  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a></li>

		<li class="twitter"><a target="_blank" href="https://twitter.com/intent/tweet?original_referer=<?php esc_url( the_permalink() ); ?>&text=<?php the_title_attribute(); ?>&tw_p=tweetbutton&url=<?php the_permalink(); ?>&via=<?php if ( get_option( 'gp_theprint_entry_share_twitter_username' ) != '' ): ?><?php echo esc_attr( get_option( 'gp_theprint_entry_share_twitter_username' ) ); ?><?php endif; ?>" onclick="javascript:window.open(this.href,
									  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a></li>

		<li class="linkedin"><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php esc_url( the_permalink() ); ?>&title=<?php the_title_attribute(); ?>&source=<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin"></i></a></li>

		<li class="google-plus"><a href="https://plus.google.com/share?url=<?php esc_url( the_permalink() ); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a></li>

  		<li class="pinterest"><a href="http://www.pinterest.com/pin/create/button/?url=<?php esc_url( the_permalink() ); ?>&description=<?php the_title_attribute(); ?>&media=<?php echo esc_url( $pinterest_image[0] ); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-pinterest"></i></a></li>

		<li class="email"><a href="mailto:?subject=<?php the_title_attribute(); ?>"><i class="fa fa-envelope"></i></a></li>
	</ul>
</div><!-- .entry-share-mobile -->

<?php endif; ?>