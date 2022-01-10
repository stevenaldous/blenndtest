<?php
/**
 * Testimonial Post Type
 *
 * @author  Blennd Ninjas <ninjas@blennd.com>
 * @license All Rights Reserved https://blennd.com/license.html
 */
declare( strict_types = 1 );
namespace App\PostTypes;

class Testimonial extends AbstractPostType
{

	/**
	 * Post Type Args
	 *
	 * @var string
	 */
	protected $args = [
		'menu_icon'           => 'dashicons-star-filled',
		'supports'            => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
		'has_archive'         => false,
		'exclude_from_search' => true,
		'rewrite'             => false,
	];

	/**
	 * Post Type Taxonomies
	 *
	 * @var array
	 */
	protected $taxonomies = [
		'testimonial-category' => []
	];

	/**
	 * Init
	 *
	 * @since 0.7.2
	 *
	 * @return null
	 */
	public function init() {
		add_filter( 'manage_testimonial_posts_columns', [$this, 'testimonial_columns']);
		add_filter( 'manage_testimonial_posts_custom_column', [$this, 'testimonial_custom_columns']);
	}

	public function testimonial_columns( $columns ) {
		$columns = [
			'cb'       => '<input type="checkbox" />',
			'title'    => 'Title',
			'featured' => 'Image',
			'reviewer' => 'Reviewer',
			'stars'    => 'Stars',
			'date'     => 'Date',
		];
		return $columns;
	}

	public function testimonial_custom_columns($column)
	{
		if($column == 'featured')
		{
			the_post_thumbnail([75,75]);
		}
		else if($column == 'stars')
		{
			for ($x = 1; $x <= get_field('testimonial_stars'); $x++){
				echo '&starf;';
			}
		}
		else if($column == 'reviewer')
		{
			the_field('testimonial_author');
		}
	}


	/**
	 * Add Advanced Custom Field Local Group
	 *
	 * @since 0.7.4
	 *
	 * @return null
	 */
	public function acf_add_local_field_group()
	{
		acf_add_local_field_group(array(
			'key' => 'group_5bce5b6537c65',
			'title' => 'Testimonial',
			'fields' => array(
				array(
					'key' => 'field_5bce5c3cf5dae',
					'label' => 'Testimonial - Stars',
					'name' => 'testimonial_stars',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						1 => '1',
						2 => '2',
						3 => '3',
						4 => '4',
						5 => '5',
					),
					'default_value' => array(
						0 => 5,
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'ajax' => 0,
					'return_format' => 'value',
					'placeholder' => '',
				),
				array(
					'key' => 'field_5bce5cc0f5db0',
					'label' => 'Testimonial - Author',
					'name' => 'testimonial_author',
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
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'testimonial',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'default',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(
				1 => 'author',
			),
			'active' => 1,
			'description' => '',
		));
	}
}
