<?php
$file_path = '/Applications/MAMP/htdocs/starizo/wp-content/themes/starizo-theme/acf-json/group_page_builder.json';
$json_data = file_get_contents($file_path);
$group = json_decode($json_data, true);

// Find the page_blocks field
$page_blocks_field = &$group['fields'][0]; // Assuming it's the first field, check name just in case
if ($page_blocks_field['name'] !== 'page_blocks') {
    foreach ($group['fields'] as &$field) {
        if ($field['name'] === 'page_blocks') {
            $page_blocks_field = &$field;
            break;
        }
    }
}

// Layout: Research Hero
$layout_research_hero = [
    'key' => 'layout_research_hero',
    'name' => 'research_hero',
    'label' => 'Research Hero',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_rh_badge',
            'label' => 'Category Badge',
            'name' => 'category_badge',
            'type' => 'text',
            'default_value' => 'TECHNOLOGY & QUALITY'
        ],
        [
            'key' => 'field_rh_title',
            'label' => 'Main Title',
            'name' => 'main_title',
            'type' => 'textarea',
            'rows' => 3
        ],
        [
            'key' => 'field_rh_sub',
            'label' => 'Subtitle',
            'name' => 'subtitle',
            'type' => 'textarea',
            'rows' => 3
        ],
        [
            'key' => 'field_rh_btn',
            'label' => 'Button Link',
            'name' => 'button_link',
            'type' => 'link'
        ],
        [
            'key' => 'field_rh_bgimg',
            'label' => 'Background Leaf Image',
            'name' => 'background_leaf_image',
            'type' => 'image',
            'return_format' => 'array'
        ],
        [
            'key' => 'field_rh_fgimg',
            'label' => 'Foreground Image',
            'name' => 'foreground_image',
            'type' => 'image',
            'return_format' => 'array'
        ],
        [
            'key' => 'field_rh_hl',
            'label' => 'Bottom Highlights',
            'name' => 'bottom_highlights',
            'type' => 'repeater',
            'layout' => 'table',
            'sub_fields' => [
                [
                    'key' => 'field_rh_hl_text',
                    'label' => 'Text',
                    'name' => 'text',
                    'type' => 'text'
                ]
            ]
        ]
    ]
];

// Layout: Quality Process
$layout_quality_process = [
    'key' => 'layout_quality_process',
    'name' => 'quality_process',
    'label' => 'Quality Process',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_qp_head',
            'label' => 'Section Header',
            'name' => 'section_header',
            'type' => 'text'
        ],
        [
            'key' => 'field_qp_sub',
            'label' => 'Section Subtitle',
            'name' => 'section_subtitle',
            'type' => 'textarea'
        ],
        [
            'key' => 'field_qp_steps',
            'label' => 'Process Steps',
            'name' => 'process_steps',
            'type' => 'repeater',
            'layout' => 'block',
            'sub_fields' => [
                [
                    'key' => 'field_qp_steps_num',
                    'label' => 'Number',
                    'name' => 'number',
                    'type' => 'text'
                ],
                [
                    'key' => 'field_qp_steps_tit',
                    'label' => 'Title',
                    'name' => 'title',
                    'type' => 'text'
                ],
                [
                    'key' => 'field_qp_steps_desc',
                    'label' => 'Description',
                    'name' => 'description',
                    'type' => 'textarea'
                ]
            ]
        ]
    ]
];

// Layout: Feature With Bullets
$layout_feature_bullets = [
    'key' => 'layout_feature_bullets',
    'name' => 'feature_with_bullets',
    'label' => 'Feature With Bullets',
    'display' => 'block',
    'sub_fields' => [
        [
            'key' => 'field_fwb_num',
            'label' => 'Number Tag',
            'name' => 'number_tag',
            'type' => 'text'
        ],
        [
            'key' => 'field_fwb_tit',
            'label' => 'Title',
            'name' => 'title',
            'type' => 'text'
        ],
        [
            'key' => 'field_fwb_sub',
            'label' => 'Subtitle',
            'name' => 'subtitle',
            'type' => 'textarea'
        ],
        [
            'key' => 'field_fwb_img',
            'label' => 'Image',
            'name' => 'image',
            'type' => 'image',
            'return_format' => 'array'
        ],
        [
            'key' => 'field_fwb_dir',
            'label' => 'Layout Direction',
            'name' => 'layout_direction',
            'type' => 'select',
            'choices' => [
                'image_left' => 'Image Left',
                'image_right' => 'Image Right'
            ],
            'default_value' => 'image_left'
        ],
        [
            'key' => 'field_fwb_bul',
            'label' => 'Bullet Points',
            'name' => 'bullet_points',
            'type' => 'repeater',
            'layout' => 'table',
            'sub_fields' => [
                [
                    'key' => 'field_fwb_bul_text',
                    'label' => 'Text',
                    'name' => 'text',
                    'type' => 'text'
                ]
            ]
        ]
    ]
];

$page_blocks_field['layouts']['layout_research_hero'] = $layout_research_hero;
$page_blocks_field['layouts']['layout_quality_process'] = $layout_quality_process;
$page_blocks_field['layouts']['layout_feature_bullets'] = $layout_feature_bullets;

file_put_contents($file_path, json_encode($group, JSON_PRETTY_PRINT));
echo "ACF JSON file updated with Research Lab layouts!\n";
