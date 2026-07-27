<?php
require_once 'wp-load.php';

function upload_image_to_wp($filename) {
    if (empty($filename)) return '';
    
    $file_path = '/Applications/MAMP/htdocs/starizo/wp-content/themes/starizo-theme/public/assets/' . $filename;
    
    if (!file_exists($file_path)) {
        return '';
    }

    $wp_upload_dir = wp_upload_dir();
    $file_name = basename($file_path);
    $file_dest = $wp_upload_dir['path'] . '/' . $file_name;
    
    // Check if attachment already exists by checking the guid or attached file
    global $wpdb;
    $query = $wpdb->prepare("SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '_wp_attached_file' AND meta_value LIKE %s", '%' . $wpdb->esc_like($file_name));
    $existing = $wpdb->get_var($query);
    if ($existing) {
        return $existing;
    }
    
    copy($file_path, $file_dest);
    
    $filetype = wp_check_filetype($file_name, null);
    $attachment = array(
        'guid'           => $wp_upload_dir['url'] . '/' . basename($file_dest),
        'post_mime_type' => $filetype['type'],
        'post_title'     => preg_replace('/\.[^.]+$/', '', basename($file_dest)),
        'post_content'   => '',
        'post_status'    => 'inherit'
    );
    
    $attach_id = wp_insert_attachment($attachment, $file_dest);
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata($attach_id, $file_dest);
    wp_update_attachment_metadata($attach_id, $attach_data);
    
    return $attach_id;
}
