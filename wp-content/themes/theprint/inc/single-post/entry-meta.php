<?php
/**
 * Single entry meta.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 **/

?>

<p class="entry-meta">	
	<span class="slash first"><?php esc_html_e('By', 'theprint'); ?> </span>
	<span class="entry-author vcard author" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a rel="author" itemprop="url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span class="fn" itemprop="name"><?php the_author(); ?></span></a></span>
	<span class="slash"> <?php esc_html_e('on', 'theprint'); ?> </span>
	<span class="entry-time"><time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" itemprop="datePublished"><?php the_time( get_option( 'date_format' ) ); ?></time></span>
	<span class="slash"><?php esc_html_e( ' / ', 'theprint' ); ?></span>
	<span class="entry-comment"><?php comments_popup_link(esc_html__( '0 Comments', 'theprint' ), esc_html__( '1 Comment', 'theprint' ), '% '.esc_html__( 'Comments', 'theprint' )); ?></span>
</p>

<meta itemprop="datePublished" content="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"/>
<meta itemprop="dateModified" content="<?php the_modified_time('c'); ?>"/>

<div class="hide" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
  	<div class="hide" itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
      	<img src="<?php if ( get_option( 'gp_theprint_image_logo_upload' ) != '' ) : ?><?php echo esc_url( get_option( 'gp_theprint_image_logo_upload' ) ); ?><?php endif; ?>"/>

      	<meta itemprop="url" content="<?php if ( get_option( 'gp_theprint_image_logo_upload' ) != '' ) : ?><?php echo esc_url( get_option( 'gp_theprint_image_logo_upload' ) ); ?><?php endif; ?>">
    </div>

  	<meta itemprop="name" content="<?php bloginfo('name'); ?>">
</div>

<?php 
  	$gp_theprint_thumbnail_id = get_post_thumbnail_id( $post->ID );
	$gp_theprint_thumbnail_img = wp_get_attachment_image_src( $gp_theprint_thumbnail_id, 'full' );
	$gp_theprint_thumbnail_width = $gp_theprint_thumbnail_img[1];
	$gp_theprint_thumbnail_height = $gp_theprint_thumbnail_img[2]; 
?>
<div class="hide" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
	<img src="<?php the_post_thumbnail_url(); ?>"/>
	<meta itemprop="url" content="<?php the_post_thumbnail_url(); ?>">
	<meta itemprop="width" content="<?php echo esc_attr( $gp_theprint_thumbnail_width ); ?>">
	<meta itemprop="height" content="<?php echo esc_attr( $gp_theprint_thumbnail_height ); ?>">
</div>