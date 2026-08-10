<?php
/**
 * Product Ecosystem Block Template.
 *
 * @param   array $block The block settings and attributes.
 */

$heading     = get_sub_field( 'heading' ) ?: 'OUR PRODUCT ECOSYSTEM';
$description = get_sub_field( 'description' ) ?: 'View our inventory of <strong class="text-black font-bold">rice-based ingredients engineered with care</strong> for texture, nutrition, functionality, and formulation versatility.';
$button_text = get_sub_field( 'button_text' ) ?: 'Explore Products';
$button_link_raw = get_sub_field( 'button_link' );
$button_link = ( $button_link_raw && '#' !== $button_link_raw ) ? $button_link_raw : site_url( '/product-category/food-beverage' );

// Query Products
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 6,
    'post_status'    => 'publish',
);
$products_query = new WP_Query( $args );

// If no products, we'll use a fallback structure so it doesn't break the layout.
$has_products = $products_query->have_posts();
?>

<!-- Desktop Layout View -->
<div class="hidden xl:block w-full">
    <section class="w-full bg-[#FDFBF3] py-10">
      <div class="max-w-[1280px] mx-auto px-10">

        <!-- Outer Border Container matching Figma -->
        <div class="relative w-full rounded-[36px] pt-12 pb-16 px-10 bg-white overflow-hidden p-12">

          <!-- Looper-1 decorative background -->
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="absolute left-0 top-0 pointer-events-none select-none opacity-100 object-contain object-left-top z-0">

          <!-- Header Content Block -->
          <div class="relative z-10 flex flex-col items-center text-center mb-10">
            <div class="flex items-center gap-3 mb-6 justify-center">
              <div class="w-[5px] h-[28px] bg-[#FF8D00] rounded-full"></div>
              <span class="font-montserrat font-normal text-[16px] lg:text-[22px] leading-[30px] lg:leading-[54px] tracking-[0.11em] text-[#5D3700] uppercase text-center">
                <?php echo esc_html( $heading ); ?>
              </span>
            </div>

            <!-- Selector Tabs -->
            <div class="flex items-center gap-4 justify-center mb-6">
              <!-- Active: Food & Beverage -->
              <button id="tab-food-desktop" class="flex items-center gap-4 bg-white text-[#FF8D00] font-montserrat font-bold text-[16px] leading-[29px] tracking-normal transition duration-200 focus:outline-none select-none">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/food-icon.svg' ); ?>" alt="Food & Beverage" class="w-10 h-10 shrink-0">
                Food &amp; Beverage
              </button>

              <!-- Inactive: Cosmetics & Personal Care -->
              <button id="tab-cosmetics-desktop" class="flex items-center gap-4 bg-white text-black/50 hover:text-black font-montserrat font-bold text-[16px] leading-[29px] tracking-normal transition duration-200 focus:outline-none select-none">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/cosmitics-personal-icon.svg' ); ?>" alt="Cosmetics & Personal Care" class="w-10 h-10 shrink-0">
                Cosmetics &amp; Personal Care
              </button>
            </div>

            <p class="text-center font-montserrat font-medium text-[16px] text-black/70 leading-[26px] max-w-[650px] mx-auto">
              <?php echo wp_kses_post( $description ); ?>
            </p>
          </div>

          <!-- Product Cards Track Wrapper (Swiper.js Powered) -->
          <div class="relative z-10 max-w-full mx-auto mb-12" id="product-cards-slider-desktop">
            
            <!-- Swiper 1: Food & Beverage -->
            <div id="cards-track-food" class="swiper product-swiper-food w-full overflow-hidden py-2">
              <div class="swiper-wrapper">
                <?php
                $food_query = new WP_Query( array(
                    'post_type'      => 'product',
                    'posts_per_page' => 8,
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'slug',
                            'terms'    => 'food-beverage',
                        ),
                    ),
                ) );
                if ( $food_query->have_posts() ) :
                    while ( $food_query->have_posts() ) : $food_query->the_post();
                        $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ?: get_template_directory_uri() . '/public/assets/product-rice-starch.png';
                        $excerpt   = get_the_excerpt() ?: 'Clean-label starch with superior texture, stability, and process performance.';
                ?>
                <div class="swiper-slide !w-[380px]">
                  <div class="w-[380px] h-[210px] bg-[#FDFBF3] rounded-[16px] border border-[#EFE9DD] shadow-sm p-4 flex items-center gap-4 hover:shadow-md hover:border-[#FF8D00]/40 transition-all duration-200">
                    <div class="w-[120px] h-[170px] shrink-0 bg-white rounded-tl-[6px] rounded-br-[6px] p-2 flex items-center justify-center border border-gray-100 shadow-sm overflow-hidden">
                      <img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-contain">
                    </div>

                    <div class="w-[220px] h-[170px] flex flex-col justify-between py-1">
                      <div>
                        <h4 class="font-montserrat font-bold text-[22px] leading-[31px] tracking-normal text-[#5D3700] mb-1"><?php the_title(); ?></h4>
                        <p class="font-montserrat font-normal text-[14px] leading-[20px] text-black/75 mb-3 line-clamp-2">
                          <?php echo esc_html( $excerpt ); ?>
                        </p>
                        <div class="inline-block bg-white border border-[#E8E2D5] px-3 py-1 rounded-full font-montserrat font-medium text-[13px] leading-[20px] text-black/80 text-center mb-2">
                          Food • Bakery
                        </div>
                      </div>

                      <a href="<?php the_permalink(); ?>" class="group font-montserrat font-bold text-[16px] leading-[20px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1.5 transition duration-150 w-fit select-none">
                        View Product
                        <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5] transform group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24">
                          <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Static HTML Fallback Cards for Food & Beverage
                    $fallback_food = array(
                        array('title' => 'Rice Starch', 'desc' => 'Clean-label starch with superior texture, stability, and process performance.', 'link' => site_url('/product/rice-starch'), 'img' => 'product-rice-starch.png'),
                        array('title' => 'Rice Protein', 'desc' => 'Plant-based high-purity protein ideal for sports nutrition & bakery.', 'link' => site_url('/product-category/food-beverage'), 'img' => 'product-rice-protein.png'),
                        array('title' => 'Rice Maltodextrin', 'desc' => 'Premium bulking agent providing smooth mouthfeel and solubility.', 'link' => site_url('/product-category/food-beverage'), 'img' => 'product-rice-maltodextrin.png'),
                    );
                    foreach ( $fallback_food as $item ) :
                ?>
                <div class="swiper-slide !w-[380px]">
                  <div class="w-[380px] h-[210px] bg-[#FDFBF3] rounded-[16px] border border-[#EFE9DD] shadow-sm p-4 flex items-center gap-4 hover:shadow-md hover:border-[#FF8D00]/40 transition-all duration-200">
                    <div class="w-[120px] h-[170px] shrink-0 bg-white rounded-tl-[6px] rounded-br-[6px] p-2 flex items-center justify-center border border-gray-100 shadow-sm overflow-hidden">
                      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/' . $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="w-full h-full object-contain">
                    </div>

                    <div class="w-[220px] h-[170px] flex flex-col justify-between py-1">
                      <div>
                        <h4 class="font-montserrat font-bold text-[22px] leading-[31px] tracking-normal text-[#5D3700] mb-1"><?php echo esc_html( $item['title'] ); ?></h4>
                        <p class="font-montserrat font-normal text-[14px] leading-[20px] text-black/75 mb-3 line-clamp-2">
                          <?php echo esc_html( $item['desc'] ); ?>
                        </p>
                        <div class="inline-block bg-white border border-[#E8E2D5] px-3 py-1 rounded-full font-montserrat font-medium text-[13px] leading-[20px] text-black/80 text-center mb-2">
                          Food • Bakery
                        </div>
                      </div>

                      <a href="<?php echo esc_url( $item['link'] ); ?>" class="group font-montserrat font-bold text-[16px] leading-[20px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1.5 transition duration-150 w-fit select-none">
                        View Product
                        <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5] transform group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24">
                          <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <?php
                    endforeach;
                endif;
                ?>
              </div>
            </div>

            <!-- Swiper 2: Cosmetics & Personal Care (Hidden by Default) -->
            <div id="cards-track-cosmetics" class="swiper product-swiper-cosmetics w-full overflow-hidden py-2 !hidden">
              <div class="swiper-wrapper">
                <?php
                $cosmetics_query = new WP_Query( array(
                    'post_type'      => 'product',
                    'posts_per_page' => 8,
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'slug',
                            'terms'    => 'cosmetics-personal-care',
                        ),
                    ),
                ) );
                if ( $cosmetics_query->have_posts() ) :
                    while ( $cosmetics_query->have_posts() ) : $cosmetics_query->the_post();
                        $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ?: get_template_directory_uri() . '/public/assets/food-rice.png';
                        $excerpt   = get_the_excerpt() ?: 'Natural biopolymer texturizer providing sensory elegance and silky finish.';
                ?>
                <div class="swiper-slide !w-[380px]">
                  <div class="w-[380px] h-[210px] bg-[#FDFBF3] rounded-[16px] border border-[#EFE9DD] shadow-sm p-4 flex items-center gap-4 hover:shadow-md hover:border-[#00A256]/40 transition-all duration-200">
                    <div class="w-[120px] h-[170px] shrink-0 bg-white rounded-tl-[6px] rounded-br-[6px] p-2 flex items-center justify-center border border-gray-100 shadow-sm overflow-hidden">
                      <img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-contain">
                    </div>

                    <div class="w-[220px] h-[170px] flex flex-col justify-between py-1">
                      <div>
                        <h4 class="font-montserrat font-bold text-[22px] leading-[31px] tracking-normal text-[#5D3700] mb-1"><?php the_title(); ?></h4>
                        <p class="font-montserrat font-normal text-[14px] leading-[20px] text-black/75 mb-3 line-clamp-2">
                          <?php echo esc_html( $excerpt ); ?>
                        </p>
                        <div class="inline-block bg-white border border-[#E8E2D5] px-3 py-1 rounded-full font-montserrat font-medium text-[13px] leading-[20px] text-black/80 text-center mb-2">
                          Cosmetics • Skincare
                        </div>
                      </div>

                      <a href="<?php the_permalink(); ?>" class="group font-montserrat font-bold text-[16px] leading-[20px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1.5 transition duration-150 w-fit select-none">
                        View Product
                        <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5] transform group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24">
                          <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Static HTML Fallback Cards for Cosmetics & Personal Care
                    $fallback_cosmetics = array(
                        array('title' => 'Rice Biopolymer', 'desc' => 'Natural biopolymer texturizer providing sensory elegance and silky finish.', 'link' => site_url('/product-category/cosmetics-personal-care'), 'img' => 'food-rice.png'),
                        array('title' => 'Hydrolyzed Rice Protein', 'desc' => 'Bio-available amino acid complex for hair & skincare conditioning.', 'link' => site_url('/product-category/cosmetics-personal-care'), 'img' => 'product-rice-starch.png'),
                    );
                    foreach ( $fallback_cosmetics as $item ) :
                ?>
                <div class="swiper-slide !w-[380px]">
                  <div class="w-[380px] h-[210px] bg-[#FDFBF3] rounded-[16px] border border-[#EFE9DD] shadow-sm p-4 flex items-center gap-4 hover:shadow-md hover:border-[#00A256]/40 transition-all duration-200">
                    <div class="w-[120px] h-[170px] shrink-0 bg-white rounded-tl-[6px] rounded-br-[6px] p-2 flex items-center justify-center border border-gray-100 shadow-sm overflow-hidden">
                      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/' . $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="w-full h-full object-contain">
                    </div>

                    <div class="w-[220px] h-[170px] flex flex-col justify-between py-1">
                      <div>
                        <h4 class="font-montserrat font-bold text-[22px] leading-[31px] tracking-normal text-[#5D3700] mb-1"><?php echo esc_html( $item['title'] ); ?></h4>
                        <p class="font-montserrat font-normal text-[14px] leading-[20px] text-black/75 mb-3 line-clamp-2">
                          <?php echo esc_html( $item['desc'] ); ?>
                        </p>
                        <div class="inline-block bg-white border border-[#E8E2D5] px-3 py-1 rounded-full font-montserrat font-medium text-[13px] leading-[20px] text-black/80 text-center mb-2">
                          Cosmetics • Skincare
                        </div>
                      </div>

                      <a href="<?php echo esc_url( $item['link'] ); ?>" class="group font-montserrat font-bold text-[16px] leading-[20px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1.5 transition duration-150 w-fit select-none">
                        View Product
                        <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5] transform group-hover:translate-x-1 transition-transform" viewBox="0 0 24 24">
                          <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <?php
                    endforeach;
                endif;
                ?>
              </div>
            </div>

          </div>
          
          <div class="relative z-10 flex items-center mt-6">
            
            <!-- Left spacer to balance the arrows and keep button truly centered -->
            <div class="flex-1"></div>

            <!-- Explore Products button — pill shaped with standardized gradient hover -->
            <a href="<?php echo esc_url( site_url('/product-category/food-beverage') ); ?>" id="explore-products-btn-desktop"
              class="group shrink-0 flex items-center justify-center gap-[10px] bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-montserrat font-bold text-[15px] hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none shadow-md hover:shadow-xl px-8 h-[46px] rounded-full">
              <?php echo esc_html( $button_text ); ?>
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>

            <!-- Right: Carousel circle arrows -->
            <div class="flex-1 flex items-center justify-end gap-3 select-none">
              <button id="carousel-prev-desktop" aria-label="Previous Products"
                class="flex items-center justify-center border border-[#FF8D00] text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white transition duration-200 focus:outline-none cursor-pointer"
                style="width:45px; height:45px; border-radius:50%;">
                <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                  <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
              </button>
              <button id="carousel-next-desktop" aria-label="Next Products"
                class="flex items-center justify-center border border-[#FF8D00] text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white transition duration-200 focus:outline-none cursor-pointer"
                style="width:45px; height:45px; border-radius:50%;">
                <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </button>
            </div>

          </div>

        </div>
      </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const foodUrl = "<?php echo esc_url( site_url('/product-category/food-beverage') ); ?>";
    const cosmeticsUrl = "<?php echo esc_url( site_url('/product-category/cosmetics-personal-care') ); ?>";

    const exploreBtnDesktop = document.getElementById('explore-products-btn-desktop');
    const exploreBtnMobile = document.getElementById('explore-products-btn-mobile');

    function updateExploreButton(url) {
        if (exploreBtnDesktop) exploreBtnDesktop.href = url;
        if (exploreBtnMobile) exploreBtnMobile.href = url;
    }

    let foodSwiper = null;
    let cosmeticsSwiper = null;

    if (typeof Swiper !== 'undefined') {
        try {
            foodSwiper = new Swiper('.product-swiper-food', {
                slidesPerView: 'auto',
                spaceBetween: 20,
                loop: false,
                grabCursor: true,
                navigation: {
                    nextEl: '#carousel-next-desktop',
                    prevEl: '#carousel-prev-desktop',
                },
            });

            cosmeticsSwiper = new Swiper('.product-swiper-cosmetics', {
                slidesPerView: 'auto',
                spaceBetween: 20,
                loop: false,
                grabCursor: true,
                navigation: {
                    nextEl: '#carousel-next-desktop',
                    prevEl: '#carousel-prev-desktop',
                },
            });
        } catch (err) {
            console.error('Swiper init error:', err);
        }
    }

    const foodTabDesktop = document.getElementById('tab-food-desktop');
    const cosmeticsTabDesktop = document.getElementById('tab-cosmetics-desktop');
    const foodTabMobile = document.getElementById('tab-food-mobile');
    const cosmeticsTabMobile = document.getElementById('tab-cosmetics-mobile');

    const foodTrack = document.getElementById('cards-track-food');
    const cosmeticsTrack = document.getElementById('cards-track-cosmetics');
    const mobileCardsFood = document.getElementById('mobile-cards-food');
    const mobileCardsCosmetics = document.getElementById('mobile-cards-cosmetics');

    function selectFoodTab(e) {
        if (e) e.preventDefault();
        
        // Desktop Tab Styles
        if (foodTabDesktop) foodTabDesktop.className = 'flex items-center gap-4 bg-white text-[#FF8D00] font-montserrat font-bold text-[16px] leading-[29px] tracking-normal transition duration-200 focus:outline-none select-none cursor-pointer';
        if (cosmeticsTabDesktop) cosmeticsTabDesktop.className = 'flex items-center gap-4 bg-white text-black/50 hover:text-black font-montserrat font-bold text-[16px] leading-[29px] tracking-normal transition duration-200 focus:outline-none select-none cursor-pointer';
        
        // Mobile Pill Styles
        if (foodTabMobile) {
            foodTabMobile.className = 'w-full h-[52px] bg-white rounded-full flex items-center justify-start px-4 gap-3 text-[#FF8D00] font-montserrat font-bold text-[15px] select-none shadow-[0_2px_12px_rgba(0,0,0,0.04)] cursor-pointer';
        }
        if (cosmeticsTabMobile) {
            cosmeticsTabMobile.className = 'w-full h-[52px] bg-white rounded-full shadow-sm flex items-center justify-start px-4 gap-3 text-[#5D3700] font-montserrat font-semibold text-[15px] select-none border border-gray-100 cursor-pointer';
        }

        // Desktop Cards Toggle
        if (foodTrack && cosmeticsTrack) {
            foodTrack.classList.remove('!hidden');
            foodTrack.style.display = 'block';
            cosmeticsTrack.classList.add('!hidden');
            cosmeticsTrack.style.display = 'none';
            if (foodSwiper && foodSwiper.update) foodSwiper.update();
        }

        // Mobile Cards Toggle
        if (mobileCardsFood && mobileCardsCosmetics) {
            mobileCardsFood.classList.remove('!hidden');
            mobileCardsFood.style.display = 'flex';
            mobileCardsCosmetics.classList.add('!hidden');
            mobileCardsCosmetics.style.display = 'none';
        }

        updateExploreButton(foodUrl);
    }

    function selectCosmeticsTab(e) {
        if (e) e.preventDefault();

        // Desktop Tab Styles
        if (cosmeticsTabDesktop) cosmeticsTabDesktop.className = 'flex items-center gap-4 bg-white text-[#FF8D00] font-montserrat font-bold text-[16px] leading-[29px] tracking-normal transition duration-200 focus:outline-none select-none cursor-pointer';
        if (foodTabDesktop) foodTabDesktop.className = 'flex items-center gap-4 bg-white text-black/50 hover:text-black font-montserrat font-bold text-[16px] leading-[29px] tracking-normal transition duration-200 focus:outline-none select-none cursor-pointer';
        
        // Mobile Pill Styles
        if (cosmeticsTabMobile) {
            cosmeticsTabMobile.className = 'w-full h-[52px] bg-white rounded-full flex items-center justify-start px-4 gap-3 text-[#FF8D00] font-montserrat font-bold text-[15px] select-none shadow-[0_2px_12px_rgba(0,0,0,0.04)] cursor-pointer';
        }
        if (foodTabMobile) {
            foodTabMobile.className = 'w-full h-[52px] bg-white rounded-full shadow-sm flex items-center justify-start px-4 gap-3 text-[#5D3700] font-montserrat font-semibold text-[15px] select-none border border-gray-100 cursor-pointer';
        }

        // Desktop Cards Toggle
        if (foodTrack && cosmeticsTrack) {
            cosmeticsTrack.classList.remove('!hidden');
            cosmeticsTrack.style.display = 'block';
            foodTrack.classList.add('!hidden');
            foodTrack.style.display = 'none';
            if (cosmeticsSwiper && cosmeticsSwiper.update) cosmeticsSwiper.update();
        }

        // Mobile Cards Toggle
        if (mobileCardsFood && mobileCardsCosmetics) {
            mobileCardsCosmetics.classList.remove('!hidden');
            mobileCardsCosmetics.style.display = 'flex';
            mobileCardsFood.classList.add('!hidden');
            mobileCardsFood.style.display = 'none';
        }

        updateExploreButton(cosmeticsUrl);
    }

    if (foodTabDesktop) foodTabDesktop.addEventListener('click', selectFoodTab);
    if (cosmeticsTabDesktop) cosmeticsTabDesktop.addEventListener('click', selectCosmeticsTab);
    if (foodTabMobile) foodTabMobile.addEventListener('click', selectFoodTab);
    if (cosmeticsTabMobile) cosmeticsTabMobile.addEventListener('click', selectCosmeticsTab);
});
</script>

