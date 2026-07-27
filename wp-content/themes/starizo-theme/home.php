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
  
  <!-- Mobile Hero -->
  <section class="xl:hidden w-full bg-[#FDFBF3] px-6 pt-28 pb-10 flex flex-col gap-8">
     <div class="flex flex-col gap-4">
      <span class="font-montserrat font-bold text-[12px] leading-[22px] tracking-[0.11em] text-black uppercase block">
        INSIGHTS
      </span>
      <h1 class="font-montserrat font-black text-[32px] leading-[40px] text-[#00A256]">
        Ideas. Ingredients. Innovation.
      </h1>
      <p class="font-montserrat font-medium text-[16px] leading-[26px] text-black">
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
        <?php
        $categories = get_categories(array('hide_empty' => 0));
        foreach($categories as $index => $cat) : 
            $active_class = ($index === 0) ? 'bg-gradient-to-r from-[#FF8D00] to-[#FFB457] text-white border-0 shadow-md' : 'bg-white border border-[#FF8D00] text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white transition-all';
        ?>
        <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="w-full max-w-[218px] h-[46px] rounded-[42px] px-2 py-3 <?php echo esc_attr($active_class); ?> font-montserrat font-bold text-[13px] leading-[22px] tracking-[0.05em] uppercase flex items-center justify-center text-center">
            <?php echo esc_html($cat->name); ?>
        </a>
        <?php endforeach; ?>
      </div>
      
      <!-- Mobile Grid (simplified) -->
      <div class="sm:hidden w-full flex flex-wrap gap-2 justify-center">
        <?php foreach($categories as $index => $cat) : 
            $active_class = ($index === 0) ? 'bg-gradient-to-r from-[#FF8D00] to-[#FFB457] text-white border-0 shadow-sm' : 'bg-white border border-[#FF8D00] text-[#FF8D00]';
        ?>
        <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="h-[32px] rounded-[42px] px-4 <?php echo esc_attr($active_class); ?> font-montserrat font-bold text-[11px] uppercase flex items-center justify-center">
            <?php echo esc_html($cat->name); ?>
        </a>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ==================== LATEST INSIGHTS SECTION ==================== -->
  <section class="w-full bg-[#FDFBF3] pb-24 px-6 xl:px-0">
    <div class="max-w-[1123px] mx-auto flex flex-col gap-10">
      
      <!-- Section Heading -->
      <div class="flex items-center gap-3">
        <span class="w-[3px] h-[24px] bg-[#FF8D00] rounded-full inline-block"></span>
        <h2 class="font-montserrat font-normal text-[22px] leading-[54px] tracking-[0.11em] uppercase text-[#B86200]">
          LATEST INSIGHTS
        </h2>
      </div>

      <!-- Posts Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-[24px]">
        <?php
        // Main Loop (skipping the featured post if we wanted, but let's just use standard main loop for pagination)
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                // Skip featured post if on first page
                if ( isset($featured_id) && get_the_ID() == $featured_id && !is_paged() ) continue;
                
                $reading_time = starizo_reading_time( get_the_content() );
                $category = get_the_category(); 
                $cat_name = !empty($category) ? $category[0]->name : 'Insight';
                $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (!$thumb) {
                    $thumb = get_template_directory_uri() . '/public/assets/blog-industries.png';
                }
        ?>
        <div class="w-full max-w-[362px] min-h-[580px] bg-white border border-[#E8E8EA] shadow-[0px_4px_18.5px_0px_rgba(0,0,0,0.06)] rounded-tr-[40.63px] rounded-bl-[40.63px] p-[14.77px] flex flex-col justify-between mx-auto transition-transform hover:-translate-y-1">
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
            <a href="<?php the_permalink(); ?>" class="font-montserrat font-semibold text-[18px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1.5 transition duration-150 w-fit select-none mt-2">
              <span>Read More</span>
              <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
          </div>
        </div>
        <?php
            endwhile;
        else :
            echo '<p>No insights found.</p>';
        endif;
        ?>
      </div>

      <!-- Pagination -->
      <div class="mt-12 flex justify-center w-full pagination-wrapper">
          <?php 
          the_posts_pagination( array(
              'mid_size'  => 2,
              'prev_text' => __( 'Previous', 'starizo' ),
              'next_text' => __( 'Next', 'starizo' ),
          ) ); 
          ?>
      </div>

    </div>
  </section>

</div>

<?php get_footer(); ?>
