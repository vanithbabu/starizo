<?php
/**
 * Industries We Support Block Template
 */

$subheading  = get_sub_field( 'subheading' ) ?: 'INDUSTRIES WE SUPPORT';
$heading     = get_sub_field( 'heading' ) ?: 'Ingredients Designed For Real Applications';
$button_text = get_sub_field( 'button_text' ) ?: 'Explore Applications';
$button_link = get_sub_field( 'button_link' ) ?: site_url('/product-rice-starch');

$industries = get_sub_field( 'industries' );
if ( empty( $industries ) ) {
    $industries = array(
        array(
            'title' => 'Food Manufacturers',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/industry-food.png')
        ),
        array(
            'title' => 'Nutrition Brands',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/industry-nutrition.png')
        ),
        array(
            'title' => 'Pharmaceutical',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/industry-pharma.png')
        ),
        array(
            'title' => 'Personal Care',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/industry-personal-care.png')
        ),
        array(
            'title' => 'Industrial Applications',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/industry-industrial.png')
        ),
    );
}
?>

<!-- INDUSTRIES WE SUPPORT SECTION -->
<!-- Mobile: Full Solid Green #00A256 Background (Zero white/off-white). Desktop: #FDFBF3 with Top Green Bar -->
<section class="w-full bg-[#00A256] lg:bg-[#FDFBF3] relative py-12 lg:py-20 overflow-hidden">
  
  <!-- Top Green Background for Desktop -->
  <div class="hidden lg:block absolute inset-x-0 top-0 bg-[#00A256] h-[310px] z-0"></div>

  <!-- Main Content Container -->
  <div class="relative z-10 w-full max-w-[1280px] mx-auto px-4 sm:px-6 flex flex-col items-center">
    
    <!-- White Context Header -->
    <div class="w-full flex flex-col items-center justify-center text-center gap-2 sm:gap-3 pt-2 lg:pt-4 mb-8 lg:mb-12">
      <div class="flex items-center justify-center gap-2.5">
        <span class="w-[4px] lg:w-[5px] h-[20px] lg:h-[24px] bg-[#DF890C] rounded-full inline-block shrink-0"></span>
        <span class="font-montserrat text-white uppercase font-normal text-[16px] lg:text-[22px] leading-[30px] lg:leading-[54px] tracking-[0.11em]">
          <?php echo esc_html( $subheading ); ?>
        </span>
      </div>
      <h2 class="font-montserrat font-bold text-white text-center text-[18px] sm:text-[22px] lg:text-[24px] leading-[26px] lg:leading-[34px]">
        <?php echo wp_kses_post( $heading ); ?>
      </h2>
    </div>

    <!-- 5 Cards Responsive Grid (2 Columns on Mobile with 5th Card Centered, 5 Columns on Desktop) -->
    <div class="w-full max-w-[342px] lg:max-w-[1140px] grid grid-cols-2 lg:grid-cols-5 gap-4 xl:gap-5 justify-items-center mx-auto">
      
      <?php foreach ( $industries as $index => $industry ) : 
          $title = $industry['title'] ?? '';
          $image = isset($industry['image']['url']) ? $industry['image']['url'] : (is_string($industry['image']) ? $industry['image'] : '');
          $is_last = ($index === count($industries) - 1);
      ?>
      <div class="<?php echo $is_last ? 'col-span-2 flex justify-center lg:col-span-1 w-full' : 'w-full flex justify-center'; ?>">
        <div style="background-color: #00A256; border-top-left-radius: 40px; border-bottom-right-radius: 40px;"
          class="w-full max-w-[158px] lg:w-[214px] lg:max-w-[214px] h-auto lg:h-[309px] p-2.5 lg:p-[10px] pb-2 flex flex-col justify-between shadow-lg transition-transform duration-300 hover:-translate-y-1 overflow-hidden shrink-0">
          <div style="border-top-left-radius: 33px; border-bottom-right-radius: 33px;" class="relative overflow-hidden shrink-0 mx-auto w-full h-[190px] lg:w-[194px] lg:h-[256px]">
            <?php if ( $image ) : ?>
              <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="w-full h-full object-cover">
            <?php endif; ?>
          </div>
          <div class="py-1.5 flex items-center justify-center text-center w-full grow">
            <h4 class="font-montserrat font-bold text-[12px] sm:text-[13px] lg:text-[14px] xl:text-[15px] text-white tracking-tight leading-tight">
              <?php echo esc_html( $title ); ?>
            </h4>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>

    <!-- Centered Bottom Action Button -->
    <div class="w-full flex items-center justify-center mt-8 lg:mt-12">
      <a href="<?php echo esc_url( $button_link ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-montserrat font-bold text-[14px] lg:text-[16px] px-8 h-[46px] sm:h-[50px] rounded-full shadow-md hover:shadow-xl hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 flex items-center justify-center gap-2 select-none">
        <span><?php echo esc_html( $button_text ); ?></span>
        <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24">
          <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
      </a>
    </div>

  </div>
</section>
