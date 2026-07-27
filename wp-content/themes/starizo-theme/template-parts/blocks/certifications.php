<?php
/**
 * Certifications Block Template
 */

$subheading = get_sub_field( 'subheading' ) ?: 'CERTIFICATIONS';
$certificates = get_sub_field( 'certificates' );

// Fallback data if ACF is empty
if ( empty( $certificates ) ) {
    $certificates = array(
        array(
            'title' => 'FSSC 22000',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/FSSC.png'),
        ),
        array(
            'title' => 'ISO 9001:2015',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/ISO.png'),
        ),
        array(
            'title' => 'Non-GMO Project-verified',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/NonGMO.png'),
        ),
        array(
            'title' => 'Halal Indonesia',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/Halal.png'),
        ),
        array(
            'title' => 'Kosher',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/K-2.png'),
        ),
        array(
            'title' => 'BRCGS',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/BRGS.png'),
        ),
        array(
            'title' => 'FDA',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/FDA.png'),
        ),
        array(
            'title' => 'GMP',
            'image' => array('url' => get_template_directory_uri() . '/public/assets/GMP.png'),
        ),
    );
}
?>

<section class="w-full bg-[#FDFBF3] py-16 md:py-24 border-b border-gray-100 flex justify-center px-4 sm:px-6">

  <!-- Outer Container -->
  <div class="mx-auto bg-white shadow-sm flex flex-col items-center justify-center relative w-full" style="max-width: 1011px; min-height: 633px; border-radius: 44px; padding: 57px 49px 36px 42px; gap: 10px; opacity: 1;">

    <!-- Inner Container -->
    <div class="relative w-full rounded-[44px] bg-[#FEF3DC] p-6 sm:p-10 md:p-12 overflow-hidden flex flex-col justify-between" style="max-width: 920px; min-height: 540px;">

      <!-- Bottom-Left Decorative Watermark -->
      <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/footer-left-leaf.svg'); ?>" alt="" class="absolute bottom-0 left-0 w-[111px] sm:w-[260px] h-auto pointer-events-none select-none z-0 opacity-35">

      <!-- Inner Content Layer -->
      <div class="relative z-10 w-full flex flex-col items-start justify-center gap-8 mx-auto" style="max-width: 840px;">

        <!-- Header Row -->
        <div class="flex items-center gap-3" style="min-height: 54px; opacity: 1;">
          <div class="shrink-0" style="background-color: #FF8D00; width: 4px; height: 28px; border-radius: 9999px;"></div>
          <span class="font-montserrat font-bold uppercase tracking-[0.14em]" style="color: #5D3700; font-weight: 700; font-size: 22px; line-height: 54px;">
            <?php echo esc_html( $subheading ); ?>
          </span>
        </div>

        <!-- Certificates Grid (Strictly 4 columns on desktop, 2 on mobile) -->
        <div class="w-full grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-x-4 sm:gap-x-8 gap-y-8 items-start justify-items-center justify-center mx-auto">
          
          <?php foreach ( $certificates as $cert ) : 
              $cert_title = $cert['title'] ?? '';
              $cert_img   = $cert['image']['url'] ?? '';
          ?>
          <div class="flex flex-col items-center text-center justify-start w-full" style="max-width: 167px; min-height: 156.79px; gap: 8px;">
            <div class="bg-white border-[3.5px] border-black flex items-center justify-center p-2 shadow-sm shrink-0" style="width: 121.79px; height: 121.79px;">
              <?php if ( $cert_img ) : ?>
                <img src="<?php echo esc_url( $cert_img ); ?>" alt="<?php echo esc_attr( $cert_title ); ?>" class="w-full h-full object-contain">
              <?php endif; ?>
            </div>
            <span class="font-montserrat font-medium text-[14px] text-black text-center leading-[20px]" style="font-weight: 500;">
              <?php echo esc_html( $cert_title ); ?>
            </span>
          </div>
          <?php endforeach; ?>

        </div>

      </div>
    </div>

  </div>
</section>
