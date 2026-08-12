<?php
/**
 * Template Name: About Us Page
 */
get_header();
?>

<main class="w-full">
  <?php
  if ( have_rows('page_blocks') ) {
      while ( have_rows('page_blocks') ) : the_row();
          $layout = get_row_layout();
          get_template_part( 'template-parts/blocks/' . str_replace('_', '-', $layout) );
      endwhile;
  } else {
      get_template_part('template-parts/blocks/about-hero');
      get_template_part('template-parts/blocks/our-story');
      get_template_part('template-parts/blocks/inside-starizo');
      get_template_part('template-parts/blocks/quality-process');
      get_template_part('template-parts/blocks/certifications');
      get_template_part('template-parts/blocks/cta-banner');
  }
  ?>
</main>

<?php
get_footer();
