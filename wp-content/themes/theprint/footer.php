<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<footer class="gp-theprint-footer<?php if ( get_option( 'gp_theprint_footer_style' ) == 'footer-b' ): ?> footer-b<?php endif; ?>">
	<div class="gp-theprint-row">
		<div class="gp-theprint-footer-navigation-copyright">
			<nav class="gp-theprint-footer-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement">
				<?php wp_nav_menu( array (
					'theme_location' => 'gp_theprint_footer_navigation',
					'echo' => true,
					'items_wrap' => '<ul>%3$s</ul>' 
				) ); ?>
			</nav><!-- .gp-theprint-footer-navigation -->

			<div class="gp-theprint-copyright">
				<p><?php esc_html_e('Copyright', 'theprint'); ?> &copy; <?php echo date('Y'); ?>. <?php esc_html_e('All Rights Reserved', 'theprint'); ?>. <?php esc_html_e('Designed by', 'theprint'); ?> <a href="<?php echo esc_url( esc_html__( 'https://grovepixels.com/', 'theprint' ) ); ?>"><?php esc_html_e('GrovePixels.com', 'theprint'); ?></a></p>
			</div><!-- .gp-theprint-copyright -->
		</div><!-- .gp-theprint-footer-navigation-copyright -->

		<div class="gp-theprint-footer-icons-newsletter">
			<div class="gp-theprint-footer-icons">
				<ul>
					<?php if ( get_option( 'gp_theprint_facebook_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_facebook_url' ) ); ?>"><i class="fa fa-facebook"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_twitter_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_twitter_url' ) ); ?>"><i class="fa fa-twitter"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_google_plus_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_google_plus_url' ) ); ?>"><i class="fa fa-google-plus"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_linkedin_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_linkedin_url' ) ); ?>"><i class="fa fa-linkedin"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_pinterest_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_pinterest_url' ) ); ?>"><i class="fa fa-pinterest"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_instagram_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_instagram_url' ) ); ?>"><i class="fa fa-instagram"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_youtube_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_youtube_url' ) ); ?>"><i class="fa fa-youtube"></i></a></li>
					<?php endif; ?>

					<?php if ( get_option( 'gp_theprint_rss_url' ) != '' ): ?>
						<li><a href="<?php echo esc_url( get_option( 'gp_theprint_rss_url' ) ); ?>"><i class="fa fa-rss"></i></a></li>
					<?php endif; ?>
				</ul>
			</div><!-- .gp-theprint-footer-icons -->

			<?php 
			// Get the footer newsletter.
			get_template_part('inc/newsletters/footer', 'newsletter'); 
			?>
		</div><!-- .gp-theprint-footer-icons-newsletter -->
	</div><!-- .gp-theprint-row -->

</footer><!-- .gp-theprint-footer -->

</div><!-- .gp-theprint-content-wrap -->

</div><!-- .gp-theprint-content-wrap-mobile -->

</div><!-- .gp-theprint-container -->

<?php if ( get_option( 'gp_theprint_pagination_style' ) == 'infinite-scroll' ): ?>

<script type="text/javascript">
jQuery(document).ready(function($) {
    "use strict";

    	// Infinite scroll.
    	$('.gp-theprint-articles.front-posts').infinitescroll({
            loading: {
                finished: undefined,
                finishedMsg: '<h5 class="ajax-loading-text"><?php esc_html_e('Sorry, no more posts.', 'theprint'); ?></h5></center>',
                img: 'data:image/gif;base64,R0lGODlhAQABAHAAACH5BAUAAAAALAAAAAABAAEAAAICRAEAOw==',
                msgText: '<h5 class="ajax-loading-text more"><?php esc_html_e('Loading more posts...', 'theprint'); ?></h5>',
                speed: 0,
                selector: ".gp-theprint-loading-text"
            },
            navSelector: ".gp-theprint-pagination",
            nextSelector: ".gp-theprint-pagination a.next",
            itemSelector: ".gp-theprint-articles.front-posts .front-post",
            bufferPx: 0,
            animate: false,
        });

});// - Document ready.
</script>

<?php elseif ( get_option( 'gp_theprint_pagination_style' ) == 'scroll-load-button' ): ?>

<script type="text/javascript">
jQuery(document).ready(function($) {
    "use strict";

    	// Infinite scroll.
    	$('.gp-theprint-articles.front-posts').infinitescroll({
            loading: {
                finished: undefined,
                finishedMsg: '<h5 class="ajax-loading-text"><?php esc_html_e('Sorry, no more posts.', 'theprint'); ?></h5></center>',
                img: 'data:image/gif;base64,R0lGODlhAQABAHAAACH5BAUAAAAALAAAAAABAAEAAAICRAEAOw==',
                msgText: '<h5 class="ajax-loading-text more"><?php esc_html_e('Loading more posts...', 'theprint'); ?></h5>',
                speed: 0,
                selector: ".gp-theprint-loading-text"
            },
            navSelector: ".gp-theprint-pagination",
            nextSelector: ".gp-theprint-pagination a.next",
            itemSelector: ".gp-theprint-articles.front-posts .front-post",
            bufferPx: 0,
            animate: false,
        });
    	$(window).unbind('.infscr');
		$("a#gp-theprint-infinite-trigger").click(function(){
   			$('.gp-theprint-articles.front-posts').infinitescroll('retrieve');
        		return false;
		});

});// - Document ready.
</script>	

<?php endif; ?>

<script type="text/javascript">

jQuery('a.entry-link').hover(
    function(){ 
        jQuery( this ).prev('.entry-description').children('header').children('p').children('span').children('a').css({'color':'#868E99'});
        jQuery( this ).prev('.entry-description').children('header').children('h2').css({'color':'#868E99'});        
    },
    function(){ 
  			jQuery( this ).prev('.entry-description').children('header').children('p').children('span').children('a').css({'color':'white'});      
  			jQuery( this ).prev('.entry-description').children('header').children('p>span>a, h2').css({'color':'white'});        
    }
);

</script>

<?php wp_footer(); ?>

</body>

</html>