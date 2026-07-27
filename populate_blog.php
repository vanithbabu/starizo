<?php
require_once 'wp-load.php';

echo "Populating dummy categories and posts...\n";

// 1. Create Categories
$categories = [
    'Clean Label',
    'Ingredient Science',
    'Applications',
    'Manufacturing',
    'Sustainability',
    'Traceability',
    'Innovation',
    'Industry Trends',
    'Quality Systems',
    'Export Markets'
];

$cat_ids = [];
foreach ($categories as $cat) {
    $term = term_exists($cat, 'category');
    if (!$term) {
        $term = wp_insert_term($cat, 'category');
    }
    if (!is_wp_error($term)) {
        $cat_ids[$cat] = is_array($term) ? $term['term_id'] : $term;
    }
}

// 2. Create Dummy Posts
$dummy_posts = [
    [
        'title' => 'The Clean Label Shift Is Bigger Than Ingredients',
        'content' => '
            <p>Consumers have become more conscious about what goes into the products they buy. They turn packaging around. They read ingredient panels. They compare labels. But ingredient trust does not begin where consumers usually look. It begins much earlier. Long before a finished product reaches a shelf, decisions are already shaping quality, performance, and transparency—from how raw materials are sourced to how ingredients are processed and validated. Clean label is no longer a packaging trend. It is becoming a manufacturing responsibility.</p>
            
            <h2>The Shift From Ingredient Lists To Ingredient Confidence</h2>
            <p>For years, clean label conversations focused on reducing ingredient names or simplifying declarations. Today, expectations are changing. Consumers and brands increasingly ask:</p>
            <ul>
                <li>Where did this ingredient come from?</li>
                <li>How was it processed?</li>
                <li>Can quality be repeated consistently?</li>
                <li>Can sourcing be trusted?</li>
            </ul>
            <p>This shift requires ingredient suppliers to act differently. Providing a specification sheet is standard; providing traceability, batch-level transparency, and application predictability is what builds confidence.</p>
            
            <h2>It Starts At The Source</h2>
            <p>The foundation of any clean label product is the raw material. The conditions under which it is grown, harvested, and handled directly impact the performance of the final ingredient.</p>
            <p>For rice-derived ingredients, this means understanding the agricultural ecosystem. Soil quality, agricultural practices, and post-harvest handling all play a role in the purity of the starch or protein extracted later.</p>
            
            <h2>Manufacturing Is Where Trust Becomes Measurable</h2>
            <p>Extracting value from raw materials without compromising their natural properties requires advanced processing technology. Traditional chemical modifications are increasingly being replaced by physical processing methods.</p>
            
            <h2>Quality Cannot Be Added At The End</h2>
            <p>Testing a finished product for safety and compliance is essential, but it is not a quality strategy on its own. True quality is engineered into the process from the beginning.</p>
            
            <h2>Why Application Performance Matters More Than Claims</h2>
            <p>A clean label ingredient that does not perform in a real-world application is a liability, not an asset.</p>
            
            <h2>Sustainability Is Becoming Part Of Product Quality</h2>
            <p>Brands and consumers are no longer separating how an ingredient is made from its environmental footprint.</p>
            
            <h2>Looking Ahead</h2>
            <p>As the industry continues to evolve, the definition of clean label will likely expand further.</p>
            
            <h2>Final Thoughts</h2>
            <p>The brands that will succeed in the coming years are the ones that treat clean label not as a marketing exercise, but as a commitment to transparency throughout the supply chain.</p>
        ',
        'category' => 'Clean Label',
        'image_url' => 'blog-detail-paddie.png'
    ],
    [
        'title' => 'How Rice Starch Changes Texture Performance',
        'content' => '
            <p>Understanding granule behavior across formulations is key to unlocking the potential of rice starch.</p>
            <h2>The Role of Granule Size</h2>
            <p>Rice starch has one of the smallest granule sizes among commercial starches, providing a unique creamy mouthfeel.</p>
            <h2>Application in Dairy Alternatives</h2>
            <p>In plant-based milks and yogurts, rice starch acts as a powerful texturizer.</p>
        ',
        'category' => 'Ingredient Science',
        'image_url' => 'blog-industries.png'
    ],
    [
        'title' => 'Sustainable Supply Chains in 2026',
        'content' => '
            <p>Building resilient and traceable supply chains is more important than ever.</p>
            <h2>The Importance of Traceability</h2>
            <p>Knowing the exact origin of raw materials reduces risk and builds consumer trust.</p>
            <h2>Reducing Carbon Footprint</h2>
            <p>Optimizing logistics and processing can significantly lower environmental impact.</p>
        ',
        'category' => 'Sustainability',
        'image_url' => 'blog-paddie.png'
    ],
    [
        'title' => 'Innovations in Plant-Based Proteins',
        'content' => '
            <p>The demand for high-quality, allergen-free proteins is driving new extraction technologies.</p>
            <h2>Rice Protein as a Hypoallergenic Alternative</h2>
            <p>For consumers with soy or dairy allergies, rice protein is an excellent choice.</p>
            <h2>Improving Solubility</h2>
            <p>New processing techniques are making rice protein more functional in beverages.</p>
        ',
        'category' => 'Innovation',
        'image_url' => 'blog-industries.png'
    ]
];

require_once 'upload_helper.php';

foreach ($dummy_posts as $post_data) {
    $existing = get_page_by_title($post_data['title'], OBJECT, 'post');
    if (!$existing) {
        $post_id = wp_insert_post([
            'post_title' => $post_data['title'],
            'post_content' => $post_data['content'],
            'post_status' => 'publish',
            'post_type' => 'post',
            'post_category' => array($cat_ids[$post_data['category']])
        ]);
        
        // Attach image
        if (!is_wp_error($post_id)) {
            if (!empty($post_data['image_url'])) {
                $attach_id = upload_image_to_wp($post_data['image_url']);
                if ($attach_id) {
                    set_post_thumbnail($post_id, $attach_id);
                }
            }
            echo "Created post: " . $post_data['title'] . "\n";
        }
    } else {
        echo "Post already exists: " . $post_data['title'] . "\n";
        if (!empty($post_data['image_url']) && !has_post_thumbnail($existing->ID)) {
            $attach_id = upload_image_to_wp($post_data['image_url']);
            if ($attach_id) {
                set_post_thumbnail($existing->ID, $attach_id);
            }
        }
    }
}

echo "Dummy data population complete.\n";
