<?php
/**
 * Industries We Serve Block Template.
 *
 * @param   array $block The block settings and attributes.
 */

$heading     = get_sub_field( 'heading' ) ?: 'Built To Perform Across Industries';
$subheading  = get_sub_field( 'subheading' ) ?: 'INDUSTRIES WE SERVE';
$button_text = get_sub_field( 'button_text' ) ?: 'Explore Applications';
$button_link_raw = get_sub_field( 'button_link' );
$button_link = ( $button_link_raw && '#' !== $button_link_raw ) ? $button_link_raw : site_url( '/product-category/food-beverage' );

$industries = [
    [
        'title' => 'Food Manufacturers',
        'image' => 'industry-food.png'
    ],
    [
        'title' => 'Nutrition Brands',
        'image' => 'industry-nutrition.png'
    ],
    [
        'title' => 'Pharmaceutical',
        'image' => 'industry-pharma.png'
    ],
    [
        'title' => 'Personal Care',
        'image' => 'industry-personal-care.png'
    ],
    [
        'title' => 'Industrial Applications',
        'image' => 'industry-industrial.png'
    ]
];
?>

<!-- Desktop Layout View -->
<div class="hidden xl:block w-full">
    <section class="w-full bg-[#FDFBF3] py-10 border-b border-gray-100">
      <div class="max-w-[1280px] mx-auto px-10">

        <!-- Header -->
        <div class="w-full flex justify-between items-end mb-16">
          <div>
            <div class="flex items-center gap-3 mb-4">
              <div class="w-[6px] h-[33px] bg-[#FF8D00] rounded-full"></div>
              <span class="font-montserrat font-normal text-[16px] lg:text-[22px] leading-[30px] lg:leading-[54px] tracking-[0.11em] text-[#5D3700] uppercase">
                <?php echo esc_html( $subheading ); ?>
              </span>
            </div>
            <h3 class="text-[36px] font-black text-black leading-tight tracking-tight">
              <?php echo wp_kses_post( $heading ); ?>
            </h3>
          </div>
          <?php if ( $button_link && $button_text ) : ?>
          <a href="<?php echo esc_url( $button_link ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-bold text-[16px] px-8 h-[48px] rounded-full flex items-center gap-2 shadow-md hover:shadow-xl hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none">
            <?php echo esc_html( $button_text ); ?>
            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </a>
          <?php endif; ?>
        </div>

        <!-- 5 Cards row with bottom-to-top slide hover animation -->
        <div class="grid grid-cols-5 gap-6">
          <?php foreach ( $industries as $industry ) : ?>
          <div style="background-color: #00A256; border-radius: 44px 8px 44px 8px;" class="p-3 flex flex-col justify-between shadow-md relative overflow-hidden group cursor-pointer h-[350px]">
            
            <!-- Standard Collapsed Base View -->
            <div style="border-radius: 34px 3px 34px 3px;" class="relative w-full h-[270px] overflow-hidden shrink-0">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/' . $industry['image'] ); ?>" alt="<?php echo esc_attr( $industry['title'] ); ?>" class="w-full h-full object-cover" loading="lazy">
            </div>
            <div class="py-2 text-center shrink-0">
              <h4 class="font-montserrat font-bold text-[15px] text-white tracking-tight"><?php echo esc_html( $industry['title'] ); ?></h4>
            </div>

            <!-- Slide-Up Hover Overlay (Orange Gradient Leaf Card - 1:1 Figma Match) -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#FF8D00] to-[#FFB457] p-6 flex flex-col justify-between z-20 transform translate-y-full group-hover:translate-y-0 transition-transform duration-500 ease-in-out text-white pointer-events-none group-hover:pointer-events-auto" style="border-radius: 44px 8px 44px 8px;">
              <!-- Background Leaf Line Watermark Pattern -->
              <svg class="absolute bottom-3 right-3 w-32 h-32 opacity-30 pointer-events-none text-white" viewBox="0 0 100 100" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M50 10 C20 40 20 80 50 90 C80 80 80 40 50 10 Z" />
                <path d="M50 10 L50 90" />
                <path d="M50 40 Q30 30 20 40" />
                <path d="M50 60 Q30 50 20 60" />
                <path d="M50 40 Q70 30 80 40" />
                <path d="M50 60 Q70 50 80 60" />
              </svg>

              <div class="relative z-10">
                <h4 class="font-montserrat font-bold text-[20px] text-white leading-tight mb-3">
                  <?php echo esc_html( $industry['title'] ); ?>
                </h4>
                <p class="font-montserrat font-medium text-[14px] text-white/95 leading-[22px]">
                  <?php echo esc_html( $industry['description'] ?? 'Reliable sourcing and manufacturing processes.' ); ?>
                </p>
              </div>
            </div>

          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
</div>

<!-- Mobile Layout View -->
<div class="xl:hidden w-full overflow-x-hidden">
    <section class="w-full bg-white py-12 px-6 flex flex-col items-center border-b border-gray-100">

      <!-- Heading -->
      <div class="flex items-center gap-3 mb-4">
        <div class="w-[5px] h-[28px] bg-[#FF8D00] rounded-full"></div>
        <span class="font-montserrat font-bold text-[14px] text-[#5D3700] uppercase tracking-wider">
          <?php echo esc_html( $subheading ); ?>
        </span>
      </div>

      <h3 class="text-[22px] font-bold text-center text-black leading-tight mb-10">
        <?php echo wp_kses_post( $heading ); ?>
      </h3>

      <!-- Cards -->
      <div class="grid grid-cols-2 gap-5 w-full max-w-[390px] mb-10">
        <?php foreach ( $industries as $index => $industry ) : ?>
            <?php 
            // The last card (Industrial Applications) spans 2 columns
            $is_last = ( $index === count($industries) - 1 );
            ?>
            <?php if ( $is_last ) : ?>
            <div class="col-span-2 flex justify-center">
              <div style="background-color: #00A256; border-radius: 42px 6px 42px 6px;" class="w-[185px] p-3 shadow-lg overflow-hidden flex flex-col justify-between">
            <?php else : ?>
            <div style="background-color: #00A256; border-radius: 42px 6px 42px 6px;" class="p-3 shadow-lg overflow-hidden flex flex-col justify-between">
            <?php endif; ?>
              <div style="border-radius: 32px 2px 32px 2px;" class="w-full h-[190px] overflow-hidden">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/' . $industry['image'] ); ?>" alt="<?php echo esc_attr( $industry['title'] ); ?>" class="w-full h-full object-cover" loading="lazy">
              </div>
              <div class="pt-3 pb-1 text-center">
                <h4 class="font-montserrat font-bold text-[14px] text-white leading-tight">
                  <?php echo esc_html( $industry['title'] ); ?>
                </h4>
              </div>
            </div>
            <?php if ( $is_last ) : ?>
            </div>
            <?php endif; ?>
        <?php endforeach; ?>
      </div>

      <!-- Button -->
      <?php if ( $button_link && $button_text ) : ?>
      <a href="<?php echo esc_url( $button_link ); ?>" class="h-[48px] px-8 rounded-full bg-[#FF8D00] hover:bg-[#E57E00] transition-all duration-300 shadow-md flex items-center gap-2 text-white font-montserrat font-bold text-[14px]">
        <?php echo esc_html( $button_text ); ?>
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </a>
      <?php endif; ?>

    </section>
</div>
