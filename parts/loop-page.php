<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">
		<h2 class="page-title"><?php if(!is_front_page()): the_title(); endif;?></h1>
	</header> <!-- end article header -->

    <section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
		</section> <!-- end article section -->

	<footer class="article-footer">
		<section class="entry-content section-links">
			<?php if(get_post_meta($post->ID, 'cta_works', true)):?>
				<a href="#works" class="button"> I'm interested, whatcha got?</a>
			<?php endif; ?>
			<?php if(get_post_meta($post->ID, 'cta_contact', true)):?>
				<a href="#contact" class="button"> I want to contact you</a>
			<?php endif; ?>
		</section>
	</footer>
	<!-- end article footer -->

	<?php //comments_template(); ?>

</article> <!-- end article -->
