<?php
/**
 * Entry rating.
 * @package WordPress
 * @subpackage The_Print
 * @since The Print 1.0.0
 **/

if ( get_field('gp_theprint_enable_rating') == '1' ) { 
?>
	
	<div class="entry-rating">
		<div class="rating-score-box">
			<h3 class="rating-title">
				<?php
					// Rating title.
		            $rating_title = get_field( 'gp_theprint_rating_title' );
		            if ( $rating_title ) {
		                echo '' . esc_html( $rating_title ) . '';
		            } else {
		               	echo esc_html__( 'Our Rating', 'theprint' );
		            }
		        ?>
			</h3>

			<div class="score-description">
				<div class="score-box">
	           		<?php $show_total = apply_filters( 'gp_theprint_score_total', '' ); // Call total score calculation ?>
	            	<span class="score-total"><?php echo number_format( $show_total, 1, '.', '' ); ?></span>
	            	<span class="score-title"><?php esc_html_e('Overall Score', 'theprint'); ?></span>
	            </div><!-- .score-box -->

	            <?php
	            	// Rating note.
		            $rating_note = get_field('gp_theprint_rating_note');
		            if ( $rating_note ) {
		                echo '<p class="description">' . wp_kses_post( $rating_note ) . '</p>';
		            }
		        ?>
			</div><!-- .score-description -->		
		</div><!-- .rating-score-box -->

		<div class="rating-breakdown">
			<?php
				$score_output = get_field( 'gp_theprint_rating_module' );
				if( $score_output ) {
					foreach( $score_output as $row ) {
				?>
					<div class="item">
						<h4>
							<span class="total"><?php echo esc_attr( $row['gp_theprint_score_number'] ); ?></span>
							<?php echo esc_attr( $row['gp_theprint_score_label'] ); ?>
						</h4>

						<div class="score-outer">
							<div class="score-line" style="width:<?php echo esc_attr( $row['gp_theprint_score_number'] ); ?>0%;"></div>
						</div>
					</div>
				<?php 
					}
				} 
			?>
		</div><!-- .rating-breakdown -->

		<span style="display:none;" itemprop=itemReviewed itemscope itemtype="https://schema.org/Thing">
		<meta itemprop="name " content="<?php if ( $rating_title ) { echo '' . esc_html( $rating_title ) . ''; } else { echo esc_html__( 'Our Rating', 'theprint' ); } ?>">
		</span>

		<meta itemprop="reviewBody" content="<?php echo wp_kses_post( $rating_note ); ?>'">

	    <span style="display:none;" itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating">
		    <meta itemprop="worstRating" content="0" />
		    <meta itemprop="bestRating" content="10" />
		    <meta itemprop="ratingValue" content="<?php echo number_format( $show_total, 1, '.', '' ); ?>">
	    </span>
	</div><!-- .entry-rating -->

<?php } ?>