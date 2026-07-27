<?php get_header(); ?>

<!-- ==================== DESKTOP LAYOUT VIEW (xl: 1280px+ screens) ==================== -->
<div class="hidden xl:block w-full">

<main class="w-full bg-[#FDFBF3] relative overflow-hidden pt-3 pb-16">

      <!-- Background Radiating Rays Texture -->
      <img src="./public/assets/Looper-1.png" alt=""
        class="absolute top-0 left-1 w-[55%] h-full object-cover object-left opacity-100 pointer-events-none select-none z-0">

      

      <!-- Main Hero Content Container (Exact Left & Right side spacing matching all other pages) -->
      <div class="relative z-10 w-full max-w-[1280px] mx-auto px-6 sm:px-10 md:px-14 lg:px-16">

        <!-- Breadcrumb Bar (Figma Spec 1:1: width 247px, height 15px, font 12px, line-height 100%, text color #808080) -->
        <div class="flex flex-row items-center gap-1.5 shrink-0 mb-8"
          style="width: 247px; height: 15px; font-family: 'Montserrat', sans-serif; font-size: 12px; line-height: 100%; letter-spacing: 0%; color: #808080;">
          <a href="<?php echo esc_url( home_url() ); ?>" class="font-normal text-[#808080] hover:text-starizo-orange transition-colors whitespace-nowrap"
            style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 12px; line-height: 100%; color: #808080;">Products</a>
          <span class="font-normal text-[#808080]" style="font-size: 12px; line-height: 100%; color: #808080;">/</span>
          <span class="font-normal text-[#808080] whitespace-nowrap"
            style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 12px; line-height: 100%; color: #808080;"><?php echo esc_html( get_field('product_category') ); ?></span>
          <span class="font-normal text-[#808080]" style="font-size: 12px; line-height: 100%; color: #808080;">/</span>
          <span class="font-medium text-[#808080] whitespace-nowrap"
            style="font-family: 'Montserrat', sans-serif; font-weight: 500; font-size: 12px; line-height: 100%; color: #808080;"><?php the_title(); ?></span>
        </div>

        <!-- Hero Content Grid: Left Text Column + Right Image Column -->
        <div class="grid grid-cols-12 gap-8 lg:gap-12 items-center min-h-[460px]">

          <!-- Left Text Column (Figma: width 534px, min-height 281px, gap 42px) -->
          <div class="col-span-7 flex flex-col items-start text-left" style="max-width: 534px; min-height: 281px; gap: 42px;">
            
            <!-- Inner Text Card (Figma: width 534px, min-height 194px, gap 14px) -->
            <div class="flex flex-col items-start w-full" style="max-width: 534px; gap: 14px;">

              <!-- 1. Category Badge (Single Line, 14px Montserrat Bold, letter-spacing 11%, line-height 22px) -->
              <span class="font-montserrat font-bold text-black uppercase whitespace-nowrap inline-block shrink-0"
                style="font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 14px; line-height: 22px; letter-spacing: 0.11em; text-transform: uppercase; color: #000000; height: 22px;">
                <?php echo esc_html( get_field('product_category') ); ?>
              </span>

              <!-- 2. Main Title (Figma: width 534px, height 54px, 42px Montserrat Black, line-height 54px, color #00A256) -->
              <h1 class="font-montserrat font-black text-[#00A256]"
                style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 42px; line-height: 54px; letter-spacing: 0%; color: #00A256; width: 534px; height: 54px;">
                <?php the_title(); ?>
              </h1>

              <!-- 3. Subtitle Description (Figma: width 534px, height 90px, 18px Montserrat Medium, line-height 30px, color rgba(0,0,0,0.8)) -->
              <p class="font-montserrat font-medium text-black/80"
                style="font-family: 'Montserrat', sans-serif; font-weight: 500; font-size: 18px; line-height: 30px; letter-spacing: 0%; color: rgba(0, 0, 0, 0.8); width: 534px; height: 90px;">
                <?php echo esc_html( get_field('hero_subtitle') ); ?>
              </p>

            </div>

            <!-- Horizontal Buttons Row Card (Figma: width 384px, height 45px, gap 21px) -->
            <div class="flex flex-row items-center justify-start shrink-0" style="max-width: 384px; height: 45px; gap: 21px;">
              
              <!-- Left Button: Contact Us (Figma: width 152px, height 45px, radius 22px, bg #FF8D00, 18px SemiBold #FFFFFF with > icon) -->
              <a href="./careers.html#contact"
                class="flex flex-row items-center justify-center shrink-0 whitespace-nowrap shadow-sm hover:opacity-90 transition select-none group"
                style="width: 152px; height: 45px; border-radius: 22px; padding: 12px; background-color: #FF8D00; gap: 10px;">
                <span class="font-montserrat font-semibold text-white whitespace-nowrap"
                  style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 18px; line-height: 21px; letter-spacing: 0%; color: #FFFFFF;">
                  Contact Us
                </span>
                <svg class="w-4 h-4 fill-white transform group-hover:translate-x-0.5 transition-transform duration-200 shrink-0"
                  viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.931 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z"
                    fill="#FFFFFF" />
                </svg>
              </a>

              <!-- Right Button Link: Download Brochure (Figma: width 211px, height 21px, 18px SemiBold #FF8D00 with arrow-down.svg icon) -->
              <a href="#" download
                class="flex flex-row items-center justify-start shrink-0 whitespace-nowrap hover:opacity-85 transition select-none group"
                style="width: 211px; height: 21px; gap: 12px;">
                <span class="font-montserrat font-semibold text-[#FF8D00] whitespace-nowrap"
                  style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 18px; line-height: 21px; letter-spacing: 0%; color: #FF8D00;">
                  Download Brochure
                </span>
                <!-- Exact SVG icon from public/assets/arrow-down.svg -->
                <img src="./public/assets/arrow-down.svg" alt="Download" class="w-[13px] h-[17px] shrink-0 transform group-hover:translate-y-0.5 transition-transform duration-200">
              </a>

            </div>

          </div>

          <!-- Right Column: Product Pouch Image & Green Leaf Sprout Watermark (Figma Spec 1:1) -->
          <div class="col-span-5 relative flex items-center justify-center min-h-[488px]">
            
            <!-- 1. Background Leaf Image: product-leaf.png (Figma: width 372.77px, height 487.60px, opacity 0.39, under rice bag) -->
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-leaf.png' ); ?>" alt=""
              class="absolute pointer-events-none select-none z-0"
              style="width: 372.77px; height: 487.60px; opacity: 1;">

            <!-- 2. Foreground Rice Bag Image: dynamic post thumbnail -->
            <div class="relative z-10 filter drop-shadow-xl transform hover:scale-[1.02] transition-transform duration-300">
              <?php if ( has_post_thumbnail() ) : ?>
                <img src="<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>" alt="<?php the_title_attribute(); ?>"
                  class="object-contain mx-auto"
                  style="width: 365px; height: 484px;">
              <?php else : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rice-bag-hero.png' ); ?>" alt="<?php the_title_attribute(); ?>"
                  class="object-contain mx-auto"
                  style="width: 365px; height: 484px;">
              <?php endif; ?>
            </div>

          </div>

        </div>

        <!-- Bottom Highlights Bar -->
        <div class="flex flex-row items-center justify-start shrink-0 mt-4 flex-wrap"
          style="max-width: 708px; gap: 19px;">
          
          <?php if ( have_rows('hero_badges') ) : ?>
            <?php while ( have_rows('hero_badges') ) : the_row(); 
              $badge_label = get_sub_field('label');
            ?>
              <!-- Badge -->
              <div class="flex flex-row items-center shrink-0 mb-2" style="gap: 12.82px; height: 32.76px;">
                <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm"
                  style="width: 32.76px; height: 32.76px;">
                  <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-black"
                  style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 12.82px; line-height: 14.95px; letter-spacing: 0%; color: #000000;">
                  <?php echo esc_html( $badge_label ); ?>
                </span>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>

        </div>

      </div>

    </main>

    <!-- ==================== WHY MANUFACTURERS CHOOSE RICE STARCH SECTION (FIGMA SPEC 1:1: 1280px x 708px) ==================== -->
    <section class="w-full bg-[#00A256] text-white relative flex flex-col items-center justify-center py-16 px-6 sm:px-10 md:px-14 lg:px-16"
      style="min-height: 708px;">
      
      <!-- Top Header Container (Figma: width 1116px, height 96px, gap 12px) -->
      <div class="w-full max-w-[1116px] mx-auto flex flex-col items-center justify-center text-center mb-12" style="min-height: 96px; gap: 12px;">
        
        <!-- Category Badge Row with Orange Left Accent Bar -->
        <div class="flex items-center gap-3">
          <div class="w-[5px] h-[28px] bg-[#FF8D00] rounded-full shrink-0"></div>
          <!-- Badge Text (Figma: 22px Montserrat Regular, letter-spacing 11%, line-height 54px, uppercase #FFFFFF) -->
          <h2 class="font-montserrat font-normal text-white uppercase whitespace-nowrap"
            style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 22px; line-height: 54px; letter-spacing: 0.11em; text-transform: uppercase; color: #FFFFFF;">
            WHY MANUFACTURERS CHOOSE RICE STARCH
          </h2>
        </div>

        <!-- Headline Title (Figma: 22px Montserrat Bold, line-height 30px, color #FFFFFF) -->
        <p class="font-montserrat font-bold text-white text-center"
          style="font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 22px; line-height: 30px; letter-spacing: 0%; color: #FFFFFF;">
          Built for formulations where ingredient performance matters.
        </p>

      </div>

      <!-- 4-Card Horizontal Container (Figma Spec 1:1: 4 cards side-by-side in single horizontal row) -->
      <div class="w-full max-w-[1180px] mx-auto flex flex-row flex-nowrap items-stretch justify-center gap-4 xl:gap-[25px]">
        
        <!-- Card 1: Ultra Fine Granules (Figma: 266.12px x 354px) -->
        <div class="bg-white text-black overflow-hidden shadow-xl flex flex-col shrink-0 transition-transform duration-300 hover:-translate-y-1.5"
          style="width: 266.12px; height: 354px; border-top-left-radius: 44px; border-bottom-right-radius: 44px;">
          <!-- Top Image (Figma: width 252px, height 201px, top 8px, left 7px, border-top-left 44px) -->
          <div class="overflow-hidden shrink-0"
            style="width: 252px; height: 201px; margin-top: 8px; margin-left: 7px; margin-right: 7px; border-top-left-radius: 44px;">
            <img src="./public/assets/product-rice.png" alt="Ultra Fine Granules" class="w-full h-full object-cover" style="border-top-left-radius: 44px;">
          </div>
          <!-- Card Content Padding -->
          <div class="px-4 py-3 flex flex-col justify-start flex-1" style="gap: 4px;">
            <h3 class="font-montserrat font-semibold text-[#5D3700]"
              style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 18px; line-height: 28px; letter-spacing: 0%; color: #5D3700;">
              Ultra Fine Granules
            </h3>
            <p class="font-montserrat font-normal text-black/70"
              style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 15px; line-height: 22px; letter-spacing: 0%; color: rgba(0, 0, 0, 0.7);">
              Creates smoother mouthfeel and improved texture performance.
            </p>
          </div>
        </div>

        <!-- Card 2: Stable Under Processing (Figma Spec 1:1: border-top-right 44px, border-bottom-left 44px) -->
        <div class="bg-white text-black overflow-hidden shadow-xl flex flex-col shrink-0 transition-transform duration-300 hover:-translate-y-1.5"
          style="width: 266.12px; height: 354px; border-top-right-radius: 44px; border-bottom-left-radius: 44px;">
          <!-- Top Image (Figma: width 252px, height 201px, top 8px, left 7px, border-top-right 44px) -->
          <div class="overflow-hidden shrink-0"
            style="width: 252px; height: 201px; margin-top: 8px; margin-left: 7px; margin-right: 7px; border-top-right-radius: 44px;">
            <img src="./public/assets/product-expect.png" alt="Stable Under Processing" class="w-full h-full object-cover" style="border-top-right-radius: 44px;">
          </div>
          <!-- Card Content Padding -->
          <div class="px-4 py-3 flex flex-col justify-start flex-1" style="gap: 4px;">
            <h3 class="font-montserrat font-semibold text-[#5D3700]"
              style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 18px; line-height: 28px; letter-spacing: 0%; color: #5D3700;">
              Stable Under Processing
            </h3>
            <p class="font-montserrat font-normal text-black/70"
              style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 15px; line-height: 22px; letter-spacing: 0%; color: rgba(0, 0, 0, 0.7);">
              Maintains consistency under heat and varying pH conditions.
            </p>
          </div>
        </div>

        <!-- Card 3: Clean Label Compatibility (Figma Spec 1:1: border-top-left 44px, border-bottom-right 44px) -->
        <div class="bg-white text-black overflow-hidden shadow-xl flex flex-col shrink-0 transition-transform duration-300 hover:-translate-y-1.5"
          style="width: 266.12px; height: 354px; border-top-left-radius: 44px; border-bottom-right-radius: 44px;">
          <!-- Top Image (Figma: width 252px, height 201px, top 8px, left 7px, border-top-left 44px) -->
          <div class="overflow-hidden shrink-0"
            style="width: 252px; height: 201px; margin-top: 8px; margin-left: 7px; margin-right: 7px; border-top-left-radius: 44px;">
            <img src="./public/assets/product-clean.png" alt="Clean Label Compatibility" class="w-full h-full object-cover" style="border-top-left-radius: 44px;">
          </div>
          <!-- Card Content Padding -->
          <div class="px-4 py-3 flex flex-col justify-start flex-1" style="gap: 4px;">
            <h3 class="font-montserrat font-semibold text-[#5D3700]"
              style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 18px; line-height: 28px; letter-spacing: 0%; color: #5D3700;">
              Clean Label Compatibility
            </h3>
            <p class="font-montserrat font-normal text-black/70"
              style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 15px; line-height: 22px; letter-spacing: 0%; color: rgba(0, 0, 0, 0.7);">
              Supports simpler ingredient declarations.
            </p>
          </div>
        </div>

        <!-- Card 4: Excellent Digestibility (Figma Spec 1:1: border-top-right 44px, border-bottom-left 44px) -->
        <div class="bg-white text-black overflow-hidden shadow-xl flex flex-col shrink-0 transition-transform duration-300 hover:-translate-y-1.5"
          style="width: 266.12px; height: 354px; border-top-right-radius: 44px; border-bottom-left-radius: 44px;">
          <!-- Top Image (Figma: width 252px, height 201px, top 8px, left 7px, border-top-right 44px) -->
          <div class="overflow-hidden shrink-0"
            style="width: 252px; height: 201px; margin-top: 8px; margin-left: 7px; margin-right: 7px; border-top-right-radius: 44px;">
            <img src="./public/assets/product-excellet.png" alt="Excellent Digestibility" class="w-full h-full object-cover" style="border-top-right-radius: 44px;">
          </div>
          <!-- Card Content Padding -->
          <div class="px-4 py-3 flex flex-col justify-start flex-1" style="gap: 4px;">
            <h3 class="font-montserrat font-semibold text-[#5D3700]"
              style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 18px; line-height: 28px; letter-spacing: 0%; color: #5D3700;">
              Excellent Digestibility
            </h3>
            <p class="font-montserrat font-normal text-black/70"
              style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 15px; line-height: 22px; letter-spacing: 0%; color: rgba(0, 0, 0, 0.7);">
              Suitable for sensitive formulations.
            </p>
          </div>
        </div>

      </div>

    </section>

    <!-- ==================== PRODUCT VIDEO / WHY STARIZO SECTION (DESKTOP) ==================== -->
    <section class="w-full bg-[#FDFBF3] py-14 md:py-16 px-6 flex items-center justify-center relative">
      <div class="w-full max-w-[1240px] mx-auto flex items-center justify-center">
        <!-- Floating Video Image Card (Height Increased: 600px height with elegant margins) -->
        <div class="relative overflow-hidden shadow-2xl group cursor-pointer transform hover:scale-[1.005] transition-transform duration-300 mx-auto"
          style="height: 600px; max-width: 98%; aspect-ratio: 2.1/1; border-top-left-radius: 72px; border-bottom-right-radius: 72px;">
          <img src="./public/assets/product-vedio.png" alt="Why STARIZO? More Than Ingredient Supply"
            class="w-full h-full object-cover block"
            style="border-top-left-radius: 72px; border-bottom-right-radius: 72px;">
        </div>
      </div>
    </section>

    <!-- ==================== APPLICATION EXPLORER SECTION (FIGMA TARGET 1:1 MATCH) ==================== -->
    <section class="w-full bg-[#FDFBF3] py-20 px-6 flex items-center justify-center relative">
      
      <!-- Outer Main Section Card (White background with Leaf Curved corners) -->
      <div class="w-full max-w-[1100px] mx-auto bg-white py-16 px-8 sm:px-12 shadow-xl relative text-black"
        style="border-top-left-radius: 96px; border-bottom-right-radius: 96px;">
        
        <!-- Top Context Header Container -->
        <div class="w-full max-w-[600px] mx-auto flex flex-col items-center justify-center text-center mb-12" style="gap: 8px;">
          
          <!-- Badge Header with Vertical Orange Line -->
          <div class="flex items-center justify-center gap-2 mb-1">
            <span class="w-[4px] h-[20px] bg-[#DF890C] rounded-full inline-block"></span>
            <span class="font-montserrat font-bold uppercase text-[15px] tracking-[0.15em] text-[#DF890C]">
              APPLICATION EXPLORER
            </span>
          </div>

          <!-- Main Subtitle -->
          <h2 class="font-montserrat font-bold text-black text-[24px] sm:text-[26px] leading-[34px] text-center">
            Designed For Multiple Food Systems
          </h2>

        </div>

        <!-- Row 1: Top 3 Cards Row (Strict 280px cards, 32px gap) -->
        <div class="mx-auto flex flex-row flex-nowrap items-center justify-center gap-[32px] mb-[32px] w-full">
          
          <!-- Card 1: Bakery -->
          <div class="bg-[#FDFBEE] rounded-[28px] p-[12px] flex flex-col justify-start shrink-0 relative transition-transform duration-300 hover:-translate-y-1.5 shadow-sm"
            style="width: 280px; height: 345px;">
            <!-- Image Frame (Leaf Curved Corners: TL 36px, BR 36px) -->
            <div class="relative w-full overflow-visible shrink-0" style="height: 195px;">
              <div class="w-full h-full overflow-hidden" style="border-top-left-radius: 36px; border-bottom-right-radius: 36px;">
                <img src="./public/assets/product-bakery.png" alt="Bakery" class="w-full h-full object-cover">
              </div>
              <!-- Overlapping Circle Icon Badge -->
              <div class="w-[52px] h-[52px] bg-white rounded-full shadow-md flex items-center justify-center absolute -bottom-[18px] left-[16px] z-20 border border-gray-100">
                <span class="text-[26px] leading-none">🍞</span>
              </div>
            </div>
            <!-- Text Content -->
            <div class="pt-6 px-3 flex flex-col justify-start flex-1" style="gap: 3px;">
              <h3 class="font-montserrat font-bold text-[#6A3E00] text-[17px] leading-[24px]">
                Bakery
              </h3>
              <p class="font-montserrat font-normal text-black/70 text-[14px] leading-[20px]">
                Improve softness and structure.
              </p>
            </div>
          </div>

          <!-- Card 2: Dairy -->
          <div class="bg-[#FDFBEE] rounded-[28px] p-[12px] flex flex-col justify-start shrink-0 relative transition-transform duration-300 hover:-translate-y-1.5 shadow-sm"
            style="width: 280px; height: 345px;">
            <div class="relative w-full overflow-visible shrink-0" style="height: 195px;">
              <div class="w-full h-full overflow-hidden" style="border-top-left-radius: 36px; border-bottom-right-radius: 36px;">
                <img src="./public/assets/product-milk.png" alt="Dairy" class="w-full h-full object-cover">
              </div>
              <div class="w-[52px] h-[52px] bg-white rounded-full shadow-md flex items-center justify-center absolute -bottom-[18px] left-[16px] z-20 border border-gray-100">
                <span class="text-[26px] leading-none">🥛</span>
              </div>
            </div>
            <div class="pt-6 px-3 flex flex-col justify-start flex-1" style="gap: 3px;">
              <h3 class="font-montserrat font-bold text-[#6A3E00] text-[17px] leading-[24px]">
                Dairy
              </h3>
              <p class="font-montserrat font-normal text-black/70 text-[14px] leading-[20px]">
                Create creamier textures.
              </p>
            </div>
          </div>

          <!-- Card 3: Ready Meals -->
          <div class="bg-[#FDFBEE] rounded-[28px] p-[12px] flex flex-col justify-start shrink-0 relative transition-transform duration-300 hover:-translate-y-1.5 shadow-sm"
            style="width: 280px; height: 345px;">
            <div class="relative w-full overflow-visible shrink-0" style="height: 195px;">
              <div class="w-full h-full overflow-hidden" style="border-top-left-radius: 36px; border-bottom-right-radius: 36px;">
                <img src="./public/assets/product-meals.png" alt="Ready Meals" class="w-full h-full object-cover">
              </div>
              <div class="w-[52px] h-[52px] bg-white rounded-full shadow-md flex items-center justify-center absolute -bottom-[18px] left-[16px] z-20 border border-gray-100">
                <span class="text-[26px] leading-none">🥣</span>
              </div>
            </div>
            <div class="pt-6 px-3 flex flex-col justify-start flex-1" style="gap: 3px;">
              <h3 class="font-montserrat font-bold text-[#6A3E00] text-[17px] leading-[24px]">
                Ready Meals
              </h3>
              <p class="font-montserrat font-normal text-black/70 text-[14px] leading-[20px]">
                Improve softness and structure.
              </p>
            </div>
          </div>

        </div>

        <!-- Row 2: Bottom 2 Cards Centered Row (Strict 280px cards, 32px gap) -->
        <div class="mx-auto flex flex-row flex-nowrap items-center justify-center gap-[32px] relative w-full">

          <!-- Left Sprout Leaf Watermark -->
          <img src="./public/assets/leaf-product.svg" alt=""
            class="absolute left-2 bottom-2 w-[120px] h-auto opacity-100 pointer-events-none select-none">

          <!-- Right Sprout Leaf Watermark -->
          <img src="./public/assets/leaf-product.svg" alt=""
            class="absolute right-2 bottom-2 w-[120px] h-auto opacity-100 pointer-events-none select-none transform scale-x-[-1]">

          <!-- Card 4: Confectionery -->
          <div class="bg-[#FDFBEE] rounded-[28px] p-[12px] flex flex-col justify-start shrink-0 relative transition-transform duration-300 hover:-translate-y-1.5 shadow-sm"
            style="width: 280px; height: 345px;">
            <div class="relative w-full overflow-visible shrink-0" style="height: 195px;">
              <div class="w-full h-full overflow-hidden" style="border-top-left-radius: 36px; border-bottom-right-radius: 36px;">
                <img src="./public/assets/product-confectionery.png" alt="Confectionery" class="w-full h-full object-cover">
              </div>
              <div class="w-[52px] h-[52px] bg-white rounded-full shadow-md flex items-center justify-center absolute -bottom-[18px] left-[16px] z-20 border border-gray-100">
                <span class="text-[26px] leading-none">🍬</span>
              </div>
            </div>
            <div class="pt-6 px-3 flex flex-col justify-start flex-1" style="gap: 3px;">
              <h3 class="font-montserrat font-bold text-[#6A3E00] text-[17px] leading-[24px]">
                Confectionery
              </h3>
              <p class="font-montserrat font-normal text-black/70 text-[14px] leading-[20px]">
                Support coating and smooth finish.
              </p>
            </div>
          </div>

          <!-- Card 5: Infant Nutrition -->
          <div class="bg-[#FDFBEE] rounded-[28px] p-[12px] flex flex-col justify-start shrink-0 relative transition-transform duration-300 hover:-translate-y-1.5 shadow-sm"
            style="width: 280px; height: 345px;">
            <div class="relative w-full overflow-visible shrink-0" style="height: 195px;">
              <div class="w-full h-full overflow-hidden" style="border-top-left-radius: 36px; border-bottom-right-radius: 36px;">
                <img src="./public/assets/product-nutrition.png" alt="Infant Nutrition" class="w-full h-full object-cover">
              </div>
              <div class="w-[52px] h-[52px] bg-white rounded-full shadow-md flex items-center justify-center absolute -bottom-[18px] left-[16px] z-20 border border-gray-100">
                <span class="text-[26px] leading-none">👶</span>
              </div>
            </div>
            <div class="pt-6 px-3 flex flex-col justify-start flex-1" style="gap: 3px;">
              <h3 class="font-montserrat font-bold text-[#6A3E00] text-[17px] leading-[24px]">
                Infant Nutrition
              </h3>
              <p class="font-montserrat font-normal text-black/70 text-[14px] leading-[20px]">
                High digestibility and gentle texture.
              </p>
            </div>
          </div>

        </div>

      </div>

    </section>

    <!-- FAQ & Value Proposition Section -->
    <section class="w-full py-16 md:py-24 bg-starizo-bg/20">

      <!-- FAQ Header (On top, separate from columns to align them vertically) -->
      <div class="max-w-7xl mx-auto px-6 md:px-8 mb-12">
        <div class="flex items-center gap-3">
          <!-- Figma orange rectangle 34624779 (6px x 33px) -->
          <div class="w-1.5 h-8 bg-starizo-orange rounded-full"></div>
          <h2
            class="font-montserrat font-normal text-[16px] text-starizo-brown uppercase leading-[54px] tracking-[0.11em]">
            Frequently Asked Questions</h2>
        </div>
      </div>

      <!-- Content Columns Grid (Equal width columns, items-stretch to align height) -->
      <div class="max-w-7xl mx-auto px-6 md:px-8 grid grid-cols-1 lg:grid-cols-12 gap-16 items-stretch">

        <!-- FAQ Left accordion (Statically rendered list) -->
        <div class="lg:col-span-6 flex flex-col">

          <!-- FAQ list -->
          <div class="space-y-4 flex-1">

            <!-- FAQ 1 (Active/Expanded) -->
            <div class="bg-white border border-gray-100 rounded-3xl py-4 px-6 md:py-[18px] md:px-8 shadow-sm">
              <div class="flex justify-between items-center gap-4">
                <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]">Do you
                  support formulation guidance?</h4>
                <div class="w-5 h-[2px] bg-starizo-brown rounded-full"></div>
              </div>
              <p class="mt-3 text-[16px] text-gray-600 leading-[1.6] max-w-xl">
                Yes. We collaborate to align ingredient performance with application goals.
              </p>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white border border-gray-100 rounded-3xl py-4 px-6 md:py-[18px] md:px-8 shadow-sm">
              <div class="flex justify-between items-center gap-4">
                <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]">Can we
                  request technical information?</h4>
                <div class="w-5 h-5 flex items-center justify-center relative text-starizo-orange">
                  <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
                  <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
                </div>
              </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white border border-gray-100 rounded-3xl py-4 px-6 md:py-[18px] md:px-8 shadow-sm">
              <div class="flex justify-between items-center gap-4">
                <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]">Do you
                  support international supply?</h4>
                <div class="w-5 h-5 flex items-center justify-center relative text-starizo-orange">
                  <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
                  <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
                </div>
              </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-white border border-gray-100 rounded-3xl py-4 px-6 md:py-[18px] md:px-8 shadow-sm">
              <div class="flex justify-between items-center gap-4">
                <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]">Can
                  STARIZO support product development?</h4>
                <div class="w-5 h-5 flex items-center justify-center relative text-starizo-orange">
                  <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
                  <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
                </div>
              </div>
            </div>

            <!-- FAQ 5 -->
            <div class="bg-white border border-gray-100 rounded-3xl py-4 px-6 md:py-[18px] md:px-8 shadow-sm">
              <div class="flex justify-between items-center gap-4">
                <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]">Is there
                  a minimum order requirement?</h4>
                <div class="w-5 h-5 flex items-center justify-center relative text-starizo-orange">
                  <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
                  <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
                </div>
              </div>
            </div>

          </div>

        </div>

        <!-- Brand Info Card Right (Matches Left container in width and stretches to match height) -->
        <div
          class="lg:col-span-6 bg-white border border-gray-100 rounded-[34px] p-8 shadow-[0px_4px_24px_rgba(0,0,0,0.05)] flex flex-col justify-between h-full">
          <div class="flex flex-col space-y-6">
            <img src="./public/assets/logo.svg" alt="Starizo" class="h-8 w-auto self-start">
            <h4 class="text-[22px] font-bold text-starizo-brown leading-tight">
              More Than Ingredients.<br>Built For Growth.
            </h4>
            <p class="text-[16px] text-gray-700 leading-[1.8]">
              STARIZO combines sourcing intelligence, advanced processing, technical collaboration, and manufacturing
              scale to help businesses create products that perform in the real world.
            </p>
            <p class="text-[16px] text-gray-700 leading-[1.8]">
              From idea to industrial production—we support every stage of the journey.
            </p>
          </div>
          <a href="#"
            class="w-full border-2 border-starizo-orange hover:bg-starizo-orange text-starizo-orange hover:text-white font-semibold text-[18px] py-3 rounded-[22px] flex items-center justify-center gap-2 group transition-all duration-200 mt-8">
            Speak To Team
            <svg class="w-4 h-4 fill-current transform group-hover:translate-x-0.5 transition-transform duration-200"
              viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.8907 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67635 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z"
                fill="currentColor" />
            </svg>
          </a>
        </div>

      </div>
    </section>

    <!-- Footer Section (Figma: 1281×290, bg #FDF7E9, border #DF890C) -->
    <?php get_footer(); ?>
