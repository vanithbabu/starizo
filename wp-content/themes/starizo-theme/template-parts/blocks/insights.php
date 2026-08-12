<?php
/**
 * Insights Block Template.
 *
 * @param   array $block The block settings and attributes.
 */

$heading     = get_sub_field( 'heading' ) ?: 'Latest Articles & Technical Publications';
$subheading  = get_sub_field( 'subheading' ) ?: 'INSIGHTS';
$button_text = get_sub_field( 'button_text' ) ?: 'Read More';
$button_link_raw = get_sub_field( 'button_link' );
$button_link = ( $button_link_raw && '#' !== $button_link_raw ) ? $button_link_raw : site_url( '/insights' );

// Query latest 3 posts
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
);
$posts_query = new WP_Query( $args );
$has_posts   = $posts_query->have_posts();
?>

<!-- Desktop Layout View -->
<div class="hidden xl:block w-full">
    <section class="w-full bg-[#FDFBF3] py-24 border-b border-gray-100">
      <div class="max-w-[1280px] mx-auto px-10">

        <!-- Header -->
        <div class="w-full flex justify-between items-end mb-16">
          <div>
            <div class="flex items-center gap-3 mb-4">
              <div class="w-[6px] h-[33px] bg-[#FF8D00] rounded-full"></div>
              <span class="font-montserrat font-normal text-[16px] lg:text-[22px] leading-[30px] lg:leading-[54px] tracking-[0.11em] text-[#5D3700] uppercase">
                <?php echo esc_html( $subheading ); ?>
              </span>
            </div>
            <h3 class="text-[36px] font-black text-black leading-tight tracking-tight">
              <?php echo wp_kses_post( $heading ); ?>
            </h3>
          </div>
          <?php if ( $button_link && $button_text ) : ?>
          <a href="<?php echo esc_url( $button_link ); ?>" class="group bg-[#FF8D00] hover:bg-gradient-to-r hover:from-[#FF8D00] hover:to-[#FFB457] text-white font-bold text-[16px] px-8 h-[48px] rounded-full flex items-center gap-2 shadow-md hover:shadow-xl hover:scale-[1.03] active:scale-[0.98] transition-all duration-300 select-none">
            <?php echo esc_html( $button_text ); ?>
            <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
              <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
          </a>
          <?php endif; ?>
        </div>

        <!-- 3 Cards Grid -->
        <div class="grid grid-cols-3 gap-8">
          <?php
          if ( $has_posts ) :
              while ( $posts_query->have_posts() ) : $posts_query->the_post();
                  $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ) ?: get_template_directory_uri() . '/public/assets/insight-clean-label.png';
                  $excerpt   = get_the_excerpt() ?: 'Consumers may read labels—but manufacturers build trust through sourcing, process discipline, and ingredient decisions.';
          ?>
          <div class="bg-white border border-gray-100/50 rounded-[28px] overflow-hidden shadow-sm flex flex-col justify-between min-h-[460px]">
            <!-- Image rounded-bl corner -->
            <div class="w-full h-[200px] overflow-hidden rounded-t-[28px] rounded-bl-[45px]">
              <img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover" loading="lazy">
            </div>
            <div class="p-6 flex-1 flex flex-col justify-between">
              <div>
                <span class="text-[11px] font-bold text-starizo-green-start uppercase tracking-wider mb-2 block">FEATURED ARTICLE</span>
                <h4 class="text-[18px] font-black text-black leading-snug tracking-tight mb-3">
                  <?php the_title(); ?>
                </h4>
                <p class="text-[13px] font-medium text-black/60 leading-[20px] mb-4 line-clamp-3">
                  <?php echo esc_html( $excerpt ); ?>
                </p>
              </div>
              <div>
                <div class="text-[11px] font-semibold text-black/40 mb-4"><?php echo get_the_date(); ?> | 3 min read | Insight</div>
                <a href="<?php the_permalink(); ?>" class="text-[14px] font-extrabold text-starizo-orange hover:text-starizo-orange-dark flex items-center gap-1 transition duration-150 font-bold">
                  Read More
                  <svg class="w-3.5 h-3.5 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <?php
              endwhile;
              wp_reset_postdata();
          else :
              // Fallback cards when no posts exist in database
              $fallback_posts = array(
                  array('title' => 'Beyond Clean Label: Sourcing Transparency in Rice Ingredients', 'desc' => 'Consumers may read labels—but manufacturers build trust through sourcing, process discipline, and ingredient decisions.', 'date' => 'August 20, 2026', 'img' => 'insight-clean-label.png'),
                  array('title' => 'Texture vs. Functionality: Solving Processing Challenges in Bakery', 'desc' => 'How native & modified rice starches provide moisture retention and freeze-thaw stability without chemical modification.', 'date' => 'July 14, 2026', 'img' => 'insight-starch-texture.png'),
                  array('title' => 'Plant-Based Protein Formulation: Achieving High-Purity & Neutral Taste', 'desc' => 'Overcoming sensory barrier challenges in non-dairy beverage and sports nutrition applications using hypoallergenic rice protein.', 'date' => 'June 02, 2026', 'img' => 'insight-bakery-systems.png'),
              );
              foreach ( $fallback_posts as $post_item ) :
          ?>
          <div class="bg-white border border-gray-100/50 rounded-[28px] overflow-hidden shadow-sm flex flex-col justify-between min-h-[460px]">
            <div class="w-full h-[200px] overflow-hidden rounded-t-[28px] rounded-bl-[45px]">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/' . $post_item['img'] ); ?>" alt="<?php echo esc_attr($post_item['title']); ?>" class="w-full h-full object-cover" loading="lazy">
            </div>
            <div class="p-6 flex-1 flex flex-col justify-between">
              <div>
                <span class="text-[11px] font-bold text-starizo-green-start uppercase tracking-wider mb-2 block">FEATURED ARTICLE</span>
                <h4 class="text-[18px] font-black text-black leading-snug tracking-tight mb-3">
                  <?php echo esc_html($post_item['title']); ?>
                </h4>
                <p class="text-[13px] font-medium text-black/60 leading-[20px] mb-4 line-clamp-3">
                  <?php echo esc_html($post_item['desc']); ?>
                </p>
              </div>
              <div>
                <div class="text-[11px] font-semibold text-black/40 mb-4"><?php echo esc_html($post_item['date']); ?> | 3 min read | Insight</div>
                <a href="<?php echo esc_url( site_url('/insights') ); ?>" class="text-[14px] font-extrabold text-starizo-orange hover:text-starizo-orange-dark flex items-center gap-1 transition duration-150 font-bold">
                  Read More
                  <svg class="w-3.5 h-3.5 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <?php
              endforeach;
          endif;
          ?>
        </div>
      </div>
    </section>
