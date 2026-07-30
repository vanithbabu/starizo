<?php
/**
 * The template for displaying all single posts
 */

get_header(); 
?>

<!-- ==================== DESKTOP LAYOUT (hidden lg:block) ==================== -->
<div class="hidden lg:block w-full font-montserrat bg-[#FDFBF3] text-black min-h-screen antialiased overflow-x-hidden pt-24 pb-20">
    
    <?php while ( have_posts() ) : the_post(); 
        $reading_time = starizo_reading_time( get_the_content() );
        $category = get_the_category(); 
        $cat_name = !empty($category) ? $category[0]->name : 'Insight';
        $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');
        if (!$thumb) {
            $thumb = get_template_directory_uri() . '/public/assets/blog-detail-paddie.png';
        }
        $author_name = get_the_author();
    ?>

    <!-- Desktop Breadcrumb -->
    <div class="w-full max-w-[1120px] mx-auto px-6 lg:px-0 mb-4 mt-6">
      <nav aria-label="Breadcrumb" class="flex items-center gap-1.5 text-[12px] leading-none">
        <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="font-montserrat font-medium text-[#7F7F7F] hover:text-[#FF8D00] transition-colors">Insights</a>
        <span class="font-montserrat font-normal text-[#7F7F7F]">/ Insights Details</span>
      </nav>
    </div>

    <!-- DESKTOP HERO CARD CONTAINER -->
    <div class="relative w-full max-w-[1120px] mx-auto bg-white border border-[#E8E8EA] rounded-tr-[40.63px] rounded-bl-[40.63px] p-6 lg:p-[23px] flex flex-col lg:flex-row items-center justify-between gap-6 lg:gap-0 lg:h-[558px] shadow-sm">
      
      <!-- Left Text Content Area -->
      <div class="w-full lg:w-[467px] h-full lg:h-[512px] flex flex-col justify-between py-2 lg:py-[11px] pl-2 lg:pl-[6px] shrink-0">
        <div>
          <span class="font-montserrat font-bold text-[14px] leading-[22px] tracking-[0.11em] uppercase bg-gradient-to-r from-[#00A256] to-[#5DC671] bg-clip-text text-transparent block">
            <?php echo esc_html($cat_name); ?>
          </span>
          <h1 class="font-montserrat font-extrabold text-[32px] sm:text-[38px] lg:text-[42px] leading-[42px] sm:leading-[48px] lg:leading-[53px] tracking-normal text-black mt-3 max-w-[441px]">
            <?php the_title(); ?>
          </h1>
          <p class="font-montserrat font-medium text-[16px] lg:text-[18px] leading-[26px] lg:leading-[30px] tracking-normal text-[#333333] mt-4 max-w-[440px]">
            <?php echo wp_trim_words( get_the_excerpt(), 25, '...' ); ?>
          </p>
        </div>

        <!-- Bottom Meta & Share Block -->
        <div class="mt-8 flex flex-col gap-4">
          <p class="font-montserrat font-medium text-[14px] lg:text-[16px] leading-[30px] tracking-normal text-[#747474]">
            <?php echo esc_html($author_name); ?> | <?php echo get_the_date('F Y'); ?> | <?php echo esc_html($reading_time); ?>
          </p>
          <div class="flex items-center gap-2.5">
            <span class="font-montserrat font-semibold text-[18px] leading-[30px] tracking-normal text-black">
              Share
            </span>
            <button type="button" aria-label="Share article" class="w-[44px] h-[44px] flex items-center justify-center rounded-full hover:bg-black/5 transition-colors focus:outline-none cursor-pointer">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/share-icon.svg'); ?>" alt="Share" class="w-[24px] h-[24px]">
            </button>
          </div>
        </div>
      </div>

      <!-- Right Side Image -->
      <div class="w-full lg:w-[583px] h-[300px] sm:h-[400px] lg:h-[512px] rounded-tr-[40.63px] rounded-bl-[40.63px] overflow-hidden shrink-0 opacity-100 bg-gray-100">
        <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- DESKTOP ARTICLE CONTENT & SIDEBAR SECTION -->
    <div class="w-full max-w-[1120px] mx-auto mt-10 flex flex-col lg:flex-row gap-[35px] items-start px-6 lg:px-0">
      
      <!-- LEFT SIDEBAR -->
      <aside class="w-full lg:w-[273px] flex flex-col gap-6 shrink-0 lg:sticky lg:top-28">
        
        <!-- SIDEBAR CARD 1: ON THIS PAGE -->
        <div class="w-full lg:w-[273px] min-h-[400px] bg-white border border-[#E8E8EA] rounded-[16px] p-6 flex flex-col gap-6 shadow-sm">
          <div class="flex items-center gap-3">
            <span class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full inline-block"></span>
            <h3 class="font-montserrat font-semibold text-[18px] leading-[24px] tracking-[0.08em] text-[#5D3700] uppercase">
              ON THIS PAGE
            </h3>
          </div>
          <?php echo starizo_get_toc( get_the_content() ); ?>
        </div>

        <!-- SIDEBAR CARD 2: GREEN CTA -->
        <div class="w-full lg:w-[273px] min-h-[320px] rounded-tr-[66px] rounded-bl-[66px] bg-gradient-to-br from-[#00A256] to-[#27B96C] p-7 flex flex-col justify-between shadow-md text-white">
          <div class="w-[216px] max-w-full flex flex-col gap-3">
            <h3 class="font-montserrat font-extrabold text-[27.19px] leading-[34.84px] text-white">
              Partner with ingredients That Perform.
            </h3>
            <p class="font-montserrat font-medium text-[18px] leading-[30px] text-white/95 mt-1">
              Let’s build better products together.
            </p>
          </div>
          <a href="<?php echo esc_url( site_url('/contact') ); ?>" class="group mt-4 w-full h-[44px] bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-montserrat font-bold text-[15px] rounded-full flex items-center justify-center gap-2 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shadow-md hover:shadow-xl select-none">
            <span>Contact Us</span>
            <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
          </a>
        </div>
      </aside>

      <!-- RIGHT SIDE ARTICLE BODY CONTAINER -->
      <article class="w-full lg:w-[812px] flex flex-col gap-6 text-black blog-content-wrapper">
        <div class="font-montserrat font-medium text-[18px] leading-[39px] text-[#333333]">
            <?php the_content(); ?>
        </div>
      </article>

    </div>

    <!-- DESKTOP RELATED READING SECTION -->
    <div class="w-full max-w-[1120px] mx-auto mt-16 pb-12 flex flex-col gap-8 px-4 lg:px-0">
      <div class="flex items-center gap-3">
        <span class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full inline-block"></span>
        <h2 class="font-montserrat font-normal text-[18px] leading-[28px] tracking-[0.11em] uppercase text-[#B86200]">
          RELATED READING
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
        <?php
        $cat_ids = array();
        if ( !empty($category) ) {
            foreach($category as $cat) {
                $cat_ids[] = $cat->term_id;
            }
        }
        $related_args = array(
            'category__in' => $cat_ids,
            'post__not_in' => array(get_the_ID()),
            'posts_per_page'=> 3,
            'ignore_sticky_posts'=> 1
        );
        $related_query = new WP_Query($related_args);
        
        if ( ! $related_query->have_posts() ) {
            $related_query = new WP_Query( array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post__not_in'   => array( get_the_ID() ),
            ) );
        }

        if( $related_query->have_posts() ) :
            while( $related_query->have_posts() ) :
                $related_query->the_post();
                $rel_reading_time = starizo_reading_time( get_the_content() );
                $rel_thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (!$rel_thumb) {
                    $rel_thumb = get_template_directory_uri() . '/public/assets/blog-industries.png';
                }
                $rel_cat = get_the_category();
                $rel_cat_name = !empty($rel_cat) ? $rel_cat[0]->name : 'Clean Label';
        ?>
        <div class="w-full max-w-[362px] min-h-[560px] bg-white border border-[#E8E8EA] shadow-[0px_4px_18.5px_0px_rgba(0,0,0,0.06)] rounded-tr-[40.63px] rounded-bl-[40.63px] p-[14.77px] flex flex-col justify-between mx-auto transition-transform hover:-translate-y-1">
          <div class="w-full h-[221.6px] overflow-hidden rounded-tr-[40.63px] rounded-bl-[40.63px]">
            <img src="<?php echo esc_url($rel_thumb); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
          </div>

          <div class="p-2.5 flex flex-col gap-[6px] flex-1 mt-3">
            <span class="font-montserrat font-bold text-[14px] leading-[22px] tracking-[0.11em] uppercase bg-gradient-to-r from-[#00A256] to-[#5DC671] bg-clip-text text-transparent block">
              <?php echo esc_html($rel_cat_name); ?>
            </span>

            <div class="flex flex-col gap-[9px]">
              <h3 class="font-montserrat font-bold text-[22px] leading-[29px] text-black hover:text-[#FF8D00] transition">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <p class="font-montserrat font-medium text-[18px] leading-[30px] text-[#333333] line-clamp-3">
                <?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
              </p>
            </div>
          </div>

          <div class="px-2.5 pb-2.5 pt-2 flex flex-col gap-2 border-t border-gray-100">
            <span class="font-['Work_Sans'] font-normal text-[16px] leading-[22.16px] text-[#828282] block">
              <?php echo get_the_date('F j, Y'); ?> | <?php echo esc_html($rel_reading_time); ?>
            </span>
            <a href="<?php the_permalink(); ?>" class="group font-montserrat font-semibold text-[18px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1.5 transition duration-150 w-fit select-none">
              <span>Read More</span>
              <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
          </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
      </div>
    </div>

    <!-- DESKTOP NEWSLETTER SECTION -->
    <section class="w-full bg-[#FDFBF3] py-14 px-4 sm:px-6 lg:px-8">
      <div class="max-w-[1123px] mx-auto relative rounded-[32px] sm:rounded-[44px] rounded-tr-none sm:rounded-tr-none bg-white overflow-hidden shadow-sm min-h-[320px] flex items-center p-8 sm:p-12 md:p-14">
        
        <div class="absolute inset-0 w-full h-full pointer-events-none overflow-hidden">
          <svg class="w-full h-full" viewBox="0 0 1123 320" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="newsletterOrangeGradDetail" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#FF8D00"/>
                <stop offset="100%" stop-color="#FFB457"/>
              </linearGradient>
            </defs>
            <rect width="1123" height="320" fill="#FFFFFF"/>
            <path d="M0 0H1050C1110 100 1075 220 900 320H0V0Z" fill="url(#newsletterOrangeGradDetail)"/>
            <path d="M1050 0H1123C1123 110 1080 230 900 320C1075 220 1110 100 1050 0Z" fill="#00A256"/>
          </svg>
        </div>

        <div class="relative z-10 max-w-[580px] flex flex-col gap-5 text-white">
          <span class="font-montserrat font-bold text-[14px] leading-[22px] tracking-[0.11em] uppercase text-white/90">
            NEWSLETTER
          </span>
          <h2 class="font-montserrat font-extrabold text-[32px] sm:text-[40px] md:text-[44px] leading-[42px] sm:leading-[52px] text-white">
            Get Insights That Matter
          </h2>
          <p class="font-montserrat font-medium text-[16px] sm:text-[18px] leading-[26px] sm:leading-[28px] text-white/95">
            Monthly perspectives on ingredients, manufacturing, and formulation innovation.
          </p>

          <form id="starizo-newsletter-form" class="mt-2 w-full max-w-[480px] bg-white rounded-full p-[4px] sm:p-[6px] pl-3.5 sm:pl-6 flex items-center justify-between shadow-md border border-white/40 gap-1.5 sm:gap-2">
            <?php wp_nonce_field( 'starizo_newsletter_nonce', 'security' ); ?>
            <input type="email" name="email" id="newsletter-email" placeholder="Enter your email address" class="w-full bg-transparent font-montserrat font-medium text-[12px] sm:text-[16px] text-black placeholder-[#828282] outline-none pr-1" required>
            <button type="submit" id="newsletter-submit-btn" class="px-3.5 sm:px-5 h-[36px] sm:h-[44px] rounded-full border border-[#FF8D00] text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white font-montserrat font-semibold text-[12px] sm:text-[16px] flex items-center justify-center gap-1 sm:gap-1.5 transition-all shrink-0 select-none cursor-pointer whitespace-nowrap">
              <span id="newsletter-btn-text">Submit</span>
              <svg id="newsletter-btn-icon" class="w-3.5 sm:w-4 h-3.5 sm:h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
          </form>
          <div id="newsletter-msg" class="hidden font-montserrat font-medium text-[14px] px-4 py-2 rounded-full mt-1 transition-all"></div>
        </div>

      </div>
    </section>

    <?php endwhile; ?>
