<?php
/**
 * Careers FAQ Banner Block Template.
 */
$faq_tagline = get_sub_field('faq_tagline') ?: 'Frequently Asked Questions';
$banner_headline = get_sub_field('banner_headline') ?: "More Than Ingredients.<br>Built For Growth.";
$banner_description_1 = get_sub_field('banner_description_1') ?: 'STARIZO combines sourcing intelligence, advanced processing, technical collaboration, and manufacturing scale to help businesses create products that perform in the real world.';
$banner_description_2 = get_sub_field('banner_description_2') ?: 'From idea to industrial production—we support every stage of the journey.';
$button_text = get_sub_field('button_text') ?: 'Speak To Team';
$button_link = get_sub_field('button_link') ?: '#';
?>

<section class="w-full py-16 md:py-24 bg-starizo-bg/20">

  <!-- FAQ Header -->
  <div class="max-w-7xl mx-auto px-6 md:px-8 mb-12">
    <div class="flex items-center gap-3">
      <div class="w-1.5 h-8 bg-starizo-orange rounded-full"></div>
      <h2 class="font-montserrat font-normal text-[16px] text-starizo-brown uppercase leading-[54px] tracking-[0.11em]">
        <?php echo esc_html($faq_tagline); ?>
      </h2>
    </div>
  </div>

  <!-- Content Columns Grid -->
  <div class="max-w-7xl mx-auto px-6 md:px-8 grid grid-cols-1 lg:grid-cols-12 gap-16 items-stretch">

    <!-- FAQ Left accordion -->
    <div class="lg:col-span-6 flex flex-col">
      <div class="space-y-4 flex-1">
        <?php if (have_rows('faqs')) : ?>
          <?php $i = 0; while (have_rows('faqs')) : the_row(); 
            $question = get_sub_field('question');
            $answer = get_sub_field('answer');
            $is_expanded = ($i === 0 && !empty($answer)); // Expand first one if it has an answer
          ?>
            <div class="bg-white border border-gray-100 rounded-3xl py-4 px-6 md:py-[18px] md:px-8 shadow-sm faq-item cursor-pointer">
              <div class="flex justify-between items-center gap-4">
                <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]"><?php echo esc_html($question); ?></h4>
                <?php if ($is_expanded) : ?>
                  <div class="w-5 h-[2px] bg-starizo-brown rounded-full faq-icon"></div>
                <?php else : ?>
                  <div class="w-5 h-5 flex items-center justify-center relative text-starizo-orange faq-icon">
                    <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
                    <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
                  </div>
                <?php endif; ?>
              </div>
              <?php if (!empty($answer)) : ?>
                <p class="mt-3 text-[16px] text-gray-600 leading-[1.6] max-w-xl faq-answer <?php echo $is_expanded ? '' : 'hidden'; ?>">
                  <?php echo esc_html($answer); ?>
                </p>
              <?php endif; ?>
            </div>
          <?php $i++; endwhile; ?>
        <?php endif; ?>
      </div>
    </div>

    <!-- Brand Info Card Right -->
    <div class="lg:col-span-6 bg-white border border-gray-100 rounded-[34px] p-8 shadow-[0px_4px_24px_rgba(0,0,0,0.05)] flex flex-col justify-between h-full">
      <div class="flex flex-col space-y-6">
        <img src="<?php echo get_template_directory_uri(); ?>/public/assets/logo.svg" alt="Starizo" class="h-8 w-auto self-start">
        <h4 class="text-[22px] font-bold text-starizo-brown leading-tight">
          <?php echo wp_kses_post($banner_headline); ?>
        </h4>
        <p class="text-[16px] text-gray-700 leading-[1.8]">
          <?php echo esc_html($banner_description_1); ?>
        </p>
        <p class="text-[16px] text-gray-700 leading-[1.8]">
          <?php echo esc_html($banner_description_2); ?>
        </p>
      </div>
      <a href="<?php echo esc_url($button_link); ?>"
        class="w-full border-2 border-starizo-orange hover:bg-starizo-orange text-starizo-orange hover:text-white font-semibold text-[18px] py-3 rounded-[22px] flex items-center justify-center gap-2 group transition-all duration-200 mt-8">
        <?php echo esc_html($button_text); ?>
        <svg class="w-4 h-4 fill-current transform group-hover:translate-x-0.5 transition-transform duration-200"
          viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.8907 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="currentColor" />
        </svg>
      </a>
    </div>

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    item.addEventListener('click', function() {
      const answer = this.querySelector('.faq-answer');
      const iconContainer = this.querySelector('.faq-icon');
      
      if (answer) {
        if (answer.classList.contains('hidden')) {
          // Open
          answer.classList.remove('hidden');
          iconContainer.className = 'w-5 h-[2px] bg-starizo-brown rounded-full faq-icon';
          iconContainer.innerHTML = '';
        } else {
          // Close
          answer.classList.add('hidden');
          iconContainer.className = 'w-5 h-5 flex items-center justify-center relative text-starizo-orange faq-icon';
          iconContainer.innerHTML = '<div class="w-5 h-[2.5px] bg-current rounded-full"></div><div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>';
        }
      }
    });
  });
});
</script>
