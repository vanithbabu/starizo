<?php
/**
 * Template Name: Cosmetics & Personal Care Category Page
 * Template Post Type: page
 *
 * @package Starizo
 */

get_header();
?>

<main class="w-full relative overflow-hidden bg-[#FDFBF3] pt-[170px] pb-16">

  <!-- Desktop View (xl: 1280px+ screens) -->
  <div class="hidden xl:block w-full">

    <!-- 1. HERO SECTION -->
    <section class="w-full relative overflow-hidden min-h-[580px] bg-[#FDFBF3] pb-16">
      <!-- Background Image -->
      <div class="absolute inset-0 w-full h-full z-0 pointer-events-none">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/consmitics-hero.png' ); ?>" alt="Cosmetics & Personal Care" class="w-full h-full object-cover object-right">
      </div>

      <!-- Hero Left Content Container -->
      <div class="relative z-10 max-w-[1280px] mx-auto w-full flex items-center justify-start h-full px-6 sm:px-10 md:px-14 lg:px-16 pt-6">
        <div class="w-[480px] max-w-full flex flex-col items-start gap-6 text-left my-auto">
          
          <!-- Category Tag -->
          <span class="font-montserrat font-bold text-[14px] leading-[22px] tracking-[0.11em] uppercase text-black">
            COSMETICS & PERSONAL CARE
          </span>

          <!-- Main Heading -->
          <h1 class="font-montserrat font-extrabold text-[42px] leading-[52px] tracking-tight text-[#00A256] w-[460px] max-w-full">
            Performance You Can<br>Feel. Ingredients You<br>Can Trust.
          </h1>

          <!-- Description Paragraph -->
          <p class="font-montserrat font-medium text-[17px] leading-[28px] text-black/90 w-[480px] max-w-full">
            Consumers experience cosmetics through texture, absorption, finish, and feel. STARIZO transforms rice into high-performance ingredients designed to support modern beauty, skincare, haircare, and personal care applications while enabling cleaner and more responsible formulations.
          </p>

          <!-- Contact Button -->
          <div class="pt-2">
            <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>"
              class="h-[46px] bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-bold text-[15px] px-8 rounded-full inline-flex items-center gap-2 shadow-md hover:shadow-lg transition-all duration-200 select-none">
              Contact Us
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
          </div>

        </div>
      </div>
    </section>

    <!-- 2. EXPLORE INGREDIENT SOLUTIONS SECTION -->
    <section class="w-full relative overflow-hidden py-16 px-6 sm:px-10 md:px-14 lg:px-16"
      style="background: linear-gradient(145.88deg, #00A256 20.19%, #5DC671 105.95%);">
      <div class="max-w-[1280px] mx-auto flex flex-col gap-10">
        
        <!-- Header Tag -->
        <div class="flex items-center gap-3">
          <div class="w-[4px] h-[32px] bg-[#FF8D00] rounded-full shrink-0"></div>
          <h2 class="font-montserrat font-normal text-[22px] leading-[54px] tracking-[0.11em] uppercase text-white">
            EXPLORE INGREDIENT SOLUTIONS
          </h2>
        </div>

        <!-- 2 Columns Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 w-full">

          <?php
          $cosmetics_solutions = [
            [
              'title' => 'Rice Biopolymer',
              'desc'  => 'Natural texturizer and film-former providing sensory elegance and velvet finish.',
              'cat'   => 'Skincare • Cosmetics',
              'img'   => 'food-rice.png',
              'link'  => site_url('/product/rice-starch')
            ],
            [
              'title' => 'Hydrolyzed Rice Protein',
              'desc'  => 'Nutrient-rich protein hydrolysate enhancing hair volume and skin hydration.',
              'cat'   => 'Haircare • Personal Care',
              'img'   => 'food-rice.png',
              'link'  => site_url('/product/rice-starch')
            ],
            [
              'title' => 'Rice Maltodextrin',
              'desc'  => 'Plant-based carrier and stabilizing agent for active cosmetic ingredients.',
              'cat'   => 'Personal Care • Formulations',
              'img'   => 'food-rice.png',
              'link'  => site_url('/product/rice-starch')
            ]
          ];

          foreach ( $cosmetics_solutions as $sol ) : ?>
          <!-- Solution Card -->
          <div class="bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-5 shadow-md flex items-center gap-5 min-h-[236px]">
            <div class="w-[144px] h-[198px] relative shrink-0 rounded-tl-none rounded-br-none overflow-hidden" style="border-top-left-radius: 6.33px; border-bottom-right-radius: 6.33px;">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/' . $sol['img'] ); ?>" alt="<?php echo esc_attr( $sol['title'] ); ?>" class="w-full h-full object-cover">
            </div>
            <div class="flex flex-col justify-between h-full py-1 gap-3">
              <div class="flex flex-col gap-2">
                <h3 class="font-montserrat font-bold text-[22px] leading-[32.73px] text-[#5D3700]"><?php echo esc_html( $sol['title'] ); ?></h3>
                <p class="font-montserrat font-normal text-[15px] lg:text-[16px] leading-[24px] text-black/80">
                  <?php echo esc_html( $sol['desc'] ); ?>
                </p>
              </div>
              <div class="flex flex-col gap-2 items-start">
                <span class="bg-[#FBEAC4] text-[#5D3700] rounded-[11.61px] px-[10.56px] py-[3.17px] font-montserrat font-medium text-[13px] leading-[20px]">
                  <?php echo esc_html( $sol['cat'] ); ?>
                </span>
                <a href="<?php echo esc_url( $sol['link'] ); ?>" class="font-montserrat font-bold text-[17px] leading-[22px] text-[#FF8D00] flex items-center gap-1 hover:underline">
                  View Details
                  <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>

          <!-- Card 04: Special CTA Card -->
          <div class="rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-6 text-white min-h-[236px] flex flex-col justify-between shadow-md"
            style="background: linear-gradient(90deg, #FF8D00 0%, #FFB457 100%);">
            <div class="flex flex-col gap-3">
              <h3 class="font-montserrat font-bold text-[22px] leading-[32.73px] text-white">
                Not Sure which Ingredient fits?
              </h3>
              <p class="font-montserrat font-normal text-[15px] lg:text-[16px] leading-[24px] text-white/95">
                Tell us your application, processing conditions, and performance goals. We’ll recommend the right ingredient system.
              </p>
            </div>
            <div class="pt-2">
              <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>"
                class="bg-white hover:bg-amber-50 text-[#FF8D00] font-montserrat font-bold text-[16px] px-6 py-2.5 rounded-[8.45px] inline-flex items-center gap-2 shadow-sm transition duration-200 select-none">
                Talk to Technical Team
                <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 3. FREQUENTLY ASKED QUESTIONS SECTION -->
    <section class="w-full bg-[#FDFBF3] py-20 px-6 sm:px-10 md:px-14 lg:px-16 border-t border-amber-100/60">
      <div class="max-w-[1280px] mx-auto">
        <div class="flex items-center gap-3 mb-10">
          <div class="w-[4px] h-[32px] bg-[#FF8D00] rounded-full shrink-0"></div>
          <h2 class="font-montserrat font-normal text-[22px] text-[#5D3700] uppercase leading-[54px] tracking-[0.11em]">
            Frequently Asked Questions
          </h2>
        </div>

        <div class="grid grid-cols-12 gap-12 items-start">
          <div class="col-span-7 flex flex-col gap-4">
            <div class="bg-white border border-gray-100/80 rounded-[28px] py-5 px-7 shadow-sm">
              <div class="flex justify-between items-center gap-4">
                <h4 class="font-montserrat font-semibold text-[17px] text-black">What types of rice-derived ingredients do you produce?</h4>
                <div class="w-5 h-5 flex items-center justify-center relative text-[#FF8D00] shrink-0">
                  <div class="w-5 h-[2px] bg-current rounded-full"></div>
                  <div class="w-[2px] h-5 bg-current rounded-full absolute"></div>
                </div>
              </div>
            </div>

            <div class="bg-white border border-gray-100/80 rounded-[28px] py-5 px-7 shadow-sm">
              <div class="flex justify-between items-center gap-4">
                <h4 class="font-montserrat font-semibold text-[17px] text-black">What certifications do your manufacturing facilities hold?</h4>
                <div class="w-5 h-5 flex items-center justify-center relative text-[#FF8D00] shrink-0">
                  <div class="w-5 h-[2px] bg-current rounded-full"></div>
                  <div class="w-[2px] h-5 bg-current rounded-full absolute"></div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-span-5">
            <div class="w-full bg-white border border-gray-100 shadow-sm rounded-[32px] p-8 flex flex-col justify-between min-h-[440px]">
              <div class="flex flex-col space-y-5">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/logo.svg' ); ?>" alt="Starizo Logo" class="h-9 w-auto self-start">
                <h3 class="text-[24px] font-bold text-[#5D3700] leading-snug">
                  More Than Ingredients.<br>Built For Growth.
                </h3>
                <p class="text-[14px] font-medium text-black/70 leading-relaxed">
                  STARIZO combines sourcing intelligence, advanced processing, technical collaboration, and manufacturing scale to help businesses create products that perform in the real world.
                </p>
              </div>
              <div class="pt-6">
                <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>"
                  class="w-full border-2 border-[#FF8D00] hover:bg-[#FF8D00] text-[#FF8D00] hover:text-white font-bold text-[15px] py-3.5 rounded-full flex items-center justify-center gap-2 transition-all duration-200 select-none">
                  Speak To Team
                  <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16"><path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.8907 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="currentColor"/></svg>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

  </div>

  <!-- Mobile View (<1280px) -->
  <div class="block xl:hidden w-full px-4 py-8">
    <div class="text-center mb-8">
      <span class="text-[12px] font-bold tracking-[0.11em] uppercase text-black">COSMETICS & PERSONAL CARE</span>
      <h1 class="text-[30px] font-extrabold text-[#00A256] mt-2 mb-4 leading-tight">Performance You Can Feel. Ingredients You Can Trust.</h1>
      <p class="text-[15px] text-gray-700 leading-relaxed mb-6">Consumers experience cosmetics through texture, absorption, finish, and feel.</p>
      <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="bg-[#FF8D00] text-white font-bold text-[14px] px-6 py-2.5 rounded-full inline-block">Contact Us</a>
    </div>

    <div class="flex flex-col gap-4">
      <?php foreach ( $cosmetics_solutions as $sol ) : ?>
      <div class="bg-white rounded-tl-[24px] rounded-br-[24px] p-4 shadow-sm flex gap-3 items-center">
        <div class="w-[90px] h-[120px] shrink-0 rounded-lg overflow-hidden">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/' . $sol['img'] ); ?>" class="w-full h-full object-cover">
        </div>
        <div>
          <h3 class="font-bold text-[16px] text-[#5D3700] mb-1"><?php echo esc_html( $sol['title'] ); ?></h3>
          <p class="text-[12px] text-gray-600 line-clamp-2 mb-2"><?php echo esc_html( $sol['desc'] ); ?></p>
          <a href="<?php echo esc_url( $sol['link'] ); ?>" class="text-[13px] font-bold text-[#FF8D00]">View Details &gt;</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

</main>

<?php get_footer(); ?>
