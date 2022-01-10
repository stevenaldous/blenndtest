<?php
declare( strict_types = 1 );
namespace App\Setup;

class Body {

	/**
	 * Initialization
	 * This method should be run from functions.php
	 */
	public static function init() {
		add_action( 'wp_body_open', [ __CLASS__, 'wp_body_open' ] );
		add_filter( 'body_class', [ __CLASS__, 'body_class' ], 10, 2 );
	}

	/**
	 * WP Body Open
	 * Adds scripts and optional code to the beginning of the body tag
	 */
	public static function wp_body_open() {
		// Global options body scrips
		the_field( 'global_body_open_scripts', 'options' );

		// Per page body scrips
		the_field( 'page_body_open_scripts' );

		// ADA Skip to main content link
		echo '<a class="sr-only skip-to-link" href="#main">Skip to Main Content</a>';
	}

	/**
	 * Body Class
	 * Adds custom classes to the body tag
	 */
	public static function body_class( array $classes, array $class ) {
		if ( 'fixed' === get_theme_option( 'header_positioning_type' ) ) {
			$classes[] = 'fixed-header';
		}
		if ( is_single() ) {
			$template = ( get_field('blog_single_template', 'options') ?? 'one' ) ?: 'one';
			$classes[] = 'single--' . $template;
		}

		return $classes;
	}
}
