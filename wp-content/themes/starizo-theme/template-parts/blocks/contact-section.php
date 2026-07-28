<?php
/**
 * Contact Section Block Template.
 *
 * @param   array $block The block settings and attributes.
 */

$tagline = get_sub_field('tagline') ?: 'CONTACT STARIZO';
$title_line_1 = get_sub_field('title_line_1') ?: 'Let’s Build Better';
$title_line_2 = get_sub_field('title_line_2') ?: 'Ingredients. Together.';
$contact_info_title = get_sub_field('contact_info_title') ?: 'Contact Information';
$contact_info_subtitle = get_sub_field('contact_info_subtitle') ?: 'Say something to start a live chat!';
$email = get_sub_field('email') ?: 'sales@starizo.com';
$form_tagline = get_sub_field('form_tagline') ?: 'TELL US ABOUT YOUR PROJECT';
$form_title = get_sub_field('form_title') ?: 'Built to support formulation goals across categories and markets.';
$form_subtitle = get_sub_field('form_subtitle') ?: 'The more context you provide, the better we can support you.';
$form_shortcode = get_sub_field('form_shortcode');
?>

<!-- ==================== DESKTOP LAYOUT (hidden lg:block) ==================== -->
<div class="hidden lg:block w-full">

  <!-- Hero Section with Dual Rotated Loopers -->
  <div class="relative w-full bg-white overflow-hidden pb-16 pt-6">

    <!-- Left Looper-3 (Normal orientation, 100% opacity) -->
    <div class="absolute left-[-200px] top-[-100px] w-[1280px] h-[800px] pointer-events-none opacity-100 select-none z-0">
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/Looper-3.png" alt="" class="w-full h-full object-contain">
    </div>

    <!-- Right Looper-2 (Normal orientation, no rotation) -->
    <div class="absolute right-[-200px] top-[-100px] w-[1280px] h-[800px] pointer-events-none opacity-100 select-none z-0">
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/Looper-2.png" alt="" class="w-full h-full object-contain">
    </div>

    <!-- Hero Header Title Container (Width 1106px, Height 144px, Gap 42px) -->
    <div class="relative z-10 w-full max-w-[1106px] mx-auto text-center flex flex-col items-center justify-center gap-3 mt-14 mb-14">
      <span class="font-montserrat font-bold text-[14px] text-black uppercase leading-[22px] tracking-[0.11em]">
        <?php echo esc_html($tagline); ?>
      </span>
      <h1 class="text-center">
        <span class="font-montserrat font-black text-[42px] text-black leading-[54px] block">
          <?php echo wp_kses_post($title_line_1); ?>
        </span>
        <span class="font-montserrat font-normal text-[42px] text-[#00A256] leading-[54px] block">
          <?php echo wp_kses_post($title_line_2); ?>
        </span>
      </h1>
    </div>

    <!-- Main Outer Shell Container (Width 1196px, Height 860px) -->
    <div class="relative z-10 w-full max-w-[1196px] mx-auto bg-white rounded-[24px] shadow-[0px_10px_60px_rgba(0,0,0,0.06)] border border-gray-100 p-8">
      
      <!-- 2-Column Grid -->
      <div class="grid grid-cols-12 gap-8 items-stretch">

        <!-- LEFT COLUMN: Orange Contact Information Card (Width 491px, Height 647px) -->
        <div class="col-span-5 relative bg-[#FF8D00] rounded-[10px] p-10 flex flex-col justify-between overflow-hidden shadow-lg"
          style="min-height: 647px;">

          <!-- Top Text Block -->
          <div class="relative z-10 flex flex-col gap-3">
            <h2 class="font-poppins font-semibold text-[28px] text-white leading-[100%]">
              <?php echo esc_html($contact_info_title); ?>
            </h2>
            <p class="font-poppins font-normal text-[18px] text-white/90 leading-[100%]">
              <?php echo esc_html($contact_info_subtitle); ?>
            </p>
          </div>

          <!-- Bottom Content Block (Email & Social Icons) -->
          <div class="relative z-10 flex flex-col gap-8">

            <!-- Email Block -->
            <div class="flex flex-col items-start gap-3">
              <img src="<?php echo get_template_directory_uri(); ?>/public/assets/contact-us-mail.svg" alt="Mail" class="w-[50px] h-[50px] object-contain">
              <div class="flex flex-col gap-0.5">
                <span class="font-montserrat font-bold text-[20.77px] text-white leading-[31px]">
                  Email
                </span>
                <a href="mailto:<?php echo esc_attr($email); ?>" class="font-montserrat font-normal text-[20.77px] text-white hover:underline leading-[31px]">
                  <?php echo esc_html($email); ?>
                </a>
              </div>
            </div>

            <!-- Horizontal Social Icons Row -->
            <?php if (have_rows('social_links')) : ?>
              <div class="flex items-center gap-5">
                <?php while (have_rows('social_links')) : the_row(); 
                  $icon = get_sub_field('icon');
                  $url = get_sub_field('url');
                ?>
                  <a href="<?php echo esc_url($url); ?>" target="_blank" class="w-[52px] h-[52px] rounded-full bg-white flex items-center justify-center shadow-md hover:scale-105 transition-transform shrink-0">
                    <?php if ($icon) : ?>
                      <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" class="w-9 h-9 object-contain">
                    <?php endif; ?>
                  </a>
                <?php endwhile; ?>
              </div>
            <?php else : ?>
              <!-- Fallback Hardcoded Icons if none entered -->
              <div class="flex items-center gap-5">
                <a href="#" class="w-[52px] h-[52px] rounded-full bg-white flex items-center justify-center shadow-md hover:scale-105 transition-transform shrink-0">
                  <img src="<?php echo get_template_directory_uri(); ?>/public/assets/linkdin.svg" alt="LinkedIn" class="w-9 h-9 object-contain">
                </a>
                <a href="#" class="w-[52px] h-[52px] rounded-full bg-white flex items-center justify-center shadow-md hover:scale-105 transition-transform shrink-0">
                  <img src="<?php echo get_template_directory_uri(); ?>/public/assets/instagram.svg" alt="Instagram" class="w-9 h-9 object-contain">
                </a>
                <a href="#" class="w-[52px] h-[52px] rounded-full bg-white flex items-center justify-center shadow-md hover:scale-105 transition-transform shrink-0">
                  <img src="<?php echo get_template_directory_uri(); ?>/public/assets/x-twetter.svg" alt="X" class="w-9 h-9 object-contain">
                </a>
                <a href="#" class="w-[52px] h-[52px] rounded-full bg-white flex items-center justify-center shadow-md hover:scale-105 transition-transform shrink-0">
                  <img src="<?php echo get_template_directory_uri(); ?>/public/assets/youtube.svg" alt="YouTube" class="w-9 h-9 object-contain">
                </a>
              </div>
            <?php endif; ?>

          </div>

          <!-- Right Bottom Leaf Watermark (Opacity 0.24) -->
          <img src="<?php echo get_template_directory_uri(); ?>/public/assets/contact-us-leaf.svg" alt=""
            class="absolute bottom-0 right-0 w-[198px] h-[260px] opacity-100 pointer-events-none select-none z-0">

        </div>

        <!-- RIGHT COLUMN: Contact Form Container (Width ~648px) -->
        <div class="col-span-7 flex flex-col justify-between py-2 px-4">

          <!-- Form Header Block -->
          <div class="flex flex-col gap-2.5 mb-8">
            <div class="flex items-center gap-3">
              <span class="w-[5px] h-[24px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
              <span class="font-montserrat font-normal text-[16.19px] text-black uppercase leading-[39.74px] tracking-[0.11em]">
                <?php echo esc_html($form_tagline); ?>
              </span>
            </div>
            <h3 class="font-montserrat font-bold text-[16.19px] text-black leading-[22.08px]">
              <?php echo esc_html($form_title); ?>
            </h3>
            <p class="font-montserrat font-medium text-[13.25px] text-black/70 leading-[22.08px]">
              <?php echo esc_html($form_subtitle); ?>
            </p>
          </div>

          <!-- Form Area with AJAX backend storage & Email notification -->
          <?php if (!empty($form_shortcode)) : ?>
            <div class="contact-form-wrapper">
              <?php echo do_shortcode($form_shortcode); ?>
            </div>
          <?php else: ?>
            <!-- Form Elements Fallback with AJAX -->
            <form id="starizo-desktop-contact-form" action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="POST" class="flex flex-col gap-8 w-full max-w-[595px]">
              <input type="hidden" name="action" value="starizo_submit_contact">
              <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('starizo_contact_nonce'); ?>">

              <div id="contact-form-alert" class="hidden p-4 rounded-lg font-montserrat text-sm transition-all duration-300"></div>

              <!-- Row 1: Full Name & Phone Number -->
              <div class="grid grid-cols-2 gap-8">
                <div class="flex flex-col gap-2">
                  <label class="font-montserrat font-semibold text-[13px] text-black/80">Full Name<span class="text-red-500">*</span></label>
                  <input type="text" name="full_name" placeholder="John Doe" required
                    class="w-full pb-2 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[15px] font-medium text-black placeholder-gray-400 bg-transparent transition-colors">
                </div>
                <div class="flex flex-col gap-2">
                  <label class="font-montserrat font-semibold text-[13px] text-black/80">Phone Number<span class="text-red-500">*</span></label>
                  <input type="tel" name="phone" placeholder="+1 012 3456 789" required
                    class="w-full pb-2 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[15px] font-medium text-black placeholder-gray-400 bg-transparent transition-colors">
                </div>
              </div>

              <!-- Row 2: Work Email & Company Name -->
              <div class="grid grid-cols-2 gap-8">
                <div class="flex flex-col gap-2">
                  <label class="font-montserrat font-semibold text-[13px] text-black/80">Work Email<span class="text-red-500">*</span></label>
                  <input type="email" name="email" placeholder="Enter Work Email" required
                    class="w-full pb-2 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[15px] font-medium text-black placeholder-gray-400 bg-transparent transition-colors">
                </div>
                <div class="flex flex-col gap-2">
                  <label class="font-montserrat font-semibold text-[13px] text-black/80">Company name<span class="text-red-500">*</span></label>
                  <input type="text" name="company" placeholder="Enter Company name" required
                    class="w-full pb-2 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[15px] font-medium text-black placeholder-gray-400 bg-transparent transition-colors">
                </div>
              </div>

              <!-- Row 3: Industry & Ingredient of interest -->
              <div class="grid grid-cols-2 gap-8">
                <div class="flex flex-col gap-2">
                  <label class="font-montserrat font-semibold text-[13px] text-black/80">Industry<span class="text-red-500">*</span></label>
                  <div class="relative">
                    <select name="industry" required
                      class="w-full pb-2 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[15px] font-medium text-black/70 bg-transparent appearance-none transition-colors cursor-pointer pr-6">
                      <option value="" disabled selected>Select Industry</option>
                      <option value="Food Manufacturers">Food Manufacturers</option>
                      <option value="Nutrition Brands">Nutrition Brands</option>
                      <option value="Pharmaceutical">Pharmaceutical</option>
                      <option value="Personal Care">Personal Care</option>
                      <option value="Industrial Applications">Industrial Applications</option>
                    </select>
                    <svg class="w-4 h-4 absolute right-0 bottom-3 pointer-events-none text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                      <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                  </div>
                </div>
                <div class="flex flex-col gap-2">
                  <label class="font-montserrat font-semibold text-[13px] text-black/80">Ingredient of interest<span class="text-red-500">*</span></label>
                  <input type="text" name="ingredient" placeholder="Enter Ingredient" required
                    class="w-full pb-2 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[15px] font-medium text-black placeholder-gray-400 bg-transparent transition-colors">
                </div>
              </div>

              <!-- Message Field -->
              <div class="flex flex-col gap-2 w-full">
                <label class="font-montserrat font-semibold text-[13px] text-black/80">Message<span class="text-red-500">*</span></label>
                <textarea name="message" rows="2" placeholder="Write your message.." required
                  class="w-full pb-2 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[15px] font-medium text-black placeholder-gray-400 bg-transparent transition-colors resize-none"></textarea>
              </div>

              <!-- Submit Button -->
              <div class="w-full flex justify-end mt-4">
                <button type="submit" id="contact-submit-btn"
                  class="w-[190px] h-[51px] bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-semibold text-[18px] rounded-[5px] flex items-center justify-center gap-2 shadow-md transition-all duration-200 select-none">
                  <span id="contact-btn-text">Submit</span>
                  <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </button>
              </div>
            </form>

            <script>
            document.addEventListener('DOMContentLoaded', () => {
                const form = document.getElementById('starizo-desktop-contact-form');
                const alertBox = document.getElementById('contact-form-alert');
                const submitBtn = document.getElementById('contact-submit-btn');
                const btnText = document.getElementById('contact-btn-text');

                if (form) {
                    form.addEventListener('submit', async (e) => {
                        e.preventDefault();
                        btnText.textContent = 'Sending...';
                        submitBtn.disabled = true;
                        alertBox.classList.add('hidden');

                        try {
                            const formData = new FormData(form);
                            const response = await fetch(form.action, {
                                method: 'POST',
                                body: formData
                            });
                            const result = await response.json();

                            alertBox.classList.remove('hidden');
                            if (result.success) {
                                alertBox.className = 'p-4 rounded-lg font-montserrat text-sm bg-green-50 text-green-800 border border-green-200 mb-4';
                                alertBox.textContent = result.data.message;
                                form.reset();
                            } else {
                                alertBox.className = 'p-4 rounded-lg font-montserrat text-sm bg-red-50 text-red-800 border border-red-200 mb-4';
                                alertBox.textContent = result.data.message || 'An error occurred. Please try again.';
                            }
                        } catch (err) {
                            alertBox.classList.remove('hidden');
                            alertBox.className = 'p-4 rounded-lg font-montserrat text-sm bg-red-50 text-red-800 border border-red-200 mb-4';
                            alertBox.textContent = 'Connection error. Please try again.';
                        } finally {
                            btnText.textContent = 'Submit';
                            submitBtn.disabled = false;
                        }
                    });
                }
            });
            </script>
          <?php endif; ?>
        </div>

      </div>

    </div>

  </div>
