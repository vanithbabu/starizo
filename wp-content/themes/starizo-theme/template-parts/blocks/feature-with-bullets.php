<?php
/**
 * Feature With Bullets Block Template.
 *
 * @param   array $block The block settings and attributes.
 */

$number_tag = get_sub_field('number_tag');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$image = get_sub_field('image');
$layout_direction = get_sub_field('layout_direction') ?: 'image_left';
?>

<section class="w-full bg-[#FDFBF3] py-12 px-6 sm:px-10 md:px-14 lg:px-16">
  <div class="max-w-[1120px] mx-auto min-h-[408px] grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
    
    <!-- Image Column -->
    <div class="<?php echo ($layout_direction === 'image_right') ? 'lg:col-start-7 lg:row-start-1' : ''; ?> col-span-1 lg:col-span-6 relative flex items-center justify-center">
      <div class="relative w-full max-w-[538px] h-[300px] lg:h-[408px] rounded-tr-[44px] rounded-bl-[44px] rounded-tl-none rounded-br-none overflow-hidden shadow-xl z-10 bg-gray-200">
        
        <?php if ($layout_direction === 'image_left') : ?>
        <!-- Orange Leaf Badge Overlay for Left Image -->
        <div class="absolute top-[9px] left-[9px] w-[114.18px] h-[72px] bg-gradient-to-r from-[#FF8D00] to-[#FFB457] rounded-tr-[32px] rounded-bl-[32px] rounded-tl-none rounded-br-none z-20 pointer-events-none select-none"></div>
        <?php else: ?>
        <!-- Orange Leaf Badge Overlay for Right Image (Flipped horizontally in Figma) -->
        <div class="absolute top-[9px] right-[9px] w-[114.18px] h-[72px] bg-gradient-to-l from-[#FF8D00] to-[#FFB457] rounded-tl-[32px] rounded-br-[32px] rounded-tr-none rounded-bl-none z-20 pointer-events-none select-none"></div>
        <?php endif; ?>

        <?php 
          if ($image) {
            $img_url = $image['url'];
            $img_alt = $image['alt'];
          } else {
            // Fallbacks for Research Lab page
            if ($number_tag === '01') {
              $img_url = get_template_directory_uri() . '/public/assets/anatical.png';
            } elseif ($number_tag === '02') {
              $img_url = get_template_directory_uri() . '/public/assets/research-lab.png';
            } else {
              $img_url = get_template_directory_uri() . '/public/assets/anatical.png';
            }
            $img_alt = 'Feature image';
          }
        ?>
        <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($img_alt); ?>" class="w-full h-full object-cover relative z-10">
      </div>
    </div>

    <!-- Content Column -->
    <div class="<?php echo ($layout_direction === 'image_right') ? 'lg:col-start-1 lg:row-start-1' : ''; ?> col-span-1 lg:col-span-6 flex flex-col justify-center gap-5 max-w-[506px]">
      
      <!-- Number Tag -->
      <?php if ($number_tag) : ?>
      <div class="flex items-center gap-3">
        <span class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
        <span class="font-montserrat font-bold text-[22px] leading-[30px] text-[#FF8D00]">
          <?php echo esc_html($number_tag); ?>
        </span>
      </div>
      <?php endif; ?>

      <!-- Main Title & Subtitle -->
      <div class="flex flex-col gap-2">
        <h2 class="font-montserrat font-bold text-[22px] leading-[30px] text-black">
          <?php echo esc_html($title); ?>
        </h2>
        <p class="font-montserrat font-medium text-[18px] leading-[30px] text-[#5D3700]">
          <?php echo esc_html($subtitle); ?>
        </p>
      </div>

      <!-- Bullet Points 2-Column Grid -->
      <?php if ( have_rows('bullet_points') ) : ?>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-6 pt-2">
        <?php 
        $bullets = array();
        while ( have_rows('bullet_points') ) {
            the_row();
            $bullets[] = get_sub_field('text');
        }
        $half = ceil(count($bullets) / 2);
        $col1 = array_slice($bullets, 0, $half);
        $col2 = array_slice($bullets, $half);
        ?>
        
        <!-- Left Column Items -->
        <div class="flex flex-col gap-4">
          <?php foreach ($col1 as $text) : ?>
          <div class="flex items-start gap-2.5">
            <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
              <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
              <?php echo esc_html($text); ?>
            </span>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- Right Column Items -->
        <div class="flex flex-col gap-4">
          <?php foreach ($col2 as $text) : ?>
          <div class="flex items-start gap-2.5">
            <div class="w-[24px] h-[24px] rounded-full bg-[#00A256] flex items-center justify-center shrink-0 mt-0.5 shadow-sm">
              <svg class="w-[12px] h-[12px]" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"></polyline>
              </svg>
            </div>
            <span class="font-montserrat font-normal text-[14px] leading-[20px] text-black/90">
              <?php echo esc_html($text); ?>
            </span>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
      <?php endif; ?>

    </div>

  </div>
</section>
