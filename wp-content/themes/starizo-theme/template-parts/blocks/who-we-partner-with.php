<?php
/**
 * Who We Partner With Block Template
 */

$subheading = get_sub_field( 'subheading' ) ?: 'WHO WE PARTNER WITH';
$heading    = get_sub_field( 'heading' ) ?: 'Built For Teams That Create, Scale & Innovate';
$image      = get_sub_field( 'image' );
$image_url  = ( is_array($image) && !empty($image['url']) ) ? esc_url($image['url']) : get_template_directory_uri() . '/public/assets/starzo-partner-green.png';

$partners = get_sub_field( 'partners' );
if ( empty( $partners ) ) {
    $partners = array(
        array(
            'title'       => 'Food Manufacturers',
            'description' => 'Scale clean-label production with reliable ingredient systems.',
            'icon'        => array('url' => get_template_directory_uri() . '/public/assets/food-manufacture-icon.svg'),
            'highlight'   => true
        ),
        array(
            'title'       => 'R&D & Formulation Teams',
            'description' => 'Develop application-ready solutions with technical collaboration.',
            'icon'        => array('url' => get_template_directory_uri() . '/public/assets/r-d-manufactures-icon.svg'),
            'highlight'   => false
        ),
        array(
            'title'       => 'Nutraceutical Brands',
            'description' => 'Source functional rice-derived ingredients with traceability.',
            'icon'        => array('url' => get_template_directory_uri() . '/public/assets/nutrisial-icon.svg'),
            'highlight'   => false
        ),
        array(
            'title'       => 'Global Ingredient Buyers',
            'description' => 'Secure scalable supply with quality assurance.',
            'icon'        => array('url' => get_template_directory_uri() . '/public/assets/global-icon.svg'),
            'highlight'   => false
        ),
        array(
            'title'       => 'Contract Manufacturers',
            'description' => 'Improve consistency and reduce sourcing complexity.',
            'icon'        => array('url' => get_template_directory_uri() . '/public/assets/contract-icon.svg'),
            'highlight'   => false
        ),
        array(
            'title'       => 'Emerging Brands',
            'description' => 'Build differentiated products with expert guidance.',
            'icon'        => array('url' => get_template_directory_uri() . '/public/assets/emerging-icon.svg'),
            'highlight'   => false
        ),
    );
}
?>

