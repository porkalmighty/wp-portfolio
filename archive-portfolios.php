<?php
/**
 * Displays archive pages if a speicifc template is not set.
 * 
 * For more info: https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header(); ?>

	<div class="content">

		<main class="main" role="main">

			<section id="portfolio" class="inner-content grid-x grid-margin-x grid-padding-x" data-equalizer data-equalize-on-stack="true">

					<div class="max-container">
						<?php echo do_shortcode('[flexy_breadcrumb]'); ?>
						<div class="small-12 medium-8 large-8 cell">

							<article class="grid-x equal">

								<header class="cell">
									<h2 class="page-title"><?php the_archive_description('<div class="taxonomy-description">', '</div>');?></h2>
								</header>

								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<!-- To see additional archive styles, visit the /parts directory -->

								<div class="medium-4 cell">

									<?php get_template_part( 'parts/loop', 'archive-custom-p' );?>

								</div>

							<?php endwhile; ?>

								<div class="cell">

									<?php joints_page_navi(); ?>

								</div>
							<?php else : ?>

								<?php get_template_part( 'parts/content', 'missing' ); ?>

							<?php endif; ?>

							</article>

						</div>

					</div>

			</section> <!-- end #inner-content -->

		</main>

<?php get_footer(); ?>

</div> <!-- end #content -->
