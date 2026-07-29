<?php
/**
 * Template Part: Food & Beverage Hero Block
 *
 * @package Starizo
 */
?>

<!-- ==================== DESKTOP LAYOUT VIEW (xl: 1280px+ screens) ==================== -->
<div class="hidden xl:block w-full">

  <!-- HERO SECTION -->
  <section class="w-full relative overflow-hidden min-h-[calc(100vh-80px)] min-h-[720px] lg:min-h-[820px] bg-[#FDFBF3] pt-3 pb-16 flex items-center">

    <!-- Full Cover Background Image -->
    <div class="absolute inset-0 w-full h-full z-0 pointer-events-none">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/food&Bevarges-hero.png' ); ?>" alt="Food &amp; Beverage Ingredients"
        class="w-full h-full object-cover object-right">
    </div>

    <!-- Desktop Hero Left Content Container -->
    <div class="relative z-10 max-w-[1240px] mx-auto px-6 sm:px-10 md:px-14 lg:px-16 pt-16 pb-16 flex items-center justify-start w-full">
      
      <div class="w-[480px] max-w-full flex flex-col items-start gap-6 text-left my-auto pt-16">

        <!-- Category Tag -->
        <span class="font-montserrat font-bold text-[14px] leading-[22px] tracking-[0.11em] uppercase text-black">
          FOOD &amp; BEVERAGE
        </span>

        <!-- Main Heading -->
        <h1 class="font-montserrat font-extrabold text-[42px] leading-[52px] tracking-tight text-[#00A256] w-[460px] max-w-full">
          Ingredients Built To<br>Perform Inside<br>Real Food.
        </h1>

        <!-- Description Paragraph -->
        <p class="font-montserrat font-medium text-[18px] leading-[30px] tracking-normal text-black/90 w-[506px] max-w-full">
          Today’s consumers expect more from food. Cleaner labels. Better experiences. Reliable quality. Our rice-derived ingredient portfolio helps manufacturers create products that perform across processing, shelf life, and consumption.
        </p>

        <!-- Contact Us Button -->
        <div class="pt-2">
          <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>"
            class="h-[46px] bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-bold text-[15px] px-7 rounded-full inline-flex items-center gap-2 shadow-md hover:shadow-lg transition-all duration-200 select-none">
            Contact Us
            <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </a>
        </div>

      </div>

    </div>

  </section>

</div>

<!-- ==================== MOBILE LAYOUT VIEW (<1280px screens) ==================== -->
<div class="block xl:hidden w-full">

  <!-- Mobile Hero Section -->
  <section class="w-full relative overflow-hidden bg-[#FDFBF3] min-h-[calc(100vh-70px)] min-h-[640px] pt-6 pb-8 px-5 flex flex-col justify-between items-center text-center">
    
    <!-- Full Cover Background Image -->
    <div class="absolute inset-0 w-full h-full z-0 pointer-events-none">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/food&Bevarges-hero.png' ); ?>" alt="Food &amp; Beverage"
        class="w-full h-full object-cover object-[30%_top]">
    </div>

    <!-- Inner Container -->
    <div class="relative z-10 flex flex-col items-center justify-between text-center w-full max-w-[351px] min-h-[520px] my-auto mx-auto pt-2 pb-2">
      
      <!-- Category Tag -->
      <span class="font-montserrat font-bold text-[12px] leading-[22px] tracking-[0.11em] uppercase text-black text-center whitespace-nowrap w-auto mt-2 mb-[40px]">
        FOOD &amp; BEVERAGE
      </span>

      <!-- Text Group -->
      <div class="flex flex-col items-center justify-center text-center w-full max-w-[351px] my-auto">
        
        <!-- Main Heading -->
        <h1 class="font-bold text-[30px] sm:text-[32px] leading-[36px] sm:leading-[38.4px] text-black text-center w-[351px] max-w-full my-auto"
          style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 800;">
          Ingredients Built To<br>Perform Inside<br>
          <span class="text-[#00A256]">Real Food.</span>
        </h1>

        <!-- Contact Button -->
        <div class="mt-[60px]">
          <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>"
            class="h-[40px] px-6 bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-bold text-[13px] rounded-full inline-flex items-center justify-center gap-[8px] shadow-md transition duration-200 select-none">
            Contact Us
            <svg class="w-3.5 h-3.5 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </a>
        </div>

      </div>

      <!-- Pagination Indicators -->
      <div class="flex items-center justify-center gap-2 pt-4">
        <span class="w-[28px] h-[8px] bg-[#FF8D00] rounded-full inline-block"></span>
        <span class="w-[8px] h-[8px] bg-[#52525B] rounded-full inline-block"></span>
        <span class="w-[8px] h-[8px] bg-[#52525B] rounded-full inline-block"></span>
      </div>

    </div>

  </section>

</div>
