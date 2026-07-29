<?php
$header_logo = get_field('header_logo', 'option') ?: get_template_directory_uri() . '/public/assets/logo.svg';
$cta_text   = get_field('header_cta_text', 'option') ?: 'Contact Us';
$cta_link   = get_field('header_cta_link', 'option') ?: site_url('/contact');

// Determine active page highlights
$is_products = is_page( array( 'food-beverage', 'cosmetics-personal-care' ) ) || is_tax( 'product_cat' ) || is_singular( 'product' );
$is_about    = is_page( 'about' );
$is_partner  = is_page( 'partner-with-us' );
$is_research = is_page( 'research-lab' );
$is_careers  = is_page( 'careers' );
$is_insights = is_page( 'insights' ) || is_home() || is_singular( 'post' ) || is_category();
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
    <header class="absolute top-[23px] left-0 right-0 z-30 px-5">
      <div id="navbar" class="w-full max-w-[1240px] mx-auto h-[85px] bg-white rounded-[26px] shadow-[0px_4px_44.6px_0px_rgba(0,0,0,0.05)] border border-gray-100 flex items-center justify-between px-6 md:px-10">
        
        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo esc_url( $header_logo ); ?>" class="h-9" alt="<?php bloginfo( 'name' ); ?>">
        </a>

        <!-- Menu Navigation (Exact 1:1 with index.html) -->
        <nav class="flex items-center gap-10 font-montserrat font-normal text-[18px] leading-[21px] tracking-normal text-[#5D3700]">
          
          <!-- Products Dropdown (Exact 1:1 with index.html) -->
          <div class="relative group py-2">
            <button type="button" class="flex items-center gap-1 font-montserrat font-normal text-[18px] leading-[21px] tracking-normal text-[#5D3700] group-hover:font-semibold group-hover:text-[#5D3700] transition duration-200 focus:outline-none">
              Products
              <svg class="w-4 h-4 fill-current text-[#FF8D00] transition-transform duration-200 group-hover:rotate-180" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>

            <!-- Mega Dropdown Container (Starts below bottom edge of header navbar) -->
            <div class="absolute top-[calc(100%+22px)] -left-[24px] w-[556px] h-[112px] bg-white rounded-br-[44px] rounded-bl-[44px] rounded-tr-none rounded-tl-none shadow-2xl border border-gray-100/90 px-9 flex items-center justify-center opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-1 group-hover:translate-y-0 z-50">
              
              <!-- Inner Items Container (483x39, Gap 27px) -->
              <div class="w-[483px] max-w-full h-[39px] flex items-center justify-between gap-[27px]">
                
                <!-- Food & Beverage Option -->
                <a href="<?php echo esc_url( site_url('/food-beverage') ); ?>" class="flex items-center gap-[12px] group/item text-[#5D3700] hover:text-[#FF8D00] transition-colors">
                  <div class="w-[39px] h-[39px] rounded-full border border-[#00A256] flex items-center justify-center shrink-0 bg-white group-hover/item:border-[#FF8D00] transition-colors">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/food-beverage-icon.svg' ); ?>" alt="Food &amp; Beverage" class="w-[24.64px] h-[25.16px] object-contain">
                  </div>
                  <span class="font-montserrat font-medium text-[16px] leading-[29px] tracking-normal text-[#5D3700] whitespace-nowrap">Food &amp; Beverage</span>
                </a>

                <!-- Cosmetics & Personal Care Option -->
                <a href="<?php echo esc_url( site_url('/cosmetics-personal-care') ); ?>" class="flex items-center gap-[12px] group/item text-[#5D3700] hover:text-[#FF8D00] transition-colors">
                  <div class="w-[39px] h-[39px] rounded-full border border-[#00A256] flex items-center justify-center shrink-0 bg-white group-hover/item:border-[#FF8D00] transition-colors">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/cosmitics-icon.svg' ); ?>" alt="Cosmetics &amp; Personal Care" class="w-[24.64px] h-[25.16px] object-contain">
                  </div>
                  <span class="font-montserrat font-medium text-[16px] leading-[29px] tracking-normal text-[#5D3700] whitespace-nowrap">Cosmetics &amp; Personal Care</span>
                </a>

              </div>

            </div>
          </div>

          <!-- About Dropdown (Exact 1:1 with index.html) -->
          <div class="relative group py-2">
            <a href="<?php echo esc_url( site_url('/about') ); ?>" class="flex items-center gap-1 font-montserrat font-normal text-[18px] leading-[21px] tracking-normal text-[#5D3700] group-hover:font-semibold group-hover:text-[#5D3700] transition duration-200 focus:outline-none">
              About
            </a>

            <!-- About Mega Dropdown Container (Starts below bottom edge of header navbar) -->
            <div class="absolute top-[calc(100%+22px)] -left-[24px] w-auto h-[112px] min-w-[530px] bg-white rounded-br-[44px] rounded-bl-[44px] rounded-tr-none rounded-tl-none shadow-2xl border border-gray-100/90 px-9 flex items-center justify-center opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform translate-y-1 group-hover:translate-y-0 z-50">
              
              <!-- Inner Items Container (Gap 32px) -->
              <div class="flex items-center justify-between gap-[32px] whitespace-nowrap">
                
                <!-- Our Story Option -->
                <a href="<?php echo esc_url( site_url('/about#story') ); ?>" class="flex items-center gap-[10px] group/item text-[#5D3700] hover:text-[#FF8D00] transition-colors">
                  <span class="w-[3px] h-[22px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
                  <span class="font-montserrat font-medium text-[16px] leading-[29px] tracking-normal text-[#5D3700] group-hover/item:text-[#FF8D00] transition-colors whitespace-nowrap">Our Story</span>
                </a>

                <!-- Application Option -->
                <a href="<?php echo esc_url( site_url('/about#application') ); ?>" class="flex items-center gap-[10px] group/item text-[#5D3700] hover:text-[#FF8D00] transition-colors">
                  <span class="w-[3px] h-[22px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
                  <span class="font-montserrat font-medium text-[16px] leading-[29px] tracking-normal text-[#5D3700] group-hover/item:text-[#FF8D00] transition-colors whitespace-nowrap">Application</span>
                </a>

                <!-- Technology & Quality Option -->
                <a href="<?php echo esc_url( site_url('/about#technology') ); ?>" class="flex items-center gap-[10px] group/item text-[#5D3700] hover:text-[#FF8D00] transition-colors">
                  <span class="w-[3px] h-[22px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
                  <span class="font-montserrat font-medium text-[16px] leading-[29px] tracking-normal text-[#5D3700] group-hover/item:text-[#FF8D00] transition-colors whitespace-nowrap">Technology &amp; Quality</span>
                </a>

              </div>

            </div>
          </div>

          <a href="<?php echo esc_url( site_url('/partner-with-us') ); ?>" class="font-montserrat font-normal text-[18px] leading-[21px] tracking-normal text-[#5D3700] hover:text-[#FF8D00] transition">
            Partner with Us
          </a>

          <a href="<?php echo esc_url( site_url('/research-lab') ); ?>" class="font-montserrat font-normal text-[18px] leading-[21px] tracking-normal text-[#5D3700] hover:text-[#FF8D00] transition">
            Research Lab
          </a>

          <a href="<?php echo esc_url( site_url('/careers') ); ?>" class="font-montserrat font-normal text-[18px] leading-[21px] tracking-normal text-[#5D3700] hover:text-[#FF8D00] transition">
            Careers
          </a>

          <a href="<?php echo esc_url( site_url('/insights') ); ?>" class="font-montserrat font-normal text-[18px] leading-[21px] tracking-normal text-[#5D3700] hover:text-[#FF8D00] transition">
            Insights
          </a>

        </nav>

        <!-- Contact CTA Button (Exact 1:1 with index.html) -->
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
  <div class="xl:hidden w-full relative z-[999]">
    <header class="w-full h-[72px] bg-white flex items-center px-4 sm:px-6 justify-between shadow-sm sticky top-0 z-[990]">
        <!-- Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="shrink-0">
            <img src="<?php echo esc_url( $header_logo ); ?>" class="h-8 w-auto" alt="<?php bloginfo( 'name' ); ?>">
        </a>
        
        <!-- Right Actions: Contact Us Button + Hamburger -->
        <div class="flex items-center gap-3">
            <a href="<?php echo esc_url( $cta_link ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white text-[13px] font-bold px-5 h-[44px] rounded-full flex items-center gap-1.5 shadow-md hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none justify-center">
              <?php echo esc_html( $cta_text ); ?>
              <svg class="w-3.5 h-3.5 stroke-current fill-none stroke-[2.5] transform group-hover:translate-x-0.5 transition-transform duration-300" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>

            <button id="mobile-menu-btn" aria-label="Open Mobile Sidebar" aria-expanded="false" aria-controls="mobile-sidebar-panel" class="w-11 h-11 min-w-[44px] min-h-[44px] flex flex-col items-center justify-center gap-1 focus:outline-none cursor-pointer rounded-lg hover:bg-gray-100/60">
                <span class="w-6 h-0.5 bg-black rounded-full transition-transform duration-300"></span>
                <span class="w-6 h-0.5 bg-black rounded-full transition-opacity duration-300"></span>
                <span class="w-6 h-0.5 bg-black rounded-full transition-transform duration-300"></span>
            </button>
        </div>
    </header>

    <!-- Mobile Sidebar Backdrop Overlay -->
    <div id="mobile-sidebar-backdrop" class="fixed inset-0 bg-black/40 z-[999] opacity-0 pointer-events-none transition-opacity duration-300"></div>

    <!-- Mobile Slide-In Sidebar Panel (1:1 Figma Component 23 Design) -->
    <div id="mobile-sidebar-panel" class="fixed top-0 left-0 w-[85vw] max-w-[360px] sm:w-[380px] h-full bg-white z-[1000] transform -translate-x-full transition-transform duration-300 ease-in-out shadow-2xl p-6 sm:p-8 pt-8 sm:pt-10 flex flex-col justify-start rounded-r-[24px] overflow-y-auto">
        
        <!-- Top Row: Close Button [X] (Pushed down with top padding & margin) -->
        <div class="w-full flex justify-end pt-3 mt-1 mb-6">
            <button id="mobile-sidebar-close" class="w-11 h-11 min-w-[44px] min-h-[44px] border-2 border-[#5DC671] text-[#FF8D00] hover:bg-[#5DC671]/10 rounded-[12px] flex items-center justify-center transition duration-200 cursor-pointer shadow-xs" aria-label="Close sidebar">
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
                <button id="mobile-accordion-toggle" class="w-full min-h-[44px] flex items-center justify-between py-2 text-left focus:outline-none cursor-pointer group">
                    <div class="flex items-center gap-3.5">
                        <div class="w-7 h-7 flex items-center justify-center shrink-0">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/dropdown-product.svg' ); ?>" alt="Products" class="w-6 h-6 object-contain">
                        </div>
                        <span class="font-montserrat font-medium text-[14px] leading-[20px] tracking-[-0.02em] <?php echo $is_products ? 'text-[#FF8D00]' : 'text-black group-hover:text-[#00A256]'; ?> transition-colors">Products</span>
                    </div>
                    <svg id="mobile-accordion-arrow" class="w-4 h-4 text-[#FF8D00] transform transition-transform duration-200" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </button>

                <!-- Submenu items -->
                <div id="mobile-accordion-menu" class="hidden flex flex-col gap-2 pt-3 pb-1 pl-2">
                    <a href="<?php echo esc_url( site_url('/food-beverage') ); ?>" class="flex items-center gap-3 min-h-[44px] py-2 <?php echo is_page('food-beverage') ? 'text-[#FF8D00]' : 'text-black hover:text-[#FF8D00]'; ?> font-montserrat font-medium text-[14px] leading-[20px] tracking-[-0.02em] transition-colors">
                        <div class="w-7 h-7 rounded-full border border-[#00A256] bg-white flex items-center justify-center shrink-0">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/food-beverage-icon.svg' ); ?>" alt="Food &amp; Beverage" class="w-4 h-4 object-contain">
                        </div>
                        Food & Beverage
                    </a>
                    <a href="<?php echo esc_url( site_url('/cosmetics-personal-care') ); ?>" class="flex items-center gap-3 min-h-[44px] py-2 <?php echo is_page('cosmetics-personal-care') ? 'text-[#FF8D00]' : 'text-black hover:text-[#FF8D00]'; ?> font-montserrat font-medium text-[14px] leading-[20px] tracking-[-0.02em] transition-colors">
                        <div class="w-7 h-7 rounded-full border border-[#00A256] bg-white flex items-center justify-center shrink-0">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/cosmitics-icon.svg' ); ?>" alt="Cosmetics &amp; Personal Care" class="w-4 h-4 object-contain">
                        </div>
                        Cosmetics & Personal Care
                    </a>
                </div>
            </div>

            <!-- Item 2: About (Direct Link, No Dropdown) -->
            <div class="py-3.5">
                <a href="<?php echo esc_url( site_url('/about') ); ?>" class="flex items-center gap-3.5 min-h-[44px] py-1 group">
                    <div class="w-7 h-7 flex items-center justify-center shrink-0">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/dropdown-about.svg' ); ?>" alt="About" class="w-6 h-6 object-contain">
                    </div>
                    <span class="font-montserrat font-medium text-[14px] leading-[20px] tracking-[-0.02em] <?php echo $is_about ? 'text-[#FF8D00]' : 'text-black group-hover:text-[#00A256]'; ?> transition-colors">About</span>
                </a>
            </div>

            <!-- Item 3: Partner with Us -->
            <div class="py-3.5">
                <a href="<?php echo esc_url( site_url('/partner-with-us') ); ?>" class="flex items-center gap-3.5 min-h-[44px] py-1 group">
                    <div class="w-7 h-7 flex items-center justify-center shrink-0">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/dropdown-partner.svg' ); ?>" alt="Partner with Us" class="w-6 h-6 object-contain">
                    </div>
                    <span class="font-montserrat font-medium text-[14px] leading-[20px] tracking-[-0.02em] <?php echo $is_partner ? 'text-[#FF8D00]' : 'text-black group-hover:text-[#00A256]'; ?> transition-colors">Partner with Us</span>
                </a>
            </div>

            <!-- Item 4: Research Lab -->
            <div class="py-3.5">
                <a href="<?php echo esc_url( site_url('/research-lab') ); ?>" class="flex items-center gap-3.5 min-h-[44px] py-1 group">
                    <div class="w-7 h-7 flex items-center justify-center shrink-0">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/dropdown-research.svg' ); ?>" alt="Research Lab" class="w-6 h-6 object-contain">
                    </div>
                    <span class="font-montserrat font-medium text-[14px] leading-[20px] tracking-[-0.02em] <?php echo $is_research ? 'text-[#FF8D00]' : 'text-black group-hover:text-[#00A256]'; ?> transition-colors">Research Lab</span>
                </a>
            </div>

            <!-- Item 5: Careers (Placed on top of Insights) -->
            <?php $is_careers = is_page('careers') || is_singular('career'); ?>
            <div class="py-3.5">
                <a href="<?php echo esc_url( site_url('/careers') ); ?>" class="flex items-center gap-3.5 min-h-[44px] py-1 group">
                    <div class="w-7 h-7 flex items-center justify-center shrink-0">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/dropdown-careers.svg' ); ?>" alt="Careers" class="w-6 h-6 object-contain">
                    </div>
                    <span class="font-montserrat font-medium text-[14px] leading-[20px] tracking-[-0.02em] <?php echo $is_careers ? 'text-[#FF8D00]' : 'text-black group-hover:text-[#00A256]'; ?> transition-colors">Careers</span>
                </a>
            </div>

            <!-- Item 6: Insights -->
            <div class="py-3.5">
                <a href="<?php echo esc_url( site_url('/insights') ); ?>" class="flex items-center gap-3.5 min-h-[44px] py-1 group">
                    <div class="w-7 h-7 flex items-center justify-center shrink-0">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/dropdown-insights.svg' ); ?>" alt="Insights" class="w-6 h-6 object-contain">
                    </div>
                    <span class="font-montserrat font-medium text-[14px] leading-[20px] tracking-[-0.02em] <?php echo $is_insights ? 'text-[#FF8D00]' : 'text-black group-hover:text-[#00A256]'; ?> transition-colors">Insights</span>
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

      const aboutToggle = document.getElementById('mobile-about-toggle');
      const aboutMenu = document.getElementById('mobile-about-menu');
      const aboutArrow = document.getElementById('mobile-about-arrow');

      function openSidebar() {
          if (backdrop && panel) {
              backdrop.classList.remove('opacity-0', 'pointer-events-none');
              backdrop.classList.add('opacity-100', 'pointer-events-auto');
              panel.classList.remove('-translate-x-full');
              panel.classList.add('translate-x-0');
              document.body.classList.add('overflow-hidden');
          }
      }

      function closeSidebar() {
          if (backdrop && panel) {
              backdrop.classList.remove('opacity-100', 'pointer-events-auto');
              backdrop.classList.add('opacity-0', 'pointer-events-none');
              panel.classList.remove('translate-x-0');
              panel.classList.add('-translate-x-full');
              document.body.classList.remove('overflow-hidden');
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
                  accordionArrow.classList.add('rotate-[#180deg]');
              } else {
                  accordionMenu.classList.add('hidden');
                  accordionArrow.classList.remove('rotate-[#180deg]');
              }
          });
      }

      if (aboutToggle && aboutMenu && aboutArrow) {
          aboutToggle.addEventListener('click', () => {
              const isHidden = aboutMenu.classList.contains('hidden');
              if (isHidden) {
                  aboutMenu.classList.remove('hidden');
                  aboutArrow.classList.add('rotate-180');
              } else {
                  aboutMenu.classList.add('hidden');
                  aboutArrow.classList.remove('rotate-180');
              }
          });
      }
  });
  </script>
