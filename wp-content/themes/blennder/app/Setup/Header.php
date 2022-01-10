<?php
declare( strict_types = 1 );
namespace App\Setup;

class Header {

	/**
	 * Initialization
	 * This method should be run from functions.php
	 */
	public static function init() {
		add_action( 'wp_head', [ __CLASS__, 'wp_head' ] );
	}

	/**
	 * WP Head
	 * Adds custom script to the head tag from global and page level options
	 */
	public static function wp_head() {
		// Output the custom analytics fields
		the_field( 'google_analytics', 'options' );
		the_field( 'facebook_pixel', 'options' );
		the_field( 'bing_pixel', 'options' );

		// Output the global custom header tag code
		the_field( 'global_head_scripts', 'options' );

		// Output the page custom header tag code
		the_field( 'page_head_scripts' );

		// Output Schema meta field
		$schemamarkup = get_post_meta( get_the_ID(), 'schemamarkup', true );
		if ( ! empty( $schemamarkup ) ) {
			echo $schemamarkup;
		}
	}
}
