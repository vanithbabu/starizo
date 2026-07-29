<?php
/**
 * Template Name: Food & Beverage Category Page
 * Template Post Type: page
 *
 * @package Starizo
 */

get_header();
?>

<main class="w-full relative overflow-hidden bg-[#FDFBF3]">
  <?php
  get_template_part( 'template-parts/blocks/food-beverage-hero' );
  get_template_part( 'template-parts/blocks/food-beverage-solutions' );
  get_template_part( 'template-parts/blocks/food-beverage-faq' );
  ?>
</main>

<?php
get_footer();
