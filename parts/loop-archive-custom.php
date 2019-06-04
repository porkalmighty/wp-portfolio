<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<div class="entry-content" itemprop="text" data-tooltip tabindex="1" title="<?=the_title();?>" data-position="bottom" data-alignment="left">
		<?php the_post_thumbnail('full'); ?>
		<?php
			// display content
			the_content();
		?>
	</div> <!-- end article section -->
</div> <!-- end article -->
