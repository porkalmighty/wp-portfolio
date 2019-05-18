<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

	<div class="content">
		<div class="hero-banner inner-content grid-x grid-margin-x grid-padding-x">
			<div class="max-container">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'page' ); ?>

					<?php endwhile; endif; ?>
			</div>
		</div>
		<div class="inner-content grid-x grid-margin-x grid-padding-x">
			<div class="max-container">
				<main class="main small-12 large-8 medium-8 cell" role="main">
					<!-- get about page -->
					<?php
						$about_params = array(
							'page_id' => 31,
						);

						$about_me = new WP_Query($about_params);
					?>
						<?php if ($about_me->have_posts()) : while ($about_me->have_posts()) : $about_me->the_post(); ?>

								<?php
									get_template_part( 'parts/loop', 'mypage' );
								?>

							<?php endwhile; endif;
							//reset WP_Query
							wp_reset_postdata();
							?>
					</main> <!-- end #main -->

				<?php get_sidebar(); ?>
			</div>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
