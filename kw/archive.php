<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kw
 */

get_header();
?>

<div id="tp-main" class="col-md-9">

<?php
	if ( have_posts() ) :

		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/*
			* Include the Post-Type-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Type name) and that will be used instead.
			*/
			get_template_part( 'template-parts/content', 'excerpt' );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif;
?>
</div>
<!-- /.col-md-9 -->
<div id="tp-aside" class="col-md-3">
<?php get_sidebar(); ?>
</div>
<!-- /#tp-aside .col-md-3 -->

<?php get_footer(); ?>
