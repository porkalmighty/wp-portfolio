<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

	<div class="content">
		<main class="main">
			<section id="home" class="hero-banner inner-content grid-x grid-margin-x grid-padding-x">
				<div class="max-container">
					<div class="main small-12 large-8 medium-8 cell">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<?php get_template_part( 'parts/loop', 'page' ); ?>

							<?php endwhile; endif; ?>
					</div>
				</div>
			</section>
			<section id="works" class="inner-content grid-x grid-margin-x grid-padding-x">
				<div class="max-container">
					<div class="small-12 large-8 medium-8 cell">
						<?php
						$portfolio_params = array(
							'post_type' => 'portfolios',
							'posts_per_page' => -1,
						);

						$portfolio = new WP_Query($portfolio_params);
						?>
						<article class="grid-x equal" data-equalizer>
							<header class="cell">
								<h2><?php echo $portfolio->query_vars['post_type']; ?></h2>
							</header>
						<?php
							if ($portfolio->have_posts()):
									while ($portfolio->have_posts()):
										$portfolio->the_post(); ?>
										<div class="medium-2 cell" data-equalizer-watch>
											<?php get_template_part( 'parts/loop', 'archive-custom' );?>
										</div>
								<?php
									endwhile;
							endif;
							//reset WP_Query
							wp_reset_postdata();
							?>
						</article>
					</div>
				</div>
			</section>
			<section id="about" class="inner-content grid-x grid-margin-x grid-padding-x">
				<div class="max-container">
					<div class="small-12 lage-8 medium-8 cell">
						<!-- get about page -->
						<?php
							$about_params = array(
								'page_id' => 31,
							);

							$about_me = new WP_Query($about_params);

							if ($about_me->have_posts()):
								while ($about_me->have_posts()):
									$about_me->the_post();
									get_template_part( 'parts/loop', 'mypage' );
								endwhile;
							endif;
								//reset WP_Query
								wp_reset_postdata();
							?>
					</div>
				</div>
			</section>
			<section id="skills" class="inner-content grid-x grid-margin-x grid-padding-x">
				<div class="max-container">
					<div class="small-12 large-8 medium-8 cell">
						<?php
						$skills_params = array(
							'post_type' => 'skills',
							'posts_per_page' => -1,
							'order' => 'ASC'
						);

						$my_skills = new WP_Query($skills_params);
						?>
						<article class="grid-x equal" data-equalizer>
							<header class="cell">
								<h2><?php echo $my_skills->query_vars['post_type']; ?></h2>
							</header>
						<?php
							if ($my_skills->have_posts()):
									while ($my_skills->have_posts()):
										$my_skills->the_post(); ?>
										<div class="small-6 medium-2 cell" data-equalizer-watch>
											<?php get_template_part( 'parts/loop', 'archive-custom' );?>
										</div>
								<?php
									endwhile;
							endif;
							//reset WP_Query
							wp_reset_postdata();
							?>
						</article>
					</div>
				</div>
			</section>
		</main>
<?php get_footer(); ?>
</div> <!-- end #content -->
