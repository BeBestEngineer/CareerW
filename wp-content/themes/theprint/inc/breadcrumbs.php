<?php
/**
 * The template for breadcrumbs.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */

function gp_theprint_breadcrumbs() {
    global $post;
	
    echo '<div id="breadcrumbs" class="gp-theprint-breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#">';
	if (!is_front_page()) {
		echo '<span typeof="v:Breadcrumb"><a property="v:title" rel="v:url" href="';
		echo esc_url( home_url( '/' ) );
		echo '">';
		echo esc_html__( 'Homepage' , 'theprint' );
		echo '</a></span><span class="sep">&raquo;</span>';
		if ( is_category() ) {
			$categories = get_the_category();
			if ( ! empty( $categories ) ) {
			    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
			}
		} elseif ( is_day() ) {
			echo get_the_time('l');
		} elseif ( is_month() ) {
			echo get_the_time('F');
		} elseif ( is_year() ) {
			echo get_the_time('Y');
		} elseif ( is_tag() ) {
			printf( esc_html__( 'Tag Archives: %s', 'theprint' ), single_tag_title( '', false ) );
		} elseif ( is_author() ) {
			global $author;
   			$userdata = get_userdata($author);
			printf( esc_html__( 'Author Archives: %s', 'theprint' ),  $userdata->display_name );
		} elseif ( is_search() ) {
			printf( esc_html__( 'Search Results for: %s', 'theprint' ),  get_search_query() );
		} elseif ( is_single() ) {
			$categories = get_the_category();
			if ( ! empty( $categories ) ) {
			    echo '<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></span>';
			}

			if ( is_single() ) {
				echo '<span class="sep">&raquo;</span>';
				the_title();
			}
		} elseif ( is_attachment() ) {
			the_title();
		} elseif ( is_page() && $post->post_parent ) {
			$home = get_page(get_option('page_on_front'));
			for ($i = count($post->ancestors)-1; $i >= 0; $i--) {
				if (($home->ID) != ($post->ancestors[$i])) {
					echo '<a href="';
					echo esc_url( get_permalink($post->ancestors[$i]) ); 
					echo '">';
					echo get_the_title($post->ancestors[$i]);
					echo '</a><span class="sep">&raquo;</span>';
				}
			}
			echo the_title();
		} elseif (is_page()) {
			echo the_title();
		} elseif (is_404()) {
			echo "404";
		}
	} else {
		echo esc_html__( 'Homepage' , 'theprint' );
	}
	echo '</div>';
}