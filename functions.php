<?php
require_once(get_theme_file_path('/inc/customizer.php'));
function cust_theme_setup() {
	load_theme_textdomain( 'customizer', get_template_directory_uri() . "/languages" );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tags' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'gallery',
		'caption',
		'comment-list'
	) );
	add_theme_support( 'custom-logo' );
	register_nav_menu( "top-menu", __( "Top Menu", "cust" ) );
}

add_action( 'after_setup_theme', 'cust_theme_setup' );

function cust_assets(){
	wp_enqueue_style('bootstrap-css','//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	wp_enqueue_style('fontawesome-css','//use.fontawesome.com/releases/v5.3.1/css/all.css');

	wp_enqueue_style('cust-main',get_stylesheet_uri(),null,time());
}
add_action('wp_enqueue_scripts','cust_assets');
