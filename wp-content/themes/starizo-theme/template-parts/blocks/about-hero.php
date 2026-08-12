<?php
/**
 * About Hero Block Template
 */

$heading       = get_sub_field( 'heading' ) ?: 'Transforming Rice Into Global Ingredient Innovation';
$description   = get_sub_field( 'description' ) ?: 'Built on decades of rice processing expertise, STARIZO develops clean-label, rice-derived ingredients designed for modern industries and global manufacturing.';
$button_1_text = get_sub_field( 'button_1_text' ) ?: 'Explore Products';
$button_1_link = get_sub_field( 'button_1_link' ) ?: '#products';
$button_2_text = get_sub_field( 'button_2_text' ) ?: 'Contact Us';
$button_2_link = get_sub_field( 'button_2_link' ) ?: '/contact';

$image = get_sub_field( 'image' );
$image_url = $image ? esc_url( $image['url'] ) : get_template_directory_uri() . '/public/assets/hero-farmer-leaf-photo.png';
?>

<!-- ==================== DESKTOP LAYOUT VIEW (xl: 1280px+ screens) ==================== -->
<div class="hidden xl:block w-full">
    <!-- ==================== HERO SECTION (FIGMA SPEC 1:1) ==================== -->
  <main class="w-full pt-0 pb-0">
    <div class="w-full min-h-[840px] lg:min-h-[880px] bg-[#00A256] overflow-hidden relative shadow-2xl px-6 sm:px-10 md:px-14 lg:px-16 pt-4 sm:pt-6 md:pt-8 pb-16 text-white flex flex-col justify-end">

      <!-- Layer 1: Green Rice Field Background Texture -->
      <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/hero-rice-field-bg.png'); ?>" alt=""
        class="absolute inset-0 w-full h-full object-cover opacity-35 pointer-events-none select-none z-0 mix-blend-overlay">

      <!-- Layer 1B: Solid Green Free Space Band at Top of Rice Crop -->
      <div class="absolute top-0 inset-x-0 h-[180px] sm:h-[220px] bg-gradient-to-b from-[#00A256] via-[#00A256]/90 to-transparent z-2 pointer-events-none"></div>

      <!-- Layer 2: Golden Looper Wave Graphic (Left-aligned) -->
      <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/Looper-1.png'); ?>" alt=""
        class="absolute top-0 left-0 w-[60%] h-full object-cover object-left opacity-30 pointer-events-none select-none z-1">

      <!-- Hero Content Grid -->
      <div class="relative z-10 w-full max-w-[1280px] mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center py-6 sm:py-10 mt-[100px]">

        <div class="lg:col-span-7 flex flex-col items-start text-left">
          <!-- Badge Header without Orange Accent Bar -->
          <div class="flex items-center mb-4">
            <span class="font-montserrat uppercase" style="font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 14px; line-height: 22px; letter-spacing: 0.11em; text-transform: uppercase; color: #FBEAC4;">
              ABOUT US
            </span>
          </div>

          <!-- Main Heading -->
          <h1 class="font-montserrat font-black text-white mb-6 max-w-xl" style="font-family: 'Montserrat', sans-serif; font-weight: 900; font-size: 42px; line-height: 54px; letter-spacing: 0; color: #FFFFFF;">
            <?php echo wp_kses_post( $heading ); ?>
          </h1>

          <!-- Subtitle Paragraph -->
          <p class="font-montserrat font-medium text-white/95 mb-8 max-w-lg" style="font-family: 'Montserrat', sans-serif; font-weight: 500; font-size: 18px; line-height: 30px; letter-spacing: 0;">
            <?php echo wp_kses_post( $description ); ?>
          </p>

          <!-- Action Buttons Group -->
          <div class="flex flex-row items-center gap-4">

            <!-- Explore Products -->
            <a href="<?php echo esc_url( $button_1_link ); ?>" class="group border-2 border-white text-white hover:bg-white hover:text-[#00A256] font-montserrat font-semibold text-[15px] px-7 h-[46px] rounded-full flex items-center justify-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none shadow-md backdrop-blur-sm">
              <?php echo esc_html( $button_1_text ); ?>
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5] shrink-0 transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>

            <!-- Contact Us -->
            <a href="<?php echo esc_url( $button_2_link ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-montserrat font-semibold text-[15px] px-7 h-[46px] rounded-full flex items-center justify-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none shadow-md hover:shadow-xl">
              <?php echo esc_html( $button_2_text ); ?>
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5] shrink-0 transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>

          </div>
        </div>

        <div class="lg:col-span-5 flex justify-center lg:justify-end items-center overflow-visible">
          <div class="relative w-full max-w-[420px] lg:max-w-[480px] aspect-[4/3] sm:aspect-[1.15] overflow-visible">
            <!-- Leaf Photo Frame -->
            <div class="w-full h-full overflow-hidden relative z-10" style="border-top-left-radius: 240px; border-bottom-right-radius: 240px; border-top-right-radius: 30px; border-bottom-left-radius: 30px;">
              <img src="<?php echo esc_url( $image_url ); ?>" alt="Starizo Hero" class="w-full h-full object-cover">
            </div>

            <!-- about-leaf.png -->
            <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/about-leaf.png'); ?>" alt=""
              class="absolute -bottom-6 -left-12 w-[130px] sm:w-[150px] h-auto pointer-events-none select-none z-20 opacity-70"
              style="filter: brightness(0) invert(1); -webkit-filter: brightness(0) invert(1);">
          </div>
        </div>

      </div>

    </div>
  </main>
