<?php
require_once 'wp-load.php';
require_once 'upload_helper.php';

// Find the About page by title
$about_page = get_page_by_title( 'About Us' );
if ( ! $about_page ) {
    $about_page = get_page_by_title( 'About' );
}

if ( ! $about_page ) {
    echo "About page not found!\n";
    exit;
}

$post_id = $about_page->ID;
echo "Populating About page (ID: $post_id)...\n";

$page_blocks = array(
    array(
        'acf_fc_layout' => 'about_hero',
        'heading' => 'Transforming Rice Into Global Ingredient Innovation',
        'description' => 'Built on decades of rice processing expertise, STARIZO develops clean-label, rice-derived ingredients designed for modern industries and global manufacturing.',
        'button_1_text' => 'Explore Products',
        'button_1_link' => '#products',
        'button_2_text' => 'Contact Us',
        'button_2_link' => '/contact',
        'image' => upload_image_to_wp('about-let.png')
    ),
    array(
        'acf_fc_layout' => 'our_story',
        'subheading' => 'OUR STORY',
        'heading' => 'What began as expertise in rice processing evolved into a next-generation ingredient platform.',
        'description' => '<p>For more than three decades, the foundation behind STARIZO has refined how rice is sourced, processed, and transformed. Today, STARIZO extends that legacy into specialized clean-label ingredients developed for food, nutrition, pharma, and industrial innovators worldwide.</p><p>This evolution is not simply manufacturing expansion—it represents a shift toward creating smarter ingredient ecosystems that deliver consistency, transparency, and performance.</p>'
    ),
    array(
        'acf_fc_layout' => 'inside_starizo',
        'subheading' => 'INSIDE STARIZO',
        'heading' => 'Manufacturing Built For Scale',
        'description' => 'Infrastructure designed to support quality, traceability, and long-term growth.',
        'blueprint_image' => upload_image_to_wp('facility-abaout.png'),
        'highlights' => array(
            array('label' => 'Location'),
            array('label' => 'Production Capacity'),
            array('label' => 'Integrated R&D'),
            array('label' => 'Energy'),
            array('label' => 'Storage'),
        ),
        'title' => 'Facility Commissioning',
        'date' => 'Q2 2026',
        'image' => upload_image_to_wp('Facility Communation.png')
    ),
    array(
        'acf_fc_layout' => 'certifications',
        'subheading' => 'CERTIFICATIONS',
        'certificates' => array(
            array('title' => 'FSSC 22000', 'image' => upload_image_to_wp('FSSC.png')),
            array('title' => 'ISO 9001:2015', 'image' => upload_image_to_wp('ISO.png')),
            array('title' => 'Non-GMO Project-verified', 'image' => upload_image_to_wp('NonGMO.png')),
            array('title' => 'Halal Indonesia', 'image' => upload_image_to_wp('Halal.png')),
            array('title' => 'Kosher', 'image' => upload_image_to_wp('K-2.png')),
            array('title' => 'BRCGS (British Retail Consortium Global Standards)', 'image' => upload_image_to_wp('BRGS.png')),
            array('title' => 'FDA (Food and Drug Administration USA)', 'image' => upload_image_to_wp('FDA.png')),
            array('title' => 'GMP (Good Manufacturing Processes)', 'image' => upload_image_to_wp('GMP.png'))
        )
    ),
    array(
        'acf_fc_layout' => 'cta_banner',
        'heading' => 'Let’s Build The Next Generation Of Ingredient Solutions',
        'description' => 'Whether you\'re developing a new formulation or scaling production, our team is ready to support your next stage of growth.',
        'button_text' => 'Contact Us',
        'button_link' => '/contact',
        'image' => upload_image_to_wp('starizo-mobile-green.png'),
        'floating_image' => upload_image_to_wp('starzo-partner-green.png')
    )
);

// Delete the existing to ensure clean insert
delete_field('page_blocks', $post_id);

if ( update_field( 'page_blocks', $page_blocks, $post_id ) ) {
    echo "About page successfully updated!\n";
} else {
    echo "Failed to update About page.\n";
}
