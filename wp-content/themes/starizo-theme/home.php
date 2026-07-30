<?php
/**
 * The main template file / Blog Archive
 */

get_header(); ?>

<!-- ==================== DESKTOP LAYOUT ==================== -->
<div class="w-full font-montserrat bg-[#FDFBF3] text-black min-h-screen antialiased overflow-x-hidden">
  
  <?php 
  // Fetch the latest post for the Hero
  $featured_query = new WP_Query( array(
      'posts_per_page' => 1,
      'post_status'    => 'publish'
  ) );
  ?>

  <!-- Hero Main Container -->
  <section class="relative w-full h-[800px] bg-[#FDFBF3] overflow-hidden hidden xl:block pt-24">
    
    <!-- Left Background Looper-1 -->
    <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/Looper-1.png'); ?>" alt="" class="absolute left-0 top-0 h-full w-auto object-contain opacity-60 pointer-events-none select-none z-0">

    <!-- Left Text Content Container -->
    <div class="absolute top-[234px] left-[79px] w-[385px] h-[332px] z-10 flex flex-col gap-[14px]">
      <span class="font-montserrat font-bold text-[14px] leading-[22px] tracking-[0.11em] text-black uppercase block">
        INSIGHTS
      </span>
      <div class="flex flex-col gap-[14px]">
        <h1 class="font-montserrat font-black text-[42px] leading-[54px] text-[#00A256]">
          Ideas. Ingredients. Innovation.
        </h1>
        <p class="font-montserrat font-medium text-[18px] leading-[30px] text-black">
          From technical deep-dives to industry perspectives, discover practical insights designed for formulators, manufacturers, R&D teams, and decision-makers.
        </p>
      </div>
    </div>

    <!-- Right Hero Image -->
    <div class="absolute left-[483px] right-0 top-0 h-[800px] overflow-hidden rounded-bl-[222px] z-0 shadow-lg">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/blog-hero.png'); ?>" alt="Starizo Blog Hero" class="w-full h-full object-cover">
    </div>

    <!-- Featured Article Card -->
    <?php if ( $featured_query->have_posts() ) : ?>
        <?php while ( $featured_query->have_posts() ) : $featured_query->the_post(); 
            $featured_id = get_the_ID();
            $reading_time = starizo_reading_time( get_the_content() );
            $category = get_the_category(); 
            $cat_name = !empty($category) ? $category[0]->name : 'Insight';
        ?>
        <div class="absolute top-[194px] left-[722px] w-[387px] h-[412px] rounded-[37px] pt-[35px] pr-[35px] pb-[28px] pl-[24px] shadow-2xl z-20 flex flex-col justify-between border border-white/40" style="background: #FFFFFFE8; backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);">
          <div class="w-[328px] flex flex-col justify-between gap-[24px] h-full">
            <span class="font-montserrat font-bold text-[14px] leading-[22px] tracking-[0.11em] uppercase bg-gradient-to-r from-[#00A256] to-[#5DC671] bg-clip-text text-transparent block">
              FEATURED ARTICLE
            </span>
            <div class="flex flex-col gap-[9px]">
              <h2 class="font-montserrat font-bold text-[22px] leading-[29px] text-black">
                <?php the_title(); ?>
              </h2>
              <p class="font-montserrat font-medium text-[18px] leading-[30px] text-[#333333] line-clamp-3">
                <?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>
              </p>
            </div>
            <span class="font-['Work_Sans'] font-normal text-[16px] leading-[22.16px] text-[#828282] block">
              <?php echo get_the_date(); ?> | <?php echo esc_html($reading_time); ?> | <?php echo esc_html($cat_name); ?>
            </span>
            <a href="<?php the_permalink(); ?>" class="w-[150px] h-[45px] bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-semibold text-[18px] leading-[21px] rounded-full flex items-center justify-center gap-[12px] shadow-md transition-transform transform hover:scale-105 select-none">
              <span>Read More</span>
              <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
          </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
  </section>
  
  <!-- ==================== MOBILE HERO SECTION (1:1 FIGMA SPEC) ==================== -->
  <section class="xl:hidden relative w-full px-4 pt-6 pb-10 flex flex-col gap-8 overflow-hidden bg-[#FDFBF3]">
    
    <!-- Background Line Decorative Overlay (Looper-1) -->
    <div class="absolute left-[-20px] top-[10px] w-[260px] pointer-events-none opacity-40 z-0">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/Looper-1.png' ); ?>" alt="" class="w-full h-auto object-contain">
    </div>

    <!-- Top Container: Hero Image with 100% Centered Overlay Card -->
    <div class="relative z-10 w-full flex flex-col items-center pt-2 pb-4">
      
      <!-- Background Paddy Photo -->
      <div class="absolute top-0 right-0 w-[299px] max-w-[85%] h-[355px] rounded-bl-[67.64px] overflow-hidden shadow-sm z-0">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/blog-hero-sm.png' ); ?>" alt="Featured Paddy Field" class="w-full h-full object-cover">
      </div>

      <!-- 100% Viewport-Centered White Featured Article Card -->
      <?php if ( $featured_query->have_posts() ) : ?>
        <?php 
        $featured_query->rewind_posts();
        while ( $featured_query->have_posts() ) : $featured_query->the_post(); 
          $reading_time = starizo_reading_time( get_the_content() );
          $category = get_the_category(); 
          $cat_name = !empty($category) ? $category[0]->name : 'Insight';
        ?>
        <div class="relative z-10 w-full px-4 flex justify-center mt-[70px]">
          <div class="w-full max-w-[340px] bg-white/95 backdrop-blur-md rounded-[28px] p-6 shadow-xl border border-gray-100/80 flex flex-col gap-3">
            <span class="font-montserrat font-bold text-[12px] leading-[18px] tracking-[0.11em] uppercase text-[#00A256]">
              FEATURED ARTICLE
            </span>
            <h2 class="font-montserrat font-bold text-[19px] leading-[25px] text-black">
              <?php the_title(); ?>
            </h2>
            <p class="font-montserrat font-medium text-[13px] leading-[20px] text-[#333333] line-clamp-3">
              <?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?>
            </p>
            <span class="font-['Work_Sans'] font-normal text-[13px] text-[#828282]">
              <?php echo get_the_date(); ?> | <?php echo esc_html($reading_time); ?> | <?php echo esc_html($cat_name); ?>
            </span>
            <div class="pt-1">
              <a href="<?php the_permalink(); ?>" class="w-[140px] h-[40px] bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-semibold text-[14px] rounded-full flex items-center justify-center gap-2 shadow-md transition-all select-none">
                <span>Read More</span>
                <svg class="w-3.5 h-3.5 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
              </a>
            </div>
          </div>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
      <?php endif; ?>

    </div>

    <!-- Bottom Headline Block -->
    <div class="relative z-10 w-full max-w-[360px] mx-auto flex flex-col gap-2 pt-2">
      <span class="font-montserrat font-bold text-[12px] tracking-[0.11em] uppercase text-black">
        INSIGHTS
      </span>
      <h1 class="font-montserrat font-extrabold text-[28px] leading-[36px] text-[#00A256]">
        Ideas. Ingredients. Innovation.
      </h1>
      <p class="font-montserrat font-medium text-[14px] leading-[22px] text-black/80">
        From technical deep-dives to industry perspectives, discover practical insights designed for formulators, manufacturers, R&D teams, and decision-makers.
      </p>
    </div>

  </section>

  <!-- ==================== EXPLORE BY TOPIC SECTION ==================== -->
  <section class="w-full bg-[#FDFBF3] py-10 px-6 xl:px-0">
    <div class="w-full max-w-[1117px] mx-auto flex flex-col gap-6 items-center">
      <div class="flex items-center justify-center gap-3">
        <span class="w-[3px] h-[24px] bg-[#FF8D00] rounded-full inline-block"></span>
        <h2 class="font-montserrat font-normal text-[22px] leading-[54px] tracking-[0.11em] uppercase text-[#B86200]">
          EXPLORE BY TOPIC
        </h2>
      </div>

      <!-- Desktop Grid -->
      <div class="hidden sm:grid w-full grid-cols-2 md:grid-cols-5 gap-x-[6px] gap-y-[12px] justify-items-center">
        <!-- ALL TOPICS Pill -->
        <button type="button" data-topic="all" class="topic-filter-btn w-full max-w-[218px] h-[46px] rounded-[42px] px-2 py-3 bg-gradient-to-r from-[#FF8D00] to-[#FFB457] text-white border-0 shadow-md font-montserrat font-bold text-[13px] leading-[22px] tracking-[0.05em] uppercase flex items-center justify-center text-center cursor-pointer transition-all select-none">
            ALL TOPICS
        </button>
        <?php
        $categories = get_categories(array('hide_empty' => 0));
        foreach($categories as $cat) : 
        ?>
        <button type="button" data-topic="<?php echo esc_attr($cat->slug); ?>" class="topic-filter-btn w-full max-w-[218px] h-[46px] rounded-[42px] px-2 py-3 bg-white border border-[#FF8D00] text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white transition-all font-montserrat font-bold text-[13px] leading-[22px] tracking-[0.05em] uppercase flex items-center justify-center text-center cursor-pointer select-none">
            <?php echo esc_html($cat->name); ?>
        </button>
        <?php endforeach; ?>
      </div>
      
      <!-- Mobile Grid (Collapsible +6 toggle) -->
      <div class="sm:hidden w-full flex flex-col gap-3 relative px-2">
        <div class="grid grid-cols-2 gap-2.5">
          <button type="button" data-topic="all" class="topic-filter-btn topic-pill-mobile bg-gradient-to-r from-[#FF8D00] to-[#FFB457] text-white border-0 shadow-sm font-montserrat font-bold text-[11px] uppercase flex items-center justify-center cursor-pointer select-none">
              ALL TOPICS
          </button>
          <?php 
          $m_count = 0;
          foreach($categories as $cat) : 
            $m_count++;
            $is_hidden = ($m_count > 2);
          ?>
          <button type="button" data-topic="<?php echo esc_attr($cat->slug); ?>" class="topic-filter-btn topic-pill-mobile <?php echo $is_hidden ? 'mobile-extra-pill hidden' : ''; ?> bg-white border border-[#FF8D00] text-[#FF8D00] font-montserrat font-bold text-[11px] uppercase flex items-center justify-center cursor-pointer select-none">
              <?php echo esc_html($cat->name); ?>
          </button>
          <?php endforeach; ?>

          <?php if (count($categories) > 2) : ?>
          <!-- Expander Pill (+6) -->
          <button id="topic-expand-btn" class="topic-pill-plus6 select-none h-[32px] rounded-[42px] px-4 bg-white border border-[#FF8D00] text-[#FF8D00] font-montserrat font-bold text-[11px] uppercase flex items-center justify-center cursor-pointer">
            +<?php echo (count($categories) - 2); ?>
          </button>
          <?php endif; ?>
        </div>

        <!-- Close X Button (Figma Spec: w-[46.28px], h-[32px], rounded-[42px], border border-[#FF8D00]) -->
        <div id="topic-close-wrapper" class="hidden flex justify-end mt-2">
          <button id="topic-collapse-btn" class="topic-pill-close select-none w-[46.28px] h-[32px] rounded-[42px] border border-[#FF8D00] bg-white text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white flex items-center justify-center cursor-pointer transition-all">
            <svg class="w-3.5 h-3.5 fill-current text-[#FF8D00]" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/></svg>
          </button>
        </div>
      </div>

    </div>
  </section>

  <!-- ==================== LATEST INSIGHTS SECTION ==================== -->
  <section class="w-full bg-[#FDFBF3] pb-4 px-6 xl:px-0">
    <div class="max-w-[1123px] mx-auto flex flex-col gap-8">
      
      <!-- Section Heading -->
      <div class="flex items-center gap-3">
        <span class="w-[3px] h-[24px] bg-[#FF8D00] rounded-full inline-block"></span>
        <h2 class="font-montserrat font-normal text-[22px] leading-[54px] tracking-[0.11em] uppercase text-[#B86200]">
          LATEST INSIGHTS
        </h2>
      </div>

      <!-- Posts Grid -->
      <div id="insights-posts-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-[24px]">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                if ( isset($featured_id) && get_the_ID() == $featured_id && !is_paged() ) continue;
                
                $reading_time = starizo_reading_time( get_the_content() );
                $category = get_the_category(); 
                $cat_name = !empty($category) ? $category[0]->name : 'Insight';
                $cat_slug = !empty($category) ? $category[0]->slug : 'all';
                $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (!$thumb) {
                    $thumb = get_template_directory_uri() . '/public/assets/blog-industries.png';
                }
        ?>
        <div data-category="<?php echo esc_attr($cat_slug); ?>" class="insight-post-card w-full max-w-[362px] min-h-[546px] bg-white border border-[#E8E8EA] shadow-[0px_4px_18.5px_0px_rgba(0,0,0,0.06)] rounded-tr-[40.63px] rounded-bl-[40.63px] p-[14.77px] flex flex-col justify-between mx-auto transition-all duration-300 hover:-translate-y-1">
          <!-- Top Image -->
          <div class="w-full h-[221.6px] overflow-hidden rounded-tr-[40.63px] rounded-bl-[40.63px] bg-gray-200">
            <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
          </div>

          <!-- Content Area -->
          <div class="p-2.5 flex flex-col gap-[6px] flex-1 mt-3">
            <span class="font-montserrat font-bold text-[14px] leading-[22px] tracking-[0.11em] uppercase text-[#00A256] block">
              <?php echo esc_html($cat_name); ?>
            </span>
            <div class="flex flex-col gap-[9px]">
              <h3 class="font-montserrat font-bold text-[22px] leading-[29px] text-black hover:text-[#FF8D00] transition">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <p class="font-montserrat font-medium text-[16px] leading-[26px] text-[#333333] line-clamp-3">
                <?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
              </p>
            </div>
          </div>

          <!-- Meta + Read More Footer -->
          <div class="px-2.5 pb-2.5 pt-2 flex flex-col gap-2 border-t border-gray-100">
            <span class="font-['Work_Sans'] font-normal text-[14px] leading-[22px] text-[#828282] block">
              <?php echo get_the_date(); ?> | <?php echo esc_html($reading_time); ?>
            </span>
            <a href="<?php the_permalink(); ?>" class="group font-montserrat font-semibold text-[18px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1.5 transition duration-150 w-fit select-none mt-2">
              <span>Read More</span>
              <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
          </div>
        </div>
        <?php
            endwhile;
        endif;
        ?>
      </div>

      <!-- No Posts Match Message (Hidden by default) -->
      <div id="no-insights-msg" class="hidden text-center py-12">
        <p class="font-montserrat font-semibold text-[18px] text-[#828282]">No articles found under this topic.</p>
      </div>

      <!-- 1:1 Load More Button -->
      <div class="flex justify-center mt-4 mb-2">
        <button id="load-more-btn" type="button" class="w-[160px] h-[46px] rounded-full border border-[#FF8D00] bg-white text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white font-montserrat font-semibold text-[15px] flex items-center justify-center gap-2 transition-all cursor-pointer shadow-sm select-none">
          <span>Load More</span>
          <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
        </button>
      </div>

    </div>
  </section>

  <!-- Interactive Topic Filtering & Expander Script -->
  <script>
  document.addEventListener('DOMContentLoaded', () => {
      const topicBtns = document.querySelectorAll('.topic-filter-btn');
      const postCards = document.querySelectorAll('.insight-post-card');
      const noMsg = document.getElementById('no-insights-msg');

      const activeClasses = ['bg-gradient-to-r', 'from-[#FF8D00]', 'to-[#FFB457]', 'text-white', 'border-0', 'shadow-md'];
      const inactiveClasses = ['bg-white', 'border', 'border-[#FF8D00]', 'text-[#FF8D00]', 'hover:bg-[#FF8D00]', 'hover:text-white'];

      topicBtns.forEach(btn => {
          btn.addEventListener('click', () => {
              const selectedTopic = btn.getAttribute('data-topic');

              // Update all buttons visual state
              topicBtns.forEach(b => {
                  if (b.getAttribute('data-topic') === selectedTopic) {
                      b.classList.remove(...inactiveClasses);
                      b.classList.add(...activeClasses);
                  } else {
                      b.classList.remove(...activeClasses);
                      b.classList.add(...inactiveClasses);
                  }
              });

              // Filter post cards
              let visibleCount = 0;
              postCards.forEach(card => {
                  const cardCat = card.getAttribute('data-category');
                  if (selectedTopic === 'all' || cardCat === selectedTopic) {
                      card.style.display = 'flex';
                      visibleCount++;
                  } else {
                      card.style.display = 'none';
                  }
              });

              if (noMsg) {
                  if (visibleCount === 0) {
                      noMsg.classList.remove('hidden');
                  } else {
                      noMsg.classList.add('hidden');
                  }
              }
          });
      });

      // Mobile Topic Expander (+6 and Close X)
      const expandBtn = document.getElementById('topic-expand-btn');
      const collapseBtn = document.getElementById('topic-collapse-btn');
      const closeWrapper = document.getElementById('topic-close-wrapper');
      const extraPills = document.querySelectorAll('.mobile-extra-pill');

      if (expandBtn) {
          expandBtn.addEventListener('click', () => {
              extraPills.forEach(p => p.classList.remove('hidden'));
              expandBtn.classList.add('hidden');
              if (closeWrapper) closeWrapper.classList.remove('hidden');
          });
      }

      if (collapseBtn) {
          collapseBtn.addEventListener('click', () => {
              extraPills.forEach(p => p.classList.add('hidden'));
              if (expandBtn) expandBtn.classList.remove('hidden');
              if (closeWrapper) closeWrapper.classList.add('hidden');
          });
      }
  });
  </script>
  <!-- ==================== NEWSLETTER CTA BANNER (1:1 FIGMA SPEC MATCHING BLOG.HTML) ==================== -->
  <section class="w-full bg-[#FDFBF3] py-14 px-4 sm:px-6 lg:px-8">
    <div class="max-w-[1123px] mx-auto relative rounded-[32px] sm:rounded-[44px] rounded-tr-none sm:rounded-tr-none bg-white overflow-hidden shadow-sm min-h-[320px] flex items-center p-8 sm:p-12 md:p-14">
      
      <!-- Background Layer: Orange Gradient + Green Ribbon + Outer Radius Clipping -->
      <div class="absolute inset-0 w-full h-full pointer-events-none overflow-hidden">
        <svg class="w-full h-full" viewBox="0 0 1123 320" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="newsletterOrangeGrad" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" stop-color="#FF8D00"/>
              <stop offset="100%" stop-color="#FFB457"/>
            </linearGradient>
          </defs>

          <!-- Base White Background for Bottom Right Side -->
          <rect width="1123" height="320" fill="#FFFFFF"/>
          
          <!-- Orange Main Body with linear-gradient(90deg, #FF8D00 0%, #FFB457 100%) -->
          <path d="M0 0H1050C1110 100 1075 220 900 320H0V0Z" fill="url(#newsletterOrangeGrad)"/>
          
          <!-- Green Tapered Ribbon -->
          <path d="M1050 0H1123C1123 110 1080 230 900 320C1075 220 1110 100 1050 0Z" fill="#00A256"/>
        </svg>
      </div>

      <!-- Banner Content Area -->
      <div class="relative z-10 max-w-[580px] flex flex-col gap-5 text-white">
        
        <!-- Category Tag -->
        <span class="font-montserrat font-bold text-[14px] leading-[22px] tracking-[0.11em] uppercase text-white/90">
          NEWSLETTER
        </span>

        <!-- Main Headline -->
        <h2 class="font-montserrat font-extrabold text-[32px] sm:text-[40px] md:text-[44px] leading-[42px] sm:leading-[52px] text-white">
          Get Insights That Matter
        </h2>

        <!-- Subtitle -->
        <p class="font-montserrat font-medium text-[16px] sm:text-[18px] leading-[26px] sm:leading-[28px] text-white/95">
          Monthly perspectives on ingredients, manufacturing, and formulation innovation.
        </p>

        <!-- Input + Submit Button Box -->
        <form id="starizo-newsletter-form-home" class="mt-2 w-full max-w-[480px] bg-white rounded-full p-[4px] sm:p-[6px] pl-3.5 sm:pl-6 flex items-center justify-between shadow-md border border-white/40 gap-1.5 sm:gap-2">
          <?php wp_nonce_field( 'starizo_newsletter_nonce', 'security' ); ?>
          <input type="email" name="email" id="newsletter-email-home" placeholder="Enter your email address" class="w-full bg-transparent font-montserrat font-medium text-[12px] sm:text-[16px] text-black placeholder-[#828282] outline-none pr-1" required>
          <button type="submit" id="newsletter-submit-btn-home" class="px-3.5 sm:px-5 h-[36px] sm:h-[44px] rounded-full border border-[#FF8D00] text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white font-montserrat font-semibold text-[12px] sm:text-[16px] flex items-center justify-center gap-1 sm:gap-1.5 transition-all shrink-0 select-none cursor-pointer whitespace-nowrap">
            <span id="newsletter-btn-text-home">Submit</span>
            <svg class="w-3.5 sm:w-4 h-3.5 sm:h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
          </button>
        </form>
        <div id="newsletter-msg-home" class="hidden font-montserrat font-medium text-[14px] px-4 py-2 rounded-full mt-1 transition-all text-center"></div>

      </div>

    </div>
  </section>

  <script>
  document.addEventListener('DOMContentLoaded', () => {
      const formHome = document.getElementById('starizo-newsletter-form-home');
      const emailInputHome = document.getElementById('newsletter-email-home');
      const submitBtnHome = document.getElementById('newsletter-submit-btn-home');
      const btnTextHome = document.getElementById('newsletter-btn-text-home');
      const msgBoxHome = document.getElementById('newsletter-msg-home');
      const ajaxUrlHome = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';

      if (formHome) {
          formHome.addEventListener('submit', (e) => {
              e.preventDefault();
              const email = emailInputHome.value.trim();
              const nonce = formHome.querySelector('input[name="security"]').value;

              if (!email) return;

              btnTextHome.textContent = '...';
              submitBtnHome.disabled = true;
              msgBoxHome.classList.add('hidden');
              msgBoxHome.className = 'hidden font-montserrat font-medium text-[14px] px-4 py-2 rounded-full mt-1 transition-all text-center';

              const formData = new FormData();
              formData.append('action', 'starizo_newsletter');
              formData.append('email', email);
              formData.append('security', nonce);

              fetch(ajaxUrlHome, {
                  method: 'POST',
                  body: formData
              })
              .then(response => response.json())
              .then(data => {
                  msgBoxHome.classList.remove('hidden');
                  msgBoxHome.textContent = data.data.message || (data.success ? 'Success!' : 'An error occurred.');
                  
                  if (data.success) {
                      msgBoxHome.classList.add('bg-[#E8F8F5]', 'text-[#00A256]', 'border', 'border-[#00A256]/20');
                      emailInputHome.value = '';
                  } else {
                      msgBoxHome.classList.add('bg-[#FDEDED]', 'text-[#EB5757]', 'border', 'border-[#EB5757]/20');
                  }
              })
              .catch(err => {
                  console.error(err);
                  msgBoxHome.classList.remove('hidden');
                  msgBoxHome.textContent = 'A network error occurred. Please try again.';
                  msgBoxHome.classList.add('bg-[#FDEDED]', 'text-[#EB5757]', 'border', 'border-[#EB5757]/20');
              })
              .finally(() => {
                  btnTextHome.textContent = 'Subscribe';
                  submitBtnHome.disabled = false;
              });
          });
      }
  });
  </script>

</main>

<?php get_footer(); ?>
