<?php
/**
 * Template Name: About Us Page
 */
get_header();
?>

<main class="w-full">
  <?php
  get_template_part('template-parts/blocks/about-hero');
  get_template_part('template-parts/blocks/our-story');
  get_template_part('template-parts/blocks/inside-starizo');
  get_template_part('template-parts/blocks/quality-process');
  get_template_part('template-parts/blocks/certifications');
  get_template_part('template-parts/blocks/cta-banner');
  ?>
</main>

<?php
get_footer();
