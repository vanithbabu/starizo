<?php
/**
 * The main template file / Ultimate Fallback
 */

get_header(); ?>

<div class="max-w-7xl mx-auto py-24 px-10">
    <!-- Desktop Layout Placeholder -->
    <div class="hidden xl:block w-full">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <h1 class="text-4xl font-bold mb-8"><?php the_title(); ?></h1>
                <div class="prose max-w-none">
                    <?php the_content(); ?>
                </div>
                <?php
            endwhile;
        else :
            echo '<p>No content found.</p>';
        endif;
        ?>
    </div>

    <!-- Mobile Layout Placeholder -->
    <div class="xl:hidden w-full overflow-x-hidden">
        <div class="py-12 px-6">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();
                    ?>
                    <h1 class="text-2xl font-bold mb-6"><?php the_title(); ?></h1>
                    <div class="prose max-w-none">
                        <?php the_content(); ?>
                    </div>
                    <?php
                endwhile;
            else :
                echo '<p>No content found.</p>';
            endif;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
