<?php
/**
 * The template for all site contributors who published at least one post.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

function gp_theprint_list_authors() {
    $contributor_ids = get_users( array(
		'fields'  => 'ID',
		'orderby' => 'post_count',
		'order'   => 'DESC',
		'who'     => 'authors',
	) ); ?>

	<div class="gp-theprint-contributors">

		<?php 
			foreach ( $contributor_ids as $contributor_id ):
			$post_count = count_user_posts( $contributor_id );

			// Move on if user has not published a post (yet).
			if ( ! $post_count ) {
				continue;
			}
		?>

		<div class="contributor">
			<div class="contributor-info">
				<div class="contributor-avatar">
					<a href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>"><?php echo get_avatar( $contributor_id, 250 ); ?></a>
				</div><!-- .contributor-avatar -->

				<div class="contributor-summary">
					<h2 class="contributor-name"><a href="<?php echo esc_url( get_author_posts_url( $contributor_id ) ); ?>"><?php echo get_the_author_meta( 'display_name', $contributor_id ); ?></a></h2>
				</div><!-- .contributor-summary -->
			</div><!-- .contributor-info -->
		</div><!-- .contributor -->

	<?php 
		endforeach; 
	?>

	</div><!-- .gp-theprint-contributors -->

<?php }