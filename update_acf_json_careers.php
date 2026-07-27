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

// 1. Careers Hero
$layout_careers_hero = [
    'key' => 'layout_careers_hero',
    'name' => 'careers_hero',
    'label' => 'Careers Hero',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_ch_tagline',
            'label' => 'Tagline',
            'name' => 'tagline',
            'type' => 'text',
        ],
        [
            'key' => 'field_ch_headline',
            'label' => 'Headline',
            'name' => 'headline',
            'type' => 'textarea',
            'rows' => 3
        ],
        [
            'key' => 'field_ch_desc',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'rows' => 3
        ],
        [
            'key' => 'field_ch_btn_text',
            'label' => 'Button Text',
            'name' => 'button_text',
            'type' => 'text',
        ],
        [
            'key' => 'field_ch_btn_link',
            'label' => 'Button Link',
            'name' => 'button_link',
            'type' => 'text',
        ]
    ]
];

// 2. Careers Purpose
$layout_careers_purpose = [
    'key' => 'layout_careers_purpose',
    'name' => 'careers_purpose',
    'label' => 'Careers Purpose',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_cp_tagline',
            'label' => 'Tagline',
            'name' => 'tagline',
            'type' => 'text',
        ],
        [
            'key' => 'field_cp_headline',
            'label' => 'Headline',
            'name' => 'headline',
            'type' => 'text',
        ],
        [
            'key' => 'field_cp_desc',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'rows' => 2
        ],
        [
            'key' => 'field_cp_cards',
            'label' => 'Purpose Cards',
            'name' => 'purpose_cards',
            'type' => 'repeater',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'field_cpc_title',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_cpc_desc',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea',
                    'rows' => 2
                ]
            ]
        ]
    ]
];

// 3. Careers Culture
$layout_careers_culture = [
    'key' => 'layout_careers_culture',
    'name' => 'careers_culture',
    'label' => 'Careers Culture',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_cc_tagline',
            'label' => 'Tagline',
            'name' => 'tagline',
            'type' => 'text',
        ],
        [
            'key' => 'field_cc_headline',
            'label' => 'Headline',
            'name' => 'headline',
            'type' => 'textarea',
            'rows' => 2
        ],
        [
            'key' => 'field_cc_desc',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'rows' => 3
        ],
        [
            'key' => 'field_cc_checklist',
            'label' => 'Checklist Items',
            'name' => 'checklist',
            'type' => 'repeater',
            'layout' => 'table',
            'sub_fields' => [
                [
                    'key' => 'field_ccc_text',
                    'label' => 'Item Text',
                    'name' => 'item_text',
                    'type' => 'text',
                ]
            ]
        ]
    ]
];

// 4. Careers Open Roles
$layout_careers_open_roles = [
    'key' => 'layout_careers_open_roles',
    'name' => 'careers_open_roles',
    'label' => 'Careers Open Roles',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_cor_tagline',
            'label' => 'Tagline',
            'name' => 'tagline',
            'type' => 'text',
        ],
        [
            'key' => 'field_cor_headline',
            'label' => 'Headline',
            'name' => 'headline',
            'type' => 'text',
        ],
        [
            'key' => 'field_cor_desc',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'rows' => 2
        ],
        [
            'key' => 'field_cor_roles',
            'label' => 'Roles',
            'name' => 'roles',
            'type' => 'repeater',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'field_corr_title',
                    'label' => 'Job Title',
                    'name' => 'title',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_corr_dept',
                    'label' => 'Department',
                    'name' => 'department',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_corr_loc',
                    'label' => 'Location',
                    'name' => 'location',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_corr_type',
                    'label' => 'Job Type',
                    'name' => 'type',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_corr_link',
                    'label' => 'Link',
                    'name' => 'link',
                    'type' => 'text',
                ]
            ]
        ],
        [
            'key' => 'field_cor_viewall_text',
            'label' => 'View All Text',
            'name' => 'view_all_text',
            'type' => 'text',
        ],
        [
            'key' => 'field_cor_viewall_link',
            'label' => 'View All Link',
            'name' => 'view_all_link',
            'type' => 'text',
        ]
    ]
];

// 5. Careers Bottom Hero
$layout_careers_bottom_hero = [
    'key' => 'layout_careers_bottom_hero',
    'name' => 'careers_bottom_hero',
    'label' => 'Careers Bottom Hero',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_cbh_headline',
            'label' => 'Headline',
            'name' => 'headline',
            'type' => 'textarea',
            'rows' => 3
        ],
        [
            'key' => 'field_cbh_desc',
            'label' => 'Description',
            'name' => 'description',
            'type' => 'textarea',
            'rows' => 3
        ],
        [
            'key' => 'field_cbh_btn_text',
            'label' => 'Button Text',
            'name' => 'button_text',
            'type' => 'text',
        ],
        [
            'key' => 'field_cbh_btn_link',
            'label' => 'Button Link',
            'name' => 'button_link',
            'type' => 'text',
        ]
    ]
];

// 6. Careers FAQ Banner
$layout_careers_faq_banner = [
    'key' => 'layout_careers_faq_banner',
    'name' => 'careers_faq_banner',
    'label' => 'Careers FAQ & Banner',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_cfb_faq_tagline',
            'label' => 'FAQ Tagline',
            'name' => 'faq_tagline',
            'type' => 'text',
        ],
        [
            'key' => 'field_cfb_faqs',
            'label' => 'FAQs',
            'name' => 'faqs',
            'type' => 'repeater',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'field_cfbf_q',
                    'label' => 'Question',
                    'name' => 'question',
                    'type' => 'text',
                ],
                [
                    'key' => 'field_cfbf_a',
                    'label' => 'Answer',
                    'name' => 'answer',
                    'type' => 'textarea',
                    'rows' => 3
                ]
            ]
        ],
        [
            'key' => 'field_cfb_ban_hl',
            'label' => 'Banner Headline',
            'name' => 'banner_headline',
            'type' => 'textarea',
            'rows' => 2
        ],
        [
            'key' => 'field_cfb_ban_desc1',
            'label' => 'Banner Description 1',
            'name' => 'banner_description_1',
            'type' => 'textarea',
            'rows' => 3
        ],
        [
            'key' => 'field_cfb_ban_desc2',
            'label' => 'Banner Description 2',
            'name' => 'banner_description_2',
            'type' => 'textarea',
            'rows' => 3
        ],
        [
            'key' => 'field_cfb_btn_text',
            'label' => 'Button Text',
            'name' => 'button_text',
            'type' => 'text',
        ],
        [
            'key' => 'field_cfb_btn_link',
            'label' => 'Button Link',
            'name' => 'button_link',
            'type' => 'text',
        ]
    ]
];

$page_blocks_field['layouts']['layout_careers_hero'] = $layout_careers_hero;
$page_blocks_field['layouts']['layout_careers_purpose'] = $layout_careers_purpose;
$page_blocks_field['layouts']['layout_careers_culture'] = $layout_careers_culture;
$page_blocks_field['layouts']['layout_careers_open_roles'] = $layout_careers_open_roles;
$page_blocks_field['layouts']['layout_careers_bottom_hero'] = $layout_careers_bottom_hero;
$page_blocks_field['layouts']['layout_careers_faq_banner'] = $layout_careers_faq_banner;

file_put_contents($file_path, json_encode($group, JSON_PRETTY_PRINT));
echo "ACF JSON file updated with 6 Careers layouts!\n";
