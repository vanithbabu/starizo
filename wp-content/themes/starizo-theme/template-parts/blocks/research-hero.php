<?php
/**
 * Research Hero Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

$category_badge = get_sub_field('category_badge') ?: 'TECHNOLOGY & QUALITY';
$main_title = get_sub_field('main_title') ?: 'Built On Science.<br>Proven Through<br>Process.';
$subtitle = get_sub_field('subtitle') ?: 'Technology creates possibilities. Quality creates trust.<br>At STARIZO, both are designed into every ingredient we produce.';
$button_link = get_sub_field('button_link');
$background_leaf_image = get_sub_field('background_leaf_image');
$foreground_image = get_sub_field('foreground_image');
?>

<div class="w-full bg-[#FDFBF3] relative overflow-hidden pt-3 pb-16">
  <!-- Background Radiating Rays Texture -->
  <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/Looper-1.png'); ?>" alt="" class="absolute top-0 left-1 w-[55%] h-full object-cover object-left opacity-100 pointer-events-none select-none z-0">

  <!-- Main Hero Content Container -->
  <div class="relative z-10 w-full max-w-[1280px] mx-auto px-6 sm:px-10 md:px-14 lg:px-16 pt-4 lg:pt-24">
    <!-- Hero Content Grid: Left Text Column + Right Image Column -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-8 lg:gap-12 items-center min-h-[480px]">
      
      <!-- Left Text Column -->
      <div class="md:col-span-7 flex flex-col items-start text-left gap-8" style="max-width: 580px;">
        <div class="flex flex-col items-start w-full gap-4">
          <!-- Category Badge -->
          <span class="font-montserrat font-bold text-black uppercase whitespace-nowrap inline-block shrink-0" style="font-size: 14px; line-height: 22px; letter-spacing: 0.11em; text-transform: uppercase;">
            <?php echo esc_html($category_badge); ?>
          </span>

          <!-- Main Title -->
          <h1 class="font-montserrat font-black text-[#00A256]" style="font-size: 42px; line-height: 52px;">
            <?php echo wp_kses_post($main_title); ?>
          </h1>

          <!-- Subtitle Description -->
          <p class="font-montserrat font-medium text-black/80" style="font-size: 17px; line-height: 28px;">
            <?php echo wp_kses_post($subtitle); ?>
          </p>
        </div>

        <?php if ($button_link) : ?>
        <div class="flex flex-row items-center justify-start shrink-0">
          <a href="<?php echo esc_url($button_link['url']); ?>" target="<?php echo esc_attr($button_link['target'] ?: '_self'); ?>" class="flex flex-row items-center justify-center shrink-0 whitespace-nowrap shadow-md hover:opacity-90 transition select-none group" style="height: 48px; border-radius: 24px; padding: 12px 28px; background-color: #FF8D00; gap: 10px;">
            <span class="font-montserrat font-semibold text-white whitespace-nowrap" style="font-size: 18px; line-height: 21px;">
              <?php echo esc_html($button_link['title']); ?>
            </span>
            <svg class="w-4 h-4 fill-white transform group-hover:translate-x-0.5 transition-transform duration-200 shrink-0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
              <path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.931 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="#FFFFFF" />
            </svg>
          </a>
        </div>
        <?php endif; ?>

      </div>

      <!-- Right Column: Research Hero Image -->
      <div class="md:col-span-5 relative flex items-center justify-center min-h-[488px]">
        <?php 
          $bg_url = $background_leaf_image ? $background_leaf_image['url'] : get_template_directory_uri() . '/public/assets/product-leaf.png';
          $fg_url = $foreground_image ? $foreground_image['url'] : get_template_directory_uri() . '/public/assets/hero-research.png';
        ?>
        <img src="<?php echo esc_url($bg_url); ?>" alt="" class="absolute pointer-events-none select-none z-0 hidden md:block" style="width: 372.77px; height: 487.60px; opacity: 1;">
        
        <div class="relative z-10 overflow-hidden shadow-2xl transform hover:scale-[1.01] transition-transform duration-300 rounded-tr-[44px] rounded-bl-[44px] rounded-tl-none rounded-br-none w-full md:w-[530px] h-[300px] md:h-[297px]">
          <img src="<?php echo esc_url($fg_url); ?>" alt="Research Lab" class="w-full h-full object-cover block mx-auto">
        </div>
      </div>

    </div>

    <!-- Bottom Highlights Bar -->
    <?php if ( have_rows('bottom_highlights') ) : ?>
      <div class="flex flex-row items-center justify-start shrink-0 mt-8 gap-6 flex-wrap">
        <?php while ( have_rows('bottom_highlights') ) : the_row(); 
          $text = get_sub_field('text');
        ?>
          <div class="flex flex-row items-center shrink-0" style="gap: 12px; height: 33px;">
            <div class="rounded-full bg-[#00A256] flex items-center justify-center shrink-0 shadow-sm" style="width: 32.76px; height: 32.76px;">
              <svg style="width: 15px; height: 15px;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <polyline points="20 6 9 17 4 12" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <span class="font-montserrat font-medium text-black" style="font-size: 14px;">
              <?php echo esc_html($text); ?>
            </span>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

  </div>
</div>
