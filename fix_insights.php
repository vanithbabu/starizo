<?php
require_once 'wp-load.php';

// Check if Insights page exists
$insights_page = get_page_by_path('insights');
if (!$insights_page) {
    $page_id = wp_insert_post([
        'post_title' => 'Insights',
        'post_name' => 'insights',
        'post_status' => 'publish',
        'post_type' => 'page'
    ]);
    echo "Created Insights page (ID: $page_id).\n";
} else {
    $page_id = $insights_page->ID;
    echo "Insights page already exists (ID: $page_id).\n";
}

// Set it as the posts page
update_option('page_for_posts', $page_id);
update_option('show_on_front', 'page');
echo "Set Insights page as the Posts Page.\n";
