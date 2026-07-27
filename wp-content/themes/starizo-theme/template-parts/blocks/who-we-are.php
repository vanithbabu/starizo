<?php
/**
 * Who We Are Block Template.
 *
 * @param   array $block The block settings and attributes.
 */

$heading       = get_sub_field( 'heading' ) ?: 'From Traditional Farming.<br>To Manufacturing Excellence';
$description_1 = get_sub_field( 'description_1' ) ?: 'Agriculture shaped who we are. Innovation shapes what we do. STARIZO connects traditional farming knowledge with modern manufacturing to produce quality rice ingredients.';
$description_2 = get_sub_field( 'description_2' ) ?: 'We source responsibly, process rigorously, and hold every batch to standards that don\'t bend. This approach helps us deliver reliable products for various industrial applications.';
$button_text   = get_sub_field( 'button_text' ) ?: 'Learn More';
$button_link   = get_sub_field( 'button_link' ) ?: '#';
$image         = get_sub_field( 'image' );

$image_url = get_template_directory_uri() . '/public/assets/home-who-we-are.png';
if ( $image ) {
    if ( is_array( $image ) ) {
        $image_url = $image['url'];
    } elseif ( is_numeric( $image ) ) {
        $image_url = wp_get_attachment_image_url( $image, 'full' );
    }
}
?>
<!-- Desktop Layout View -->
<div class="hidden xl:block w-full">
    <section class="w-full bg-[#FDFBF3] py-24 border-b border-gray-100">
      <div class="max-w-[1280px] mx-auto px-10">

        <!-- Top two-column layout: text left, image right -->
        <div class="grid grid-cols-12 gap-16 items-center mb-12">
          <!-- Left content column -->
          <div class="col-span-7 flex flex-col items-start">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-[6px] h-[33px] bg-[#FF8D00] rounded-full"></div>
              <span class="font-montserrat font-bold text-[16px] text-starizo-brown uppercase tracking-[0.11em] leading-none">WHO WE ARE</span>
            </div>
            <h2 class="text-[36px] font-black text-black leading-[46px] tracking-tight mb-6">
              <?php echo wp_kses_post( $heading ); ?>
            </h2>
            <p class="text-[16px] font-medium text-black/70 leading-[30px] mb-4">
              <?php echo wp_kses_post( $description_1 ); ?>
            </p>
            <p class="text-[16px] font-medium text-black/70 leading-[30px] mb-8">
              <?php echo wp_kses_post( $description_2 ); ?>
            </p>

            <?php if ( $button_link && $button_text ) : ?>
            <a href="<?php echo esc_url( $button_link ); ?>" class="h-[48px] bg-starizo-orange hover:bg-starizo-orange-dark text-white font-bold text-[16px] px-8 rounded-full flex items-center gap-2 transition duration-200 select-none">
              <?php echo esc_html( $button_text ); ?>
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>
            <?php endif; ?>
          </div>

          <!-- Right image column — smaller, compact -->
          <div class="col-span-5 flex justify-center items-center">
            <div class="w-full h-full">
              <img src="<?php echo esc_url( $image_url ); ?>" alt="Who We Are" class="w-full h-full object-cover rounded-[54px] rounded-tr-[6px] rounded-bl-[6px]" loading="lazy">
            </div>
          </div>
        </div>

        <!-- Full-width Credentials / Badges Row -->
        <div class="w-full flex justify-between items-stretch py-8 border-t border-gray-200/65">
          <?php
          // Credentials can be a repeater in ACF later
          $credentials = [
              ['icon' => 'contries.svg', 'value' => '20+', 'label' => 'Countries Served'],
              ['icon' => 'trasable.svg', 'value' => '100%', 'label' => 'Traceable Procurement'],
              ['icon' => 'certificate.svg', 'value' => 'Multiple', 'label' => 'Industry Certifications'],
              ['icon' => 'batch-quality.svg', 'value' => 'Consistent', 'label' => 'Batch Quality'],
          ];
          $count = count($credentials);
          foreach ($credentials as $index => $cred) :
          ?>
          <div class="flex items-center gap-3">
            <div class="w-12 h-12 bg-[#00A256]/10 rounded-full flex items-center justify-center shrink-0">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/' . $cred['icon'] ); ?>" alt="<?php echo esc_attr( $cred['label'] ); ?>" class="w-7 h-7">
            </div>
            <div>
              <div class="text-[18px] font-extrabold text-black"><?php echo esc_html( $cred['value'] ); ?></div>
              <div class="text-[12px] font-medium text-black/60 leading-none mt-0.5"><?php echo esc_html( $cred['label'] ); ?></div>
            </div>
          </div>
          <?php if ( $index < $count - 1 ) : ?>
          <!-- Orange Divider -->
          <div class="w-[2px] bg-[#FF8D00]/50 self-stretch"></div>
          <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
</div>

<!-- Mobile Layout View -->
<div class="xl:hidden w-full overflow-x-hidden">
    <section class="w-full bg-white py-12 px-6 flex flex-col items-start border-b border-gray-100">
      <div class="flex items-center gap-3 mb-4">
        <div class="w-[5px] h-[28px] bg-[#FF8D00] rounded-full"></div>
        <span class="font-montserrat font-bold text-[14px] text-starizo-brown uppercase tracking-wider">WHO WE ARE</span>
      </div>

      <h2 class="text-[22px] font-bold text-left text-black leading-[30px] tracking-tight mb-6">
        <?php echo wp_kses_post( $heading ); ?>
      </h2>

      <p class="text-[14px] font-medium text-black/80 leading-[24px] text-left mb-6">
        <?php echo wp_kses_post( $description_1 . ' ' . $description_2 ); ?>
      </p>

      <?php if ( $button_link && $button_text ) : ?>
      <a href="<?php echo esc_url( $button_link ); ?>" class="h-[44px] bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-bold text-[14px] px-6 rounded-full flex items-center justify-center gap-2 select-none mb-8 shadow-sm">
        <?php echo esc_html( $button_text ); ?>
        <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
          <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
      </a>
      <?php endif; ?>

      <!-- Photo Frame -->
      <div class="mb-12 w-full">
        <div class="w-full h-full rounded-tl-[54px] rounded-br-[54px] rounded-tr-[6px] rounded-bl-[6px] overflow-hidden">
          <img src="<?php echo esc_url( $image_url ); ?>" alt="Who We Are" class="w-full h-full object-cover" loading="lazy">
        </div>
      </div>

      <!-- 2x2 Stats Grid -->
      <div class="w-full max-w-[350px] grid grid-cols-2 gap-y-8 gap-x-4 self-center">
        <!-- Stat 1 -->
        <div class="flex items-center gap-3.5 relative pr-3 border-r-2 border-[#FF8D00]">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/contries.svg' ); ?>" alt="Countries" class="w-9 h-9 shrink-0 object-contain">
          <div class="flex flex-col min-w-0 gap-1">
            <span class="font-montserrat font-bold text-[13px] text-black leading-tight whitespace-nowrap"><span class="font-extrabold text-[15px]">20+</span> Countries</span>
            <span class="font-montserrat font-medium text-[12px] text-black/70 leading-tight mt-0.5 whitespace-nowrap">Served</span>
          </div>
        </div>

        <!-- Stat 2 -->
        <div class="flex items-center gap-3.5 pl-3">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/trasable.svg' ); ?>" alt="Traceable" class="w-9 h-9 shrink-0 object-contain">
          <div class="flex flex-col min-w-0">
            <span class="font-montserrat font-bold text-[13px] text-black leading-tight whitespace-nowrap"><span class="font-extrabold text-[15px]">100%</span> Traceable</span>
            <span class="font-montserrat font-medium text-[12px] text-black/70 leading-tight mt-0.5 whitespace-nowrap">Procurement</span>
          </div>
        </div>

        <!-- Stat 3 -->
        <div class="flex items-center gap-2.5 relative pr-3">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/certificate.svg' ); ?>" alt="Certifications" class="w-9 h-9 shrink-0 object-contain">
          <div class="flex flex-col min-w-0">
            <span class="font-montserrat font-bold text-[13px] text-black leading-tight whitespace-nowrap">Multiple Industry</span>
            <span class="font-montserrat font-medium text-[12px] text-black/70 leading-tight mt-0.5 whitespace-nowrap">Certifications</span>
          </div>
          <!-- Orange Vertical Divider Line -->
          <div class="absolute right-0 top-1/2 -translate-y-1/2 w-[3px] h-[36px] bg-[#FF8D00] rounded-full"></div>
        </div>

        <!-- Stat 4 -->
        <div class="flex items-center gap-2.5 pl-3">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/batch-quality.svg' ); ?>" alt="Batch Quality" class="w-9 h-9 shrink-0 object-contain">
          <div class="flex flex-col min-w-0">
            <span class="font-montserrat font-bold text-[13px] text-black leading-tight whitespace-nowrap">Consistent</span>
            <span class="font-montserrat font-medium text-[12px] text-black/70 leading-tight mt-0.5 whitespace-nowrap">Batch Quality</span>
          </div>
        </div>
      </div>
    </section>
</div>
