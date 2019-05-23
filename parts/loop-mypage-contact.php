<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<div class="grid-x contact">
		<section class="entry-content cell small-12 medium-6" itemprop="text">
			<header class="article-header">
				<h2 class="page-title"><?php the_title(); ?></h2>
			</header> <!-- end article header -->
			<?php the_content(); ?>
		</section> <!-- end article section -->
		<section class="entry-content cell small-12 medium-6">
			<?php
			$contact_form = get_post_meta($post->ID, 'contact_form', true);
				echo do_shortcode($contact_form);
			?>
		</section>
	</div>
</article> <!-- end article -->
