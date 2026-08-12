<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_product_fields',
	'title' => 'Product Details',
	'fields' => array(
		// --- Hero Section ---
		array(
			'key' => 'field_prod_tab_hero',
			'label' => 'Hero Section',
			'name' => '',
			'type' => 'tab',
			'placement' => 'top',
		),
		array(
			'key' => 'field_prod_category',
			'label' => 'Product Category',
			'name' => 'product_category',
			'type' => 'text',
			'instructions' => 'e.g. Food & Beverage',
		),
		array(
			'key' => 'field_prod_card_description',
			'label' => 'Card Description',
			'name' => 'card_description',
			'type' => 'textarea',
			'rows' => 3,
			'instructions' => 'Short description shown on product cards (Home & Category pages)',
		),
		array(
			'key' => 'field_prod_card_applications',
			'label' => 'Card Applications',
			'name' => 'card_applications',
			'type' => 'text',
			'instructions' => 'e.g. Food • Bakery • Snacks',
		),
		array(
			'key' => 'field_prod_hero_subtitle',
			'label' => 'Hero Subtitle',
			'name' => 'hero_subtitle',
			'type' => 'textarea',
			'rows' => 3,
		),
		array(
			'key' => 'field_prod_brochure_file',
			'label' => 'Brochure File',
			'name' => 'brochure_file',
			'type' => 'file',
			'return_format' => 'url',
		),
		array(
			'key' => 'field_prod_hero_badges',
			'label' => 'Hero Badges',
			'name' => 'hero_badges',
			'type' => 'repeater',
			'layout' => 'table',
			'button_label' => 'Add Badge',
			'sub_fields' => array(
				array(
					'key' => 'field_prod_badge_label',
					'label' => 'Badge Label',
					'name' => 'label',
					'type' => 'text',
				),
			),
		),
		array(
			'key' => 'field_prod_hero_features',
			'label' => 'Hero Features',
			'name' => 'hero_features',
			'type' => 'repeater',
			'layout' => 'block',
			'button_label' => 'Add Feature',
			'sub_fields' => array(
				array(
					'key' => 'field_prod_hero_feature_icon',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'image',
					'return_format' => 'url',
				),
				array(
					'key' => 'field_prod_hero_feature_title',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
				),
				array(
					'key' => 'field_prod_hero_feature_desc',
					'label' => 'Description',
					'name' => 'description',
					'type' => 'text',
				),
			),
		),

		// --- Why Manufacturers Choose Section ---
		array(
			'key' => 'field_prod_tab_benefits',
			'label' => 'Benefits Section',
			'name' => '',
			'type' => 'tab',
		),
		array(
			'key' => 'field_prod_benefits_title',
			'label' => 'Section Title',
			'name' => 'benefits_title',
			'type' => 'text',
			'default_value' => 'Why Manufacturers Choose',
		),
		array(
			'key' => 'field_prod_benefits_desc',
			'label' => 'Section Description',
			'name' => 'benefits_description',
			'type' => 'textarea',
			'rows' => 3,
			'default_value' => 'Built for formulations where ingredient performance matters.',
		),
		array(
			'key' => 'field_prod_benefits_list',
			'label' => 'Benefits List',
			'name' => 'benefits_list',
			'type' => 'repeater',
			'layout' => 'block',
			'button_label' => 'Add Benefit',
			'sub_fields' => array(
				array(
					'key' => 'field_prod_benefit_icon',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'image',
					'return_format' => 'url',
				),
				array(
					'key' => 'field_prod_benefit_title',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
				),
				array(
					'key' => 'field_prod_benefit_desc',
					'label' => 'Description',
					'name' => 'description',
					'type' => 'textarea',
					'rows' => 3,
				),
			),
		),

		// --- Video Section ---
		array(
			'key' => 'field_prod_tab_video',
			'label' => 'Video & Why Starizo',
			'name' => '',
			'type' => 'tab',
		),
		array(
			'key' => 'field_prod_video_thumb',
			'label' => 'Video Thumbnail',
			'name' => 'video_thumbnail',
			'type' => 'image',
			'return_format' => 'url',
		),
		array(
			'key' => 'field_prod_video_url',
			'label' => 'Video URL',
			'name' => 'video_url',
			'type' => 'url',
		),
		array(
			'key' => 'field_prod_why_starizo_title',
			'label' => 'Why Starizo Title',
			'name' => 'why_starizo_title',
			'type' => 'text',
		),
		array(
			'key' => 'field_prod_why_starizo_desc',
			'label' => 'Why Starizo Description',
			'name' => 'why_starizo_description',
			'type' => 'textarea',
			'rows' => 4,
		),
		array(
			'key' => 'field_prod_why_starizo_bullets',
			'label' => 'Checkmark Bullets',
			'name' => 'why_starizo_bullets',
			'type' => 'repeater',
			'layout' => 'table',
			'button_label' => 'Add Bullet',
			'sub_fields' => array(
				array(
					'key' => 'field_prod_why_starizo_bullet_text',
					'label' => 'Text',
					'name' => 'text',
					'type' => 'text',
				),
			),
		),

		// --- Application Explorer ---
		array(
			'key' => 'field_prod_tab_applications',
			'label' => 'Application Explorer',
			'name' => '',
			'type' => 'tab',
		),
		array(
			'key' => 'field_prod_app_title',
			'label' => 'Section Title',
			'name' => 'applications_title',
			'type' => 'text',
			'default_value' => 'Application Explorer',
		),
		array(
			'key' => 'field_prod_app_desc',
			'label' => 'Section Description',
			'name' => 'applications_description',
			'type' => 'textarea',
			'rows' => 3,
		),
		array(
			'key' => 'field_prod_app_list',
			'label' => 'Applications List',
			'name' => 'applications_list',
			'type' => 'repeater',
			'layout' => 'table',
			'button_label' => 'Add Application',
			'sub_fields' => array(
				array(
					'key' => 'field_prod_app_image',
					'label' => 'Image',
					'name' => 'image',
					'type' => 'image',
					'return_format' => 'url',
				),
				array(
					'key' => 'field_prod_app_icon',
					'label' => 'Icon',
					'name' => 'icon',
					'type' => 'image',
					'return_format' => 'url',
				),
				array(
					'key' => 'field_prod_app_name',
					'label' => 'Name',
					'name' => 'name',
					'type' => 'text',
				),
				array(
					'key' => 'field_prod_app_item_desc',
					'label' => 'Description',
					'name' => 'description',
					'type' => 'textarea',
					'rows' => 3,
				),
				array(
					'key' => 'field_prod_app_link',
					'label' => 'Link',
					'name' => 'link',
					'type' => 'url',
				),
			),
		),

		// --- FAQ & Value Prop ---
		array(
			'key' => 'field_prod_tab_faq',
			'label' => 'FAQ & Value Prop',
			'name' => '',
			'type' => 'tab',
		),
		array(
			'key' => 'field_prod_faq_title',
			'label' => 'FAQ Title',
			'name' => 'faq_title',
			'type' => 'text',
			'default_value' => 'Frequently Asked Questions',
		),
		array(
			'key' => 'field_prod_faq_list',
			'label' => 'FAQs',
			'name' => 'faq_list',
			'type' => 'repeater',
			'layout' => 'block',
			'button_label' => 'Add FAQ',
			'sub_fields' => array(
				array(
					'key' => 'field_prod_faq_q',
					'label' => 'Question',
					'name' => 'question',
					'type' => 'text',
				),
				array(
					'key' => 'field_prod_faq_a',
					'label' => 'Answer',
					'name' => 'answer',
					'type' => 'textarea',
					'rows' => 3,
				),
			),
		),
		array(
			'key' => 'field_prod_val_title',
			'label' => 'Value Prop Title',
			'name' => 'value_prop_title',
			'type' => 'text',
			'default_value' => 'The Starizo Value',
		),
		array(
			'key' => 'field_prod_val_desc',
			'label' => 'Value Prop Description',
			'name' => 'value_prop_description',
			'type' => 'textarea',
			'rows' => 3,
		),
		array(
			'key' => 'field_prod_val_stats',
			'label' => 'Stats',
			'name' => 'value_prop_stats',
			'type' => 'repeater',
			'layout' => 'table',
			'button_label' => 'Add Stat',
			'sub_fields' => array(
				array(
					'key' => 'field_prod_val_stat_value',
					'label' => 'Value',
					'name' => 'value',
					'type' => 'text',
					'instructions' => 'e.g. 50+',
				),
				array(
					'key' => 'field_prod_val_stat_label',
					'label' => 'Label',
					'name' => 'label',
					'type' => 'text',
					'instructions' => 'e.g. Years Experience',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;
