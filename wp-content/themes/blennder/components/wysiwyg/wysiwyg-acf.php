<?php

return array(
	'key' => 'group_wysiwyg',
	'title' => 'WYSIWYG',
	'fields' => array (
		array(
			'key' => 'field_5cdc1283ohfu8312',
			'label' => 'Wysiwyg Link',
			'name' => 'wysiwyg_link',
			'type' => 'link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
		),
	),
	'design_tab' => array(
		array(
			'key' => 'field_607a1a61a5f8c',
			'label' => 'Layout',
			'name' => 'wysiwyg_layout',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'default' => 'Default',
				'center' => 'Centered Content',
				'columns' => 'Two Column Layout',
				'content-columns' => 'Two Column Content',
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
		)
	)
);