<?php
/**
 * Why Partner With Starizo Block Template
 */

$subheading = get_sub_field( 'subheading' ) ?: 'WHY PARTNER WITH STARIZO';
$heading    = get_sub_field( 'heading' ) ?: 'More Than Supply. Strategic Ingredient Collaboration.';

$features = get_sub_field( 'features' );
if ( empty( $features ) ) {
    $features = array(
        array(
            'title'       => 'Rice-Derived Expertise',
            'description' => 'Deep understanding across starches, sweeteners, proteins and derivatives.',
            'image'       => array('url' => get_template_directory_uri() . '/public/assets/partner-life.png'),
        ),
        array(
            'title'       => 'Clean Manufacturing',
            'description' => 'Hygienic processing facilities with zero chemical additives and strict QA controls.',
            'image'       => array('url' => get_template_directory_uri() . '/public/assets/partne-clean.png'),
        ),
        array(
            'title'       => 'Traceable Supply Chain',
            'description' => '100% transparent sourcing directly from certified local farming partners.',
            'image'       => array('url' => get_template_directory_uri() . '/public/assets/starizo-mobile-green.png'),
        ),
        array(
            'title'       => 'Global Scalability',
            'description' => 'High-capacity production and seamless international supply logistics.',
            'image'       => array('url' => get_template_directory_uri() . '/public/assets/partner-globe.png'),
        ),
        array(
            'title'       => 'Application Support',
            'description' => 'Technical formulation guidance to optimize clean-label performance.',
            'image'       => array('url' => get_template_directory_uri() . '/public/assets/partner-application.png'),
        ),
    );
}
?>

