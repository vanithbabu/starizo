<?php
/**
 * Careers Hero Block Template.
 */
$tagline = get_sub_field('tagline') ?: 'CAREERS AT STARIZO';
$headline = get_sub_field('headline') ?: "Build A Better Future.<br>With Better Ingredients.<br>With Better People.";
$description = get_sub_field('description') ?: 'Join a team transforming rice into ingredients designed for the industries shaping tomorrow.';
$button_text = get_sub_field('button_text') ?: 'View Open Roles';
$button_link = get_sub_field('button_link') ?: '#open-roles';
?>

<!-- ========== DESKTOP VIEW ========== -->
<div class="hidden xl:block w-full">
  <div class="relative w-full bg-[#FDFBF3] overflow-hidden">
    <div class="hidden xl:block relative w-full h-[800px] overflow-hidden">
      <!-- Figma Background Composite -->
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/hero-graphics.png" alt=""
        class="absolute left-1/2 -translate-x-1/2 top-0 w-[1280px] h-[800px] pointer-events-none z-0" />
      
      <!-- Right-aligned 1280px Content Layer -->
      <div class="absolute left-1/2 -translate-x-1/2 top-0 w-[1280px] h-[800px]">
        
        <!-- Brand Logo on the Wall -->
        <img src="<?php echo get_template_directory_uri(); ?>/public/assets/wall-logo.svg" alt="starizo™"
          class="absolute left-[903px] top-[182px] w-[242px] h-[78px] pointer-events-none z-10" />

        <!-- Left Hero Text Content -->
        <div class="absolute left-[79px] top-[305px] w-[534px] z-10 flex flex-col items-start">
          <div class="flex flex-col gap-3 mb-[31px]">
            <span class="text-[14px] font-bold tracking-[0.15em] text-black uppercase"><?php echo esc_html($tagline); ?></span>
            <h1 class="text-[42px] font-black text-transparent bg-clip-text bg-gradient-to-r from-starizo-green-start to-starizo-green-end leading-[54px] tracking-tight">
              <?php echo wp_kses_post($headline); ?>
            </h1>
          </div>
          <p class="text-[18px] font-medium leading-[30px] text-black max-w-[534px] mb-[51px]">
            <?php echo esc_html($description); ?>
          </p>
          <a href="<?php echo esc_url($button_link); ?>"
            class="group w-auto px-8 h-[48px] bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-semibold text-[18px] rounded-full hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shadow-md hover:shadow-xl select-none flex items-center justify-center gap-2">
            <?php echo esc_html($button_text); ?>
            <svg class="w-4 h-4 fill-current transform group-hover:translate-x-1 transition-transform duration-300"
              viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.8907 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z"
                fill="currentColor" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========== MOBILE VIEW ========== -->
<div class="xl:hidden w-full bg-[#FDFBF3] overflow-x-hidden pt-12 pb-12">
  <div class="relative w-full max-w-[500px] mx-auto px-4 md:px-8">
    <div class="relative w-full z-10 flex flex-col mt-6 gap-6">
      <div class="flex flex-col gap-2">
        <span class="text-[12px] md:text-[14px] font-bold tracking-[0.15em] text-black uppercase"><?php echo esc_html($tagline); ?></span>
        <h1 class="text-[32px] md:text-[42px] font-black text-transparent bg-clip-text bg-gradient-to-r from-starizo-green-start to-starizo-green-end leading-[1.2] tracking-tight">
          <?php echo wp_kses_post($headline); ?>
        </h1>
      </div>
      <p class="text-[16px] md:text-[18px] font-medium leading-[1.6] text-black opacity-90">
        <?php echo esc_html($description); ?>
      </p>
      <a href="<?php echo esc_url($button_link); ?>"
        class="w-auto px-6 h-[45px] self-start bg-[#FF8D00] hover:bg-[#E07C00] text-white font-semibold text-[16px] rounded-[22px] shadow-[0px_4px_12px_rgba(255,141,0,0.3)] transition-all duration-300 flex items-center justify-center gap-2 group">
        <?php echo esc_html($button_text); ?>
        <svg class="w-4 h-4 fill-current transform group-hover:translate-x-0.5 transition-transform duration-200"
          viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.8907 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z"
            fill="currentColor" />
        </svg>
      </a>
    </div>

    <!-- Mobile Image Representation (Cut from Desktop composite) -->
    <div class="relative w-full aspect-[4/3] mt-10 rounded-[20px] overflow-hidden shadow-lg z-0">
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/rectangle_34624796.png" alt="Starizo careers"
        class="w-full h-full object-cover">
    </div>
  </div>
</div>
