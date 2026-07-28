<?php
/**
 * The template for displaying all single posts
 */

get_header(); 
?>

<!-- ==================== DESKTOP & MOBILE LAYOUT ==================== -->
<div class="w-full font-montserrat bg-[#FDFBF3] text-black min-h-screen antialiased overflow-x-hidden pt-24 pb-20">
    
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

    <!-- Breadcrumb -->
    <div class="w-full max-w-[1120px] mx-auto px-6 lg:px-0 mb-4 mt-6">
      <nav aria-label="Breadcrumb" class="flex items-center gap-1.5 text-[12px] leading-none">
        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="font-montserrat font-medium text-[#7F7F7F] hover:text-[#FF8D00] transition-colors">Insights</a>
        <span class="font-montserrat font-normal text-[#7F7F7F]">/ Insights Details</span>
      </nav>
    </div>

    <!-- HERO CARD CONTAINER -->
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
            <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/share-icon.svg'); ?>" alt="Share" class="w-[24px] h-[24px] cursor-pointer hover:opacity-80 transition-opacity">
          </div>
        </div>
      </div>

      <!-- Right Side Image -->
      <div class="w-full lg:w-[583px] h-[300px] sm:h-[400px] lg:h-[512px] rounded-tr-[40.63px] rounded-bl-[40.63px] overflow-hidden shrink-0 opacity-100 bg-gray-100">
        <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
      </div>
    </div>

    <!-- ARTICLE CONTENT & SIDEBAR SECTION -->
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
          <a href="/contact" class="mt-4 w-full h-[44px] bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-bold text-[15px] rounded-full flex items-center justify-center gap-2 shadow-md transition-all select-none">
            <span>Contact Us</span>
            <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
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

    <!-- RELATED READING SECTION -->
    <div class="w-full max-w-[1120px] mx-auto mt-24 px-6 lg:px-0">
      <div class="flex items-center gap-3 mb-10">
        <span class="w-[3px] h-[24px] bg-[#FF8D00] rounded-full inline-block"></span>
        <h2 class="font-montserrat font-bold text-[22px] leading-[32px] tracking-[0.11em] uppercase text-[#B86200]">
          RELATED READING
        </h2>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-[24px]">
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
        
        if( $related_query->have_posts() ) {
            while( $related_query->have_posts() ) {
                $related_query->the_post();
                $rel_reading_time = starizo_reading_time( get_the_content() );
                $rel_thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
                if (!$rel_thumb) {
                    $rel_thumb = get_template_directory_uri() . '/public/assets/blog-industries.png';
                }
                ?>
                <div class="w-full max-w-[362px] min-h-[580px] bg-white border border-[#E8E8EA] shadow-[0px_4px_18.5px_0px_rgba(0,0,0,0.06)] rounded-tr-[40.63px] rounded-bl-[40.63px] p-[14.77px] flex flex-col justify-between mx-auto transition-transform hover:-translate-y-1">
                  <div class="w-full h-[221.6px] overflow-hidden rounded-tr-[40.63px] rounded-bl-[40.63px] bg-gray-200">
                    <img src="<?php echo esc_url($rel_thumb); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
                  </div>
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
                  <div class="px-2.5 pb-2.5 pt-2 flex flex-col gap-2 border-t border-gray-100">
                    <span class="font-['Work_Sans'] font-normal text-[14px] leading-[22px] text-[#828282] block">
                      <?php echo get_the_date(); ?> | <?php echo esc_html($rel_reading_time); ?>
                    </span>
                    <a href="<?php the_permalink(); ?>" class="group font-montserrat font-semibold text-[18px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1.5 transition duration-150 w-fit select-none mt-2">
                      <span>Read More</span>
                      <svg class="w-4 h-4 fill-none stroke-current stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                  </div>
                </div>
                <?php
            }
            wp_reset_postdata();
        }
        ?>
      </div>
    </div>

    <!-- NEWSLETTER SUBSCRIPTION SECTION -->
    <div class="w-full max-w-[1120px] mx-auto mt-24 px-6 lg:px-0">
      <div class="relative w-full bg-gradient-to-r from-[#00A256] to-[#5DC671] rounded-tr-[48px] rounded-bl-[48px] p-8 lg:p-14 overflow-hidden shadow-xl text-white flex flex-col lg:flex-row items-center justify-between gap-8">
        
        <!-- Background Rice Field Accent -->
        <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/hero-rice-field-bg.png'); ?>" alt="" class="absolute inset-0 w-full h-full object-cover opacity-20 pointer-events-none mix-blend-overlay">

        <!-- Left Content -->
        <div class="relative z-10 max-w-[540px]">
          <div class="flex items-center gap-2 mb-3">
            <span class="w-[4px] h-[20px] bg-[#FF8D00] rounded-full inline-block"></span>
            <span class="font-montserrat font-bold text-[14px] uppercase tracking-[0.11em] text-[#FBEAC4]">NEWSLETTER</span>
          </div>
          <h3 class="font-montserrat font-black text-[28px] sm:text-[34px] leading-[38px] sm:leading-[44px] text-white">
            Stay Ahead with Starizo Insights
          </h3>
          <p class="font-montserrat font-medium text-[16px] leading-[26px] text-white/90 mt-3">
            Subscribe to our technical newsletter for the latest research, market trends, and clean-label ingredient innovations.
          </p>
        </div>

        <!-- Right Form -->
        <div class="relative z-10 w-full lg:w-auto">
          <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Starizo Insights!');" class="flex flex-col sm:flex-row gap-3 w-full max-w-[500px]">
            <input type="email" required placeholder="Enter your email address" class="w-full sm:w-[320px] h-[50px] px-6 rounded-full border border-white/30 bg-white/10 text-white placeholder-white/70 focus:outline-none focus:bg-white focus:text-black focus:placeholder-gray-400 text-[15px] font-montserrat transition duration-200">
            <button type="submit" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-bold text-[15px] px-8 h-[50px] rounded-full flex items-center justify-center gap-2 shadow-md hover:shadow-xl hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none shrink-0 cursor-pointer">
              Subscribe
              <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
                <polyline points="9 18 15 12 9 6"></polyline>
              </svg>
            </button>
          </form>
        </div>

      </div>
    </div>

    <?php endwhile; ?>
</div>

<!-- Extra styles for blog content -->
<style>
.blog-content-wrapper p {
    margin-bottom: 1.5rem;
}
.blog-content-wrapper ul {
    list-style-type: disc;
    padding-left: 1.5rem;
    margin-bottom: 1.5rem;
}
.blog-content-wrapper li {
    margin-bottom: 0.5rem;
}
</style>

<?php get_footer(); ?>
