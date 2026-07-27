<?php
/**
 * Why Partner With Starizo Block Template
 */

$subheading = get_sub_field( 'subheading' ) ?: 'WHY PARTNER WITH STARIZO';
$heading    = get_sub_field( 'heading' ) ?: 'More Than Supply. Strategic Ingredient Collaboration.';

$features = get_sub_field( 'features' );
if ( empty( $features ) ) {
    $features = array(
        array(
            'title'       => 'Rice-Derived Expertise',
            'description' => 'Deep understanding across starches, sweeteners, proteins and derivatives.',
            'image'       => array('url' => get_template_directory_uri() . '/public/assets/partner-life.png'),
            'highlight'   => true
        ),
        array(
            'title'       => 'Clean Manufacturing',
            'description' => '',
            'image'       => array('url' => get_template_directory_uri() . '/public/assets/partne-clean.png'),
            'highlight'   => false
        ),
        array(
            'title'       => 'Traceable Supply Chain',
            'description' => '',
            'image'       => array('url' => get_template_directory_uri() . '/public/assets/partner-paddie.png'),
            'highlight'   => false
        ),
        array(
            'title'       => 'Global Scalability',
            'description' => '',
            'image'       => array('url' => get_template_directory_uri() . '/public/assets/partner-globe.png'),
            'highlight'   => false
        ),
        array(
            'title'       => 'Application Support',
            'description' => '',
            'image'       => array('url' => get_template_directory_uri() . '/public/assets/partner-application.png'),
            'highlight'   => false
        ),
    );
}
?>

<section class="w-full bg-[#FDFBF3] py-16 lg:py-24 relative overflow-hidden px-4 sm:px-6">
  <div class="w-full max-w-[1280px] mx-auto flex flex-col items-center">
    
    <!-- Context Header -->
    <div class="w-full max-w-[1100px] flex flex-col items-start justify-start text-left gap-2 mb-12">
      <div class="flex items-center justify-start gap-2.5">
        <span class="w-[5px] h-[28px] bg-[#DF890C] rounded-full inline-block shrink-0"></span>
        <span class="font-montserrat text-[#5D3700] uppercase" style="font-weight: 400; font-size: 22px; line-height: 54px; letter-spacing: 0.11em;">
          <?php echo esc_html( $subheading ); ?>
        </span>
      </div>
      <h2 class="font-montserrat font-bold text-black text-left" style="font-weight: 700; font-size: 22px; line-height: 30px;">
        <?php echo wp_kses_post( $heading ); ?>
      </h2>
    </div>

    <!-- 5 Cards Horizontal Grid Container -->
    <div class="w-full max-w-[1100px] flex flex-row items-start justify-center gap-4 xl:gap-5 flex-wrap lg:flex-nowrap">
      
      <?php foreach ( $features as $index => $feature ) : 
          $title = $feature['title'] ?? '';
          $desc  = $feature['description'] ?? '';
          $image = isset($feature['image']['url']) ? $feature['image']['url'] : '';
          $is_highlight = ($index === 0) || !empty($feature['highlight']);
      ?>

      <?php if ( $is_highlight ) : ?>
      <!-- Highlighted Expanded Card -->
      <div class="bg-white rounded-tl-none rounded-tr-[44px] rounded-bl-none rounded-br-none p-2.5 shadow-lg flex flex-col justify-between shrink-0 transition-transform duration-300 hover:-translate-y-1 w-[198px] min-h-[332px]">
        <div>
          <!-- Image -->
          <div class="w-[183px] h-[137px] overflow-hidden shrink-0 mx-auto" style="border-top-right-radius: 44px; border-bottom-left-radius: 44px;">
            <?php if ( $image ) : ?>
              <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="w-full h-full object-cover">
            <?php endif; ?>
          </div>
          <!-- Title -->
          <div class="pt-3 px-1">
            <h3 class="font-montserrat font-semibold text-[#5D3700] text-[18px] leading-[21px]" style="width: 183px;">
              <?php echo esc_html( $title ); ?>
            </h3>
          </div>
          <!-- Description -->
          <?php if ( $desc ) : ?>
          <div class="pt-2 px-1">
            <p class="font-montserrat font-normal text-black opacity-75 text-[14px] leading-[19px]" style="width: 174px;">
              <?php echo wp_kses_post( $desc ); ?>
            </p>
          </div>
          <?php endif; ?>
        </div>

        <!-- Bottom Horizontal Bar -->
        <div class="w-[183px] h-[26.16px] flex items-center justify-between mx-auto pt-2 pb-1 border-t border-gray-100/60 mt-2">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/partner-leaf-full.svg'); ?>" alt="Leaf" class="w-6 h-6 shrink-0">
          <div class="h-[1px] bg-gray-200 grow mx-2"></div>
          <div class="w-[24px] h-[24px] rounded-full border border-[#FF8D00] flex items-center justify-center shrink-0 bg-white shadow-xs">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/partner-arrow-up.svg'); ?>" alt="Up" class="w-2.5 h-2.5">
          </div>
        </div>
      </div>

      <?php else : ?>
      <!-- Standard Card -->
      <div class="bg-white rounded-tl-none rounded-tr-[44px] rounded-bl-none rounded-br-none p-2.5 shadow-sm border border-amber-50 flex flex-col justify-between shrink-0 transition-transform duration-300 hover:-translate-y-1 w-[198px] min-h-[242px]">
        <div>
          <!-- Image -->
          <div class="w-[183px] h-[137px] overflow-hidden shrink-0 mx-auto" style="border-top-right-radius: 44px; border-bottom-left-radius: 44px;">
            <?php if ( $image ) : ?>
              <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="w-full h-full object-cover">
            <?php endif; ?>
          </div>
          <!-- Title -->
          <div class="pt-3 px-1">
            <h3 class="font-montserrat font-semibold text-[#5D3700] text-[18px] leading-[21px]" style="width: 183px;">
              <?php echo esc_html( $title ); ?>
            </h3>
          </div>
        </div>

        <!-- Bottom Horizontal Bar -->
        <div class="w-[183px] h-[26.16px] flex items-center justify-between mx-auto pt-2 pb-1 border-t border-gray-100/60 mt-2">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/partner-leaf-nill.svg'); ?>" alt="Leaf" class="w-6 h-6 shrink-0">
          <div class="h-[1px] bg-gray-200 grow mx-2"></div>
          <div class="w-[24px] h-[24px] rounded-full border border-amber-200 flex items-center justify-center shrink-0 bg-white shadow-xs">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/partner-arrow-down.svg'); ?>" alt="Down" class="w-2.5 h-2.5">
          </div>
        </div>
      </div>
      <?php endif; ?>

      <?php endforeach; ?>

    </div>

  </div>
</section>
