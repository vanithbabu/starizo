<?php
/**
 * Industries We Support Block Template
 */

$subheading  = get_sub_field( 'subheading' ) ?: 'INDUSTRIES WE SUPPORT';
$heading     = get_sub_field( 'heading' ) ?: 'Ingredients Designed For Real Applications';
$button_text = get_sub_field( 'button_text' ) ?: 'Explore Applications';
$button_link = get_sub_field( 'button_link' ) ?: '/product-rice-starch';

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
<section class="w-full bg-[#FDFBF3] relative py-16 lg:py-20 overflow-hidden">
  
  <!-- Top Green Background -->
  <div class="absolute inset-x-0 top-0 bg-[#00A256] h-[310px] z-0"></div>

  <!-- Main Content Container -->
  <div class="relative z-10 w-full max-w-[1280px] mx-auto px-6 flex flex-col items-center">
    
    <!-- White Context Header -->
    <div class="w-full flex flex-col items-center justify-center text-center gap-3 pt-4 mb-12">
      <div class="flex items-center justify-center gap-2.5">
        <span class="w-[5px] h-[24px] bg-[#DF890C] rounded-full inline-block shrink-0"></span>
        <span class="font-montserrat text-white uppercase" style="font-weight: 500; font-size: 18px; line-height: 24px; letter-spacing: 0.11em;">
          <?php echo esc_html( $subheading ); ?>
        </span>
      </div>
      <h2 class="font-montserrat font-bold text-white text-center" style="font-weight: 700; font-size: 24px; line-height: 34px;">
        <?php echo wp_kses_post( $heading ); ?>
      </h2>
    </div>

    <!-- 5 Cards Row -->
    <div class="w-full max-w-[1140px] grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 xl:gap-5 justify-items-center">
      
      <?php foreach ( $industries as $industry ) : 
          $title = $industry['title'] ?? '';
          $image = isset($industry['image']['url']) ? $industry['image']['url'] : '';
      ?>
      <div style="background-color: #00A256; border-top-left-radius: 40px; border-bottom-right-radius: 40px; width: 214px; height: 309px;" class="p-[10px] pb-2 flex flex-col justify-between shadow-lg transition-transform duration-300 hover:-translate-y-1 overflow-hidden shrink-0">
        <div style="width: 194px; height: 256px; border-top-left-radius: 33px; border-bottom-right-radius: 33px;" class="relative overflow-hidden shrink-0 mx-auto bg-gray-200">
          <?php if ( $image ) : ?>
            <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="w-full h-full object-cover">
          <?php endif; ?>
        </div>
        <div class="py-1.5 flex items-center justify-center text-center w-full grow">
          <h4 class="font-montserrat font-bold text-[14px] xl:text-[15px] text-white tracking-tight leading-tight">
            <?php echo esc_html( $title ); ?>
          </h4>
        </div>
      </div>
      <?php endforeach; ?>

    </div>

    <!-- Centered Bottom Action Button -->
    <div class="w-full flex items-center justify-center mt-12">
      <a href="<?php echo esc_url( $button_link ); ?>" class="bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-bold text-[16px] px-8 py-3.5 rounded-full shadow-md transition duration-200 flex items-center justify-center gap-2 select-none">
        <span><?php echo esc_html( $button_text ); ?></span>
        <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
          <polyline points="9 18 15 12 9 6"></polyline>
        </svg>
      </a>
    </div>

  </div>
</section>