<section class="w-full bg-white py-16 lg:py-24 relative overflow-hidden px-4 sm:px-6">
  <div class="w-full max-w-[1280px] mx-auto flex flex-col items-center">
    
    <!-- Header Context Container -->
    <div class="w-full max-w-[1116px] flex flex-col items-center justify-center text-center gap-3 mb-12 lg:mb-16">
      <div class="flex items-center justify-center gap-2.5">
        <span class="w-[5px] h-[28px] bg-[#DF890C] rounded-full inline-block shrink-0"></span>
        <span class="font-montserrat text-[#5D3700] uppercase" style="font-weight: 400; font-size: 22px; line-height: 54px; letter-spacing: 0.11em;">
          <?php echo esc_html( $subheading ); ?>
        </span>
      </div>
      <h2 class="font-montserrat font-bold text-black text-center" style="font-weight: 700; font-size: 22px; line-height: 30px;">
        <?php echo wp_kses_post( $heading ); ?>
      </h2>
    </div>

    <!-- 3-Column Content Grid: Left Green Leaf Banner + Right 2 Columns of Cards -->
    <div class="w-full max-w-[1100px] flex flex-col lg:flex-row items-center lg:items-start justify-center gap-8 xl:gap-10">
      
      <!-- Left Column: Green Leaf Banner (Desktop & Mobile 1:1 Matched) -->
      <?php 
      $mobile_image_url = get_template_directory_uri() . '/public/assets/starizo-mobile-green.png';
      ?>
      <!-- Desktop Leaf Banner (sm: 640px+ screens) -->
      <div class="hidden sm:block shrink-0 relative overflow-hidden shadow-xl transform hover:scale-[1.01] transition-transform duration-300 w-[370px] h-[617px]" style="border-top-left-radius: 96px; border-bottom-right-radius: 96px;">
        <img src="<?php echo esc_url( $image_url ); ?>" alt="Starizo Partner Green" class="w-full h-full object-cover">
      </div>

      <!-- Mobile Leaf Banner (< 640px screens) -->
      <div class="block sm:hidden w-full max-w-[320px] shrink-0 relative overflow-hidden shadow-lg mb-2" style="border-top-left-radius: 54px; border-bottom-right-radius: 54px;">
        <img src="<?php echo esc_url( $mobile_image_url ); ?>" alt="Starizo Partner Green Mobile" class="w-full h-auto object-cover">
      </div>

      <!-- Right Columns: 2 Columns x 3 Rows (6 Cards Total) -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-[680px]">

        <?php 
        $default_icons = array(
            'Food Manufacturers'       => get_template_directory_uri() . '/public/assets/food-manufacture-icon.svg',
            'R&D & Formulation Teams'  => get_template_directory_uri() . '/public/assets/r-d-manufactures-icon.svg',
            'Nutraceutical Brands'     => get_template_directory_uri() . '/public/assets/nutrisial-icon.svg',
            'Global Ingredient Buyers' => get_template_directory_uri() . '/public/assets/global-icon.svg',
            'Contract Manufacturers'   => get_template_directory_uri() . '/public/assets/contract-icon.svg',
            'Emerging Brands'          => get_template_directory_uri() . '/public/assets/emerging-icon.svg',
        );
        $fallback_icons_by_index = array(
            0 => get_template_directory_uri() . '/public/assets/food-manufacture-icon.svg',
            1 => get_template_directory_uri() . '/public/assets/r-d-manufactures-icon.svg',
            2 => get_template_directory_uri() . '/public/assets/nutrisial-icon.svg',
            3 => get_template_directory_uri() . '/public/assets/global-icon.svg',
            4 => get_template_directory_uri() . '/public/assets/contract-icon.svg',
            5 => get_template_directory_uri() . '/public/assets/emerging-icon.svg',
        );

        foreach ( $partners as $index => $partner ) : 
            $title = $partner['title'] ?? '';
            $desc  = $partner['description'] ?? '';
            
            // Robust Icon URL Resolution
            $icon_url = '';
            if ( isset( $partner['icon'] ) ) {
                if ( is_array( $partner['icon'] ) && ! empty( $partner['icon']['url'] ) ) {
                    $icon_url = $partner['icon']['url'];
                } elseif ( is_numeric( $partner['icon'] ) ) {
                    $icon_url = wp_get_attachment_url( $partner['icon'] );
                } elseif ( is_string( $partner['icon'] ) && ! empty( $partner['icon'] ) && strpos( $partner['icon'], 'http' ) === 0 ) {
                    $icon_url = $partner['icon'];
                }
            }
            if ( empty( $icon_url ) ) {
                $icon_url = $default_icons[$title] ?? ($fallback_icons_by_index[$index] ?? get_template_directory_uri() . '/public/assets/food-manufacture-icon.svg');
            }

            $is_highlight = ($index === 0) || !empty($partner['highlight']);
            $card_corners = ($index < 2) 
              ? 'rounded-tl-none rounded-tr-[24px] lg:rounded-tr-[33px] rounded-bl-[24px] lg:rounded-bl-[33px] rounded-br-none' 
              : 'rounded-tl-[24px] lg:rounded-tl-[33px] rounded-tr-none rounded-bl-none rounded-br-[24px] lg:rounded-br-[33px]';
        ?>

        <!-- Standard Card -->
        <div class="<?php echo $card_corners; ?> group p-5 lg:p-6 flex flex-col justify-between shadow-sm border border-amber-100/60 bg-[#FDFBF3] transition-all duration-300 hover:-translate-y-1 hover:bg-gradient-to-br hover:from-[#FF9900] hover:to-[#FF8D00] hover:border-transparent hover:shadow-lg w-full max-w-[320px] lg:max-w-[329px] mx-auto md:mx-0 lg:h-[187px]">
          <div class="flex items-center gap-3 lg:gap-4">
            <div class="w-[45px] lg:w-[55px] h-[45px] lg:h-[55px] bg-[#00A256] group-hover:bg-white transition-colors duration-300 rounded-full flex items-center justify-center shrink-0 shadow-sm lg:shadow-md">
              <img src="<?php echo esc_url( $icon_url ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="w-6 lg:w-7 h-6 lg:h-7 object-contain brightness-0 invert group-hover:brightness-100 group-hover:invert-0 transition-all duration-300">
            </div>
            <h3 class="font-montserrat font-bold text-[#5D3700] group-hover:text-black transition-colors duration-300 text-[16px] lg:text-[18px] leading-tight">
              <?php echo esc_html( $title ); ?>
            </h3>
          </div>
          <p class="font-montserrat font-medium text-black/75 group-hover:text-black/90 transition-colors duration-300 text-[13px] lg:text-[14px] leading-[20px] lg:leading-[22px] mt-3 lg:mt-2">
            <?php echo wp_kses_post( $desc ); ?>
          </p>
        </div>

        <?php endforeach; ?>

      </div>

    </div>
  </div>
</section>
