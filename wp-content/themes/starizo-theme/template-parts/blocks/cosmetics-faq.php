<?php
/**
 * Template Part: Cosmetics & Personal Care FAQ Block
 *
 * @package Starizo
 */
?>

<!-- ==================== DESKTOP LAYOUT VIEW (xl: 1280px+ screens) ==================== -->
<div class="hidden xl:block w-full">

  <!-- DESKTOP FREQUENTLY ASKED QUESTIONS SECTION -->
  <section class="w-full bg-[#FDFBF3] py-20 px-[80px] border-t border-amber-100/60">
    <div class="max-w-[1280px] mx-auto">

      <div class="flex items-center gap-3 mb-10">
        <div class="w-[4px] h-[32px] bg-[#FF8D00] rounded-full shrink-0"></div>
        <h2 class="font-montserrat font-normal text-[22px] text-[#5D3700] uppercase leading-[54px] tracking-[0.11em]">
          Frequently Asked Questions
        </h2>
      </div>

      <div class="grid grid-cols-12 gap-12 items-start">
        
        <!-- Accordion Column (7 Cols) -->
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

          <div class="bg-white border border-gray-100/80 rounded-[28px] py-5 px-7 shadow-sm">
            <div class="flex justify-between items-center gap-4">
              <h4 class="font-montserrat font-semibold text-[17px] text-black">Do you support international supply?</h4>
              <div class="w-5 h-5 flex items-center justify-center relative text-[#FF8D00] shrink-0">
                <div class="w-5 h-[2px] bg-current rounded-full"></div>
                <div class="w-[2px] h-5 bg-current rounded-full absolute"></div>
              </div>
            </div>
          </div>

          <div class="bg-white border border-gray-100/80 rounded-[28px] py-5 px-7 shadow-sm">
            <div class="flex justify-between items-center gap-4">
              <h4 class="font-montserrat font-semibold text-[17px] text-black">Can STARIZO support product development?</h4>
              <div class="w-5 h-5 flex items-center justify-center relative text-[#FF8D00] shrink-0">
                <div class="w-5 h-[2px] bg-current rounded-full"></div>
                <div class="w-[2px] h-5 bg-current rounded-full absolute"></div>
              </div>
            </div>
          </div>

          <div class="bg-white border border-gray-100/80 rounded-[28px] py-5 px-7 shadow-sm">
            <div class="flex justify-between items-center gap-4">
              <h4 class="font-montserrat font-semibold text-[17px] text-black">Is there a minimum order requirement?</h4>
              <div class="w-5 h-5 flex items-center justify-center relative text-[#FF8D00] shrink-0">
                <div class="w-5 h-[2px] bg-current rounded-full"></div>
                <div class="w-[2px] h-5 bg-current rounded-full absolute"></div>
              </div>
            </div>
          </div>

        </div>

        <!-- Brand Info Card Column (5 Cols) -->
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
              <p class="text-[14px] font-medium text-black/70 leading-relaxed">
                From idea to industrial production—we support every stage of the journey.
              </p>
            </div>
            <div class="pt-6">
              <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>"
                class="w-full border-2 border-[#FF8D00] hover:bg-[#FF8D00] text-[#FF8D00] hover:text-white font-bold text-[15px] py-3.5 rounded-full flex items-center justify-center gap-2 transition-all duration-200 select-none">
                Speak To Team
                <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16"><path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.931 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="currentColor"/></svg>
              </a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

</div>

