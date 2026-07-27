<?php
/**
 * Starizo Theme functions and definitions
 */

if ( ! defined( 'STARIZO_VERSION' ) ) {
	define( 'STARIZO_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function starizo_scripts() {
	wp_enqueue_style( 'starizo-style', get_stylesheet_uri(), array(), STARIZO_VERSION );

    // Enqueue Tailwind CSS (from dist/style.css after vite build, assuming dist/assets directory)
    // Actually, we'll just enqueue the dist CSS once Vite builds it.
    // For now, let's enqueue the src/style.css for dev or the dist CSS if it exists.
    $dist_css_path = get_template_directory() . '/dist/style.css';
    if ( file_exists( $dist_css_path ) ) {
        wp_enqueue_style( 'starizo-tailwind', get_template_directory_uri() . '/dist/style.css', array(), filemtime($dist_css_path) );
    }
}
add_action( 'wp_enqueue_scripts', 'starizo_scripts' );

/**
 * Register Custom Post Types
 */
function starizo_register_post_types() {

	// Product CPT
	$product_args = array(
		'labels' => array(
			'name' => 'Products',
			'singular_name' => 'Product',
			'menu_name' => 'Products',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Product',
			'edit_item' => 'Edit Product',
			'new_item' => 'New Product',
			'view_item' => 'View Product',
			'search_items' => 'Search Products',
			'not_found' => 'No products found',
			'not_found_in_trash' => 'No products found in Trash',
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'products'),
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		'menu_icon' => 'dashicons-cart',
	);
	register_post_type('product', $product_args);

	// Job / Careers CPT
	$job_args = array(
		'labels' => array(
			'name' => 'Jobs',
			'singular_name' => 'Job',
			'menu_name' => 'Careers',
			'add_new' => 'Add New',
			'add_new_item' => 'Add New Job',
			'edit_item' => 'Edit Job',
			'new_item' => 'New Job',
			'view_item' => 'View Job',
			'search_items' => 'Search Jobs',
			'not_found' => 'No jobs found',
			'not_found_in_trash' => 'No jobs found in Trash',
		),
		'public' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'careers'),
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-businessman',
	);
	register_post_type('job', $job_args);

}
add_action( 'init', 'starizo_register_post_types' );

/**
 * Setup Theme features
 */
function starizo_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'starizo' ),
		'footer'  => esc_html__( 'Footer Menu', 'starizo' ),
	) );
}
add_action( 'after_setup_theme', 'starizo_setup' );
