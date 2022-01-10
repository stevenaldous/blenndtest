<?php

return array(
	'key' => 'group_5b74333ef40a012',
	'title' => 'Logos',
	'fields' => array(
		array(
			'key' => 'field_605bakldjg34',
			'label' => 'Logos Header Layout',
			'name' => 'heading_layout_columns',
			'type' => 'true_false',
			'instructions' => 'Choose the Header Layout.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => 'Show Header as 2 columns',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_605bbagjkoi0992',
			'label' => 'Logos Title Layout Centered',
			'name' => 'heading_alignment',
			'type' => 'button_group',
			'instructions' => 'Choose if the title should be centered.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_605bakldjg34',
						'operator' => '!=',
						'value' => 1,
					),
				),
			),
			'wrapper' => array(
				'width' => '49',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'left' => 'Left',
				'center' => 'Center',
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5badg9834196d8f',
			'label' => 'Logos',
			'name' => 'logos',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5b74335696d91',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Card',
			'sub_fields' => array(
				array(
					'key' => 'field_5cdcadgkjkhba131',
					'label' => 'Logo Image',
					'name' => 'logo_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'thumbnail',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
				array(
					'key' => 'field_5clkj98yba132',
					'label' => 'Logo Link',
					'name' => 'logo_link',
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
		),
		array(
			'key' => 'field_5as934gksdjnx12',
			'label' => 'Carousel',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_b8k0987hbnjb3b',
						'operator' => '==',
						'value' => 'carousel',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_59384kdf2xxs212',
			'label' => 'Autoplay',
			'name' => 'logos_carousel_autoplay',
			'type' => 'true_false',
			'instructions' => 'Allow the carousel to automatically change slides.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '51',
				'class' => '',
				'id' => '',
			),
			'message' => 'Autoplay',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_52983sdjhfk2f12',
			'label' => 'Autoplay Delay',
			'name' => 'logos_carousel_autoplay_delay',
			'type' => 'number',
			'instructions' => 'Delay (ms) between slides auto changing.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_59384kdf2xxs212',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '49',
				'class' => '',
				'id' => '',
			),
			'default_value' => 1,
			'placeholder' => 1,
			'prepend' => '',
			'append' => 'milliseconds',
			'min' => '',
			'max' => '',
			'step' => 1,
		),
		array(
			'key' => 'field_5amnsg3876dlc12',
			'label' => 'Loop',
			'name' => 'logos_carousel_loop',
			'type' => 'true_false',
			'instructions' => 'Allow the carousel to loop back to the beginning.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '51',
				'class' => '',
				'id' => '',
			),
			'message' => 'Loop',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_528d36dn2os9212',
			'label' => 'Speed',
			'name' => 'logos_carousel_speed',
			'type' => 'number',
			'instructions' => 'Speed at which the carousel slides',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '49',
				'class' => '',
				'id' => '',
			),
			'default_value' => 5000,
			'placeholder' => 5000,
			'prepend' => '',
			'append' => 'milliseconds',
			'min' => '',
			'max' => '',
			'step' => 50,
		),
		array(
			'key' => 'field_5so3985xm2m0212',
			'label' => 'Lazy Load Images',
			'name' => 'logos_carousel_lazy_load',
			'type' => 'true_false',
			'instructions' => 'Lazy Load the Cards Images',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Lazy Load',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	),
	'design_tab' => array(
		array(
			'key' => 'field_b8k0987hbnjb3b',
			'label' => 'Logos Template',
			'name' => 'logos_template',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'grid' => 'Grid',
				'carousel' => 'Carousel',
			),
			'default_value' => 'grid',
			'allow_null' => 0,
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5ajt640dk2l0212',
			'label' => 'Cards Per View - Small',
			'name' => 'logos_cards_per_view_sm',
			'type' => 'number',
			'instructions' => 'Number of cards to show on small screens (mobile phones)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Cards Per View',
			'prepend' => '',
			'append' => 'card(s)',
			'min' => 1,
			'max' => 6,
			'step' => 1,
		),
		array(
			'key' => 'field_5plsnh387sn2k12',
			'label' => 'Cards Per View - Medium',
			'name' => 'logos_cards_per_view_md',
			'type' => 'number',
			'instructions' => 'Number of cards to show on medium screens (tablet)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Cards Per View',
			'prepend' => '',
			'append' => 'card(s)',
			'min' => 1,
			'max' => 6,
			'step' => 1,
		),
		array(
			'key' => 'field_8sdkj3xm093ld12',
			'label' => 'Cards Per View - Large',
			'name' => 'logos_cards_per_view_lg',
			'type' => 'number',
			'instructions' => 'Number of cards to show on large screens (desktop)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Cards Per View',
			'prepend' => '',
			'append' => 'card(s)',
			'min' => 1,
			'max' => 6,
			'step' => 1,
		),
		array(
			'key' => 'field_542iruyx9z29d12',
			'label' => 'Cards Per View - XLarge',
			'name' => 'logos_cards_per_view_xl',
			'type' => 'number',
			'instructions' => 'Number of cards to show on Xlarge screens (desktop xl)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Cards Per View',
			'prepend' => '',
			'append' => 'card(s)',
			'min' => 1,
			'max' => 6,
			'step' => 1,
		),
		array(
			'key' => 'field_5bbcadgjho8978gobe5c',
			'label' => 'Grayscale Cards',
			'name' => 'logos_cards_grayscale',
			'type' => 'true_false',
			'instructions' => 'Make images black and white and then color on hover',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_b8k0987hbnjb3b',
						'operator' => '==',
						'value' => 'grid',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Grayscale On',
			'ui_off_text' => 'Grayscale Off',
		),
		array(
			'key' => 'field_5bbjbhk79obe5c',
			'label' => 'Card Style',
			'name' => 'logos_cards_style',
			'type' => 'button_group',
			'instructions' => 'Choose the Card Style (Only applies to Grid Layout)',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_b8k0987hbnjb3b',
						'operator' => '==',
						'value' => 'grid',
					),
				),
			),
			'choices' => array(
				'none' => 'None',
				'bordered' => 'Bordered',
				'shadowed' => 'Box Shadowed',
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'bordered',
			'allow_null' => 0,
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
	),
);
