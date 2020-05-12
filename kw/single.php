<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kw
 */

get_header();
?>

<div id="tp-main" class="col-md-9">

	<?php

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/*
			* Include the Post-Type-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Type name) and that will be used instead.
			*/
			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			endwhile;

	?>
</div>
<!-- /.col-md-9 -->
<div id="tp-aside" class="col-md-3">
	<?php get_sidebar(); ?>
</div>
<!-- /#tp-aside .col-md-3 -->

<?php get_footer(); ?>
