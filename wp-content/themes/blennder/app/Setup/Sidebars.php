<?php
declare( strict_types = 1 );
namespace App\Setup;

class Sidebars {

	/**
	 * Initialization
	 * This method should be run from functions.php
	 */
	public static function init() {
		add_action( 'widgets_init', array( __CLASS__, 'widgets_init' ) );
		add_action( 'acf/init', array( __CLASS__, 'acf_init' ) );
	}

	public static function acf_init() {
		acf_add_local_field_group(array(
			'key' => 'group_603696887a023',
			'title' => 'Widget Links',
			'fields' => array(
				array(
					'key' => 'field_234e5wrtdyfgh',
					'label' => 'Orientation',
					'name' => 'orientation',
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
						'vertical' => 'Vertical',
						'horizontal' => 'Horizontal',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => 'vertical',
					'layout' => 'horizontal',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				array(
					'key' => 'field_432teyrjftfsgd',
					'label' => 'Position',
					'name' => 'position',
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
						'start' => 'Left',
						'center' => 'Center',
						'end' => 'Right',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'default_value' => 'vertical',
					'layout' => 'horizontal',
					'return_format' => 'value',
					'save_other_choice' => 0,
				),
				array(
					'key' => 'field_6036969c8382e',
					'label' => 'Links',
					'name' => 'items',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => '',
					'min' => 0,
					'max' => 0,
					'layout' => 'table',
					'button_label' => '',
					'sub_fields' => array(
						array(
							'key' => 'field_603696b096d2e',
							'label' => 'Link',
							'name' => 'item',
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
			),
			'location' => array(
				array(
					array(
						'param' => 'widget',
						'operator' => '==',
						'value' => 'links',
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

		acf_add_local_field_group(array(
			'key' => 'group_6036b93ce2e69',
			'title' => 'Widget Form',
			'fields' => array(
				array(
					'key' => 'field_6036b9448f558',
					'label' => 'Form',
					'name' => 'form',
					'type' => 'forms',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'id',
					'allow_null' => 0,
					'multiple' => 0,
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'widget',
						'operator' => '==',
						'value' => 'form',
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

	}


	public static function widgets_init() {

		$args = array(
			'id'            => 'footer',
			'class'         => 'contact-information',
			'name'          => 'Footer Area %1$s',
			'before_title'  => '<h2 class="footer__menu-header" tabindex=0>',
			'after_title'   => '</h2>',
			'before_widget' => '<div id="%1$s">',
			'after_widget'  => '</div>',
		);
		register_sidebars( 4, $args );

		register_widget( '\app\Setup\Widgets\Form' );
		register_widget( '\app\Setup\Widgets\Links' );

	}
}
