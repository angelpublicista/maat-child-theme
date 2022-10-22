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
	wp_enqueue_script('maar-blog-js', get_stylesheet_directory_uri() . "/assets/js/maat-blog.js",array(),"1.0",true);
    wp_enqueue_style('maat-single-blog-css', get_stylesheet_directory_uri() . "/assets/css/single-blog.css",array(), null);
	wp_enqueue_script('copyclipboard-js','https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.10/clipboard.min.js',array(),"2.0.10");
}

add_action('wp_enqueue_scripts','maat_blog_scripts');

function maat_resources_scripts(){
	wp_enqueue_style('maat-archive-recursos-css', get_stylesheet_directory_uri() . "/assets/css/archive-recursos.css" ,array(), null);
	wp_enqueue_style('maat-slick-css', get_stylesheet_directory_uri() . "/slick/slick.css" ,array(), null);
	wp_enqueue_style('maat-slick-theme-css', get_stylesheet_directory_uri() . "/slick/slick-theme.css" ,array(), null);
	wp_enqueue_style('maat-slick-remix-icons-css', "https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" ,array(), null);
	wp_enqueue_script('maat-recursos-js', get_stylesheet_directory_uri() . "/assets/js/maat-recursos.js",array(),"1.0",true);
	wp_enqueue_script('maat-slick-js', get_stylesheet_directory_uri() . "/slick/slick.min.js",array(),"1.8.1",true);
	
}

add_action('wp_enqueue_scripts','maat_resources_scripts');


add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif (is_tax()) { //for custom post types
        $title = sprintf(__('%1$s'), single_term_title('', false));
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    }
    return $title;
});

// Desactiva el editor de bloques en la gestión de widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

function dcms_agregar_nueva_zona_widgets() {

	register_sidebar( array(
		'name'          => 'Maat Sidebar Blog',
		'id'            => 'id-nueva-zona',
		'description'   => 'Descripción de la nueva Zona de Widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}

add_action( 'widgets_init', 'dcms_agregar_nueva_zona_widgets' );

require_once('inc/shortcodes/sc-heading-blog.php');
require_once('inc/shortcodes/sc-share-links.php');
require_once('inc/custom-post-types/cpt-recursos.php');
require_once('inc/taxonomies/tax-tipo-recurso.php');