<section class="w-full bg-[#FDFBF3] py-10 lg:py-24 relative overflow-hidden px-4 sm:px-6">
  <div class="w-full max-w-[1280px] mx-auto flex flex-col items-center">
    
    <!-- Context Header (Left-aligned, Subheading forced single line with whitespace-nowrap) -->
    <div class="w-full max-w-[343px] lg:max-w-[1100px] flex flex-col items-start justify-start text-left gap-2 mb-6 lg:mb-12 mx-auto">
      <div class="flex items-center justify-start gap-2 sm:gap-2.5">
        <span class="w-[4px] lg:w-[5px] h-[20px] lg:h-[28px] bg-[#DF890C] rounded-full inline-block shrink-0"></span>
        <span class="font-montserrat text-[#5D3700] uppercase whitespace-nowrap font-medium text-[14px] lg:text-[22px] leading-[20px] lg:leading-[54px] tracking-[0.11em]">
          <?php echo esc_html( $subheading ); ?>
        </span>
      </div>
      <h2 class="font-montserrat font-bold text-black text-left text-[18px] lg:text-[22px] leading-[26px] lg:leading-[30px]">
        <?php echo wp_kses_post( $heading ); ?>
      </h2>
    </div>

    <!-- 5 Cards Responsive Grid: 2-Column Grid on Mobile (grid-cols-2), Horizontal Flex on Desktop (lg:flex) -->
    <div id="why-partner-cards-container" class="w-full max-w-[343px] lg:max-w-[1100px] grid grid-cols-2 lg:flex lg:flex-row items-start justify-center gap-4 sm:gap-6 lg:gap-5 justify-items-center mx-auto">
      
      <?php 
      $default_descriptions = array(
          'Rice-Derived Expertise' => 'Deep understanding across starches, sweeteners, proteins and derivatives.',
          'Clean Manufacturing' => 'Hygienic processing facilities with zero chemical additives and strict QA controls.',
          'Traceable Supply Chain' => '100% transparent sourcing directly from certified local farming partners.',
          'Global Scalability' => 'High-capacity production and seamless international supply logistics.',
          'Application Support' => 'Technical formulation guidance to optimize clean-label performance.',
      );

      foreach ( $features as $index => $feature ) : 
          $title = $feature['title'] ?? '';
          $desc  = !empty($feature['description']) ? $feature['description'] : ($default_descriptions[$title] ?? 'Advanced processing and quality assurance for real-world food performance.');
          $image = isset($feature['image']['url']) ? $feature['image']['url'] : (is_string($feature['image']) ? $feature['image'] : '');
          if ( empty($image) || strpos($image, 'partner-paddie.png') !== false ) {
              $image = get_template_directory_uri() . '/public/assets/starizo-mobile-green.png';
          }
          $is_active = ($index === 0);
      ?>

      <!-- Feature Card <?php echo $index + 1; ?> -->
      <div class="why-partner-card bg-white rounded-tl-none rounded-tr-[35px] lg:rounded-tr-[44px] rounded-bl-none rounded-br-none p-1.5 lg:p-2.5 flex flex-col justify-between shrink-0 cursor-pointer transition-all duration-300 hover:-translate-y-1 w-full max-w-[158px] lg:w-[198px] lg:max-w-[198px] <?php echo $is_active ? 'is-expanded min-h-[290px] lg:min-h-[332px] shadow-lg border-transparent' : 'min-h-[193px] lg:min-h-[242px] shadow-sm border border-amber-50'; ?>" data-card-index="<?php echo $index; ?>">
        <div>
          <!-- Image -->
          <div class="w-full h-[109px] lg:w-[183px] lg:h-[137px] overflow-hidden shrink-0 mx-auto rounded-tr-[35px] lg:rounded-tr-[44px] rounded-bl-[35px] lg:rounded-bl-[44px]">
            <?php if ( $image ) : ?>
              <img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="w-full h-full object-cover pointer-events-none">
            <?php endif; ?>
          </div>
          <!-- Title -->
          <div class="pt-2 lg:pt-3 px-1">
            <h3 class="font-montserrat font-semibold text-[#5D3700] text-[14px] lg:text-[18px] leading-[17px] lg:leading-[21px]">
              <?php echo esc_html( $title ); ?>
            </h3>
          </div>
          <!-- Description -->
          <div class="card-desc pt-1.5 lg:pt-2 px-1 <?php echo $is_active ? '' : 'hidden'; ?>">
            <p class="font-montserrat font-normal text-black opacity-75 text-[11px] lg:text-[14px] leading-[15px] lg:leading-[19px]">
              <?php echo wp_kses_post( $desc ); ?>
            </p>
          </div>
        </div>

        <!-- Bottom Horizontal Bar -->
        <div class="w-full flex items-center justify-between mx-auto pt-2 pb-1 border-t border-gray-100/60 mt-2">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/' . ($is_active ? 'partner-leaf-full.svg' : 'partner-leaf-nill.svg')); ?>" alt="Leaf" class="card-leaf-img w-5 lg:w-6 h-5 lg:h-6 shrink-0">
          <div class="h-[1.5px] bg-gray-200 grow mx-1.5 rounded-full"></div>
          <div class="card-toggle-btn w-5 lg:w-6 h-5 lg:h-6 rounded-full border <?php echo $is_active ? 'border-[#FF8D00]' : 'border-amber-200'; ?> flex items-center justify-center shrink-0 bg-white shadow-xs transition-colors duration-200">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/' . ($is_active ? 'partner-arrow-up.svg' : 'partner-arrow-down.svg')); ?>" alt="Toggle" class="card-arrow-img w-2 lg:w-2.5 h-2 lg:h-2.5">
          </div>
        </div>
      </div>

      <?php endforeach; ?>

    </div>

  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.why-partner-card');
  const leafFull  = "<?php echo esc_url(get_template_directory_uri() . '/public/assets/partner-leaf-full.svg'); ?>";
  const leafNill  = "<?php echo esc_url(get_template_directory_uri() . '/public/assets/partner-leaf-nill.svg'); ?>";
  const arrowUp   = "<?php echo esc_url(get_template_directory_uri() . '/public/assets/partner-arrow-up.svg'); ?>";
  const arrowDown = "<?php echo esc_url(get_template_directory_uri() . '/public/assets/partner-arrow-down.svg'); ?>";

  cards.forEach(card => {
    card.addEventListener('click', () => {
      const desc  = card.querySelector('.card-desc');
      const leaf  = card.querySelector('.card-leaf-img');
      const arrow = card.querySelector('.card-arrow-img');
      const btn   = card.querySelector('.card-toggle-btn');
      const isExpanded = card.classList.contains('is-expanded');

      if (isExpanded) {
        // Collapse ONLY this card when clicked
        card.classList.remove('is-expanded', 'shadow-lg', 'border-transparent', 'min-h-[290px]', 'lg:min-h-[332px]');
        card.classList.add('shadow-sm', 'border-amber-50', 'min-h-[193px]', 'lg:min-h-[242px]');
        if (desc) desc.classList.add('hidden');
        if (leaf) leaf.src = leafNill;
        if (arrow) arrow.src = arrowDown;
        if (btn) {
          btn.classList.remove('border-[#FF8D00]');
          btn.classList.add('border-amber-200');
        }
      } else {
        // Expand ONLY this card when clicked (leaving all other cards unchanged)
        card.classList.remove('shadow-sm', 'border-amber-50', 'min-h-[193px]', 'lg:min-h-[242px]');
        card.classList.add('is-expanded', 'shadow-lg', 'border-transparent', 'min-h-[290px]', 'lg:min-h-[332px]');
        if (desc) desc.classList.remove('hidden');
        if (leaf) leaf.src = leafFull;
        if (arrow) arrow.src = arrowUp;
        if (btn) {
          btn.classList.remove('border-amber-200');
          btn.classList.add('border-[#FF8D00]');
        }
      }
    });
  });
});
</script>
