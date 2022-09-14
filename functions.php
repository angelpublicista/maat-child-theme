<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

function maat_blog_scripts(){
	wp_enqueue_style('maat-archive-blog-css', get_stylesheet_directory_uri() . "/assets/css/archive-blog.css" ,array(), null);
}

add_action('wp_enqueue_scripts','maat_blog_scripts');


require_once('inc/shortcodes/sc-heading-blog.php');