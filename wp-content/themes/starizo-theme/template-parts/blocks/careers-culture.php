<?php
/**
 * Careers Culture Block Template.
 */
$tagline = get_sub_field('tagline') ?: 'OUR CULTURE';
$headline = get_sub_field('headline') ?: "A Place To Learn.<br>A Place To Grow.";
$description = get_sub_field('description') ?: 'We believe great work happens when people feel trusted, supported, and inspired.';
?>

<section class="w-full py-16 md:py-24 bg-starizo-bg/10">
  <div class="max-w-7xl mx-auto px-6 md:px-8 grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

    <!-- Culture Left Images Layout -->
    <div class="lg:col-span-7 grid grid-cols-12 gap-6 relative">
      <!-- Main Tall Image -->
      <div class="col-span-6 rounded-[34px] overflow-hidden shadow-lg border border-gray-100">
        <img src="<?php echo get_template_directory_uri(); ?>/public/assets/rectangle_34624860.png" alt="Starizo teamwork culture"
          class="w-full h-full object-cover aspect-[331/488] rounded-[34px]">
      </div>
      <!-- Right Stack of two Images -->
      <div class="col-span-6 flex flex-col gap-6">
        <div class="rounded-[34px] overflow-hidden shadow-lg border border-gray-100">
          <img src="<?php echo get_template_directory_uri(); ?>/public/assets/rectangle_34624861.png" alt="Lab analysis"
            class="w-full h-auto object-cover aspect-[313/235] rounded-[34px]">
        </div>
        <div class="rounded-[34px] overflow-hidden shadow-lg border border-gray-100">
          <img src="<?php echo get_template_directory_uri(); ?>/public/assets/rectangle_34624862.png" alt="Lab testing"
            class="w-full h-auto object-cover aspect-[313/235] rounded-[34px]">
        </div>
      </div>
    </div>

    <!-- Culture Right Content -->
    <div class="lg:col-span-5 flex flex-col space-y-8">
      <div class="space-y-4 flex flex-col items-center lg:items-start text-center lg:text-left">
        <div class="flex items-center gap-3">
          <div class="w-1.5 h-8 bg-starizo-orange rounded-full"></div>
          <h2 class="font-montserrat font-normal text-[16px] text-starizo-brown uppercase leading-[54px] tracking-[0.11em]">
            <?php echo esc_html($tagline); ?>
          </h2>
        </div>
        <h3 class="font-montserrat font-bold text-[22px] text-black leading-[30px] tracking-[0em]">
          <?php echo wp_kses_post($headline); ?>
        </h3>
        <p class="text-[18px] text-gray-600 leading-[1.6]">
          <?php echo esc_html($description); ?>
        </p>
        
        <!-- Checklist -->
        <ul class="space-y-4 w-full max-w-[331px] mx-auto lg:mx-0 text-left" role="list">
          <?php if (have_rows('checklist')) : ?>
            <?php while (have_rows('checklist')) : the_row(); 
              $item_text = get_sub_field('item_text');
            ?>
              <li class="min-h-[50px] py-2 flex items-center gap-[12px] bg-white px-[18px] rounded-2xl shadow-sm border border-gray-100">
                <div class="w-[32.76px] h-[32.76px] rounded-full bg-starizo-green-start flex items-center justify-center text-[#FDFBF3] shrink-0 select-none">
                  <svg class="w-[15px] h-[15px]" fill="none" viewBox="0 0 15 15" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.30915 12.564C6.30915 12.4529 6.28779 12.3974 6.24506 12.3974L5.95024 12.5384C5.95024 12.4785 5.91606 12.4358 5.84769 12.4102L5.74515 12.3974C5.67679 12.3974 5.59133 12.4273 5.48879 12.4871C5.47169 12.4444 5.45033 12.4016 5.42469 12.3589C5.39906 12.3162 5.37769 12.2777 5.3606 12.2435C5.24951 12.0299 5.13842 11.7949 5.02733 11.5385C4.92479 11.2736 4.82651 11.0215 4.73251 10.7823C4.64706 10.543 4.57869 10.355 4.52742 10.2183C4.49324 10.1072 4.45479 9.94055 4.41206 9.71836C4.36933 9.49618 4.3266 9.21418 4.28388 8.87236C4.37788 8.93218 4.45051 8.96209 4.50179 8.96209C4.5616 8.96209 4.61715 8.87236 4.66842 8.69291C4.69406 8.72709 4.74106 8.74418 4.80942 8.74418C4.86069 8.74418 4.89915 8.72709 4.92479 8.69291L5.12988 8.38527L5.3606 8.46218H5.37342C5.39051 8.46218 5.4076 8.45364 5.42469 8.43655C5.44179 8.41945 5.46742 8.40236 5.5016 8.38527C5.56997 8.34255 5.62124 8.32118 5.65542 8.32118L5.69388 8.334C5.90751 8.43655 6.04424 8.62455 6.10406 8.898C6.25788 9.54745 6.41169 9.87218 6.56551 9.87218C6.71933 9.87218 6.89879 9.70982 7.10388 9.38509C7.20642 9.22273 7.30897 9.03473 7.41151 8.82109C7.5226 8.60745 7.63369 8.36818 7.74479 8.10327C7.76188 8.20582 7.77897 8.25709 7.79606 8.25709C7.83879 8.25709 7.91142 8.15027 8.01397 7.93664C8.12506 7.723 8.30024 7.42818 8.53951 7.05218C8.67624 6.82145 8.84715 6.56082 9.05224 6.27027C9.26588 5.97973 9.49233 5.68064 9.7316 5.373C9.97088 5.06536 10.2016 4.77482 10.4238 4.50136C10.6545 4.22791 10.8596 3.99291 11.0391 3.79636C11.2185 3.59982 11.351 3.47164 11.4364 3.41182C11.7611 3.18964 12.0175 2.976 12.2055 2.77091C12.197 2.83073 12.1841 2.88627 12.1671 2.93755C12.1585 2.98027 12.1542 3.01018 12.1542 3.02727C12.1542 3.06145 12.1713 3.07855 12.2055 3.07855L12.5644 2.89909V2.95036C12.5644 3.01873 12.5815 3.05291 12.6157 3.05291C12.6413 3.05291 12.6926 3.01445 12.7695 2.93755C12.8464 2.86064 12.8891 2.80509 12.8977 2.77091L12.8721 2.95036L13.3079 2.694L13.2053 2.92473C13.3421 2.83073 13.4403 2.78373 13.5001 2.78373C13.5343 2.78373 13.56 2.80509 13.5771 2.84782C13.5941 2.882 13.6027 2.91618 13.6027 2.95036C13.6027 3.00164 13.5813 3.06145 13.5386 3.12982C13.4959 3.19818 13.4403 3.27936 13.372 3.37336C13.3207 3.44173 13.2352 3.54427 13.1156 3.681C13.0045 3.80918 12.8336 4.00145 12.6029 4.25782C12.3721 4.50564 12.0645 4.85173 11.68 5.29609C11.5774 5.40718 11.4193 5.60373 11.2057 5.88573C10.9921 6.15918 10.7485 6.47964 10.4751 6.84709C10.2101 7.206 9.94524 7.56918 9.68033 7.93664C9.41542 8.30409 9.18042 8.63736 8.97533 8.93645C8.77024 9.227 8.62497 9.44491 8.53951 9.59018L7.74479 10.9361C7.57388 11.2266 7.43288 11.4659 7.32179 11.6539C7.21069 11.8334 7.12524 11.9573 7.06542 12.0256C6.93724 12.1795 6.79624 12.3162 6.64242 12.4358L6.52706 12.3717L6.42451 12.4358L6.30915 12.564Z" fill="currentColor" />
                  </svg>
                </div>
                <span class="text-[13px] font-medium text-black leading-none"><?php echo esc_html($item_text); ?></span>
              </li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>
      </div>

    </div>
  </div>
</section>
