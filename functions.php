<?php
/**
 * _s functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! function_exists( '_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

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
	add_image_size('slider_img', 1024, 360, true);
	add_image_size( 'wordpress-thumbnail', 400, 320, false );

	function new_excerpt_more($more)
  {
    global $post;
    return '...<a class="excerpt" href="'  . get_permalink($post->ID) . '"></a>';
  }

  add_filter('excerpt_more' , 'new_excerpt_more');

  function blog_excerpt_length($length){
    return 100;
  }

  add_action('excerpt_length' , 'blog_excerpt_length' ,999);



	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', '_s' ),
	) );
	register_nav_menus( array(
		'footer_menu' => esc_html__( 'Foter Menu', '_s' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
 
function _s_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer Widget',
		'id'            => 'footer_widget',
		'description'   => esc_html__( 'Add widgets here.', '_s' ),
		'before_widget' => '<div class="col-lg-3"><div class="widget footer_widget">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', '_s_widgets_init' );
function latest_post() {
	register_sidebar( array(
		'name'          => 'Latest Post',
		'id'            => 'latest_post_widget',
		'description'   => esc_html__( 'Populate this widget with latest post', '_s' ),
		'before_widget' => '<div class="widget link-list">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'latest_post' );


function used_tags() {
	register_sidebar( array(
		'name'          => 'Tags',
		'id'            => 'tags',
		'description'   => esc_html__( 'Populate this widget with latest post', '_s' ),
		'before_widget' => '<div class="widget link-list">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'used_tags' );
function catagories() {
	register_sidebar( array(
		'name'          => 'Catagories',
		'id'            => 'catagories',
		'description'   => esc_html__( 'Populate this widget with latest post', '_s' ),
		'before_widget' => '<div class="widget link-list">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="widgetheading">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'catagories' );


/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	wp_enqueue_style( '_s-stylefive', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( '_s-styleone', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( '_s-styletwo', get_template_directory_uri() . '/css/fancybox/jquery.fancybox.css' );
	wp_enqueue_style( '_s-stylefour', get_template_directory_uri() . '/css/flexslider.css' );
	wp_enqueue_style( '_s-styledkajsdklfas', get_template_directory_uri() . '/skins/default.css' );
	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '20151215', true );
	wp_enqueue_script( '_s-navigationone', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array('jquery'), '', true );
	wp_enqueue_script( '_s-navigationtwo', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( '_s-navigationthree', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), '', true );
	wp_enqueue_script( '_s-navigationfour', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array('jquery'), '', true );
	wp_enqueue_script( '_s-navigationfive', get_template_directory_uri() . '/js/google-code-prettify/prettify.js', array('jquery'), '', true );
	wp_enqueue_script( '_s-navigationsix', get_template_directory_uri() . '/js/portfolio/jquery.quicksand.js', array('jquery'), '', true );
	wp_enqueue_script( '_s-navigationseven', get_template_directory_uri() . '/js/portfolio/setting.js', array('jquery'), '', true );
	wp_enqueue_script( '_s-navigationeight', get_template_directory_uri() . '/js/jquery.flexslider.js', array('jquery'), '', true );
	wp_enqueue_script( '_s-navigationnine', get_template_directory_uri() . '/js/animate.js', array('jquery'), '', true );
	wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );

	wp_enqueue_script( '_s-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script( '_s-navigationele', get_template_directory_uri() . '/skins/default.css', array('jquery'), '', true );
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
include_once('inc/shortcodes.php');
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