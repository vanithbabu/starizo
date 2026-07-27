<?php
require_once 'wp-load.php';
require_once 'upload_helper.php';

$page_title = 'Research Lab';
$page = get_page_by_title($page_title, OBJECT, 'page');
$page_id = $page->ID;

$blocks = array();

// 1. Research Hero
$blocks[] = array(
    'acf_fc_layout' => 'research_hero',
    'category_badge' => 'TECHNOLOGY & QUALITY',
    'main_title' => 'Built On Science.<br>Proven Through<br>Process.',
    'subtitle' => 'Technology creates possibilities. Quality creates trust.<br>At STARIZO, both are designed into every ingredient we produce.',
    'button_link' => array(
        'title' => 'Speak To Team',
        'url' => '/contact',
        'target' => ''
    ),
    'background_leaf_image' => upload_image_to_wp('product-leaf.png'), 
    'foreground_image' => upload_image_to_wp('hero-research.png'), 
    'bottom_highlights' => array(
        array('text' => 'Advanced Testing'),
        array('text' => 'Global Standards'),
        array('text' => 'End-to-End Traceability'),
        array('text' => 'Continuous Improvement')
    )
);

// 2. Quality Process
$blocks[] = array(
    'acf_fc_layout' => 'quality_process',
    'section_header' => 'QUALITY STARTS LONG BEFORE PRODUCTION',
    'section_subtitle' => 'Quality is not a checkpoint. It is embedded across every stage of manufacturing.',
    'process_steps' => array(
        array(
            'number' => '01',
            'title' => 'Source',
            'description' => 'Incoming raw material evaluation.'
        ),
        array(
            'number' => '02',
            'title' => 'Inspect',
            'description' => 'In-process monitoring.'
        ),
        array(
            'number' => '03',
            'title' => 'Validate',
            'description' => 'Testing and verification.'
        ),
        array(
            'number' => '04',
            'title' => 'Approve',
            'description' => 'Quality release.'
        ),
        array(
            'number' => '05',
            'title' => 'Dispatch',
            'description' => 'Final readiness assessment.'
        )
    )
);

// 3. Feature With Bullets (01)
$blocks[] = array(
    'acf_fc_layout' => 'feature_with_bullets',
    'number_tag' => '01',
    'title' => 'Analytical Capabilities',
    'subtitle' => 'Precision testing for dependable performance.',
    'layout_direction' => 'image_left',
    'image' => upload_image_to_wp('anatical.png'),
    'bullet_points' => array(
        array('text' => 'Instrumental analysis (LC-MS, HPLC, FT-NIR, ICP-OES & more)'),
        array('text' => 'Nutritional profiling and verification'),
        array('text' => 'Purity and consistency evaluation'),
        array('text' => 'Particle size and viscosity assessment'),
        array('text' => 'Physical and chemical testing'),
        array('text' => 'Microbiological safety checks'),
        array('text' => 'Batch validation and quality monitoring')
    )
);

// 4. Feature With Bullets (02)
$blocks[] = array(
    'acf_fc_layout' => 'feature_with_bullets',
    'number_tag' => '02',
    'title' => 'R&D & Research Lab',
    'subtitle' => 'Turning ideas into market-ready solutions.',
    'layout_direction' => 'image_right',
    'image' => upload_image_to_wp('research-lab.png'),
    'bullet_points' => array(
        array('text' => 'Product optimization and reformulation'),
        array('text' => 'Application-specific functionality testing'),
        array('text' => 'Texture and stability enhancement'),
        array('text' => 'Clean-label solution development'),
        array('text' => 'Nutritional claim validation'),
        array('text' => 'Pilot trials and feasibility testing'),
        array('text' => 'Collaboration with research institutions')
    )
);

// 5. Feature With Bullets (03)
$blocks[] = array(
    'acf_fc_layout' => 'feature_with_bullets',
    'number_tag' => '03',
    'title' => 'Certifications & Compliance',
    'subtitle' => 'Trusted processes. Global standards.',
    'layout_direction' => 'image_left',
    'image' => upload_image_to_wp('about-let.png'),
    'bullet_points' => array(
        array('text' => 'ISO 9001:2015 — Quality Management System'),
        array('text' => 'NABL 17025 Accreditation (in progress)'),
        array('text' => 'Continuous quality monitoring & audit readiness'),
        array('text' => 'FSSC 22000 — Food Safety Certification'),
        array('text' => 'Export compliance across EU, US, MENA & APAC')
    )
);

// Now update the field using the correct name 'page_blocks'
update_field('page_blocks', $blocks, $page_id);

echo "Successfully populated Research Lab!\n";
