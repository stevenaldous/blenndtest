<?php

return array(
	'key' => 'group_team',
	'title' => 'Team',
	'fields' => array(
		array(
			'key' => 'field_2x3nfb40395746n',
			'label' => 'Heading Layout Columns',
			'name' => 'heading_layout_columns',
			'type' => 'true_false',
			'instructions' => 'Choose the Heading Layout.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '51',
				'class' => '',
				'id' => '',
			),
			'message' => 'Show Heading as 2 columns',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_6064fe42b8190',
			'label' => 'Heading Alignment',
			'name' => 'heading_alignment',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_2x3nfb40395746n',
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
			'key' => 'field_48u9hirwebgue',
			'label' => 'Teams Source',
			'name' => 'team_posts_source',
			'type' => 'button_group',
			'instructions' => 'Choose where the Teams get pulled from, Choosing Wordpress will run a normal Wordpress Query with your chosen options. Choosing Manual Picker will give you an option to manually choose which Teams to show. To add a team to the system, visit the Teams Section on the menu.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'wp_query' => 'Wordpress',
				'post_picker' => 'Manual Picker',
			),
			'allow_null' => 0,
			'default_value' => 'wp_query',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_93eruwibfdg9r',
			'label' => 'Number of Teams',
			'name' => 'team_posts_per_page',
			'type' => 'number',
			'instructions' => 'Optional. The number of teams to show. If left blank, it defaults to Wordpress settings.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_48u9hirwebgue',
						'operator' => '==',
						'value' => 'wp_query',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Posts Per Page (Optional)',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => 1,
		),
		array(
			'key' => 'field_3984jeirngue',
			'label' => 'Teams',
			'name' => 'team_post_picker',
			'type' => 'relationship',
			'instructions' => 'Choose which teams to show.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_48u9hirwebgue',
						'operator' => '==',
						'value' => 'post_picker',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'team',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => '',
			'max' => '',
			'return_format' => 'id',
		),
		array(
			'key' => 'field_huiyg67y8uhigy',
			'label' => 'Carousel',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
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
			'key' => 'field_u8hybg7huhu34',
			'label' => 'Show Navigation Arrows',
			'name' => 'team_carousel_show_navigation',
			'type' => 'true_false',
			'instructions' => 'Whether to show the navigation arrows on the carousel',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25.5',
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
			'key' => 'field_jiufsh9eiowirf',
			'label' => 'Show Pagination Dots',
			'name' => 'team_carousel_show_pagination',
			'type' => 'true_false',
			'instructions' => 'Whether to show the pagination dots on the carousel',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25.5',
				'class' => '',
				'id' => '',
			),
			'message' => 'Show Dots',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_3498n3vnsbvadqrey',
			'label' => 'Swiper Controls Layout',
			'name' => 'team_swiper_controls_layout',
			'type' => 'button_group',
			'instructions' => 'Choose the Layout of the swiper controls',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '49',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'pagination-navigation' => 'Pagination <-> Navigation',
				'navigation-pagination' => 'Navigation <-> Pagination',
			),
			'allow_null' => 0,
			'default_value' => 'pagination-navigation',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_hubg7h8unbiuho',
			'label' => 'Autoplay',
			'name' => 'team_carousel_autoplay',
			'type' => 'true_false',
			'instructions' => 'Allow the carousel to loop back to the beginning.',
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
			'key' => 'field_23n984y24y2435',
			'label' => 'Autoplay Delay',
			'name' => 'team_carousel_autoplay_delay',
			'type' => 'number',
			'instructions' => 'Delay (ms) between slides auto changing.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_hubg7h8unbiuho',
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
			'step' => 100,
		),
		array(
			'key' => 'field_8u9iuhbhrewi',
			'label' => 'Loop',
			'name' => 'team_carousel_loop',
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
			'key' => 'field_u8hybg7h8ijj',
			'label' => 'Speed',
			'name' => 'team_carousel_speed',
			'type' => 'number',
			'instructions' => 'Speed at which the carousel slides',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '49',
				'class' => '',
				'id' => '',
			),
			'default_value' => 300,
			'placeholder' => 300,
			'prepend' => '',
			'append' => 'milliseconds',
			'min' => '',
			'max' => '',
			'step' => 50,
		),
		array(
			'key' => 'field_ui9uhyg7huhnji',
			'label' => 'Sorting',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_48u9hirwebgue',
						'operator' => '==',
						'value' => 'wp_query',
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
			'key' => 'field_i9u8hyg78uijbgyhu',
			'label' => 'Order',
			'name' => 'team_sort_order',
			'type' => 'radio',
			'instructions' => 'ASC - order from lowest to highest.
			DESC - order from highest to lowest.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'ASC' => 'ASC',
				'DESC' => 'DESC',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => 'DESC',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
		array(
			'key' => 'field_jhugy7y8hubh',
			'label' => 'Order By',
			'name' => 'team_sort_orderby',
			'type' => 'select',
			'instructions' => 'The Team data to sort by',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'title' => 'Title',
				'date' => 'Date',
				'rand' => 'Random',
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
			'key' => 'field_6064e3a73c120',
			'label' => 'Show Bio Type',
			'name' => 'team_show_bio_type',
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
				'modal' => 'Popup Modal',
				'page' => 'Full Page',
			),
			'allow_null' => 0,
			'default_value' => 'modal',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5f5fe9fd37d17',
			'label' => 'Layout',
			'name' => 'team_layout',
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
				'list' => 'List',
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_837gsif9g42ht',
			'label' => 'Cards Per View - Small',
			'name' => 'team_cards_per_view_sm',
			'type' => 'number',
			'instructions' => 'Number of cards to show on small screens (mobile phones)',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'grid',
					),
				),
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'carousel',
					),
				),
			),
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
			'step' => 0.1,
		),
		array(
			'key' => 'field_438778gvnhpu096',
			'label' => 'Cards Per View - Medium',
			'name' => 'team_cards_per_view_md',
			'type' => 'number',
			'instructions' => 'Number of cards to show on medium screens (tablet)',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'grid',
					),
				),
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'carousel',
					),
				),
			),
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
			'step' => 0.1,
		),
		array(
			'key' => 'field_3u8jhdj3g873bs',
			'label' => 'Cards Per View - Large',
			'name' => 'team_cards_per_view_lg',
			'type' => 'number',
			'instructions' => 'Number of cards to show on large screens (desktop)',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'grid',
					),
				),
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'carousel',
					),
				),
			),
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
			'step' => 0.1,
		),
		array(
			'key' => 'field_7ysjhj3hunsvjs23',
			'label' => 'Cards Per View - XLarge',
			'name' => 'team_cards_per_view_xl',
			'type' => 'number',
			'instructions' => 'Number of cards to show on Xlarge screens (desktop xl)',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'grid',
					),
				),
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'carousel',
					),
				),
			),
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
			'step' => 0.1,
		),
		array(
			'key' => 'field_387tjdhv2yj3d3',
			'label' => 'Show Team Images',
			'name' => 'team_show_images',
			'type' => 'true_false',
			'instructions' => 'Whether to show the Cards Image.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'grid',
					),
				),
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'carousel',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => 'Show Team Images',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_23456hdo840jk4',
			'label' => 'Team Card Image Position',
			'name' => 'team_image_position',
			'type' => 'radio',
			'instructions' => 'Choose the position of the image on the card. Top shows the image at the top of the card. Background makes the image a background of the card. Option has no effect if Show Card Image is turned off.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'grid',
					),
					array(
						'field' => 'field_387tjdhv2yj3d3',
						'operator' => '==',
						'value' => 1,
					),
				),
				array(
					array(
						'field' => 'field_5f5fe9fd37d17',
						'operator' => '==',
						'value' => 'carousel',
					),
					array(
						'field' => 'field_387tjdhv2yj3d3',
						'operator' => '==',
						'value' => 1,
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'top' => 'Top',
				'cover' => 'Background',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => 'top',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
	),
);
