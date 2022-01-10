<?php
/**
 * Global Components Post Type
 *
 * @author  Blennd Ninjas <ninjas@blennd.com>
 * @license All Rights Reserved https://blennd.com/license.html
 */
declare( strict_types = 1 );
namespace App\PostTypes;

class GlobalComponents extends AbstractPostType {

	/**
	 * @var string Custom post type slug
	 */
	protected $slug = 'global-components';

	/**
	 * Post Type Plural Title
	 *
	 * @var string
	 */
	protected $plural_title = 'Global Components';

	/**
	 * Post Type Args
	 *
	 * @var array
	 */
	protected $args = [
		'menu_position' => 2,
		'menu_icon'     => 'dashicons-admin-site-alt3',
		'supports'      => [
			'title',
			'editor',
			'excerpt',
			'thumbnail',
			'custom-fields',
			'page-attributes',
		],
	];

	/**
	 * Add action to add_meta_boxes hook
	 */
	public function init() {
		add_action( 'add_meta_boxes', [ $this, 'remove_wp_seo_meta_box' ], 100 );
	}

	/**
	 * Remove the wpseo meta box from the global-components custom post type.
	 */
	public function remove_wp_seo_meta_box() {
		remove_meta_box( 'wpseo_meta', 'global-components', 'normal' );
	}
}
