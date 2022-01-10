<?php
declare( strict_types = 1 );
namespace App\Gutenberg;

/**
 * DefaultFields class.
 *
 * @category Builder
 */
abstract class DefaultFields {

	/**
	 * @var array An array of Advanced Custom Field data.
	 *
	 * @since 0.7.0
	 */
	public $content_tab = array(
		array(
			'key' => 'field_5bdb35a44e72e',
			'label' => 'Content',
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
			'key' => 'field_508scge52vn39',
			'label' => 'Pre/Sub Header',
			'name' => 'component_sub_header',
			 'type' => 'text',
			'instructions' => 'Title to show above the Primary Header (Optional). Defaults to Parent Page if set.',
			'required' => 0,
			'conditional_logic' => 0,
				'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c646291133db',
			'label' => 'Header',
			'name' => 'component_header',
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
			'key' => 'field_5c718359438c2',
			'label' => 'Header Tag',
			'name' => 'component_header_tag',
			'type' => 'button_group',
			'instructions' => 'Choose a component Header Tag',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c646291133db',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '30',
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
			'key' => 'field_5c7183b9438c3',
			'label' => 'Header Style',
			'name' => 'component_header_style',
			'type' => 'select',
			'instructions' => 'Choose a Header Style (optional).',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c646291133db',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '25',
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
			'key' => 'field_598376dksck3u',
			'label' => 'Text',
			'name' => 'component_text',
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
			'delay' => 1,
		),
	);