</div>

<!-- ==================== MOBILE LAYOUT (lg:hidden) ==================== -->
<div class="block lg:hidden w-full flex flex-col">

  <!-- Mobile Hero & Contact Container with Background Loopers -->
  <div class="w-full px-3 py-8 flex flex-col items-center gap-8 relative overflow-hidden">

    <!-- Mobile Background Loopers (Enhanced contrast & size) -->
    <div class="absolute left-[-50px] top-[10px] w-[260px] h-[420px] pointer-events-none opacity-100 select-none z-0"
      style="filter: contrast(160%) saturate(140%);">
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/Looper-3.png" alt="" class="w-full h-full object-contain">
    </div>

    <div class="absolute right-[-50px] top-[30px] w-[260px] h-[420px] pointer-events-none opacity-100 select-none z-0"
      style="filter: contrast(160%) saturate(140%);">
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/Looper-2.png" alt="" class="w-full h-full object-contain">
    </div>

    <div class="absolute right-[-40px] top-[520px] w-[220px] h-[360px] pointer-events-none opacity-100 select-none z-0"
      style="filter: contrast(160%) saturate(140%);">
      <img src="<?php echo get_template_directory_uri(); ?>/public/assets/Looper-1.png" alt="" class="w-full h-full object-contain">
    </div>

    <!-- Mobile Outer Parent Container Card -->
    <div class="relative z-10 w-full max-w-[340px] bg-white rounded-[20px] shadow-[0px_10px_40px_rgba(0,0,0,0.06)] border border-gray-100 p-5 py-6 flex flex-col gap-6 mx-auto">

      <!-- Header Title Block (Inside Card) -->
      <div class="w-full text-center flex flex-col items-center gap-2 mx-auto pb-2">
        <span class="font-montserrat font-bold text-[13px] text-black uppercase tracking-[0.11em]">
          <?php echo esc_html($tagline); ?>
        </span>
        <h1 class="text-center">
          <span class="font-montserrat font-black text-[24px] text-black leading-tight block">
            <?php echo wp_kses_post($title_line_1); ?>
          </span>
          <span class="font-montserrat font-normal text-[24px] text-[#00A256] leading-tight block">
            <?php echo wp_kses_post($title_line_2); ?>
          </span>
        </h1>
      </div>

      <!-- Mobile Form Card (FIRST) -->
      <div class="w-full flex flex-col gap-6">
        <div class="flex flex-col gap-2">
          <div class="flex items-center gap-2">
            <span class="w-[4px] h-[18px] bg-[#FF8D00] rounded-full inline-block shrink-0"></span>
            <span class="font-montserrat font-normal text-[13px] text-black uppercase tracking-[0.11em]"><?php echo esc_html($form_tagline); ?></span>
          </div>
          <h3 class="font-montserrat font-bold text-[14px] text-black leading-snug"><?php echo esc_html($form_title); ?></h3>
          <p class="font-montserrat font-medium text-[12px] text-black/70"><?php echo esc_html($form_subtitle); ?></p>
        </div>

        <?php if (!empty($form_shortcode)) : ?>
          <div class="contact-form-wrapper-mobile">
            <?php echo do_shortcode($form_shortcode); ?>
          </div>
        <?php else: ?>
          <form id="starizo-mobile-contact-form" action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="POST" class="flex flex-col gap-4">
            <input type="hidden" name="action" value="starizo_submit_contact">
            <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('starizo_contact_nonce'); ?>">

            <div id="mobile-contact-form-alert" class="hidden p-3 rounded font-montserrat text-xs"></div>

            <div class="flex flex-col gap-1">
              <label class="font-montserrat font-semibold text-[12px] text-black/80">Full Name*</label>
              <input type="text" name="full_name" placeholder="John Doe" required class="w-full pb-1 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[14px] bg-transparent">
            </div>
            <div class="flex flex-col gap-1">
              <label class="font-montserrat font-semibold text-[12px] text-black/80">Phone Number*</label>
              <input type="tel" name="phone" placeholder="+1 012 3456 789" required class="w-full pb-1 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[14px] bg-transparent">
            </div>
            <div class="flex flex-col gap-1">
              <label class="font-montserrat font-semibold text-[12px] text-black/80">Work Email*</label>
              <input type="email" name="email" placeholder="Enter Work Email" required class="w-full pb-1 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[14px] bg-transparent">
            </div>
            <div class="flex flex-col gap-1">
              <label class="font-montserrat font-semibold text-[12px] text-black/80">Company Name*</label>
              <input type="text" name="company" placeholder="Enter Company Name" required class="w-full pb-1 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[14px] bg-transparent">
            </div>
            <div class="flex flex-col gap-1">
              <label class="font-montserrat font-semibold text-[12px] text-black/80">Industry*</label>
              <select name="industry" required class="w-full pb-1 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[14px] bg-transparent">
                <option value="" disabled selected>Select Industry</option>
                <option value="Food Manufacturers">Food Manufacturers</option>
                <option value="Nutrition Brands">Nutrition Brands</option>
                <option value="Pharmaceutical">Pharmaceutical</option>
                <option value="Personal Care">Personal Care</option>
                <option value="Industrial Applications">Industrial Applications</option>
              </select>
            </div>
            <div class="flex flex-col gap-1">
              <label class="font-montserrat font-semibold text-[12px] text-black/80">Ingredient of interest*</label>
              <input type="text" name="ingredient" placeholder="Enter Ingredient" required class="w-full pb-1 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[14px] bg-transparent">
            </div>
            <div class="flex flex-col gap-1">
              <label class="font-montserrat font-semibold text-[12px] text-black/80">Message*</label>
              <textarea name="message" rows="2" placeholder="Write your message.." required class="w-full pb-1 border-b border-gray-300 focus:border-[#FF8D00] outline-none text-[14px] bg-transparent resize-none"></textarea>
            </div>

            <div class="w-full flex justify-center mt-2">
              <button type="submit" id="mobile-contact-submit-btn"
                class="bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-semibold text-[14px] leading-[21px] rounded-[5px] flex items-center justify-center gap-[10px] shadow-sm select-none transition-colors"
                style="width: 120px; height: 36px; padding: 4px 12px;">
                <span id="mobile-btn-text">Submit</span>
                <svg class="w-3.5 h-3.5 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
              </button>
            </div>
          </form>

          <script>
          document.addEventListener('DOMContentLoaded', () => {
              const mobileForm = document.getElementById('starizo-mobile-contact-form');
              const mobileAlert = document.getElementById('mobile-contact-form-alert');
              const mobileSubmitBtn = document.getElementById('mobile-contact-submit-btn');
              const mobileBtnText = document.getElementById('mobile-btn-text');

              if (mobileForm) {
                  mobileForm.addEventListener('submit', async (e) => {
                      e.preventDefault();
                      mobileBtnText.textContent = 'Sending...';
                      mobileSubmitBtn.disabled = true;
                      mobileAlert.classList.add('hidden');

                      try {
                          const formData = new FormData(mobileForm);
                          const response = await fetch(mobileForm.action, {
                              method: 'POST',
                              body: formData
                          });
                          const result = await response.json();

                          mobileAlert.classList.remove('hidden');
                          if (result.success) {
                              mobileAlert.className = 'p-3 rounded font-montserrat text-xs bg-green-50 text-green-800 border border-green-200 mb-2';
                              mobileAlert.textContent = result.data.message;
                              mobileForm.reset();
                          } else {
                              mobileAlert.className = 'p-3 rounded font-montserrat text-xs bg-red-50 text-red-800 border border-red-200 mb-2';
                              mobileAlert.textContent = result.data.message || 'An error occurred.';
                          }
                      } catch (err) {
                          mobileAlert.classList.remove('hidden');
                          mobileAlert.className = 'p-3 rounded font-montserrat text-xs bg-red-50 text-red-800 border border-red-200 mb-2';
                          mobileAlert.textContent = 'Connection error.';
                      } finally {
                          mobileBtnText.textContent = 'Submit';
                          mobileSubmitBtn.disabled = false;
                      }
                  });
              }
          });
          </script>
        <?php endif; ?>
      </div>

      <!-- Mobile Contact Info Orange Card (SECOND) -->
      <div class="w-full max-w-[351px] bg-[#FF8D00] rounded-[16px] p-4 flex flex-col justify-between relative overflow-hidden shadow-lg mx-auto"
        style="min-height: 156px;">
        
        <div class="flex flex-col gap-0.5 z-10">
          <h2 class="font-poppins font-semibold text-[16px] text-white"><?php echo esc_html($contact_info_title); ?></h2>
          <p class="font-poppins font-normal text-[12px] text-white/90"><?php echo esc_html($contact_info_subtitle); ?></p>
        </div>

        <div class="flex flex-col gap-2 z-10 mt-2">
          <div class="flex items-center gap-2">
            <img src="<?php echo get_template_directory_uri(); ?>/public/assets/contact-us-mail.svg" alt="Mail" class="w-4 h-4 object-contain">
            <div class="flex flex-col text-[11px]">
              <span class="font-montserrat font-bold text-white leading-tight">Email</span>
              <a href="mailto:<?php echo esc_attr($email); ?>" class="font-montserrat font-normal text-white hover:underline leading-tight"><?php echo esc_html($email); ?></a>
            </div>
          </div>

          <!-- Social Icons Row -->
          <div class="flex items-center gap-3 pt-1">
            <?php if (have_rows('social_links')) : ?>
              <?php while (have_rows('social_links')) : the_row(); 
                $icon = get_sub_field('icon');
                $url = get_sub_field('url');
              ?>
                <a href="<?php echo esc_url($url); ?>" target="_blank" class="w-7 h-7 rounded-full bg-white flex items-center justify-center shadow-sm shrink-0">
                  <?php if ($icon) : ?>
                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" class="w-4 h-4 object-contain">
                  <?php endif; ?>
                </a>
              <?php endwhile; ?>
            <?php else : ?>
              <a href="#" class="w-7 h-7 rounded-full bg-white flex items-center justify-center shadow-sm shrink-0">
                <img src="<?php echo get_template_directory_uri(); ?>/public/assets/linkdin.svg" alt="LinkedIn" class="w-4 h-4 object-contain">
              </a>
              <a href="#" class="w-7 h-7 rounded-full bg-white flex items-center justify-center shadow-sm shrink-0">
                <img src="<?php echo get_template_directory_uri(); ?>/public/assets/instagram.svg" alt="Instagram" class="w-4 h-4 object-contain">
              </a>
              <a href="#" class="w-7 h-7 rounded-full bg-white flex items-center justify-center shadow-sm shrink-0">
                <img src="<?php echo get_template_directory_uri(); ?>/public/assets/x-twetter.svg" alt="X" class="w-4 h-4 object-contain">
              </a>
              <a href="#" class="w-7 h-7 rounded-full bg-white flex items-center justify-center shadow-sm shrink-0">
                <img src="<?php echo get_template_directory_uri(); ?>/public/assets/youtube.svg" alt="YouTube" class="w-4 h-4 object-contain">
              </a>
            <?php endif; ?>
          </div>
        </div>

        <!-- Left Leaf Watermark -->
        <img src="<?php echo get_template_directory_uri(); ?>/public/assets/contact-us-leaf.svg" alt=""
          class="absolute bottom-0 right-[-10px] w-[80px] h-[100px] opacity-100 pointer-events-none select-none z-0 transform scale-x-[-1]">
      </div>

    </div>

  </div>
</div>
