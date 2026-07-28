<?php
/**
 * Careers Open Roles Block Template.
 */
$tagline = get_sub_field('tagline') ?: 'OPEN ROLES';
$headline = get_sub_field('headline') ?: 'Find Your Next Opportunity';
$description = get_sub_field('description') ?: 'Explore current openings and become part of our journey.';
$view_all_text = get_sub_field('view_all_text') ?: 'View All Openings';
$view_all_link = get_sub_field('view_all_link') ?: '#';
?>

<section id="open-roles" class="w-full bg-gradient-to-r from-starizo-green-start to-starizo-green-end py-16 md:py-24">
  <div class="max-w-7xl mx-auto px-6 md:px-8">

    <!-- Section Header -->
    <div class="flex flex-col items-center text-center space-y-4 max-w-3xl mx-auto mb-16">
      <div class="flex items-center gap-3">
        <div class="w-1.5 h-8 bg-starizo-orange rounded-full"></div>
        <h2 class="font-montserrat font-normal text-[16px] text-white uppercase leading-[54px] tracking-[0.11em]">
          <?php echo esc_html($tagline); ?>
        </h2>
      </div>
      <h3 class="font-montserrat font-bold text-[22px] text-white leading-[30px] tracking-[0em]">
        <?php echo esc_html($headline); ?>
      </h3>
      <p class="text-[18px] text-white/90 leading-[1.6]">
        <?php echo esc_html($description); ?>
      </p>
    </div>

    <!-- Job List Card Container -->
    <div class="bg-starizo-green-forest text-white rounded-[44px] px-6 md:px-12 py-10 shadow-2xl relative overflow-hidden">
    <!-- Job List Card Container -->
    <div class="bg-starizo-green-forest text-white rounded-[44px] px-6 md:px-12 py-10 shadow-2xl relative overflow-hidden">
      <div>
        <?php
        $jobs_query = new WP_Query( array(
            'post_type'      => 'job',
            'posts_per_page' => 10,
            'post_status'    => 'publish',
        ) );

        if ( $jobs_query->have_posts() ) :
            while ( $jobs_query->have_posts() ) : $jobs_query->the_post();
                $job_title = get_the_title();
                $dept      = get_field( 'department', get_the_ID() ) ?: 'Quality';
                $loc       = get_field( 'location', get_the_ID() ) ?: 'Chennai, India';
                $type      = get_field( 'employment_type', get_the_ID() ) ?: 'Full-time';
                $link      = get_the_permalink();
        ?>
            <!-- Job Row -->
            <div class="grid grid-cols-2 md:grid-cols-12 gap-y-4 gap-x-2 py-6 md:py-8 items-center px-4 hover:bg-white/5 transition duration-200 border-b border-dashed border-white/20 last:border-b-0">
              <div class="col-span-2 md:col-span-5">
                <h4 class="text-[18px] md:text-[20px] font-extrabold tracking-tight text-white"><?php echo esc_html($job_title); ?></h4>
              </div>
              <div class="col-span-1 md:col-span-3">
                <span class="text-[15px] md:text-[18px] text-white/80"><?php echo esc_html($dept); ?></span>
              </div>
              <div class="col-span-1 md:col-span-2 flex items-center gap-2">
                <svg class="w-[13px] h-[18px] text-white/70 shrink-0" viewBox="0 0 13 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.28295 0C9.44415 0 12.0064 2.56303 12.0064 5.72423C12.0064 8.6662 8.62618 12.2552 6.93569 14.7436C6.78396 14.9664 6.55231 15.0892 6.28289 15.0892C6.01348 15.0892 5.78183 14.9664 5.63009 14.7436C3.93888 12.2552 0.55861 8.66639 0.55861 5.72423C0.55861 2.56303 3.12099 0 6.28295 0ZM9.61581 14.1388C9.20355 13.9989 8.983 13.5519 9.12287 13.1396C9.26276 12.7274 9.70981 12.5068 10.1221 12.646C10.8104 12.8806 11.3847 13.1848 11.7948 13.5385C12.2899 13.9656 12.566 14.4719 12.566 15.0381C12.566 15.9951 11.76 16.7929 10.4573 17.308C9.37671 17.735 7.8994 18 6.28299 18C4.66728 18 3.19 17.7358 2.10867 17.308C0.806026 16.7928 0 15.995 0 15.0381C0 14.4719 0.276065 13.9656 0.771219 13.5385C1.18126 13.1848 1.75486 12.8806 2.44392 12.646C2.85618 12.5061 3.30323 12.7274 3.4431 13.1396C3.58299 13.5519 3.36168 13.9989 2.95016 14.1388C2.4491 14.3098 2.05459 14.5111 1.80221 14.7294C1.65936 14.8523 1.58016 14.9589 1.58016 15.0381C1.58016 15.2801 2.00427 15.5695 2.68889 15.8396C3.59557 16.1979 4.86558 16.4199 6.2838 16.4199C7.70117 16.4199 8.97131 16.1979 9.87871 15.8396C10.5633 15.5688 10.9874 15.2801 10.9874 15.0381C10.9874 14.9589 10.9075 14.8523 10.7654 14.7294C10.513 14.5111 10.1178 14.3098 9.61744 14.1388H9.61581ZM6.28295 8.29919C7.70549 8.29919 8.85867 7.14606 8.85867 5.72347C8.85867 4.30093 7.70554 3.14775 6.28295 3.14775C4.86035 3.14775 3.70723 4.30087 3.70723 5.72347C3.70723 7.14601 4.86035 8.29919 6.28295 8.29919Z" fill="currentColor" />
                </svg>
                <span class="text-[15px] md:text-[18px] text-white/80"><?php echo esc_html($loc); ?></span>
              </div>
              <div class="col-span-2 md:col-span-2 flex justify-between md:justify-end items-center gap-4">
                <span class="text-[15px] md:text-[18px] text-white/80"><?php echo esc_html($type); ?></span>
                <a href="<?php echo esc_url($link); ?>" class="w-[38px] h-[38px] border border-white/40 hover:bg-white/10 text-white rounded-full flex items-center justify-center shadow-lg transition duration-200" aria-label="Apply to <?php echo esc_attr($job_title); ?>">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </a>
              </div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        elseif (have_rows('roles')) :
            while (have_rows('roles')) : the_row();
                $job_title = get_sub_field('title');
                $dept = get_sub_field('department');
                $loc = get_sub_field('location');
                $type = get_sub_field('type');
                $link = get_sub_field('link');
        ?>
            <!-- Job Row -->
            <div class="grid grid-cols-2 md:grid-cols-12 gap-y-4 gap-x-2 py-6 md:py-8 items-center px-4 hover:bg-white/5 transition duration-200 border-b border-dashed border-white/20 last:border-b-0">
              <div class="col-span-2 md:col-span-5">
                <h4 class="text-[18px] md:text-[20px] font-extrabold tracking-tight text-white"><?php echo esc_html($job_title); ?></h4>
              </div>
              <div class="col-span-1 md:col-span-3">
                <span class="text-[15px] md:text-[18px] text-white/80"><?php echo esc_html($dept); ?></span>
              </div>
              <div class="col-span-1 md:col-span-2 flex items-center gap-2">
                <svg class="w-[13px] h-[18px] text-white/70 shrink-0" viewBox="0 0 13 18" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.28295 0C9.44415 0 12.0064 2.56303 12.0064 5.72423C12.0064 8.6662 8.62618 12.2552 6.93569 14.7436C6.78396 14.9664 6.55231 15.0892 6.28289 15.0892C6.01348 15.0892 5.78183 14.9664 5.63009 14.7436C3.93888 12.2552 0.55861 8.66639 0.55861 5.72423C0.55861 2.56303 3.12099 0 6.28295 0ZM9.61581 14.1388C9.20355 13.9989 8.983 13.5519 9.12287 13.1396C9.26276 12.7274 9.70981 12.5068 10.1221 12.646C10.8104 12.8806 11.3847 13.1848 11.7948 13.5385C12.2899 13.9656 12.566 14.4719 12.566 15.0381C12.566 15.9951 11.76 16.7929 10.4573 17.308C9.37671 17.735 7.8994 18 6.28299 18C4.66728 18 3.19 17.7358 2.10867 17.308C0.806026 16.7928 0 15.995 0 15.0381C0 14.4719 0.276065 13.9656 0.771219 13.5385C1.18126 13.1848 1.75486 12.8806 2.44392 12.646C2.85618 12.5061 3.30323 12.7274 3.4431 13.1396C3.58299 13.5519 3.36168 13.9989 2.95016 14.1388C2.4491 14.3098 2.05459 14.5111 1.80221 14.7294C1.65936 14.8523 1.58016 14.9589 1.58016 15.0381C1.58016 15.2801 2.00427 15.5695 2.68889 15.8396C3.59557 16.1979 4.86558 16.4199 6.2838 16.4199C7.70117 16.4199 8.97131 16.1979 9.87871 15.8396C10.5633 15.5688 10.9874 15.2801 10.9874 15.0381C10.9874 14.9589 10.9075 14.8523 10.7654 14.7294C10.513 14.5111 10.1178 14.3098 9.61744 14.1388H9.61581ZM6.28295 8.29919C7.70549 8.29919 8.85867 7.14606 8.85867 5.72347C8.85867 4.30093 7.70554 3.14775 6.28295 3.14775C4.86035 3.14775 3.70723 4.30087 3.70723 5.72347C3.70723 7.14601 4.86035 8.29919 6.28295 8.29919Z" fill="currentColor" />
                </svg>
                <span class="text-[15px] md:text-[18px] text-white/80"><?php echo esc_html($loc); ?></span>
              </div>
              <div class="col-span-2 md:col-span-2 flex justify-between md:justify-end items-center gap-4">
                <span class="text-[15px] md:text-[18px] text-white/80"><?php echo esc_html($type); ?></span>
                <a href="<?php echo esc_url($link); ?>" class="w-[38px] h-[38px] border border-white/40 hover:bg-white/10 text-white rounded-full flex items-center justify-center shadow-lg transition duration-200" aria-label="Apply to <?php echo esc_attr($job_title); ?>">
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </a>
              </div>
            </div>
        <?php
            endwhile;
        endif;
        ?>
      </div>
    </div>

    <!-- Action Button -->
    <div class="flex justify-center mt-[33px]">
      <a href="<?php echo esc_url($view_all_link); ?>"
        class="w-auto px-8 h-[45px] bg-starizo-orange hover:bg-starizo-orange-dark text-white font-semibold text-[18px] rounded-[22px] flex items-center justify-center gap-2 group transition-all duration-300">
        <?php echo esc_html($view_all_text); ?>
        <svg class="w-4 h-4 fill-current transform group-hover:translate-x-0.5 transition-transform duration-200"
          viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.15736 2.93105L9.76836 7.61605C9.86948 7.71827 9.92621 7.85626 9.92621 8.00005C9.92621 8.14384 9.86948 8.28183 9.76836 8.38405L5.15835 13.0691C5.05728 13.1719 5.00064 13.3103 5.00064 13.4546C5.00064 13.5988 5.05728 13.7372 5.15835 13.8401C5.20773 13.8907 5.26675 13.931 5.33192 13.9584C5.3971 13.9859 5.46712 14.0001 5.53786 14.0001C5.60859 14.0001 5.67861 13.9859 5.74379 13.9584C5.80896 13.931 5.86798 13.8907 5.91735 13.8401L10.5274 9.15605C10.8303 8.84753 11 8.43243 11 8.00005C11 7.56768 10.8303 7.15257 10.5274 6.84405L5.91736 2.16005C5.86796 2.10925 5.80889 2.06887 5.74362 2.04129C5.67835 2.01372 5.60821 1.99951 5.53736 1.99951C5.4665 1.99951 5.39636 2.01372 5.3311 2.04129C5.26583 2.06887 5.20675 2.10925 5.15736 2.16005C5.05628 2.26291 4.99964 2.40135 4.99964 2.54555C4.99964 2.68976 5.05628 2.8282 5.15736 2.93105Z" fill="currentColor" />
        </svg>
      </a>
    </div>

  </div>
</section>
