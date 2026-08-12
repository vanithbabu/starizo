<?php
/**
 * The template for displaying the footer
 */
$footer_logo = get_field('footer_logo', 'option') ?: get_template_directory_uri() . '/public/assets/logo.svg';
$footer_email = get_field('footer_email', 'option') ?: 'sales@starizo.com';
$footer_copyright = get_field('footer_copyright_text', 'option') ?: '© 2026 Starizo | All Rights Reserved.';
$legal_policy_link = get_field('footer_legal_policy_link', 'option') ?: '#';
$privacy_policy_link = get_field('footer_privacy_policy_link', 'option') ?: '#';
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
              <img src="<?php echo esc_url($footer_logo); ?>" alt="<?php bloginfo('name'); ?>" class="h-[44px] w-auto">
            </div>

            <!-- Products Column -->
            <div class="lg:col-span-2">
              <h5 class="text-[12px] font-bold text-black leading-[20px] mb-4">Products</h5>
              <?php
              if ( has_nav_menu('footer_products') ) {
                  wp_nav_menu( array(
                      'theme_location' => 'footer_products',
                      'container' => false,
                      'menu_class' => 'space-y-2',
                      'fallback_cb' => false,
                  ) );
              } else {
                  echo '<ul class="space-y-2">
                          <li><a href="' . esc_url(site_url('/product-category/food-beverage')) . '" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors block">Food &amp; Beverage</a></li>
                          <li><a href="' . esc_url(site_url('/product-category/cosmetics-personal-care')) . '" class="text-[12px] text-black leading-[16px] hover:text-starizo-orange transition-colors block">Cosmetics &amp; Personal Care</a></li>
                        </ul>';
              }
              ?>
            </div>

            <!-- About Column -->
            <div class="lg:col-span-2">
              <h5 class="text-[12px] font-bold text-black leading-[20px] mb-4">About</h5>
              <?php
              if ( has_nav_menu('footer_about') ) {
                  wp_nav_menu( array(
                      'theme_location' => 'footer_about',
                      'container' => false,
                      'menu_class' => 'space-y-2',
                      'fallback_cb' => false,
                  ) );
              } else {
                  echo '<ul class="space-y-2">
                          <li><a href="' . esc_url(site_url('/about-us#story')) . '" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors block">Our Story</a></li>
                          <li><a href="' . esc_url(site_url('/research-lab')) . '" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors block">Research Lab</a></li>
                          <li><a href="' . esc_url(site_url('/about-us#technology')) . '" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors block">Technology &amp; Quality</a></li>
                        </ul>';
              }
              ?>
            </div>

            <!-- Partner with Us Column -->
            <div class="lg:col-span-2">
              <h5 class="text-[12px] font-bold text-black leading-[20px] mb-4">Partner with Us</h5>
              <?php
              if ( has_nav_menu('footer_partner') ) {
                  wp_nav_menu( array(
                      'theme_location' => 'footer_partner',
                      'container' => false,
                      'menu_class' => 'space-y-2',
                      'fallback_cb' => false,
                  ) );
              } else {
                  echo '<ul class="space-y-2">
                          <li><a href="' . esc_url(site_url('/careers')) . '" class="text-[12px] font-bold text-black leading-[20px] hover:text-starizo-orange transition-colors block">Careers</a></li>
                          <li><a href="' . esc_url(site_url('/insights')) . '" class="text-[12px] font-bold text-black leading-[20px] hover:text-starizo-orange transition-colors block">Insights</a></li>
                          <li><a href="' . esc_url(site_url('/contact')) . '" class="text-[12px] font-bold text-black leading-[20px] hover:text-starizo-orange transition-colors block">Contact</a></li>
                        </ul>';
              }
              ?>
            </div>

            <!-- Contact Details Column -->
            <div class="lg:col-span-4 whitespace-nowrap">
              <h5 class="text-[12px] font-bold text-black leading-[20px] mb-4">Contact Details</h5>
              <div class="flex items-center gap-2">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/mail-icon.svg'); ?>" alt="Email" class="w-[29px] h-[29px] shrink-0">
                <span class="text-[12px] font-bold text-black leading-[20px]">Email: <a href="mailto:<?php echo esc_attr($footer_email); ?>" class="hover:underline"><?php echo esc_html($footer_email); ?></a></span>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!-- Bottom Copyright Bar -->
      <div class="w-full bg-[#5D3700] text-white font-montserrat font-normal text-[10px] leading-[20px] tracking-[0em]">
        <div class="max-w-[1280px] mx-auto px-6 md:px-[80px] min-h-[33px] py-2 md:py-0 md:h-[33px] flex flex-row items-center justify-between gap-2 whitespace-nowrap">
          <span><?php echo esc_html($footer_copyright); ?></span>
          <div class="flex items-center gap-1 shrink-0">
            <a href="<?php echo esc_url($legal_policy_link); ?>" class="hover:underline transition-colors">Legal policy</a>
            <span class="opacity-50">|</span>
            <a href="<?php echo esc_url($privacy_policy_link); ?>" class="hover:underline transition-colors">Privacy policy</a>
          </div>
        </div>
      </div>

    </footer>
