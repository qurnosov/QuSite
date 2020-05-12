<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kw
 */

?>

<div class="tp-catpost">
	<div class="tp-post-header">
		<div class="tp-post-cat">
			
			<?php
				$post_categories = get_post_primary_category($post->ID, 'category'); 
				$primary_category = $post_categories['primary_category'];
				echo '<a href="/'. $primary_category->taxonomy .'/'. $primary_category->slug .'">' . $primary_category->name . '</a>';
			?>
		</div>
		<!-- /.tp-post-cat -->
		<div class="tp-post-time">
			<i class="fas fa-clock"></i> <div class="d-none d-md-inline">Время чтения:</div> <?php echo reading_time(); ?>
		</div>
		<!-- /.tp-post-time -->
		<div class="tp-post-views">
		</div>
		<!-- /.tp-post-views -->
		<div class="tp-post-label">
			<?php
				if ( is_sticky() && is_home() && ! is_paged() ) {
					printf( '<span class="sticky-post">%s</span>', _x( 'Реклама', 'post', 'kw' ) );
				}
			?>
		</div>
		<!-- /.tp-post-label -->
	</div>
	<!-- /.tp-post-header -->
	<div class="tp-post-cap">
		<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' ); ?>
	</div>
	<!-- /.tp-post-cap -->
	<div class="tp-post-desc">
		<?php the_excerpt(); ?>
	</div>
	<!-- /.tp-post-desc -->
	<div class="tp-post-image">
		<?php kw_post_thumbnail(); ?>
	</div>
	<!-- /.tp-post-image -->
	<div class="tp-post-footer">
		<i class="fas fa-eye"></i> <?php echo get_post_meta ($post->ID,'views',true); ?>
	</div>
	<!-- /.tp-post-footer -->
</div>
<!-- /.tp-catpost -->
