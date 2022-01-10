<?php
declare( strict_types = 1 );
namespace App\Setup;

class Scripts
{
	public static function enqueue()
	{
		add_action('wp_enqueue_scripts', [__CLASS__, 'enqueue_main_stylesheet']);
		add_action('wp_enqueue_scripts', [__CLASS__, 'enqueue_main_script']);
	}

	public static function enqueue_main_stylesheet()
	{
		// load active theme stylesheet
		wp_enqueue_style('main', get_stylesheet_directory_uri().'/dist/css/style.css', [ 'wp-mediaelement' ], THEME_VERSION );
	}

	public static function enqueue_main_script()
	{
		/**
		 * Must be loaded through the footer
		 */
		wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/dist/js/scripts.js', [ 'wp-mediaelement' ], THEME_VERSION, true );
	}
}
