<?php
/**
 * Product Ecosystem Block Template.
 *
 * @param   array $block The block settings and attributes.
 */

$heading     = get_sub_field( 'heading' ) ?: 'OUR PRODUCT ECOSYSTEM';
$description = get_sub_field( 'description' ) ?: 'View our inventory of <strong class="text-black font-bold">rice-based ingredients engineered with care</strong> for texture, nutrition, functionality, and formulation versatility.';
$button_text = get_sub_field( 'button_text' ) ?: 'Explore Products';
$button_link = get_sub_field( 'button_link' ) ?: '#';

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
    <section class="w-full bg-[#FDFBF3] py-24">
      <div class="max-w-[1280px] mx-auto px-10">

        <!-- Outer Border Container matching Figma -->
        <div class="relative w-full rounded-[36px] pt-12 pb-16 px-10 bg-white overflow-hidden p-12">

          <!-- Looper-1 decorative background -->
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="absolute left-0 top-0 pointer-events-none select-none opacity-100 object-contain object-left-top z-0">

          <!-- Header Content Block -->
          <div class="relative z-10 flex flex-col items-center text-center mb-10">
            <div class="flex items-center gap-3 mb-6 justify-center">
              <div class="w-[5px] h-[28px] bg-[#FF8D00] rounded-full"></div>
              <span class="font-montserrat font-bold text-[15px] text-[#5D3700] uppercase tracking-[0.14em]">
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

          <!-- Product Cards Track Wrapper -->
          <div class="relative z-10 max-w-full mx-auto overflow-hidden mb-12" id="product-cards-slider-desktop">
            <div id="cards-track-desktop" class="flex gap-5 overflow-x-auto py-1 hide-scrollbar">
              
              <?php
              if ( $has_products ) :
                  while ( $products_query->have_posts() ) : $products_query->the_post();
                      $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ?: get_template_directory_uri() . '/public/assets/product-rice-starch.png';
                      $excerpt   = get_the_excerpt() ?: 'Clean-label starch with superior texture, stability, and process performance.';
              ?>
              <div class="w-[380px] min-w-[380px] max-w-[380px] h-[210px] shrink-0 bg-[#FDFBF3] rounded-[16px] border border-[#EFE9DD] shadow-sm p-4 flex items-center gap-4">
                <div class="w-[120px] h-[170px] shrink-0 bg-white rounded-tl-[6px] rounded-br-[6px] p-2 flex items-center justify-center border border-gray-100 shadow-sm overflow-hidden">
                  <img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-contain">
                </div>

                <div class="w-[220px] min-w-[220px] max-w-[220px] h-[170px] flex flex-col justify-between py-1">
                  <div>
                    <h4 class="font-montserrat font-bold text-[20px] leading-[28px] text-[#222222] mb-1"><?php the_title(); ?></h4>
                    <p class="font-montserrat font-normal text-[14px] leading-[20px] text-black/75 mb-3 line-clamp-2">
                      <?php echo esc_html( $excerpt ); ?>
                    </p>
                    <div class="inline-block bg-white border border-[#E8E2D5] px-3 py-1 rounded-full font-montserrat font-medium text-[13px] leading-[20px] text-black/80 text-center mb-2">
                      Food • Bakery
                    </div>
                  </div>

                  <a href="<?php the_permalink(); ?>" class="font-montserrat font-bold text-[16px] leading-[20px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1.5 transition duration-150 w-fit select-none">
                    View Product
                    <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                      <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                  </a>
                </div>
              </div>
              <?php
                  endwhile;
                  wp_reset_postdata();
              endif;
              ?>
            </div>
          </div>
          
          <div class="relative z-10 flex items-center mt-6">
            
            <!-- Left spacer to balance the arrows and keep button truly centered -->
            <div class="flex-1"></div>

            <!-- Explore Products button — pill shaped -->
            <a href="<?php echo esc_url( $button_link ); ?>"
              class="shrink-0 flex items-center justify-center gap-[10px] border border-[#FF8D00] text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white font-montserrat font-bold text-[15px] transition duration-200 select-none bg-white shadow-sm"
              style="width:222px; height:45px; padding:12px 17px; border-radius:42px;">
              <?php echo esc_html( $button_text ); ?>
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </a>

            <!-- Right: Carousel circle arrows -->
            <div class="flex-1 flex items-center justify-end gap-3 select-none">
              <button id="carousel-prev-desktop" aria-label="Previous Products"
                class="flex items-center justify-center border border-[#FF8D00] text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white transition duration-200 focus:outline-none"
                style="width:45px; height:45px; border-radius:50%;">
                <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                  <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
              </button>
              <button id="carousel-next-desktop" aria-label="Next Products"
                class="flex items-center justify-center border border-[#FF8D00] text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white transition duration-200 focus:outline-none"
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
    // ─── Product Carousel Native Smooth Scroll ──────────────────────────
    const track = document.getElementById('cards-track-desktop');
    const prevBtn = document.getElementById('carousel-prev-desktop');
    const nextBtn = document.getElementById('carousel-next-desktop');

    if (track) {
        if (nextBtn) {
            nextBtn.addEventListener('click', (e) => {
                e.preventDefault();
                track.scrollBy({ left: 400, behavior: 'smooth' });
            });
        }

        if (prevBtn) {
            prevBtn.addEventListener('click', (e) => {
                e.preventDefault();
                track.scrollBy({ left: -400, behavior: 'smooth' });
            });
        }
    }

    // ─── Tab Switcher Active Styling ────────────────────────────────────
    const foodTab = document.getElementById('tab-food-desktop');
    const cosmeticsTab = document.getElementById('tab-cosmetics-desktop');

    if (foodTab && cosmeticsTab) {
        foodTab.addEventListener('click', () => {
            foodTab.className = 'flex items-center gap-4 bg-white text-[#FF8D00] font-montserrat font-bold text-[16px] leading-[29px] tracking-normal transition duration-200 focus:outline-none select-none';
            cosmeticsTab.className = 'flex items-center gap-4 bg-white text-black/50 hover:text-black font-montserrat font-bold text-[16px] leading-[29px] tracking-normal transition duration-200 focus:outline-none select-none';
        });

        cosmeticsTab.addEventListener('click', () => {
            cosmeticsTab.className = 'flex items-center gap-4 bg-white text-[#FF8D00] font-montserrat font-bold text-[16px] leading-[29px] tracking-normal transition duration-200 focus:outline-none select-none';
            foodTab.className = 'flex items-center gap-4 bg-white text-black/50 hover:text-black font-montserrat font-bold text-[16px] leading-[29px] tracking-normal transition duration-200 focus:outline-none select-none';
        });
    }
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
          <button class="w-full h-[52px] bg-white rounded-full flex items-center justify-start px-4 gap-3 text-[#FF8D00] font-montserrat font-bold text-[15px] select-none shadow-[0_2px_12px_rgba(0,0,0,0.04)]">
            <span class="w-9 h-9 rounded-full flex items-center justify-center shrink-0">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/food-icon.svg' ); ?>" alt="" class="w-10 h-10">
            </span>
            <span>Food &amp; Beverage</span>
          </button>

          <!-- Inactive Cosmetics & Personal Care Pill -->
          <button class="w-full h-[52px] bg-white rounded-full shadow-sm flex items-center justify-start px-4 gap-3 text-[#5D3700] font-montserrat font-semibold text-[15px] select-none border border-gray-100">
            <span class="w-9 h-9 rounded-full border-2 border-gray-200 flex items-center justify-center shrink-0">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/cosmitics-personal-icon.svg' ); ?>" alt="" class="w-10 h-10">
            </span>
            <span>Cosmetics &amp; Personal Care</span>
          </button>
        </div>

        <p class="font-montserrat text-[14px] text-black leading-[22px] mb-8 text-center max-w-[320px]">
            <?php echo wp_kses_post( $description ); ?>
        </p>

        <?php
        if ( $has_products ) :
            while ( $products_query->have_posts() ) : $products_query->the_post();
                $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ?: get_template_directory_uri() . '/public/assets/product-rice-starch.png';
                $excerpt   = get_the_excerpt() ?: 'Clean-label starch with superior texture, stability, and process performance.';
        ?>
        <div class="w-full bg-[#FDFBF3] rounded-[20px] border border-[#EFE9DD] shadow-sm p-3.5 flex flex-row items-center gap-3.5 mb-8 text-left">
          <div class="w-[125px] min-w-[125px] h-[175px] shrink-0 bg-white rounded-tl-[6px] rounded-br-[6px] border border-gray-100 shadow-sm overflow-hidden p-2 flex flex-col justify-between items-center text-center">
            <div class="w-full h-[105px] rounded-tl-[24px] rounded-br-[24px] overflow-hidden">
              <img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-contain">
            </div>
          </div>

          <div class="flex-1 flex flex-col justify-between h-[175px] py-1 pr-2">
            <div>
              <h4 class="font-montserrat font-bold text-[16px] text-[#5D3700] leading-tight mb-1.5"><?php the_title(); ?></h4>
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
        endif;
        ?>

        <a href="<?php echo esc_url( $button_link ); ?>" class="h-[46px] bg-white border-2 border-[#FF8D00] hover:bg-[#FF8D00] hover:text-white text-[#FF8D00] font-montserrat font-bold text-[14px] px-8 rounded-full flex items-center justify-center gap-2 select-none shadow-sm transition duration-200 mt-4">
          <?php echo esc_html( $button_text ); ?>
          <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </a>

      </div>
    </section>
</div>
