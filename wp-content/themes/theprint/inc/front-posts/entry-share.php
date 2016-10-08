<?php
/**
 * Entry share.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<?php if ( get_option( 'gp_theprint_front_posts_entry_share_enable' ) != '' ): ?>

<div class="entry-share">
	<ul>
		<li class="facebook"><a target="_blank" href="http://www.facebook.com/plugins/like.php?href=<?php esc_url( the_permalink() ); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a></li>

		<li class="twitter"><a target="_blank" href="https://twitter.com/intent/tweet?original_referer=<?php esc_url( the_permalink() ); ?>&text=<?php the_title_attribute(); ?>&tw_p=tweetbutton&url=<?php esc_url( the_permalink() ); ?>&via=<?php if ( get_option( 'gp_theprint_entry_share_twitter_username' ) != '' ): ?><?php echo esc_attr( get_option( 'gp_theprint_entry_share_twitter_username' ) ); ?><?php endif; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a></li>

		<li class="google-plus"><a href="https://plus.google.com/share?url=<?php esc_url( the_permalink() ); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google"></i></a></li>
	</ul>
</div><!-- .entry-share -->

<?php endif; ?>