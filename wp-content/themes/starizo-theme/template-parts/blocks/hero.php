<?php
/**
 * Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Load values and assign defaults.
$heading       = get_sub_field( 'heading' ) ?: 'Rice-Derived.<br>Rigorously Tested.<br>Ready for Global Markets.';
$subheading    = get_sub_field( 'subheading' ) ?: 'MADE IN INDIA. TRUSTED WORLDWIDE';
$description   = get_sub_field( 'description' ) ?: 'GMO-free rice ingredients with transparent labeling, manufactured for quality, sustainability, and flexible usage across industries.';
$button_1_text = get_sub_field( 'button_1_text' ) ?: 'Explore Products';
$button_1_link_raw = get_sub_field( 'button_1_link' );
$button_1_link = ( $button_1_link_raw && '#' !== $button_1_link_raw ) ? $button_1_link_raw : site_url( '/product-category/food-beverage' );

$button_2_text = get_sub_field( 'button_2_text' ) ?: 'Contact Us';
$button_2_link_raw = get_sub_field( 'button_2_link' );
$button_2_link = ( $button_2_link_raw && '#' !== $button_2_link_raw ) ? $button_2_link_raw : site_url( '/contact' );
$image         = get_sub_field( 'image' ); // Can be an image ID or array. If we want default, we need logic.

$image_url = get_template_directory_uri() . '/public/assets/home-hero-rice.png';
if ( $image ) {
    if ( is_array( $image ) ) {
        $image_url = $image['url'];
    } elseif ( is_numeric( $image ) ) {
        $image_url = wp_get_attachment_image_url( $image, 'full' );
    }
}
?>

<!-- Desktop / Laptop Layout View (xl: 1280px+ screens) -->
<div class="hidden xl:block w-full">
    <section class="relative w-full h-[760px] bg-[#FBEAC4] overflow-hidden">
      <!-- Cream background -->
      <div class="absolute inset-0 bg-[#FBEAC4] z-0"></div>

      <!-- Green top area (540px with linear gradient) -->
      <div class="absolute top-0 left-0 w-full h-[540px] bg-gradient-to-br from-[#00A256] to-[#39C56C] z-[1]"></div>

      <!-- Left Golden Swirl Lines -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="absolute left-0 top-0 h-[540px] w-full object-cover object-left-top pointer-events-none z-[2]" />

      <!-- Right decorative leaf graphic background -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/group.png' ); ?>" alt="" class="absolute right-[30px] top-[105px] w-[310px] h-auto object-contain pointer-events-none z-[2]" />

      <!-- PRODUCT HERO IMAGE (Rice stalks, powder bowl & chemistry beakers - Expanded size matching Image 1) -->
      <div class="absolute bottom-[-20px] right-[-30px] w-[1180px] h-[740px] z-[15] pointer-events-none">
        <img src="<?php echo esc_url( $image_url ); ?>" class="w-full h-full object-contain object-bottom-right" loading="eager" fetchpriority="high" alt="Rice-Derived Ingredients">
      </div>

      <div class="relative z-[20] w-[1280px] h-full mx-auto px-10">
        <!-- ================= HERO CONTENT ================= -->
        <div class="absolute left-[80px] top-[135px] w-[740px] text-white z-20">
          <p class="uppercase tracking-[0.14em] text-[13.5px] font-extrabold mb-2.5 text-[#FBEAC4] font-montserrat">
            <?php echo esc_html( $subheading ); ?>
          </p>

          <h1 class="text-[48px] leading-[56px] font-black mb-3.5 tracking-tight font-montserrat text-white w-[740px]">
            <?php echo wp_kses_post( $heading ); ?>
          </h1>

          <p class="text-[16.5px] leading-[27px] text-white/90 mb-5.5 max-w-[580px] font-montserrat font-medium">
            <?php echo esc_html( $description ); ?>
          </p>

          <div class="flex items-center gap-[19px] mt-7">
            <?php if ( $button_1_link && $button_1_text ) : ?>
            <a href="<?php echo esc_url( $button_1_link ); ?>" class="group inline-flex items-center justify-center gap-[10px] min-w-[209px] px-5 h-[45px] rounded-[22px] bg-white/15 border border-white backdrop-blur-[4px] text-white font-montserrat font-semibold text-[18px] leading-[21px] hover:bg-white hover:text-[#00A256] hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shadow-md select-none shrink-0 whitespace-nowrap">
              <span class="whitespace-nowrap"><?php echo esc_html( $button_1_text ); ?></span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 fill-none stroke-current stroke-[2.5] shrink-0" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
            <?php endif; ?>
            
            <?php if ( $button_2_link && $button_2_text ) : ?>
            <a href="<?php echo esc_url( $button_2_link ); ?>" class="group inline-flex items-center justify-center gap-[10px] min-w-[152px] px-5 h-[45px] rounded-[22px] bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-montserrat font-semibold text-[18px] leading-[21px] hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shadow-md hover:shadow-xl select-none shrink-0 whitespace-nowrap">
              <span class="whitespace-nowrap"><?php echo esc_html( $button_2_text ); ?></span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 fill-none stroke-current stroke-[2.5] shrink-0" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
            <?php endif; ?>
          </div>
        </div>

        <!-- ================= BOTTOM BAR (CREAM #FBEAC4) ================= -->
        <div class="absolute left-[80px] bottom-[28px] z-20">
          <div class="w-8 h-[3px] bg-[#FF8D00] rounded-full mb-1.5"></div>
          <p class="font-montserrat font-bold text-[#5D3700] text-[16.5px] mb-2">
            Meet your ingredient partner.
          </p>

          <div class="flex flex-wrap items-center gap-7">
            <?php
            $partner_badges = array('Starches', 'Sweeteners', 'Proteins', 'Dietary Fibres', 'Functional Ingredients');
            foreach($partner_badges as $badge) : ?>
            <div class="flex flex-row items-center shrink-0 gap-[12px] h-[33px]">
              <div class="w-[32.76px] h-[32.76px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm">
                <svg class="w-[15px] h-[15px]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <span class="font-montserrat font-normal text-black text-[13px] whitespace-nowrap">
                <?php echo esc_html($badge); ?>
              </span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
</div>

<!-- Mobile Layout View (xl:hidden) 1:1 Match with Target Image 1 -->
<div class="xl:hidden w-full overflow-x-hidden">
    <!-- Green Upper Hero Area -->
    <div class="relative w-full overflow-hidden bg-gradient-to-br from-[#00A256] to-[#39C56C] pt-10 pb-4 px-5 text-white flex flex-col items-center">
      <!-- Gold swirls -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="absolute inset-0 w-full h-full object-cover opacity-100 pointer-events-none z-0">

      <!-- Right leaf watermark graphic behind beaker -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/group.png' ); ?>" alt="" class="absolute right-[-10px] bottom-[20px] w-[170px] h-auto object-contain pointer-events-none z-0 opacity-40">

      <!-- Content Container -->
      <div class="relative z-10 flex flex-col items-center text-center max-w-[340px]">
        <span class="text-[12px] font-extrabold tracking-[0.14em] text-[#FBEAC4] uppercase mb-3 text-center font-montserrat">
            <?php echo esc_html( $subheading ); ?>
        </span>
        
        <h1 class="text-[30px] sm:text-[34px] font-extrabold leading-[38px] tracking-tight text-center mb-4 font-montserrat text-white">
          Rice-Derived<br>Rigorously Tested.<br>Ready for Global<br>Markets.
        </h1>
        
        <p class="text-[14.5px] font-medium leading-[22px] text-white/95 text-center mb-6 font-montserrat">
          <?php echo esc_html( $description ); ?>
        </p>

        <!-- Single Orange Action Button: Explore Products -->
        <a href="<?php echo esc_url( $button_1_link ); ?>" class="group h-[46px] bg-[#FF8D00] hover:bg-[#FFB457] text-white font-montserrat font-bold text-[15px] px-8 rounded-full flex items-center justify-center gap-2 transition-all duration-300 shadow-md select-none mb-6">
          <span><?php echo esc_html( $button_1_text ); ?></span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </a>
      </div>

      <!-- Unboxed Hero Product Composite Image touching bottom border -->
      <div class="relative z-10 w-full max-w-[360px] h-auto mt-2 -mb-4">
        <img src="<?php echo esc_url( $image_url ); ?>" alt="Starizo Hero Product Ingredients" class="w-full h-auto object-contain" loading="eager" fetchpriority="high">
      </div>
    </div>

    <!-- Cream Bottom Area (#FBEAC4) -->
    <div class="w-full bg-[#FBEAC4] pt-6 pb-8 px-6 relative z-20 border-t border-[#F2DEB0]">
      <div class="max-w-[360px] mx-auto">
        <div class="w-10 h-[4px] bg-[#FF8D00] rounded-full mb-2"></div>
        <p class="font-montserrat font-bold text-[#4A2C00] text-[17px] mb-4">
          Meet your ingredient partner.
        </p>

        <!-- 5 Badges in Horizontal Wrap Layout -->
        <div class="flex flex-wrap items-center gap-x-4 gap-y-3">
          <?php
          $badges = array('Starches', 'Sweeteners', 'Proteins', 'Dietary Fibres', 'Functional Ingredients');
          foreach($badges as $badge) : ?>
          <div class="flex flex-row items-center shrink-0 gap-2.5">
            <div class="w-[32px] h-[32px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm">
              <svg class="w-[14px] h-[14px]" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <span class="text-[13.5px] font-montserrat font-medium text-[#333333] whitespace-nowrap"><?php echo esc_html($badge); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
</div>

