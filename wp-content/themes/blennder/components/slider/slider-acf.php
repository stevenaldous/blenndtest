<?php

return array(
	'key' => 'group_slider',
	'title' => 'Slider',
	'fields' => array(
		array(
			'key' => 'field_5bbd22f29e041',
			'label' => 'Slides',
			'name' => 'slides',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5bbd22bf9e040',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Slide',
			'sub_fields' => array(
				array(
					'key' => 'field_5ce71eecc7031',
					'label' => 'Image',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_5bbd22bf9e040',
					'label' => 'Background Image',
					'name' => 'slide_background_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'medium',
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
					'key' => 'field_5ce809649da68',
					'label' => 'Has Content',
					'name' => 'slide_has_content',
					'type' => 'true_false',
					'instructions' => 'Check off this box to enable a content editor tab for the slide',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'message' => 'Enable Content Tab',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_5ce80be3c4ac1',
					'label' => 'Content',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5ce809649da68',
								'operator' => '==',
								'value' => '1',
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
					'key' => 'field_69cd28ba34fe1',
					'label' => 'Slide Preheader',
					'name' => 'slide_preheader',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '51',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),

				array(
					'key' => 'field_67rytgfwqrwat4e5yt',
					'label' => 'Slide Preheader Color',
					'name' => 'slide_preheader_color',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_69cd28ba34fe1',
								'operator' => '!=empty',
							),
						),
					),
					'wrapper' => array(
						'width' => '49',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'white' => 'White',
						'black' => 'Black',
						'light' => 'Light',
						'dark' => 'Dark',
						'primary' => 'Primary',
						'secondary' => 'Secondary',
					),
					'allow_null' => 0,
					'default_value' => 'primary',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
				array(
					'key' => 'field_5bbd23449e042',
					'label' => 'Slide Header',
					'name' => 'slide_header',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 3,
					'new_lines' => 'br',
				),
				array(
					'key' => 'field_5f8m8a5skdbc2',
					'label' => 'Header Tag',
					'name' => 'slide_header_tag',
					'type' => 'button_group',
					'instructions' => 'Choose a component Header Tag',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5bbd23449e042',
								'operator' => '!=empty',
							),
						),
					),
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'h1' => 'H1',
						'h2' => 'H2',
						'h3' => 'H3',
						'h4' => 'H4',
						'h5' => 'H5',
						'h6' => 'H6',
						'p' => 'P',
					),
					'allow_null' => 0,
					'default_value' => 'h2',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
				array(
					'key' => 'field_5c7pwuc93m8c3',
					'label' => 'Header Style',
					'name' => 'slide_header_style',
					'type' => 'select',
					'instructions' => 'Choose a Header Style (optional).',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5bbd23449e042',
								'operator' => '!=empty',
							),
						),
					),
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'h1' => 'H1',
						'h2' => 'H2',
						'h3' => 'H3',
						'h4' => 'H4',
						'h5' => 'H5',
						'h6' => 'H6',
						'display-1' => 'Display 1',
						'display-2' => 'Display 2',
						'display-3' => 'Display 3',
						'display-4' => 'Display 4',
						'lead' => 'Lead',
						'custom' => 'Custom',
					),
					'default_value' => array(
						0 => 'default',
					),
					'allow_null' => 1,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array(
					'key' => 'field_5c7gjsndpl24s',
					'label' => 'Header Custom Class',
					'name' => 'slide_header_custom_class',
					'type' => 'text',
					'instructions' => 'Enter a custom class if you chose custom header style.',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c7pwuc93m8c3',
								'operator' => '==',
								'value' => 'custom',
							),
						),
					),
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'custom-class',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5bbd23b19e044',
					'label' => 'Slide Content',
					'name' => 'slide_content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 0,
					'delay' => 0,
				),
				array(
					'key' => 'field_5bd2365cd45cc',
					'label' => 'Button',
					'name' => 'slide_button',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '51',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
				),
				array(
					'key' => 'field_606b454b15fc3',
					'label' => 'Button Style',
					'name' => 'button_style',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_606b450e15fc1',
								'operator' => '!=empty',
							),
						),
					),
					'wrapper' => array(
						'width' => '49',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'primary' => 'Primary',
						'secondary' => 'Secondary',
						'outline-primary' => 'Outline Primary',
						'outline-secondary' => 'Outline Secondary',
						'outline-light' => 'Outline Light',
						'outline-dark' => 'Outline Dark',
					),
					'allow_null' => 0,
					'default_value' => 'primary',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),

				array(
					'key' => 'field_4536eryufhtdgdsaf',
					'label' => 'Has Secondary Image',
					'name' => 'slide_has_secondary_image',
					'type' => 'true_false',
					'instructions' => 'Check off this box to enable a secondary image for the slide',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '51',
						'class' => '',
						'id' => '',
					),
					'message' => 'Enable Content Tab',
					'default_value' => 0,
					'ui' => 0,
					'ui_on_text' => '',
					'ui_off_text' => '',
				),
				array(
					'key' => 'field_81u2bewauwe9uqw',
					'label' => 'Secondary Image',
					'name' => 'slide_secondary_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => array(
					 array(
						 array(
							 'field' => 'field_4536eryufhtdgdsaf',
							 'operator' => '==',
							 'value' => '1',
						 ),
					 ),
				 ),
					'wrapper' => array(
						'width' => '24',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'medium',
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
					'key' => 'field_234wrtesgdhty6',
					'label' => 'Secondary Image Position',
					'name' => 'slide_secondary_image_position',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
					 array(
						 array(
							 'field' => 'field_4536eryufhtdgdsaf',
							 'operator' => '==',
							 'value' => '1',
						 ),
					 ),
				 ),
					'wrapper' => array(
						'width' => '24',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'first' => 'Left',
						'last' => 'Right',
					),
					'default_value' => array(
						0 => 'center',
					),
					'allow_null' => 1,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array(
					'key' => 'field_5ce80be8c4ac2',
					'label' => 'Options',
					'name' => '',
					'type' => 'tab',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'placement' => 'top',
					'endpoint' => 0,
				),
				array(
					'key' => 'field_5bd239d3d45cd',
					'label' => 'Text Position',
					'name' => 'slide_text_position',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '51',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'left' => 'Left',
						'center' => 'Center',
						'right' => 'Right',
					),
					'default_value' => array(
						0 => 'center',
					),
					'allow_null' => 1,
					'multiple' => 0,
					'ui' => 1,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array(
					'key' => 'field_5bd23a17d45ce',
					'label' => 'Image Overlay',
					'name' => 'slide_image_overlay',
					'type' => 'true_false',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '49',
						'class' => '',
						'id' => '',
					),
					'message' => '',
					'default_value' => 0,
					'ui' => 1,
					'ui_on_text' => 'Overlay Enabled',
					'ui_off_text' => 'Overlay Disabled',
				),
				array(
					'key' => 'field_85uwritshjf',
					'label' => 'Slide Background Color',
					'name' => 'slide_background_color',
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
						'light' => 'Light',
						'dark' => 'Dark',
					),
					'allow_null' => 0,
					'default_value' => 'dark',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
			),
		),
		array(
			'key' => 'field_5ce80abf9da6d',
			'label' => 'Slider Config',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5ce80a169da6b',
			'label' => 'Autoplay',
			'name' => 'slider_carousel_autoplay',
			'type' => 'true_false',
			'instructions' => 'Allow the carousel to automatically change slides',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '51',
				'class' => '',
				'id' => '',
			),
			'message' => 'Autoplay',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ce80a789da6c',
			'label' => 'Autoplay Delay',
			'name' => 'slider_carousel_autoplay_delay',
			'type' => 'number',
			'instructions' => 'Delay (ms) between slides auto changing.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ce80a169da6b',
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
			'default_value' => 3000,
			'placeholder' => 3000,
			'prepend' => '',
			'append' => 'milliseconds',
			'min' => '',
			'max' => '',
			'step' => 50,
		),
		array(
			'key' => 'field_5ce80adb9da6e',
			'label' => 'Loop',
			'name' => 'slider_carousel_loop',
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
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ce80b039da6f',
			'label' => 'Speed',
			'name' => 'slider_carousel_speed',
			'type' => 'number',
			'instructions' => 'Speed at which the carousel slides.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '49',
				'class' => '',
				'id' => '',
			),
			'default_value' => 1000,
			'placeholder' => 1000,
			'prepend' => '',
			'append' => 'milliseconds',
			'min' => '',
			'max' => '',
			'step' => 50,
		),
		array(
			'key' => 'field_5ce80b2d9da70',
			'label' => 'Lazy Load',
			'name' => 'slider_carousel_lazy_load',
			'type' => 'true_false',
			'instructions' => 'Lazy Load the Slider Images',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '51',
				'class' => '',
				'id' => '',
			),
			'message' => 'Lazy Load',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ce81ebb7066a',
			'label' => 'Parallax',
			'name' => 'slider_carousel_parallax',
			'type' => 'true_false',
			'instructions' => 'Add Parallax Effect to slide Content',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '49',
				'class' => '',
				'id' => '',
			),
			'message' => 'Parallax',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5ce81484e0e03',
			'label' => 'Effect',
			'name' => 'slider_carousel_effect',
			'type' => 'select',
			'instructions' => 'Choose a slide transition effect. Leaving blank defaults to "Slide"',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'fade' => 'Fade',
				'coverflow' => 'Coverflow',
				'flip' => 'Flip',
			),
			'default_value' => array(
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
	),
	'design_tab' => array(
		array(
			'key' => 'field_5ce809dd9da6a',
			'label' => 'Show Pagination Dots',
			'name' => 'slider_carousel_show_pagination',
			'type' => 'true_false',
			'instructions' => 'Whether to show the pagination dots on the slider',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '51',
				'class' => '',
				'id' => '',
			),
			'message' => 'Show Pagination',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_606b450e15fc1',
			'label' => 'Pagination Position',
			'name' => 'pagination_position',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ce809dd9da6a',
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
			'choices' => array(
				'left' => 'Left',
				'center' => 'Center',
				'right' => 'Right',
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5ce809b29da69',
			'label' => 'Show Navigation Arrows',
			'name' => 'slider_carousel_show_navigation',
			'type' => 'true_false',
			'instructions' => 'Whether to show the navigation arrows on the slider',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '51',
				'class' => '',
				'id' => '',
			),
			'message' => 'Show Arrows',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_606b452c15fc2',
			'label' => 'Navigation Position',
			'name' => 'navigation_position',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ce809b29da69',
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
			'choices' => array(
				'left' => 'Left',
				'sides' => 'Sides',
				'right' => 'Right',
			),
			'allow_null' => 0,
			'default_value' => 'sides',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_606b47edadf85',
			'label' => 'Image Style',
			'name' => 'image_style',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '51',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'full' => 'Full',
				'contained' => 'Contained',
			),
			'allow_null' => 0,
			'default_value' => 'full',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_606b4805adf86',
			'label' => 'Image Position',
			'name' => 'image_position',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_606b47edadf85',
						'operator' => '==',
						'value' => 'contained',
					),
				),
			),
			'wrapper' => array(
				'width' => '24',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'left' => 'Left',
				'right' => 'Right',
			),
			'allow_null' => 0,
			'default_value' => 'left',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_606b4839872b8',
			'label' => 'Image Text Overlap',
			'name' => 'image_text_overlap',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_606b47edadf85',
						'operator' => '==',
						'value' => 'contained',
					),
				),
			),
			'wrapper' => array(
				'width' => '24',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'true' => 'True',
				'false' => 'False',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => 'false',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_606b486b872b9',
			'label' => 'Show Next Preview',
			'name' => 'show_next_preview',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '51',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'true' => 'True',
				'false' => 'False',
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
	),
	'config' => array(
		'background_tab' => false
	)
);