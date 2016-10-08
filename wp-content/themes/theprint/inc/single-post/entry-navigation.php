<?php
/**
 * The template used for displaying entry navigation.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 **/

$entry_previous_post = get_previous_post();
$entry_next_post = get_next_post(); 
?>

<?php if ( get_option( 'gp_theprint_entry_navigation' ) != '' ): ?>

<nav class="entry-navigation" role="navigation">
	<div class="gp-theprint-wrap">
		<div class="nav-prev">
			<?php if( get_adjacent_post( false, '', true ) ) : ?>
				<a href="<?php echo get_permalink( $entry_previous_post->ID ); ?>">
					<div class="arrow"><i class="fa fa-angle-left"></i></div>

					<div class="prev-article">
						<div class="featured-image">
							<?php echo get_the_post_thumbnail( $entry_previous_post->ID, 'gp-theprint-100x100', array( 100,100 ) ); ?>
						</div>
						
						<div class="meta-nav">
							<h5 class="title"><?php echo get_the_title( $entry_previous_post->ID ); ?></h5>
							<h6 class="text"><?php esc_html_e( 'Previous Article', 'theprint' ); ?></h6>
						</div>
					</div>
				</a>
			<?php endif; ?>
		</div><!-- .nav-prev -->

		<div class="nav-next">
			<?php if( get_adjacent_post( false, '', false ) ) : ?>	
				<a href="<?php echo get_permalink( $entry_next_post->ID ); ?>">
					<div class="arrow"><i class="fa fa-angle-right"></i></div>
					
					<div class="next-article">
						<div class="featured-image">
							<?php echo get_the_post_thumbnail( $entry_next_post->ID, 'gp-theprint-100x100', array( 100,100 ) ); ?>
						</div>
						
						<div class="meta-nav">
							<h5 class="title"><?php echo get_the_title( $entry_next_post->ID ); ?></h5>
							<h6 class="text"><?php esc_html_e( 'Next Article', 'theprint' ); ?></h6>
						</div>
					</div>
				</a>
			<?php endif; ?>
		</div><!-- .nav-next -->
	</div><!-- .gp-wrap -->
</nav><!-- .entry-navigation -->

<?php endif; ?>