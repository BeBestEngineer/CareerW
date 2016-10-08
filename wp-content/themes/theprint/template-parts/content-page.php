<?php
/**
 * The template used for displaying page content.
 *
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 */
?>

<article <?php post_class('entry-page'); ?> itemscope="itemscope" itemtype="http://schema.org/CreativeWork">	
	<?php echo gp_theprint_breadcrumbs(); ?>

	<header class="entry-header">
		<h1 class="entry-title" itemprop="headline"><?php the_title(); ?></h1>

		<p class="entry-meta hide">
			<span class="entry-author vcard author" itemprop="author" itemscope="itemscope" itemtype="http://schema.org/Person"><a class="fn" rel="author" itemprop="url" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><span itemprop="name"><?php the_author(); ?></span></a></span>
			<span class="entry-time"><time class="entry-date published" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>" itemprop="datePublished"><?php the_time( get_option( 'date_format' ) ); ?></time></span>
		</p>
	</header><!-- .entry-header -->

	<div class="entry-content" itemprop="text">
		<?php the_content(); ?>

		<?php 
			// Link pages.
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'theprint' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php 
	// Comments.
	if ( comments_open() || get_comments_number() ) { comments_template(); } 
	?>
</article><!-- .hentry -->