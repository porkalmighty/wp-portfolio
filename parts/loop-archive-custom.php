<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<div class="entry-content" itemprop="text">
		<?php the_post_thumbnail('full'); ?>
		<?php
			// the_title();
			the_content();
		?>
	</div> <!-- end article section -->
</div> <!-- end article -->
