<?php
$file_path = '/Applications/MAMP/htdocs/starizo/wp-content/themes/starizo-theme/acf-json/group_page_builder.json';
$json_data = file_get_contents($file_path);
$group = json_decode($json_data, true);

// Find the page_blocks field (index 0)
$fields = &$group['fields'];
$layouts = &$fields[0]['layouts'];

// Define new layouts
$new_layouts = [
    'layout_partner_hero' => [
        'key' => 'layout_partner_hero',
        'name' => 'partner_hero',
        'label' => 'Partner Hero',
        'display' => 'block',
        'sub_fields' => [
            ['key' => 'field_ph_heading', 'label' => 'Heading', 'name' => 'heading', 'type' => 'text'],
            ['key' => 'field_ph_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea'],
            ['key' => 'field_ph_btn_text', 'label' => 'Button Text', 'name' => 'button_text', 'type' => 'text'],
            ['key' => 'field_ph_btn_link', 'label' => 'Button Link', 'name' => 'button_link', 'type' => 'url'],
            ['key' => 'field_ph_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array'],
            [
                'key' => 'field_ph_highlights',
                'label' => 'Highlights',
                'name' => 'highlights',
                'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_ph_highlight_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text']
                ]
            ]
        ]
    ],
    'layout_who_we_partner_with' => [
        'key' => 'layout_who_we_partner_with',
        'name' => 'who_we_partner_with',
        'label' => 'Who We Partner With',
        'display' => 'block',
        'sub_fields' => [
            ['key' => 'field_wwpw_subheading', 'label' => 'Subheading', 'name' => 'subheading', 'type' => 'text'],
            ['key' => 'field_wwpw_heading', 'label' => 'Heading', 'name' => 'heading', 'type' => 'text'],
            ['key' => 'field_wwpw_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array'],
            [
                'key' => 'field_wwpw_partners',
                'label' => 'Partners',
                'name' => 'partners',
                'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_wwpw_p_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'],
                    ['key' => 'field_wwpw_p_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea'],
                    ['key' => 'field_wwpw_p_icon', 'label' => 'Icon', 'name' => 'icon', 'type' => 'image', 'return_format' => 'array'],
                    ['key' => 'field_wwpw_p_highlight', 'label' => 'Highlight?', 'name' => 'highlight', 'type' => 'true_false', 'ui' => 1]
                ]
            ]
        ]
    ],
    'layout_why_partner_with_starizo' => [
        'key' => 'layout_why_partner_with_starizo',
        'name' => 'why_partner_with_starizo',
        'label' => 'Why Partner With Starizo',
        'display' => 'block',
        'sub_fields' => [
            ['key' => 'field_wpws_subheading', 'label' => 'Subheading', 'name' => 'subheading', 'type' => 'text'],
            ['key' => 'field_wpws_heading', 'label' => 'Heading', 'name' => 'heading', 'type' => 'text'],
            [
                'key' => 'field_wpws_features',
                'label' => 'Features',
                'name' => 'features',
                'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_wpws_f_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'],
                    ['key' => 'field_wpws_f_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea'],
                    ['key' => 'field_wpws_f_img', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array'],
                    ['key' => 'field_wpws_f_highlight', 'label' => 'Highlight (Expanded)?', 'name' => 'highlight', 'type' => 'true_false', 'ui' => 1]
                ]
            ]
        ]
    ],
    'layout_industries_we_support' => [
        'key' => 'layout_industries_we_support',
        'name' => 'industries_we_support',
        'label' => 'Industries We Support',
        'display' => 'block',
        'sub_fields' => [
            ['key' => 'field_iws_subheading', 'label' => 'Subheading', 'name' => 'subheading', 'type' => 'text'],
            ['key' => 'field_iws_heading', 'label' => 'Heading', 'name' => 'heading', 'type' => 'text'],
            ['key' => 'field_iws_btn_text', 'label' => 'Button Text', 'name' => 'button_text', 'type' => 'text'],
            ['key' => 'field_iws_btn_link', 'label' => 'Button Link', 'name' => 'button_link', 'type' => 'url'],
            [
                'key' => 'field_iws_industries',
                'label' => 'Industries',
                'name' => 'industries',
                'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_iws_i_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text'],
                    ['key' => 'field_iws_i_img', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'array']
                ]
            ]
        ]
    ],
    'layout_faq_section' => [
        'key' => 'layout_faq_section',
        'name' => 'faq_section',
        'label' => 'FAQ Section',
        'display' => 'block',
        'sub_fields' => [
            ['key' => 'field_faq_heading', 'label' => 'Heading', 'name' => 'heading', 'type' => 'text'],
            [
                'key' => 'field_faq_list',
                'label' => 'FAQs',
                'name' => 'faqs',
                'type' => 'repeater',
                'sub_fields' => [
                    ['key' => 'field_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text'],
                    ['key' => 'field_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'textarea'],
                    ['key' => 'field_faq_open', 'label' => 'Open by Default?', 'name' => 'open', 'type' => 'true_false', 'ui' => 1]
                ]
            ],
            ['key' => 'field_faq_info_title', 'label' => 'Info Card Title', 'name' => 'info_title', 'type' => 'text'],
            ['key' => 'field_faq_info_desc', 'label' => 'Info Card Description', 'name' => 'info_description', 'type' => 'wysiwyg'],
            ['key' => 'field_faq_btn_text', 'label' => 'Info Card Button Text', 'name' => 'info_button_text', 'type' => 'text'],
            ['key' => 'field_faq_btn_link', 'label' => 'Info Card Button Link', 'name' => 'info_button_link', 'type' => 'url']
        ]
    ]
];

foreach ($new_layouts as $key => $layout) {
    if (!isset($layouts[$key])) {
        $layouts[$key] = $layout;
    }
}

file_put_contents($file_path, json_encode($group, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
echo "ACF group updated successfully for Partner layouts.\n";
