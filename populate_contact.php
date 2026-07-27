<?php
require_once 'wp-load.php';

$page_title = 'Contact';
$page = get_page_by_title($page_title, OBJECT, 'page');
if (!$page) {
    // Try 'Contact Us'
    $page = get_page_by_title('Contact Us', OBJECT, 'page');
    if (!$page) {
        die("Contact page not found.\n");
    }
}
$page_id = $page->ID;

$blocks = array();

$blocks[] = array(
    'acf_fc_layout' => 'contact_section',
    'tagline' => 'CONTACT STARIZO',
    'title_line_1' => 'Let’s Build Better',
    'title_line_2' => 'Ingredients. Together.',
    'contact_info_title' => 'Contact Information',
    'contact_info_subtitle' => 'Say something to start a live chat!',
    'email' => 'sales@starizo.com',
    'social_links' => array(), // Leave empty to use fallback or we can leave it empty
    'form_tagline' => 'TELL US ABOUT YOUR PROJECT',
    'form_title' => 'Built to support formulation goals across categories and markets.',
    'form_subtitle' => 'The more context you provide, the better we can support you.',
    'form_shortcode' => ''
);

update_field('page_blocks', $blocks, $page_id);

echo "Successfully populated Contact page!\n";
