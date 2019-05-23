<?php
/**
 * The template for The home page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>

	<div class="content">
		<main class="main">
			<?php
			// check if the device is mobile or desktop
			$device = wp_is_mobile() ? "isMobile" : "isDesktop"; ?>
			<section id="home" class="hero-banner inner-content grid-x grid-margin-x grid-padding-x <?$device;?>">
				<?php if($device == "isDesktop"): ?>
					<!--
						video background:
						reference material: https://slicejack.com/fullscreen-html5-video-background-css/
					-->
					<video loop muted autoplay poster="<?php the_post_thumbnail('full'); ?>" class="fullscreen__video">
						<source src="<?php bloginfo('template_directory'); ?>/assets/videos/coding/code.webm" type="video/webm">
			      <source src="<?php bloginfo('template_directory'); ?>/assets/videos/coding/code.mp4" type="video/mp4">
						<source src="<?php bloginfo('template_directory'); ?>/assets/videos/coding/code.ogv" type="video/ogg">
					</video>
				<?php endif; ?>
				<div class="max-container">
					<div class="main small-12 large-8 medium-8 cell">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php get_template_part( 'parts/loop', 'page' ); ?>
							<?php endwhile; endif; ?>
					</div>
				</div>
			</section>
			<section id="works" class="inner-content grid-x grid-margin-x grid-padding-x" data-equalizer data-equalize-on-stack="true">
				<div class="max-container">
					<div class="small-12 large-8 medium-8 cell">
						<?php
						$portfolio_params = array(
							'post_type' => 'portfolios',
							'posts_per_page' => 3,
						);

						$portfolio = new WP_Query($portfolio_params);
						?>
						<article class="grid-x equal">
							<header class="cell">
								<h2><?php echo $portfolio->query_vars['post_type'];	?></h2>
							</header>
						<?php
							if ($portfolio->have_posts()):
									while ($portfolio->have_posts()):
										$portfolio->the_post(); ?>
										<div class="medium-4 cell">
											<?php get_template_part( 'parts/loop', 'archive-custom-p' );?>
										</div>
								<?php
									endwhile;
							endif;?>
							<div class="cell text-center">
								<?php echo sprintf('<a class="button" href="/%s">View More</a>', $portfolio->query_vars['post_type']);?>
							</div>
							<?php
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
			<section id="contact" class="inner-content grid-x grid-margin-x grid-padding-x">
				<div class="max-container">
					<div class="small-12 large-8 medium-8 cell">
						<?php
						$contact_params = array(
							'page_id' => 173,
						);

						$contact = new WP_Query($contact_params);

						if ($contact->have_posts()):
							while ($contact->have_posts()):
								$contact->the_post();
								get_template_part( 'parts/loop', 'mypage-contact' );
							endwhile;
						endif;
							//reset WP_Query
							wp_reset_postdata();
						?>
					</div>
				</div>
			</section>
		</main>
<?php get_footer(); ?>
</div> <!-- end #content -->
