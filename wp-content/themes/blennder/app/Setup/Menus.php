<?php
declare( strict_types = 1 );
namespace App\Setup;

class Menus
{
	/**
	 * Initialization
	 * This method should be run from functions.php
	 */
	public static function init()
	{
		add_action( 'init', [__CLASS__, 'register'] );
		add_action( 'acf/init', [ __CLASS__, 'acf_init' ] );
		add_filter( 'nav_menu_css_class', [__CLASS__, 'footer_legal_menu_classes'], 1, 3);
	}

	/**
	 * Registers menus within our theme
	 */
	public static function register()
	{
		register_nav_menus( [
			'preheader'    => 'Pre-Header Menu',
			'primary'      => 'Primary Menu',
			'secondary'    => 'Secondary Menu',
			'mobile'       => 'Mobile Menu',
			'utility'      => 'Utility Menu',
			'footer-menu'  => 'Footer Menu',
			'footer-legal' => 'Footer Legal',
		] );
	}


	public static function footer_legal_menu_classes($classes, $item, $args) {
		if($args->theme_location == 'footer-legal') {
			$classes[] = 'list-inline-item';
		}
		return $classes;
	}

	public static function acf_init() {

		acf_add_local_field_group(array(
			'key' => 'group_6042b28038de9',
			'title' => 'Menu Item',
			'fields' => array(
				array(
					'key' => 'field_6042b28535d7b',
					'label' => 'Image',
					'name' => 'image',
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
						'param' => 'nav_menu_item',
						'operator' => '==',
						'value' => 'location/primary',
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
}
