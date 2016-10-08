<?php
/**
 * Recent comments widget.
 *
 *
 * @link https://codex.wordpress.org/Widgets_API#Developing_Widgets
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

class gp_theprint_load_recent_comments extends WP_Widget {
	
	/* Widget setup. */

	public function __construct() {
		parent::__construct(
			'gp_theprint_recent_comments', // Widget ID.
				esc_html__( '* WGP - Sidebar - Recent Comments', 'theprint' ), // Widget name.
				array( 
					'classname' => 'gp-theprint-recent-comments', // Widget class.
					'description' => esc_html__( 'A widget that displays recent comments.' , 'theprint' ), // Widget description.
				)
		);

		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
	}

	/* Color picker. */

	public function admin_enqueue_scripts ( $hook_suffix ) {
        if ( $hook_suffix != 'widgets.php' ) return;

        wp_enqueue_style( 'wp-color-picker' );          
        wp_enqueue_script( 'wp-color-picker' ); 
    }

	/* Display the widget on the screen. */

	public function widget( $args, $instance ) {

		extract( $args );
		$title = apply_filters( 'widget_title', $instance['title'] );
		$number = $instance['number'];
		$primary_color = $instance['primary_color'];
		$secondary_color = $instance['secondary_color'];
		if( $primary_color == ''):
			$primary_color = get_option( 'gp_theprint_sidebar_widget_background_primary_color' ); 
		endif;
		if( $secondary_color == ''):
			$secondary_color = get_option( 'gp_theprint_sidebar_widget_background_secondary_color' ); 
		endif;
		echo $args['before_widget'];
		if( $title ): ?>
			<?php if( get_option( 'gp_theprint_widget_style' ) == 'style-b'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span>'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-c'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title" style="background-color: ' . esc_attr( $secondary_color ) . ';">';?>
					<?php echo '<span style="background-color: ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-d'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="background-color: ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-e'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="background: ' . esc_attr( $primary_color ) . '; background: -webkit-linear-gradient(55deg,' . esc_attr( $primary_color ) . ' 0%,' . esc_attr( $secondary_color ) . ' 100%); background: linear-gradient(55deg,' . esc_attr( $primary_color ) . ' 0%,' . esc_attr( $secondary_color ) . ' 100%);">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-f'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="background: ' . esc_attr( $primary_color ) . '; background: -webkit-linear-gradient(55deg,' . esc_attr( $primary_color ) . ' 0%,' . esc_attr( $secondary_color ) . ' 100%); background: linear-gradient(55deg,' . esc_attr( $primary_color ) . ' 0%,' . esc_attr( $secondary_color ) . ' 100%);">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-g'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="background: ' . esc_attr( $primary_color ) . '; background: -webkit-linear-gradient(55deg,' . esc_attr( $primary_color ) . ' 0%,' . esc_attr( $secondary_color ) . ' 100%); background: linear-gradient(55deg,' . esc_attr( $primary_color ) . ' 0%,' . esc_attr( $secondary_color ) . ' 100%);">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-h'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title" style="border-bottom: 3px solid ' . esc_attr( $primary_color ) . ';">';?>
					<?php echo '<span style="background: ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-i'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title" style="border-top: 3px solid ' . esc_attr( $primary_color ) . ';">';?>
					<?php echo '<span style="background: ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-j'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="border-top: 5px solid ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-k'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="border-bottom: 5px solid ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-l'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="border-top: 0.625rem solid ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-m'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="border-bottom: 0.625rem solid ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-n'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span>'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
					<?php echo '<span class="after" style="background-color: ' . esc_attr( $primary_color ) . ';"></span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-o'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span>'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
					<?php echo '<span class="after" style="background-color: ' . esc_attr( $primary_color ) . ';"></span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-p'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span>'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
					<?php echo '<span class="after" style="background-color: ' . esc_attr( $primary_color ) . ';"></span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-q'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span>'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
					<?php echo '<span class="after" style="background-color: ' . esc_attr( $primary_color ) . ';"></span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-r'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="border: 3px solid ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-s'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="border: 3px solid ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-t'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="border: 3px solid ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-u'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="border-top: 3px solid ' . esc_attr( $primary_color ) . '; border-bottom: 1px solid ' . esc_attr( $secondary_color ) . '">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-v'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="border-top: 1px solid ' . esc_attr( $primary_color ) . '; border-bottom: 3px solid ' . esc_attr( $secondary_color ) . '">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-w'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="border-top: 1px solid ' . esc_attr( $primary_color ) . '; border-bottom: 1px solid ' . esc_attr( $secondary_color ) . '">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php elseif( get_option( 'gp_theprint_widget_style' ) == 'style-x'): ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="border-top: 3px solid ' . esc_attr( $primary_color ) . '; border-bottom: 3px solid ' . esc_attr( $secondary_color ) . '">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php else: ?>
				<?php echo '<h4 class="gp-theprint-widget-title">';?>
					<?php echo '<span style="background-color: ' . esc_attr( $primary_color ) . ';">'; ?>
						<?php echo $title; ?>
					<?php echo '</span>'; ?>
				<?php echo '</h4>'; ?>
			<?php endif; ?>
		<?php endif; ?>

			<?php 
			// Start the query comment.
			$recent_comments = get_comments( 
				array(
					'number' => $number,
					'status' => 'approve',
					'type' => 'comment',
				) 
			); 
			?>

				<ul>

					 <?php foreach ( $recent_comments as $comment ) { ?>

						<li class="gp-theprint-recent-comment">
							<header class="comment-header">
								<div class="comment-avatar">
									<a href="<?php echo esc_url( get_permalink( $comment->comment_post_ID ) ); ?>">
			                        	<?php echo get_avatar( $comment->comment_author_email, '65' ); ?>
			                    	</a>
								</div>

								<h5 class="comment-name"><?php echo esc_attr( $comment->comment_author ); ?></h5>

								<h5 class="comment-title"><a class="comment-post" href="<?php echo esc_url( get_permalink( $comment->comment_post_ID ) );?>#comment-<?php echo esc_attr( $comment->comment_ID ); ?>"><?php echo get_the_title( $comment->comment_post_ID ); ?></a></h5>
							</header>

							<div class="comment-comment">
			                	<p><?php echo wp_trim_words( $comment->comment_content, 15 ); ?></p>
			               	</div>
						</li><!-- .gp-theprint-recent-comment -->

					<?php } ?>

				</ul>

		<?php 
		echo $args['after_widget'];
	}
	
	/* Update the widget settings. */

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title']           = strip_tags( $new_instance['title'] );
		$instance['number']          = strip_tags( $new_instance['number'] );
		$instance['primary_color']   = strip_tags( $new_instance['primary_color'] );
		$instance['secondary_color'] = strip_tags( $new_instance['secondary_color'] );
		return $instance;
	}

	/* Back-end widget form. */

	public function form( $instance ) {
		$defaults = array(
			'title' => esc_html__( 'Recent Comments', 'theprint' ),
			'number' => 4,
			'primary_color' => '',
			'secondary_color' => '',
		);
		$instance = wp_parse_args( (array) $instance, $defaults ); 
	?>

		<!-- Title -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'theprint' ); ?></label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" value="<?php echo esc_attr( $instance['title'] ); ?>" />
		</p>
		
		<!-- Number of comments: Text Input -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>"><?php esc_html_e( 'Number of comments:', 'theprint' ); ?></label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'number' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'number' ) ); ?>" value="<?php echo esc_attr( $instance['number'] ); ?>" />
		</p>

		<!-- Primary Color -->
		<p>  
            <label for="<?php echo esc_attr( $this->get_field_id( 'primary_color' ) ); ?>"><?php esc_html_e( 'Primary color:', 'theprint' ); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'primary_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'primary_color' ) ); ?>" value="<?php echo esc_attr( $instance['primary_color'] ); ?>" />                              
        </p>

        <!-- Secondary Color -->
		<p>  
            <label for="<?php echo esc_attr( $this->get_field_id( 'secondary_color' ) ); ?>"><?php esc_html_e( 'Secondary color:', 'theprint' ); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'secondary_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'secondary_color' ) ); ?>" value="<?php echo esc_attr( $instance['secondary_color'] ); ?>" />                              
        </p>

        <script type="text/javascript">
            jQuery(document).ready(function($){
                $('#<?php echo esc_attr( $this->get_field_id( 'primary_color' ) ); ?>').wpColorPicker();
            });

            jQuery(document).ready(function($){
                $('#<?php echo esc_attr( $this->get_field_id( 'secondary_color' ) ); ?>').wpColorPicker();
            });
        </script>
		
	<?php 
	} 

}

/* Register widget */
function register_gp_theprint_load_recent_comments() {
    register_widget( 'gp_theprint_load_recent_comments' );
}

add_action( 'widgets_init', 'register_gp_theprint_load_recent_comments' );