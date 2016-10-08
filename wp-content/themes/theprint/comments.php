<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="entry-comments" id="comments">
	<?php if ( have_comments() ): ?>
		<div class="comment-title">
			<h3><?php comments_popup_link( esc_html__( '0 Comments', 'theprint' ), esc_html__( '1 Comment', 'theprint' ), '% '.esc_html__( 'Comments', 'theprint' ) ); ?></h3>
		</div>

		<ol class="comment-list">
			<?php wp_list_comments( array(
				'type'       => 'comment',
    			'style'      => 'ol',
    			'short_ping' => true,
    			'avatar_size'=> 60,
    			) );
   			?>
			
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comments-nav" role="navigation">
			<div class="comments-previous"><?php previous_comments_link( esc_html__( '&larr; Older comments', 'theprint' ) ); ?></div>

			<div class="comments-next"><?php next_comments_link( esc_html__( 'Newer comments &rarr;', 'theprint' ) ); ?></div>
		</nav><!-- #comment-nav -->
		<?php endif; // Check for comment navigation. ?>

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'theprint' ); ?></p>
		<?php endif; ?>
	<?php endif; // have_comments() ?>

	<?php comment_form(); ?>
</div><!-- .entry-comments -->