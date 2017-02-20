<?php
/**
 * Reader functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Reader
 */

define("READER_CSS",get_template_directory_uri() . "/assets/css/");
define("READER_JS",get_template_directory_uri() . "/assets/js/");

// Re Define Meta Box 

define( 'RWMB_URL', trailingslashit( get_stylesheet_directory_uri() . '/lib/meta-box' ) );

define( 'RWMB_DIR', trailingslashit(  get_stylesheet_directory() . '/lib/meta-box' ) );

// Include the meta box script
require_once RWMB_DIR . 'meta-box.php';

require_once (get_template_directory().'/lib/metabox.php');

if ( ! function_exists( 'reader_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function reader_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Reader, use a find and replace
	 * to change 'reader' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'reader', get_template_directory() . '/languages' );

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

	add_image_size('reader_post_thumb','880', '410', true);
	add_image_size('full','880', '410', true);

	add_image_size( 'blog-thumb', '850', '260', false );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'reader' ),
	) );

	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'reader' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat' ) );

	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'reader_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
}
endif;
add_action( 'after_setup_theme', 'reader_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function reader_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'reader_content_width', 640 );
}
add_action( 'after_setup_theme', 'reader_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function reader_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'reader' ),
		'id'            => 'blog-sidebar',
		'description'   => esc_html__( 'Add Blog Sidebar Widgets here.', 'reader' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'reader_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function reader_scripts() {
	
	wp_enqueue_style( 'themify-icons',READER_CSS . "themify-icons.css" );
	wp_enqueue_style( 'font-awesome.min',READER_CSS . "font-awesome.min.css" );
	wp_enqueue_style( 'bootstrap.min',READER_CSS . "bootstrap.min.css" );
	wp_enqueue_style( 'magnific-popup',READER_CSS . "magnific-popup.css" );
	wp_enqueue_style( 'reader-theme',READER_CSS . "themes.css" );
	wp_enqueue_style( 'reader-theme-style',READER_CSS . "style.css" );
	wp_enqueue_style( 'reader-style', get_stylesheet_uri() );


	wp_enqueue_script( 'reader-jquery', READER_JS . "jquery-library.js", array(), '', true );
	wp_enqueue_script( 'modernizr.custom', READER_JS . "modernizr.custom.js", array(), '', true );
	wp_enqueue_script( 'reader-plugins', READER_JS . "plugins.js", array(), '', true );
	wp_enqueue_script( 'reader-main', READER_JS . "main.js", array(), '',true );
 	wp_enqueue_script( 'reader-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'reader-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'reader_scripts' );



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/* Bootstrap Navwalker */

require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';



// Post Meta Show/Hide 
if(!function_exists('reader_post_format_meta_script')){

	function reader_post_format_meta_script()
	{
		if(is_admin())
		{
			wp_register_script('readerpostmeta', get_template_directory_uri() .'/lib/adminjs/jw-post-meta.js');
			wp_enqueue_script('readerpostmeta');
		}
	}

	add_action('admin_enqueue_scripts','reader_post_format_meta_script');

}

add_filter('get_search_form', 'reader_search_form');
    
   function reader_search_form($form) {
   	$form = '<form role="search" class="search-form" method="get" action="' . home_url( '/' ) . '" >
   		<input class="search-field" type="text" name="s" id="s" value="' . get_search_query() . '" placeholder="Search" required>
   		
  	</form>';
  
 return $form;
 }

 /**
 * Registers an editor stylesheet for the theme.
 */
function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
 




///////// Pagination ////////////


if(!function_exists('reader_pagination')):

	function reader_pagination($pages = '', $range = 2)
{  
	$showitems = ($range * 1)+1;  

	global $paged;

	if(empty($paged)) $paged = 1;

	if($pages == '')
	{
		global $wp_query;
		$pages = $wp_query->max_num_pages;

		if(!$pages)
		{
			$pages = 1;
		}
	}   

	if(1 != $pages)
	{
		echo '<nav class="paging-navigation" role="page-navigation">';

		if($paged > 2 && $paged > $range+1 && $showitems < $pages){
			echo '<a href="'.get_pagenum_link(1).'" class="page-numbers">&laquo;</a>';
		}

		// if($paged > 1 && $showitems < $pages){ 
		// 	echo '<a href="' . previous_posts_link("Previous") . '" class="prev page-numbers pull-left" title="Previous"><i class="fa fa-chevron-left"></i></a>';
		// }

		for ($i=1; $i <= $pages; $i++)
		{
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
			{
				echo ($paged == $i)? "<a href='#' class='page-numbers active'>".$i."</a>":"<a href='".get_pagenum_link($i)."' class='page-numbers'>".$i."</a>";
			}
		}

		// if ($paged < $pages && $showitems < $pages){
		// 	echo '<a href="' . next_posts_link("Next") . '" class="next page-numbers pull-right" title="Next"><i class="fa fa-chevron-right"></i></a>';

		// }

		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages){
			echo '<a href="'.get_pagenum_link($pages).'" class="page-numbers">&raquo;</a>';
		}

		echo '</nav>';

	}
}

endif;