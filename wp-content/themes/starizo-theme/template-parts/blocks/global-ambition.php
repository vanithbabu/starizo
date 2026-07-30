<?php
/**
 * Global Ambition Block Template.
 *
 * @param   array $block The block settings and attributes.
 */

$heading            = get_sub_field( 'heading' ) ?: 'Built In India. Designed For Global Manufacturing.';
$subheading         = get_sub_field( 'subheading' ) ?: 'GLOBAL AMBITION';
$description_1      = get_sub_field( 'description_1' ) ?: 'Industries now demand cleaner labels, traceability, and real ingredients. STARIZO is building systems to help partners deliver this, with confidence and clarity.';
$description_2      = get_sub_field( 'description_2' ) ?: 'We source raw materials locally in India, using processes engineered to meet international safety and environmental benchmarks.';
$banner_heading     = get_sub_field( 'banner_heading' ) ?: 'Looking for an Efficient Rice Manufacturing Partner?';
$banner_description = get_sub_field( 'banner_description' ) ?: 'Whether you\'re crafting new formulations or scaling rice-based ingredient production, our team is ready to help you advance with confidence.';
$banner_button_text = get_sub_field( 'banner_button_text' ) ?: 'Contact Us';
$banner_button_link_raw = get_sub_field( 'banner_button_link' );
$banner_button_link = ( $banner_button_link_raw && '#' !== $banner_button_link_raw ) ? $banner_button_link_raw : site_url( '/contact' );
?>