</div>

<!-- Mobile Layout View (1:1 Matched with blog.html) -->
<div class="xl:hidden w-full overflow-x-hidden py-12 px-4 bg-[#FDFBF3] border-b border-gray-100">
    <div class="w-full max-w-[360px] mx-auto flex flex-col gap-6">
      <div class="flex items-center gap-2.5">
        <span class="w-[4px] h-[24px] bg-[#FF8D00] rounded-full shrink-0"></span>
        <h2 class="font-montserrat font-normal text-[16px] text-[#5D3700] uppercase leading-[24px] tracking-[0.11em]">
          <?php echo esc_html( $subheading ); ?>
        </h2>
      </div>

      <!-- 3 Insights Cards Stack (1:1 Figma Spec) -->
      <div class="flex flex-col gap-6">
        <?php
        if ( $has_posts ) :
            while ( $posts_query->have_posts() ) : $posts_query->the_post();
                $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' ) ?: get_template_directory_uri() . '/public/assets/insight-clean-label.png';
                $excerpt   = get_the_excerpt() ?: 'Consumers may read labels—but manufacturers build trust through sourcing, process discipline, and ingredient decisions.';
        ?>
        <div class="w-full max-w-[344px] min-h-[546px] bg-white border border-[#E8E8EA] shadow-[0px_4px_18.5px_0px_rgba(0,0,0,0.06)] rounded-tr-[38.22px] rounded-bl-[38.22px] p-[13.9px] flex flex-col justify-between mx-auto">
          <div class="w-full h-[208px] overflow-hidden rounded-tr-[38.22px] rounded-bl-[38.22px] shrink-0">
            <img src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover" loading="lazy">
          </div>
          <div class="p-2 flex flex-col gap-2 flex-1 mt-2">
            <span class="font-montserrat font-bold text-[12px] leading-[18px] tracking-[0.11em] uppercase text-[#00A256] block">FEATURED ARTICLE</span>
            <h3 class="font-montserrat font-bold text-[18px] leading-[24px] text-black">
              <?php the_title(); ?>
            </h3>
            <p class="font-montserrat font-medium text-[14px] leading-[22px] text-[#333333] line-clamp-3">
              <?php echo esc_html( $excerpt ); ?>
            </p>
          </div>
          <div class="p-2 pt-2 border-t border-gray-100 flex flex-col gap-2">
            <span class="font-['Work_Sans'] font-normal text-[13px] text-[#828282]">
              <?php echo get_the_date(); ?> | 3 min read | Insight
            </span>
            <a href="<?php the_permalink(); ?>" class="font-montserrat font-semibold text-[15px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1 transition duration-150 select-none">
              <span>Read More</span>
              <svg class="w-3.5 h-3.5 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
          </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
            $fallback_posts = array(
                  array('title' => 'Beyond Clean Label: Sourcing Transparency in Rice Ingredients', 'desc' => 'Consumers may read labels—but manufacturers build trust through sourcing, process discipline, and ingredient decisions.', 'date' => 'August 20, 2026', 'img' => 'insight-clean-label.png'),
                  array('title' => 'Texture vs. Functionality: Solving Processing Challenges in Bakery', 'desc' => 'How native & modified rice starches provide moisture retention and freeze-thaw stability without chemical modification.', 'date' => 'July 14, 2026', 'img' => 'insight-starch-texture.png'),
                  array('title' => 'Plant-Based Protein Formulation: Achieving High-Purity & Neutral Taste', 'desc' => 'Overcoming sensory barrier challenges in non-dairy beverage and sports nutrition applications using hypoallergenic rice protein.', 'date' => 'June 02, 2026', 'img' => 'insight-bakery-systems.png'),
            );
            foreach ( $fallback_posts as $post_item ) :
        ?>
        <div class="w-full max-w-[344px] min-h-[546px] bg-white border border-[#E8E8EA] shadow-[0px_4px_18.5px_0px_rgba(0,0,0,0.06)] rounded-tr-[38.22px] rounded-bl-[38.22px] p-[13.9px] flex flex-col justify-between mx-auto">
          <div class="w-full h-[208px] overflow-hidden rounded-tr-[38.22px] rounded-bl-[38.22px] shrink-0">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/public/assets/' . $post_item['img'] ); ?>" alt="<?php echo esc_attr($post_item['title']); ?>" class="w-full h-full object-cover" loading="lazy">
          </div>
          <div class="p-2 flex flex-col gap-2 flex-1 mt-2">
            <span class="font-montserrat font-bold text-[12px] leading-[18px] tracking-[0.11em] uppercase text-[#00A256] block">FEATURED ARTICLE</span>
            <h3 class="font-montserrat font-bold text-[18px] leading-[24px] text-black">
              <?php echo esc_html($post_item['title']); ?>
            </h3>
            <p class="font-montserrat font-medium text-[14px] leading-[22px] text-[#333333] line-clamp-3">
              <?php echo esc_html($post_item['desc']); ?>
            </p>
          </div>
          <div class="p-2 pt-2 border-t border-gray-100 flex flex-col gap-2">
            <span class="font-['Work_Sans'] font-normal text-[13px] text-[#828282]">
              <?php echo esc_html($post_item['date']); ?> | 3 min read | Insight
            </span>
            <a href="<?php echo esc_url( site_url('/insights') ); ?>" class="font-montserrat font-semibold text-[15px] text-[#FF8D00] hover:text-[#e07c00] flex items-center gap-1 transition duration-150 select-none">
              <span>Read More</span>
              <svg class="w-3.5 h-3.5 fill-none stroke-current stroke-[2.5]" viewBox="0 0 24 24"><polyline points="9 18 15 12 9 6"></polyline></svg>
            </a>
          </div>
        </div>
        <?php
            endforeach;
        endif;
        ?>
      </div>
      
      <?php if ( $button_link && $button_text ) : ?>
      <div class="pt-2 flex justify-center">
        <a href="<?php echo esc_url( $button_link ); ?>" class="h-[44px] bg-[#FF8D00] hover:bg-[#e07c00] text-white font-montserrat font-bold text-[14px] px-8 rounded-full flex items-center justify-center gap-2 shadow-sm transition duration-200 select-none w-fit">
          <span><?php echo esc_html( $button_text ); ?></span>
          <svg class="w-3.5 h-3.5 stroke-current fill-none stroke-[2.5]" viewBox="0 0 24 24">
            <polyline points="9 18 15 12 9 6"></polyline>
          </svg>
        </a>
      </div>
      <?php endif; ?>
    </div>
</div>
