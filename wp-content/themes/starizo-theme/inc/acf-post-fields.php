<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_post_fields',
	'title' => 'Blog Post Details',
	'fields' => array(
		array(
			'key' => 'field_post_faq_list',
			'label' => 'FAQs',
			'name' => 'faq_list',
			'type' => 'repeater',
			'layout' => 'block',
			'button_label' => 'Add FAQ',
			'sub_fields' => array(
				array(
					'key' => 'field_post_faq_q',
					'label' => 'Question',
					'name' => 'question',
					'type' => 'text',
				),
				array(
					'key' => 'field_post_faq_a',
					'label' => 'Answer',
					'name' => 'answer',
					'type' => 'textarea',
					'rows' => 3,
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
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
