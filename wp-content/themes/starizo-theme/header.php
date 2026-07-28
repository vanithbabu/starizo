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

            <button id="mobile-menu-btn" aria-label="Toggle Navigation Menu" class="w-9 h-9 flex flex-col items-center justify-center gap-1 focus:outline-none cursor-pointer">
                <span class="w-6 h-0.5 bg-black rounded-full transition-transform duration-300"></span>
                <span class="w-6 h-0.5 bg-black rounded-full transition-opacity duration-300"></span>
                <span class="w-6 h-0.5 bg-black rounded-full transition-transform duration-300"></span>
            </button>
        </div>
    </header>

    <!-- Mobile Slide-Down Menu Drawer -->
    <div id="mobile-menu-drawer" class="hidden absolute top-[70px] left-0 w-full bg-white shadow-xl border-b border-gray-100 p-6 flex-col gap-4 z-20 transition-all duration-300">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="font-montserrat font-bold text-[16px] text-black hover:text-[#FF8D00] py-2 border-b border-gray-100">Home</a>
        <a href="<?php echo esc_url( site_url('/food-beverage') ); ?>" class="font-montserrat font-semibold text-[15px] text-black/80 hover:text-[#FF8D00] py-2 border-b border-gray-100">Food & Beverage</a>
        <a href="<?php echo esc_url( site_url('/cosmetics-personal-care') ); ?>" class="font-montserrat font-semibold text-[15px] text-black/80 hover:text-[#FF8D00] py-2 border-b border-gray-100">Cosmetics & Personal Care</a>
        <a href="<?php echo esc_url( site_url('/about') ); ?>" class="font-montserrat font-semibold text-[15px] text-black/80 hover:text-[#FF8D00] py-2 border-b border-gray-100">About</a>
        <a href="<?php echo esc_url( site_url('/partner-with-us') ); ?>" class="font-montserrat font-semibold text-[15px] text-black/80 hover:text-[#FF8D00] py-2 border-b border-gray-100">Partner with Us</a>
        <a href="<?php echo esc_url( site_url('/careers') ); ?>" class="font-montserrat font-semibold text-[15px] text-black/80 hover:text-[#FF8D00] py-2 border-b border-gray-100">Careers</a>
        <a href="<?php echo esc_url( site_url('/contact') ); ?>" class="font-montserrat font-semibold text-[15px] text-[#FF8D00] py-2">Contact Us</a>
    </div>
  </div>

  <script>
  document.addEventListener('DOMContentLoaded', () => {
      const menuBtn = document.getElementById('mobile-menu-btn');
      const menuDrawer = document.getElementById('mobile-menu-drawer');
      if (menuBtn && menuDrawer) {
          menuBtn.addEventListener('click', () => {
              menuDrawer.classList.toggle('hidden');
              menuDrawer.classList.toggle('flex');
          });
      }
  });
  </script>
