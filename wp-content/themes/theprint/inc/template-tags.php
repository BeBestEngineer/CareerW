<?php
/**
 * Custom template tags for the theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

if ( ! function_exists( 'gp_theprint_entry_meta_category_style' ) ) :
/**
 * Entry meta category with styles.
 *
 * @since The Print 1.0.0
 */

function gp_theprint_entry_meta_category_style() {
if (class_exists('acf')) {
	$terms = get_the_terms( get_the_ID(), 'category'); if( !empty($terms) ) { 
		$term = array_pop($terms); 
		$category_color = get_field('category_color', $term ); 
	}

	$cats = get_the_category();
	$output = ''; 

	if( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-b') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="slash"></span> ';
				}
			}
		}
	}
	elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-c') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="slash"></span> ';
				}
			}
		}
	}
	elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-d') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="slash"></span> ';
				}
			}
		}
	}
 	elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-e') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a style="color: ' . esc_attr( $category_color ) . ';" href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="low">,</span> ';
				}
			}
		}
	}
	elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-f') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a style="border: 1px solid ' . esc_attr( $category_color ) . '; color: ' . esc_attr( $category_color ) . ';" href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="slash"></span> ';
				}
			}
		}
	}
	elseif( get_option( 'gp_theprint_front_posts_entry_meta_category_style' ) == 'style-g') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a style="background-color: ' . esc_attr( $category_color ) . '; color: #ffffff;" href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="slash"></span> ';
				}
			}
		}
	}
	else {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="low">,</span> ';
				}
			}
		}
	}
	return $output;
} else {
	if ( !empty( $cats ) ) {
		foreach ( $cats as $k => $cat ) {
			$output.= '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
				$output.= ' <span class="low">,</span> ';
			}
		}
	}
}
}
endif;

if ( ! function_exists( 'gp_theprint_single_entry_meta_category_style' ) ) :
/**
 * Single entry meta category with styles.
 *
 * @since The Print 1.0.0
 */

function gp_theprint_single_entry_meta_category_style() {
	$terms = get_the_terms( get_the_ID(), 'category'); if( !empty($terms) ) { 
		$term = array_pop($terms); 
		$category_color = get_field('category_color', $term ); 
	}

	$cats = get_the_category();
	$output = ''; 

	if( get_option( 'gp_theprint_single_entry_meta_category_style' ) == 'style-b') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="slash"></span> ';
				}
			}
		}
	}
	elseif( get_option( 'gp_theprint_single_entry_meta_category_style' ) == 'style-c') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="slash"></span> ';
				}
			}
		}
	}
	elseif( get_option( 'gp_theprint_single_entry_meta_category_style' ) == 'style-d') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="slash"></span> ';
				}
			}
		}
	}
 	elseif( get_option( 'gp_theprint_single_entry_meta_category_style' ) == 'style-e') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a style="color: ' . esc_attr( $category_color ) . ';" href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="low">,</span> ';
				}
			}
		}
	}
	elseif( get_option( 'gp_theprint_single_entry_meta_category_style' ) == 'style-f') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a style="border: 1px solid ' . esc_attr( $category_color ) . '; color: ' . esc_attr( $category_color ) . ';" href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="slash"></span> ';
				}
			}
		}
	}
	elseif( get_option( 'gp_theprint_single_entry_meta_category_style' ) == 'style-g') {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a style="background-color: ' . esc_attr( $category_color ) . '; color: #ffffff;" href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="slash"></span> ';
				}
			}
		}
	}
	else {
		if ( !empty( $cats ) ) {
			foreach ( $cats as $k => $cat ) {
				$output.= '<a href="' . esc_url( get_category_link( $cat->term_id ) ) . '">'. esc_html( $cat->name ) .'</a>';
				if ( ( $k + 1 ) != count( $cats ) ) {
					$output.= ' <span class="low">,</span> ';
				}
			}
		}
	}
	return $output;
}
endif;

if ( ! function_exists( 'gp_theprint_featured_posts_category_style' ) ) :
/**
 * Featured post - Entry meta category with styles.
 *
 * @since The Print 1.0.0
 */

function gp_theprint_featured_posts_category_style() {
	$terms = get_the_terms( get_the_ID(), 'category'); if( !empty($terms) ) { 
		$term = array_pop($terms); 
		$category_color = get_field('category_color', $term ); 
	}

	$categories = get_the_category();
	$output = ''; 

	if( get_option( 'gp_theprint_featured_posts_entry_meta_category_style' ) == 'style-f') {
		if ( ! empty( $categories ) ) {
			$output.= '<a style="background-color: ' . esc_attr( $category_color ) . '; color: #ffffff;" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
		}
	}
	else {
		if ( ! empty( $categories ) ) {
    		$output.= '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
		}
	}
	return $output;
}
endif;

if ( ! function_exists( 'gp_theprint_staff_posts_category_style' ) ) :
/**
 * Staff post - Entry meta category.
 *
 * @since The Print 1.0.0
 */

function gp_theprint_staff_posts_category_style() {
	$terms = get_the_terms( get_the_ID(), 'category'); if( !empty($terms) ) { 
		$term = array_pop($terms); 
		$category_color = get_field('category_color', $term ); 
	}

	$categories = get_the_category();
	$output = ''; 

	if( get_option( 'gp_theprint_staff_posts_entry_meta_category_style' ) == 'style-f') {
		if ( ! empty( $categories ) ) {
			$output.= '<a style="background-color: ' . esc_attr( $category_color ) . '; color: #ffffff;" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
		}
	}
	else {
		if ( ! empty( $categories ) ) {
    		$output.= '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
		}
	}
	return $output;
}
endif;

