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
    <section class="relative w-full h-[860px] bg-[#FBEAC4] overflow-hidden">
      <!-- Cream background -->
      <div class="absolute inset-0 bg-[#FBEAC4] z-0"></div>

      <!-- Green top area -->
      <div class="absolute top-0 left-0 w-full h-[620px] bg-gradient-to-br from-[#00A256] to-[#39C56C] z-[1]"></div>

      <!-- Left Looper -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="absolute left-0 top-0 h-[620px] w-auto object-contain object-left-top pointer-events-none z-[2]" />

      <!-- Right decorative group -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/group.png' ); ?>" alt="" class="absolute right-0 top-0 h-[620px] w-auto object-contain object-right-top pointer-events-none z-[2]" />

      <!-- PRODUCT IMAGE -->
      <div class="absolute bottom-[-5px] right-[-60px] w-[980px] h-[650px] z-[3] pointer-events-none">
        <img src="<?php echo esc_url( $image_url ); ?>" class="w-full h-full object-contain object-bottom-center" loading="eager" fetchpriority="high">
      </div>

      <div class="relative z-[10] w-[1280px] h-full mx-auto">
        <!-- ================= HERO CONTENT ================= -->
        <div class="absolute left-[80px] top-[190px] w-[560px] text-white z-20">
          <p class="uppercase tracking-[0.18em] text-[14px] font-bold mb-4 text-white/95">
            <?php echo esc_html( $subheading ); ?>
          </p>

          <h1 class="text-[52px] xl:text-[60px] leading-[58px] xl:leading-[68px] font-black mb-5 tracking-tight">
            <?php echo wp_kses_post( $heading ); ?>
          </h1>

          <p class="text-[16px] xl:text-[18px] leading-[28px] xl:leading-[32px] text-white/90 mb-8 max-w-[520px]">
            <?php echo esc_html( $description ); ?>
          </p>

          <div class="flex items-center gap-5">
            <?php if ( $button_1_link && $button_1_text ) : ?>
            <a href="<?php echo esc_url( $button_1_link ); ?>" class="group border-2 border-white rounded-full h-[50px] px-8 flex items-center gap-2 text-white font-semibold text-[16px] hover:bg-white hover:text-[#00A256] transition-all duration-300 select-none">
              <?php echo esc_html( $button_1_text ); ?>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
            <?php endif; ?>
            
            <?php if ( $button_2_link && $button_2_text ) : ?>
            <a href="<?php echo esc_url( $button_2_link ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-semibold text-[16px] h-[50px] px-8 rounded-full flex items-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shadow-md hover:shadow-xl select-none">
              <?php echo esc_html( $button_2_text ); ?>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
            <?php endif; ?>
          </div>
        </div>

        <!-- ================= BOTTOM BAR ================= -->
        <div class="absolute left-[80px] bottom-[40px] z-20">
          <div class="w-8 h-[3px] bg-[#FF8D00] mb-3"></div>
          <p class="font-bold text-[#5D3700] text-[16px] mb-5">
            Meet your ingredient partner:
          </p>

          <div class="flex flex-wrap items-center gap-6 xl:gap-8">
            <?php
            $partner_badges = array('Starches', 'Sweeteners', 'Proteins', 'Dietary Fibres', 'Functional Ingredients');
            foreach($partner_badges as $badge) : ?>
            <div class="flex items-center gap-2">
              <div class="w-5 h-5 rounded-full bg-[#00A256] flex items-center justify-center text-white shrink-0 shadow-sm">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <span class="font-montserrat font-semibold text-[14px] text-black/90 whitespace-nowrap">
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
    <div class="relative w-full overflow-hidden bg-gradient-to-br from-[#00A256] to-[#5DC671] py-12 px-6 text-white flex flex-col items-center">
      <!-- Gold swirls -->
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="absolute inset-0 object-cover opacity-100 pointer-events-none z-0">

      <!-- Content -->
      <span class="text-[12px] font-extrabold tracking-[0.15em] text-white/95 uppercase mb-3 text-center relative z-10">
          <?php echo esc_html( $subheading ); ?>
      </span>
      <h1 class="text-[28px] font-black leading-tight tracking-tight text-center mb-4 relative z-10">
        <?php echo wp_kses_post( $heading ); ?>
      </h1>
      <p class="text-[15px] font-medium leading-[24px] text-white/90 text-center mb-8 max-w-sm relative z-10">
        <?php echo esc_html( $description ); ?>
      </p>

      <!-- Action buttons -->
      <div class="flex flex-col gap-3 w-full max-w-xs mb-10 relative z-10">
        <?php if ( $button_2_link && $button_2_text ) : ?>
        <a href="<?php echo esc_url( $button_2_link ); ?>" class="h-[46px] bg-starizo-orange hover:bg-starizo-orange-dark text-white font-bold text-[15px] rounded-full flex items-center justify-center gap-2 select-none shadow-md transition-colors">
          <?php echo esc_html( $button_2_text ); ?>
          <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </a>
        <?php endif; ?>
        
        <?php if ( $button_1_link && $button_1_text ) : ?>
        <a href="<?php echo esc_url( $button_1_link ); ?>" class="h-[46px] border border-white text-white hover:bg-white hover:text-[#00A256] font-bold text-[15px] rounded-full flex items-center justify-center gap-2 select-none transition-colors">
          <?php echo esc_html( $button_1_text ); ?>
          <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </a>
        <?php endif; ?>
      </div>

      <!-- Hero image in mobile -->
      <div class="w-full max-w-[340px] h-[250px] overflow-hidden rounded-[20px] shadow-lg mb-8 bg-white/10 p-1 relative z-10">
        <img src="<?php echo esc_url( $image_url ); ?>" alt="Starizo Hero Image" class="w-full h-full object-cover rounded-[18px]" loading="eager" fetchpriority="high">
      </div>

      <!-- Stacked list of badges -->
      <div class="w-full flex flex-col gap-3 max-w-[280px] relative z-10">
        <?php
        $badges = array('Starches', 'Sweeteners', 'Proteins');
        foreach($badges as $badge) : ?>
        <div class="flex items-center gap-3">
          <div class="w-5 h-5 rounded-full bg-white flex items-center justify-center text-starizo-green-start shrink-0">
            <svg class="w-3 h-3" fill="none" stroke="currentColor" stroke-width="3" viewBox="0 0 24 24">
              <polyline points="20 6 9 17 4 12"></polyline>
            </svg>
          </div>
          <span class="text-[13px] font-bold"><?php echo esc_html($badge); ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
</div>
