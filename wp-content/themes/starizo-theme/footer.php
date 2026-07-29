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
                          <li><a href="' . esc_url(site_url('/food-beverage')) . '" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors block">Food &amp; Beverage</a></li>
                          <li><a href="' . esc_url(site_url('/cosmetics-personal-care')) . '" class="text-[12px] text-black leading-[16px] hover:text-starizo-orange transition-colors block">Cosmetics &amp; Personal Care</a></li>
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
                          <li><a href="' . esc_url(site_url('/about#story')) . '" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors block">Our Story</a></li>
                          <li><a href="' . esc_url(site_url('/research-lab')) . '" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors block">Research Lab</a></li>
                          <li><a href="' . esc_url(site_url('/about#technology')) . '" class="text-[12px] text-black leading-[20px] hover:text-starizo-orange transition-colors block">Technology &amp; Quality</a></li>
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
                          <li><a href="' . esc_url(site_url('/plant')) . '" class="text-[12px] font-bold text-black leading-[20px] hover:text-starizo-orange transition-colors block">Plant</a></li>
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
                        <li><a href="' . esc_url(site_url('/food-beverage')) . '" class="hover:text-starizo-orange transition-colors">Food &amp; Beverage</a></li>
                        <li><a href="' . esc_url(site_url('/cosmetics-personal-care')) . '" class="hover:text-starizo-orange transition-colors leading-[16px]">Cosmetics &amp;<br>Personal Care</a></li>
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
                        <a href="' . esc_url(site_url('/plant')) . '" class="hover:text-starizo-orange transition-colors">Plant</a>
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

<?php wp_footer(); ?>
</body>
</html>