<!-- ==================== MOBILE LAYOUT VIEW (<1280px screens) ==================== -->
<div class="block xl:hidden w-full">

  <!-- Mobile Frequently Asked Questions Section -->
  <section class="w-full bg-[#FDFBF3] py-12 px-5 border-t border-amber-100/60">
    
    <div class="w-full max-w-[340px] mx-auto mb-6">
      <div class="flex items-center gap-2.5">
        <div class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full shrink-0"></div>
        <h2 class="font-montserrat font-normal text-[15px] text-[#5D3700] uppercase leading-[24px] tracking-[0.11em]">
          Frequently Asked Questions
        </h2>
      </div>
    </div>

    <!-- Mobile Accordions -->
    <div class="w-full max-w-[340px] mx-auto flex flex-col gap-4 mb-8">
      
      <div class="bg-white border border-gray-100/60 rounded-3xl py-4 px-5 shadow-sm">
        <div class="flex justify-between items-center gap-3">
          <h4 class="font-montserrat font-semibold text-[15px] text-black">What types of rice-derived ingredients do you produce?</h4>
          <div class="w-4 h-4 flex items-center justify-center relative text-[#FF8D00] shrink-0">
            <div class="w-4 h-[2px] bg-current rounded-full"></div>
            <div class="w-[2px] h-4 bg-current rounded-full absolute"></div>
          </div>
        </div>
      </div>

      <div class="bg-white border border-gray-100/60 rounded-3xl py-4 px-5 shadow-sm">
        <div class="flex justify-between items-center gap-3">
          <h4 class="font-montserrat font-semibold text-[15px] text-black">What certifications do your manufacturing facilities hold?</h4>
          <div class="w-4 h-4 flex items-center justify-center relative text-[#FF8D00] shrink-0">
            <div class="w-4 h-[2px] bg-current rounded-full"></div>
            <div class="w-[2px] h-4 bg-current rounded-full absolute"></div>
          </div>
        </div>
      </div>

      <div class="bg-white border border-gray-100/60 rounded-3xl py-4 px-5 shadow-sm">
        <div class="flex justify-between items-center gap-3">
          <h4 class="font-montserrat font-semibold text-[15px] text-black">Do you support international supply?</h4>
          <div class="w-4 h-4 flex items-center justify-center relative text-[#FF8D00] shrink-0">
            <div class="w-4 h-[2px] bg-current rounded-full"></div>
            <div class="w-[2px] h-4 bg-current rounded-full absolute"></div>
          </div>
        </div>
      </div>

      <div class="bg-white border border-gray-100/60 rounded-3xl py-4 px-5 shadow-sm">
        <div class="flex justify-between items-center gap-3">
          <h4 class="font-montserrat font-semibold text-[15px] text-black">Can STARIZO support product development?</h4>
          <div class="w-4 h-4 flex items-center justify-center relative text-[#FF8D00] shrink-0">
            <div class="w-4 h-[2px] bg-current rounded-full"></div>
            <div class="w-[2px] h-4 bg-current rounded-full absolute"></div>
          </div>
        </div>
      </div>

      <div class="bg-white border border-gray-100/60 rounded-3xl py-4 px-5 shadow-sm">
        <div class="flex justify-between items-center gap-3">
          <h4 class="font-montserrat font-semibold text-[15px] text-black">Is there a minimum order requirement?</h4>
          <div class="w-4 h-4 flex items-center justify-center relative text-[#FF8D00] shrink-0">
            <div class="w-4 h-[2px] bg-current rounded-full"></div>
            <div class="w-[2px] h-4 bg-current rounded-full absolute"></div>
          </div>
        </div>
      </div>

    </div>

    <!-- Mobile Brand Info Card -->
    <div class="w-full max-w-[340px] bg-white border border-gray-100 shadow-sm rounded-[24px] p-6 flex flex-col justify-between gap-6 mx-auto">
      <div class="flex flex-col space-y-4">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/logo.svg' ); ?>" alt="Starizo" class="h-8 w-auto self-start">
        <h4 class="text-[20px] font-bold text-[#5D3700] leading-tight">
          More Than Ingredients.<br>Built For Growth.
        </h4>
        <p class="text-[13px] font-medium text-black/70 leading-[20px]">
          STARIZO combines sourcing intelligence, advanced processing, technical collaboration, and manufacturing scale to help businesses create products that perform in the real world.
        </p>
        <p class="text-[13px] font-medium text-black/70 leading-[20px]">
          From idea to industrial production—we support every stage of the journey.
        </p>
      </div>
      <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>"
        class="w-full border-2 border-[#FF8D00] hover:bg-[#FF8D00] text-[#FF8D00] hover:text-white font-bold text-[15px] py-3 rounded-full flex items-center justify-center gap-2 transition-all duration-200 select-none">
        Speak To Team
        <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16"><path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.931 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="currentColor"/></svg>
      </a>
    </div>

  </section>

</div>
