<?php
require_once 'wp-load.php';
require_once 'upload_helper.php';

$dummy_products = [
    [
        'title' => 'Rice Starch',
        'excerpt' => 'Clean-label starch with superior texture, stability, and process performance.',
        'image' => 'product-rice-starch.png'
    ],
    [
        'title' => 'Rice Protein',
        'excerpt' => 'High-quality plant protein for nutritional and functional applications.',
        'image' => 'product-rice-protein.png'
    ],
    [
        'title' => 'Rice Maltodextrin',
        'excerpt' => 'Versatile carbohydrate source for energy, bulking, and encapsulation.',
        'image' => 'product-rice-maltodextrin.png'
    ],
    [
        'title' => 'Rice Syrup',
        'excerpt' => 'Natural sweetener with clean taste and excellent binding properties.',
        'image' => 'product-rice-starch.png' // Using starch image as fallback since syrup image wasn't in the list
    ]
];

foreach ($dummy_products as $prod) {
    $existing = get_page_by_title($prod['title'], OBJECT, 'product');
    if (!$existing) {
        $post_id = wp_insert_post([
            'post_title' => $prod['title'],
            'post_excerpt' => $prod['excerpt'],
            'post_status' => 'publish',
            'post_type' => 'product',
        ]);
        
        if (!is_wp_error($post_id)) {
            $attach_id = upload_image_to_wp($prod['image']);
            if ($attach_id) {
                set_post_thumbnail($post_id, $attach_id);
            }
            echo "Created product: " . $prod['title'] . "\n";
        }
    } else {
        echo "Product already exists: " . $prod['title'] . "\n";
    }
}
echo "Dummy products populated!\n";
