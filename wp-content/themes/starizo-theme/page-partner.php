<?php
/**
 * Template Name: Partner With Us Page
 */
get_header();
?>

<main class="w-full">
  <?php
  get_template_part('template-parts/blocks/partner-hero');
  get_template_part('template-parts/blocks/why-partner-with-starizo');
  get_template_part('template-parts/blocks/who-we-partner-with');
  get_template_part('template-parts/blocks/industries-we-support');
  get_template_part('template-parts/blocks/cta-banner');
  ?>
</main>

<?php
get_footer();