<!-- Mobile Layout View -->
<div class="xl:hidden w-full overflow-x-hidden">
    <section class="w-full bg-white py-12 px-6 flex flex-col items-center border-b border-gray-100 relative overflow-hidden">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="absolute inset-0 w-full h-full object-cover opacity-15 pointer-events-none z-0">

      <div class="relative z-10 w-full max-w-[340px] flex flex-col items-center text-center">
        <!-- Badge Header -->
        <div class="flex items-center gap-3 mb-6 self-start">
          <div class="w-[5px] h-[28px] bg-[#FF8D00] rounded-full"></div>
          <span class="font-montserrat font-bold text-[14px] text-starizo-brown uppercase tracking-wider">
              <?php echo esc_html( $heading ); ?>
          </span>
        </div>

        <!-- Pill Tabs Selector Stack (Food & Beverage active) -->
        <div class="flex flex-col gap-3 w-full mb-6">
          <!-- Active Food & Beverage Pill -->
          <button id="tab-food-mobile" class="w-full h-[52px] bg-white rounded-full flex items-center justify-start px-4 gap-3 text-[#FF8D00] font-montserrat font-bold text-[15px] select-none shadow-[0_2px_12px_rgba(0,0,0,0.04)] cursor-pointer">
            <span class="w-9 h-9 rounded-full flex items-center justify-center shrink-0">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/food-icon.svg' ); ?>" alt="" class="w-10 h-10">
            </span>
            <span>Food &amp; Beverage</span>
          </button>

          <!-- Inactive Cosmetics & Personal Care Pill -->
          <button id="tab-cosmetics-mobile" class="w-full h-[52px] bg-white rounded-full shadow-sm flex items-center justify-start px-4 gap-3 text-[#5D3700] font-montserrat font-semibold text-[15px] select-none border border-gray-100 cursor-pointer">
            <span class="w-9 h-9 rounded-full border-2 border-gray-200 flex items-center justify-center shrink-0">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/cosmitics-personal-icon.svg' ); ?>" alt="" class="w-10 h-10">
            </span>
            <span>Cosmetics &amp; Personal Care</span>
          </button>
        </div>

        <p class="font-montserrat text-[14px] text-black leading-[22px] mb-8 text-center max-w-[320px]">
            <?php echo wp_kses_post( $description ); ?>
        </p>

        <!-- Food & Beverage Mobile Cards Container -->
        <div id="mobile-cards-food" class="w-full flex flex-col gap-4 mb-8">
          <?php
          $mobile_food_query = new WP_Query( array(
              'post_type'      => 'product',
              'posts_per_page' => 4,
              'tax_query'      => array(
                  array(
                      'taxonomy' => 'product_cat',
                      'field'    => 'slug',
                      'terms'    => 'food-beverage',
                  ),
              ),
          ) );
          if ( $mobile_food_query->have_posts() ) :
              while ( $mobile_food_query->have_posts() ) : $mobile_food_query->the_post();
                  $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ?: get_template_directory_uri() . '/public/assets/product-rice-starch.png';
                  $excerpt   = get_the_excerpt() ?: 'Clean-label starch with superior texture, stability, and process performance.';
          ?>
          <div class="w-full bg-[#FDFBF3] rounded-[20px] border border-[#EFE9DD] shadow-sm p-3.5 flex flex-row items-center gap-3.5 text-left">
            <div class="w-[125px] min-w-[125px] h-[175px] shrink-0 bg-white rounded-tl-[6px] rounded-br-[6px] border border-gray-100 shadow-sm overflow-hidden p-2 flex items-center justify-center">
              <img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-contain">
            </div>

            <div class="flex-1 flex flex-col justify-between h-[175px] py-1 pr-2">
              <div>
                <h4 class="font-montserrat font-bold text-[18px] sm:text-[22px] leading-[26px] sm:leading-[31px] tracking-normal text-[#5D3700] mb-1.5"><?php the_title(); ?></h4>
                <p class="font-montserrat text-[12px] font-medium text-black/70 leading-[17px] mb-3 line-clamp-2">
                  <?php echo esc_html( $excerpt ); ?>
                </p>
                <div class="inline-block bg-white border border-[#E8E2D5] px-2.5 py-1 rounded-full font-montserrat font-medium text-[11px] text-black/80 mb-3 shadow-xs">
                  Food • Bakery
                </div>
              </div>

              <a href="<?php the_permalink(); ?>" class="font-montserrat font-bold text-[14px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1 transition duration-150 select-none">
                View Product
                <svg class="w-3.5 h-3.5 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </a>
            </div>
          </div>
          <?php
              endwhile;
              wp_reset_postdata();
          else :
              // Fallback cards for Food & Beverage mobile
              $m_fallback_food = array(
                  array('title' => 'Rice Glucose Syrup', 'desc' => 'Clean-label Rice Glucose Syrup with superior texture...', 'link' => site_url('/product/rice-starch'), 'img' => 'product-rice-starch.png'),
                  array('title' => 'IMO Powder', 'desc' => 'Clean-label IMO Powder with superior texture, stability...', 'link' => site_url('/product-category/food-beverage'), 'img' => 'product-rice-protein.png'),
                  array('title' => 'Rice Starch', 'desc' => 'Clean-label starch with superior texture, stability...', 'link' => site_url('/product/rice-starch'), 'img' => 'product-rice-maltodextrin.png'),
              );
              foreach ( $m_fallback_food as $item ) :
          ?>
          <div class="w-full bg-[#FDFBF3] rounded-[20px] border border-[#EFE9DD] shadow-sm p-3.5 flex flex-row items-center gap-3.5 text-left">
            <div class="w-[125px] min-w-[125px] h-[175px] shrink-0 bg-white rounded-tl-[6px] rounded-br-[6px] border border-gray-100 shadow-sm overflow-hidden p-2 flex items-center justify-center">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/' . $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="w-full h-full object-contain">
            </div>

            <div class="flex-1 flex flex-col justify-between h-[175px] py-1 pr-2">
              <div>
                <h4 class="font-montserrat font-bold text-[18px] sm:text-[22px] leading-[26px] sm:leading-[31px] tracking-normal text-[#5D3700] mb-1.5"><?php echo esc_html( $item['title'] ); ?></h4>
                <p class="font-montserrat text-[12px] font-medium text-black/70 leading-[17px] mb-3 line-clamp-2">
                  <?php echo esc_html( $item['desc'] ); ?>
                </p>
                <div class="inline-block bg-white border border-[#E8E2D5] px-2.5 py-1 rounded-full font-montserrat font-medium text-[11px] text-black/80 mb-3 shadow-xs">
                  Food • Bakery
                </div>
              </div>

              <a href="<?php echo esc_url( $item['link'] ); ?>" class="font-montserrat font-bold text-[14px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1 transition duration-150 select-none">
                View Product
                <svg class="w-3.5 h-3.5 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </a>
            </div>
          </div>
          <?php
              endforeach;
          endif;
          ?>
        </div>

        <!-- Cosmetics & Personal Care Mobile Cards Container (Hidden by Default) -->
        <div id="mobile-cards-cosmetics" class="w-full flex flex-col gap-4 mb-8 !hidden">
          <?php
          $mobile_cosmetics_query = new WP_Query( array(
              'post_type'      => 'product',
              'posts_per_page' => 4,
              'tax_query'      => array(
                  array(
                      'taxonomy' => 'product_cat',
                      'field'    => 'slug',
                      'terms'    => 'cosmetics-personal-care',
                  ),
              ),
          ) );
          if ( $mobile_cosmetics_query->have_posts() ) :
              while ( $mobile_cosmetics_query->have_posts() ) : $mobile_cosmetics_query->the_post();
                  $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ?: get_template_directory_uri() . '/public/assets/food-rice.png';
                  $excerpt   = get_the_excerpt() ?: 'Natural biopolymer texturizer providing sensory elegance and silky finish.';
          ?>
          <div class="w-full bg-[#FDFBF3] rounded-[20px] border border-[#EFE9DD] shadow-sm p-3.5 flex flex-row items-center gap-3.5 text-left">
            <div class="w-[125px] min-w-[125px] h-[175px] shrink-0 bg-white rounded-tl-[6px] rounded-br-[6px] border border-gray-100 shadow-sm overflow-hidden p-2 flex items-center justify-center">
              <img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-contain">
            </div>

            <div class="flex-1 flex flex-col justify-between h-[175px] py-1 pr-2">
              <div>
                <h4 class="font-montserrat font-bold text-[18px] sm:text-[22px] leading-[26px] sm:leading-[31px] tracking-normal text-[#5D3700] mb-1.5"><?php the_title(); ?></h4>
                <p class="font-montserrat text-[12px] font-medium text-black/70 leading-[17px] mb-3 line-clamp-2">
                  <?php echo esc_html( $excerpt ); ?>
                </p>
                <div class="inline-block bg-white border border-[#E8E2D5] px-2.5 py-1 rounded-full font-montserrat font-medium text-[11px] text-black/80 mb-3 shadow-xs">
                  Cosmetics • Skincare
                </div>
              </div>

              <a href="<?php the_permalink(); ?>" class="font-montserrat font-bold text-[14px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1 transition duration-150 select-none">
                View Product
                <svg class="w-3.5 h-3.5 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </a>
            </div>
          </div>
          <?php
              endwhile;
              wp_reset_postdata();
          else :
              // Fallback cards for Cosmetics & Personal Care mobile
              $m_fallback_cosmetics = array(
                  array('title' => 'Bio Rice Powder', 'desc' => 'Natural biopolymer texturizer providing...', 'link' => site_url('/product-category/cosmetics-personal-care'), 'img' => 'food-rice.png'),
                  array('title' => 'Cosmetic Rice Starch', 'desc' => 'Natural biopolymer texturizer providing...', 'link' => site_url('/product-category/cosmetics-personal-care'), 'img' => 'product-rice-starch.png'),
              );
              foreach ( $m_fallback_cosmetics as $item ) :
          ?>
          <div class="w-full bg-[#FDFBF3] rounded-[20px] border border-[#EFE9DD] shadow-sm p-3.5 flex flex-row items-center gap-3.5 text-left">
            <div class="w-[125px] min-w-[125px] h-[175px] shrink-0 bg-white rounded-tl-[6px] rounded-br-[6px] border border-gray-100 shadow-sm overflow-hidden p-2 flex items-center justify-center">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/' . $item['img'] ); ?>" alt="<?php echo esc_attr( $item['title'] ); ?>" class="w-full h-full object-contain">
            </div>

            <div class="flex-1 flex flex-col justify-between h-[175px] py-1 pr-2">
              <div>
                <h4 class="font-montserrat font-bold text-[18px] sm:text-[22px] leading-[26px] sm:leading-[31px] tracking-normal text-[#5D3700] mb-1.5"><?php echo esc_html( $item['title'] ); ?></h4>
                <p class="font-montserrat text-[12px] font-medium text-black/70 leading-[17px] mb-3 line-clamp-2">
                  <?php echo esc_html( $item['desc'] ); ?>
                </p>
                <div class="inline-block bg-white border border-[#E8E2D5] px-2.5 py-1 rounded-full font-montserrat font-medium text-[11px] text-black/80 mb-3 shadow-xs">
                  Cosmetics • Skincare
                </div>
              </div>

              <a href="<?php echo esc_url( $item['link'] ); ?>" class="font-montserrat font-bold text-[14px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1 transition duration-150 select-none">
                View Product
                <svg class="w-3.5 h-3.5 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </a>
            </div>
          </div>
          <?php
              endforeach;
          endif;
          ?>
        </div>

        <a href="<?php echo esc_url( site_url('/product-category/food-beverage') ); ?>" id="explore-products-btn-mobile" class="h-[46px] bg-white border-2 border-[#FF8D00] hover:bg-[#FF8D00] hover:text-white text-[#FF8D00] font-montserrat font-bold text-[14px] px-8 rounded-full flex items-center justify-center gap-2 select-none shadow-sm transition duration-200 mt-4">
          <?php echo esc_html( $button_text ); ?>
          <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </a>

      </div>
    </section>
</div>
