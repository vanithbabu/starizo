<?php
/**
 * Our Story Block Template
 */

$subheading = get_sub_field( 'subheading' ) ?: 'OUR STORY';
$heading    = get_sub_field( 'heading' ) ?: 'What began as expertise in rice processing evolved into a next-generation ingredient platform.';

// For paragraph content, ACF wysiwyg or textarea can be used
$description = get_sub_field( 'description' ) ?: '<p>For more than three decades, the foundation behind STARIZO has refined how rice is sourced, processed, and transformed. Today, STARIZO extends that legacy into specialized clean-label ingredients developed for food, nutrition, pharma, and industrial innovators worldwide.</p><p>This evolution is not simply manufacturing expansion—it represents a shift toward creating smarter ingredient ecosystems that deliver consistency, transparency, and performance.</p>';
?>

<section class="w-full bg-[#FDFBF3] py-16 md:py-20 border-b border-gray-100">
  <div class="mx-auto px-4 sm:px-6 flex flex-col items-center text-center" style="max-width: 1116px; width: 100%; min-height: 288px; gap: 12px; opacity: 1;">

    <!-- Badge Header (Centered with Bright Orange Bar) -->
    <div class="flex items-center justify-center gap-3">
      <div class="shrink-0" style="background-color: #FF8D00; width: 4px; height: 28px; border-radius: 9999px;"></div>
      <span class="font-montserrat font-normal text-[22px] uppercase text-center" style="color: #A46C20; font-weight: 400; font-size: 22px; line-height: 54px; letter-spacing: 0.11em;">
        <?php echo esc_html( $subheading ); ?>
      </span>
    </div>

    <!-- Headline (Centered) -->
    <h2 class="font-montserrat font-bold text-[22px] text-black text-center max-w-[1050px]" style="font-weight: 700; font-size: 22px; line-height: 30px; letter-spacing: 0;">
      <?php echo wp_kses_post( $heading ); ?>
    </h2>

    <!-- Body Content Paragraphs -->
    <div class="flex flex-col items-center text-center max-w-[1050px] story-content" style="gap: 12px;">
      <?php 
      // If the description doesn't contain <p> tags, we add them, but ideally it's an ACF WYSIWYG
      // We will add some simple parsing to ensure classes are added to p tags
      $desc = wp_kses_post( $description );
      $desc = str_replace('<p>', '<p class="font-montserrat font-medium text-[18px] text-black/80 text-center" style="font-weight: 500; font-size: 18px; line-height: 30px; letter-spacing: 0;">', $desc);
      echo $desc;
      ?>
    </div>

  </div>
</section>
