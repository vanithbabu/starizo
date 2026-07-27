<?php
/**
 * Partner Hero Block Template
 */

$heading     = get_sub_field( 'heading' ) ?: 'Better Ingredients.<br>Stronger Together.';
$description = get_sub_field( 'description' ) ?: 'At STARIZO, partnerships begin long before production and continue far beyond delivery. We combine rice-derived ingredient expertise, application understanding, and manufacturing excellence to support businesses creating the next generation of food, nutrition, and industrial products.';
$button_text = get_sub_field( 'button_text' ) ?: 'Become a Partner';
$button_link = get_sub_field( 'button_link' ) ?: '/contact';

$image = get_sub_field('image');
$image_url = $image ? esc_url($image['url']) : get_template_directory_uri() . '/public/assets/ partner-with-us-hero.png';

$highlights = get_sub_field('highlights');
if ( empty( $highlights ) ) {
    $highlights = array(
        array('label' => 'Clean Ingredients'),
        array('label' => 'Reliabe Supply'),
        array('label' => 'Global Partnership'),
        array('label' => 'Built on Trust'),
    );
}
?>

<!-- ==================== DESKTOP LAYOUT VIEW (xl: 1280px+ screens) ==================== -->
<div class="hidden xl:block w-full">
  <!-- HERO SECTION -->
  <main class="w-full bg-[#FDFBF3] relative overflow-hidden pt-0 pb-16">

    <!-- Background Radiating Rays Texture -->
    <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/Looper-1.png'); ?>" alt="" class="absolute top-0 left-1 w-[55%] h-full object-cover object-left opacity-100 pointer-events-none select-none z-0">

    <!-- Main Hero Content Container -->
    <div class="relative z-10 w-full max-w-[1280px] mx-auto px-6 sm:px-10 md:px-14 lg:px-16 pt-32">

      <!-- Hero Content Grid -->
      <div class="grid grid-cols-12 gap-8 lg:gap-12 items-center min-h-[480px]">

        <!-- Left Text Column -->
        <div class="col-span-7 flex flex-col items-start text-left gap-8" style="max-width: 560px;">
          
          <div class="flex flex-col items-start w-full gap-4">
            <!-- Category Badge -->
            <span class="font-montserrat font-bold text-black uppercase whitespace-nowrap inline-block shrink-0" style="font-size: 14px; line-height: 22px; letter-spacing: 0.11em; text-transform: uppercase; height: 22px;">
              PARTNER WITH US
            </span>

            <!-- Main Title -->
            <h1 class="font-montserrat font-black text-[#00A256]" style="font-weight: 900; font-size: 42px; line-height: 52px; color: #00A256;">
              <?php echo wp_kses_post( $heading ); ?>
            </h1>

            <!-- Subtitle Description -->
            <p class="font-montserrat font-medium text-black/80" style="font-weight: 500; font-size: 17px; line-height: 28px;">
              <?php echo wp_kses_post( $description ); ?>
            </p>
          </div>

          <!-- Single Button -->
          <div class="flex flex-row items-center justify-start shrink-0">
            <a href="<?php echo esc_url( $button_link ); ?>" class="flex flex-row items-center justify-center shrink-0 whitespace-nowrap shadow-md hover:opacity-90 transition select-none group" style="height: 48px; border-radius: 24px; padding: 12px 28px; background-color: #FF8D00; gap: 10px;">
              <span class="font-montserrat font-semibold text-white whitespace-nowrap" style="font-weight: 600; font-size: 18px; line-height: 21px;">
                <?php echo esc_html( $button_text ); ?>
              </span>
              <svg class="w-4 h-4 fill-white transform group-hover:translate-x-0.5 transition-transform duration-200 shrink-0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.931 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="#FFFFFF" />
              </svg>
            </a>
          </div>

        </div>

        <!-- Right Column: Leaf Curved Partner Hero Image -->
        <div class="col-span-5 relative flex items-center justify-center min-h-[480px]">
          <div class="relative z-10 overflow-hidden shadow-2xl transform hover:scale-[1.01] transition-transform duration-300" style="border-bottom-left-radius: 52px; border-bottom-right-radius: 52px;">
            <img src="<?php echo esc_url( $image_url ); ?>" alt="Partner With Us — Starizo" class="w-full max-w-[480px] h-[480px] object-cover block mx-auto">
          </div>
        </div>

      </div>

      <!-- Bottom Highlights Bar (4 Badges) -->
      <div class="flex flex-row items-center justify-start shrink-0 mt-8 gap-6 flex-wrap">
        <?php foreach ( $highlights as $highlight ) : ?>
        <div class="flex flex-row items-center shrink-0" style="gap: 12px; height: 33px;">
          <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm" style="width: 32.76px; height: 32.76px;">
            <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <span class="font-montserrat font-normal text-black" style="font-weight: 400; font-size: 13px;">
            <?php echo esc_html( $highlight['label'] ); ?>
          </span>
        </div>
        <?php endforeach; ?>
      </div>

    </div>

  </main>
</div>

<!-- ==================== MOBILE LAYOUT VIEW (below 1280px) ==================== -->
<div class="xl:hidden w-full">
  <main class="w-full bg-[#FDFBF3] relative overflow-hidden pt-20 pb-16">
    <div class="relative z-10 w-full px-6 flex flex-col gap-10">
      
      <!-- Text -->
      <div class="flex flex-col gap-4">
        <span class="font-montserrat font-bold text-black uppercase text-[12px] tracking-[0.11em]">PARTNER WITH US</span>
        <h1 class="font-montserrat font-black text-[#00A256] text-[28px] leading-[36px]">
          <?php echo wp_kses_post( $heading ); ?>
        </h1>
        <p class="font-montserrat font-medium text-black/80 text-[15px] leading-[24px]">
          <?php echo wp_kses_post( $description ); ?>
        </p>
        <a href="<?php echo esc_url( $button_link ); ?>" class="mt-4 flex flex-row items-center justify-center shadow-md bg-[#FF8D00] text-white rounded-full py-3 px-6 font-semibold gap-2 self-start">
          <?php echo esc_html( $button_text ); ?>
          <svg class="w-4 h-4 fill-white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.931 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="#FFFFFF"/></svg>
        </a>
      </div>

      <!-- Image -->
      <div class="relative overflow-hidden shadow-xl" style="border-bottom-left-radius: 40px; border-bottom-right-radius: 40px;">
        <img src="<?php echo esc_url( $image_url ); ?>" alt="Partner With Us" class="w-full h-auto object-cover">
      </div>

      <!-- Highlights -->
      <div class="flex flex-col gap-3 w-full">
        <?php foreach ( $highlights as $highlight ) : ?>
        <div class="flex flex-row items-center shrink-0 gap-3">
          <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm w-7 h-7">
            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <span class="font-montserrat font-medium text-black text-[14px]">
            <?php echo esc_html( $highlight['label'] ); ?>
          </span>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </main>
</div>
