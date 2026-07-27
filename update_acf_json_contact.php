<?php
$file_path = '/Applications/MAMP/htdocs/starizo/wp-content/themes/starizo-theme/acf-json/group_page_builder.json';
$json_data = file_get_contents($file_path);
$group = json_decode($json_data, true);

// Find the page_blocks field
$page_blocks_field = &$group['fields'][0];
if ($page_blocks_field['name'] !== 'page_blocks') {
    foreach ($group['fields'] as &$field) {
        if ($field['name'] === 'page_blocks') {
            $page_blocks_field = &$field;
            break;
        }
    }
}

// Layout: Contact Section
$layout_contact_section = [
    'key' => 'layout_contact_section',
    'name' => 'contact_section',
    'label' => 'Contact Section',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_cs_tagline',
            'label' => 'Hero Tagline',
            'name' => 'tagline',
            'type' => 'text',
            'default_value' => 'CONTACT STARIZO'
        ],
        [
            'key' => 'field_cs_title_1',
            'label' => 'Hero Title Line 1',
            'name' => 'title_line_1',
            'type' => 'text',
            'default_value' => 'Let’s Build Better'
        ],
        [
            'key' => 'field_cs_title_2',
            'label' => 'Hero Title Line 2',
            'name' => 'title_line_2',
            'type' => 'text',
            'default_value' => 'Ingredients. Together.'
        ],
        [
            'key' => 'field_cs_info_title',
            'label' => 'Contact Info Title',
            'name' => 'contact_info_title',
            'type' => 'text',
            'default_value' => 'Contact Information'
        ],
        [
            'key' => 'field_cs_info_sub',
            'label' => 'Contact Info Subtitle',
            'name' => 'contact_info_subtitle',
            'type' => 'text',
            'default_value' => 'Say something to start a live chat!'
        ],
        [
            'key' => 'field_cs_email',
            'label' => 'Email',
            'name' => 'email',
            'type' => 'email',
            'default_value' => 'sales@starizo.com'
        ],
        [
            'key' => 'field_cs_social',
            'label' => 'Social Links',
            'name' => 'social_links',
            'type' => 'repeater',
            'layout' => 'table',
            'sub_fields' => [
                [
                    'key' => 'field_cs_social_icon',
                    'label' => 'Icon Image',
                    'name' => 'icon',
                    'type' => 'image',
                    'return_format' => 'array'
                ],
                [
                    'key' => 'field_cs_social_url',
                    'label' => 'URL',
                    'name' => 'url',
                    'type' => 'url'
                ]
            ]
        ],
        [
            'key' => 'field_cs_form_tag',
            'label' => 'Form Tagline',
            'name' => 'form_tagline',
            'type' => 'text',
            'default_value' => 'TELL US ABOUT YOUR PROJECT'
        ],
        [
            'key' => 'field_cs_form_tit',
            'label' => 'Form Title',
            'name' => 'form_title',
            'type' => 'text',
            'default_value' => 'Built to support formulation goals across categories and markets.'
        ],
        [
            'key' => 'field_cs_form_sub',
            'label' => 'Form Subtitle',
            'name' => 'form_subtitle',
            'type' => 'textarea',
            'default_value' => 'The more context you provide, the better we can support you.',
            'rows' => 2
        ],
        [
            'key' => 'field_cs_form_short',
            'label' => 'Form Shortcode',
            'name' => 'form_shortcode',
            'type' => 'text',
            'instructions' => 'Paste a Contact Form 7 or WPForms shortcode here. If left empty, a static HTML demo form will be displayed.'
        ]
    ]
];

$page_blocks_field['layouts']['layout_contact_section'] = $layout_contact_section;

file_put_contents($file_path, json_encode($group, JSON_PRETTY_PRINT));
echo "ACF JSON file updated with Contact Section layout!\n";