</div>

<!-- Mobile Layout Container for Footer -->
<div class="xl:hidden w-full">
    <footer class="w-full bg-[#FDF7E9] text-black">

      <div class="px-5 pt-10 pb-12 w-full max-w-[341px] mx-auto">

        <!-- Brand Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block mb-6" aria-label="Starizo Home">
          <img src="<?php echo esc_url($footer_logo); ?>" alt="<?php bloginfo('name'); ?>" class="h-9 w-auto">
        </a>

        <!-- 2-Column Links Grid -->
        <div class="grid grid-cols-2 gap-x-6 gap-y-4 mb-6">

          <!-- Column 1 (Left) -->
          <div class="flex flex-col gap-3 min-w-0">
            <h4 class="font-montserrat font-bold text-[14px] leading-[20px] tracking-[0em] text-black">Products</h4>
            <?php
            if ( has_nav_menu('footer_products') ) {
                wp_nav_menu( array(
                    'theme_location' => 'footer_products',
                    'container' => false,
                    'menu_class' => 'flex flex-col gap-2 font-montserrat font-medium text-[13px] leading-[20px] tracking-[0em] text-black/90 mb-2',
                    'fallback_cb' => false,
                ) );
            } else {
                echo '<ul class="flex flex-col gap-2 font-montserrat font-medium text-[13px] leading-[20px] tracking-[0em] text-black/90 mb-2">
                        <li><a href="' . esc_url(site_url('/product-category/food-beverage')) . '" class="hover:text-starizo-orange transition-colors">Food &amp; Beverage</a></li>
                        <li><a href="' . esc_url(site_url('/product-category/cosmetics-personal-care')) . '" class="hover:text-starizo-orange transition-colors leading-[16px]">Cosmetics &amp;<br>Personal Care</a></li>
                      </ul>';
            }
            ?>

            <div class="flex flex-col gap-3 font-montserrat font-bold text-[14px] leading-[20px] tracking-[0em] text-black">
              <?php
              if ( has_nav_menu('footer_partner') ) {
                  wp_nav_menu( array(
                      'theme_location' => 'footer_partner',
                      'container' => false,
                      'items_wrap' => '%3$s',
                      'fallback_cb' => false,
                  ) );
              } else {
                  echo '<a href="' . esc_url(site_url('/partner-with-us')) . '" class="hover:text-starizo-orange transition-colors">Partner with Us</a>
                        <a href="' . esc_url(site_url('/careers')) . '" class="hover:text-starizo-orange transition-colors">Careers</a>
                        <a href="' . esc_url(site_url('/insights')) . '" class="hover:text-starizo-orange transition-colors">Insights</a>
                        <a href="' . esc_url(site_url('/contact')) . '" class="hover:text-starizo-orange transition-colors">Contact</a>';
              }
              ?>
            </div>
          </div>

          <!-- Column 2 (Right) -->
          <div class="flex flex-col gap-3 min-w-0">
            <h4 class="font-montserrat font-bold text-[14px] leading-[20px] tracking-[0em] text-black">About</h4>
            <?php
            if ( has_nav_menu('footer_about') ) {
                wp_nav_menu( array(
                    'theme_location' => 'footer_about',
                    'container' => false,
                    'menu_class' => 'flex flex-col gap-2 font-montserrat font-medium text-[13px] leading-[20px] tracking-[0em] text-black/90',
                    'fallback_cb' => false,
                ) );
            } else {
                echo '<ul class="flex flex-col gap-2 font-montserrat font-medium text-[13px] leading-[20px] tracking-[0em] text-black/90">
                        <li><a href="' . esc_url(site_url('/about#story')) . '" class="hover:text-starizo-orange transition-colors">Our Story</a></li>
                        <li><a href="' . esc_url(site_url('/research-lab')) . '" class="hover:text-starizo-orange transition-colors">Research Lab</a></li>
                        <li><a href="' . esc_url(site_url('/about#technology')) . '" class="hover:text-starizo-orange transition-colors whitespace-nowrap">Technology &amp; Quality</a></li>
                      </ul>';
            }
            ?>
          </div>

        </div>

        <!-- Contact Details (Full Width Below 2-Column Grid) -->
        <div class="flex flex-col gap-2 mt-4">
          <h4 class="font-montserrat font-bold text-[14px] leading-[20px] tracking-[0em] text-black">Contact Details</h4>
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-white shadow-xs flex items-center justify-center shrink-0 border border-emerald-100">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/mail-icon.svg'); ?>" alt="Email" class="w-[22px] h-[22px] object-contain">
            </div>
            <p class="font-montserrat text-[13px] leading-[20px] tracking-[0em] whitespace-nowrap">
              <span class="font-bold text-black">Email: </span>
              <a href="mailto:<?php echo esc_attr($footer_email); ?>" class="font-normal text-black hover:underline"><?php echo esc_html($footer_email); ?></a>
            </p>
          </div>
        </div>

      </div>

      <!-- Copyright Bottom Bar (Target 1: Single Row) -->
      <div class="w-full bg-[#5D3700] text-white py-3.5 px-4 font-montserrat font-normal text-[10px] sm:text-[11px] leading-[20px] tracking-[0em]">
        <div class="w-full max-w-[341px] mx-auto flex flex-row items-center justify-between gap-2 whitespace-nowrap">
          <span><?php echo esc_html($footer_copyright); ?></span>
          <div class="flex items-center gap-1.5 shrink-0">
            <a href="<?php echo esc_url($legal_policy_link); ?>" class="hover:underline transition-colors">Legal policy</a>
            <span class="opacity-70">|</span>
            <a href="<?php echo esc_url($privacy_policy_link); ?>" class="hover:underline transition-colors">Privacy policy</a>
          </div>
        </div>
      </div>

    </footer>
