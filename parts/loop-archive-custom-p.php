<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
	<div class="entry-content" itemprop="text">
		<div class="card" data-equalizer-watch>
			<div class="card-divider">
				<?php the_title();?>
			</div>
			<div class="card-image">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="card-section">
				<?php
					the_content();
					$post_tags = get_the_tags();

					if ( $post_tags ) {
							foreach( $post_tags as $tag ) {
								echo '<span class="tags">' . $tag->name . '</span>';
							}
					}
				?>
			</div>
		</div>
	</div> <!-- end article section -->
</div> <!-- end article -->
