<?php
/**
 * Quality Process Block Template.
 *
 * @param   array $block The block settings and attributes.
 */

$section_header = get_sub_field('section_header') ?: 'QUALITY STARTS LONG BEFORE PRODUCTION';
$section_subtitle = get_sub_field('section_subtitle') ?: 'Quality is not a checkpoint. It is embedded across every stage of manufacturing.';
?>

<section class="w-full bg-[#FEF3DC] py-16 px-6 sm:px-10 md:px-14 lg:px-16" style="min-height: 533px;">
  <div class="max-w-[1116px] mx-auto flex flex-col gap-10">
    
    <!-- Header Text -->
    <div class="flex flex-col gap-3">
      <div class="flex items-center gap-3">
        <span class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
        <span class="font-montserrat font-normal text-[18px] md:text-[22px] leading-snug md:leading-[54px] tracking-[0.11em] uppercase text-[#B86200]">
          <?php echo esc_html($section_header); ?>
        </span>
      </div>
      <h2 class="font-montserrat font-bold text-[22px] leading-[30px] text-black">
        <?php echo esc_html($section_subtitle); ?>
      </h2>
    </div>

    <!-- Horizontal Cards Container -->
    <?php if ( have_rows('process_steps') ) : ?>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5 lg:gap-6 w-full pt-4">

      <?php while ( have_rows('process_steps') ) : the_row(); 
        $number = get_sub_field('number');
        $title = get_sub_field('title');
        $description = get_sub_field('description');
      ?>
      <!-- Card -->
      <div class="relative w-full max-w-[214px] h-[180px] mx-auto mt-6 lg:mt-0">
        <!-- Top Leaf Number Badge -->
        <div class="absolute -top-[21px] left-1/2 -translate-x-1/2 z-20 w-[43px] h-[43px] bg-[#00A256] rounded-tl-[22px] rounded-br-[22px] flex items-center justify-center shadow-md">
          <span class="font-montserrat font-bold text-[16px] text-white"><?php echo esc_html($number); ?></span>
        </div>
        <!-- Card Body Shell -->
        <div class="absolute top-[0px] left-0 w-full h-[158px] bg-white z-10 rounded-tl-[44px] rounded-tr-[4px] rounded-br-[44px] rounded-bl-[4px] shadow-sm p-4 pt-8 flex flex-col items-center text-center justify-start gap-1">
          <h3 class="font-montserrat font-semibold text-[22px] leading-[32.73px] text-[#5D3700]">
            <?php echo esc_html($title); ?>
          </h3>
          <p class="font-montserrat font-normal text-[16px] leading-[23px] text-[#333333]">
            <?php echo esc_html($description); ?>
          </p>
        </div>
      </div>
      <?php endwhile; ?>

    </div>
    <?php endif; ?>

  </div>
</section>
