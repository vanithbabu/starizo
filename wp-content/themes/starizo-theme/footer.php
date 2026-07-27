<?php
/**
 * The template for displaying the footer
 */
?>

<!-- Desktop Layout Container for Footer -->
<div class="hidden xl:block w-full">
    <footer class="w-full relative overflow-hidden">

      <!-- Upper Footer Area -->
      <div class="relative w-full bg-[#FDF7E9] border-t border-[#DF890C]">

        <!-- Layer 2 — Left decorative leaf -->
        <div class="hidden lg:block absolute left-0 top-[14px] w-[111px] h-[145px] -translate-x-1/2 pointer-events-none">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/footer-left-leaf.svg'); ?>" alt="" class="w-full h-full">
        </div>

        <!-- Layer 1 — Right decorative leaf -->
        <div class="hidden lg:block absolute right-0 top-[14px] w-[111px] h-[145px] translate-x-1/2 pointer-events-none">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/footer-right-leaf.svg'); ?>" alt="" class="w-full h-full">
        </div>

        <!-- Footer Content Grid -->
        <div class="max-w-[1280px] mx-auto px-6 md:px-[80px] py-12 lg:py-[54px]">
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-y-8 gap-x-6 lg:gap-x-12">

            <!-- Brand Logo Column -->
            <div class="lg:col-span-2">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/logo.svg'); ?>" alt="Starizo" class="h-[44px] w-auto">
            </div>

            <!-- Products Column -->
            <div class="lg:col-span-2">
              <h5 class="text-[12px] font-bold text-black leading-[20px] mb-4">Products</h5>
              <ul class="space-y-2">
                <li><a href="#" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors">Food &amp; Beverage</a></li>
                <li><a href="#" class="text-[12px] text-black leading-[16px] hover:text-starizo-orange transition-colors">Cosmetics &amp; Personal Care</a></li>
              </ul>
            </div>

            <!-- About Column -->
            <div class="lg:col-span-2">
              <h5 class="text-[12px] font-bold text-black leading-[20px] mb-4">About</h5>
              <ul class="space-y-2">
                <li><a href="#" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors">Our Story</a></li>
                <li><a href="#" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors">Research Lab</a></li>
                <li><a href="#" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors">Technology &amp; Quality</a></li>
              </ul>
            </div>

            <!-- Partner with Us Column -->
            <div class="lg:col-span-2">
              <h5 class="text-[12px] font-bold text-black leading-[20px] mb-4">Partner with Us</h5>
              <ul class="space-y-2">
                <li><a href="#" class="text-[12px] font-bold text-black leading-[20px] hover:text-starizo-orange transition-colors">Plant</a></li>
                <li><a href="#" class="text-[12px] font-bold text-black leading-[20px] hover:text-starizo-orange transition-colors">Careers</a></li>
                <li><a href="#" class="text-[12px] font-bold text-black leading-[20px] hover:text-starizo-orange transition-colors">Insights</a></li>
                <li><a href="#" class="text-[12px] font-bold text-black leading-[20px] hover:text-starizo-orange transition-colors">Contact</a></li>
              </ul>
            </div>

            <!-- Contact Details Column -->
            <div class="lg:col-span-4 whitespace-nowrap">
              <h5 class="text-[12px] font-bold text-black leading-[20px] mb-4">Contact Details</h5>
              <div class="flex items-center gap-2">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/mail-icon.svg'); ?>" alt="Email" class="w-[29px] h-[29px] shrink-0">
                <span class="text-[12px] font-bold text-black leading-[20px]">Email: sales@starizo.com</span>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Bottom Copyright Bar -->
      <div class="w-full bg-[#5D3700] text-white font-montserrat font-normal text-[10px] leading-[20px] tracking-[0em]">
        <div class="max-w-[1280px] mx-auto px-6 md:px-[80px] min-h-[33px] py-2 md:py-0 md:h-[33px] flex flex-row items-center justify-between gap-2 whitespace-nowrap">
          <span>© 2026 Starizo | All Rights Reserved.</span>
          <div class="flex items-center gap-1 shrink-0">
            <a href="#" class="hover:underline transition-colors">Legal policy</a>
            <span class="opacity-50">|</span>
            <a href="#" class="hover:underline transition-colors">Privacy policy</a>
          </div>
        </div>
      </div>

    </footer>
