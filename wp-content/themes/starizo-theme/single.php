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

    <!-- ==================== RELATED READING SECTION (DYNAMIC 1:1 WITH blog-detail.html) ==================== -->
    <div class="w-full max-w-[1120px] mx-auto mt-16 pb-12 flex flex-col gap-8 px-4 lg:px-0">
      
      <!-- Heading with Vertical Orange Accent Bar -->
      <div class="flex items-center gap-3">
        <span class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full inline-block"></span>
        <h2 class="font-montserrat font-normal text-[18px] leading-[28px] tracking-[0.11em] uppercase text-[#B86200]">
          RELATED READING
        </h2>
      </div>

      <!-- 3-Card Grid (Dynamic WP_Query 1:1 with blog-detail.html) -->
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
            // Fallback to latest 3 posts if no category match
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

    <!-- ==================== NEWSLETTER SECTION (FIGMA SPEC 1:1 EXACT COPY FROM blog-detail.html) ==================== -->
    <section class="w-full bg-[#FDFBF3] py-14 px-4 sm:px-6 lg:px-8">
      <div class="max-w-[1123px] mx-auto relative rounded-[32px] sm:rounded-[44px] rounded-tr-none sm:rounded-tr-none bg-white overflow-hidden shadow-sm min-h-[320px] flex items-center p-8 sm:p-12 md:p-14">
        
        <!-- Background Layer: Orange Gradient + Green Ribbon + Outer Radius Clipping -->
        <div class="absolute inset-0 w-full h-full pointer-events-none overflow-hidden">
          <svg class="w-full h-full" viewBox="0 0 1123 320" fill="none" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="newsletterOrangeGradDetail" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="#FF8D00"/>
                <stop offset="100%" stop-color="#FFB457"/>
              </linearGradient>
            </defs>

            <!-- Base White Background for Bottom Right Side -->
            <rect width="1123" height="320" fill="#FFFFFF"/>
            
            <!-- Orange Main Body with linear-gradient(90deg, #FF8D00 0%, #FFB457 100%) -->
            <path d="M0 0H1050C1110 100 1075 220 900 320H0V0Z" fill="url(#newsletterOrangeGradDetail)"/>
            
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
          <form id="starizo-newsletter-form" class="mt-2 w-full max-w-[480px] bg-white rounded-[40px] p-[6px] pl-6 flex flex-col sm:flex-row items-center justify-between shadow-md border border-white/40 gap-2 relative">
            <?php wp_nonce_field( 'starizo_newsletter_nonce', 'security' ); ?>
            <input type="email" name="email" id="newsletter-email" placeholder="Enter your email address" class="w-full bg-transparent font-montserrat text-[15px] sm:text-[16px] text-black placeholder-[#828282] outline-none pr-2" required>
            <button type="submit" id="newsletter-submit-btn" class="group w-[120px] h-[44px] rounded-[40px] border-2 border-[#FF8D00] text-[#FF8D00] hover:bg-[#FF8D00] hover:text-white font-montserrat font-bold text-[15px] sm:text-[16px] flex items-center justify-center gap-1.5 hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 shrink-0 select-none cursor-pointer">
              <span id="newsletter-btn-text">Submit</span>
              <svg id="newsletter-btn-icon" class="w-4 h-4 fill-none stroke-current stroke-[2.5] transform group-hover:translate-x-1 transition-transform duration-300" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </button>
          </form>

          <!-- Response Message -->
          <div id="newsletter-msg" class="hidden font-montserrat font-medium text-[14px] px-4 py-2 rounded-full mt-1 transition-all"></div>

        </div>

      </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('starizo-newsletter-form');
        const emailInput = document.getElementById('newsletter-email');
        const submitBtn = document.getElementById('newsletter-submit-btn');
        const btnText = document.getElementById('newsletter-btn-text');
        const msgBox = document.getElementById('newsletter-msg');
        const ajaxUrl = '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>';

        if (form) {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const email = emailInput.value.trim();
                const nonce = form.querySelector('input[name="security"]').value;

                if (!email) return;

                btnText.textContent = '...';
                submitBtn.disabled = true;
                msgBox.classList.add('hidden');

                const formData = new FormData();
                formData.append('action', 'starizo_newsletter');
                formData.append('email', email);
                formData.append('security', nonce);

                fetch(ajaxUrl, {
                    method: 'POST',
                    body: formData
                })
                .then(res => res.json())
                .then(data => {
                    submitBtn.disabled = false;
                    btnText.textContent = 'Submit';

                    msgBox.classList.remove('hidden', 'bg-red-500/20', 'text-red-100', 'bg-green-500/20', 'text-green-100', 'bg-white', 'text-black');
                    
                    if (data.success) {
                        msgBox.classList.add('bg-white', 'text-[#00A256]', 'font-bold');
                        msgBox.textContent = '✓ ' + data.data.message;
                        emailInput.value = '';
                    } else {
                        msgBox.classList.add('bg-red-500/80', 'text-white');
                        msgBox.textContent = '✕ ' + (data.data ? data.data.message : 'Subscription failed.');
                    }
                })
                .catch(() => {
                    submitBtn.disabled = false;
                    btnText.textContent = 'Submit';
                    msgBox.classList.remove('hidden');
                    msgBox.classList.add('bg-red-500/80', 'text-white');
                    msgBox.textContent = '✕ Something went wrong. Please try again.';
                });
            });
        }
    });
    </script>

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
