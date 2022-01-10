<?php
declare( strict_types = 1 );
namespace App\Setup;

class About
{
	/**
	 * Initialization
	 * This method should be run from functions.php
	 */
	public static function init()
	{
		add_action( 'acf/init', [__CLASS__, 'add_about_template_fields'] );
	}

	/**
	 * Requires ACF Theme Options Page Fields
	 */
	public static function add_about_template_fields()
	{

		if( function_exists('acf_add_local_field_group') ):
			acf_add_local_field_group(array(
				'key' => 'group_60d2b1717ea77',
				'title' => 'About Us',
				'fields' => array(
					array(
						'key' => 'field_60d2b17d61e96',
						'label' => 'Text Media 1',
						'name' => '',
						'type' => 'accordion',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'open' => 0,
						'multi_expand' => 0,
						'endpoint' => 0,
					),
					array(
						'key' => 'field_60d2ce7761e9f',
						'label' => 'Subheader',
						'name' => 'text_media_1_subheader',
						'type' => 'text',
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
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_60d2b1be61e97',
						'label' => 'Header',
						'name' => 'text_media_1_header',
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
						'key' => 'field_60d2cdc961e98',
						'label' => 'Text',
						'name' => 'text_media_1_text',
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
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_60d2cdf461e99',
						'label' => 'Image',
						'name' => 'text_media_1_image',
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
						'key' => 'field_60d2ce0b61e9a',
						'label' => 'Text Media 2',
						'name' => '',
						'type' => 'accordion',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'open' => 0,
						'multi_expand' => 0,
						'endpoint' => 0,
					),
					array(
						'key' => 'field_60d2ce8461ea0',
						'label' => 'Subheader',
						'name' => 'text_media_2_subheader',
						'type' => 'text',
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
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_60d2ce2661e9b',
						'label' => 'Header',
						'name' => 'text_media_2_header',
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
						'key' => 'field_60d2ce5461e9d',
						'label' => 'Text',
						'name' => 'text_media_2_text',
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
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_60d2ce5961e9e',
						'label' => 'Image',
						'name' => 'text_media_2_image',
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
						'key' => 'field_60d2cf0a61ea1',
						'label' => 'Blurb',
						'name' => '',
						'type' => 'accordion',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'open' => 0,
						'multi_expand' => 0,
						'endpoint' => 0,
					),
					array(
						'key' => 'field_60d2cf3261ea2',
						'label' => 'Blurbs',
						'name' => 'blurb_blurbs',
						'type' => 'repeater',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'collapsed' => 'field_60d2cf5f61ea3',
						'min' => 1,
						'max' => 4,
						'layout' => 'row',
						'button_label' => 'Add Blurb',
						'sub_fields' => array(
							array(
								'key' => 'field_49854m8309smv',
								'label' => 'Title',
								'name' => 'blurb_font_awesome_icon',
								'type' => 'text',
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
								'prepend' => 'fa-',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_60d2cf5f61ea3',
								'label' => 'Title',
								'name' => 'blurb_title',
								'type' => 'text',
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
								'prepend' => '',
								'append' => '',
								'maxlength' => '',
							),
							array(
								'key' => 'field_60d2cf6a61ea4',
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
						),
					),
					array(
						'key' => 'field_6fkj863jhvdh3',
						'label' => 'Testimonials',
						'name' => '',
						'type' => 'accordion',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'open' => 0,
						'multi_expand' => 0,
						'endpoint' => 0,
					),
					array(
						'key' => 'field_6m309uasdh37n',
						'label' => 'Background Image',
						'name' => 'testimonials_background_image',
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
						'key' => 'field_60d2d01f61ea6',
						'label' => 'Team',
						'name' => '',
						'type' => 'accordion',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'open' => 0,
						'multi_expand' => 0,
						'endpoint' => 0,
					),
					array(
						'key' => 'field_68sskb382mcn2',
						'label' => 'Subheader',
						'name' => 'team_subheader',
						'type' => 'text',
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
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_60d2d03161ea8',
						'label' => 'Header',
						'name' => 'team_header',
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
						'key' => 'field_60d2d02861ea7',
						'label' => 'CTA',
						'name' => '',
						'type' => 'accordion',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'open' => 0,
						'multi_expand' => 0,
						'endpoint' => 0,
					),
					array(
						'key' => 'field_60d2d06561ea9',
						'label' => 'Header',
						'name' => 'cta_header',
						'type' => 'text',
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
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_60d2d06e61eaa',
						'label' => 'Text',
						'name' => 'cta_text',
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
						'media_upload' => 1,
						'delay' => 0,
					),
					array(
						'key' => 'field_60d2d07b61eab',
						'label' => 'Form',
						'name' => 'cta_form',
						'type' => 'forms',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'post_object',
						'allow_null' => 1,
						'multiple' => 0,
					),
					array(
						'key' => 'field_608745876mkjs',
						'label' => 'Background Image',
						'name' => 'cta_background_image',
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
				),
				'location' => array(
					array(
						array(
							'param' => 'post_template',
							'operator' => '==',
							'value' => 'templates/template-about.php',
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
	}
}