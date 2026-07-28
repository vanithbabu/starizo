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

	// Inquiries CPT (Contact Submissions)
	$inquiry_args = array(
		'labels' => array(
			'name' => 'Inquiries',
			'singular_name' => 'Inquiry',
			'menu_name' => 'Inquiries',
			'add_new_item' => 'View Inquiry',
			'edit_item' => 'Inquiry Details',
			'all_items' => 'All Inquiries',
		),
		'public' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'supports' => array('title'),
		'menu_icon' => 'dashicons-email-alt',
	);
	register_post_type('starizo_inquiry', $inquiry_args);

}
add_action( 'init', 'starizo_register_post_types' );

/**
 * Custom Admin Columns for Inquiries CPT
 */
function starizo_inquiry_columns($columns) {
    return array(
        'cb' => '<input type="checkbox" />',
        'title' => 'Name',
        'email' => 'Work Email',
        'phone' => 'Phone',
        'company' => 'Company',
        'industry' => 'Industry',
        'ingredient' => 'Ingredient',
        'date' => 'Submitted Date'
    );
}
add_filter('manage_starizo_inquiry_posts_columns', 'starizo_inquiry_columns');

function starizo_inquiry_custom_column_data($column, $post_id) {
    switch ($column) {
        case 'email':
            $email = get_post_meta($post_id, '_email', true);
            echo esc_html($email ?: '—');
            break;
        case 'phone':
            $phone = get_post_meta($post_id, '_phone', true);
            echo esc_html($phone ?: '—');
            break;
        case 'company':
            $company = get_post_meta($post_id, '_company', true);
            echo esc_html($company ?: '—');
            break;
        case 'industry':
            $industry = get_post_meta($post_id, '_industry', true);
            echo esc_html($industry ?: '—');
            break;
        case 'ingredient':
            $ingredient = get_post_meta($post_id, '_ingredient', true);
            echo esc_html($ingredient ?: '—');
            break;
    }
}
add_action('manage_starizo_inquiry_posts_custom_column', 'starizo_inquiry_custom_column_data', 10, 2);

/**
 * Handle Contact Form AJAX Submission (Store in DB & Send HTML Email)
 */
function starizo_handle_contact_submission() {
    check_ajax_referer('starizo_contact_nonce', 'nonce');

    $name       = isset($_POST['full_name']) ? sanitize_text_field($_POST['full_name']) : '';
    $phone      = isset($_POST['phone']) ? sanitize_text_field($_POST['phone']) : '';
    $email      = isset($_POST['email']) ? sanitize_email($_POST['email']) : '';
    $company    = isset($_POST['company']) ? sanitize_text_field($_POST['company']) : '';
    $industry   = isset($_POST['industry']) ? sanitize_text_field($_POST['industry']) : '';
    $ingredient = isset($_POST['ingredient']) ? sanitize_text_field($_POST['ingredient']) : '';
    $message    = isset($_POST['message']) ? sanitize_textarea_field($_POST['message']) : '';

    if (empty($name) || empty($email) || empty($message)) {
        wp_send_json_error(array('message' => 'Please fill in all required fields.'));
    }

    // 1. Store Submission in WP Backend (Custom Post Type)
    $post_id = wp_insert_post(array(
        'post_type'   => 'starizo_inquiry',
        'post_title'  => $name . ' — ' . ($company ?: 'Direct Inquiry'),
        'post_status' => 'publish',
    ));

    if ($post_id && !is_wp_error($post_id)) {
        update_post_meta($post_id, '_full_name', $name);
        update_post_meta($post_id, '_phone', $phone);
        update_post_meta($post_id, '_email', $email);
        update_post_meta($post_id, '_company', $company);
        update_post_meta($post_id, '_industry', $industry);
        update_post_meta($post_id, '_ingredient', $ingredient);
        update_post_meta($post_id, '_message', $message);
        update_post_meta($post_id, '_ip_address', $_SERVER['REMOTE_ADDR'] ?? '');
    }

    // 2. Send HTML Email Notification
    $admin_email = get_option('admin_email');
    $to = array('sales@starizo.com', $admin_email);
    $subject = 'New Website Inquiry from ' . $name . ' (' . ($company ?: 'Individual') . ')';

    $email_body = '
    <html>
    <body style="font-family: Arial, sans-serif; background-color: #FDFBF3; padding: 20px; color: #333;">
      <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; border: 1px solid #EFE9DD; padding: 30px;">
        <div style="text-align: center; border-bottom: 2px solid #FF8D00; padding-bottom: 15px; margin-bottom: 20px;">
          <h2 style="color: #00A256; margin: 0;">STARIZO™ Contact Form Inquiry</h2>
        </div>
        <p style="font-size: 15px;">You have received a new contact inquiry from the Starizo website:</p>
        <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
          <tr style="background: #FDF7E9;"><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #eee;">Full Name:</td><td style="padding: 10px; border-bottom: 1px solid #eee;">' . esc_html($name) . '</td></tr>
          <tr><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #eee;">Work Email:</td><td style="padding: 10px; border-bottom: 1px solid #eee;"><a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a></td></tr>
          <tr style="background: #FDF7E9;"><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #eee;">Phone Number:</td><td style="padding: 10px; border-bottom: 1px solid #eee;">' . esc_html($phone ?: 'Not provided') . '</td></tr>
          <tr><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #eee;">Company Name:</td><td style="padding: 10px; border-bottom: 1px solid #eee;">' . esc_html($company ?: 'Not provided') . '</td></tr>
          <tr style="background: #FDF7E9;"><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #eee;">Industry:</td><td style="padding: 10px; border-bottom: 1px solid #eee;">' . esc_html($industry ?: 'Not specified') . '</td></tr>
          <tr><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #eee;">Ingredient of Interest:</td><td style="padding: 10px; border-bottom: 1px solid #eee;">' . esc_html($ingredient ?: 'Not specified') . '</td></tr>
          <tr style="background: #FDF7E9;"><td style="padding: 10px; font-weight: bold; border-bottom: 1px solid #eee;">Message:</td><td style="padding: 10px; border-bottom: 1px solid #eee;">' . nl2br(esc_html($message)) . '</td></tr>
        </table>
        <div style="margin-top: 25px; padding-top: 15px; border-top: 1px solid #eee; text-align: center; font-size: 12px; color: #888;">
          Sent automatically from Starizo Website Contact System.
        </div>
      </div>
    </body>
    </html>
    ';

    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: Starizo Web System <noreply@' . parse_url(home_url(), PHP_URL_HOST) . '>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );

    wp_mail($to, $subject, $email_body, $headers);

    wp_send_json_success(array('message' => 'Thank you! Your message has been sent successfully. We will get back to you shortly.'));
}
add_action('wp_ajax_starizo_submit_contact', 'starizo_handle_contact_submission');
add_action('wp_ajax_nopriv_starizo_submit_contact', 'starizo_handle_contact_submission');

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

// Include ACF options fields registration
require_once get_template_directory() . '/inc/acf-options-fields.php';
require_once get_template_directory() . '/inc/acf-product-fields.php';

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