<!-- Desktop Layout View -->
<div class="hidden xl:block w-full">
    <section class="w-full bg-[#FDFBF3] py-24 border-b border-gray-100">
      <div class="max-w-[1280px] mx-auto px-10 flex flex-col gap-20">

        <div class="grid grid-cols-12 gap-16 items-center">
          <!-- Left Content -->
          <div class="col-span-6 flex flex-col items-start">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-[6px] h-[33px] bg-[#FF8D00] rounded-full"></div>
              <span class="font-montserrat font-normal text-[16px] lg:text-[22px] leading-[30px] lg:leading-[54px] tracking-[0.11em] text-[#5D3700] uppercase">
                <?php echo esc_html( $subheading ); ?>
              </span>
            </div>
            <h3 class="text-[36px] font-black text-black leading-[46px] tracking-tight mb-6">
              <?php echo wp_kses_post( $heading ); ?>
            </h3>
            <p class="text-[16px] font-medium text-black/70 leading-[30px] mb-4">
              <?php echo wp_kses_post( $description_1 ); ?>
            </p>
            <p class="text-[16px] font-medium text-black/70 leading-[30px]">
              <?php echo wp_kses_post( $description_2 ); ?>
            </p>
          </div>

          <!-- Right overlapping cards collage with dynamic deck fan-out hover animations -->
          <div class="col-span-6 relative w-full group/collage cursor-pointer" style="aspect-ratio: 1050 / 680;">
            <!-- Image 1 (Worker - Top Layer) -->
            <div class="absolute z-30 overflow-hidden bg-white shadow-xl border-[2.5px] border-[#00A256] rounded-tl-[40px] rounded-br-[40px] rounded-tr-[10px] rounded-bl-[10px] transition-all duration-700 ease-out group-hover/collage:-translate-y-6 group-hover/collage:-rotate-2 group-hover/collage:shadow-2xl hover:!z-50 hover:!scale-[1.05]" style="left: 0%; top: 0%; width: 80%; height: 52%;">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/ambition-worker.png' ); ?>" alt="Starizo worker" class="w-full h-full object-cover rounded-tl-[34px] rounded-br-[34px] rounded-tr-[6px] rounded-bl-[6px] transition-transform duration-700 group-hover/collage:scale-105 hover:!scale-110" loading="lazy">
            </div>

            <!-- Image 2 (Table - Middle Layer) -->
            <div class="absolute z-20 overflow-hidden bg-white shadow-lg border-[2.5px] border-[#00A256]/70 rounded-tl-[40px] rounded-br-[40px] rounded-tr-[10px] rounded-bl-[10px] transition-all duration-700 ease-out group-hover/collage:translate-x-6 group-hover/collage:-translate-y-1 group-hover/collage:rotate-1 group-hover/collage:shadow-2xl hover:!z-50 hover:!scale-[1.05]" style="left: 5%; top: 18%; width: 80%; height: 50%;">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/ambition-table.png' ); ?>" alt="Breakfast table" class="w-full h-full object-cover rounded-tl-[34px] rounded-br-[34px] rounded-tr-[6px] rounded-bl-[6px] transition-transform duration-700 group-hover/collage:scale-105 hover:!scale-110" loading="lazy">
            </div>

            <!-- Image 3 (Rice Crop - Bottom Layer) -->
            <div class="absolute z-10 overflow-hidden bg-white shadow-md border-[2.5px] border-[#00A256]/40 rounded-tl-[40px] rounded-br-[40px] rounded-tr-[10px] rounded-bl-[10px] transition-all duration-700 ease-out group-hover/collage:translate-x-12 group-hover/collage:translate-y-5 group-hover/collage:rotate-3 group-hover/collage:shadow-2xl hover:!z-50 hover:!scale-[1.05]" style="left: 10%; top: 36%; width: 80%; height: 50%;">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/ambition-crop.png' ); ?>" alt="Rice plant" class="w-full h-full object-cover rounded-tl-[34px] rounded-br-[34px] rounded-tr-[6px] rounded-bl-[6px] transition-transform duration-700 group-hover/collage:scale-105 hover:!scale-110" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Banner Card with interactive group hover -->
        <div class="w-full bg-[#00A256] rounded-[34px] overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-300 p-8 md:p-10 grid grid-cols-12 items-center relative group/banner">
          <!-- Looper-1 background image overlay (Displaying top portion aligned at top edge of container) -->
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="absolute inset-0 w-full h-full object-cover object-left-top opacity-100 pointer-events-none select-none z-0">

          <!-- Text content -->
          <div class="col-span-7 text-white z-10 flex flex-col items-start pr-4">
            <h4 class="font-montserrat font-bold text-[28px] md:text-[32px] tracking-tight leading-[38px] mb-4">
              <?php echo wp_kses_post( $banner_heading ); ?>
            </h4>
            <p class="font-montserrat font-medium text-[15px] text-white/90 leading-[24px] mb-8 max-w-xl">
              <?php echo wp_kses_post( $banner_description ); ?>
            </p>
            <?php if ( $banner_button_link && $banner_button_text ) : ?>
            <a href="<?php echo esc_url( $banner_button_link ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-montserrat font-bold text-[15px] px-8 h-[46px] rounded-full flex items-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none shadow-md hover:shadow-xl">
              <span><?php echo esc_html( $banner_button_text ); ?></span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
            <?php endif; ?>
          </div>

          <!-- Banner Image Container -->
          <div class="col-span-5 relative z-10 flex items-center justify-end">
            <!-- Leaf Framed Photo Box -->
            <div class="relative w-full h-[240px] rounded-tl-[44px] rounded-br-[44px] rounded-tr-[10px] rounded-bl-[10px] overflow-hidden shadow-lg">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/partner-plant.png' ); ?>" alt="Starizo plant facility" class="w-full h-full object-cover group-hover/banner:scale-105 transition-transform duration-500" loading="lazy">
            </div>

            <!-- Golden Rice Stalk -->
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rice-g.png' ); ?>" alt="Rice grain" class="absolute -right-2 -bottom-6 h-[135px] w-auto z-30 pointer-events-none select-none object-contain drop-shadow-xl" loading="lazy">
          </div>
        </div>

      </div>
    </section>
</div>

<!-- Mobile Layout View -->
<div class="xl:hidden w-full overflow-x-hidden">
    <section class="w-full bg-[#FDFBF3] py-12 px-6 flex flex-col items-center border-b border-gray-100">
      
      <!-- Block 1: Header, Main Title & Paragraph -->
      <div class="w-full max-w-[340px] flex flex-col items-start mb-6">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-[5px] h-[28px] bg-[#FF8D00] rounded-full"></div>
          <span class="font-montserrat font-bold text-[14px] text-starizo-brown uppercase tracking-wider">
            <?php echo esc_html( $subheading ); ?>
          </span>
        </div>

        <h3 class="text-[22px] font-bold text-left text-black leading-[30px] mb-4">
          <?php echo wp_kses_post( $heading ); ?>
        </h3>

        <p class="text-[14px] font-medium text-black/80 leading-[24px] text-left">
          <?php echo wp_kses_post( $description_1 . ' ' . $description_2 ); ?>
        </p>
      </div>

      <!-- Block 2: 3-Card Stepped Stack with dynamic deck fan-out hover & touch animations -->
      <div class="w-full max-w-[340px] flex justify-center mb-10">
        <div class="relative w-full h-[260px] max-w-[320px] group/collage cursor-pointer">
          <!-- Card 1 (Worker - Top Layer) -->
          <div class="absolute z-30 overflow-hidden bg-white shadow-xl border-[2.5px] border-[#00A256] rounded-tl-[32px] rounded-br-[32px] rounded-tr-[6px] rounded-bl-[6px] transition-all duration-700 ease-out group-hover/collage:-translate-y-5 group-hover/collage:-rotate-2 group-hover/collage:shadow-2xl active:-translate-y-5 active:-rotate-2 active:shadow-2xl hover:!z-50 hover:!scale-[1.05] active:!z-50 active:!scale-[1.05]" style="left: 0%; top: 0%; width: 82%; height: 56%;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/ambition-worker.png' ); ?>" alt="Starizo worker" class="w-full h-full object-cover rounded-tl-[26px] rounded-br-[26px] rounded-tr-[4px] rounded-bl-[4px] transition-transform duration-700 group-hover/collage:scale-105 hover:!scale-110 active:scale-105" loading="lazy">
          </div>

          <!-- Card 2 (Table - Middle Layer) -->
          <div class="absolute z-20 overflow-hidden bg-white shadow-md border-[2.5px] border-[#00A256]/70 rounded-tl-[32px] rounded-br-[32px] rounded-tr-[6px] rounded-bl-[6px] transition-all duration-700 ease-out group-hover/collage:translate-x-4 group-hover/collage:-translate-y-1 group-hover/collage:rotate-1 group-hover/collage:shadow-2xl active:translate-x-4 active:-translate-y-1 active:rotate-1 active:shadow-2xl hover:!z-50 hover:!scale-[1.05] active:!z-50 active:!scale-[1.05]" style="left: 9%; top: 22%; width: 82%; height: 56%;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/ambition-table.png' ); ?>" alt="Breakfast table" class="w-full h-full object-cover rounded-tl-[26px] rounded-br-[26px] rounded-tr-[4px] rounded-bl-[4px] transition-transform duration-700 group-hover/collage:scale-105 hover:!scale-110 active:scale-105" loading="lazy">
          </div>

          <!-- Card 3 (Crop - Bottom Layer) -->
          <div class="absolute z-10 overflow-hidden bg-white shadow border-[2.5px] border-[#00A256]/40 rounded-tl-[32px] rounded-br-[32px] rounded-tr-[6px] rounded-bl-[6px] transition-all duration-700 ease-out group-hover/collage:translate-x-8 group-hover/collage:translate-y-4 group-hover/collage:rotate-3 group-hover/collage:shadow-2xl active:translate-x-8 active:translate-y-4 active:rotate-3 active:shadow-2xl hover:!z-50 hover:!scale-[1.05] active:!z-50 active:!scale-[1.05]" style="left: 18%; top: 44%; width: 82%; height: 56%;">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/ambition-crop.png' ); ?>" alt="Rice plant" class="w-full h-full object-cover rounded-tl-[26px] rounded-br-[26px] rounded-tr-[4px] rounded-bl-[4px] transition-transform duration-700 group-hover/collage:scale-105 hover:!scale-110 active:scale-105" loading="lazy">
          </div>
        </div>
      </div>

      <!-- Block 3: Manufacturing Partner Banner Card -->
      <div class="w-full max-w-[340px] mt-2">
        <div class="w-full bg-[#00A256] rounded-[28px] overflow-hidden shadow-xl hover:shadow-2xl transition-shadow duration-300 p-6 text-white flex flex-col items-start text-left relative group/banner">
          
          <!-- Looper-1 background overlay -->
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="absolute inset-0 w-full h-full object-cover opacity-20 pointer-events-none select-none z-0">

          <div class="relative z-10 w-full flex flex-col items-start">
            <h4 class="text-[20px] font-bold mb-3 leading-[28px] text-white">
              <?php echo wp_kses_post( $banner_heading ); ?>
            </h4>
            <p class="text-[13px] font-medium text-white/90 leading-[20px] mb-6 pr-2">
              <?php echo wp_kses_post( $banner_description ); ?>
            </p>

            <?php if ( $banner_button_link && $banner_button_text ) : ?>
            <a href="<?php echo esc_url( $banner_button_link ); ?>" class="group h-[44px] bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-montserrat font-bold text-[14px] px-6 rounded-full flex items-center justify-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none shadow-md hover:shadow-xl mb-8">
              <span><?php echo esc_html( $banner_button_text ); ?></span>
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
            <?php endif; ?>

            <!-- Banner Image Frame -->
            <div class="relative w-full h-[175px]">
              <div class="w-full h-full rounded-tl-[32px] rounded-br-[32px] rounded-tr-[6px] rounded-bl-[6px] overflow-hidden shadow-md bg-white">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/partner-plant.png' ); ?>" alt="Starizo facility" class="w-full h-full object-cover group-hover/banner:scale-105 transition-transform duration-500" loading="lazy">
              </div>
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rice-g.png' ); ?>" alt="" class="absolute right-0 -bottom-3 h-[85px] w-auto z-20 pointer-events-none select-none object-contain drop-shadow-md" loading="lazy">
            </div>
          </div>
        </div>
      </div>

    </section>
</div>
