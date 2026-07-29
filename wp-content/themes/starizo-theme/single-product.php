<?php get_header(); ?>

<!-- ==================== DESKTOP LAYOUT VIEW (xl: 1280px+ screens) ==================== -->
  <div class="hidden xl:block w-full">

    <!-- HERO SECTION (FIGMA SPEC 1:1) -->
    <main class="w-full bg-[#FDFBF3] relative overflow-hidden pt-[170px] pb-16">

      <!-- Background Radiating Rays Texture -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt=""
        class="absolute top-0 left-1 w-[55%] h-full object-cover object-left opacity-100 pointer-events-none select-none z-0">

      

      <!-- Main Hero Content Container (Exact Left & Right side spacing matching all other pages) -->
      <div class="relative z-10 w-full max-w-[1280px] mx-auto px-6 sm:px-10 md:px-14 lg:px-16">

        <!-- Breadcrumb Bar (Figma Spec 1:1: width 247px, height 15px, font 12px, line-height 100%, text color #808080) -->
        <div class="flex flex-row items-center gap-1.5 shrink-0 mb-8"
          style="width: 247px; height: 15px; font-family: 'Montserrat', sans-serif; font-size: 12px; line-height: 100%; letter-spacing: 0%; color: #808080;">
          <a href="./index.html" class="font-normal text-[#808080] hover:text-starizo-orange transition-colors whitespace-nowrap"
            style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 12px; line-height: 100%; color: #808080;">Products</a>
          <span class="font-normal text-[#808080]" style="font-size: 12px; line-height: 100%; color: #808080;">/</span>
          <a href="./index.html#food" class="font-normal text-[#808080] hover:text-starizo-orange transition-colors whitespace-nowrap"
            style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 12px; line-height: 100%; color: #808080;">Food & Beverage</a>
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
                <?php echo esc_html( get_field('product_category') ?: 'FOOD INGREDIENTS' ); ?>
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
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/arrow-down.svg' ); ?>" alt="Download" class="w-[13px] h-[17px] shrink-0 transform group-hover:translate-y-0.5 transition-transform duration-200">
              </a>

            </div>

          </div>

          <!-- Right Column: Product Pouch Image & Green Leaf Sprout Watermark (Figma Spec 1:1) -->
          <div class="col-span-5 relative flex items-center justify-center min-h-[488px]">
            
            <!-- 1. Background Leaf Image: product-leaf.png (Figma: width 372.77px, height 487.60px, opacity 0.39, under rice bag) -->
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-leaf.png' ); ?>" alt=""
              class="absolute pointer-events-none select-none z-0"
              style="width: 372.77px; height: 487.60px; opacity: 1;">

            <!-- 2. Foreground Rice Bag Image: rice-bag-hero.png -->
            <?php
            $hero_pouch_img = get_field('product_hero_image');
            $hero_pouch_url = ( is_array($hero_pouch_img) && !empty($hero_pouch_img['url']) ) ? $hero_pouch_img['url'] : ( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?: get_template_directory_uri() . '/public/assets/rice-bag-hero.png' );
            ?>
            <div class="relative z-10 filter drop-shadow-xl transform hover:scale-[1.02] transition-transform duration-300">
              <img src="<?php echo esc_url( $hero_pouch_url ); ?>" alt="STARIZO <?php the_title_attribute(); ?> Pouch"
                class="object-contain mx-auto"
                style="width: 365px; height: 484px;">
            </div>

          </div>

        </div>

        <!-- Bottom Highlights Bar (Figma Spec 1:1: max-width 708px, height 33px, gap 19px, moved up without border) -->
        <div class="flex flex-row items-center justify-start shrink-0 mt-4"
          style="max-width: 708px; height: 33px; gap: 19px;">
          
          <!-- Badge 1: Non-GMO (Exact 15px x 15px icon inside 32.76px green circle) -->
          <div class="flex flex-row items-center shrink-0" style="gap: 12.82px; height: 32.76px;">
            <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm"
              style="width: 32.76px; height: 32.76px;">
              <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-black"
              style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 12.82px; line-height: 14.95px; letter-spacing: 0%; color: #000000;">
              Non-GMO
            </span>
          </div>

          <!-- Badge 2: Gluten Free -->
          <div class="flex flex-row items-center shrink-0" style="gap: 12.82px; height: 32.76px;">
            <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm"
              style="width: 32.76px; height: 32.76px;">
              <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-black"
              style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 12.82px; line-height: 14.95px; letter-spacing: 0%; color: #000000;">
              Gluten Free
            </span>
          </div>

          <!-- Badge 3: Clean Label -->
          <div class="flex flex-row items-center shrink-0" style="gap: 12.82px; height: 32.76px;">
            <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm"
              style="width: 32.76px; height: 32.76px;">
              <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-black"
              style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 12.82px; line-height: 14.95px; letter-spacing: 0%; color: #000000;">
              Clean Label
            </span>
          </div>

          <!-- Badge 4: Hypoallergenic -->
          <div class="flex flex-row items-center shrink-0" style="gap: 12.82px; height: 32.76px;">
            <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm"
              style="width: 32.76px; height: 32.76px;">
              <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-black"
              style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 12.82px; line-height: 14.95px; letter-spacing: 0%; color: #000000;">
              Hypoallergenic
            </span>
          </div>

          <!-- Badge 5: Export Ready -->
          <div class="flex flex-row items-center shrink-0" style="gap: 12.82px; height: 32.76px;">
            <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm"
              style="width: 32.76px; height: 32.76px;">
              <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-black"
              style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 12.82px; line-height: 14.95px; letter-spacing: 0%; color: #000000;">
              Export Ready
            </span>
          </div>

        </div>

      </div>

    </main>

    <!-- ==================== WHY MANUFACTURERS CHOOSE <?php the_title(); ?> SECTION (FIGMA SPEC 1:1: 1280px x 708px) ==================== -->
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
            WHY MANUFACTURERS CHOOSE <?php the_title(); ?>
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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-rice.png' ); ?>" alt="Ultra Fine Granules" class="w-full h-full object-cover" style="border-top-left-radius: 44px;">
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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-expect.png' ); ?>" alt="Stable Under Processing" class="w-full h-full object-cover" style="border-top-right-radius: 44px;">
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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-clean.png' ); ?>" alt="Clean Label Compatibility" class="w-full h-full object-cover" style="border-top-left-radius: 44px;">
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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-excellet.png' ); ?>" alt="Excellent Digestibility" class="w-full h-full object-cover" style="border-top-right-radius: 44px;">
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
          <img src="<?php echo esc_url( get_field('video_thumbnail') ?: get_template_directory_uri() . '/public/assets/product-vedio.png' ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover block" style="border-top-left-radius: 72px; border-bottom-right-radius: 72px;">
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
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-bakery.png' ); ?>" alt="Bakery" class="w-full h-full object-cover">
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
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-milk.png' ); ?>" alt="Dairy" class="w-full h-full object-cover">
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
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-meals.png' ); ?>" alt="Ready Meals" class="w-full h-full object-cover">
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
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/leaf-product.svg' ); ?>" alt=""
            class="absolute left-2 bottom-2 w-[120px] h-auto opacity-100 pointer-events-none select-none">

          <!-- Right Sprout Leaf Watermark -->
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/leaf-product.svg' ); ?>" alt=""
            class="absolute right-2 bottom-2 w-[120px] h-auto opacity-100 pointer-events-none select-none transform scale-x-[-1]">

          <!-- Card 4: Confectionery -->
          <div class="bg-[#FDFBEE] rounded-[28px] p-[12px] flex flex-col justify-start shrink-0 relative transition-transform duration-300 hover:-translate-y-1.5 shadow-sm"
            style="width: 280px; height: 345px;">
            <div class="relative w-full overflow-visible shrink-0" style="height: 195px;">
              <div class="w-full h-full overflow-hidden" style="border-top-left-radius: 36px; border-bottom-right-radius: 36px;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-confectionery.png' ); ?>" alt="Confectionery" class="w-full h-full object-cover">
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
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-nutrition.png' ); ?>" alt="Infant Nutrition" class="w-full h-full object-cover">
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
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/logo.svg' ); ?>" alt="Starizo" class="h-8 w-auto self-start">
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
    

  </div><!-- End Desktop View -->


  <!-- ==================== MOBILE LAYOUT VIEW (xl:hidden) ==================== -->
  <div class="block xl:hidden w-full min-h-screen bg-white overflow-x-hidden">

    <!-- Mobile Hero Main Section (Target Specs: white bg, 342px width container, gap 24px) -->
    <section class="w-full bg-white px-6 pt-8 pb-4 flex flex-col items-start text-left">
      
      <!-- Main Context Container (Figma: width 342px, min-height 314px, gap 24px) -->
      <div class="w-full max-w-[342px] flex flex-col items-start justify-start gap-6">
        
        <!-- Badge Header (Figma: 12px Montserrat Bold, letter-spacing 11%, line-height 22px, uppercase #000000) -->
        <span class="font-montserrat font-bold text-black uppercase"
          style="font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 12px; line-height: 22px; letter-spacing: 0.11em; text-transform: uppercase; color: #000000;">
          <?php echo esc_html( get_field('product_category') ?: 'FOOD INGREDIENTS' ); ?>
        </span>

        <!-- Headline Title (Figma: 32px Montserrat Black, line-height 54px, gradient #00A256 to #5DC671) -->
        <h1 class="font-montserrat font-black"
          style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 32px; line-height: 54px; letter-spacing: 0%; background: linear-gradient(145.88deg, #00A256 20.19%, #5DC671 105.95%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          <?php the_title(); ?>
        </h1>

        <!-- Description (Figma: 16px Montserrat Medium, line-height 30px, color #000000) -->
        <p class="font-montserrat font-medium text-black"
          style="font-family: 'Montserrat', sans-serif; font-weight: 500; font-size: 16px; line-height: 30px; letter-spacing: 0%; color: #000000;">
          <?php echo esc_html( get_field('hero_subtitle') ); ?>
        </p>

        <!-- Buttons Container (Figma Spec 1:1: Horizontal Row, width 319px, height 36px, gap 21px) -->
        <div class="flex flex-row items-center justify-start gap-[21px] w-full" style="max-width: 319px; min-height: 36px;">
          <!-- Primary Action Button: Contact Us -->
          <a href="<?php echo esc_url( site_url('/contact') ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-montserrat font-bold text-[13px] h-[36px] px-5 rounded-full flex items-center justify-center gap-1.5 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shadow-md hover:shadow-xl shrink-0 select-none">
            <span>Contact Us</span>
            <svg class="w-3.5 h-3.5 stroke-current fill-none stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </a>

          <!-- Secondary Action Button: Download Brochure -->
          <a href="#" download
            class="text-[#FF8D00] hover:text-[#e07c00] font-montserrat font-semibold text-[13px] h-[36px] flex items-center justify-center gap-1.5 transition duration-200 shrink-0">
            <span>Download Brochure</span>
            <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
          </a>
        </div>

      </div>

      <!-- Product Image Pouch Frame (Main Rice Bag Image Only) -->
      <div class="w-full relative flex items-center justify-center py-4 my-2">
        <!-- Main Foreground Rice Bag Pouch Image -->
        <div class="relative z-10 filter drop-shadow-xl">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rice-bag-hero.png' ); ?>" alt="STARIZO <?php the_title(); ?> Pouch"
            class="w-[260px] sm:w-[280px] h-auto object-contain mx-auto">
        </div>
      </div>

      <!-- Mobile Highlights Grid Container (Figma Spec 1:1: width 286.15px, height 136.27px, gap 19px, centered) -->
      <div class="mx-auto flex flex-col justify-between items-center my-6"
        style="width: 286.15px; min-height: 136.27px; gap: 19px;">
        
        <!-- Row 1: Non-GMO & Gluten Free -->
        <div class="w-full flex flex-row items-center justify-between">
          <div class="flex items-center gap-[12px] shrink-0">
            <div class="w-[32.76px] h-[32.76px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm">
              <svg class="w-[15px] h-[15px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-[12.82px] leading-[15px] text-black">Non-GMO</span>
          </div>

          <div class="flex items-center gap-[12px] shrink-0">
            <div class="w-[32.76px] h-[32.76px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm">
              <svg class="w-[15px] h-[15px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-[12.82px] leading-[15px] text-black">Gluten Free</span>
          </div>
        </div>

        <!-- Row 2: Clean Label & Hypoallergenic -->
        <div class="w-full flex flex-row items-center justify-between">
          <div class="flex items-center gap-[12px] shrink-0">
            <div class="w-[32.76px] h-[32.76px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm">
              <svg class="w-[15px] h-[15px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-[12.82px] leading-[15px] text-black">Clean Label</span>
          </div>

          <div class="flex items-center gap-[12px] shrink-0">
            <div class="w-[32.76px] h-[32.76px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm">
              <svg class="w-[15px] h-[15px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-[12.82px] leading-[15px] text-black">Hypoallergenic</span>
          </div>
        </div>

        <!-- Row 3: Export Ready -->
        <div class="w-full flex flex-row items-center justify-start">
          <div class="flex items-center gap-[12px] shrink-0">
            <div class="w-[32.76px] h-[32.76px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm">
              <svg class="w-[15px] h-[15px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-[12.82px] leading-[15px] text-black">Export Ready</span>
          </div>
        </div>

      </div>

    </section>

    <!-- Mobile "Why Manufacturers Choose <?php the_title(); ?>" Section (Target Specs: bg #00A256, 2 columns x 2 rows cards grid 1:1) -->
    <section class="w-full bg-[#00A256] py-10 px-4 flex flex-col items-center justify-center text-white relative">
      
      <!-- Section Header with Vertical Orange Accent Bar (Exact Specs: 16px Montserrat Regular, 34px line-height, 11% tracking, centered) -->
      <div class="flex items-center justify-center gap-3 mb-8 w-full max-w-[340px] text-center">
        <div class="w-[5px] h-[36px] bg-[#FF8D00] rounded-full shrink-0"></div>
        <h2 class="font-montserrat text-white uppercase text-center"
          style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 16px; line-height: 34px; letter-spacing: 0.11em; text-align: center; text-transform: uppercase; color: #FFFFFF;">
          WHY MANUFACTURERS CHOOSE <?php the_title(); ?>
        </h2>
      </div>

      <!-- 2 Columns x 2 Rows Cards Grid (Decreased padding matching screenshot 1:1) -->
      <div class="w-full max-w-[360px] grid grid-cols-2 gap-3 sm:gap-4">

        <!-- Card 1: Ultra Fine Granules (Leaf corners: Top-Left & Bottom-Right 36px) -->
        <div class="bg-white text-black p-1.5 pb-3 flex flex-col justify-start shadow-lg transition-transform duration-300 hover:-translate-y-1"
          style="border-top-left-radius: 36px; border-bottom-right-radius: 36px; min-height: 235px;">
          <!-- Card Image -->
          <div class="w-full overflow-hidden shrink-0 mb-2"
            style="height: 120px; border-top-left-radius: 28px; border-bottom-right-radius: 28px;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-rice.png' ); ?>" alt="Ultra Fine Granules" class="w-full h-full object-cover">
          </div>
          <!-- Card Content -->
          <div class="px-1.5 flex flex-col justify-start gap-1">
            <h3 class="font-montserrat font-bold text-[#5D3700] text-[13px] sm:text-[14px] leading-snug">
              Ultra Fine Granules
            </h3>
            <p class="font-montserrat font-normal text-black/75 text-[11px] sm:text-[12px] leading-relaxed">
              Creates smoother mouthfeel and improved texture performance.
            </p>
          </div>
        </div>

        <!-- Card 2: Stable Under Processing (Leaf corners: Top-Right & Bottom-Left 36px) -->
        <div class="bg-white text-black p-1.5 pb-3 flex flex-col justify-start shadow-lg transition-transform duration-300 hover:-translate-y-1"
          style="border-top-right-radius: 36px; border-bottom-left-radius: 36px; min-height: 235px;">
          <!-- Card Image -->
          <div class="w-full overflow-hidden shrink-0 mb-2"
            style="height: 120px; border-top-right-radius: 28px; border-bottom-left-radius: 28px;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-expect.png' ); ?>" alt="Stable Under Processing" class="w-full h-full object-cover">
          </div>
          <!-- Card Content -->
          <div class="px-1.5 flex flex-col justify-start gap-1">
            <h3 class="font-montserrat font-bold text-[#5D3700] text-[13px] sm:text-[14px] leading-snug">
              Stable Under Processing
            </h3>
            <p class="font-montserrat font-normal text-black/75 text-[11px] sm:text-[12px] leading-relaxed">
              Maintains consistency under heat and varying pH conditions.
            </p>
          </div>
        </div>

        <!-- Card 3: Clean Label Compatibility (Leaf corners: Top-Left & Bottom-Right 36px) -->
        <div class="bg-white text-black p-1.5 pb-3 flex flex-col justify-start shadow-lg transition-transform duration-300 hover:-translate-y-1"
          style="border-top-left-radius: 36px; border-bottom-right-radius: 36px; min-height: 235px;">
          <!-- Card Image -->
          <div class="w-full overflow-hidden shrink-0 mb-2"
            style="height: 120px; border-top-left-radius: 28px; border-bottom-right-radius: 28px;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-clean.png' ); ?>" alt="Clean Label Compatibility" class="w-full h-full object-cover">
          </div>
          <!-- Card Content -->
          <div class="px-1.5 flex flex-col justify-start gap-1">
            <h3 class="font-montserrat font-bold text-[#5D3700] text-[13px] sm:text-[14px] leading-snug">
              Clean Label Compatibility
            </h3>
            <p class="font-montserrat font-normal text-black/75 text-[11px] sm:text-[12px] leading-relaxed">
              Supports simpler ingredient declarations.
            </p>
          </div>
        </div>

        <!-- Card 4: Excellent Digestibility (Leaf corners: Top-Right & Bottom-Left 36px) -->
        <div class="bg-white text-black p-1.5 pb-3 flex flex-col justify-start shadow-lg transition-transform duration-300 hover:-translate-y-1"
          style="border-top-right-radius: 36px; border-bottom-left-radius: 36px; min-height: 235px;">
          <!-- Card Image -->
          <div class="w-full overflow-hidden shrink-0 mb-2"
            style="height: 120px; border-top-right-radius: 28px; border-bottom-left-radius: 28px;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-excellet.png' ); ?>" alt="Excellent Digestibility" class="w-full h-full object-cover">
          </div>
          <!-- Card Content -->
          <div class="px-1.5 flex flex-col justify-start gap-1">
            <h3 class="font-montserrat font-bold text-[#5D3700] text-[13px] sm:text-[14px] leading-snug">
              Excellent Digestibility
            </h3>
            <p class="font-montserrat font-normal text-black/75 text-[11px] sm:text-[12px] leading-relaxed">
              Suitable for sensitive formulations.
            </p>
          </div>
        </div>

      </div>

    </section>

    <!-- Mobile Product Video Section (Decreased height matching Targeted Image 1:1) -->
    <section class="w-full bg-[#FDFBF3] py-6 px-4 flex items-center justify-center relative">
      <div class="w-full max-w-[360px] mx-auto flex items-center justify-center">
        <div class="relative overflow-hidden shadow-xl group cursor-pointer w-full"
          style="border-top-left-radius: 40px; border-bottom-right-radius: 40px;">
          <img src="<?php echo esc_url( get_field('video_thumbnail') ?: get_template_directory_uri() . '/public/assets/product-vedio.png' ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover block" style="border-top-left-radius: 72px; border-bottom-right-radius: 72px;">
        </div>
      </div>
    </section>

    <!-- Mobile Application Explorer Section (Exact Figma Specs: 347px width container, 2x2 top grid + centered Infant Nutrition card 160px x 184px) -->
    <section class="w-full bg-[#FDFBF3] py-8 px-4 flex items-center justify-center relative">
      <div class="w-full max-w-[347px] bg-white py-8 px-3.5 rounded-[44px] shadow-lg text-black mx-auto flex flex-col items-center gap-6"
        style="min-height: 719px;">
        
        <!-- Header Context Container (347px x 92px) -->
        <div class="w-full flex flex-col items-center justify-center text-center gap-2" style="max-width: 347px;">
          <!-- Subtitle / Tagline -->
          <div class="flex items-center justify-center gap-2">
            <span class="w-[5px] h-[24px] bg-[#DF890C] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat text-[#5D3700] uppercase"
              style="font-family: 'Montserrat', sans-serif; font-weight: 400; font-size: 16px; line-height: 54px; letter-spacing: 0.11em; text-transform: uppercase;">
              APPLICATION EXPLORER
            </span>
          </div>

          <!-- Headline Title -->
          <h2 class="font-montserrat font-bold text-black text-center"
            style="font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 16px; line-height: 30px; letter-spacing: 0%; color: #000000;">
            Designed For Multiple Food Systems
          </h2>
        </div>

        <!-- 4-Cards Grid: 2 Columns x 2 Rows (347px width, gap 14px) -->
        <div class="w-full grid grid-cols-2 gap-3.5" style="max-width: 347px;">
          
          <!-- Card 1: Bakery -->
          <div class="bg-[#FDFBF3] rounded-[24px] p-2 flex flex-col text-left shadow-sm">
            <div class="relative w-full h-[105px] shrink-0">
              <div class="w-full h-full overflow-hidden" style="border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-bakery.png' ); ?>" alt="Bakery" class="w-full h-full object-cover">
              </div>
              <div class="w-[36px] h-[36px] bg-white rounded-full shadow-md flex items-center justify-center absolute -bottom-[12px] left-[8px] z-10">
                <span class="text-[18px]">🍞</span>
              </div>
            </div>
            <div class="pt-4 px-1.5 pb-1 flex flex-col gap-0.5">
              <h3 class="font-montserrat font-bold text-[#5D3700] text-[13px] leading-tight">Bakery</h3>
              <p class="font-montserrat font-normal text-black/75 text-[10px] leading-snug">Improve softness and structure.</p>
            </div>
          </div>

          <!-- Card 2: Dairy -->
          <div class="bg-[#FDFBF3] rounded-[24px] p-2 flex flex-col text-left shadow-sm">
            <div class="relative w-full h-[105px] shrink-0">
              <div class="w-full h-full overflow-hidden" style="border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-milk.png' ); ?>" alt="Dairy" class="w-full h-full object-cover">
              </div>
              <div class="w-[36px] h-[36px] bg-white rounded-full shadow-md flex items-center justify-center absolute -bottom-[12px] left-[8px] z-10">
                <span class="text-[18px]">🥛</span>
              </div>
            </div>
            <div class="pt-4 px-1.5 pb-1 flex flex-col gap-0.5">
              <h3 class="font-montserrat font-bold text-[#5D3700] text-[13px] leading-tight">Dairy</h3>
              <p class="font-montserrat font-normal text-black/75 text-[10px] leading-snug">Create creamier textures.</p>
            </div>
          </div>

          <!-- Card 3: Ready Meals -->
          <div class="bg-[#FDFBF3] rounded-[24px] p-2 flex flex-col text-left shadow-sm">
            <div class="relative w-full h-[105px] shrink-0">
              <div class="w-full h-full overflow-hidden" style="border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-meals.png' ); ?>" alt="Ready Meals" class="w-full h-full object-cover">
              </div>
              <div class="w-[36px] h-[36px] bg-white rounded-full shadow-md flex items-center justify-center absolute -bottom-[12px] left-[8px] z-10">
                <span class="text-[18px]">🥣</span>
              </div>
            </div>
            <div class="pt-4 px-1.5 pb-1 flex flex-col gap-0.5">
              <h3 class="font-montserrat font-bold text-[#5D3700] text-[13px] leading-tight">Ready Meals</h3>
              <p class="font-montserrat font-normal text-black/75 text-[10px] leading-snug">Improve softness and structure.</p>
            </div>
          </div>

          <!-- Card 4: Confectionery -->
          <div class="bg-[#FDFBF3] rounded-[24px] p-2 flex flex-col text-left shadow-sm">
            <div class="relative w-full h-[105px] shrink-0">
              <div class="w-full h-full overflow-hidden" style="border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-confectionery.png' ); ?>" alt="Confectionery" class="w-full h-full object-cover">
              </div>
              <div class="w-[36px] h-[36px] bg-white rounded-full shadow-md flex items-center justify-center absolute -bottom-[12px] left-[8px] z-10">
                <span class="text-[18px]">🍬</span>
              </div>
            </div>
            <div class="pt-4 px-1.5 pb-1 flex flex-col gap-0.5">
              <h3 class="font-montserrat font-bold text-[#5D3700] text-[13px] leading-tight">Confectionery</h3>
              <p class="font-montserrat font-normal text-black/75 text-[10px] leading-snug">Support coating and smooth finish.</p>
            </div>
          </div>

        </div>

        <!-- Card 5: Infant Nutrition (Centered beneath top grid, width 160.13px, height 184.57px) -->
        <div class="w-[160px] bg-[#FDFBF3] rounded-[24px] p-2 flex flex-col text-left shadow-sm mx-auto shrink-0"
          style="min-height: 184px;">
          <div class="relative w-full h-[105px] shrink-0">
            <div class="w-full h-full overflow-hidden" style="border-top-left-radius: 20px; border-bottom-right-radius: 20px;">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-nutrition.png' ); ?>" alt="Infant Nutrition" class="w-full h-full object-cover">
            </div>
            <div class="w-[36px] h-[36px] bg-white rounded-full shadow-md flex items-center justify-center absolute -bottom-[12px] left-[8px] z-10">
              <span class="text-[18px]">👶</span>
            </div>
          </div>
          <div class="pt-4 px-1.5 pb-1 flex flex-col gap-0.5">
            <h3 class="font-montserrat font-bold text-[#5D3700] text-[13px] leading-tight">Infant Nutrition</h3>
            <p class="font-montserrat font-normal text-black/75 text-[10px] leading-snug">High digestibility and gentle texture.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- Mobile FAQ & Brand Card Section -->
    <section class="w-full bg-[#FDFBF3] py-12 flex flex-col items-center">

      <!-- FAQ Header -->
      <div class="w-full px-6 flex flex-col items-start text-left mb-8">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-[6px] h-[33px] bg-[#FF8500] rounded-full shrink-0"></div>
          <h2 class="font-montserrat font-normal text-[16px] text-[#5D3700] uppercase leading-[54px] tracking-[0.11em] whitespace-nowrap">
            Frequently Asked Questions</h2>
        </div>
      </div>

      <!-- Accordion Stack -->
      <div class="w-full max-w-[340px] mx-auto flex flex-col gap-4 px-1 mb-10" id="mobile-faq-accordion">

        <!-- Accordion 1 -->
        <div
          class="mobile-faq-item bg-white border border-gray-100/50 rounded-3xl py-[18px] px-6 shadow-sm flex flex-col transition-all duration-300"
          data-faq-active="true">
          <button class="w-full flex justify-between items-center text-left focus:outline-none">
            <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]">Do you support
              formulation guidance?</h4>
            <div class="faq-icon-minus w-5 h-[2px] bg-[#5D3700] rounded-full shrink-0"></div>
            <div
              class="faq-icon-plus hidden w-5 h-5 flex items-center justify-center relative text-starizo-orange shrink-0">
              <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
              <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
            </div>
          </button>
          <p class="faq-answer mt-3 text-[13px] font-medium text-black/70 leading-[20px] max-w-xl">
            Yes. We collaborate to align ingredient performance with application goals.
          </p>
        </div>

        <!-- Accordion 2 -->
        <div
          class="mobile-faq-item bg-white border border-gray-100/50 rounded-3xl py-[18px] px-6 shadow-sm flex flex-col transition-all duration-300"
          data-faq-active="false">
          <button class="w-full flex justify-between items-center text-left focus:outline-none">
            <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]">Can we request
              technical information?</h4>
            <div class="faq-icon-minus hidden w-5 h-[2px] bg-[#5D3700] rounded-full shrink-0"></div>
            <div class="faq-icon-plus w-5 h-5 flex items-center justify-center relative text-[#FF8D00] shrink-0">
              <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
              <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
            </div>
          </button>
          <p class="faq-answer hidden mt-3 text-[13px] font-medium text-black/70 leading-[20px] max-w-xl">
            Yes, technical specifications, safety data sheets, and certificates of analysis are available upon request.
          </p>
        </div>

        <!-- Accordion 3 -->
        <div
          class="mobile-faq-item bg-white border border-gray-100/50 rounded-3xl py-[18px] px-6 shadow-sm flex flex-col transition-all duration-300"
          data-faq-active="false">
          <button class="w-full flex justify-between items-center text-left focus:outline-none">
            <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]">Do you support
              international supply?</h4>
            <div class="faq-icon-minus hidden w-5 h-[2px] bg-[#5D3700] rounded-full shrink-0"></div>
            <div class="faq-icon-plus w-5 h-5 flex items-center justify-center relative text-[#FF8D00] shrink-0">
              <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
              <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
            </div>
          </button>
          <p class="faq-answer hidden mt-3 text-[13px] font-medium text-black/70 leading-[20px] max-w-xl">
            Yes, we deliver ingredients to major hubs globally through our international distribution network.
          </p>
        </div>

        <!-- Accordion 4 -->
        <div
          class="mobile-faq-item bg-white border border-gray-100/50 rounded-3xl py-[18px] px-6 shadow-sm flex flex-col transition-all duration-300"
          data-faq-active="false">
          <button class="w-full flex justify-between items-center text-left focus:outline-none">
            <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]">Can STARIZO support
              product development?</h4>
            <div class="faq-icon-minus hidden w-5 h-[2px] bg-[#5D3700] rounded-full shrink-0"></div>
            <div class="faq-icon-plus w-5 h-5 flex items-center justify-center relative text-[#FF8D00] shrink-0">
              <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
              <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
            </div>
          </button>
          <p class="faq-answer hidden mt-3 text-[13px] font-medium text-black/70 leading-[20px] max-w-xl">
            Yes, our team collaborates from formulation to pilot batch validation.
          </p>
        </div>

        <!-- Accordion 5 -->
        <div
          class="mobile-faq-item bg-white border border-gray-100/50 rounded-3xl py-[18px] px-6 shadow-sm flex flex-col transition-all duration-300"
          data-faq-active="false">
          <button class="w-full flex justify-between items-center text-left focus:outline-none">
            <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]">Is there a minimum
              order requirement?</h4>
            <div class="faq-icon-minus hidden w-5 h-[2px] bg-[#5D3700] rounded-full shrink-0"></div>
            <div class="faq-icon-plus w-5 h-5 flex items-center justify-center relative text-[#FF8D00] shrink-0">
              <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
              <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
            </div>
          </button>
          <p class="faq-answer hidden mt-3 text-[13px] font-medium text-black/70 leading-[20px] max-w-xl">
            Minimum order quantities vary by product category. Contact our sales team for details.
          </p>
        </div>

      </div>

      <!-- Mobile Brand Card -->
      <div
        class="w-full max-w-[340px] bg-white border border-gray-100 shadow-[0px_4px_24.7px_rgba(0,0,0,0.07)] rounded-[10px] p-[24px] flex flex-col justify-between items-start min-h-[515px] mx-auto">
        <div class="flex flex-col space-y-6 w-full">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/logo.svg' ); ?>" alt="Starizo" class="h-8 w-auto self-start">
          <h4 class="text-[22px] font-bold text-[#5D3700] leading-tight">
            More Than Ingredients.<br>Built For Growth.
          </h4>
          <p class="text-[14px] font-medium text-black/70 leading-[22px]">
            STARIZO combines sourcing intelligence, advanced processing, technical collaboration, and manufacturing
            scale to help businesses create products that perform in the real world.
          </p>
          <p class="text-[14px] font-medium text-black/70 leading-[22px]">
            From idea to industrial production—we support every stage of the journey.
          </p>
        </div>

        <a href="<?php echo esc_url( site_url('/contact') ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-bold text-[16px] py-3.5 rounded-[22px] flex items-center justify-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 mt-8 shadow-md hover:shadow-xl select-none">
          <span>Speak To Team</span>
          <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
      </div>

    </section>

    <!-- Mobile Footer (copied 1:1 from index.html) -->
    

  </div><!-- End Mobile View -->

  <!-- Mobile Toggle & FAQ Script -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const menuBtn = document.getElementById('mobile-menu-btn') || document.getElementById('mobile-menu-btn-product');
      const dropdown = document.getElementById('mobile-dropdown') || document.getElementById('mobile-dropdown-product');

      if (menuBtn && dropdown) {
        menuBtn.addEventListener('click', (e) => {
          e.stopPropagation();
          dropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
          if (!dropdown.contains(e.target) && !menuBtn.contains(e.target)) {
            dropdown.classList.add('hidden');
          }
        });
      }

      // ─── Mobile FAQ Accordion ─────────────────────────────────────────
      const faqAccordion = document.getElementById('mobile-faq-accordion');

      if (faqAccordion) {
        const items = faqAccordion.querySelectorAll('.mobile-faq-item');

        items.forEach(item => {
          const accordionBtn = item.querySelector('button');
          const answer = item.querySelector('.faq-answer');
          const iconMinus = item.querySelector('.faq-icon-minus');
          const iconPlus = item.querySelector('.faq-icon-plus');

          accordionBtn.addEventListener('click', () => {
            const isActive = item.dataset.faqActive === 'true';

            // Collapse all first
            items.forEach(i => {
              i.dataset.faqActive = 'false';
              const a = i.querySelector('.faq-answer');
              const minus = i.querySelector('.faq-icon-minus');
              const plus = i.querySelector('.faq-icon-plus');
              if (a) a.classList.add('hidden');
              if (minus) minus.classList.add('hidden');
              if (plus) plus.classList.remove('hidden');
            });

            // If was closed, open this one
            if (!isActive) {
              item.dataset.faqActive = 'true';
              if (answer) answer.classList.remove('hidden');
              if (iconMinus) iconMinus.classList.remove('hidden');
              if (iconPlus) iconPlus.classList.add('hidden');
            }
          });
        });
      }
    });
  </script>

</body>

</html>
