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
$button_1_link = get_sub_field( 'button_1_link' ) ?: '#';
$button_2_text = get_sub_field( 'button_2_text' ) ?: 'Contact Us';
$button_2_link = get_sub_field( 'button_2_link' ) ?: '#';
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
    <section class="relative w-full h-[710px] xl:h-[730px] bg-[#FDFBF3] overflow-hidden">
      <!-- Cream background -->
      <div class="absolute inset-0 bg-[#FDFBF3] z-0"></div>

      <!-- Green top area (matching Figma height 560px) -->
      <div class="absolute top-0 left-0 w-full h-[550px] xl:h-[570px] bg-[#00A256] z-[1]"></div>

      <!-- Left Golden Swirl Lines -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="absolute left-0 top-0 h-[550px] xl:h-[570px] w-auto object-contain object-left-top pointer-events-none z-[2]" />

      <!-- Right decorative leaf graphic background -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/group.png' ); ?>" alt="" class="absolute right-0 top-0 h-[550px] xl:h-[570px] w-auto object-contain object-right-top pointer-events-none z-[2] opacity-40" />

      <!-- PRODUCT HERO IMAGE (Rice stalks, powder bowl & chemistry beakers) -->
      <div class="absolute top-[140px] right-[-10px] xl:right-[20px] w-[740px] xl:w-[840px] h-[520px] xl:h-[560px] z-[15] pointer-events-none">
        <img src="<?php echo esc_url( $image_url ); ?>" class="w-full h-full object-contain object-bottom-right" loading="eager" fetchpriority="high" alt="Rice-Derived Ingredients">
      </div>

      <div class="relative z-[20] w-[1280px] h-full mx-auto px-10">
        <!-- ================= HERO CONTENT ================= -->
        <div class="absolute left-[40px] top-[145px] w-[600px] text-white z-20">
          <p class="uppercase tracking-[0.14em] text-[13px] xl:text-[14px] font-extrabold mb-3 text-white/95 font-montserrat">
            <?php echo esc_html( $subheading ); ?>
          </p>

          <h1 class="text-[42px] xl:text-[50px] leading-[48px] xl:leading-[58px] font-extrabold mb-4 tracking-tight font-montserrat text-white">
            <?php echo wp_kses_post( $heading ); ?>
          </h1>

          <p class="text-[15px] xl:text-[17px] leading-[24px] xl:leading-[27px] text-white/90 mb-6 max-w-[530px] font-montserrat font-medium">
            <?php echo esc_html( $description ); ?>
          </p>

          <div class="flex items-center gap-4">
            <?php if ( $button_1_link && $button_1_text ) : ?>
            <a href="<?php echo esc_url( $button_1_link ); ?>" class="group border-2 border-white text-white hover:bg-white hover:text-[#00A256] font-montserrat font-bold text-[15px] px-7 h-[46px] rounded-full flex items-center justify-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shadow-md select-none">
              <span><?php echo esc_html( $button_1_text ); ?></span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
            <?php endif; ?>
            
            <?php if ( $button_2_link && $button_2_text ) : ?>
            <a href="<?php echo esc_url( $button_2_link ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-montserrat font-bold text-[15px] px-7 h-[46px] rounded-full flex items-center justify-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shadow-md hover:shadow-xl select-none">
              <span><?php echo esc_html( $button_2_text ); ?></span>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
            <?php endif; ?>
          </div>
        </div>

        <!-- ================= BOTTOM BAR (CREAM #FDFBF3) ================= -->
        <div class="absolute left-[40px] bottom-[22px] z-20">
          <div class="w-8 h-[3px] bg-[#FF8D00] rounded-full mb-1.5"></div>
          <p class="font-montserrat font-bold text-[#5D3700] text-[15px] xl:text-[17px] mb-2.5">
            Meet your ingredient partner.
          </p>

          <div class="flex flex-wrap items-center gap-6 xl:gap-8">
            <?php
            $partner_badges = array('Starches', 'Sweeteners', 'Proteins', 'Dietary Fibres', 'Functional Ingredients');
            foreach($partner_badges as $badge) : ?>
            <div class="flex items-center gap-2">
              <div class="w-5.5 h-5.5 rounded-full bg-[#00A256] flex items-center justify-center text-white shrink-0 shadow-sm">
                <svg class="w-3.5 h-3.5 stroke-current fill-none stroke-[3]" viewBox="0 0 24 24">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-semibold text-[14px] xl:text-[15px] text-[#333333] whitespace-nowrap">
                <?php echo esc_html($badge); ?>
              </span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
</div>

<!-- Mobile Layout View (lg:hidden) -->
<div class="lg:hidden w-full overflow-x-hidden">
    <div class="relative w-full overflow-hidden bg-[#00A256] py-12 px-6 text-white flex flex-col items-center">
      <!-- Gold swirls -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="absolute inset-0 object-cover opacity-100 pointer-events-none z-0">

      <!-- Content -->
      <span class="text-[12px] font-extrabold tracking-[0.14em] text-white/95 uppercase mb-3 text-center relative z-10 font-montserrat">
          <?php echo esc_html( $subheading ); ?>
      </span>
      <h1 class="text-[28px] font-extrabold leading-tight tracking-tight text-center mb-4 relative z-10 font-montserrat">
        <?php echo wp_kses_post( $heading ); ?>
      </h1>
      <p class="text-[15px] font-medium leading-[24px] text-white/90 text-center mb-8 max-w-sm relative z-10 font-montserrat">
        <?php echo esc_html( $description ); ?>
      </p>

      <!-- Action buttons -->
      <div class="flex flex-col gap-3 w-full max-w-xs mb-10 relative z-10">
        <?php if ( $button_2_link && $button_2_text ) : ?>
        <a href="<?php echo esc_url( $button_2_link ); ?>" class="group h-[46px] bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-montserrat font-bold text-[15px] rounded-full flex items-center justify-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shadow-md select-none">
          <span><?php echo esc_html( $button_2_text ); ?></span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </a>
        <?php endif; ?>
        
        <?php if ( $button_1_link && $button_1_text ) : ?>
        <a href="<?php echo esc_url( $button_1_link ); ?>" class="group h-[46px] border-2 border-white text-white hover:bg-white hover:text-[#00A256] font-montserrat font-bold text-[15px] rounded-full flex items-center justify-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none shadow-md">
          <span><?php echo esc_html( $button_1_text ); ?></span>
          <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </a>
        <?php endif; ?>
      </div>

      <!-- Hero image in mobile -->
      <div class="w-full max-w-[340px] h-[240px] overflow-hidden rounded-[20px] shadow-lg mb-8 bg-white/10 p-1 relative z-10">
        <img src="<?php echo esc_url( $image_url ); ?>" alt="Starizo Hero Image" class="w-full h-full object-cover rounded-[18px]" loading="eager" fetchpriority="high">
      </div>

      <!-- Stacked list of badges -->
      <div class="w-full flex flex-col gap-3 max-w-[280px] relative z-10">
        <div class="w-8 h-[3px] bg-[#FF8D00] rounded-full mb-1"></div>
        <p class="font-montserrat font-bold text-white text-[15px] mb-1">Meet your ingredient partner.</p>
        <?php
        $badges = array('Starches', 'Sweeteners', 'Proteins', 'Dietary Fibres', 'Functional Ingredients');
        foreach($badges as $badge) : ?>
        <div class="flex items-center gap-3">
          <div class="w-5 h-5 rounded-full bg-white flex items-center justify-center text-[#00A256] shrink-0">
            <svg class="w-3 h-3 stroke-current fill-none stroke-[3]" viewBox="0 0 24 24">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
          </div>
          <span class="text-[14px] font-montserrat font-semibold text-white"><?php echo esc_html($badge); ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
</div>
