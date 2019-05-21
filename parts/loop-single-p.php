<?php
/**
 * Template part for displaying a single post
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h2 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h2>
  </header> <!-- end article header -->

    <section class="entry-content" itemprop="text">
			<div class="text-center">
				<?php the_post_thumbnail('full'); ?>
				<div class="stacked-for-small button-group">
					<?php if($gitlink = get_post_meta($post->ID, 'github_link', true)): ?>
				  	<a class="button" href="<?=$gitlink;?>" target="_blank"><i class="fab fa-github"></i> Github Repo</a>
					<?php endif;?>
					<?php if($weblink = get_post_meta($post->ID, 'website_link', true)): ?>
				  	<a class="button" href="<?=$weblink;?>" target="_blank"><i class="fas fa-link"></i> Visit Website</a>
					<?php endif;?>
				</div>
			</div>
			<?php the_content(); ?>
		</section> <!-- end article section -->

	<footer class="article-footer">
		<div class="cell tag__list">
			<?php
				$post_tags = get_the_tags();

				if ( $post_tags ) {
						foreach( $post_tags as $tag ) {
							echo '<span class="tags">' . $tag->name . '</span>';
						}
				}
			 ?>
		</div>
	</footer> <!-- end article footer -->

</article> <!-- end article -->
