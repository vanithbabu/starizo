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
  <header class="absolute top-[23px] left-[40px] right-[40px] z-[50]">
    <div class="h-[85px] bg-white rounded-[26px] shadow-[0_4px_44px_rgba(0,0,0,0.05)] border border-gray-100 px-10 flex items-center justify-between">
      
      <!-- Logo -->
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/public/assets/logo.svg" class="h-9" alt="<?php bloginfo( 'name' ); ?>">
      </a>

      <!-- Menu -->
      <nav class="flex items-center gap-10">
        <button class="flex items-center gap-1 text-[18px] font-medium text-starizo-brown">
          Products
          <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
            <path d="M7 10l5 5 5-5H7z" />
          </svg>
        </button>

        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'flex items-center gap-10',
            'fallback_cb'    => false,
            'items_wrap'     => '%3$s', // Need a custom walker to apply Tailwind classes to `a` tags later
        ) );
        ?>
        <!-- Fallback hardcoded links if menu isn't set -->
        <a href="<?php echo esc_url( site_url('/about') ); ?>" class="text-[18px] font-medium hover:text-starizo-orange transition">About</a>
        <a href="<?php echo esc_url( site_url('/partner-with-us') ); ?>" class="text-[18px] font-medium">Partner with Us</a>
        <a href="<?php echo esc_url( site_url('/research-lab') ); ?>" class="text-[18px] font-medium">Research Lab</a>
        <a href="<?php echo esc_url( site_url('/careers') ); ?>" class="text-[18px] font-medium">Careers</a>
        <a href="<?php echo esc_url( site_url('/insights') ); ?>" class="text-[18px] font-medium">Insights</a>
      </nav>

      <!-- Contact -->
      <a href="<?php echo esc_url( site_url('/contact') ); ?>" class="bg-[#FF9100] text-white px-7 h-[46px] rounded-full flex items-center gap-2 font-bold hover:bg-[#e68300] transition-colors">
        Contact Us
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2">
          <polyline points="9 18 15 12 9 6" />
        </svg>
      </a>

    </div>
  </header>
