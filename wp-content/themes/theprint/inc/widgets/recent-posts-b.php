<?php
/**
 * Recent posts with style B.
 *
 *
 * @link https://codex.wordpress.org/Widgets_API#Developing_Widgets
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

class gp_theprint_load_recent_posts_b extends WP_Widget {
	
	/* Widget setup. */

	public function __construct() {
		parent::__construct(
			'gp_theprint_recent_posts_b', // Widget ID.
				esc_html__( '* WGP - Sidebar - Recent Posts B', 'theprint' ), // Widget name.
				array( 
					'classname' => 'gp-theprint-recent-posts-b', // Widget class.
					'description' => esc_html__( 'A widget that displays recent posts with style B.', 'theprint' ), // Widget description.
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

	public function widget($args, $instance) {

		extract( $args );
		$categories = $instance['categories'];
		if( $categories != '' ):
			$title = '<a href="'. esc_url ( get_category_link( $categories ) ) .'">'. apply_filters( 'widget_title', $instance['title'] ) .'</a>';
		else:
			$title = apply_filters( 'widget_title', $instance['title'] );
		endif;
		if( $categories == 'all' ):
			$title = apply_filters( 'widget_title', $instance['title'] );
		endif;
		$posts = $instance['posts'];
		$exclude_posts = $instance['exclude_posts'];
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
			// Start the query.
			$recent_posts_b = new WP_Query( array( 
				'cat' => $categories, 
				'showposts' => $posts, 
				'offset' => $exclude_posts,
			) ); 
			?>
				<?php if ( $recent_posts_b->have_posts() ): ?>
					<ul>
						<?php 
						// Start the loop.
						while( $recent_posts_b->have_posts() ): $recent_posts_b->the_post();
						?>

							<li class="gp-theprint-recent-post-b">
								<div class="featured-image">
									<?php if ( has_post_thumbnail() ): ?>
										<a href="<?php esc_url( the_permalink() ); ?>">
											<?php the_post_thumbnail( 'gp-theprint-355x220', array( 'alt' => the_title_attribute( 'echo=0' ) ) ); ?>
											
											<?php gp_theprint_entry_format(); ?>
										</a>
									<?php endif; ?>
								</div><!-- .featured-image -->

								<div class="entry-header">
									<h5 class="entry-title">
										<a href="<?php esc_url( the_permalink() ); ?>" rel="bookmark"><?php the_title(); ?></a>
									</h5>

									<p class="entry-meta">
										<span class="entry-time"><time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time></span>
									</p><!-- .entry-meta -->
								</div><!-- .entry-header -->
							</li><!-- .gp-theprint-recent-post-b -->

						<?php 
						// End the loop.
						endwhile; 
						?>
					</ul>
				<?php endif; ?>
			<?php 
			// Restore original Post Data.
			wp_reset_postdata();
			?>

		<?php 
		echo $args['after_widget'];
	}
	
	/* Update the widget settings. */

	public function update( $new_instance, $old_instance ) {
		$instance                    = $old_instance;
		$instance['title']           = strip_tags( $new_instance['title'] );
		$instance['categories']      = strip_tags( $new_instance['categories'] );
		$instance['posts']           = strip_tags( $new_instance['posts'] );
		$instance['exclude_posts']   = strip_tags( $new_instance['exclude_posts'] );
		$instance['primary_color']   = strip_tags( $new_instance['primary_color'] );
		$instance['secondary_color'] = strip_tags( $new_instance['secondary_color'] );
		return $instance;
	}

	/* Back-end widget form. */

	public function form( $instance ) {
		$defaults = array(
			'title' => esc_html__( 'Recent Posts', 'theprint' ),
			'categories' => 'all', 
			'posts' => 3,
			'exclude_posts' => 0,
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
		
		<!-- Category -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'categories' ) ); ?>"><?php esc_html_e( 'Filter by Category:', 'theprint' ); ?></label> 
			<select id="<?php echo esc_attr( $this->get_field_id( 'categories' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'categories' ) ); ?>" class="widefat categories">
				<option value='all' <?php if ( 'all' == $instance['categories'] ) echo 'selected="selected"'; ?>><?php esc_html_e( 'All categories', 'theprint' ); ?></option>
				<?php $categories = get_categories( 'hide_empty=0&depth=1&type=post' ); ?>
				<?php foreach( $categories as $category ) { ?>
				<option value='<?php echo esc_attr( $category->term_id ); ?>' <?php if ( $category->term_id == $instance['categories'] ) echo 'selected="selected"'; ?>><?php echo esc_attr( $category->cat_name ); ?></option>
				<?php } ?>
			</select>
		</p>
		
		<!-- Number of posts -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'posts' ) ); ?>"><?php esc_html_e( 'Number of posts:', 'theprint' ); ?></label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'posts' ) ); ?>" value="<?php echo esc_attr( $instance['posts'] ); ?>" />
		</p>
		
		<!-- Exclude posts -->
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'exclude_posts' ) ); ?>"><?php esc_html_e( 'Exclude posts:', 'theprint' ); ?></label>
			<input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'exclude_posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'exclude_posts' ) ); ?>" value="<?php echo esc_attr( $instance['exclude_posts'] ); ?>" />
		</p>

		<!-- Primary color -->
		<p>  
            <label for="<?php echo esc_attr( $this->get_field_id( 'primary_color' ) ); ?>"><?php esc_html_e( 'Primary color:', 'theprint' ); ?></label>
            <input type="text" class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'primary_color' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'primary_color' ) ); ?>" value="<?php echo esc_attr( $instance['primary_color'] ); ?>" />                              
        </p>

        <!-- Secondary color -->
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

/* Register widget. */

function register_gp_theprint_load_recent_posts_b() {
    register_widget( 'gp_theprint_load_recent_posts_b' );
}

add_action( 'widgets_init', 'register_gp_theprint_load_recent_posts_b' );