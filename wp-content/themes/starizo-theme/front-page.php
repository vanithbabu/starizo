<?php
/**
 * The front page template file
 */

get_header();

if ( have_rows('page_blocks') ) {
    while ( have_rows('page_blocks') ) : the_row();
        $layout = get_row_layout();
        get_template_part( 'template-parts/blocks/' . str_replace('_', '-', $layout) );
    endwhile;
} else {
    // If no blocks are added, fallback to standard the_content
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
}

get_footer();
