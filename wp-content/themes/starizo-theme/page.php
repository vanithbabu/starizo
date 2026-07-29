<?php
/**
 * The template for displaying all single pages
 */

get_header();

while ( have_posts() ) :
	the_post();

	// Check if we are using the Flexible Content field named 'page_blocks'
	if ( have_rows('page_blocks') ) {

		// Loop through the flexible content rows
		while ( have_rows('page_blocks') ) : the_row();
			$layout = get_row_layout();

			// Include the corresponding template part for each block
            get_template_part( 'template-parts/blocks/' . str_replace('_', '-', $layout) );

		endwhile;

	} else {
		// Fallback for standard WordPress content
		?>
		<div class="hidden xl:block w-full">
			<div class="max-w-7xl mx-auto py-24 px-10">
				<h1 class="text-4xl font-bold mb-8"><?php the_title(); ?></h1>
				<div class="prose max-w-none">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<div class="xl:hidden w-full bg-[#FDFBF3] overflow-x-hidden">
			<div class="py-12 px-6">
				<h1 class="text-2xl font-bold mb-6"><?php the_title(); ?></h1>
				<div class="prose max-w-none">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<?php
	}

endwhile; // End of the loop.

get_footer();