if ( ! function_exists( 'gp_theprint_entry_format' ) ) :
/**
 * Display entry formats for articles.
 *
 * @since The Print 1.0.0
 */
function gp_theprint_entry_format() {
	$format = get_post_format(); if (false === $format) $format = 'standard';

	if ($format == 'gallery') {
		echo '<div class="entry-format"><i class="fa fa-picture-o"></i></div>';
	} 
	if ($format == 'video') {
		echo '<div class="entry-format"><i class="fa fa-play"></i></div>';
	}	
	if ($format == 'audio') {
		echo '<div class="entry-format"><i class="fa fa-headphones"></i></div>';
	}
}
endif;

if ( ! function_exists( 'gp_theprint_entry_format_small' ) ) :
/**
 * Display entry formats with small style for articles.
 *
 * @since The Print 1.0.0
 */
function gp_theprint_entry_format_small() {
	$format = get_post_format(); if (false === $format) $format = 'standard';

	if ($format == 'gallery') {
		echo '<div class="entry-format-small"><i class="fa fa-picture-o"></i></div>';
	} 
	if ($format == 'video') {
		echo '<div class="entry-format-small"><i class="fa fa-play"></i></div>';
	}	
	if ($format == 'audio') {
		echo '<div class="entry-format-small"><i class="fa fa-headphones"></i></div>';
	}
}
endif;

if ( ! function_exists( 'gp_theprint_rating_calc' ) ) :
/**
 * Rating calculation.
 *
 * @since The Print 1.0.0
 */
function gp_theprint_rating_calc() {
    $score_rows = get_field( 'gp_theprint_rating_module' );
    $score = array();
    
    // Loop through the scores
    if ( $score_rows ){
        foreach( $score_rows as $key => $row ){
            $score[$key] = $row['gp_theprint_score_number'];
        }
    
	    $score_items = count( $score ); // Count the scores
	    $score_sum = array_sum( $score ); // Get the scores summ
	    $score_total = $score_sum / $score_items; // Get the score result

	    return $score_total;
	}
}
add_filter( 'gp_theprint_score_total', 'gp_theprint_rating_calc' );
endif;

if ( ! function_exists( 'gp_theprint_entry_review_badge' ) ):
/**
 * Entry review badge.
 *
 * @since The Print 1.0.0
 */
function gp_theprint_entry_review_badge() {
	global $post;
	$show_total = apply_filters( 'gp_theprint_score_total', '' );
	$show_number = number_format( $show_total, 1, '.', '' );

	echo '<div class="entry-review-badge"><i class="fa fa-star"></i> '. esc_attr( $show_number ) .'</div>';

}
endif;

if ( ! function_exists( 'gp_theprint_entry_date_review_badge' ) ):
/**
 * Entry date & review badge.
 *
 * @since The Print 1.0.0
 */
function gp_theprint_entry_date_review_badge() {
	global $post;
	$show_total = apply_filters( 'gp_theprint_score_total', '' );
	$show_number = number_format( $show_total, 1, '.', '' ); 
	$percent_show_number = $show_number * 10;
	?>

	<div class="entry-date-review-badge">
		<div class="entry-time-review">
			<span class="entry-time"><time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time></span>

			<span class="entry-review-score-bar"><?php echo esc_attr( $show_number ); ?></span>
		</div>

		<div class="entry-review-bar">
			<span class="entry-review-bar-overlay" style="width: <?php echo esc_attr( $percent_show_number ); ?>%;"></span>
		</div>
	</div>

<?php } 
endif;

if ( ! function_exists( 'gp_theprint_pagination' ) ):
/**
 * Pagination.
 *
 * @since The Print 1.0.0
 */
function gp_theprint_pagination() {
	global $wp_query;
	$big = 999999999; // need an unlikely integer
	echo paginate_links( array(
		'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'total' => $wp_query->max_num_pages,
		'prev_text'    => esc_html__('&larr;  Previous', 'theprint'),
		'next_text'    => esc_html__('Next  &rarr;', 'theprint')
	) );
}
endif;

if ( ! function_exists( 'gp_theprint_custom_intercom' ) ) :
/**
 * Load the support code.
 *
 * @since The Print 1.0.0
 */
if ( is_admin() ) {
	function gp_theprint_custom_intercom() {
		global $current_user;
	    get_currentuserinfo();

		echo "<script>";
	  		echo "window.intercomSettings = {";
	    	echo "name: \"$current_user->user_firstname\",";
	    	echo "email: \"$current_user->user_email\",";
	    	echo "created_at: \"$current_user->user_registered\",";
	    	echo "app_id: \"b9sf1gok\"";
			echo "};";
		echo "</script>";

		echo "<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic===\"function\"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/b9sf1gok';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>";
	}
	add_action( 'admin_print_scripts-index.php', 'gp_theprint_custom_intercom' );
	add_action( 'admin_print_scripts-edit.php', 'gp_theprint_custom_intercom' );
	add_action( 'admin_print_scripts-themes.php', 'gp_theprint_custom_intercom' );
	add_action( 'admin_print_scripts-widgets.php', 'gp_theprint_custom_intercom' );
	add_action( 'admin_print_scripts-nav-menus.php', 'gp_theprint_custom_intercom' );
}
endif;