	/**
	 * @var array An array of Advanced Custom Field data.
	 *
	 * @since 0.7.5
	 *
	 * phpcs:disable
	 */
	public $design_tab = array(
		array(
			'key' => 'field_5fi3o49x4cbxn',
			'label' => 'Design',
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
			'key' => 'field_5e45b5b84e677',
			'label' => 'Container',
			'name' => 'container',
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
				'container' => 'Container',
				'container-fluid' => 'Full Width',
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5e60236843a77',
			'label' => 'Color Theme',
			'name' => 'component_color_theme',
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
				'white' => 'White',
				'light' => 'Light',
				'dark' => 'Dark',
				'black' => 'Black',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => 'white',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
	);

	/**
	 * @var array An array of Advanced Custom Field data.
	 *
	 * @since 0.7.0
	 */
	public $background_tab = array(
		array(
			'key' => 'field_5bdb35994e72c',
			'label' => 'Background',
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
			'key' => 'field_5bdb3cc7d7d1b',
			'label' => 'Background Type',
			'name' => 'background_type',
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
				'color' => 'Color',
				'image' => 'Image',
				'video' => 'Video',
			),
			'allow_null' => 1,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5bdb3cc7d7d49',
			'label' => 'Color',
			'name' => 'background_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'color',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5bdb3cc7d7dcc',
			'label' => 'Image',
			'name' => 'background_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'image',
					),
					array(
						'field' => 'field_5d38800ecd388',
						'operator' => '!=',
						'value' => 1,
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'field_5bdb3cbus82ldc',
			'label' => 'Mobile Image',
			'name' => 'background_image_mobile',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'image',
					),
					array(
						'field' => 'field_5d38800ecd388',
						'operator' => '!=',
						'value' => 1,
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'field_5c61a695a44d4',
			'label' => 'Background Properties',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c619cded0b8d',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Configure your background image properties below',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5c619cded0b8d',
			'label' => 'Background Position',
			'name' => 'background_image_position',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
			'wrapper' => array(
				'width' => '33',
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
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5c619ec3dcd02',
			'label' => 'Background Attachment',
			'name' => 'background_image_attachment',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
			'wrapper' => array(
				'width' => '33.33',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'scroll' => 'Scroll',
				'fixed' => 'Fixed',
				'local' => 'Local',
			),
			'default_value' => array(
				0 => 'scroll'
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5c619de4d0b8e',
			'label' => 'Background Size',
			'name' => 'background_size',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
			'wrapper' => array(
				'width' => '33.33',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'auto' => 'Auto',
				'cover' => 'Cover',
				'contain' => 'Contain',
				'custom' => 'Custom',
			),
			'default_value' => array(
				0 => 'cover',
			),
			'allow_null' => 1,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5c619e7aa6e64',
			'label' => 'Background Custom Size',
			'name' => 'background_custom_size',
			'type' => 'text',
			'instructions' => 'Enter a Custom Background Image Size Value',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'image',
					),
					array(
						'field' => 'field_5c619de4d0b8e',
						'operator' => '==',
						'value' => 'custom',
					),
				),
			),
			'wrapper' => array(
				'width' => '66.66',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '100% 100%',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5c6573573orcejc0',
			'label' => 'Background Overlay',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5c619cded0b8d',
						'operator' => '!=empty',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Add an overlay to the background image',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5de6abe1e1381',
			'label' => 'Enable Overlay',
			'name' => 'background_enable_overlay',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'image',
					),
				),
			),
			'wrapper' => array(
				'width' => '14',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'Show',
			'ui_off_text' => 'Hide',
		),
		array(
			'key' => 'field_5de6aca2e1382',
			'label' => 'Overlay Color',
			'name' => 'background_overlay_color',
			'type' => 'color_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'image',
					),
					array(
						'field' => 'field_5de6abe1e1381',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '31',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
		),
		array(
			'key' => 'field_5de6af975348f',
			'label' => 'Overlay Opacity',
			'name' => 'background_overlay_opacity',
			'type' => 'range',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'image',
					),
					array(
						'field' => 'field_5de6abe1e1381',
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
			'default_value' => 25,
			'min' => '',
			'max' => '',
			'step' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_5de6dca35ce4c',
			'label' => 'Blend Mode',
			'name' => 'background_blend_mode',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'image',
					),
					array(
						'field' => 'field_5de6abe1e1381',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '31',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'normal' => 'Normal',
				'overlay' => 'Overlay',
				'darken' => 'Darken',
				'lighten' => 'Lighten',
				'color' => 'Color',
				'hue' => 'Hue',
				'luminosity' => 'Luminosity',
				'saturation' => 'Saturation',
				'screen' => 'Screen',
				'multiply' => 'Multiply',
				'color-burn' => 'Color Burn',
				'color-dodge' => 'Color Dodge',
				'hard-light' => 'Hard Light',
				'soft-light' => 'Soft Light',
				'difference' => 'Difference',
				'exclusion' => 'exclusion',
			),
			'default_value' => array(
				0 => 'overlay',
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5bbbc98109983',
			'label' => 'Poster',
			'name' => 'background_video_poster',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
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
			'mime_types' => '.jpg, .png',
		),
		array(
			'key' => 'field_5bbbae7d99ebb',
			'label' => 'Video Desktop mp4',
			'name' => 'background_video_desktop_mp4',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '.mp4',
		),
		array(
			'key' => 'field_5bbbaedb99ebe',
			'label' => 'Video Desktop webm',
			'name' => 'background_video_desktop_webm',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '.webm',
		),
		array(
			'key' => 'field_5bbbaea799ebc',
			'label' => 'Video Mobile mp4',
			'name' => 'background_video_mobile_mp4',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '.mp4',
		),
		array(
			'key' => 'field_5bbbaeb999ebd',
			'label' => 'Video Mobile webm',
			'name' => 'background_video_mobile_webm',
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => '.webm',
		),
		array(
			'key' => 'field_5d388bada9d86',
			'label' => 'Background Video Properties',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Enter the Background video properties below',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5d388c09a9d88',
			'label' => 'Background Video Muted',
			'name' => 'background_video_muted',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => 'Audio Muted',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5d388c4da9d8a',
			'label' => 'Background Video Loop',
			'name' => 'background_video_loop',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5bdb3cc7d7d1b',
						'operator' => '==',
						'value' => 'video',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => 'Loop Video',
			'default_value' => 1,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
	);
}
