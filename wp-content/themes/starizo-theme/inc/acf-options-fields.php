<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_theme_settings',
	'title' => 'Theme Global Settings',
	'fields' => array(
		array(
			'key' => 'field_header_tab',
			'label' => 'Header',
			'name' => '',
			'type' => 'tab',
			'placement' => 'top',
		),
		array(
			'key' => 'field_header_logo',
			'label' => 'Header Logo',
			'name' => 'header_logo',
			'type' => 'image',
			'return_format' => 'url',
		),
		array(
			'key' => 'field_header_cta_text',
			'label' => 'CTA Button Text',
			'name' => 'header_cta_text',
			'type' => 'text',
			'default_value' => 'Contact Us',
		),
		array(
			'key' => 'field_header_cta_link',
			'label' => 'CTA Button Link',
			'name' => 'header_cta_link',
			'type' => 'link',
			'return_format' => 'url',
		),
		array(
			'key' => 'field_footer_tab',
			'label' => 'Footer',
			'name' => '',
			'type' => 'tab',
			'placement' => 'top',
		),
		array(
			'key' => 'field_footer_logo',
			'label' => 'Footer Logo',
			'name' => 'footer_logo',
			'type' => 'image',
			'return_format' => 'url',
		),
		array(
			'key' => 'field_footer_email',
			'label' => 'Contact Email',
			'name' => 'footer_email',
			'type' => 'email',
			'default_value' => 'sales@starizo.com',
		),
		array(
			'key' => 'field_footer_copyright',
			'label' => 'Copyright Text',
			'name' => 'footer_copyright_text',
			'type' => 'text',
			'default_value' => '© 2026 Starizo | All Rights Reserved.',
		),
		array(
			'key' => 'field_footer_legal_policy',
			'label' => 'Legal Policy Link',
			'name' => 'footer_legal_policy_link',
			'type' => 'link',
			'return_format' => 'url',
		),
		array(
			'key' => 'field_footer_privacy_policy',
			'label' => 'Privacy Policy Link',
			'name' => 'footer_privacy_policy_link',
			'type' => 'link',
			'return_format' => 'url',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'theme-general-settings',
			),
		),
	),
));

endif;