</div>

<!-- Floating WhatsApp Icon -->
<a href="https://api.whatsapp.com/send/?phone=919500249555&text=Hello&type=phone_number&app_absent=0" target="_blank" aria-label="Chat with us on WhatsApp"
   class="group fixed bottom-4 right-4 md:bottom-6 md:right-6 lg:bottom-10 lg:right-10 z-[100] w-12 h-12 md:w-14 md:h-14 lg:w-[60px] lg:h-[60px] rounded-full flex items-center justify-center hover:scale-110 transition-all duration-300 shadow-[0_4px_14px_rgba(0,0,0,0.15)] bg-[#25D366] hover:bg-[#FF8D00]">
  
  <!-- Tooltip (Desktop Only) -->
  <span class="hidden lg:inline-block absolute right-[calc(100%+12px)] top-1/2 -translate-y-1/2 px-4 py-1.5 bg-[#4B4B4B] text-white text-[13px] font-montserrat font-medium rounded-full opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 whitespace-nowrap shadow-md pointer-events-none">
    WhatsApp
  </span>

  <!-- Icon -->
  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 md:w-8 md:h-8 lg:w-[34px] lg:h-[34px]">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M18.403 5.633A8.919 8.919 0 0 0 12.053 3c-4.948 0-8.976 4.027-8.978 8.977 0 1.582.413 3.126 1.198 4.488L3 21.116l4.759-1.249a8.981 8.981 0 0 0 4.29 1.093h.004c4.947 0 8.975-4.027 8.977-8.977a8.926 8.926 0 0 0-2.627-6.35m-6.35 13.812h-.003a7.458 7.458 0 0 1-3.798-1.041l-.272-.162-2.824.741.753-2.753-.177-.282a7.448 7.448 0 0 1-1.141-3.971c.002-4.114 3.349-7.461 7.465-7.461a7.414 7.414 0 0 1 5.275 2.188 7.42 7.42 0 0 1 2.183 5.279c-.002 4.114-3.349 7.462-7.461 7.462m4.093-5.589c-.225-.113-1.327-.655-1.533-.73-.205-.075-.354-.112-.504.112s-.58.729-.711.879-.262.168-.486.056-.947-.349-1.804-1.113c-.667-.595-1.117-1.329-1.248-1.554s-.014-.346.099-.458c.101-.1.224-.262.336-.393.111-.131.149-.224.224-.374s.038-.281-.019-.393c-.056-.113-.505-1.217-.692-1.666-.181-.435-.366-.377-.504-.383-.13-.006-.28-.008-.43-.008a.826.826 0 0 0-.598.28c-.205.225-.785.767-.785 1.871s.803 2.17.915 2.32c.112.15 1.582 2.415 3.832 3.387.536.231.954.369 1.279.473.537.171 1.026.146 1.413.089.431-.064 1.327-.542 1.514-1.066.187-.524.187-.973.131-1.067-.056-.094-.205-.15-.43-.263" fill="#FFFFFF"/>
  </svg>
</a>

<?php wp_footer(); ?>
</body>
</html>
