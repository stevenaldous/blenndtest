<?php
declare( strict_types = 1 );
namespace App\Setup;

class Shortcodes {

	public static function init() {
		add_shortcode( 'social_links', [ __CLASS__, 'social_links_shortcode' ] );
	}

	/**
	 * Shortcode - Social Links
	 */
	public static function social_links_shortcode( $atts = [] ) {
		ob_start();
		social_media_icons();
		return ob_get_clean();
	}
}
