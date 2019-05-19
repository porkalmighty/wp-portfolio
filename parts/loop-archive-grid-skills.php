<?php
/**
 * The template part for displaying a grid of posts
 *
 * For more info: http://jointswp.com/docs/grid-archive/
 */

// Adjust the amount of rows in the grid
$grid_columns = 4; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="grid-x grid-margin-x grid-padding-x archive-grid" data-equalizer> <!--Begin Grid-->

<?php endif; ?>

		<!--Item: -->
		<div class="small-6 medium-3 large-3 cell panel" data-equalizer-watch>

			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

				<section class="featured-image" itemprop="text">
					<?php the_post_thumbnail(); ?>
				</section> <!-- end article section -->

				<section class="entry-content" itemprop="text">
					<?php the_content('<button class="tiny">' . __( 'Read more...', 'marko-portfolio' ) . '</button>'); ?>
				</section> <!-- end article section -->

			</article> <!-- end article -->

		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Grid -->

<?php endif; ?>
