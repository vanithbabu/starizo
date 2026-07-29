<?php
/**
 * Template Name: Cosmetics & Personal Care Category Page
 * Template Post Type: page
 *
 * @package Starizo
 */

get_header();
?>

<main class="w-full relative overflow-hidden bg-[#FDFBF3]">
  <?php
  get_template_part( 'template-parts/blocks/cosmetics-hero' );
  get_template_part( 'template-parts/blocks/cosmetics-solutions' );
  get_template_part( 'template-parts/blocks/cosmetics-faq' );
  ?>
</main>

<?php
get_footer();
