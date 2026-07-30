<?php
/**
 * Template Name: Plant Page
 */
get_header();
?>

<!-- Desktop Layout View -->
<div class="hidden xl:block w-full">
  <main class="w-full relative overflow-hidden min-h-[640px] flex flex-col justify-between">
    <!-- Background Image with Dark Overlay -->
    <div class="absolute inset-0 w-full h-full z-0">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/plant-hero.jpg'); ?>" alt="STARIZO Plant Facility" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70 z-10"></div>
    </div>

    <!-- Center Hero Content Box -->
    <div class="relative z-20 w-full max-w-[874px] mx-auto px-6 py-28 my-auto flex flex-col items-center justify-center text-center gap-[42px]">
      <div class="flex items-center justify-center gap-2.5">
        <span class="w-[4px] h-[18px] bg-[#FF8D00] rounded-full inline-block"></span>
        <span class="font-montserrat font-bold text-[14px] leading-[22px] tracking-[0.11em] uppercase text-[#FF8D00]">
          OUR PLANT
        </span>
      </div>

      <h1 class="font-montserrat font-black text-[38px] lg:text-[42px] leading-[48px] lg:leading-[54px] text-white max-w-[874px]">
        Where Rice Becomes Possibility.
      </h1>

      <p class="font-montserrat font-medium text-[16px] lg:text-[18px] leading-[26px] lg:leading-[30px] text-white/90 max-w-[652px] mx-auto">
        At STARIZO, manufacturing is more than production capacity. It is where sourcing, science, process control, and sustainability come together to create ingredients trusted across industries.
      </p>
    </div>

    <div class="relative z-20 h-12"></div>
  </main>
</div>

<!-- Mobile Layout View (<1280px screens) -->
<div class="block xl:hidden w-full">
  <section class="w-full relative overflow-hidden min-h-[460px] flex flex-col justify-center px-5 py-14">
    <div class="absolute inset-0 w-full h-full z-0">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/public/assets/plant-hero.jpg'); ?>" alt="STARIZO Plant Facility" class="w-full h-full object-cover">
      <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70 z-10"></div>
    </div>

    <div class="relative z-20 flex flex-col items-center text-center gap-6 max-w-[344px] mx-auto text-white">
      <div class="flex items-center justify-center gap-2">
        <span class="w-[3px] h-[16px] bg-[#FF8D00] rounded-full inline-block"></span>
        <span class="font-montserrat font-bold text-[13px] leading-[20px] tracking-[0.11em] uppercase text-[#FF8D00]">
          OUR PLANT
        </span>
      </div>

      <h1 class="font-montserrat font-black text-[28px] leading-[36px] text-white">
        Where Rice Becomes Possibility.
      </h1>

      <p class="font-montserrat font-medium text-[15px] leading-[24px] text-white/90">
        At STARIZO, manufacturing is more than production capacity. It is where sourcing, science, process control, and sustainability come together to create ingredients trusted across industries.
      </p>
    </div>
  </section>
</div>

<?php
get_footer();
