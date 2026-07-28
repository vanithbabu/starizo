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

  <!-- Desktop / Laptop View (lg: 1024px+ screens) -->
  <div class="hidden lg:block w-full">

    <!-- 1. HERO SECTION -->
    <section class="w-full relative overflow-hidden min-h-[640px] bg-[#FDFBF3] pb-16">
      <!-- Background Image -->
      <div class="absolute inset-0 w-full h-full z-0 pointer-events-none">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/food-beverages-hero.png' ); ?>" alt="Food & Beverage Ingredients" class="w-full h-full object-cover object-right-top">
      </div>

      <!-- Hero Content Container -->
      <div class="relative z-20 max-w-[1280px] mx-auto px-6 sm:px-10 md:px-14 lg:px-16 pt-[130px] pb-12">
        <div class="flex flex-col items-start gap-[42px] max-w-[393px]">
          <!-- Top Text Group -->
          <div class="flex flex-col items-start gap-[14px] w-full">
            <span class="font-montserrat font-bold text-[14px] leading-[22px] tracking-[0.11em] uppercase text-black">
              FOOD & BAVERAGE
            </span>

            <h1 class="font-montserrat font-black text-[38px] lg:text-[42px] leading-[48px] lg:leading-[54px] tracking-tight w-full max-w-[393px]"
              style="background: linear-gradient(145.88deg, #00A256 20.19%, #5DC671 105.95%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
              Ingredients Built To Perform Inside Real Food.
            </h1>

            <p class="font-montserrat font-medium text-[16px] lg:text-[18px] leading-[26px] lg:leading-[30px] text-black/90 w-full max-w-[393px]">
              Today’s consumers expect more from food. Cleaner labels. Better experiences. Reliable quality. Our rice-derived ingredient portfolio helps manufacturers create products that perform across processing, shelf life, and consumption.
            </p>
          </div>

          <!-- Contact Us Button -->
          <div>
            <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>"
              class="group h-[46px] bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-montserrat font-bold text-[15px] px-8 rounded-full inline-flex items-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none shadow-md hover:shadow-xl">
              Contact Us
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24">
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
      
      <div class="max-w-[1120px] mx-auto flex flex-col gap-10">
        
        <!-- Header -->
        <div class="flex items-center gap-3">
          <span class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
          <h2 class="font-montserrat font-normal text-[22px] leading-[54px] tracking-[0.11em] uppercase text-white">
            EXPLORE INGREDIENT SOLUTIONS
          </h2>
        </div>

        <!-- 2-Column Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 w-full">

          <?php
          $solutions = [
            [
              'title' => 'Rice Starch',
              'desc'  => 'Clean-label texturizer providing smooth mouthfeel and stability.',
              'cat'   => 'Food • Bakery • Snacks',
              'img'   => 'food-rice.png',
              'link'  => site_url('/product/rice-starch')
            ],
            [
              'title' => 'Rice Protein',
              'desc'  => 'Plant-based, hypoallergenic protein source for functional food formulations.',
              'cat'   => 'Nutrition • Functional Foods',
              'img'   => 'food-rice.png',
              'link'  => site_url('/product/rice-starch')
            ],
            [
              'title' => 'Rice Maltodextrin',
              'desc'  => 'Soluble bulking agent and carrier with clean taste and controlled DE.',
              'cat'   => 'Food • Pharma',
              'img'   => 'food-rice.png',
              'link'  => site_url('/product/rice-starch')
            ],
            [
              'title' => 'IMO Powder',
              'desc'  => 'Isomalto-oligosaccharide prebiotic fibre for reduced sugar formulations.',
              'cat'   => 'Cross Industry',
              'img'   => 'food-rice.png',
              'link'  => site_url('/product/rice-starch')
            ],
            [
              'title' => 'IMO Syrups',
              'desc'  => 'High-purity liquid prebiotic sweetener for beverages and bars.',
              'cat'   => 'Food • Beverage',
              'img'   => 'food-syrup.svg',
              'link'  => site_url('/product/rice-starch')
            ],
            [
              'title' => 'Rice Glucose Syrups',
              'desc'  => 'Natural plant syrup offering controlled sweetness and viscosity.',
              'cat'   => 'Cross Industry',
              'img'   => 'food-syrup.svg',
              'link'  => site_url('/product/rice-starch')
            ],
            [
              'title' => 'High Maltose Rice Syrups',
              'desc'  => 'Non-GMO syrup designed for confectionery and beverage stability.',
              'cat'   => 'Cross Industry',
              'img'   => 'food-syrup.svg',
              'link'  => site_url('/product/rice-starch')
            ]
          ];

          foreach ( $solutions as $sol ) : ?>
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

          <!-- Card 08: Special CTA Card -->
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
      <div class="max-w-[1120px] mx-auto mb-12">
        <div class="flex items-center gap-3">
          <div class="w-1.5 h-8 bg-[#FF8D00] rounded-full"></div>
          <h2 class="font-montserrat font-normal text-[16px] text-[#5D3700] uppercase leading-[54px] tracking-[0.11em]">
            Frequently Asked Questions
          </h2>
        </div>
      </div>

      <div class="max-w-[1120px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-stretch">
        <!-- FAQ Accordion -->
        <div class="lg:col-span-6 flex flex-col justify-between">
          <div class="space-y-4">
            <div class="bg-white border border-gray-100 rounded-3xl py-4 px-6 md:py-[18px] md:px-8 shadow-sm">
              <div class="flex justify-between items-center gap-4">
                <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px]">Do you support formulation guidance?</h4>
                <div class="w-5 h-[2px] bg-[#5D3700] rounded-full shrink-0"></div>
              </div>
              <p class="mt-3 text-[15px] text-gray-600 leading-[1.6]">Yes. We collaborate to align ingredient performance with application goals.</p>
            </div>

            <div class="bg-white border border-gray-100 rounded-3xl py-4 px-6 md:py-[18px] md:px-8 shadow-sm">
              <div class="flex justify-between items-center gap-4">
                <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px]">Can we request technical information?</h4>
                <div class="w-5 h-5 flex items-center justify-center relative text-[#FF8D00] shrink-0">
                  <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
                  <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
                </div>
              </div>
            </div>

            <div class="bg-white border border-gray-100 rounded-3xl py-4 px-6 md:py-[18px] md:px-8 shadow-sm">
              <div class="flex justify-between items-center gap-4">
                <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px]">Do you support international supply?</h4>
                <div class="w-5 h-5 flex items-center justify-center relative text-[#FF8D00] shrink-0">
                  <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
                  <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Brand Card -->
        <div class="lg:col-span-6 bg-white border border-gray-100 rounded-[34px] p-8 shadow-[0px_4px_24px_rgba(0,0,0,0.05)] flex flex-col justify-between h-full">
          <div class="flex flex-col space-y-6">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/logo.svg' ); ?>" alt="Starizo" class="h-8 w-auto self-start">
            <h4 class="text-[22px] font-bold text-[#5D3700] leading-tight">More Than Ingredients.<br>Built For Growth.</h4>
            <p class="text-[15px] text-gray-700 leading-[1.8]">
              STARIZO combines sourcing intelligence, advanced processing, technical collaboration, and manufacturing scale to help businesses create products that perform in the real world.
            </p>
          </div>
          <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>"
            class="w-full border-2 border-[#FF8D00] hover:bg-[#FF8D00] text-[#FF8D00] hover:text-white font-semibold text-[16px] py-3 rounded-[22px] flex items-center justify-center gap-2 transition-all duration-200 mt-8 select-none">
            Speak To Team
            <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16"><path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.8907 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="currentColor"/></svg>
          </a>
        </div>
      </div>
    </section>

  </div>

  <!-- Mobile View (<1280px) -->
  <div class="block xl:hidden w-full px-4 py-8">
    <div class="text-center mb-8">
      <span class="text-[12px] font-bold tracking-[0.11em] uppercase text-black">FOOD & BEVERAGE</span>
      <h1 class="text-[30px] font-extrabold text-[#00A256] mt-2 mb-4 leading-tight">Ingredients Built To Perform Inside Real Food.</h1>
      <p class="text-[15px] text-gray-700 leading-relaxed mb-6">Today’s consumers expect more from food. Cleaner labels. Better experiences. Reliable quality.</p>
      <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="bg-[#FF8D00] text-white font-bold text-[14px] px-6 py-2.5 rounded-full inline-block">Contact Us</a>
    </div>

    <!-- Mobile Solution Cards -->
    <div class="flex flex-col gap-4">
      <?php foreach ( $solutions as $sol ) : ?>
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
