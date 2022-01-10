<?php
declare( strict_types = 1 );
namespace App\Setup;

class ACF
{
	/**
	 * Initialization
	 * This method should be run from functions.php
	 */
	public static function init()
	{
		add_action( 'admin_notices', [__CLASS__, 'admin_notices' ] );
		add_action( 'acf/init', [__CLASS__, 'google_api_key'] );
		add_action( 'acf/input/admin_footer', [__CLASS__, 'acf_color_picker_options'] );
		add_action( 'acf/input/admin_enqueue_scripts', [__CLASS__, 'enqueue_admin_assets'] );
	}

	public static function show_acf_admin() {
		return current_user_can( 'update_core' );
	}

	public static function admin_notices() {
		if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
			echo '<div class="notice notice-error"><p>Warning: The Advanced Custom Fields PRO plugin is required for this theme.</p></div>';
		}
	}



	/**
	 * Load the ACF Admin Stylesheet and Script file
	 */
	public static function enqueue_admin_assets() {
		wp_register_script( 'blennder-acf-admin', trailingslashit(get_template_directory_uri()) . 'assets/admin/js/acf.js', [ 'jquery' ], 1.0 );
		wp_register_style( 'blennder-acf-admin', trailingslashit(get_template_directory_uri()) . 'assets/admin/css/acf.css', [], 1.0 );

		wp_enqueue_script( 'blennder-acf-admin' );
		wp_enqueue_style( 'blennder-acf-admin' );
	}

	/**
	 * Use the inputted Google maps API Key for ACF
	 */
	public static function google_api_key() {
		if(get_field('google_maps_api_key', 'options')) {
			acf_update_setting('google_api_key', get_field('google_maps_api_key', 'options'));
		}
	}


	public static function acf_color_picker_options() {
		$theme_json = get_stylesheet_directory() . '/theme.json';
		$theme_json = file_get_contents( $theme_json );
		$theme_json = json_decode( $theme_json );
		$palette = [];
		foreach( $theme_json->settings->color->palette as $color ) {
			$color = $color->color ?? null;
			if( $color ) {
				$palette[] = $color;
			}
		}
		$palette = array_values( array_unique( $palette ) );
	?>
		<script type="text/javascript">
			(function($) {
				// JS here
				acf.add_filter('color_picker_args', function( args, $field ){

					// do something to args
					args.palettes = <?php echo json_encode($palette); ?>;

					// return
					return args;

				});

			})(jQuery);
		</script>
	<?php

	}

}
