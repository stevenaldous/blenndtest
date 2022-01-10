<?php
declare( strict_types = 1 );
namespace App\Setup;

class Support
{
	/**
	 * Initialization
	 * This method should be run from functions.php
	 */
	public static function init()
	{
		add_action( 'after_setup_theme', [__CLASS__, 'add_page_excerpt'] );
		add_action( 'after_setup_theme', [__CLASS__, 'add_title_tag_support'] );
		add_action( 'after_setup_theme', [__CLASS__, 'add_auto_feed_link_support'] );
		add_action( 'after_setup_theme', [__CLASS__, 'add_post_thumbnail_support'] );
		add_action( 'after_setup_theme', [__CLASS__, 'add_html5_support'] );
		add_action( 'after_setup_theme', [__CLASS__, 'add_post_format_support'] );
		add_action( 'after_setup_theme', [__CLASS__, 'add_custom_logo'] );
		// add_action( 'after_setup_theme', [__CLASS__, 'add_woocommerce_support']) );
		add_action( 'after_setup_theme', [__CLASS__, 'set_content_width'] );

	}

	/*
	 * Add the excerpt field to page post type.
	 */
	public static function add_page_excerpt()
	{
		add_post_type_support( 'page', 'excerpt' );
	}

	/*
	 * Lets WordPress manage the document title.
	 *
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	public static function add_title_tag_support()
	{
		add_theme_support( 'title-tag' );
	}

	/**
	 * Adds automatic feed link support
	 */
	public static function add_auto_feed_link_support()
	{
		add_theme_support( 'automatic-feed-links' );
	}

	/**
	 * Adds thumbnail support
	 */
	public static function add_post_thumbnail_support()
	{
		add_theme_support( 'post-thumbnails' );
	}

	/*
	 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
	 */
	public static function add_html5_support()
	{
		add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
		));
	}

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	public static function add_post_format_support()
	{
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		));
	}

	/**
	 * Custom Logo Support
	 *
	 * Update the width and height to match the designs logo.
	 *
	 * When selecting an image in the customizers site identity panel,
	 * if the image is larger than the defined specs, make sure to
	 * select the whole image and hit crop. If it is smaller than the
	 * defined dimensions, just hit skip cropping.
	 */
	public static function add_custom_logo()
	{
		add_theme_support( 'custom-logo', array(
			'width'       => 250,
			'height'      => 40,
			'flex-height' => true,
		));
	}

	/**
	 * Woocommerce Theme Support
	 */
	public static function add_woocommerce_support()
	{
		add_theme_support( 'woocommerce' );
	}

	/**
	 * Sets the content width variable
	 */
	public static function set_content_width()
	{
		if ( ! isset( $content_width ) ) {
			$content_width = 1200;
		}
	}

}
