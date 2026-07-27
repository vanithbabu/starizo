<?php
require_once 'wp-load.php';

// Find the Partner with Us page by title
$partner_page = get_page_by_title( 'Partner with Us' );

if ( ! $partner_page ) {
    // If not found, let's look for a page with "Partner" in the title or create one.
    // For now just output an error.
    echo "Partner with Us page not found!\n";
    exit;
}

$post_id = $partner_page->ID;
echo "Populating Partner with Us page (ID: $post_id)...\n";

$page_blocks = array(
    array(
        'acf_fc_layout' => 'partner_hero',
        'heading' => 'Better Ingredients.<br>Stronger Together.',
        'description' => 'At STARIZO, partnerships begin long before production and continue far beyond delivery. We combine rice-derived ingredient expertise, application understanding, and manufacturing excellence to support businesses creating the next generation of food, nutrition, and industrial products.',
        'button_text' => 'Become a Partner',
        'button_link' => '/contact',
        'image' => '',
        'highlights' => array(
            array('label' => 'Clean Ingredients'),
            array('label' => 'Reliabe Supply'),
            array('label' => 'Global Partnership'),
            array('label' => 'Built on Trust'),
        )
    ),
    array(
        'acf_fc_layout' => 'who_we_partner_with',
        'subheading' => 'WHO WE PARTNER WITH',
        'heading' => 'Built For Teams That Create, Scale & Innovate',
        'image' => '',
        'partners' => array(
            array(
                'title' => 'Food Manufacturers',
                'description' => 'Scale clean-label production with reliable ingredient systems.',
                'icon' => '',
                'highlight' => true
            ),
            array(
                'title' => 'R&D & Formulation Teams',
                'description' => 'Develop application-ready solutions with technical collaboration.',
                'icon' => '',
                'highlight' => false
            ),
            array(
                'title' => 'Nutraceutical Brands',
                'description' => 'Source functional rice-derived ingredients with traceability.',
                'icon' => '',
                'highlight' => false
            ),
            array(
                'title' => 'Global Ingredient Buyers',
                'description' => 'Secure scalable supply with quality assurance.',
                'icon' => '',
                'highlight' => false
            ),
            array(
                'title' => 'Contract Manufacturers',
                'description' => 'Improve consistency and reduce sourcing complexity.',
                'icon' => '',
                'highlight' => false
            ),
            array(
                'title' => 'Emerging Brands',
                'description' => 'Build differentiated products with expert guidance.',
                'icon' => '',
                'highlight' => false
            ),
        )
    ),
    array(
        'acf_fc_layout' => 'why_partner_with_starizo',
        'subheading' => 'WHY PARTNER WITH STARIZO',
        'heading' => 'More Than Supply. Strategic Ingredient Collaboration.',
        'features' => array(
            array(
                'title' => 'Rice-Derived Expertise',
                'description' => 'Deep understanding across starches, sweeteners, proteins and derivatives.',
                'image' => '',
                'highlight' => true
            ),
            array(
                'title' => 'Clean Manufacturing',
                'description' => '',
                'image' => '',
                'highlight' => false
            ),
            array(
                'title' => 'Traceable Supply Chain',
                'description' => '',
                'image' => '',
                'highlight' => false
            ),
            array(
                'title' => 'Global Scalability',
                'description' => '',
                'image' => '',
                'highlight' => false
            ),
            array(
                'title' => 'Application Support',
                'description' => '',
                'image' => '',
                'highlight' => false
            ),
        )
    ),
    array(
        'acf_fc_layout' => 'industries_we_support',
        'subheading' => 'INDUSTRIES WE SUPPORT',
        'heading' => 'Ingredients Designed For Real Applications',
        'button_text' => 'Explore Applications',
        'button_link' => '/product-rice-starch',
        'industries' => array(
            array('title' => 'Food Manufacturers', 'image' => ''),
            array('title' => 'Nutrition Brands', 'image' => ''),
            array('title' => 'Pharmaceutical', 'image' => ''),
            array('title' => 'Personal Care', 'image' => ''),
            array('title' => 'Industrial Applications', 'image' => ''),
        )
    ),
    array(
        'acf_fc_layout' => 'cta_banner',
        'heading' => 'If Your Formulation Demands Partnership, Not Just Procurement',
        'description' => 'Bring your challenge. We’ll bring ingredient expertise, manufacturing capability, and a long-term approach.',
        'button_text' => 'Contact Us',
        'button_link' => '/contact',
        'image' => '',
        'floating_image' => ''
    ),
    array(
        'acf_fc_layout' => 'faq_section',
        'heading' => 'Frequently Asked Questions',
        'faqs' => array(
            array(
                'question' => 'Do you support formulation guidance?',
                'answer' => 'Yes. We collaborate to align ingredient performance with application goals.',
                'open' => true
            ),
            array(
                'question' => 'Can we request technical information?',
                'answer' => 'Yes, technical specification sheets and documentation are available upon request.',
                'open' => false
            ),
            array(
                'question' => 'Do you support international supply?',
                'answer' => 'Yes, our supply chain and logistics partners facilitate global distribution.',
                'open' => false
            ),
            array(
                'question' => 'Can STARIZO support product development?',
                'answer' => 'Absolutely, our technical teams can help optimize your product development process.',
                'open' => false
            ),
            array(
                'question' => 'Is there a minimum order requirement?',
                'answer' => 'Minimum order quantities vary by product line. Please contact sales for specific details.',
                'open' => false
            ),
        ),
        'info_title' => 'More Than Ingredients.<br>Built For Growth.',
        'info_description' => '<p class="text-[16px] text-gray-700 leading-[1.8]">STARIZO combines sourcing intelligence, advanced processing, technical collaboration, and manufacturing scale to help businesses create products that perform in the real world.</p><p class="text-[16px] text-gray-700 leading-[1.8]">From idea to industrial production—we support every stage of the journey.</p>',
        'info_button_text' => 'Speak To Team',
        'info_button_link' => '/contact'
    )
);

// Delete the existing to ensure clean insert
delete_field('page_blocks', $post_id);

if ( update_field( 'page_blocks', $page_blocks, $post_id ) ) {
    echo "Partner with Us page successfully updated!\n";
} else {
    echo "Failed to update Partner with Us page.\n";
}
