<?php

return array(
	'key' => 'group_5b73a6c29e165',
	'title' => 'Hero',
	'description' => 'Hero Description',
	'icon' => 'superhero-alt',
	'keywords' => [ 'hero' ],




	'fields' => array(


		array(
			'key' => 'field_61dcbdf3f3ba7',
			'label' => 'Hero Buttons',
			'name' => 'hero_button_rep',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'capability' => '',
			'collapsed' => '',
			'min' => 0,
			'max' => 3,
			'layout' => 'block',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_61dcbe13f3ba8',
					'label' => 'Button',
					'name' => 'hero_button',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'capability' => '',
					'return_format' => 'array',
				),
			),
		),
	


		// array(
		// 	'key' => 'field_53c4m39x0385az',
		// 	'label' => 'Button',
		// 	'name' => 'hero_button',
		// 	'type' => 'link',
		// 	'instructions' => '',
		// 	'required' => 0,
		// 	'conditional_logic' => 0,
		// 	'wrapper' => array(
		// 		'width' => '',
		// 		'class' => '',
		// 		'id' => '',
		// 	),
		// 	'return_format' => 'array',
		// ),






	),
	'design_tab' => array(
		array(
			'key' => 'field_5bbbbb3584b3b',
			'label' => 'Text Positioning',
			'name' => 'hero_text_positioning',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top left' => 'Top Left',
				'top center' => 'Top Center',
				'top right' => 'Top Right',
				'center left' => 'Center Left',
				'center center' => 'Center Center',
				'center right' => 'Center Right',
				'bottom left' => 'Bottom Left',
				'bottom center' => 'Bottom Center',
				'bottom right' => 'Bottom Right',
			),
			'default_value' => array(
				0 => 'center center',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5bbcc5b961bc0',
			'label' => 'Hero Size',
			'name' => 'hero_size',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'auto' => 'Auto',
				'sm' => 'Small',
				'md' => 'Medium',
				'lg' => 'Large',
				'cover' => 'Cover',
			),
			'default_value' => array(
				0 => 'lg',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'ajax' => 0,
			'return_format' => 'value',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5bdfk49n92un20',
			'label' => 'Show Hero Arrow',
			'name' => 'hero_arrow',
			'type' => 'true_false',
			'instructions' => 'Show the Animated Arrow.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
		),
	),
);