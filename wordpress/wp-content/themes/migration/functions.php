<?php
/**
 * Migration functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 */


/**
 * Sets up theme defaults and registers the various WordPress features that
 * the Migration theme supports.
 *
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 */
function migration_setup() {

	// This theme styles the visual editor with editor-style.css to give it some niceties.
	add_editor_style();

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'migration' ) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 500, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'migration_setup' );


/**
 * Enqueues scripts and styles for front-end.
 */
function migration_scripts_styles() {
	global $wp_styles;

	/*
	 * Loads our main stylesheet.
	 */
  wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	

    wp_enqueue_script( 'angular', get_template_directory_uri().'/js/angular.min.js', array(), '', true );
    wp_enqueue_script( 'route', '//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js', array( ), '', true ); 
    wp_enqueue_script( 'bootstrapJs', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '', true );
       // Variables for app script
    wp_localize_script( 'main', 'mainJS',
       array(
         'partials' => trailingslashit(get_template_directory_uri() ) . 'partials/')
       );
  
}
    
add_action( 'wp_enqueue_scripts', 'migration_scripts_styles' );

/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

require_once('wp_bootstrap_navwalker.php');

function wpb_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'wpb' ),
		'id' => 'sidebar-1',
		'description' => __( 'The main sidebar appears on the left on each page except the front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
  
  register_sidebar( array(
		'name' => __( 'Content Sidebar', 'wpb' ),
		'id' => 'sidebar-2',
		'description' => __( 'The content sidebar appears on the right on each page except the front page template', 'wpb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-sm-6">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'wpb_widgets_init' );

