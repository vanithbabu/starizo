<?php
require_once 'wp-load.php';

// Ensure Food & Beverage page exists and is published
$food_page = get_page_by_path('food-beverage');
if (!$food_page) {
    $food_page = get_page_by_path('food-and-beverage');
}

if (!$food_page) {
    $post_id = wp_insert_post([
        'post_title'   => 'Food & Beverage',
        'post_name'    => 'food-beverage',
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'page_template' => 'page-food-beverage.php'
    ]);
    update_post_meta($post_id, '_wp_page_template', 'page-food-beverage.php');
    echo "Created Food & Beverage page ID: $post_id\n";
} else {
    wp_update_post([
        'ID'           => $food_page->ID,
        'post_status'  => 'publish',
    ]);
    update_post_meta($food_page->ID, '_wp_page_template', 'page-food-beverage.php');
    echo "Updated Food & Beverage page ID: {$food_page->ID}\n";
}

// Ensure Cosmetics & Personal Care page exists and is published
$cosmetics_page = get_page_by_path('cosmetics-personal-care');
if (!$cosmetics_page) {
    $cosmetics_page = get_page_by_path('cosmetics-and-personal-care');
}

if (!$cosmetics_page) {
    $post_id = wp_insert_post([
        'post_title'   => 'Cosmetics & Personal Care',
        'post_name'    => 'cosmetics-personal-care',
        'post_status'  => 'publish',
        'post_type'    => 'page',
        'page_template' => 'page-cosmetics-personal-care.php'
    ]);
    update_post_meta($post_id, '_wp_page_template', 'page-cosmetics-personal-care.php');
    echo "Created Cosmetics & Personal Care page ID: $post_id\n";
} else {
    wp_update_post([
        'ID'           => $cosmetics_page->ID,
        'post_status'  => 'publish',
    ]);
    update_post_meta($cosmetics_page->ID, '_wp_page_template', 'page-cosmetics-personal-care.php');
    echo "Updated Cosmetics & Personal Care page ID: {$cosmetics_page->ID}\n";
}

// Flush rewrite rules
flush_rewrite_rules();
echo "Rewrite rules flushed!\n";
