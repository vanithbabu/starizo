<?php
$file_path = '/Applications/MAMP/htdocs/starizo/wp-content/themes/starizo-theme/acf-json/group_page_builder.json';
$json_data = file_get_contents($file_path);
$group = json_decode($json_data, true);

// Find the page_blocks field (index 0)
$fields = &$group['fields'];
$layouts = &$fields[0]['layouts'];

// Define new layouts
$new_layouts = [
    'layout_about_hero' => [
        'key' => 'layout_about_hero',
        'name' => 'about_hero',
        'label' => 'About Hero',
        'display' => 'block',
        'sub_fields' => [
            ['key' => 'field_about_hero_heading', 'label' => 'Heading', 'name' => 'heading', 'type' => 'text'],
            ['key' => 'field_about_hero_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea'],
            ['key' => 'field_about_hero_btn1_text', 'label' => 'Button 1 Text', 'name' => 'button_1_text', 'type' => 'text'],
            ['key' => 'field_about_hero_btn1_link', 'label' => 'Button 1 Link', 'name' => 'button_1_link', 'type' => 'url'],
            ['key' => 'field_about_hero_btn2_text', 'label' => 'Button 2 Text', 'name' => 'button_2_text', 'type' => 'text'],
            ['key' => 'field_about_hero_btn2_link', 'label' => 'Button 2 Link', 'name' => 'button_2_link', 'type' => 'url'],
            ['key' => 'field_about_hero_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array']
        ]
    ],
    'layout_our_story' => [
        'key' => 'layout_our_story',
        'name' => 'our_story',
        'label' => 'Our Story',
        'display' => 'block',
        'sub_fields' => [
            ['key' => 'field_our_story_subheading', 'label' => 'Subheading', 'name' => 'subheading', 'type' => 'text'],
            ['key' => 'field_our_story_heading', 'label' => 'Heading', 'name' => 'heading', 'type' => 'text'],
            ['key' => 'field_our_story_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'wysiwyg']
        ]
    ],
    'layout_inside_starizo' => [
        'key' => 'layout_inside_starizo',
        'name' => 'inside_starizo',
        'label' => 'Inside Starizo',
        'display' => 'block',
        'sub_fields' => [
            ['key' => 'field_inside_subheading', 'label' => 'Subheading', 'name' => 'subheading', 'type' => 'text'],
            ['key' => 'field_inside_heading', 'label' => 'Heading', 'name' => 'heading', 'type' => 'text'],
            ['key' => 'field_inside_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea'],
            ['key' => 'field_inside_blueprint', 'label' => 'Blueprint Image', 'name' => 'blueprint_image', 'type' => 'image', 'return_format' => 'array'],
            [
                'key' => 'field_inside_highlights',
                'label' => 'Highlights',
                'name' => 'highlights',
                'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_inside_highlight_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text']
                ]
            ],
            ['key' => 'field_inside_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'],
            ['key' => 'field_inside_date', 'label' => 'Date', 'name' => 'date', 'type' => 'text'],
            ['key' => 'field_inside_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array']
        ]
    ],
    'layout_certifications' => [
        'key' => 'layout_certifications',
        'name' => 'certifications',
        'label' => 'Certifications',
        'display' => 'block',
        'sub_fields' => [
            ['key' => 'field_certs_subheading', 'label' => 'Subheading', 'name' => 'subheading', 'type' => 'text'],
            [
                'key' => 'field_certs_list',
                'label' => 'Certificates',
                'name' => 'certificates',
                'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_cert_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'],
                    ['key' => 'field_cert_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array']
                ]
            ]
        ]
    ],
    'layout_cta_banner' => [
        'key' => 'layout_cta_banner',
        'name' => 'cta_banner',
        'label' => 'CTA Banner',
        'display' => 'block',
        'sub_fields' => [
            ['key' => 'field_cta_heading', 'label' => 'Heading', 'name' => 'heading', 'type' => 'text'],
            ['key' => 'field_cta_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea'],
            ['key' => 'field_cta_btn_text', 'label' => 'Button Text', 'name' => 'button_text', 'type' => 'text'],
            ['key' => 'field_cta_btn_link', 'label' => 'Button Link', 'name' => 'button_link', 'type' => 'url'],
            ['key' => 'field_cta_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array'],
            ['key' => 'field_cta_floating', 'label' => 'Floating Image', 'name' => 'floating_image', 'type' => 'image', 'return_format' => 'array']
        ]
    ]
];

foreach ($new_layouts as $key => $layout) {
    if (!isset($layouts[$key])) {
        $layouts[$key] = $layout;
    }
}

file_put_contents($file_path, json_encode($group, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
echo "ACF group updated successfully.\n";
