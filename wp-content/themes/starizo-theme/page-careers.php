<?php
/**
 * Template Name: Careers Page Template
 * Template Post Type: page
 *
 * @package Starizo
 */

get_header();
?>

<main class="w-full relative overflow-hidden bg-[#FDFBF3]">

  <!-- ========== DESKTOP VIEW (xl: 1280px+ screens) ========== -->
  <div class="hidden xl:block w-full">

    <!-- 1. Hero Section Wrapper -->
    <div class="relative w-full bg-[#FDFBF3] overflow-hidden">
      <div class="relative w-full h-[800px] overflow-hidden">

        <!-- Background Composite -->
        <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/hero-graphics.png' ); ?>" alt=""
          class="absolute left-1/2 -translate-x-1/2 top-0 w-[1280px] h-[800px] pointer-events-none z-0" />

        <!-- 1280px Content Layer -->
        <div class="absolute left-1/2 -translate-x-1/2 top-0 w-[1280px] h-[800px]">

          <!-- Brand Logo on the Wall -->
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/wall-logo.svg' ); ?>" alt="starizo™"
            class="absolute left-[903px] top-[182px] w-[242px] h-[78px] pointer-events-none z-10" />

          <!-- Left Hero Text Content -->
          <div class="absolute left-[79px] top-[305px] w-[534px] z-10 flex flex-col items-start">
            <div class="flex flex-col gap-3 mb-[31px]">
              <span class="text-[14px] font-bold tracking-[0.15em] text-black">CAREERS AT STARIZO</span>
              <h1 class="text-[42px] font-black text-transparent bg-clip-text bg-gradient-to-r from-[#00A256] to-[#5DC671] leading-[54px] tracking-tight">
                Build A Better Future.<br>
                With Better Ingredients.<br>
                With Better People.
              </h1>
            </div>
            <p class="text-[18px] font-medium leading-[30px] text-black max-w-[534px] mb-[51px]">
              Join a team transforming rice into ingredients designed for the industries shaping tomorrow.
            </p>
            <a href="#open-roles"
              class="w-[208px] h-[45px] bg-[#FF8D00] hover:bg-[#E07C00] text-white font-semibold text-[18px] rounded-[22px] shadow-[0px_4px_12px_rgba(255,141,0,0.3)] transition-all duration-300 flex items-center justify-center gap-2 group select-none">
              View Open Roles
              <svg class="w-4 h-4 fill-current transform group-hover:translate-x-0.5 transition-transform duration-200" viewBox="0 0 16 16">
                <path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.8907 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="currentColor"/>
              </svg>
            </a>
          </div>

        </div>
      </div>
    </div>

    <!-- 2. Our Purpose Section -->
    <section class="w-full bg-white py-16 md:py-24 border-t border-gray-100">
      <div class="max-w-7xl mx-auto px-6 md:px-8">
        <div class="flex flex-col items-center text-center space-y-4 max-w-3xl mx-auto mb-16">
          <div class="flex items-center gap-3">
            <div class="w-1.5 h-8 bg-[#FF8D00] rounded-full"></div>
            <h2 class="font-montserrat font-normal text-[16px] text-[#5D3700] uppercase leading-[54px] tracking-[0.11em]">OUR PURPOSE</h2>
          </div>
          <h3 class="font-montserrat font-bold text-[22px] text-black text-center leading-[30px]">Turning Purpose Into Real Impact</h3>
          <p class="text-[18px] text-gray-600 text-center leading-[1.6]">Every role contributes to building better ingredients, stronger partnerships, and a more responsible future.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="flex flex-col items-center text-center space-y-6">
            <div class="w-[70px] h-[70px] bg-gradient-to-br from-[#00A256] to-[#5DC671] rounded-tl-[24px] rounded-br-[24px] rounded-tr-[8px] rounded-bl-[8px] flex items-center justify-center shadow-lg text-white font-bold text-[18px]">01</div>
            <div class="space-y-3">
              <h4 class="text-[18px] font-semibold text-[#5D3700]">Sustainability First</h4>
              <p class="text-[15px] text-gray-600 leading-[1.6]">Build solutions designed for long-term impact.</p>
            </div>
          </div>
          <div class="flex flex-col items-center text-center space-y-6">
            <div class="w-[70px] h-[70px] bg-gradient-to-br from-[#00A256] to-[#5DC671] rounded-tl-[24px] rounded-br-[24px] rounded-tr-[8px] rounded-bl-[8px] flex items-center justify-center shadow-lg text-white font-bold text-[18px]">02</div>
            <div class="space-y-3">
              <h4 class="text-[18px] font-semibold text-[#5D3700]">Innovate Every Day</h4>
              <p class="text-[15px] text-gray-600 leading-[1.6]">Challenge assumptions and create better outcomes.</p>
            </div>
          </div>
          <div class="flex flex-col items-center text-center space-y-6">
            <div class="w-[70px] h-[70px] bg-gradient-to-br from-[#00A256] to-[#5DC671] rounded-tl-[24px] rounded-br-[24px] rounded-tr-[8px] rounded-bl-[8px] flex items-center justify-center shadow-lg text-white font-bold text-[18px]">03</div>
            <div class="space-y-3">
              <h4 class="text-[18px] font-semibold text-[#5D3700]">Stronger Together</h4>
              <p class="text-[15px] text-gray-600 leading-[1.6]">Collaboration drives everything we do.</p>
            </div>
          </div>
          <div class="flex flex-col items-center text-center space-y-6">
            <div class="w-[70px] h-[70px] bg-gradient-to-br from-[#00A256] to-[#5DC671] rounded-tl-[24px] rounded-br-[24px] rounded-tr-[8px] rounded-bl-[8px] flex items-center justify-center shadow-lg text-white font-bold text-[18px]">04</div>
            <div class="space-y-3">
              <h4 class="text-[18px] font-semibold text-[#5D3700]">Own The Impact</h4>
              <p class="text-[15px] text-gray-600 leading-[1.6]">Take responsibility and create meaningful results.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 3. Our Culture Section -->
    <section class="w-full py-16 md:py-24 bg-[#FDFBF3]">
      <div class="max-w-7xl mx-auto px-6 md:px-8 grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">
        <div class="lg:col-span-7 grid grid-cols-12 gap-6 relative">
          <div class="col-span-6 rounded-[34px] overflow-hidden shadow-lg border border-gray-100">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rectangle_34624860.png' ); ?>" alt="Culture" class="w-full h-full object-cover aspect-[331/488]">
          </div>
          <div class="col-span-6 flex flex-col gap-6">
            <div class="rounded-[34px] overflow-hidden shadow-lg border border-gray-100">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rectangle_34624861.png' ); ?>" alt="Lab" class="w-full h-auto object-cover aspect-[313/235]">
            </div>
            <div class="rounded-[34px] overflow-hidden shadow-lg border border-gray-100">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rectangle_34624862.png' ); ?>" alt="Testing" class="w-full h-auto object-cover aspect-[313/235]">
            </div>
          </div>
        </div>
        <div class="lg:col-span-5 flex flex-col space-y-8">
          <div class="space-y-4 flex flex-col items-center text-center">
            <div class="flex items-center gap-3">
              <div class="w-1.5 h-8 bg-[#FF8D00] rounded-full"></div>
              <h2 class="font-montserrat font-normal text-[16px] text-[#5D3700] uppercase leading-[54px] tracking-[0.11em]">OUR CULTURE</h2>
            </div>
            <h3 class="font-montserrat font-bold text-[22px] text-black leading-[30px]">A Place To Learn.<br>A Place To Grow.</h3>
            <p class="text-[18px] text-gray-600 leading-[1.6]">We believe great work happens when people feel trusted, supported, and inspired.</p>
            <ul class="space-y-4 w-full max-w-[331px] mx-auto text-left" role="list">
              <li class="min-h-[50px] py-2 flex items-center gap-[12px] bg-white px-[18px] rounded-2xl shadow-sm border border-gray-100">
                <div class="w-[32px] h-[32px] rounded-full bg-[#00A256] flex items-center justify-center text-white shrink-0">✓</div>
                <span class="text-[13px] font-medium text-black">Collaborative culture</span>
              </li>
              <li class="min-h-[50px] py-2 flex items-center gap-[12px] bg-white px-[18px] rounded-2xl shadow-sm border border-gray-100">
                <div class="w-[32px] h-[32px] rounded-full bg-[#00A256] flex items-center justify-center text-white shrink-0">✓</div>
                <span class="text-[13px] font-medium text-black">Continuous learning</span>
              </li>
              <li class="min-h-[50px] py-2 flex items-center gap-[12px] bg-white px-[18px] rounded-2xl shadow-sm border border-gray-100">
                <div class="w-[32px] h-[32px] rounded-full bg-[#00A256] flex items-center justify-center text-white shrink-0">✓</div>
                <span class="text-[13px] font-medium text-black">Leadership opportunities</span>
              </li>
              <li class="min-h-[50px] py-2 flex items-center gap-[12px] bg-white px-[18px] rounded-2xl shadow-sm border border-gray-100">
                <div class="w-[32px] h-[32px] rounded-full bg-[#00A256] flex items-center justify-center text-white shrink-0">✓</div>
                <span class="text-[13px] font-medium text-black">Real ownership</span>
              </li>
              <li class="min-h-[50px] py-2 flex items-center gap-[12px] bg-white px-[18px] rounded-2xl shadow-sm border border-gray-100">
                <div class="w-[32px] h-[32px] rounded-full bg-[#00A256] flex items-center justify-center text-white shrink-0">✓</div>
                <span class="text-[13px] font-medium text-black">Respectful environment</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- 4. Open Roles Section -->
    <section id="open-roles" class="w-full bg-gradient-to-r from-[#00A256] to-[#5DC671] py-16 md:py-24">
      <div class="max-w-7xl mx-auto px-6 md:px-8">
        <div class="flex flex-col items-center text-center space-y-4 max-w-3xl mx-auto mb-16">
          <div class="flex items-center gap-3">
            <div class="w-1.5 h-8 bg-[#FF8D00] rounded-full"></div>
            <h2 class="font-montserrat font-normal text-[16px] text-white uppercase leading-[54px] tracking-[0.11em]">OPEN ROLES</h2>
          </div>
          <h3 class="font-montserrat font-bold text-[22px] text-white leading-[30px]">Find Your Next Opportunity</h3>
          <p class="text-[18px] text-white/90 leading-[1.6]">Explore current openings and become part of our journey.</p>
        </div>

        <div class="bg-[#003C1B] text-white rounded-[44px] px-6 md:px-12 py-10 shadow-2xl relative overflow-hidden">
          <?php
          $default_roles = array(
            array( 'title' => 'Quality Assurance Executive', 'cat' => 'Quality', 'loc' => 'Chennai, India', 'type' => 'Full-time' ),
            array( 'title' => 'R&D Scientist — Food Ingredients', 'cat' => 'Quality', 'loc' => 'Chennai, India', 'type' => 'Full-time' ),
            array( 'title' => 'Production Officer', 'cat' => 'Quality', 'loc' => 'Chennai, India', 'type' => 'Full-time' ),
            array( 'title' => 'Sales Executive', 'cat' => 'Quality', 'loc' => 'Chennai, India', 'type' => 'Full-time' ),
          );
          foreach ( $default_roles as $role ) : ?>
          <div class="grid grid-cols-2 md:grid-cols-12 gap-y-4 gap-x-2 py-6 md:py-8 items-center px-4 hover:bg-white/5 transition duration-200 border-b border-dashed border-white/20 last:border-b-0">
            <div class="col-span-2 md:col-span-5"><h4 class="text-[18px] md:text-[20px] font-extrabold tracking-tight text-white"><?php echo esc_html( $role['title'] ); ?></h4></div>
            <div class="col-span-1 md:col-span-3"><span class="text-[15px] md:text-[18px] text-white/80"><?php echo esc_html( $role['cat'] ); ?></span></div>
            <div class="col-span-1 md:col-span-2 flex items-center gap-2"><span class="text-[15px] md:text-[18px] text-white/80"><?php echo esc_html( $role['loc'] ); ?></span></div>
            <div class="col-span-2 md:col-span-2 flex justify-between md:justify-end items-center gap-4">
              <span class="text-[15px] md:text-[18px] text-white/80"><?php echo esc_html( $role['type'] ); ?></span>
              <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="w-[38px] h-[38px] border border-white/40 hover:bg-white/10 text-white rounded-full flex items-center justify-center shadow-lg transition duration-200">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- 5. Bottom Hero Section -->
    <section class="w-full py-16 md:py-24 bg-white border-t border-b border-gray-100">
      <div class="max-w-7xl mx-auto px-6 md:px-8 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        <div class="lg:col-span-6 flex flex-col space-y-6">
          <h2 class="text-3xl md:text-[40px] font-black text-[#5D3700] leading-tight tracking-tight">Build What The Future<br>Will Be Made Of.</h2>
          <p class="text-[18px] text-gray-700 leading-[1.6] max-w-lg">Bring your ideas, expertise, and ambition. Let’s build what comes next.</p>
          <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="bg-[#FF8D00] hover:bg-[#E07C00] text-white font-semibold text-[18px] w-fit px-8 py-3 rounded-[22px] transition-all duration-300 flex items-center gap-2">Contact Us</a>
        </div>
        <div class="lg:col-span-6 flex justify-center lg:justify-end">
          <div class="relative w-full max-w-[485px] rounded-[34px] overflow-hidden shadow-lg border border-gray-100 flex aspect-[485/242]">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rectangle_34624801.png' ); ?>" alt="Innovation lab" class="w-full h-full object-cover">
          </div>
        </div>
      </div>
    </section>

  </div>


  <!-- ========== MOBILE LAYOUT VIEW (<1280px / <1024px screens - 1:1 Matched with careers.html) ========== -->
  <div class="block xl:hidden w-full">

    <!-- 1. Mobile Hero Content Section -->
    <div class="relative w-full min-h-[600px] bg-[#FDFBF3] pb-12 pt-4">

      <!-- Hero Image Block with Orange Curve & Wall Logo -->
      <div class="relative w-full h-[360px] sm:h-[372px]">
        <div class="absolute left-[20px] sm:left-[40px] right-0 top-0 bottom-0 border-l-[6px] border-[#FF8D00] rounded-bl-[100px] sm:rounded-bl-[132px] overflow-hidden shadow-md">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/masked-hero-image.png' ); ?>" alt="Starizo interview" class="w-full h-full object-cover object-top">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/wall-logo.svg' ); ?>" alt="starizo™" class="absolute right-6 top-8 w-[84px] h-[29px] pointer-events-none z-10">
        </div>
      </div>

      <!-- Hero Text Content -->
      <div class="px-6 mt-8 flex flex-col items-start max-w-[343px]">
        <span class="text-[14px] sm:text-[16px] font-bold tracking-[0.15em] text-black mb-3 uppercase">CAREERS AT STARIZO</span>
        <h1 class="text-[22px] sm:text-[24px] font-bold leading-[30px] text-transparent bg-clip-text bg-gradient-to-br from-[#00A256] to-[#5DC671] mb-3">
          Build A Better Future.<br>With Better Ingredients.<br>With Better People.
        </h1>
        <p class="text-[15px] sm:text-[16px] font-medium leading-[26px] sm:leading-[30px] text-black mb-6">
          Join a team transforming rice into ingredients designed for the industries shaping tomorrow.
        </p>
        <a href="#open-roles-mobile"
          class="w-[167px] h-[45px] bg-[#FF8D00] hover:bg-[#E07C00] text-white font-semibold text-[13px] rounded-[22px] shadow-[0px_4px_12px_rgba(255,141,0,0.3)] transition-all duration-300 flex items-center justify-between px-[18px] group select-none">
          <span>View Open Roles</span>
          <svg class="w-4 h-4 fill-current transform group-hover:translate-x-0.5 transition-transform duration-200" viewBox="0 0 16 16">
            <path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.8907 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="currentColor"/>
          </svg>
        </a>
      </div>

    </div>

    <!-- 2. Mobile Our Purpose Section (2x2 Grid) -->
    <section class="w-full bg-white py-10 border-t border-gray-50 flex flex-col items-center">
      
      <div class="w-full px-6 flex flex-col items-start text-left mb-6 max-w-[341px]">
        <div class="flex items-center gap-3 mb-3">
          <div class="w-[5px] h-[28px] bg-[#FF8500] rounded-full shrink-0"></div>
          <h2 class="font-montserrat font-normal text-[15px] text-[#5D3700] uppercase tracking-[0.11em]">OUR PURPOSE</h2>
        </div>
        <h3 class="font-montserrat font-bold text-[20px] text-black leading-tight mb-2">Turning Purpose Into Real Impact</h3>
        <p class="text-[14px] font-medium text-black/70 leading-[22px]">Every role contributes to building better ingredients, stronger partnerships, and a more responsible future.</p>
      </div>

      <!-- 2x2 Grid -->
      <div class="grid grid-cols-2 gap-4 max-w-[341px] mx-auto px-1">
        <div class="bg-white border border-gray-100 rounded-[16px] p-4 text-center flex flex-col items-center shadow-xs">
          <div class="w-[34px] h-[34px] bg-gradient-to-br from-[#00A256] to-[#5DC671] rounded-tl-[12px] rounded-br-[12px] rounded-tr-[4px] rounded-bl-[4px] flex items-center justify-center text-white text-[13px] font-bold shadow-xs mb-2">01</div>
          <h4 class="text-[14px] font-bold text-[#5D3700] leading-tight">Sustainability First</h4>
          <p class="text-[11px] text-black/70 leading-[15px] mt-1">Build solutions designed for long-term impact.</p>
        </div>

        <div class="bg-white border border-gray-100 rounded-[16px] p-4 text-center flex flex-col items-center shadow-xs">
          <div class="w-[34px] h-[34px] bg-gradient-to-br from-[#00A256] to-[#5DC671] rounded-tl-[12px] rounded-br-[12px] rounded-tr-[4px] rounded-bl-[4px] flex items-center justify-center text-white text-[13px] font-bold shadow-xs mb-2">02</div>
          <h4 class="text-[14px] font-bold text-[#5D3700] leading-tight">Innovate Every Day</h4>
          <p class="text-[11px] text-black/70 leading-[15px] mt-1">Challenge assumptions and create better outcomes.</p>
        </div>

        <div class="bg-white border border-gray-100 rounded-[16px] p-4 text-center flex flex-col items-center shadow-xs">
          <div class="w-[34px] h-[34px] bg-gradient-to-br from-[#00A256] to-[#5DC671] rounded-tl-[12px] rounded-br-[12px] rounded-tr-[4px] rounded-bl-[4px] flex items-center justify-center text-white text-[13px] font-bold shadow-xs mb-2">03</div>
          <h4 class="text-[14px] font-bold text-[#5D3700] leading-tight">Stronger Together</h4>
          <p class="text-[11px] text-black/70 leading-[15px] mt-1">Collaboration drives everything we do.</p>
        </div>

        <div class="bg-white border border-gray-100 rounded-[16px] p-4 text-center flex flex-col items-center shadow-xs">
          <div class="w-[34px] h-[34px] bg-gradient-to-br from-[#00A256] to-[#5DC671] rounded-tl-[12px] rounded-br-[12px] rounded-tr-[4px] rounded-bl-[4px] flex items-center justify-center text-white text-[13px] font-bold shadow-xs mb-2">04</div>
          <h4 class="text-[14px] font-bold text-[#5D3700] leading-tight">Own The Impact</h4>
          <p class="text-[11px] text-black/70 leading-[15px] mt-1">Take responsibility and create meaningful results.</p>
        </div>
      </div>

    </section>

    <!-- 3. Mobile Our Culture Section -->
    <section class="w-full bg-[#FDFBF3] py-12 flex flex-col items-center">
      
      <!-- Culture Images Container -->
      <div class="flex flex-col gap-4 max-w-[341px] mx-auto mb-8 px-1">
        <div class="w-[341px] max-w-full h-[217px] rounded-[20px] overflow-hidden shadow-md">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rectangle_34624860.png' ); ?>" alt="Teamwork" class="w-full h-full object-cover">
        </div>
        <div class="flex gap-4 w-full">
          <div class="flex-1 h-[139px] rounded-[20px] overflow-hidden shadow-md">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rectangle_34624861.png' ); ?>" alt="Lab" class="w-full h-full object-cover">
          </div>
          <div class="flex-1 h-[139px] rounded-[20px] overflow-hidden shadow-md">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rectangle_34624862.png' ); ?>" alt="Testing" class="w-full h-full object-cover">
          </div>
        </div>
      </div>

      <!-- Header & Checklist -->
      <div class="w-full px-6 flex flex-col items-start text-left mb-6 max-w-[341px]">
        <div class="flex items-center gap-3 mb-3">
          <div class="w-[5px] h-[28px] bg-[#FF8500] rounded-full shrink-0"></div>
          <h2 class="font-montserrat font-normal text-[15px] text-[#5D3700] uppercase tracking-[0.11em]">OUR CULTURE</h2>
        </div>
        <h3 class="font-montserrat font-bold text-[20px] text-black leading-tight mb-2">A Place To Learn.<br>A Place To Grow.</h3>
        <p class="text-[14px] font-medium text-black/70 leading-[22px]">We believe great work happens when people feel trusted, supported, and inspired.</p>
      </div>

      <div class="w-full px-6 flex justify-center">
        <ul class="w-full max-w-[341px] flex flex-col gap-2.5" role="list">
          <li class="w-full min-h-[48px] py-2.5 bg-white rounded-[16px] border border-gray-100/60 shadow-xs flex items-center px-4 gap-3">
            <div class="w-[28px] h-[28px] rounded-full bg-gradient-to-br from-[#00A256] to-[#5DC671] flex items-center justify-center text-white text-[12px] shrink-0 font-bold">✓</div>
            <span class="text-[13px] font-bold text-black">Collaborative culture</span>
          </li>
          <li class="w-full min-h-[48px] py-2.5 bg-white rounded-[16px] border border-gray-100/60 shadow-xs flex items-center px-4 gap-3">
            <div class="w-[28px] h-[28px] rounded-full bg-gradient-to-br from-[#00A256] to-[#5DC671] flex items-center justify-center text-white text-[12px] shrink-0 font-bold">✓</div>
            <span class="text-[13px] font-bold text-black">Continuous learning</span>
          </li>
          <li class="w-full min-h-[48px] py-2.5 bg-white rounded-[16px] border border-gray-100/60 shadow-xs flex items-center px-4 gap-3">
            <div class="w-[28px] h-[28px] rounded-full bg-gradient-to-br from-[#00A256] to-[#5DC671] flex items-center justify-center text-white text-[12px] shrink-0 font-bold">✓</div>
            <span class="text-[13px] font-bold text-black">Leadership opportunities</span>
          </li>
          <li class="w-full min-h-[48px] py-2.5 bg-white rounded-[16px] border border-gray-100/60 shadow-xs flex items-center px-4 gap-3">
            <div class="w-[28px] h-[28px] rounded-full bg-gradient-to-br from-[#00A256] to-[#5DC671] flex items-center justify-center text-white text-[12px] shrink-0 font-bold">✓</div>
            <span class="text-[13px] font-bold text-black">Real ownership</span>
          </li>
          <li class="w-full min-h-[48px] py-2.5 bg-white rounded-[16px] border border-gray-100/60 shadow-xs flex items-center px-4 gap-3">
            <div class="w-[28px] h-[28px] rounded-full bg-gradient-to-br from-[#00A256] to-[#5DC671] flex items-center justify-center text-white text-[12px] shrink-0 font-bold">✓</div>
            <span class="text-[13px] font-bold text-black">Respectful environment</span>
          </li>
        </ul>
      </div>

    </section>

    <!-- 4. Mobile Open Roles Section -->
    <section id="open-roles-mobile" class="w-full bg-[linear-gradient(135deg,#06A84F_0%,#4FC66E_100%)] py-12 overflow-hidden">
      <div class="max-w-[360px] mx-auto px-5">
        
        <!-- Header -->
        <div class="w-full flex flex-col items-start text-left mb-6">
          <div class="flex items-center gap-2.5 mb-3">
            <div class="w-[5px] h-[28px] bg-[#FF8500] rounded-full shrink-0"></div>
            <h2 class="font-montserrat font-normal text-[15px] text-white uppercase tracking-[0.11em]">OPEN ROLES</h2>
          </div>
          <h3 class="font-montserrat font-bold text-[20px] text-white leading-tight mb-2">Find Your Next Opportunity</h3>
          <p class="text-[14px] font-medium text-white/90 leading-[22px]">Explore current openings and become part of our journey.</p>
        </div>

        <!-- Filter Bar -->
        <div id="mobile-filter-bar" class="flex gap-2.5 overflow-x-auto pb-2 no-scrollbar mb-6">
          <button data-category="all" class="filter-btn active whitespace-nowrap rounded-full shrink-0 h-[32px] px-4 py-1 bg-gradient-to-r from-[#FF9800] to-[#FFB44D] text-[#272727] font-montserrat font-bold text-[12px]">All Roles</button>
          <button data-category="quality" class="filter-btn whitespace-nowrap rounded-full shrink-0 h-[32px] px-4 py-1 bg-[#292B2C] text-[#D3D3D3] font-montserrat font-semibold text-[12px]">Quality</button>
          <button data-category="research" class="filter-btn whitespace-nowrap rounded-full shrink-0 h-[32px] px-4 py-1 bg-[#292B2C] text-[#D3D3D3] font-montserrat font-semibold text-[12px]">Research</button>
          <button data-category="production" class="filter-btn whitespace-nowrap rounded-full shrink-0 h-[32px] px-4 py-1 bg-[#292B2C] text-[#D3D3D3] font-montserrat font-semibold text-[12px]">Production</button>
          <button data-category="sales" class="filter-btn whitespace-nowrap rounded-full shrink-0 h-[32px] px-4 py-1 bg-[#292B2C] text-[#D3D3D3] font-montserrat font-semibold text-[12px]">Sales</button>
        </div>

        <!-- Job Cards Container -->
        <div id="mobile-job-cards-container" class="flex flex-col gap-4">
          
          <!-- Job Card 1 -->
          <div data-job-category="quality" class="mobile-job-card relative bg-[#003C1B] rounded-[20px] p-6 shadow-md flex flex-col justify-between min-h-[190px]">
            <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="absolute top-6 right-6 w-[44px] h-[44px] rounded-full bg-gradient-to-br from-[#FF9500] to-[#FFB755] flex items-center justify-center text-white shadow-sm">
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <div>
              <h3 class="text-white text-[20px] font-bold leading-tight max-w-[200px] mb-3">Quality Assurance Executive</h3>
              <div class="flex items-center gap-2">
                <span class="px-2.5 py-0.5 rounded bg-[#184F31] text-[#D8D8D8] font-montserrat font-semibold text-[11px] uppercase">QUALITY</span>
                <span class="text-[#6D8C78]">•</span>
                <span class="text-[#D5D5D5] font-montserrat font-semibold text-[11px]">Full-time</span>
              </div>
            </div>
            <div class="mt-6 flex justify-between items-center pt-2 border-t border-white/10">
              <span class="text-[#D0D0D0] text-[12px]">Chennai, India</span>
              <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="uppercase text-[#FFB36A] font-montserrat font-bold text-[11px] inline-flex items-center gap-1">APPLY ON LINKEDIN &gt;</a>
            </div>
          </div>

          <!-- Job Card 2 -->
          <div data-job-category="research" class="mobile-job-card relative bg-[#003C1B] rounded-[20px] p-6 shadow-md flex flex-col justify-between min-h-[190px]">
            <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="absolute top-6 right-6 w-[44px] h-[44px] rounded-full bg-gradient-to-br from-[#FF9500] to-[#FFB755] flex items-center justify-center text-white shadow-sm">
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <div>
              <h3 class="text-white text-[20px] font-bold leading-tight max-w-[200px] mb-3">R&amp;D Scientist Food Ingredients</h3>
              <div class="flex items-center gap-2">
                <span class="px-2.5 py-0.5 rounded bg-[#184F31] text-[#D8D8D8] font-montserrat font-semibold text-[11px] uppercase">RESEARCH</span>
                <span class="text-[#6D8C78]">•</span>
                <span class="text-[#D5D5D5] font-montserrat font-semibold text-[11px]">Full-time</span>
              </div>
            </div>
            <div class="mt-6 flex justify-between items-center pt-2 border-t border-white/10">
              <span class="text-[#D0D0D0] text-[12px]">Chennai, India</span>
              <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="uppercase text-[#FFB36A] font-montserrat font-bold text-[11px] inline-flex items-center gap-1">APPLY ON LINKEDIN &gt;</a>
            </div>
          </div>

          <!-- Job Card 3 -->
          <div data-job-category="production" class="mobile-job-card relative bg-[#003C1B] rounded-[20px] p-6 shadow-md flex flex-col justify-between min-h-[190px]">
            <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="absolute top-6 right-6 w-[44px] h-[44px] rounded-full bg-gradient-to-br from-[#FF9500] to-[#FFB755] flex items-center justify-center text-white shadow-sm">
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <div>
              <h3 class="text-white text-[20px] font-bold leading-tight max-w-[200px] mb-3">Production Officer</h3>
              <div class="flex items-center gap-2">
                <span class="px-2.5 py-0.5 rounded bg-[#184F31] text-[#D8D8D8] font-montserrat font-semibold text-[11px] uppercase">PRODUCTION</span>
                <span class="text-[#6D8C78]">•</span>
                <span class="text-[#D5D5D5] font-montserrat font-semibold text-[11px]">Full-time</span>
              </div>
            </div>
            <div class="mt-6 flex justify-between items-center pt-2 border-t border-white/10">
              <span class="text-[#D0D0D0] text-[12px]">Chennai, India</span>
              <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="uppercase text-[#FFB36A] font-montserrat font-bold text-[11px] inline-flex items-center gap-1">APPLY ON LINKEDIN &gt;</a>
            </div>
          </div>

          <!-- Job Card 4 -->
          <div data-job-category="sales" class="mobile-job-card relative bg-[#003C1B] rounded-[20px] p-6 shadow-md flex flex-col justify-between min-h-[190px]">
            <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="absolute top-6 right-6 w-[44px] h-[44px] rounded-full bg-gradient-to-br from-[#FF9500] to-[#FFB755] flex items-center justify-center text-white shadow-sm">
              <svg class="w-4 h-4 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
            <div>
              <h3 class="text-white text-[20px] font-bold leading-tight max-w-[200px] mb-3">Sales Executive</h3>
              <div class="flex items-center gap-2">
                <span class="px-2.5 py-0.5 rounded bg-[#184F31] text-[#D8D8D8] font-montserrat font-semibold text-[11px] uppercase">SALES</span>
                <span class="text-[#6D8C78]">•</span>
                <span class="text-[#D5D5D5] font-montserrat font-semibold text-[11px]">Full-time</span>
              </div>
            </div>
            <div class="mt-6 flex justify-between items-center pt-2 border-t border-white/10">
              <span class="text-[#D0D0D0] text-[12px]">Mumbai, India</span>
              <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="uppercase text-[#FFB36A] font-montserrat font-bold text-[11px] inline-flex items-center gap-1">APPLY ON LINKEDIN &gt;</a>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 5. Mobile Bottom Hero Section -->
    <section class="w-full bg-white py-10 flex flex-col items-center">
      <div class="w-[342px] max-w-full h-[210px] rounded-[20px] overflow-hidden shadow-md px-1 mb-6">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/rectangle_34624801.png' ); ?>" alt="Innovation lab" class="w-full h-full object-cover">
      </div>
      <div class="px-6 max-w-[342px] mx-auto flex flex-col items-start w-full">
        <h3 class="font-montserrat font-bold text-[20px] text-[#5D3700] leading-tight mb-3">Build What The Future Will Be Made Of.</h3>
        <p class="text-[14px] font-medium text-black/70 leading-[22px] mb-6">Bring your ideas, expertise, and ambition. Let’s build what comes next.</p>
        <div class="flex flex-row items-center gap-3 w-full">
          <a href="#open-roles-mobile" class="h-[37px] px-4 bg-[#FF8D00] hover:bg-[#E07C00] text-white font-montserrat font-semibold text-[13px] rounded-full flex items-center justify-center gap-1.5 shadow-md">
            View Open Roles &gt;
          </a>
          <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>" class="h-[37px] px-4 bg-amber-50 border border-[#FF8D00] text-[#FF8D00] font-montserrat font-semibold text-[13px] rounded-full flex items-center justify-center gap-1.5">
            Follow Us &gt;
          </a>
        </div>
      </div>
    </section>

    <!-- 6. Mobile FAQ & Brand Card Section -->
    <section class="w-full bg-[#FDFBF3] py-12 flex flex-col items-center border-t border-amber-100/60">
      
      <div class="w-full max-w-[340px] mx-auto mb-6">
        <div class="flex items-center gap-2.5">
          <div class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full shrink-0"></div>
          <h2 class="font-montserrat font-normal text-[15px] text-[#5D3700] uppercase leading-[24px] tracking-[0.11em]">
            Frequently Asked Questions
          </h2>
        </div>
      </div>

      <!-- Mobile Accordions -->
      <div class="w-full max-w-[340px] mx-auto flex flex-col gap-4 mb-8" id="mobile-faq-accordion">
        <div class="mobile-faq-item bg-white border border-gray-100/60 rounded-3xl py-4 px-5 shadow-sm">
          <div class="flex justify-between items-center gap-3 cursor-pointer">
            <h4 class="font-montserrat font-semibold text-[15px] text-black">Do you support formulation guidance?</h4>
            <div class="w-4 h-[2px] bg-[#5D3700] rounded-full shrink-0"></div>
          </div>
          <p class="mt-2 text-[13px] font-medium text-black/70 leading-[19px]">Yes. We collaborate to align ingredient performance with application goals.</p>
        </div>

        <div class="mobile-faq-item bg-white border border-gray-100/60 rounded-3xl py-4 px-5 shadow-sm">
          <div class="flex justify-between items-center gap-3 cursor-pointer">
            <h4 class="font-montserrat font-semibold text-[15px] text-black">Can we request technical information?</h4>
            <div class="w-4 h-4 flex items-center justify-center relative text-[#FF8D00] shrink-0">
              <div class="w-4 h-[2px] bg-current rounded-full"></div>
              <div class="w-[2px] h-4 bg-current rounded-full absolute"></div>
            </div>
          </div>
        </div>

        <div class="mobile-faq-item bg-white border border-gray-100/60 rounded-3xl py-4 px-5 shadow-sm">
          <div class="flex justify-between items-center gap-3 cursor-pointer">
            <h4 class="font-montserrat font-semibold text-[15px] text-black">Do you support international supply?</h4>
            <div class="w-4 h-4 flex items-center justify-center relative text-[#FF8D00] shrink-0">
              <div class="w-4 h-[2px] bg-current rounded-full"></div>
              <div class="w-[2px] h-4 bg-current rounded-full absolute"></div>
            </div>
          </div>
        </div>

        <div class="mobile-faq-item bg-white border border-gray-100/60 rounded-3xl py-4 px-5 shadow-sm">
          <div class="flex justify-between items-center gap-3 cursor-pointer">
            <h4 class="font-montserrat font-semibold text-[15px] text-black">Can STARIZO support product development?</h4>
            <div class="w-4 h-4 flex items-center justify-center relative text-[#FF8D00] shrink-0">
              <div class="w-4 h-[2px] bg-current rounded-full"></div>
              <div class="w-[2px] h-4 bg-current rounded-full absolute"></div>
            </div>
          </div>
        </div>

        <div class="mobile-faq-item bg-white border border-gray-100/60 rounded-3xl py-4 px-5 shadow-sm">
          <div class="flex justify-between items-center gap-3 cursor-pointer">
            <h4 class="font-montserrat font-semibold text-[15px] text-black">Is there a minimum order requirement?</h4>
            <div class="w-4 h-4 flex items-center justify-center relative text-[#FF8D00] shrink-0">
              <div class="w-4 h-[2px] bg-current rounded-full"></div>
              <div class="w-[2px] h-4 bg-current rounded-full absolute"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mobile Brand Info Card -->
      <div class="w-full max-w-[340px] bg-white border border-gray-100 shadow-sm rounded-[24px] p-6 flex flex-col justify-between gap-6 mx-auto">
        <div class="flex flex-col space-y-4">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/logo.svg' ); ?>" alt="Starizo" class="h-8 w-auto self-start">
          <h4 class="text-[20px] font-bold text-[#5D3700] leading-tight">More Than Ingredients.<br>Built For Growth.</h4>
          <p class="text-[13px] font-medium text-black/70 leading-[20px]">STARIZO combines sourcing intelligence, advanced processing, technical collaboration, and manufacturing scale to help businesses create products that perform in the real world.</p>
          <p class="text-[13px] font-medium text-black/70 leading-[20px]">From idea to industrial production—we support every stage of the journey.</p>
        </div>
        <a href="<?php echo esc_url( site_url( '/contact' ) ); ?>"
          class="w-full border-2 border-[#FF8D00] hover:bg-[#FF8D00] text-[#FF8D00] hover:text-white font-bold text-[15px] py-3 rounded-full flex items-center justify-center gap-2 transition-all duration-200 select-none">
          Speak To Team
          <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16"><path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.931 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="currentColor"/></svg>
        </a>
      </div>

    </section>

  </div>

</main>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Mobile Job Filter Bar
  const filterBar = document.getElementById('mobile-filter-bar');
  const jobCards = document.querySelectorAll('.mobile-job-card');

  if (filterBar && jobCards.length) {
    const filterBtns = filterBar.querySelectorAll('button[data-category]');
    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const category = btn.dataset.category;
        filterBtns.forEach(b => {
          b.classList.remove('bg-gradient-to-r', 'from-[#FF9800]', 'to-[#FFB44D]', 'text-[#272727]', 'font-bold');
          b.classList.add('bg-[#292B2C]', 'text-[#D3D3D3]', 'font-semibold');
        });
        btn.classList.remove('bg-[#292B2C]', 'text-[#D3D3D3]', 'font-semibold');
        btn.classList.add('bg-gradient-to-r', 'from-[#FF9800]', 'to-[#FFB44D]', 'text-[#272727]', 'font-bold');

        jobCards.forEach(card => {
          const cardCategory = card.dataset.jobCategory;
          if (category === 'all' || cardCategory === category) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }
});
</script>

<?php get_footer(); ?>