</div>

<!-- ==================== MOBILE LAYOUT (block lg:hidden 1:1 FIGMA MATCHING blog-detail.html) ==================== -->
<div class="block lg:hidden w-full font-montserrat bg-[#FDFBF3] text-black min-h-screen antialiased overflow-x-hidden pt-3 pb-12">
    <?php rewind_posts(); while ( have_posts() ) : the_post(); 
        $reading_time = starizo_reading_time( get_the_content() );
        $category = get_the_category(); 
        $cat_name = !empty($category) ? $category[0]->name : 'Insight';
        $thumb = get_the_post_thumbnail_url(get_the_ID(), 'full');
        if (!$thumb) {
            $thumb = get_template_directory_uri() . '/public/assets/blog-detail-paddie.png';
        }
    ?>
    <main class="w-full px-4 pt-1 pb-4 flex flex-col gap-5 bg-[#FDFBF3]">
      
      <!-- Mobile Breadcrumb -->
      <nav aria-label="Breadcrumb" class="flex items-center gap-1.5 text-[12px] leading-none">
        <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="font-montserrat font-medium text-[#7F7F7F]">Insights</a>
        <span class="font-montserrat font-normal text-[#7F7F7F]">/ Insights Details</span>
      </nav>

      <!-- Mobile Hero Card Container (1:1 Figma Spec) -->
      <div class="w-full bg-white border border-[#E8E8EA] rounded-[32px] p-6 flex flex-col gap-4 shadow-sm">
        <span class="font-montserrat font-bold text-[12px] leading-[18px] tracking-[0.11em] uppercase bg-gradient-to-r from-[#00A256] to-[#5DC671] bg-clip-text text-transparent block">
          <?php echo esc_html($cat_name); ?>
        </span>

        <h1 class="font-montserrat font-extrabold text-[22px] leading-[29px] text-black">
          <?php the_title(); ?>
        </h1>

        <p class="font-montserrat font-medium text-[14px] leading-[22px] text-[#333333]">
          <?php echo wp_trim_words( get_the_excerpt(), 22, '...' ); ?>
        </p>

        <div class="w-full h-[220px] rounded-[24px] overflow-hidden my-1 bg-gray-100">
          <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
        </div>

        <div class="pt-1 flex items-center">
          <button type="button" aria-label="Share article" class="focus:outline-none cursor-pointer">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/share-icon.svg'); ?>" alt="Share" class="w-[22px] h-[22px] hover:opacity-80 transition-opacity">
          </button>
        </div>
      </div>

      <!-- Mobile Article Body Content Container -->
      <article class="w-full max-w-[337px] mx-auto flex flex-col gap-[20px] text-black pt-2 opacity-100 blog-content-wrapper-mobile">
        <div class="font-montserrat font-medium text-[15px] leading-[26px] text-[#333333]">
          <?php the_content(); ?>
        </div>
      </article>

      <!-- Mobile Green CTA Card -->
      <div class="w-full max-w-[337px] mx-auto rounded-tr-[44px] rounded-bl-[44px] bg-gradient-to-br from-[#00A256] to-[#27B96C] p-6 flex flex-col justify-between shadow-md text-white my-2">
        <div class="flex flex-col gap-2">
          <h3 class="font-montserrat font-extrabold text-[22px] leading-[28px] text-white">
            Partner with ingredients That Perform.
          </h3>
          <p class="font-montserrat font-medium text-[15px] leading-[24px] text-white/95 mt-1">
            Let’s build better products together.
          </p>
        </div>
        <a href="<?php echo esc_url( site_url('/contact') ); ?>" class="mt-5 w-full h-[42px] bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-bold text-[14px] rounded-full flex items-center justify-center gap-2 shadow-md transition-all select-none">
          <span>Contact Us</span>
          <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </a>
      </div>

      <!-- Mobile Related Reading Section (1:1 Figma Spec) -->
      <div class="w-full max-w-[344px] mx-auto flex flex-col gap-4 mt-4">
        <div class="flex items-center gap-2.5">
          <span class="w-[3px] h-[20px] bg-[#FF8D00] rounded-full inline-block"></span>
          <h2 class="font-montserrat font-normal text-[16px] leading-[24px] tracking-[0.11em] uppercase text-[#B86200]">
            RELATED READING
          </h2>
        </div>

        <div class="flex flex-col gap-6">
          <?php
          if( isset($related_query) && $related_query->have_posts() ) :
              $related_query->rewind_posts();
              while( $related_query->have_posts() ) : $related_query->the_post();
                  $rel_reading_time = starizo_reading_time( get_the_content() );
                  $rel_thumb = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: get_template_directory_uri() . '/public/assets/blog-industries.png';
                  $rel_cat = get_the_category();
                  $rel_cat_name = !empty($rel_cat) ? $rel_cat[0]->name : 'Clean Label';
          ?>
          <div class="w-full max-w-[344px] min-h-[546px] bg-white border border-[#E8E8EA] shadow-[0px_4px_18.5px_0px_rgba(0,0,0,0.06)] rounded-tr-[38.22px] rounded-bl-[38.22px] p-[13.9px] flex flex-col justify-between mx-auto">
            <div class="w-full h-[208.45px] overflow-hidden rounded-tr-[38.22px] rounded-bl-[38.22px] shrink-0">
              <img src="<?php echo esc_url($rel_thumb); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
            </div>

            <div class="p-2 flex flex-col gap-2 flex-1 mt-2">
              <span class="font-montserrat font-bold text-[12px] leading-[18px] tracking-[0.11em] uppercase bg-gradient-to-r from-[#00A256] to-[#5DC671] bg-clip-text text-transparent block">
                <?php echo esc_html($rel_cat_name); ?>
              </span>
              <h3 class="font-montserrat font-bold text-[18px] leading-[24px] text-black">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <p class="font-montserrat font-medium text-[14px] leading-[22px] text-[#333333] line-clamp-3">
                <?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>
              </p>
            </div>

            <div class="p-2 pt-2 border-t border-gray-100 flex flex-col gap-2">
              <span class="font-['Work_Sans'] font-normal text-[13px] text-[#828282]">
                <?php echo get_the_date('F j, Y'); ?> | <?php echo esc_html($rel_reading_time); ?>
              </span>
              <a href="<?php the_permalink(); ?>" class="font-montserrat font-semibold text-[15px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1 transition duration-150 select-none">
                <span>Read More</span>
                <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </a>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
      </div>

      <!-- Mobile Newsletter Section (1:1 Spec) -->
      <div class="w-full max-w-[360px] mx-auto relative rounded-[28px] rounded-tr-none bg-white overflow-hidden shadow-md min-h-[280px] p-6 flex flex-col justify-between my-4">
        <div class="absolute inset-0 w-full h-full pointer-events-none overflow-hidden">
          <svg class="w-full h-full" viewBox="0 0 360 280" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="mobileNewsletterOrangeGradDetail" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#FF8D00"/>
                <stop offset="100%" stop-color="#FFB457"/>
              </linearGradient>
            </defs>
            <rect width="360" height="280" fill="#FFFFFF"/>
            <path d="M0 0H330C350 100 340 200 270 280H0V0Z" fill="url(#mobileNewsletterOrangeGradDetail)"/>
            <path d="M330 0H360C360 110 345 200 270 280C340 200 350 100 330 0Z" fill="#00A256"/>
          </svg>
        </div>

        <div class="relative z-10 flex flex-col gap-3 text-white">
          <span class="font-montserrat font-bold text-[12px] leading-[22px] tracking-[0.11em] uppercase text-white">
            NEWSLETTER
          </span>
          <h2 class="font-montserrat font-black text-[22px] leading-[30px] tracking-normal text-white">
            Get Insights That Matter
          </h2>
          <p class="font-montserrat font-medium text-[12px] leading-[24px] tracking-normal text-white/95">
            Monthly perspectives on ingredients, manufacturing, and formulation innovation.
          </p>
          <form id="starizo-newsletter-form-mobile" class="mt-2 w-full max-w-[320px] bg-white rounded-full p-[4px] pl-3 flex items-center justify-between shadow-sm border border-white/40 gap-1.5">
            <?php wp_nonce_field( 'starizo_newsletter_nonce', 'security' ); ?>
            <input type="email" name="email" placeholder="Enter your email address" class="w-full bg-transparent font-montserrat font-medium text-[11px] text-black placeholder-[#828282] outline-none pr-1" required>
            <button type="submit" class="px-3 h-[32px] rounded-full border border-[#FF8D00] text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white font-montserrat font-semibold text-[11px] flex items-center justify-center gap-1 transition-all shrink-0 select-none cursor-pointer whitespace-nowrap">
              <span>Submit</span>
              <svg class="w-3 h-3 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
          </form>
        </div>
      </div>

    </main>
    <?php endwhile; ?>
</div>

<!-- Extra styles for blog content -->
<style>
.blog-content-wrapper p, .blog-content-wrapper-mobile p {
    margin-bottom: 1.25rem;
}
.blog-content-wrapper-mobile p {
    font-size: 15px;
    line-height: 26px;
    color: #333333;
}
.blog-content-wrapper-mobile h2 {
    font-size: 18px;
    line-height: 26px;
    font-weight: 700;
    background: linear-gradient(90deg, #00A256 0%, #5DC671 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-top: 1.5rem;
    margin-bottom: 0.75rem;
}
.blog-content-wrapper ul, .blog-content-wrapper-mobile ul {
    list-style-type: disc;
    padding-left: 1.5rem;
    margin-bottom: 1.25rem;
}
.blog-content-wrapper li, .blog-content-wrapper-mobile li {
    margin-bottom: 0.5rem;
}
</style>

<?php get_footer(); ?>
