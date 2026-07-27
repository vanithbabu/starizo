<?php
require_once 'wp-load.php';

$acf_group = acf_get_field_group('group_page_builder');
if (!$acf_group) {
    die("ACF group 'group_page_builder' not found.\n");
}

$fields = acf_get_fields($acf_group['key']);
$page_blocks_field = null;
foreach ($fields as $field) {
    if ($field['name'] === 'page_blocks' && $field['type'] === 'flexible_content') {
        $page_blocks_field = $field;
        break;
    }
}

if (!$page_blocks_field) {
    die("Flexible content field 'page_blocks' not found.\n");
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

// Add the layouts
$page_blocks_field['layouts'][] = $layout_research_hero;
$page_blocks_field['layouts'][] = $layout_quality_process;
$page_blocks_field['layouts'][] = $layout_feature_bullets;

// Update the field
acf_update_field($page_blocks_field);

echo "ACF Research Lab layouts added successfully.\n";
