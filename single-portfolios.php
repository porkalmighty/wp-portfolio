<?php
/**
 * The template for displaying single portfolio
 */

get_header(); ?>

<div class="content">

	<main class="main" role="main">

		<section class="inner-content grid-x grid-margin-x grid-padding-x portfolio">

			<div class="small-12 medium-8 large-8 cell">

				<div class="max-container">
					<?php echo do_shortcode('[flexy_breadcrumb]'); ?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'single-p' ); ?>

					<?php endwhile; else : ?>

						<?php get_template_part( 'parts/content', 'missing' ); ?>

					<?php endif; ?>

				</div>

			</div>

		</section> <!-- end #inner-content -->

	</main>

	<?php get_footer(); ?>

</div> <!-- end #content -->
