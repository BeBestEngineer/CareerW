<?php
/**
 * The template for displaying the mega menu.
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 **/

/* Start Menu Walker */
class gp_theprint_mega_menu extends Walker_Nav_Menu {
		
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul class=\"sub-links\">\n";
    }
	
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
	
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
        $args = (object) $args;
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
        $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
		
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		
        $item_output = $args->before;

        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		
		if ( 'category' == $item->object ) {
			$item_output  .= '<div class="sub-menu">';
		}

        $item_output .= $args->after;

		if ( $depth == 0 && $item->object == 'category' ) {
				
			$item_output .= '<ul class="sub-posts">';
								
				global $post;
				$menuposts = get_posts( array( 'posts_per_page' => 4, 'category' => $item->object_id ) );
					
				foreach( $menuposts as $post ):
					
					$post_title = get_the_title();
					$post_link = get_permalink();
					$post_date = get_the_date( get_option('date_format') );
					$post_image = wp_get_attachment_image_src( get_post_thumbnail_id(), "gp-theprint-355x220" );
						
					if ( $post_image != '') {
						$menu_post_image = '<img src="' . $post_image[0]. '" alt="' . $post_title . '" width="' . $post_image[1]. '" height="' . $post_image[2]. '" />';
					}
						
					$item_output .= '
							<li>
								<div class="featured-image">
									<a class="featured-image-link" href="'  .$post_link . '">' . $menu_post_image . '</a>
								</div>

								<h5><a class="entry-title" href="' . $post_link . '">' . $post_title . '</a></h5>
								
								<p class="entry-meta">' . $post_date . '</p>
							</li>';
						
				endforeach;

				wp_reset_postdata();
					
			$item_output .= '</ul>';
				
		}
		
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
	
    function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		
		if ( 'category' == $item->object ){
			$output .= "</div>\n";
		}
		
		$output .= "</li>\n";
    }
	
}