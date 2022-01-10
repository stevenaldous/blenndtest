<?php

return array(
	'key' => 'group_blurb',
	'title' => 'Blurb',
	'fields' => array(
		array(
			'key' => 'field_605b1234jo019j0219uj134',
			'label' => 'Blurb Header Layout',
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
			'key' => 'field_605b1234jo241283rjoi0992',
			'label' => 'Blurb Title Layout Centered',
			'name' => 'heading_alignment',
			'type' => 'button_group',
			'instructions' => 'Choose if the title should be centered.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_605b1234jo019j0219uj134',
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
			'key' => 'field_5c4219ab9a521',
			'label' => 'Blurbs',
			'name' => 'blurb_blurbs',
			'type' => 'repeater',
			'instructions' => 'Collection of Blurbs',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5c4219499a51e',
			'min' => 0,
			'max' => '',
			'layout' => 'block',
			'button_label' => 'Add Blurb',
			'sub_fields' => array(
				array(
					'key' => 'field_5d1a4a0daf4c4',
					'label' => 'Icon Type',
					'name' => 'blurb_icon_type',
					'type' => 'button_group',
					'instructions' => 'Choose the Icon Type. Image will allow a media file upload, Font Awesome Icon will allow a Font Awesome icon name and style, and Custom Font Icon will allow any custom font icon classes.',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '70',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'none' => 'None',
						'image' => 'Image',
						'fa' => 'Font Awesome Icon',
					),
					'allow_null' => 0,
					'default_value' => 'none',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
				array(
					'key' => 'field_5c42190d9a51d',
					'label' => 'Image Icon',
					'name' => 'blurb_image_icon',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5d1a4a0daf4c4',
								'operator' => '==',
								'value' => 'image',
							),
						),
					),
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
					'mime_types' => '.jpg, .png, .gif, .svg, .jpeg',
				),
				array(
					'key' => 'field_5d1a4ab6af4c5',
					'label' => 'Font Awesome Icon',
					'name' => 'blurb_font_awesome_icon',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5d1a4a0daf4c4',
								'operator' => '==',
								'value' => 'fa',
							),
						),
					),
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => 'fa-',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5d1a4af5af4c7',
					'label' => 'Font Awesome Icon Style',
					'name' => 'blurb_font_awesome_icon_style',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5d1a4a0daf4c4',
								'operator' => '==',
								'value' => 'fa',
							),
						),
					),
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'fal' => 'Light',
						'far' => 'Regular',
						'fas' => 'Solid',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => 'far',
					'layout' => 'horizontal',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				array(
					'key' => 'field_5c4219499a51e',
					'label' => 'Title',
					'name' => 'blurb_title',
					'type' => 'textarea',
					'instructions' => 'Blurb Title',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '65',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 2,
					'new_lines' => 'br',
				),
				array(
					'key' => 'field_5ec49n583n830jd2',
					'label' => 'Blurb Title Tag',
					'name' => 'blurb_title_tag',
					'type' => 'button_group',
					'instructions' => 'Choose a blurb title Tag',
					'required' => 0,
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_5c4219499a51e',
								'operator' => '!=empty',
							),
						),
					),
					'wrapper' => array(
						'width' => '35',
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
					'default_value' => 'h3',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
				array(
					'key' => 'field_5c4219629a51f',
					'label' => 'Content',
					'name' => 'blurb_content',
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
					'toolbar' => 'basic',
					'media_upload' => 0,
					'delay' => 0,
				),
				array(
					'key' => 'field_5c4219799a520',
					'label' => 'Button',
					'name' => 'blurb_button',
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
				array(
					'key' => 'field_5df7c89b866c8',
					'label' => 'Background Color',
					'name' => 'blurb_background_color',
					'type' => 'color_picker',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
				),
			),
		),
	),
	'design_tab' => array(
		array(
			'key' => 'field_605b1234jo2412fsekj1928',
			'label' => 'Blurb Content Layout Centered',
			'name' => 'blurb_content_layout_centered',
			'type' => 'true_false',
			'instructions' => 'Choose if the blurb content should be centered.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => 'Centers Blurb Content',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_605b1234jo289134urjii211',
			'label' => 'Blurb Content Box Shadow',
			'name' => 'blurb_box_shadow',
			'type' => 'true_false',
			'instructions' => 'Choose if the blurb cards should have a box shadow border.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => 'Adds Box Shadow to Blurb Cards',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5df7b2a7634a2',
			'label' => 'Icon Position',
			'name' => 'blurb_icon_position',
			'type' => 'button_group',
			'instructions' => 'Choose the position of the Icon.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => 'Top',
				'left' => 'Left',
				'inline' => 'Inline',
			),
			'allow_null' => 0,
			'default_value' => 'top',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5ajt640dk2l023xhe0372x0',
			'label' => 'Blurbs Per View - Small',
			'name' => 'blurbs_per_view_sm',
			'type' => 'number',
			'instructions' => 'Number of blurbs to show on small screens (mobile phones)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
					'width' => '25',
					'class' => '',
					'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Blurbs Per View',
			'prepend' => '',
			'append' => 'blurb(s)',
			'min' => 1,
			'max' => 6,
			'step' => 1,
		),
		array(
			'key' => 'field_5plsnh387sn2k3xhe0372x0',
			'label' => 'Blurbs Per View - Medium',
			'name' => 'blurbs_per_view_md',
			'type' => 'number',
			'instructions' => 'Number of blurbs to show on medium screens (tablet)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Blurbs Per View',
			'prepend' => '',
			'append' => 'blurb(s)',
			'min' => 1,
			'max' => 6,
			'step' => 1,
		),
		array(
			'key' => 'field_8sdkj3xm093ld3xhe0372x0',
			'label' => 'Blurbs Per View - Large',
			'name' => 'blurbs_per_view_lg',
			'type' => 'number',
			'instructions' => 'Number of blurbs to show on large screens (desktop)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Blurbs Per View',
			'prepend' => '',
			'append' => 'blurb(s)',
			'min' => 1,
			'max' => 6,
			'step' => 1,
		),
		array(
			'key' => 'field_542iruyx9z29d3xhe0372x0',
			'label' => 'Blurbs Per View - XLarge',
			'name' => 'blurbs_per_view_xl',
			'type' => 'number',
			'instructions' => 'Number of blurbs to show on Xlarge screens (desktop xl)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Blurbs Per View',
			'prepend' => '',
			'append' => 'blurb(s)',
			'min' => 1,
			'max' => 6,
			'step' => 1,
		),
	),
);