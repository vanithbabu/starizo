<?php
/**
 * CTA Banner Block Template
 */

$heading     = get_sub_field( 'heading' ) ?: 'Let’s Build The Next Generation Of Ingredient Solutions';
$description = get_sub_field( 'description' ) ?: 'Whether you\'re developing a new formulation or scaling production, our team is ready to support your next stage of growth.';
$button_text = get_sub_field( 'button_text' ) ?: 'Contact Us';
$button_link = get_sub_field( 'button_link' ) ?: '/contact';

$image = get_sub_field('image');
$image_url = $image ? esc_url($image['url']) : get_template_directory_uri() . '/public/assets/about-let.png';

$floating_image = get_sub_field('floating_image');
$floating_image_url = $floating_image ? esc_url($floating_image['url']) : get_template_directory_uri() . '/public/assets/rice-g.png';
?>

<section class="w-full bg-[#FDFBF3] py-12 md:py-16 border-b border-gray-100 overflow-hidden">
  <div class="w-full max-w-[1280px] mx-auto min-h-[242px] px-4 sm:px-6 md:px-8 flex flex-col md:flex-row items-center justify-between gap-12 lg:gap-12">

    <!-- Left Container -->
    <div class="flex flex-col justify-center items-start text-left flex-1 w-full" style="max-width: 599px; min-height: 227px; gap: 19px; opacity: 1;">

      <!-- Heading -->
      <h2 class="font-montserrat font-black text-[#5D3700]" style="font-weight: 900; font-size: 32px; line-height: 36px; letter-spacing: 0;">
        <?php echo wp_kses_post( $heading ); ?>
      </h2>

      <!-- Subtitle Paragraph -->
      <p class="font-montserrat font-normal text-black" style="font-weight: 400; font-size: 18px; line-height: 24px; letter-spacing: 0;">
        <?php echo wp_kses_post( $description ); ?>
      </p>

      <!-- Button -->
      <a href="<?php echo esc_url( $button_link ); ?>" class="font-montserrat font-semibold text-white flex items-center justify-center transition duration-200 select-none shrink-0 hover:bg-[#e07c00] shadow-sm" style="width: 158px; height: 45px; border-radius: 22px; background-color: #FF8D00; padding: 6px 19px; gap: 2px; font-weight: 600; font-size: 18px; line-height: 21px;">
        <span style="display: inline-flex; align-items: center;"><?php echo esc_html( $button_text ); ?></span>
        <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5] shrink-0 ml-1" viewBox="0 0 24 24">
          <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
      </a>

    </div>

    <!-- Right Container -->
    <div class="relative flex-1 w-full shrink-0 overflow-visible mt-8 md:mt-0" style="max-width: 485px; height: 242px;">

      <!-- Photo Frame -->
      <div class="w-full h-full overflow-hidden relative z-10" style="border-top-left-radius: 44px; border-bottom-right-radius: 44px;">
        <img src="<?php echo esc_url( $image_url ); ?>" alt="CTA Image" class="w-full h-full object-cover">
      </div>

      <!-- Floating Graphic Overlay -->
      <img src="<?php echo esc_url( $floating_image_url ); ?>" alt="" class="absolute pointer-events-none select-none z-20 object-contain" style="width: 130px; height: 182px; right: -20px; md:right: -55px; bottom: -20px;">

    </div>

  </div>
</section>
