<?php
/**
 * Team Post Type
 *
 * @author  Blennd Ninjas <ninjas@blennd.com>
 * @license All Rights Reserved https://blennd.com/license.html
 */
declare( strict_types = 1 );
namespace App\PostTypes;

class Team extends AbstractPostType
{
	/**
	 * Post Type Plural Title
	 *
	 * @var string
	 */
	protected $plural_title = 'Team';

	/**
	 * Post Type Args
	 *
	 * @var array
	 */
	protected $args = [
		'menu_icon' => 'dashicons-businessman',
		'supports'  => [ 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes' ],
	];

	public function init() {
		add_filter( 'manage_team_posts_columns', [__CLASS__, 'team_columns']);
		add_filter( 'manage_team_posts_custom_column', [__CLASS__, 'team_custom_column']);

		add_action('rest_api_init', [__CLASS__, 'blennd_register_team_rest_route']);
	}

	/**
	 * @function 		Blennd Register Team Rest Route
	 * @hook 			rest_api_init
	 * @description 	Register a Rest URL for the front end AJAX to hook into
	 * @callback 		team_get_member
	 **/
	public static function blennd_register_team_rest_route() {
		register_rest_route( 'team/v1', '/team_get_member', array(
			'methods' => 'GET',
			'callback' => [__CLASS__, 'blennd_team_get_member'],
			'permission_callback' => '__return_true',
		));
	}

	/**
	 * @function 		Blennd AJAX Get Team Member
	 * @description 	Callback function to get the bond data and return it back to the front end
	 **/
	public static function blennd_team_get_member( $r ) {

		if( $r['id'] ) {
			$data = [];
			$data['params'] = $r->get_params();
			$data['post_title'] = get_the_title($r['id']);
			// Escape html in the content so we dont lose the p tags in the json formatting
			$data['post_content'] = esc_html(apply_filters('the_content', get_the_content(null, false, $r['id'])));
			$data['post_thumbnail'] = get_the_post_thumbnail_url($r['id'], 'blog_card');
			$data['post_meta'] = [
				'linkedin' => get_field('team_linkedin', $r['id']),
				'position' => get_field('team_position_title', $r['id']),
			];

			wp_send_json($data);
		}else {
			wp_send_json_error(null, 500);
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
		acf_add_local_field_group( array(
			'key' => 'group_5mx30x4u83oe0x4',
			'title' => 'Team Member',
			'fields' => array(
				array(
					'key' => 'field_53x0mx3unvi449',
					'label' => 'Position Title',
					'name' => 'team_position_title',
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
					'key' => 'field_6064da6151ac2',
					'label' => 'Linkedin',
					'name' => 'team_linkedin',
					'type' => 'url',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'https://linkedin.com/',
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'team',
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

	public static function team_columns( $columns ) {
		$columns = [
			'cb'       => '<input type="checkbox" />',
			'title'    => 'Title',
			'photo'    => 'Photo',
			'position' => 'Position',
			'linkedin' => 'Linkedin',
		];
		return $columns;
	}

	public static function team_custom_column($column)
	{
		if ( $column === 'photo' )	{
			the_post_thumbnail([50,50]);
		} else if ( $column === 'position' ) {
			the_field( 'team_position_title' );
		} else if ( $column === 'linkedin' ) {
			if( get_field( 'team_linkedin' ) ){
				echo '<a href="'.get_field( 'team_linkedin' ).'">'.get_field( 'team_linkedin' ).'</a>';
			}
		}
	}

}
