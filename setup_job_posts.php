<?php
define('WP_USE_THEMES', false);
require_once('/Applications/MAMP/htdocs/starizo/wp-load.php');

$sample_jobs = array(
    array(
        'title' => 'Quality Assurance Executive',
        'dept'  => 'Quality',
        'loc'   => 'Chennai, India',
        'type'  => 'Full-time'
    ),
    array(
        'title' => 'R&D Scientist — Food Ingredients',
        'dept'  => 'R&D',
        'loc'   => 'Chennai, India',
        'type'  => 'Full-time'
    ),
    array(
        'title' => 'Production Officer',
        'dept'  => 'Operations',
        'loc'   => 'Chennai, India',
        'type'  => 'Full-time'
    ),
    array(
        'title' => 'Sales Executive',
        'dept'  => 'Sales',
        'loc'   => 'Chennai, India',
        'type'  => 'Full-time'
    ),
);

foreach ($sample_jobs as $job) {
    $existing = get_page_by_title($job['title'], OBJECT, 'job');
    if (!$existing) {
        $post_id = wp_insert_post(array(
            'post_title'   => $job['title'],
            'post_content' => 'We are seeking a talented ' . $job['title'] . ' to join our team at STARIZO.',
            'post_status'  => 'publish',
            'post_type'    => 'job',
        ));
    } else {
        $post_id = $existing->ID;
    }

    if ($post_id && !is_wp_error($post_id)) {
        update_post_meta($post_id, 'department', $job['dept']);
        update_post_meta($post_id, 'location', $job['loc']);
        update_post_meta($post_id, 'employment_type', $job['type']);
        echo "Created/Updated Job: " . $job['title'] . "\n";
    }
}
