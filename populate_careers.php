<?php
require_once 'wp-load.php';

$page = get_page_by_title('Careers', OBJECT, 'page');
if (!$page) {
    die("Careers page not found.\n");
}
$page_id = $page->ID;

$blocks = array();

// 1. Careers Hero
$blocks[] = array(
    'acf_fc_layout' => 'careers_hero',
    'tagline' => 'CAREERS AT STARIZO',
    'headline' => "Build A Better Future.<br>\nWith Better Ingredients.<br>\nWith Better People.",
    'description' => 'Join a team transforming rice into ingredients designed for the industries shaping tomorrow.',
    'button_text' => 'View Open Roles',
    'button_link' => '#open-roles'
);

// 2. Careers Purpose
$blocks[] = array(
    'acf_fc_layout' => 'careers_purpose',
    'tagline' => 'OUR PURPOSE',
    'headline' => 'Turning Purpose Into Real Impact',
    'description' => 'Every role contributes to building better ingredients, stronger partnerships, and a more responsible future.',
    'purpose_cards' => array(
        array(
            'title' => 'Sustainability First',
            'description' => 'Build solutions designed for long-term impact.'
        ),
        array(
            'title' => 'Innovate Every Day',
            'description' => 'Challenge assumptions and create better outcomes.'
        ),
        array(
            'title' => 'Stronger Together',
            'description' => 'Collaboration drives everything we do.'
        ),
        array(
            'title' => 'Own The Impact',
            'description' => 'Take responsibility and create meaningful results.'
        )
    )
);

// 3. Careers Culture
$blocks[] = array(
    'acf_fc_layout' => 'careers_culture',
    'tagline' => 'OUR CULTURE',
    'headline' => "A Place To Learn.<br>A Place To Grow.",
    'description' => 'We believe great work happens when people feel trusted, supported, and inspired.',
    'checklist' => array(
        array('item_text' => 'Collaborative culture'),
        array('item_text' => 'Continuous learning'),
        array('item_text' => 'Leadership opportunities'),
        array('item_text' => 'Real ownership'),
        array('item_text' => 'Respectful environment')
    )
);

// 4. Careers Open Roles
$blocks[] = array(
    'acf_fc_layout' => 'careers_open_roles',
    'tagline' => 'OPEN ROLES',
    'headline' => 'Find Your Next Opportunity',
    'description' => 'Explore current openings and become part of our journey.',
    'roles' => array(
        array(
            'title' => 'Quality Assurance Executive',
            'department' => 'Quality',
            'location' => 'Chennai, India',
            'type' => 'Full-time',
            'link' => '#'
        ),
        array(
            'title' => 'R&D Scientist — Food Ingredients',
            'department' => 'Quality',
            'location' => 'Chennai, India',
            'type' => 'Full-time',
            'link' => '#'
        ),
        array(
            'title' => 'Production Officer',
            'department' => 'Quality',
            'location' => 'Chennai, India',
            'type' => 'Full-time',
            'link' => '#'
        ),
        array(
            'title' => 'Sales Executive',
            'department' => 'Quality',
            'location' => 'Chennai, India',
            'type' => 'Full-time',
            'link' => '#'
        )
    ),
    'view_all_text' => 'View All Openings',
    'view_all_link' => '#'
);

// 5. Careers Bottom Hero
$blocks[] = array(
    'acf_fc_layout' => 'careers_bottom_hero',
    'headline' => "Build What The Future<br>Will Be Made Of.",
    'description' => 'Bring your ideas, expertise, and ambition. Let’s build what comes next.',
    'button_text' => 'Contact Us',
    'button_link' => '#'
);

// 6. Careers FAQ Banner
$blocks[] = array(
    'acf_fc_layout' => 'careers_faq_banner',
    'faq_tagline' => 'Frequently Asked Questions',
    'faqs' => array(
        array(
            'question' => 'Do you support formulation guidance?',
            'answer' => 'Yes. We collaborate to align ingredient performance with application goals.'
        ),
        array(
            'question' => 'Can we request technical information?',
            'answer' => ''
        ),
        array(
            'question' => 'Do you support international supply?',
            'answer' => ''
        ),
        array(
            'question' => 'Can STARIZO support product development?',
            'answer' => ''
        ),
        array(
            'question' => 'Is there a minimum order requirement?',
            'answer' => ''
        )
    ),
    'banner_headline' => "More Than Ingredients.<br>Built For Growth.",
    'banner_description_1' => 'STARIZO combines sourcing intelligence, advanced processing, technical collaboration, and manufacturing scale to help businesses create products that perform in the real world.',
    'banner_description_2' => 'From idea to industrial production—we support every stage of the journey.',
    'button_text' => 'Speak To Team',
    'button_link' => '#'
);

update_field('field_page_builder_flexible', $blocks, $page_id);

echo "Successfully populated Careers page!\n";
