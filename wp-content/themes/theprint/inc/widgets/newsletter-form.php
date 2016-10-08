<?php
/**
 * Newsletter form widget.
 *
 *
 * @link https://codex.wordpress.org/Widgets_API#Developing_Widgets
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

class gp_theprint_load_newsletter_widget extends WP_Widget {

	/* Widget setup. */

	public function __construct() {
		parent::__construct(
			'gp_theprint_newsletter_widget', // Widget ID.
				esc_html__( '* WGP - Sidebar - Newsletter Form', 'theprint' ), // Widget name.
				array( 
					'classname' => 'gp-theprint-newsletter-widget', // Widget class.
					'description' => esc_html__( 'A widget that displays the newsletter form.' , 'theprint' ), // Widget description.
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
		$description = apply_filters( 'widget_text', $instance['description'] );
		$newsletter_code = $instance['newsletter_code'];
		$guarantee = $instance['guarantee'];
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
				
			<div class="gp-theprint-newsletter-widget">
				<p><?php echo wp_kses( $description, array( 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'hr' => array(), 'p' => array(), 'span' => array(), 'em' => array(), 'strong' => array(), 'b' => array(), 'ul' => array(), 'ol' => array(), 'li' => array() ) ); ?></p>
				
				<?php echo wp_kses( $newsletter_code, array( 'a' => array( 'href' => array(), 'title' => array() ), 'form' => array( 'action' => array(), 'method' => array(), 'id' => array(), 'name' => array(), 'class' => array(), 'target' => array(), 'novalidate' => array() ), 'input' => array( 'type' => array(), 'value' => array(), 'placeholder' => array(), 'onfocus' => array(), 'onblur' => array(), 'name' => array(), 'class' => array(), 'id' => array() ), 'button' => array( 'type' => array(), 'value' => array(), 'placeholder' => array(), 'name' => array(), 'class' => array(), 'id' => array() ) ) ); ?>
				
				<span class="guarantee"><?php echo esc_attr( $guarantee ); ?></span>
			</div>

		<?php
		echo $args['after_widget'];
	}

	/* Update the widget settings. */

	public function update( $new_instance, $old_instance ) {
		$instance                    = $old_instance;
		$instance['title']           = strip_tags( $new_instance['title'] );
		$instance['description']     = $new_instance['description'];
		$instance['newsletter_code'] = $new_instance['newsletter_code'];
		$instance['guarantee']       = strip_tags( $new_instance['guarantee'] );
		$instance['primary_color']   = strip_tags( $new_instance['primary_color'] );
		$instance['secondary_color'] = strip_tags( $new_instance['secondary_color'] );

		return $instance;
	}

	/* Back-end widget form. */

	public function form( $instance ) {
		$defaults = array(
			'title' => esc_html__( 'Newsletter Form', 'theprint' ),
			'description' => esc_html__( 'Explain to people why people should signup to your newsletter. Be as concise as possible, and very convincing.', 'theprint' ),
			'newsletter_code' => esc_html__( 'Enter your newsletter form code here.', 'theprint' ),
			'guarantee' => esc_html__( '100% Privacy. I will never spam you.', 'theprint' ),
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

		<!-- Description -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_html_e( 'Description:', 'theprint' ); ?></label>
			<textarea id="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" class="widefat" rows="4" cols="20"><?php echo wp_kses( $instance['description'], array( 'a' => array( 'href' => array(), 'title' => array() ), 'br' => array(), 'hr' => array(), 'p' => array(), 'span' => array(), 'em' => array(), 'strong' => array(), 'b' => array(), 'ul' => array(), 'ol' => array(), 'li' => array() ) ); ?></textarea>
		</p>

		<!-- Newsletter code -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'newsletter_code' ) ); ?>"><?php esc_html_e( 'Newsletter code:', 'theprint' ); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'newsletter_code' ); ?>" name="<?php echo $this->get_field_name( 'newsletter_code' ); ?>" class="widefat" rows="7" cols="20"><?php echo wp_kses( $instance['newsletter_code'], array( 'a' => array( 'href' => array(), 'title' => array() ), 'form' => array( 'action' => array(), 'method' => array(), 'id' => array(), 'name' => array(), 'class' => array(), 'target' => array(), 'novalidate' => array() ), 'input' => array( 'type' => array(), 'value' => array(), 'placeholder' => array(), 'onfocus' => array(), 'onblur' => array(), 'name' => array(), 'class' => array(), 'id' => array() ), 'button' => array( 'type' => array(), 'value' => array(), 'placeholder' => array(), 'name' => array(), 'class' => array(), 'id' => array() ) ) ); ?></textarea>
		</p>

		<!-- Guarantee -->
		<p>
			<label for="<?php echo $this->get_field_id( 'guarantee' ); ?>"><?php esc_html_e( 'Guarantee text:', 'theprint' ); ?></label>
			<textarea id="<?php echo $this->get_field_id( 'guarantee' ); ?>" name="<?php echo $this->get_field_name( 'guarantee' ); ?>" class="widefat" rows="4" cols="20"><?php echo $instance['guarantee']; ?></textarea>
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

function register_gp_theprint_load_newsletter_widget() {
    register_widget( 'gp_theprint_load_newsletter_widget' );
}

add_action( 'widgets_init', 'register_gp_theprint_load_newsletter_widget' );