</div>

<!-- ==================== MOBILE LAYOUT VIEW (below 1280px) ==================== -->
<div class="xl:hidden w-full">
    <!-- Similar logic for mobile can be copied from HTML and PHP-ified -->
    <!-- For simplicity, applying same markup with mobile specific border radius -->
    <main class="w-full pt-0 pb-0">
        <div class="w-full min-h-[640px] bg-[#00A256] overflow-hidden relative shadow-2xl px-6 pt-20 pb-16 text-white flex flex-col">

            <!-- Backgrounds -->
            <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/hero-rice-field-bg.png'); ?>" alt="" class="absolute inset-0 w-full h-full object-cover opacity-35 pointer-events-none z-0 mix-blend-overlay">
            <div class="absolute top-0 inset-x-0 h-[120px] bg-gradient-to-b from-[#00A256] to-transparent z-2 pointer-events-none"></div>

            <div class="relative z-10 w-full flex flex-col items-center text-center mt-[70px]">
                <div class="flex items-center mb-4">
                    <span class="font-montserrat uppercase text-[12px] tracking-[0.11em] text-[#FBEAC4] font-bold">ABOUT US</span>
                </div>

                <h1 class="font-montserrat font-black text-white text-[28px] leading-[36px] mb-4">
                    <?php echo wp_kses_post( $heading ); ?>
                </h1>

                <p class="font-montserrat font-medium text-white/95 text-[15px] leading-[24px] mb-8">
                    <?php echo wp_kses_post( $description ); ?>
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-col gap-3 w-full max-w-[280px] mb-10">
                    <a href="<?php echo esc_url( $button_1_link ); ?>" class="group w-full h-[46px] border-2 border-white hover:bg-white hover:text-[#00A256] rounded-full flex items-center justify-center text-white font-semibold gap-2 backdrop-blur-sm hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none shadow-md">
                        <?php echo esc_html( $button_1_text ); ?>
                        <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                    <a href="<?php echo esc_url( $button_2_link ); ?>" class="group w-full h-[46px] bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] rounded-full flex items-center justify-center text-white font-semibold gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none shadow-md hover:shadow-xl">
                        <?php echo esc_html( $button_2_text ); ?>
                        <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                </div>

                <!-- Image -->
                <div class="relative w-full max-w-[320px] aspect-[4/3] mx-auto mt-4">
                    <div class="w-full h-full overflow-hidden relative z-10" style="border-top-left-radius: 120px; border-bottom-right-radius: 120px; border-top-right-radius: 16px; border-bottom-left-radius: 16px;">
                        <img src="<?php echo esc_url( $image_url ); ?>" alt="Starizo Hero" class="w-full h-full object-cover">
                    </div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/about-leaf.png'); ?>" alt="" class="absolute -bottom-4 -left-6 w-[80px] h-auto z-20 opacity-70" style="filter: brightness(0) invert(1);">
                </div>
            </div>

        </div>
    </main>
</div>
