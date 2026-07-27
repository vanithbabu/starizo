<?php
/**
 * Careers Purpose Block Template.
 */
$tagline = get_sub_field('tagline') ?: 'OUR PURPOSE';
$headline = get_sub_field('headline') ?: 'Turning Purpose Into Real Impact';
$description = get_sub_field('description') ?: 'Every role contributes to building better ingredients, stronger partnerships, and a more responsible future.';
?>

<section class="w-full bg-white py-16 md:py-24 border-t border-gray-100">
  <div class="max-w-7xl mx-auto px-6 md:px-8">

    <!-- Section Header -->
    <div class="flex flex-col items-center text-center space-y-4 max-w-3xl mx-auto mb-16">
      <div class="flex items-center gap-3">
        <div class="w-1.5 h-8 bg-starizo-orange rounded-full"></div>
        <h2 class="font-montserrat font-normal text-[16px] text-starizo-brown uppercase leading-[54px] tracking-[0.11em]">
          <?php echo esc_html($tagline); ?>
        </h2>
      </div>
      <h3 class="font-montserrat font-bold text-[22px] text-black text-center leading-[30px] tracking-[0em]">
        <?php echo esc_html($headline); ?>
      </h3>
      <p class="text-[18px] text-gray-600 text-center leading-[1.6]">
        <?php echo esc_html($description); ?>
      </p>
    </div>

    <!-- Purpose Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <?php if (have_rows('purpose_cards')) : ?>
        <?php $i = 1; while (have_rows('purpose_cards')) : the_row(); 
          $title = get_sub_field('title');
          $desc = get_sub_field('description');
          // Format number with leading zero
          $num = str_pad($i, 2, '0', STR_PAD_LEFT);
          // Determine leaf shape based on index (1-4)
          $shape_class = 'leaf-shape-0' . ((($i - 1) % 4) + 1);
        ?>
          <div class="flex flex-col items-center text-center space-y-6">
            <div class="w-[70px] h-[70px] bg-gradient-to-br from-starizo-green-start to-starizo-green-end <?php echo $shape_class; ?> flex items-center justify-center shadow-lg">
              <span class="text-[18px] font-bold text-white"><?php echo $num; ?></span>
            </div>
            <div class="space-y-3">
              <h4 class="text-[18px] font-semibold text-starizo-brown"><?php echo esc_html($title); ?></h4>
              <p class="text-[15px] text-gray-600 leading-[1.6]">
                <?php echo esc_html($desc); ?>
              </p>
            </div>
          </div>
        <?php $i++; endwhile; ?>
      <?php endif; ?>
    </div>

  </div>
</section>
