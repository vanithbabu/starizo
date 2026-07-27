<?php
/**
 * FAQ Section Block Template
 */

$heading = get_sub_field( 'heading' ) ?: 'Frequently Asked Questions';

$faqs = get_sub_field( 'faqs' );
if ( empty( $faqs ) ) {
    $faqs = array(
        array(
            'question' => 'Do you support formulation guidance?',
            'answer'   => 'Yes. We collaborate to align ingredient performance with application goals.',
            'open'     => true
        ),
        array(
            'question' => 'Can we request technical information?',
            'answer'   => 'Yes, technical specification sheets and documentation are available upon request.',
            'open'     => false
        ),
        array(
            'question' => 'Do you support international supply?',
            'answer'   => 'Yes, our supply chain and logistics partners facilitate global distribution.',
            'open'     => false
        ),
        array(
            'question' => 'Can STARIZO support product development?',
            'answer'   => 'Absolutely, our technical teams can help optimize your product development process.',
            'open'     => false
        ),
        array(
            'question' => 'Is there a minimum order requirement?',
            'answer'   => 'Minimum order quantities vary by product line. Please contact sales for specific details.',
            'open'     => false
        ),
    );
}

$info_title = get_sub_field( 'info_title' ) ?: 'More Than Ingredients.<br>Built For Growth.';
$info_desc  = get_sub_field( 'info_description' ) ?: '<p class="text-[16px] text-gray-700 leading-[1.8]">STARIZO combines sourcing intelligence, advanced processing, technical collaboration, and manufacturing scale to help businesses create products that perform in the real world.</p><p class="text-[16px] text-gray-700 leading-[1.8]">From idea to industrial production—we support every stage of the journey.</p>';
$btn_text   = get_sub_field( 'info_button_text' ) ?: 'Speak To Team';
$btn_link   = get_sub_field( 'info_button_link' ) ?: '/contact';
?>

<!-- FAQ & Value Proposition Section -->
<section class="w-full py-16 md:py-24 bg-[#FDFBF3]">

  <!-- FAQ Header -->
  <div class="max-w-7xl mx-auto px-6 md:px-8 mb-12">
    <div class="flex items-center gap-3">
      <div class="w-1.5 h-8 bg-[#FF8D00] rounded-full"></div>
      <h2 class="font-montserrat font-normal text-[16px] text-[#5D3700] uppercase leading-[54px] tracking-[0.11em]">
        <?php echo esc_html( $heading ); ?>
      </h2>
    </div>
  </div>

  <!-- Content Columns Grid -->
  <div class="max-w-7xl mx-auto px-6 md:px-8 grid grid-cols-1 lg:grid-cols-12 gap-16 items-stretch">

    <!-- FAQ Left accordion -->
    <div class="lg:col-span-6 flex flex-col">
      <div class="space-y-4 flex-1">
        <?php foreach ( $faqs as $faq ) : 
            $is_open = !empty($faq['open']);
        ?>
        <div class="bg-white border border-gray-100 rounded-3xl py-4 px-6 md:py-[18px] md:px-8 shadow-sm cursor-pointer group hover:border-[#FF8D00]/30 transition-colors" onclick="this.classList.toggle('active')">
          <div class="flex justify-between items-center gap-4">
            <h4 class="font-montserrat font-semibold text-[16px] text-black leading-[24px] tracking-[0em]">
              <?php echo esc_html( $faq['question'] ); ?>
            </h4>
            <!-- Icon toggle logic via basic JS or CSS could be added here. Using static state from mockup for simplicity -->
            <?php if ( $is_open ) : ?>
              <div class="w-5 h-[2px] bg-[#5D3700] rounded-full"></div>
            <?php else : ?>
              <div class="w-5 h-5 flex items-center justify-center relative text-[#FF8D00]">
                <div class="w-5 h-[2.5px] bg-current rounded-full"></div>
                <div class="w-[2.5px] h-5 bg-current rounded-full absolute"></div>
              </div>
            <?php endif; ?>
          </div>
          <?php if ( $is_open && !empty($faq['answer']) ) : ?>
            <p class="mt-3 text-[16px] text-gray-600 leading-[1.6] max-w-xl">
              <?php echo wp_kses_post( $faq['answer'] ); ?>
            </p>
          <?php endif; ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Brand Info Card Right -->
    <div class="lg:col-span-6 bg-white border border-gray-100 rounded-[34px] p-8 shadow-[0px_4px_24px_rgba(0,0,0,0.05)] flex flex-col justify-between h-full">
      <div class="flex flex-col space-y-6">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/logo.svg'); ?>" alt="Starizo" class="h-8 w-auto self-start">
        <h4 class="text-[22px] font-bold text-[#5D3700] leading-tight">
          <?php echo wp_kses_post( $info_title ); ?>
        </h4>
        <div class="info-content-wrapper">
          <?php echo wp_kses_post( $info_desc ); ?>
        </div>
      </div>
      
      <a href="<?php echo esc_url( $btn_link ); ?>" class="w-full border-2 border-[#FF8D00] hover:bg-[#FF8D00] text-[#FF8D00] hover:text-white font-semibold text-[18px] py-3 rounded-[22px] flex items-center justify-center gap-2 group transition-all duration-200 mt-8">
        <?php echo esc_html( $btn_text ); ?>
        <svg class="w-4 h-4 fill-current transform group-hover:translate-x-0.5 transition-transform duration-200" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.8907 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="currentColor" />
        </svg>
      </a>
    </div>

  </div>
</section>
