<?php
/**
 * Template Name: Careers Page
 */
get_header();
?>

<main class="w-full">
  <?php
  get_template_part('template-parts/blocks/careers-hero');
  get_template_part('template-parts/blocks/careers-purpose');
  get_template_part('template-parts/blocks/careers-culture');
  get_template_part('template-parts/blocks/careers-open-roles');
  get_template_part('template-parts/blocks/careers-bottom-hero');
  ?>
</main>

<?php
get_footer();
