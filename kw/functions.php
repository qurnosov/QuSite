<?php
/**
 * kw functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kw
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kw_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kw_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kw, use a find and replace
		 * to change 'kw' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kw', get_template_directory() . '/languages' );

		// Подключаем поддержку постов
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 825, 9999 );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'kw' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'kw_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'kw_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kw_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'kw_content_width', 640 );
}
add_action( 'after_setup_theme', 'kw_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kw_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kw' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kw' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kw_widgets_init' );

/*
// Отключаем стандартный jQuery и подключаем с сервера CDN Google
function my_jquery() {
	wp_deregister_script( 'jquery-core' );
}    
add_action( 'wp_enqueue_scripts', 'my_jquery' );
*/

/**
 * Enqueue scripts and styles.
 */
function kw_scripts() {
	wp_enqueue_style( 'kw-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'kw-style', 'rtl', 'replace' );

	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.min.css', false, null );

	wp_enqueue_script( 'script-one', get_template_directory_uri() . '/js/scripts.min.js', array(), null, true );

	wp_enqueue_script( 'script-two', 'https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js', array(), null, true );
	wp_enqueue_script( 'script-three', 'https://yastatic.net/share2/share.js', array(), null, true );

	wp_enqueue_script( 'kw-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'kw-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Добавляем атрибут async к скрипту с id `script-three`
	add_filter( 'script_loader_tag', 'change_my_script', 10, 3 );
	function change_my_script( $tag, $handle, $src ){

		if( 'script-three' === $handle ){
			return str_replace( ' src', ' async src', $tag );
			// return str_replace( ' src', ' defer src', $tag );
		}

		return $tag;
	}

}
add_action( 'wp_enqueue_scripts', 'kw_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Удаляем классы у пунктов верхнего меню и заменяем на свои
add_filter( 'nav_menu_css_class', '__return_empty_array' );
add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );

function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
	$classes[] = 'nav-item';

	return $classes;
}

// Добавляем классы ссылкам
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) { 
	if ( $item->current ) {
		$atts['class'] .= 'nav-link active';
	} else {
		$atts['class'] .= 'nav-link';
	}

	return $atts;
}

// Убираем слово "Рубрика"
add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
function artabr_remove_name_cat( $title ){
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	}
	return $title;
}

// Проверяем есть ли в рубрике подкатегории
function check_if_category_has_child () {
 
	$term = get_queried_object();

	$children = get_terms( $term->taxonomy, array(
	'parent'    => $term->term_id,
	'hide_empty' => false
	) );

	return $children;
}

// Отключаем сообщение об ошибках Wordpress
add_filter('login_errors',create_function('$a', "return null;"));

// Удаляем поле "Сайт" из формы комментирования
function remove_url_from_comments($fields) {
		unset($fields['url']);
		return $fields;
}

add_filter('comment_form_default_fields', 'remove_url_from_comments');

// Удаляем лишние ссылки
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'profile_link' );
// remove_action( 'wp_head', 'rel_canonical' );
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );

// URL в обычный текст
function strip_tags_filter($text) {
	return strip_tags($text);
}

add_filter('pre_comment_content','strip_tags_filter');
add_filter('comment_excerpt','strip_tags_filter');
add_filter('comment_text','strip_tags_filter');
add_filter('comment_text_rss','strip_tags_filter');

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Удаляем jQuery Migrate
function isa_remove_jquery_migrate( &$scripts ) {
	if( !is_admin() ) {
	$scripts->remove( 'jquery' );
	$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
	}
}
add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );

// Удаляем замену двух тире в заголовках
remove_filter('the_title', 'wptexturize');


/* Подсчет количества посещений страниц
---------------------------------------------------------- */
add_action('wp_head', 'kama_postviews');
function kama_postviews() {

/* ------------ Настройки -------------- */
$meta_key       = 'views';  // Ключ мета поля, куда будет записываться количество просмотров.
$who_count      = 0;            // Чьи посещения считать? 0 - Всех. 1 - Только гостей. 2 - Только зарегистрированных пользователей.
$exclude_bots   = 1;            // Исключить ботов, роботов, пауков и прочую нечесть :)? 0 - нет, пусть тоже считаются. 1 - да, исключить из подсчета.

global $user_ID, $post;
	if(is_singular()) {
		$id = (int)$post->ID;
		static $post_views = false;
		if($post_views) return true; // чтобы 1 раз за поток
		$post_views = (int)get_post_meta($id,$meta_key, true);
		$should_count = false;
		switch( (int)$who_count ) {
			case 0: $should_count = true;
				break;
			case 1:
				if( (int)$user_ID == 0 )
					$should_count = true;
				break;
			case 2:
				if( (int)$user_ID > 0 )
					$should_count = true;
				break;
		}
		if( (int)$exclude_bots==1 && $should_count ){
			$useragent = $_SERVER['HTTP_USER_AGENT'];
			$notbot = "Mozilla|Opera"; //Chrome|Safari|Firefox|Netscape - все равны Mozilla
			$bot = "Bot/|robot|Slurp/|yahoo"; //Яндекс иногда как Mozilla представляется
			if ( !preg_match("/$notbot/i", $useragent) || preg_match("!$bot!i", $useragent) )
				$should_count = false;
		}

		if($should_count)
			if( !update_post_meta($id, $meta_key, ($post_views+1)) ) add_post_meta($id, $meta_key, 1, true);
	}
	return true;
}

// Подсчет времени чтения поста
function reading_time() {
	$content = get_post_field( 'post_content', $post->ID );
	$word_count = str_word_count( strip_tags( $content ) );
	$readingtime = ceil($word_count / 200);
	if ($readingtime == 1) {
	$timer = " мин.";
	} else {
	$timer = " мин.";
	}
	$totalreadingtime = $readingtime . $timer;
	return $totalreadingtime;
}

// Определяем главную категорию поста, если категорий несколько. Работает с Yoast SEO
function get_post_primary_category($post_id, $term='category', $return_all_categories=false){
	$return = array();

	if (class_exists('WPSEO_Primary_Term')){
			// Show Primary category by Yoast if it is enabled & set
			$wpseo_primary_term = new WPSEO_Primary_Term( $term, $post_id );
			$primary_term = get_term($wpseo_primary_term->get_primary_term());

			if (!is_wp_error($primary_term)){
					$return['primary_category'] = $primary_term;
			}
	}

	if (empty($return['primary_category']) || $return_all_categories){
			$categories_list = get_the_terms($post_id, $term);

			if (empty($return['primary_category']) && !empty($categories_list)){
					$return['primary_category'] = $categories_list[0];  //get the first category
			}
			if ($return_all_categories){
					$return['all_categories'] = array();

					if (!empty($categories_list)){
							foreach($categories_list as &$category){
									$return['all_categories'][] = $category->term_id;
							}
					}
			}
	}

	return $return;
}
 
// СПРЯЧЕМ ИМЕЮЩИЕСЯ УВЕДОМЛЕНИЯ
function hide_admin_notices() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action('admin_menu','hide_admin_notices');