</div>

<!-- Mobile Layout Container for Footer -->
<div class="xl:hidden w-full overflow-x-hidden">
    <footer class="w-full bg-[#FDF7E9] text-black">

      <div class="px-6 pt-10 pb-12 w-full max-w-[341px] mx-auto">

        <!-- Brand Logo -->
        <a href="#" class="inline-block mb-8" aria-label="Starizo Home">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/logo.svg'); ?>" alt="starizo™" class="h-9 w-auto">
        </a>

        <!-- 2-Column Links Grid -->
        <div class="grid grid-cols-2 gap-x-6 gap-y-6">

          <!-- Column 1 (Left) -->
          <div class="flex flex-col">
            <h4 class="font-montserrat font-bold text-[12px] leading-[20px] tracking-[0em] text-black mb-3">Products</h4>
            <ul class="flex flex-col gap-2 mb-6 font-montserrat font-normal text-[12px] leading-[20px] tracking-[0em] text-black/80">
              <li><a href="#" class="hover:text-starizo-orange transition-colors">Food &amp; Beverage</a></li>
              <li><a href="#" class="hover:text-starizo-orange transition-colors leading-[16px]">Cosmetics &amp;<br>Personal Care</a></li>
            </ul>

            <div class="flex flex-col gap-3 font-montserrat font-bold text-[12px] leading-[20px] tracking-[0em] text-black mb-6">
              <a href="#" class="hover:text-starizo-orange transition-colors">Partner with Us</a>
              <a href="#" class="hover:text-starizo-orange transition-colors">Plant</a>
              <a href="#" class="hover:text-starizo-orange transition-colors">Careers</a>
              <a href="#" class="hover:text-starizo-orange transition-colors">Insights</a>
              <a href="#" class="hover:text-starizo-orange transition-colors">Contact</a>
            </div>

            <!-- Contact Details -->
            <div class="flex flex-col col-span-2 mt-2">
              <h4 class="font-montserrat font-bold text-[12px] leading-[20px] tracking-[0em] text-black mb-3">Contact Details</h4>
              <div class="w-[312px] h-[29px] flex items-center gap-[12px] whitespace-nowrap">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/mail-icon.svg'); ?>" alt="Email" class="w-[29px] h-[29px] shrink-0">
                <p class="font-montserrat text-[12px] leading-[20px] tracking-[0em]">
                  <span class="font-bold text-black">Email: </span>
                  <a href="mailto:sales@starizo.com" class="font-normal text-black/80 hover:underline">sales@starizo.com</a>
                </p>
              </div>
            </div>
          </div>

          <!-- Column 2 (Right) -->
          <div class="flex flex-col">
            <h4 class="font-montserrat font-bold text-[12px] leading-[20px] tracking-[0em] text-black mb-3">About</h4>
            <ul class="flex flex-col gap-2 font-montserrat font-normal text-[12px] leading-[20px] tracking-[0em] text-black/80">
              <li><a href="#" class="hover:text-starizo-orange transition-colors">Our Story</a></li>
              <li><a href="#" class="hover:text-starizo-orange transition-colors">Research Lab</a></li>
              <li><a href="#" class="hover:text-starizo-orange transition-colors">Technology &amp; Quality</a></li>
            </ul>
          </div>

        </div>

      </div>

      <!-- Copyright Bottom Bar -->
      <div class="w-full bg-[#5D3700] text-white py-3 px-6 font-montserrat font-normal text-[10px] leading-[20px] tracking-[0em]">
        <div class="w-full max-w-[341px] mx-auto flex flex-row items-center justify-between gap-2 whitespace-nowrap">
          <span>© 2026 Starizo | All Rights Reserved.</span>
          <div class="flex items-center gap-1 shrink-0">
            <a href="#" class="hover:underline">Legal policy</a>
            <span class="opacity-70">|</span>
            <a href="#" class="hover:underline">Privacy policy</a>
          </div>
        </div>
      </div>

    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>
