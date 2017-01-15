<?php
/**
 * This is the custom post type single template. If you edit the custom post type name,
 * you have to change the name of this template to reflect that change.
 *
 * For example, if your custom post type is called "register_post_type( 'bookmarks')",
 * then your template name should be single-bookmarks.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates
 */

get_header(); ?>
			
<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns first" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    					
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>