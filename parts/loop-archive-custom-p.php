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
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
			</div>
			<div class="card-image">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full'); ?></a>
			</div>
			<div class="card-section">
				<?php
					the_excerpt();
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
