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
		'has_archive' => false,
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
		'footer_products'  => esc_html__( 'Footer Products Menu', 'starizo' ),
		'footer_about'  => esc_html__( 'Footer About Menu', 'starizo' ),
		'footer_partner'  => esc_html__( 'Footer Partner Menu', 'starizo' ),
	) );
}
add_action( 'after_setup_theme', 'starizo_setup' );

/**
 * Add ACF Options Page
 */
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme Global Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}

// Include ACF Options Fields
require_once get_template_directory() . '/inc/acf-options-fields.php';

/**
 * Calculate estimated reading time of post content.
 */
function starizo_reading_time($content = '') {
    $word_count = str_word_count( strip_tags( $content ) );
    $reading_time = ceil($word_count / 200); // Assuming 200 words per minute
    return $reading_time . ' min read';
}

/**
 * Generate Table of Contents from H2 tags in content.
 */
function starizo_get_toc($content) {
    preg_match_all('/<h2.*?>(.*?)<\/h2>/s', $content, $matches);
    
    if ( empty($matches[1]) ) {
        return '';
    }
    
    $toc = '<div class="border-l border-gray-300 ml-[5px] pl-5 flex flex-col gap-[22px] relative py-1">';
    
    foreach ($matches[1] as $index => $heading) {
        $heading_text = strip_tags($heading);
        $slug = sanitize_title($heading_text);
        
        // Use the first item as active for styling purposes (orange dot)
        if ( $index === 0 ) {
            $toc .= '<div class="relative">
                <span class="absolute left-[-26px] top-[4px] w-[11px] h-[11px] bg-[#FF8D00] rounded-full shadow-sm"></span>
                <a href="#' . esc_attr($slug) . '" class="font-montserrat font-bold text-[13px] leading-[18px] text-black hover:text-[#FF8D00] transition-colors block">
                  ' . esc_html($heading_text) . '
                </a>
              </div>';
        } else {
            $toc .= '<div class="relative">
                <span class="absolute left-[-26px] top-[4px] w-[11px] h-[11px] bg-white border-2 border-[#FF8D00] rounded-full"></span>
                <a href="#' . esc_attr($slug) . '" class="font-montserrat font-medium text-[13px] leading-[18px] text-[#333333] hover:text-[#FF8D00] transition-colors block">
                  ' . esc_html($heading_text) . '
                </a>
              </div>';
        }
    }
    
    $toc .= '</div>';
    return $toc;
}

/**
 * Add IDs to H2 tags in content so the ToC works.
 */
function starizo_add_ids_to_headings($content) {
    if ( is_single() && is_main_query() ) {
        $content = preg_replace_callback('/<h2(.*?)>(.*?)<\/h2>/s', function($matches) {
            $slug = sanitize_title(strip_tags($matches[2]));
            // Check if id already exists
            if ( strpos($matches[1], 'id=') !== false ) {
                return $matches[0];
            }
            return '<h2 id="' . esc_attr($slug) . '" class="font-montserrat font-bold text-[22px] leading-[39px] tracking-normal bg-gradient-to-r from-[#00A256] to-[#5DC671] bg-clip-text text-transparent block mt-8 mb-2"' . $matches[1] . '>' . $matches[2] . '</h2>';
        }, $content);
    }
    return $content;
}
add_filter('the_content', 'starizo_add_ids_to_headings');

/**
 * Add Tailwind classes to menu links (Header and Footer)
 */
function starizo_add_nav_menu_classes($atts, $item, $args) {
    // Primary Header Menu
    if ( $args->theme_location === 'primary' ) {
        $atts['class'] = 'text-[18px] font-medium hover:text-starizo-orange transition';
    }
    
    // Footer Menus
    if ( $args->theme_location === 'footer_products' || $args->theme_location === 'footer_about' || $args->theme_location === 'footer_partner' ) {
        $atts['class'] = 'text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors block';
        
        // Partner with Us has bolder text
        if ( $args->theme_location === 'footer_partner' ) {
             $atts['class'] = 'text-[12px] font-bold text-black leading-[20px] hover:text-starizo-orange transition-colors block';
        }
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'starizo_add_nav_menu_classes', 10, 3);

