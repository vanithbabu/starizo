<?php
/**
 * Careers Bottom Hero Block Template.
 */
$headline = get_sub_field('headline') ?: "Build What The Future<br>Will Be Made Of.";
$description = get_sub_field('description') ?: 'Bring your ideas, expertise, and ambition. Let’s build what comes next.';
$button_text = get_sub_field('button_text') ?: 'Contact Us';
$button_link = get_sub_field('button_link') ?: '#';
?>

<section class="w-full py-16 md:py-24 bg-white border-t border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-6 md:px-8 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">

    <!-- Banner Left Content -->
    <div class="lg:col-span-6 flex flex-col space-y-6">
      <h2 class="text-3xl md:text-[40px] font-black text-starizo-brown leading-tight tracking-tight">
        <?php echo wp_kses_post($headline); ?>
      </h2>
      <p class="text-[18px] text-gray-700 leading-[1.6] max-w-lg">
        <?php echo esc_html($description); ?>
      </p>
      <a href="<?php echo esc_url($button_link); ?>"
        class="bg-starizo-orange hover:bg-starizo-orange-dark text-white font-semibold text-[18px] w-fit px-8 py-3 rounded-[22px] transition-all duration-300 flex items-center gap-2 group">
        <?php echo esc_html($button_text); ?>
        <svg class="w-4 h-4 fill-current transform group-hover:translate-x-0.5 transition-transform duration-200"
          viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.8907 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="currentColor" />
        </svg>
      </a>
    </div>

    <!-- Banner Right Image Frame -->
    <div class="lg:col-span-6 flex justify-center lg:justify-end">
      <div class="relative w-full max-w-[485px] rounded-[34px] overflow-hidden group shadow-lg border border-gray-100 flex aspect-[485/242]">
        <img src="<?php echo get_template_directory_uri(); ?>/public/assets/rectangle_34624801.png" alt="Starizo innovation lab" class="w-full h-full object-cover">
      </div>
    </div>

  </div>
</section>
