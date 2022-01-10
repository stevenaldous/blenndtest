<?php
declare( strict_types = 1 );
namespace App\Gutenberg;

/**
 * Register class.
 *
 * @category Gutenberg
 */
class Register {

	/**
	 * Register the components as an ACF blocks.
	 *
	 * @since 0.9.0
	 */
	public function register() {
		$dir = get_stylesheet_directory() . '/components';
		$dirs = array_filter( glob( "$dir/*" ), 'is_dir');
		foreach( $dirs as $key => $dir ) {
			$path = pathinfo( $dir );
			$block = $path[ 'basename' ] ?? '';
			$fields = $this->get_block_acf( $block );
			$this->register_acf_block( $fields );
		}
	}


	/**
	 * Register the component as an ACF block
	 *
	 * @since 0.9.0
	 *
	 * @see https://www.advancedcustomfields.com/resources/acf_register_block_type/
	 */
	public function register_acf_block( $fields ) {
		if( ! isset( $fields->name ) ) {
			return;
		}

		$block = $fields->name;

		acf_register_block_type( [
			'name'              => $fields->name,
			'title'             => $fields->label,
			'description'       => $fields->acf[ 'description' ] ?? null,
			'render_callback'   => [ $this, 'render_callback' ],
			'category'          => 'components',
			'icon'              => $fields->acf[ 'icon' ] ?? null,
			'keywords'          => $fields->acf[ 'keywords' ] ?? null,
			'mode'              => 'preview',
			'example'           => $fields->acf[ 'example' ] ?? null,
			'supports'          => $fields->acf[ 'supports' ] ?? [ 'align' => false, ],
		]);

		acf_add_local_field_group(array(
			'key' => $fields->acf[ 'key' ],
			'title' => $fields->acf[ 'title' ],
			'fields' => $fields->acf[ 'fields' ],
			'location' => array(
				array(
					array(
						'param' => 'block',
						'operator' => '==',
						'value' => "acf/$block",
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


	/**
	 * Include component as ACF block
	 *
	 * @since 0.9.0
	 *
	 * @param array $block_attributes The ACF block attributes.
	 */
	public function render_callback( array $block_attributes ) {

		// `get_fields()` returns the ACF block fields
		// not the fields for the page
		$fields = get_fields();
		if( ! $fields ) {
			return;
		}
		$fields = component_remove_empty_fields( $fields );

		if( ! isset( $fields[ 'acf_fc_layout' ] ) ) {
			$fields[ 'acf_fc_layout' ] = str_replace( 'acf/', '', $block_attributes[ 'name' ] );
		}

		if( ! empty( $block_attributes[ 'className' ] ) ) {
			$fields[ 'className' ] = $block_attributes[ 'className' ];
		}

		$name = $fields[ 'acf_fc_layout' ];

		$func_file = component_directory( $name ) . "{$name}-functions.php";
		if( file_exists( $func_file ) ) {
			include_once $func_file;
		}

		$default = [];
		if( $json = component_json( $name ) ) {
			$default = (array) $json->default_fields;
			$fields = array_merge( $default, $fields );
		}

		$GLOBALS[ 'fields' ] = $fields;
		$template = component_block_template( $fields );
		if( file_exists( $template ) ) {
			include $template;
		}
		if( is_admin() ) {
			get_template_part( 'template-parts/admin/event' );
		}
		unset( $GLOBALS[ 'fields' ] );
	}



	protected function get_block_acf( string $block ) {
		$fileName = component_directory() . "$block/$block-acf.php";
		if( file_exists( $fileName ) ) {
			$acf = new \App\Gutenberg\Fields( $fileName );
			return $acf;
		}
	}

}
