<?php
$header_logo = get_field('header_logo', 'option') ?: get_template_directory_uri() . '/public/assets/logo.svg';
$cta_text = get_field('header_cta_text', 'option') ?: 'Contact Us';
$cta_link = get_field('header_cta_link', 'option') ?: site_url('/contact');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php wp_head(); ?>
</head>

<body <?php body_class('font-montserrat bg-[#FDFBF3] text-black min-h-screen antialiased overflow-x-hidden'); ?>>
<?php wp_body_open(); ?>

  <!-- ========================================== -->
  <!-- ========== GLOBAL HEADER / NAVBAR ======== -->
  <!-- ========================================== -->
  <div class="relative z-[50] w-full max-w-[1280px] mx-auto hidden xl:block">
    <header class="absolute top-[23px] left-[40px] right-[40px]">
      <div class="h-[85px] bg-white rounded-[26px] shadow-[0_4px_44px_rgba(0,0,0,0.05)] border border-gray-100 px-10 flex items-center justify-between">
        
        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( $header_logo ); ?>" class="h-9" alt="<?php bloginfo( 'name' ); ?>">
        </a>

        <!-- Menu -->
        <nav class="flex items-center gap-10">
          <?php if ( has_nav_menu( 'primary' ) ) : ?>
              <?php
              wp_nav_menu( array(
                  'theme_location' => 'primary',
                  'container'      => false,
                  'menu_class'     => 'flex items-center gap-10',
                  'fallback_cb'    => false,
              ) );
              ?>
          <?php else : ?>
            <!-- Fallback hardcoded links if menu isn't set -->
            <button class="flex items-center gap-1 text-[18px] font-medium text-starizo-brown group relative">
              Products
              <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                <path d="M7 10l5 5 5-5H7z" />
              </svg>
            </button>
            <a href="<?php echo esc_url( site_url('/about') ); ?>" class="text-[18px] font-medium hover:text-starizo-orange transition">About</a>
            <a href="<?php echo esc_url( site_url('/partner-with-us') ); ?>" class="text-[18px] font-medium">Partner with Us</a>
            <a href="<?php echo esc_url( site_url('/research-lab') ); ?>" class="text-[18px] font-medium">Research Lab</a>
            <a href="<?php echo esc_url( site_url('/careers') ); ?>" class="text-[18px] font-medium">Careers</a>
            <a href="<?php echo esc_url( site_url('/insights') ); ?>" class="text-[18px] font-medium">Insights</a>
          <?php endif; ?>
        </nav>

        <!-- Contact -->
        <a href="<?php echo esc_url( $cta_link ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white px-7 h-[46px] rounded-full flex items-center gap-2 font-bold hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shrink-0 shadow-md hover:shadow-xl select-none">
          <?php echo esc_html( $cta_text ); ?>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </a>

      </div>
    </header>
  </div>

  <!-- Mobile Header -->
  <!-- Mobile Layout View Header -->
  <div class="xl:hidden w-full relative z-[50]">
    <header class="w-full h-[70px] bg-white flex items-center px-4 sm:px-6 justify-between shadow-sm relative z-30">
        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="shrink-0">
            <img src="<?php echo esc_url( $header_logo ); ?>" class="h-8 w-auto" alt="<?php bloginfo( 'name' ); ?>">
        </a>
        
        <!-- Right Actions: Contact Us Button + Hamburger -->
        <div class="flex items-center gap-3">
            <a href="<?php echo esc_url( $cta_link ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white text-[13px] font-bold px-4 py-2 rounded-full flex items-center gap-1.5 shadow-md hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none">
              <?php echo esc_html( $cta_text ); ?>
              <svg class="w-3.5 h-3.5 stroke-current fill-none stroke-[2.5] transform group-hover:translate-x-0.5 transition-transform duration-300" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>

            <button id="mobile-menu-btn" aria-label="Open Mobile Sidebar" class="w-9 h-9 flex flex-col items-center justify-center gap-1 focus:outline-none cursor-pointer">
                <span class="w-6 h-0.5 bg-black rounded-full transition-transform duration-300"></span>
                <span class="w-6 h-0.5 bg-black rounded-full transition-opacity duration-300"></span>
                <span class="w-6 h-0.5 bg-black rounded-full transition-transform duration-300"></span>
            </button>
        </div>
    </header>

    <!-- Mobile Sidebar Backdrop Overlay -->
    <div id="mobile-sidebar-backdrop" class="fixed inset-0 bg-black/40 z-[999] opacity-0 pointer-events-none transition-opacity duration-300"></div>

    <!-- Mobile Slide-In Sidebar Panel (1:1 Figma Component 23 Design) -->
    <div id="mobile-sidebar-panel" class="fixed top-0 left-0 w-[280px] sm:w-[320px] h-full bg-white z-[1000] transform -translate-x-full transition-transform duration-300 ease-in-out shadow-2xl p-6 flex flex-col justify-start rounded-r-[24px] overflow-y-auto">
        
        <!-- Top Row: Close Button [X] -->
        <div class="w-full flex justify-end mb-6">
            <button id="mobile-sidebar-close" class="w-9 h-9 border-2 border-[#5DC671] text-[#FF8D00] hover:bg-[#5DC671]/10 rounded-[10px] flex items-center justify-center transition duration-200 cursor-pointer" aria-label="Close sidebar">
                <svg class="w-5 h-5 stroke-current stroke-[2.5]" viewBox="0 0 24 24" fill="none">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Navigation Menu List -->
        <div class="flex flex-col w-full divide-y divide-gray-100">

            <!-- Item 1: Products (Accordion Dropdown - Component 23) -->
            <div class="py-3.5">
                <button id="mobile-accordion-toggle" class="w-full flex items-center justify-between py-1 text-left focus:outline-none cursor-pointer group">
                    <div class="flex items-center gap-3.5">
                        <!-- Sprout Icon -->
                        <div class="w-7 h-7 flex items-center justify-center text-[#00A256] shrink-0">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22v-9"/>
                                <path d="M12 13a7 7 0 0 0 7-7c0 0-3 0-7 3.5"/>
                                <path d="M12 13a7 7 0 0 1-7-7c0 0 3 0 7 3.5"/>
                            </svg>
                        </div>
                        <span class="font-montserrat font-bold text-[16px] text-black group-hover:text-[#00A256] transition-colors">Products</span>
                    </div>
                    <svg id="mobile-accordion-arrow" class="w-4 h-4 text-[#FF8D00] transform transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>

                <!-- Submenu items -->
                <div id="mobile-accordion-menu" class="hidden flex flex-col gap-2 pt-3 pb-1 pl-2">
                    <a href="<?php echo esc_url( site_url('/food-beverage') ); ?>" class="flex items-center gap-3 py-2 text-black hover:text-[#FF8D00] font-montserrat font-bold text-[15px] transition-colors">
                        <div class="w-7 h-7 rounded-full border border-[#00A256]/30 bg-[#00A256]/10 flex items-center justify-center text-[#00A256] shrink-0">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M18 8h1a4 4 0 0 1 0 8h-1"/>
                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/>
                                <line x1="6" y1="1" x2="6" y2="4"/>
                                <line x1="10" y1="1" x2="10" y2="4"/>
                                <line x1="14" y1="1" x2="14" y2="4"/>
                            </svg>
                        </div>
                        Food & Beverage
                    </a>
                    <a href="<?php echo esc_url( site_url('/cosmetics-personal-care') ); ?>" class="flex items-center gap-3 py-2 text-black hover:text-[#FF8D00] font-montserrat font-bold text-[15px] transition-colors">
                        <div class="w-7 h-7 rounded-full border border-[#00A256]/30 bg-[#00A256]/10 flex items-center justify-center text-[#00A256] shrink-0">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                            </svg>
                        </div>
                        Cosmetics & Personal Care
                    </a>
                </div>
            </div>

            <!-- Item 2: About -->
            <div class="py-3.5">
                <a href="<?php echo esc_url( site_url('/about') ); ?>" class="flex items-center gap-3.5 py-1 group">
                    <div class="w-7 h-7 flex items-center justify-center text-[#00A256] shrink-0">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"/>
                            <line x1="12" y1="16" x2="12" y2="12"/>
                            <line x1="12" y1="8" x2="12.01" y2="8"/>
                        </svg>
                    </div>
                    <span class="font-montserrat font-bold text-[16px] text-black group-hover:text-[#00A256] transition-colors">About</span>
                </a>
            </div>

            <!-- Item 3: Partner with Us -->
            <div class="py-3.5">
                <a href="<?php echo esc_url( site_url('/partner-with-us') ); ?>" class="flex items-center gap-3.5 py-1 group">
                    <div class="w-7 h-7 flex items-center justify-center text-[#00A256] shrink-0">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <span class="font-montserrat font-bold text-[16px] text-black group-hover:text-[#00A256] transition-colors">Partner with Us</span>
                </a>
            </div>

            <!-- Item 4: Research Lab -->
            <div class="py-3.5">
                <a href="<?php echo esc_url( site_url('/research-lab') ); ?>" class="flex items-center gap-3.5 py-1 group">
                    <div class="w-7 h-7 flex items-center justify-center text-[#00A256] shrink-0">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="16" rx="2"/>
                            <path d="M7 8h10"/>
                            <path d="M7 12h10"/>
                            <path d="M7 16h6"/>
                        </svg>
                    </div>
                    <span class="font-montserrat font-bold text-[16px] text-black group-hover:text-[#00A256] transition-colors">Research Lab</span>
                </a>
            </div>

            <!-- Item 5: Insights -->
            <div class="py-3.5">
                <a href="<?php echo esc_url( site_url('/insights') ); ?>" class="flex items-center gap-3.5 py-1 group">
                    <div class="w-7 h-7 flex items-center justify-center text-[#00A256] shrink-0">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-1 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1.3.5 2.5 1.5 3.5.8.8 1.3 1.5 1.5 2.5"/>
                            <path d="M9 18h6"/>
                            <path d="M10 22h4"/>
                        </svg>
                    </div>
                    <span class="font-montserrat font-bold text-[16px] text-black group-hover:text-[#00A256] transition-colors">Insights</span>
                </a>
            </div>

        </div>

    </div>
  </div>

  <script>
  document.addEventListener('DOMContentLoaded', () => {
      const menuBtn = document.getElementById('mobile-menu-btn');
      const closeBtn = document.getElementById('mobile-sidebar-close');
      const backdrop = document.getElementById('mobile-sidebar-backdrop');
      const panel = document.getElementById('mobile-sidebar-panel');
      const accordionToggle = document.getElementById('mobile-accordion-toggle');
      const accordionMenu = document.getElementById('mobile-accordion-menu');
      const accordionArrow = document.getElementById('mobile-accordion-arrow');

      function openSidebar() {
          if (backdrop && panel) {
              backdrop.classList.remove('opacity-0', 'pointer-events-none');
              backdrop.classList.add('opacity-100', 'pointer-events-auto');
              panel.classList.remove('-translate-x-full');
              panel.classList.add('translate-x-0');
          }
      }

      function closeSidebar() {
          if (backdrop && panel) {
              backdrop.classList.remove('opacity-100', 'pointer-events-auto');
              backdrop.classList.add('opacity-0', 'pointer-events-none');
              panel.classList.remove('translate-x-0');
              panel.classList.add('-translate-x-full');
          }
      }

      if (menuBtn) menuBtn.addEventListener('click', openSidebar);
      if (closeBtn) closeBtn.addEventListener('click', closeSidebar);
      if (backdrop) backdrop.addEventListener('click', closeSidebar);

      if (accordionToggle && accordionMenu && accordionArrow) {
          accordionToggle.addEventListener('click', () => {
              const isHidden = accordionMenu.classList.contains('hidden');
              if (isHidden) {
                  accordionMenu.classList.remove('hidden');
                  accordionArrow.classList.add('rotate-180');
              } else {
                  accordionMenu.classList.add('hidden');
                  accordionArrow.classList.remove('rotate-180');
              }
          });
      }
  });
  </script>
