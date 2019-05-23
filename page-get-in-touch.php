<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

	<div class="content">

		<div class="inner-content grid-x grid-margin-x grid-padding-x">
			<div class="max-container">
				<main class="main small-12 large-8 medium-8 cell" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'mypage-contact' ); ?>

					<?php endwhile; endif; ?>

				</main> <!-- end #main -->

				<?php get_sidebar(); ?>
			</div>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
