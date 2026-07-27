<?php
/**
 * The template for displaying single product (Custom Post Type)
 */

get_header(); ?>

<div class="max-w-7xl mx-auto py-24 px-10">
    <!-- Desktop Layout Placeholder -->
    <div class="hidden xl:block w-full">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <h1 class="text-4xl font-bold mb-8 text-[#00A256]">Product: <?php the_title(); ?></h1>
            <div class="prose max-w-none">
                <?php the_content(); ?>
            </div>
            <!-- ACF fields specific to products will go here -->
            <?php
        endwhile;
        ?>
    </div>

    <!-- Mobile Layout Placeholder -->
    <div class="xl:hidden w-full overflow-x-hidden">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <h1 class="text-2xl font-bold mb-6 text-[#00A256]"><?php the_title(); ?></h1>
            <div class="prose max-w-none">
                <?php the_content(); ?>
            </div>
            <!-- ACF fields specific to products will go here -->
            <?php
        endwhile;
        ?>
    </div>
</div>

<?php
get_footer();
