<?php
/**
 * Taxonomy Template Fallback for product_cat
 *
 * @package Starizo
 */

$term = get_queried_object();
if ( $term && $term->slug === 'cosmetics-personal-care' ) {
    include get_template_directory() . '/page-cosmetics-personal-care.php';
} else {
    include get_template_directory() . '/page-food-beverage.php';
}
