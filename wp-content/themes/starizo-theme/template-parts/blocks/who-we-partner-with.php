<?php
/**
 * Who We Partner With Block Template
 */

$subheading = get_sub_field( 'subheading' ) ?: 'WHO WE PARTNER WITH';
$heading    = get_sub_field( 'heading' ) ?: 'Built For Teams That Create, Scale & Innovate';
$image      = get_sub_field( 'image' );
$image_url  = $image ? esc_url($image['url']) : get_template_directory_uri() . '/public/assets/starzo-partner-green.png';

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
      
      <!-- Left Column: Green Leaf Banner -->
      <div class="shrink-0 relative overflow-hidden shadow-xl transform hover:scale-[1.01] transition-transform duration-300 w-full sm:w-[370px] h-[400px] sm:h-[617px]" style="border-top-left-radius: 96px; border-bottom-right-radius: 96px;">
        <img src="<?php echo esc_url( $image_url ); ?>" alt="Starizo Partner Green" class="w-full h-full object-cover">
      </div>

      <!-- Right Columns: 2 Columns x 3 Rows (6 Cards Total) -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 w-full max-w-[680px]">

        <?php foreach ( $partners as $index => $partner ) : 
            $title = $partner['title'] ?? '';
            $desc  = $partner['description'] ?? '';
            $icon  = isset($partner['icon']['url']) ? $partner['icon']['url'] : '';
            // For the mock HTML, the first card was highlighted orange
            $is_highlight = ($index === 0) || !empty($partner['highlight']);
        ?>

        <?php if ( $is_highlight ) : ?>
        <!-- Highlighted Orange Card -->
        <div class="rounded-tl-none rounded-tr-[33px] rounded-bl-[33px] rounded-br-none p-[1.5px] shadow-lg relative overflow-hidden transition-transform duration-300 hover:-translate-y-1 w-full max-w-[329px] mx-auto md:mx-0 h-[187px]" style="background: linear-gradient(111.28deg, #5D3700 -1.65%, #FFFFFF 94.3%);">
          <div class="w-full h-full rounded-tl-none rounded-tr-[31.5px] rounded-bl-[31.5px] rounded-br-none p-6 flex flex-col justify-between" style="background: linear-gradient(111.28deg, #FF9900 -1.65%, #FF8D00 94.3%);">
            <div class="flex items-center gap-4">
              <div class="w-[55px] h-[55px] bg-white rounded-full flex items-center justify-center shrink-0 shadow-md">
                <?php if ( $icon ) : ?>
                  <img src="<?php echo esc_url( $icon ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="w-7 h-7 object-contain">
                <?php endif; ?>
              </div>
              <h3 class="font-montserrat font-bold text-black text-[18px] leading-tight">
                <?php echo esc_html( $title ); ?>
              </h3>
            </div>
            <p class="font-montserrat font-medium text-black/90 text-[14px] leading-[22px] mt-2">
              <?php echo wp_kses_post( $desc ); ?>
            </p>
          </div>
        </div>
        <?php else : ?>
        <!-- Standard Card -->
        <div class="rounded-tl-[33px] rounded-tr-none rounded-bl-none rounded-br-[33px] p-6 flex flex-col justify-between shadow-sm border border-amber-100/60 bg-[#FDFBF3] transition-transform duration-300 hover:-translate-y-1 w-full max-w-[329px] mx-auto md:mx-0 h-[187px]">
          <div class="flex items-center gap-4">
            <div class="w-[55px] h-[55px] bg-[#00A256] rounded-full flex items-center justify-center shrink-0 shadow-md">
              <?php if ( $icon ) : ?>
                <img src="<?php echo esc_url( $icon ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="w-7 h-7 object-contain">
              <?php endif; ?>
            </div>
            <h3 class="font-montserrat font-bold text-[#5D3700] text-[18px] leading-tight">
              <?php echo esc_html( $title ); ?>
            </h3>
          </div>
          <p class="font-montserrat font-medium text-black/75 text-[14px] leading-[22px] mt-2">
            <?php echo wp_kses_post( $desc ); ?>
          </p>
        </div>
        <?php endif; ?>

        <?php endforeach; ?>

      </div>

    </div>
  </div>
</section>
