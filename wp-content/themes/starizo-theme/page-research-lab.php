<?php
/* Template Name: Research Lab */
get_header(); ?>

<!-- ==================== DESKTOP LAYOUT VIEW (xl: 1280px+ screens) ==================== -->
  <div class="hidden xl:block w-full">

    <!-- HERO SECTION (RESEARCH LAB 1:1 MATCHING TARGET SCREENSHOT) -->
    <main class="w-full bg-[#FDFBF3] relative overflow-hidden pt-[170px] pb-16">

      <!-- Background Radiating Rays Texture -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt=""
        class="absolute top-0 left-1 w-[55%] h-full object-cover object-left opacity-100 pointer-events-none select-none z-0">

      

      <!-- Main Hero Content Container -->
      <div class="relative z-10 w-full max-w-[1280px] mx-auto px-6 sm:px-10 md:px-14 lg:px-16 pt-4">

        <!-- Hero Content Grid: Left Text Column + Right Image Column -->
        <div class="grid grid-cols-12 gap-8 lg:gap-12 items-center min-h-[480px]">

          <!-- Left Text Column -->
          <div class="col-span-7 flex flex-col items-start text-left gap-8" style="max-width: 580px;">
            
            <div class="flex flex-col items-start w-full gap-4">

              <!-- 1. Category Badge -->
              <span class="font-montserrat font-bold text-black uppercase whitespace-nowrap inline-block shrink-0"
                style="font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 14px; line-height: 22px; letter-spacing: 0.11em; text-transform: uppercase; color: #000000; height: 22px;">
                TECHNOLOGY & QUALITY
              </span>

              <!-- 2. Main Title -->
              <h1 class="font-montserrat font-black text-[#00A256]"
                style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 42px; line-height: 52px; letter-spacing: 0%; color: #00A256;">
                Built On Science.<br>Proven Through<br>Process.
              </h1>

              <!-- 3. Subtitle Description -->
              <p class="font-montserrat font-medium text-black/80"
                style="font-family: 'Montserrat', sans-serif; font-weight: 500; font-size: 17px; line-height: 28px; letter-spacing: 0%; color: rgba(0, 0, 0, 0.8);">
                Technology creates possibilities. Quality creates trust.<br>At STARIZO, both are designed into every ingredient we produce.
              </p>

            </div>

            <!-- Single Button: Speak To Team -->
            <div class="flex flex-row items-center justify-start shrink-0">
              <a href="./contact.html"
                class="flex flex-row items-center justify-center shrink-0 whitespace-nowrap shadow-md hover:opacity-90 transition select-none group"
                style="height: 48px; border-radius: 24px; padding: 12px 28px; background-color: #FF8D00; gap: 10px;">
                <span class="font-montserrat font-semibold text-white whitespace-nowrap"
                  style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 18px; line-height: 21px; letter-spacing: 0%; color: #FFFFFF;">
                  Speak To Team
                </span>
                <svg class="w-4 h-4 fill-white transform group-hover:translate-x-0.5 transition-transform duration-200 shrink-0"
                  viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.931 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z"
                    fill="#FFFFFF" />
                </svg>
              </a>
            </div>

          </div>

          <!-- Right Column: Research Hero Image -->
          <div class="col-span-5 relative flex items-center justify-center min-h-[488px]">
            
            <!-- 1. Background Leaf Image: product-leaf.png (Same as product page: width 372.77px, height 487.60px, opacity 1, under hero image) -->
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/product-leaf.png' ); ?>" alt=""
              class="absolute pointer-events-none select-none z-0"
              style="width: 372.77px; height: 487.60px; opacity: 1;">

            <!-- 2. Foreground Research Image -->
            <div class="relative z-10 overflow-hidden shadow-2xl transform hover:scale-[1.01] transition-transform duration-300 rounded-tr-[44px] rounded-bl-[44px] rounded-tl-none rounded-br-none"
              style="width: 530px; height: 297px;">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/hero-research.png' ); ?>" alt="Research Lab — Technology & Quality — Starizo"
                class="w-full h-full object-cover block mx-auto">
            </div>
          </div>

        </div>

        <!-- Bottom Highlights Bar (4 Badges: Advanced Testing, Global Standards, End-to-End Traceability, Continuous Improvement) -->
        <div class="flex flex-row items-center justify-start shrink-0 mt-8 gap-6 flex-wrap">
          
          <!-- Badge 1: Advanced Testing -->
          <div class="flex flex-row items-center shrink-0" style="gap: 12px; height: 33px;">
            <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm"
              style="width: 32.76px; height: 32.76px;">
              <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <span class="font-montserrat font-medium text-black"
              style="font-family: 'Montserrat', sans-serif; font-weight: 500; font-size: 14px; color: #000000;">
              Advanced Testing
            </span>
          </div>

          <!-- Badge 2: Global Standards -->
          <div class="flex flex-row items-center shrink-0" style="gap: 12px; height: 33px;">
            <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm"
              style="width: 32.76px; height: 32.76px;">
              <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <span class="font-montserrat font-medium text-black"
              style="font-family: 'Montserrat', sans-serif; font-weight: 500; font-size: 14px; color: #000000;">
              Global Standards
            </span>
          </div>

          <!-- Badge 3: End-to-End Traceability -->
          <div class="flex flex-row items-center shrink-0" style="gap: 12px; height: 33px;">
            <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm"
              style="width: 32.76px; height: 32.76px;">
              <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <span class="font-montserrat font-medium text-black"
              style="font-family: 'Montserrat', sans-serif; font-weight: 500; font-size: 14px; color: #000000;">
              End-to-End Traceability
            </span>
          </div>

          <!-- Badge 4: Continuous Improvement -->
          <div class="flex flex-row items-center shrink-0" style="gap: 12px; height: 33px;">
            <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm"
              style="width: 32.76px; height: 32.76px;">
              <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <span class="font-montserrat font-medium text-black"
              style="font-family: 'Montserrat', sans-serif; font-weight: 500; font-size: 14px; color: #000000;">
              Continuous Improvement
            </span>
          </div>

        </div>

      </div>

    </main>

    <!-- ==================== QUALITY STARTS LONG BEFORE PRODUCTION SECTION ==================== -->
    <section class="w-full bg-[#FEF3DC] py-16 px-6 sm:px-10 md:px-14 lg:px-16" style="min-height: 533px;">
      <div class="max-w-[1116px] mx-auto flex flex-col gap-10">
        
        <!-- Header Text -->
        <div class="flex flex-col gap-3">
          <div class="flex items-center gap-3">
            <span class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat font-normal text-[22px] leading-[54px] tracking-[0.11em] uppercase text-[#B86200]">
              QUALITY STARTS LONG BEFORE PRODUCTION
            </span>
          </div>
          <h2 class="font-montserrat font-bold text-[22px] leading-[30px] text-black">
            Quality is not a checkpoint. It is embedded across every stage of manufacturing.
          </h2>
        </div>

        <!-- 5 Horizontal Cards Container (Figma Spec: Card w:214, h:180, Top Leaf Badge w:43, h:43, Body w:214, h:158, radii: tl:44, tr:4, br:44, bl:4) -->
        <div class="grid grid-cols-5 gap-5 lg:gap-6 w-full pt-4">

          <!-- Card 01: Source -->
          <div class="relative w-full max-w-[214px] h-[180px] mx-auto">
            <!-- Top Leaf Number Badge (Figma: top: 0px relative to outer card, z-20 overlay) -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 z-20 w-[43px] h-[43px] bg-[#00A256] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shadow-md">
              <span class="font-montserrat font-bold text-[16px] text-white">01</span>
            </div>
            <!-- Card Body Shell (Figma: top: 22px relative to outer card, z-10) -->
            <div class="absolute top-[22px] left-0 w-full h-[158px] bg-white z-10 rounded-tl-[44px] rounded-tr-[4px] rounded-br-[44px] rounded-bl-[4px] shadow-sm p-4 pt-7 flex flex-col items-center text-center justify-start gap-1">
              <h3 class="font-montserrat font-semibold text-[22px] leading-[32.73px] text-[#5D3700]">
                Source
              </h3>
              <p class="font-montserrat font-normal text-[16px] leading-[23px] text-[#333333]">
                Incoming raw material evaluation.
              </p>
            </div>
          </div>

          <!-- Card 02: Inspect -->
          <div class="relative w-full max-w-[214px] h-[180px] mx-auto">
            <!-- Top Leaf Number Badge -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 z-20 w-[43px] h-[43px] bg-[#00A256] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shadow-md">
              <span class="font-montserrat font-bold text-[16px] text-white">02</span>
            </div>
            <!-- Card Body Shell -->
            <div class="absolute top-[22px] left-0 w-full h-[158px] bg-white z-10 rounded-tl-[44px] rounded-tr-[4px] rounded-br-[44px] rounded-bl-[4px] shadow-sm p-4 pt-7 flex flex-col items-center text-center justify-start gap-1">
              <h3 class="font-montserrat font-semibold text-[22px] leading-[32.73px] text-[#5D3700]">
                Inspect
              </h3>
              <p class="font-montserrat font-normal text-[16px] leading-[23px] text-[#333333]">
                In-process monitoring.
              </p>
            </div>
          </div>

          <!-- Card 03: Validate -->
          <div class="relative w-full max-w-[214px] h-[180px] mx-auto">
            <!-- Top Leaf Number Badge -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 z-20 w-[43px] h-[43px] bg-[#00A256] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shadow-md">
              <span class="font-montserrat font-bold text-[16px] text-white">03</span>
            </div>
            <!-- Card Body Shell -->
            <div class="absolute top-[22px] left-0 w-full h-[158px] bg-white z-10 rounded-tl-[44px] rounded-tr-[4px] rounded-br-[44px] rounded-bl-[4px] shadow-sm p-4 pt-7 flex flex-col items-center text-center justify-start gap-1">
              <h3 class="font-montserrat font-semibold text-[22px] leading-[32.73px] text-[#5D3700]">
                Validate
              </h3>
              <p class="font-montserrat font-normal text-[16px] leading-[23px] text-[#333333]">
                Testing and verification.
              </p>
            </div>
          </div>

          <!-- Card 04: Approve -->
          <div class="relative w-full max-w-[214px] h-[180px] mx-auto">
            <!-- Top Leaf Number Badge -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 z-20 w-[43px] h-[43px] bg-[#00A256] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shadow-md">
              <span class="font-montserrat font-bold text-[16px] text-white">04</span>
            </div>
            <!-- Card Body Shell -->
            <div class="absolute top-[22px] left-0 w-full h-[158px] bg-white z-10 rounded-tl-[44px] rounded-tr-[4px] rounded-br-[44px] rounded-bl-[4px] shadow-sm p-4 pt-7 flex flex-col items-center text-center justify-start gap-1">
              <h3 class="font-montserrat font-semibold text-[22px] leading-[32.73px] text-[#5D3700]">
                Approve
              </h3>
              <p class="font-montserrat font-normal text-[16px] leading-[23px] text-[#333333]">
                Quality release.
              </p>
            </div>
          </div>

          <!-- Card 05: Dispatch -->
          <div class="relative w-full max-w-[214px] h-[180px] mx-auto">
            <!-- Top Leaf Number Badge -->
            <div class="absolute top-0 left-1/2 -translate-x-1/2 z-20 w-[43px] h-[43px] bg-[#00A256] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shadow-md">
              <span class="font-montserrat font-bold text-[16px] text-white">05</span>
            </div>
            <!-- Card Body Shell -->
            <div class="absolute top-[22px] left-0 w-full h-[158px] bg-white z-10 rounded-tl-[44px] rounded-tr-[4px] rounded-br-[44px] rounded-bl-[4px] shadow-sm p-4 pt-7 flex flex-col items-center text-center justify-start gap-1">
              <h3 class="font-montserrat font-semibold text-[22px] leading-[32.73px] text-[#5D3700]">
                Dispatch
              </h3>
              <p class="font-montserrat font-normal text-[16px] leading-[23px] text-[#333333]">
                Final readiness assessment.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- ==================== ANALYTICAL CAPABILITIES SECTION ==================== -->
    <section class="w-full py-12 px-6 sm:px-10 md:px-14 lg:px-16">
      <div class="max-w-[1120px] mx-auto min-h-[408px] grid grid-cols-12 gap-8 lg:gap-10 items-center">
        
        <!-- Left Image Column (width: 538px, height: 408px) -->
        <div class="col-span-12 lg:col-span-6 relative flex items-center justify-center">
          <div class="relative w-full max-w-[538px] h-[408px] rounded-tr-[44px] rounded-bl-[44px] rounded-tl-none rounded-br-none overflow-hidden shadow-xl z-10">
            
            <!-- Orange Leaf Badge Overlay (Figma Spec: 114.18px x 72px, top: 9px, left: 9px, linear-gradient 90deg #FF8D00 to #FFB457, radii: tr:32px, bl:32px) -->
            <div class="absolute top-[9px] left-[9px] w-[114.18px] h-[72px] bg-gradient-to-r from-[#FF8D00] to-[#FFB457] rounded-tr-[32px] rounded-bl-[32px] rounded-tl-none rounded-br-none z-20 pointer-events-none select-none"></div>
            
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/anatical.png' ); ?>" alt="Analytical Capabilities"
              class="w-full h-full object-cover relative z-10">
          </div>
        </div>

        <!-- Right Content Column (width: 506px, height: 408px) -->
        <div class="col-span-12 lg:col-span-6 flex flex-col justify-center gap-5 max-w-[506px]">
          
          <!-- Number Tag: 01 -->
          <div class="flex items-center gap-3">
            <span class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat font-bold text-[22px] leading-[30px] text-[#FF8D00]">
              01
            </span>
          </div>

          <!-- Main Title & Subtitle -->
          <div class="flex flex-col gap-2">
            <h2 class="font-montserrat font-bold text-[22px] leading-[30px] text-black">
              Analytical Capabilities
            </h2>
            <p class="font-montserrat font-medium text-[18px] leading-[30px] text-[#5D3700]">
              Precision testing for dependable performance.
            </p>
          </div>

          <!-- Bullet Points 2-Column Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6 pt-2">
            
            <!-- Left Column Items -->
            <div class="flex flex-col gap-4">
              <!-- Item 1 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Instrumental analysis (LC-MS, HPLC, FT-NIR, ICP-OES &amp; more)
                </span>
              </div>

              <!-- Item 2 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Nutritional profiling and verification
                </span>
              </div>

              <!-- Item 3 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Purity and consistency evaluation
                </span>
              </div>

              <!-- Item 4 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Particle size and viscosity assessment
                </span>
              </div>
            </div>

            <!-- Right Column Items -->
            <div class="flex flex-col gap-4">
              <!-- Item 1 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Physical and chemical testing
                </span>
              </div>

              <!-- Item 2 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Microbiological safety checks
                </span>
              </div>

              <!-- Item 3 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Batch validation and quality monitoring
                </span>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- ==================== R&D & RESEARCH LAB SECTION (02) ==================== -->
    <section class="w-full bg-[#FDFBF3] py-12 px-6 sm:px-10 md:px-14 lg:px-16">
      <div class="max-w-[1120px] mx-auto min-h-[408px] grid grid-cols-12 gap-8 lg:gap-10 items-center">
        
        <!-- Left Content Column (width: 506px, height: 408px) -->
        <div class="col-span-12 lg:col-span-6 flex flex-col justify-center gap-5 max-w-[506px]">
          
          <!-- Number Tag: 02 -->
          <div class="flex items-center gap-3">
            <span class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat font-bold text-[22px] leading-[30px] text-[#FF8D00]">
              02
            </span>
          </div>

          <!-- Main Title & Subtitle -->
          <div class="flex flex-col gap-2">
            <h2 class="font-montserrat font-bold text-[22px] leading-[30px] text-black">
              R&amp;D &amp; Research Lab
            </h2>
            <p class="font-montserrat font-medium text-[18px] leading-[30px] text-[#5D3700]">
              Turning ideas into market-ready solutions.
            </p>
          </div>

          <!-- Bullet Points 2-Column Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6 pt-2">
            
            <!-- Left Column Items -->
            <div class="flex flex-col gap-4">
              <!-- Item 1 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Product optimization and reformulation
                </span>
              </div>

              <!-- Item 2 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Application-specific functionality testing
                </span>
              </div>

              <!-- Item 3 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Texture and stability enhancement
                </span>
              </div>

              <!-- Item 4 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Clean-label solution development
                </span>
              </div>
            </div>

            <!-- Right Column Items -->
            <div class="flex flex-col gap-4">
              <!-- Item 1 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Nutritional claim validation
                </span>
              </div>

              <!-- Item 2 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Pilot trials and feasibility testing
                </span>
              </div>

              <!-- Item 3 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Collaboration with research institutions
                </span>
              </div>
            </div>

          </div>

        </div>

        <!-- Right Image Column (width: 538px, height: 408px) -->
        <div class="col-span-12 lg:col-span-6 relative flex items-center justify-center">
          <div class="relative w-full max-w-[538px] h-[408px] rounded-tr-[44px] rounded-bl-[44px] rounded-tl-none rounded-br-none overflow-hidden shadow-xl z-10">
            
            <!-- Orange Leaf Badge Overlay (Figma Spec: 114.18px x 72px, top: 9px, left: 9px, linear-gradient 90deg #FF8D00 to #FFB457, radii: tr:32px, bl:32px) -->
            <div class="absolute top-[9px] left-[9px] w-[114.18px] h-[72px] bg-gradient-to-r from-[#FF8D00] to-[#FFB457] rounded-tr-[32px] rounded-bl-[32px] rounded-tl-none rounded-br-none z-20 pointer-events-none select-none"></div>
            
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/research-lab.png' ); ?>" alt="R&amp;D &amp; Research Lab"
              class="w-full h-full object-cover relative z-10">
          </div>
        </div>

      </div>
    </section>

    <!-- ==================== CERTIFICATIONS & COMPLIANCE SECTION (03) ==================== -->
    <section class="w-full bg-[#FDFBF3] py-12 px-6 sm:px-10 md:px-14 lg:px-16">
      <div class="max-w-[1120px] mx-auto min-h-[444px] bg-gradient-to-b from-[#EAF6EC] via-[#F2FAF4] to-white rounded-tr-[44px] rounded-bl-[44px] rounded-tl-none rounded-br-none p-6 lg:p-8 shadow-sm border border-emerald-100/40 grid grid-cols-12 gap-8 lg:gap-10 items-center">
        
        <!-- Left Image Column (width: 538px, height: 408px) -->
        <div class="col-span-12 lg:col-span-6 relative flex items-center justify-center">
          <div class="relative w-full max-w-[538px] h-[408px] rounded-tr-[44px] rounded-bl-[44px] rounded-tl-none rounded-br-none overflow-hidden shadow-xl z-10">
            
            <!-- Orange Leaf Badge Overlay (Figma Spec: 114.18px x 72px, top: 9px, left: 9px, linear-gradient 90deg #FF8D00 to #FFB457, radii: tr:32px, bl:32px) -->
            <div class="absolute top-[9px] left-[9px] w-[114.18px] h-[72px] bg-gradient-to-r from-[#FF8D00] to-[#FFB457] rounded-tr-[32px] rounded-bl-[32px] rounded-tl-none rounded-br-none z-20 pointer-events-none select-none"></div>
            
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rice-in-hand.png' ); ?>" alt="Certifications &amp; Compliance"
              class="w-full h-full object-cover relative z-10">
          </div>
        </div>

        <!-- Right Content Column (width: 506px, height: 408px) -->
        <div class="col-span-12 lg:col-span-6 flex flex-col justify-center gap-5 max-w-[506px]">
          
          <!-- Number Tag: 03 -->
          <div class="flex items-center gap-3">
            <span class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat font-bold text-[22px] leading-[30px] text-[#FF8D00]">
              03
            </span>
          </div>

          <!-- Main Title & Subtitle -->
          <div class="flex flex-col gap-2">
            <h2 class="font-montserrat font-bold text-[22px] leading-[30px] text-black">
              Certifications &amp; Compliance
            </h2>
            <p class="font-montserrat font-medium text-[18px] leading-[30px] text-[#5D3700]">
              Trusted processes. Global standards.
            </p>
          </div>

          <!-- Bullet Points 2-Column Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6 pt-2">
            
            <!-- Left Column Items -->
            <div class="flex flex-col gap-4">
              <!-- Item 1 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  ISO 9001:2015 — Quality Management System
                </span>
              </div>

              <!-- Item 2 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  NABL 17025 Accreditation (in progress)
                </span>
              </div>

              <!-- Item 3 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Continuous quality monitoring &amp; audit readiness
                </span>
              </div>
            </div>

            <!-- Right Column Items -->
            <div class="flex flex-col gap-4">
              <!-- Item 1 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  FSSC 22000 — Food Safety Certification
                </span>
              </div>

              <!-- Item 2 -->
              <div class="flex items-start gap-2.5">
                <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                  <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
                  Export compliance across EU, US, MENA &amp; APAC
                </span>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- ==================== QUALITY ASSURANCE SECTION ==================== -->
    <section class="w-full relative overflow-hidden bg-gradient-to-r from-[#00A256] via-[#00B45F] to-[#00924D] py-16 lg:py-20 px-6">
      
      <!-- Background Decorative Leaves (Left & Right - Figma Specs: w:282.1px, h:369px, left:-141px, opacity:0.24) -->
      <div class="absolute -left-[74px] top-[64%] -translate-y-1/2 w-[282px] h-[369px] pointer-events-none select-none z-0 opacity-1">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/quality-leaf.svg' ); ?>" alt="" class="w-full h-full object-contain">
      </div>
      <div class="absolute -right-[74px] top-[64%] -translate-y-1/2 w-[282px] h-[369px] pointer-events-none select-none z-0 scale-x-[-1]">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/quality-leaf.svg' ); ?>" alt="" class="w-full h-full object-contain">
      </div>

      <!-- Main Content Container -->
      <div class="relative z-10 max-w-[1120px] mx-auto flex flex-col items-center gap-10">
        
        <!-- Header Container (width: 470px) -->
        <div class="max-w-[470px] mx-auto flex flex-col items-center text-center gap-3">
          <div class="flex items-center justify-center gap-3">
            <span class="w-[3px] h-[20px] bg-[#DF890C] rounded-full inline-block"></span>
            <span class="font-montserrat font-normal text-[22px] leading-[54px] tracking-[0.11em] uppercase text-white">
              QUALITY ASSURANCE
            </span>
          </div>
          <h2 class="font-montserrat font-bold text-[22px] leading-[30px] text-white">
            Controlled at every critical checkpoint.
          </h2>
        </div>

        <!-- 2x3 Grid Container (width: 686px, gap: 22px) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[22px] w-full max-w-[686px] justify-center items-center">
          
          <!-- Card 01 -->
          <div class="w-full max-w-[214px] h-[137px] mx-auto bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-4 flex flex-col justify-start gap-2.5 shadow-md">
            <div class="w-[43px] h-[43px] border border-[#FF8D00] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[18px] leading-[22px] text-[#00A256]">01</span>
            </div>
            <p class="font-montserrat font-medium text-[15px] leading-[22px] text-black">
              Incoming raw material evaluation.
            </p>
          </div>

          <!-- Card 02 -->
          <div class="w-full max-w-[214px] h-[137px] mx-auto bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-4 flex flex-col justify-start gap-2.5 shadow-md">
            <div class="w-[43px] h-[43px] border border-[#FF8D00] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[18px] leading-[22px] text-[#00A256]">02</span>
            </div>
            <p class="font-montserrat font-medium text-[15px] leading-[22px] text-black">
              In-process quality checks
            </p>
          </div>

          <!-- Card 03 -->
          <div class="w-full max-w-[214px] h-[137px] mx-auto bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-4 flex flex-col justify-start gap-2.5 shadow-md">
            <div class="w-[43px] h-[43px] border border-[#FF8D00] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[18px] leading-[22px] text-[#00A256]">03</span>
            </div>
            <p class="font-montserrat font-medium text-[15px] leading-[22px] text-black">
              Laboratory validation
            </p>
          </div>

          <!-- Card 04 -->
          <div class="w-full max-w-[214px] h-[137px] mx-auto bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-4 flex flex-col justify-start gap-2.5 shadow-md">
            <div class="w-[43px] h-[43px] border border-[#FF8D00] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[18px] leading-[22px] text-[#00A256]">04</span>
            </div>
            <p class="font-montserrat font-medium text-[15px] leading-[22px] text-black">
              Packaging integrity review
            </p>
          </div>

          <!-- Card 05 -->
          <div class="w-full max-w-[214px] h-[137px] mx-auto bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-4 flex flex-col justify-start gap-2.5 shadow-md">
            <div class="w-[43px] h-[43px] border border-[#FF8D00] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[18px] leading-[22px] text-[#00A256]">05</span>
            </div>
            <p class="font-montserrat font-medium text-[15px] leading-[22px] text-black">
              Final release approval
            </p>
          </div>

          <!-- Card 06 -->
          <div class="w-full max-w-[214px] h-[137px] mx-auto bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-4 flex flex-col justify-start gap-2.5 shadow-md">
            <div class="w-[43px] h-[43px] border border-[#FF8D00] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[18px] leading-[22px] text-[#00A256]">06</span>
            </div>
            <p class="font-montserrat font-medium text-[15px] leading-[22px] text-black">
              Batch traceability documentation
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- ==================== SUSTAINABLE OPERATIONS SECTION ==================== -->
    <section class="w-full py-12 px-6 sm:px-10 md:px-14 lg:px-16">
      <div class="max-w-[1120px] mx-auto min-h-[408px] grid grid-cols-12 gap-8 lg:gap-10 items-center">
        
        <!-- Left Content Column (width: 506px) -->
        <div class="col-span-12 lg:col-span-6 flex flex-col justify-center gap-5 max-w-[506px]">
          
          <!-- Section Tag -->
          <div class="flex items-center gap-3">
            <span class="w-[4px] h-[24px] bg-[#DF890C] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat font-normal text-[18px] leading-[26px] tracking-[0.11em] uppercase text-[#B86200]">
              SUSTAINABLE OPERATIONS
            </span>
          </div>

          <!-- Main Title -->
          <h2 class="font-montserrat font-bold text-[22px] leading-[30px] text-black">
            Responsible manufacturing for the future.
          </h2>

          <!-- Bullet Points Column -->
          <div class="flex flex-col gap-4 pt-2">
            <!-- Item 1 -->
            <div class="flex items-start gap-2.5">
              <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[15px] leading-[22px] text-black/90">
                Sustainable sourcing practices
              </span>
            </div>

            <!-- Item 2 -->
            <div class="flex items-start gap-2.5">
              <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[15px] leading-[22px] text-black/90">
                Resource-efficient production
              </span>
            </div>

            <!-- Item 3 -->
            <div class="flex items-start gap-2.5">
              <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[15px] leading-[22px] text-black/90">
                Waste reduction initiatives
              </span>
            </div>

            <!-- Item 4 -->
            <div class="flex items-start gap-2.5">
              <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[15px] leading-[22px] text-black/90">
                Zero Liquid Discharge practices
              </span>
            </div>

            <!-- Item 5 -->
            <div class="flex items-start gap-2.5">
              <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[15px] leading-[22px] text-black/90">
                Continuous environmental improvement
              </span>
            </div>
          </div>

        </div>

        <!-- Right Image Column (width: 538px, height: 408px) -->
        <div class="col-span-12 lg:col-span-6 relative flex items-center justify-center">
          <div class="relative w-full max-w-[538px] h-[408px] rounded-tr-[44px] rounded-bl-[44px] rounded-tl-none rounded-br-none overflow-hidden shadow-xl z-10">
            
            <!-- Green Leaf Badge Overlay in top-left corner -->
            <div class="absolute top-[9px] left-[9px] w-[114.18px] h-[72px] rounded-tr-[32px] rounded-bl-[32px] rounded-tl-none rounded-br-none z-20 pointer-events-none select-none" style="background: linear-gradient(145.88deg, #00A256 20.19%, #5DC671 105.95%);"></div>
            
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/sustanable-plant.png' ); ?>" alt="Sustainable Operations"
              class="w-full h-full object-cover relative z-10">
          </div>
        </div>

      </div>
    </section>

    <!-- ==================== LET'S BUILD TOGETHER CTA SECTION ==================== -->
    <section class="w-full bg-[#FDFBF3] py-16 px-6 sm:px-10 md:px-14 lg:px-16 border-t border-amber-100/60">
      <div class="max-w-[1120px] mx-auto min-h-[380px] grid grid-cols-12 gap-8 lg:gap-14 items-center">
        
        <!-- Left Image Column (width: 538px, height: 360px) -->
        <div class="col-span-12 lg:col-span-6 relative flex items-center justify-center">
          <div class="relative w-full max-w-[538px] h-[340px] lg:h-[360px] rounded-tl-[44px] rounded-br-[44px] rounded-tr-none rounded-bl-none overflow-hidden shadow-xl z-10">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/about-let.png' ); ?>" alt="Let's build quality-driven solutions together"
              class="w-full h-full object-cover relative z-10">
          </div>

          <!-- Overlapping Paddy Rice Stalk (rice-g.png) on the left side of the photo -->
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rice-g.png' ); ?>" alt="Rice stalk"
            class="absolute -left-6 sm:-left-8 bottom-2 sm:-bottom-4 h-[160px] sm:h-[190px] w-auto z-30 pointer-events-none select-none object-contain drop-shadow-xl">
        </div>

        <!-- Right Content Column -->
        <div class="col-span-12 lg:col-span-6 flex flex-col justify-center gap-5 max-w-[520px]">
          
          <h2 class="font-montserrat font-bold text-[30px] lg:text-[36px] leading-[40px] lg:leading-[46px] text-[#5D3700]">
            Let’s build quality-driven solutions together
          </h2>

          <p class="font-montserrat font-medium text-[16px] lg:text-[18px] leading-[26px] text-black/80">
            From concept to commercialization, Starizo delivers ingredients backed by science, testing, and trusted processes.
          </p>

          <div class="pt-2">
            <a href="./contact.html"
              class="h-[46px] bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-bold text-[15px] px-7 rounded-full inline-flex items-center gap-2 transition duration-200 select-none shadow-md">
              Contact Us
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
          </div>

        </div>

      </div>
    </section>

    <!-- Footer Section (Figma: 1281×290, bg #FDF7E9, border #DF890C) -->
    
  </div> <!-- End Desktop View -->

<!-- End Desktop View -->


  <!-- ==================== MOBILE LAYOUT VIEW (xl:hidden) ==================== -->
  <div class="block xl:hidden w-full min-h-screen bg-[#FDFBF3] overflow-x-hidden">



    <!-- Mobile Hero Main Section -->
    <section class="w-full bg-[#FDFBF3] px-5 pt-4 pb-8 flex flex-col items-center text-left">
      
      <div class="w-full max-w-[343px] flex flex-col items-start justify-start gap-6 mx-auto">
        
        <!-- Mobile Research Hero Image (343px x 246px, radii: rounded-tr-[44px] rounded-bl-[44px], no bg leaf) -->
        <div class="w-full relative flex items-center justify-center my-2">
          <div class="w-full max-w-[343px] h-[246px] overflow-hidden shadow-lg rounded-tr-[44px] rounded-bl-[44px] rounded-tl-none rounded-br-none">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/hero-research.png' ); ?>" alt="Research Lab"
              class="w-full h-full object-cover">
          </div>
        </div>

        <!-- Section Tag -->
        <span class="font-montserrat font-bold text-black uppercase tracking-[0.11em] text-[13px] leading-[22px]">
          TECHNOLOGY &amp; QUALITY
        </span>

        <!-- Main Title -->
        <h1 class="font-montserrat font-bold text-[22px] leading-[30px] text-[#00A256]">
          Built On Science.<br>Proven Through Process.
        </h1>

        <!-- Description Text -->
        <p class="font-montserrat font-medium text-[14px] leading-[24px] text-black/80">
          Technology creates possibilities. Quality creates trust. At STARIZO, both are designed into every ingredient we produce.
        </p>

        <!-- CTA Button -->
        <div class="flex flex-row items-center justify-start w-full">
          <a href="./contact.html"
            class="bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-bold text-[14px] h-[44px] px-7 rounded-full flex items-center justify-center gap-2 transition duration-200 shadow-sm shrink-0">
            <span>Speak To Team</span>
            <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </a>
        </div>

        <!-- Mobile Highlights Grid (4 Badges in 2 columns) -->
        <div class="w-full grid grid-cols-2 gap-x-3 gap-y-3 pt-2">
          <div class="flex items-center gap-2.5">
            <div class="w-[26px] h-[26px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm">
              <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <span class="font-montserrat font-medium text-[13px] text-black leading-snug">Advanced Testing</span>
          </div>

          <div class="flex items-center gap-2.5">
            <div class="w-[26px] h-[26px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm">
              <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <span class="font-montserrat font-medium text-[13px] text-black leading-snug">Global Standards</span>
          </div>

          <div class="flex items-center gap-2.5">
            <div class="w-[26px] h-[26px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm">
              <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <span class="font-montserrat font-medium text-[13px] text-black leading-snug">End-to-End Traceability</span>
          </div>

          <div class="flex items-center gap-2.5">
            <div class="w-[26px] h-[26px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm">
              <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <span class="font-montserrat font-medium text-[13px] text-black leading-snug">Continuous Improvements</span>
          </div>
        </div>

      </div>
    </section>

    <!-- Mobile Quality Section -->
    <section class="w-full bg-[#FEF3DC] py-12 px-5 border-t border-amber-100/60">
      <div class="w-full max-w-[344px] mx-auto flex flex-col gap-6">
        
        <!-- Header Container -->
        <div class="flex flex-col gap-4">
          <div class="flex items-center gap-3">
            <span class="w-[4px] h-[32px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat font-medium text-[13px] leading-[20px] tracking-[0.11em] uppercase text-[#B86200]">
              QUALITY STARTS LONG BEFORE PRODUCTION
            </span>
          </div>

          <h2 class="font-montserrat font-bold text-[22px] leading-[30px] text-black">
            Quality is not a checkpoint. It is embedded across every stage of manufacturing.
          </h2>

          <p class="font-montserrat font-medium text-[14px] leading-[22px] text-black/80">
            Every role contributes to building better ingredients, stronger partnerships, and a more responsible future.
          </p>
        </div>

        <!-- Mobile Process Cards (2-Column Grid with 5th Card Centered) -->
        <div class="grid grid-cols-2 gap-x-3 gap-y-7 pt-4 w-full">
          
          <!-- Card 01: Source -->
          <div class="relative w-full max-w-[155px] h-[165px] mx-auto">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 z-20 w-[40px] h-[40px] bg-[#00A256] rounded-tl-[20px] rounded-br-[20px] rounded-tr-none rounded-bl-none flex items-center justify-center shadow-md">
              <span class="font-montserrat font-bold text-[15px] text-white">01</span>
            </div>
            <div class="absolute top-[18px] left-0 w-full h-[142px] bg-white z-10 rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] shadow-sm p-2.5 pt-7 flex flex-col items-center text-center justify-start gap-1">
              <h3 class="font-montserrat font-bold text-[16px] leading-[22px] text-[#5D3700]">
                Source
              </h3>
              <p class="font-montserrat font-normal text-[12px] leading-[17px] text-black/75">
                Incoming raw material evaluation.
              </p>
            </div>
          </div>

          <!-- Card 02: Inspect -->
          <div class="relative w-full max-w-[155px] h-[165px] mx-auto">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 z-20 w-[40px] h-[40px] bg-[#00A256] rounded-tl-[20px] rounded-br-[20px] rounded-tr-none rounded-bl-none flex items-center justify-center shadow-md">
              <span class="font-montserrat font-bold text-[15px] text-white">02</span>
            </div>
            <div class="absolute top-[18px] left-0 w-full h-[142px] bg-white z-10 rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] shadow-sm p-2.5 pt-7 flex flex-col items-center text-center justify-start gap-1">
              <h3 class="font-montserrat font-bold text-[16px] leading-[22px] text-[#5D3700]">
                Inspect
              </h3>
              <p class="font-montserrat font-normal text-[12px] leading-[17px] text-black/75">
                In-process monitoring.
              </p>
            </div>
          </div>

          <!-- Card 03: Validate -->
          <div class="relative w-full max-w-[155px] h-[165px] mx-auto">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 z-20 w-[40px] h-[40px] bg-[#00A256] rounded-tl-[20px] rounded-br-[20px] rounded-tr-none rounded-bl-none flex items-center justify-center shadow-md">
              <span class="font-montserrat font-bold text-[15px] text-white">03</span>
            </div>
            <div class="absolute top-[18px] left-0 w-full h-[142px] bg-white z-10 rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] shadow-sm p-2.5 pt-7 flex flex-col items-center text-center justify-start gap-1">
              <h3 class="font-montserrat font-bold text-[16px] leading-[22px] text-[#5D3700]">
                Validate
              </h3>
              <p class="font-montserrat font-normal text-[12px] leading-[17px] text-black/75">
                Testing and verification.
              </p>
            </div>
          </div>

          <!-- Card 04: Approve -->
          <div class="relative w-full max-w-[155px] h-[165px] mx-auto">
            <div class="absolute top-0 left-1/2 -translate-x-1/2 z-20 w-[40px] h-[40px] bg-[#00A256] rounded-tl-[20px] rounded-br-[20px] rounded-tr-none rounded-bl-none flex items-center justify-center shadow-md">
              <span class="font-montserrat font-bold text-[15px] text-white">04</span>
            </div>
            <div class="absolute top-[18px] left-0 w-full h-[142px] bg-white z-10 rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] shadow-sm p-2.5 pt-7 flex flex-col items-center text-center justify-start gap-1">
              <h3 class="font-montserrat font-bold text-[16px] leading-[22px] text-[#5D3700]">
                Approve
              </h3>
              <p class="font-montserrat font-normal text-[12px] leading-[17px] text-black/75">
                Quality release.
              </p>
            </div>
          </div>

          <!-- Card 05: Dispatch (Centered across 2 columns) -->
          <div class="col-span-2 flex justify-center w-full">
            <div class="relative w-full max-w-[155px] h-[165px]">
              <div class="absolute top-0 left-1/2 -translate-x-1/2 z-20 w-[40px] h-[40px] bg-[#00A256] rounded-tl-[20px] rounded-br-[20px] rounded-tr-none rounded-bl-none flex items-center justify-center shadow-md">
                <span class="font-montserrat font-bold text-[15px] text-white">05</span>
              </div>
              <div class="absolute top-[18px] left-0 w-full h-[142px] bg-white z-10 rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] shadow-sm p-2.5 pt-7 flex flex-col items-center text-center justify-start gap-1">
                <h3 class="font-montserrat font-bold text-[16px] leading-[22px] text-[#5D3700]">
                  Dispatch
                </h3>
                <p class="font-montserrat font-normal text-[12px] leading-[17px] text-black/75">
                  Final readiness assessment.
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- Mobile Analytical Capabilities Section -->
    <section class="w-full bg-[#FDFBF3] py-10 px-5 border-t border-amber-100/60">
      <div class="w-full max-w-[344px] mx-auto flex flex-col gap-6">
        
        <!-- Mobile Image -->
        <div class="w-full relative flex items-center justify-center">
          <div class="relative w-full max-w-[320px] h-[240px] rounded-tr-[36px] rounded-bl-[36px] rounded-tl-none rounded-br-none overflow-hidden shadow-lg z-10">
            <div class="absolute top-[6px] left-[6px] w-[75px] h-[48px] bg-gradient-to-r from-[#FF8D00] to-[#FFB457] rounded-tr-[24px] rounded-bl-[24px] rounded-tl-none rounded-br-none z-20 pointer-events-none select-none"></div>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/anatical.png' ); ?>" alt="Analytical Capabilities"
              class="w-full h-full object-cover relative z-10">
          </div>
        </div>

        <!-- Mobile Content -->
        <div class="flex flex-col gap-4">
          <div class="flex items-center gap-2.5">
            <span class="w-[3px] h-[20px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat font-bold text-[18px] leading-[26px] text-[#FF8D00]">
              01
            </span>
          </div>

          <div class="flex flex-col gap-1">
            <h2 class="font-montserrat font-bold text-[18px] leading-[26px] text-black">
              Analytical Capabilities
            </h2>
            <p class="font-montserrat font-medium text-[14px] leading-[22px] text-[#5D3700]">
              Precision testing for dependable performance.
            </p>
          </div>

          <div class="flex flex-col gap-3 pt-2">
            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Instrumental analysis (LC-MS, HPLC, FT-NIR, ICP-OES &amp; more)
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Physical and chemical testing
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Nutritional profiling and verification
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Microbiological safety checks
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Purity and consistency evaluation
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Batch validation and quality monitoring
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Particle size and viscosity assessment
              </span>
            </div>
          </div>
        </div>
      </section>
    <!-- Mobile R&D & Research Lab Section (02) -->
    <section class="w-full bg-[#FDFBF3] py-10 px-5 border-t border-amber-100/60">
      <div class="w-full max-w-[344px] mx-auto flex flex-col gap-6">
        
        <!-- Mobile Image -->
        <div class="w-full relative flex items-center justify-center">
          <div class="relative w-full max-w-[320px] h-[240px] rounded-tr-[36px] rounded-bl-[36px] rounded-tl-none rounded-br-none overflow-hidden shadow-lg z-10">
            <div class="absolute top-[6px] left-[6px] w-[75px] h-[48px] bg-gradient-to-r from-[#FF8D00] to-[#FFB457] rounded-tr-[24px] rounded-bl-[24px] rounded-tl-none rounded-br-none z-20 pointer-events-none select-none"></div>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/research-lab.png' ); ?>" alt="R&amp;D &amp; Research Lab"
              class="w-full h-full object-cover relative z-10">
          </div>
        </div>

        <!-- Mobile Content -->
        <div class="flex flex-col gap-4">
          <div class="flex items-center gap-2.5">
            <span class="w-[3px] h-[20px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat font-bold text-[18px] leading-[26px] text-[#FF8D00]">
              02
            </span>
          </div>

          <div class="flex flex-col gap-1">
            <h2 class="font-montserrat font-bold text-[18px] leading-[26px] text-black">
              R&amp;D &amp; Research Lab
            </h2>
            <p class="font-montserrat font-medium text-[14px] leading-[22px] text-[#5D3700]">
              Turning ideas into market-ready solutions.
            </p>
          </div>

          <div class="flex flex-col gap-3 pt-2">
            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Product optimization and reformulation
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Nutritional claim validation
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Application-specific functionality testing
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Pilot trials and feasibility testing
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Texture and stability enhancement
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Collaboration with research institutions
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Clean-label solution development
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Mobile Certifications & Compliance Section (03) -->
    <section class="w-full bg-[#FDFBF3] py-10 px-5 border-t border-amber-100/60">
      <div class="w-full max-w-[344px] mx-auto flex flex-col gap-6">
        
        <!-- Mobile Image -->
        <div class="w-full relative flex items-center justify-center">
          <div class="relative w-full max-w-[320px] h-[240px] rounded-tr-[36px] rounded-bl-[36px] rounded-tl-none rounded-br-none overflow-hidden shadow-lg z-10">
            <div class="absolute top-[6px] left-[6px] w-[75px] h-[48px] bg-gradient-to-r from-[#FF8D00] to-[#FFB457] rounded-tr-[24px] rounded-bl-[24px] rounded-tl-none rounded-br-none z-20 pointer-events-none select-none"></div>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rice-in-hand.png' ); ?>" alt="Certifications &amp; Compliance"
              class="w-full h-full object-cover relative z-10">
          </div>
        </div>

        <!-- Mobile Content -->
        <div class="flex flex-col gap-4">
          <div class="flex items-center gap-2.5">
            <span class="w-[3px] h-[20px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat font-bold text-[18px] leading-[26px] text-[#FF8D00]">
              03
            </span>
          </div>

          <div class="flex flex-col gap-1">
            <h2 class="font-montserrat font-bold text-[18px] leading-[26px] text-black">
              Certifications &amp; Compliance
            </h2>
            <p class="font-montserrat font-medium text-[14px] leading-[22px] text-[#5D3700]">
              Trusted processes. Global standards.
            </p>
          </div>

          <div class="flex flex-col gap-3 pt-2">
            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                ISO 9001:2015 — Quality Management System
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                FSSC 22000 — Food Safety Certification
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                NABL 17025 Accreditation (in progress)
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Export compliance across EU, US, MENA &amp; APAC
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Continuous quality monitoring &amp; audit readiness
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Mobile Quality Assurance Section -->
    <section class="w-full relative overflow-hidden bg-gradient-to-r from-[#00A256] via-[#00B45F] to-[#00924D] py-12 px-5">
      
      <div class="relative z-10 w-full max-w-[344px] mx-auto flex flex-col gap-6 items-center">
        
        <!-- Header -->
        <div class="flex flex-col items-center text-center gap-2">
          <div class="flex items-center justify-center gap-2.5">
            <span class="w-[4px] h-[20px] bg-[#FF8D00] rounded-full inline-block"></span>
            <span class="font-montserrat font-normal text-[15px] leading-[24px] tracking-[0.11em] uppercase text-white">
              QUALITY ASSURANCE
            </span>
          </div>
          <h2 class="font-montserrat font-bold text-[22px] leading-[30px] text-white">
            Controlled at every critical checkpoint.
          </h2>
        </div>

        <!-- 2-Column Process Cards Grid -->
        <div class="grid grid-cols-2 gap-3.5 sm:gap-4 w-full">
          
          <!-- Card 01 -->
          <div class="w-full bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-3.5 flex flex-col justify-start gap-2.5 shadow-md min-h-[145px]">
            <div class="w-[40px] h-[40px] border border-[#FF8D00] rounded-tl-[20px] rounded-br-[20px] rounded-tr-none rounded-bl-none flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[17px] leading-[20px] text-[#00A256]">01</span>
            </div>
            <p class="font-montserrat font-medium text-[13px] leading-[19px] text-black">
              Incoming raw material evaluation.
            </p>
          </div>

          <!-- Card 02 -->
          <div class="w-full bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-3.5 flex flex-col justify-start gap-2.5 shadow-md min-h-[145px]">
            <div class="w-[40px] h-[40px] border border-[#FF8D00] rounded-tl-[20px] rounded-br-[20px] rounded-tr-none rounded-bl-none flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[17px] leading-[20px] text-[#00A256]">02</span>
            </div>
            <p class="font-montserrat font-medium text-[13px] leading-[19px] text-black">
              In-process quality checks
            </p>
          </div>

          <!-- Card 03 -->
          <div class="w-full bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-3.5 flex flex-col justify-start gap-2.5 shadow-md min-h-[145px]">
            <div class="w-[40px] h-[40px] border border-[#FF8D00] rounded-tl-[20px] rounded-br-[20px] rounded-tr-none rounded-bl-none flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[17px] leading-[20px] text-[#00A256]">03</span>
            </div>
            <p class="font-montserrat font-medium text-[13px] leading-[19px] text-black">
              Laboratory validation
            </p>
          </div>

          <!-- Card 04 -->
          <div class="w-full bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-3.5 flex flex-col justify-start gap-2.5 shadow-md min-h-[145px]">
            <div class="w-[40px] h-[40px] border border-[#FF8D00] rounded-tl-[20px] rounded-br-[20px] rounded-tr-none rounded-bl-none flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[17px] leading-[20px] text-[#00A256]">04</span>
            </div>
            <p class="font-montserrat font-medium text-[13px] leading-[19px] text-black">
              Packaging integrity review
            </p>
          </div>

          <!-- Card 05 -->
          <div class="w-full bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-3.5 flex flex-col justify-start gap-2.5 shadow-md min-h-[145px]">
            <div class="w-[40px] h-[40px] border border-[#FF8D00] rounded-tl-[20px] rounded-br-[20px] rounded-tr-none rounded-bl-none flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[17px] leading-[20px] text-[#00A256]">05</span>
            </div>
            <p class="font-montserrat font-medium text-[13px] leading-[19px] text-black">
              Final release approval
            </p>
          </div>

          <!-- Card 06 -->
          <div class="w-full bg-white rounded-tl-[36px] rounded-br-[36px] rounded-tr-[4px] rounded-bl-[4px] p-3.5 flex flex-col justify-start gap-2.5 shadow-md min-h-[145px]">
            <div class="w-[40px] h-[40px] border border-[#FF8D00] rounded-tl-[20px] rounded-br-[20px] rounded-tr-none rounded-bl-none flex items-center justify-center shrink-0">
              <span class="font-montserrat font-bold text-[17px] leading-[20px] text-[#00A256]">06</span>
            </div>
            <p class="font-montserrat font-medium text-[13px] leading-[19px] text-black">
              Batch traceability documentation
            </p>
          </div>

        </div>
      </div>
    </section>

    <!-- Mobile Sustainable Operations Section -->
    <section class="w-full bg-[#FDFBF3] py-10 px-5 border-t border-amber-100/60">
      <div class="w-full max-w-[344px] mx-auto flex flex-col gap-6">
        
        <!-- Mobile Image -->
        <div class="w-full relative flex items-center justify-center">
          <div class="relative w-full max-w-[320px] h-[240px] rounded-tr-[36px] rounded-bl-[36px] rounded-tl-none rounded-br-none overflow-hidden shadow-lg z-10">
            <div class="absolute top-[6px] left-[6px] w-[75px] h-[48px] rounded-tr-[24px] rounded-bl-[24px] rounded-tl-none rounded-br-none z-20 pointer-events-none select-none" style="background: linear-gradient(145.88deg, #00A256 20.19%, #5DC671 105.95%);"></div>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/sustanable-plant.png' ); ?>" alt="Sustainable Operations"
              class="w-full h-full object-cover relative z-10">
          </div>
        </div>

        <!-- Mobile Content -->
        <div class="flex flex-col gap-4">
          <div class="flex items-center gap-2.5">
            <span class="w-[3px] h-[20px] bg-[#DF890C] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat font-normal text-[15px] leading-[22px] tracking-[0.1em] uppercase text-[#B86200]">
              SUSTAINABLE OPERATIONS
            </span>
          </div>

          <h2 class="font-montserrat font-bold text-[18px] leading-[26px] text-black">
            Responsible manufacturing for the future.
          </h2>

          <div class="flex flex-col gap-3 pt-2">
            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Sustainable sourcing practices
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Resource-efficient production
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Waste reduction initiatives
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Zero Liquid Discharge practices
              </span>
            </div>

            <div class="flex items-start gap-2.5">
              <div class="w-[22px] h-[22px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
                <svg class="w-[11px] h-[11px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-[13px] leading-[19px] text-black/90">
                Continuous environmental improvement
              </span>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Mobile Let's Build Together CTA Section -->
    <section class="w-full bg-[#FDFBF3] py-10 px-5 border-t border-amber-100/60">
      <div class="w-full max-w-[344px] mx-auto flex flex-col gap-6">
        
        <!-- Mobile Image Container -->
        <div class="w-full relative flex items-center justify-center">
          <div class="relative w-full max-w-[343px] h-[246px] rounded-tl-[44px] rounded-br-[44px] rounded-tr-none rounded-bl-none overflow-hidden shadow-lg z-10">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/about-let.png' ); ?>" alt="Let's build quality-driven solutions together"
              class="w-full h-full object-cover relative z-10">
          </div>
        </div>

        <!-- Mobile Content -->
        <div class="flex flex-col gap-4">
          <h2 class="font-montserrat font-bold text-[22px] leading-[30px] text-[#5D3700]">
            Let’s build quality-driven solutions together
          </h2>

          <p class="font-montserrat font-medium text-[14px] leading-[22px] text-black/90">
            From concept to commercialization, Starizo delivers ingredients backed by science, testing, and trusted processes.
          </p>

          <div class="pt-1">
            <a href="./contact.html"
              class="h-[44px] border border-black rounded-full px-6 inline-flex items-center gap-2 font-montserrat font-bold text-[14px] text-black hover:bg-black hover:text-white transition duration-200 w-fit select-none">
              Speak To Team
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
          </div>
        </div>

      </div>
    </section>

  </div><!-- End Mobile View -->

<?php get_footer(); ?>
