<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kw
 */

?>

<div class="tp-single">
	<div class="tp-single-header">
		<div class="tp-single-cat">
			<?php
				$post_categories = get_post_primary_category($post->ID, 'category'); 
				$primary_category = $post_categories['primary_category'];
				echo '<a href="/'. $primary_category->taxonomy .'/'. $primary_category->slug .'">' . $primary_category->name . '</a>';
			?>
		</div>
		<!-- /.tp-single-cat -->
		<div class="tp-single-time">
			<i class="fas fa-clock"></i> <div class="d-none d-md-inline">Время чтения:</div> <?php echo reading_time(); ?>
		</div>
		<!-- /.tp-single-time -->
		<div class="tp-single-views">
			<i class="fas fa-eye"></i> <?php echo get_post_meta ($post->ID,'views',true); ?>
		</div>
		<!-- /.tp-single-views -->
	</div>
	<!-- /.tp-single-header -->
	<div class="tp-single-title mt-2">
		<?php the_title( '<h1>', '</h1>' ); ?>
	</div>
	<!-- /.tp-single-title -->
	<div class="tp-single-image">
		<?php kw_post_thumbnail(); ?>
	</div>
	<!-- /.tp-single-image -->
	<div class="tp-single-content">
		<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kw' ),
					'after'  => '</div>',
				)
			);
		?>
		
		<div class="tp-single-share">
			<div class="tp-share-title">Поделитесь знаниями!</div>
			<!-- /.tp-share-title -->
			<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,moimir,twitter,viber,whatsapp,telegram"></div>
		</div>
		<!-- /.tp-single-share -->
	</div>
	<!-- /.tp-single-content -->
</div>
<!-- /.tp-single -->
