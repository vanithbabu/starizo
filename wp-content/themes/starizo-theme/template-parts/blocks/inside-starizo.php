<?php
/**
 * Inside Starizo Block Template
 */

$subheading  = get_sub_field( 'subheading' ) ?: 'INSIDE STARIZO';
$heading     = get_sub_field( 'heading' ) ?: 'Manufacturing Built For Scale';
$description = get_sub_field( 'description' ) ?: 'Infrastructure designed to support quality, traceability, and long-term growth.';
$title       = get_sub_field( 'title' ) ?: 'Facility Commissioning';
$date        = get_sub_field( 'date' ) ?: 'Q2 2026';

// Highlights (Repeater)
// For simplicity if empty, we fall back to a hardcoded array
$highlights = get_sub_field('highlights');
if ( empty( $highlights ) ) {
    $highlights = array(
        array('label' => 'Location'),
        array('label' => 'Production Capacity'),
        array('label' => 'Integrated R&D'),
        array('label' => 'Energy'),
        array('label' => 'Storage'),
    );
}

$image = get_sub_field('image');
$image_url = $image ? esc_url($image['url']) : get_template_directory_uri() . '/public/assets/facility-abaout.png';

$blueprint = get_sub_field('blueprint_image');
$blueprint_url = $blueprint ? esc_url($blueprint['url']) : get_template_directory_uri() . '/public/assets/Facility Communation.png';
?>

<section class="w-full bg-[#FDFBF3] py-16 md:py-24 border-b border-gray-100">
  <div class="mx-auto px-4 sm:px-6 mb-14" style="max-width: 1116px; width: 100%; min-height: 102px; opacity: 1;">

    <!-- Strict Horizontal Row Format (Left: INSIDE STARIZO, Right: Heading & Subtitle) -->
    <div class="flex flex-col md:flex-row items-start justify-between w-full" style="gap: 32px;">

      <!-- Left Element: INSIDE STARIZO Badge -->
      <div class="flex items-center gap-3 shrink-0 mb-4 md:mb-0">
        <div class="shrink-0" style="background-color: #FF8D00; width: 4px; height: 28px; border-radius: 9999px;"></div>
        <span class="font-montserrat font-bold uppercase tracking-[0.14em]" style="color: #A46C20; font-weight: 700; font-size: 16px; line-height: 28px;">
          <?php echo esc_html( $subheading ); ?>
        </span>
      </div>

      <!-- Right Element: Manufacturing Built For Scale + Subtitle -->
      <div class="flex flex-col items-start text-left w-full max-w-[393px]" style="gap: 12px; opacity: 1;">
        <h2 class="font-montserrat font-bold text-black text-left" style="font-weight: 700; font-size: 22px; line-height: 30px; letter-spacing: 0;">
          <?php echo wp_kses_post( $heading ); ?>
        </h2>
        <p class="font-montserrat font-medium text-black/75 text-left" style="font-weight: 500; font-size: 18px; line-height: 30px; letter-spacing: 0;">
          <?php echo wp_kses_post( $description ); ?>
        </p>
      </div>

    </div>

  </div>

  <!-- Facility Commissioning Row Container -->
  <div class="mt-10 mx-auto flex flex-col md:flex-row items-start justify-between py-6 px-4 sm:px-6" style="max-width: 1050px; width: 100%; opacity: 1; gap: 32px;">

    <!-- Left Side: Header Image Line & Highlights -->
    <div class="flex flex-col items-start flex-1" style="max-width: 680px; width: 100%;">

      <!-- Facility Commissioning Header Image Asset -->
      <img src="<?php echo esc_url( $blueprint_url ); ?>" alt="Blueprint" class="w-full h-auto object-contain mb-6">

      <!-- Highlights Bullet List -->
      <div class="flex flex-col gap-4">
        <?php foreach ( $highlights as $highlight ) : ?>
        <div class="flex items-center gap-3">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/about-bullate.svg'); ?>" alt="" class="w-[17px] h-[16px] shrink-0">
          <span class="font-montserrat font-medium text-[18px] leading-[26px]" style="color: #FF8D00;">
            <?php echo esc_html( $highlight['label'] ?? $highlight['highlight_label'] ); ?>
          </span>
        </div>
        <?php endforeach; ?>
      </div>

    </div>

    <!-- Right Side: Image & Title/Date -->
    <div class="flex flex-col items-start shrink-0 w-full md:w-[300px] mt-8 md:mt-0">
      <img src="<?php echo esc_url( $image_url ); ?>" alt="Facility Commissioning" class="w-full md:w-[300px] h-auto object-contain mb-4">
      <h4 class="font-montserrat font-bold text-black text-[22px] leading-[28px] mb-1" style="font-weight: 700;">
        <?php echo esc_html( $title ); ?>
      </h4>
      <div class="font-montserrat font-bold text-[#00A256] text-[22px] leading-[28px]" style="font-weight: 700; color: #00A256;">
        <?php echo esc_html( $date ); ?>
      </div>
    </div>

  </div>
</section>
