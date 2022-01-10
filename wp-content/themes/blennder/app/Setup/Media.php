<?php
declare( strict_types = 1 );
namespace App\Setup;

class Media
{
	/**
	 * Initialization
	 * This method should be run from functions.php
	 */
	public static function init()
	{
		add_action( 'after_setup_theme', [__CLASS__, 'set_post_thumbnail_size'] );
		add_action( 'after_setup_theme', [__CLASS__, 'add_image_sizes'] );

		add_filter( 'wp_get_attachment_link', [__CLASS__, 'add_class_attachment_link'],10,1);
		add_filter( 'embed_oembed_html', [__CLASS__, 'responsive_embeds'], 10, 3 );
		add_filter( 'wp_get_attachment_image_attributes', [ __CLASS__, 'blennd_get_attachment_image_attributes' ], 10, 1 );
	}

	/**
	 * Sets default thumbnail size
	 */
	public static function set_post_thumbnail_size()
	{
		set_post_thumbnail_size( 1440, 9999 );
	}

	/**
	 * Add Custom Image Sizes
	 */
	public static function add_image_sizes()
	{
		add_image_size('blog_feed', 600, 350, true);
		add_image_size('blog_card', 420, 440, true);
		add_image_size('gallery', 500, 500, true);
		add_image_size('gallery_tall', 660, 750, true);
		add_image_size('team', 540, 450, [ 'center','top' ] );
		add_image_size('video', 1280, 768, true);
	}

	/**
	 * Add fancybox attribute to attachment link on interior dive tour pages
	 */
	public static function add_class_attachment_link($html){
		$html = str_replace('<a','<a data-fancybox="gallery"',$html);
		return $html;
	}

	/**
	 * Wrap all oEmbed objects in an embed container div for responsive.
	 */
	public static function responsive_embeds($html, $url, $attr) {
		return $html !=='' ? '<div class="embed-responsive embed-responsive-16by9">'.$html.'</div>' : '';
	}

	/**
	 * Add alt text based on the current context title if none is set in wp media.
	 * WP disabled fallback alt text in WP 4.7 siting that people should add thier own alt text for best a11y
	 *
	 * @param array   $attr       Gallery image tag attributes.
	 * @return array (maybe) filtered gallery image tag attributes.
	 */
	public static function blennd_get_attachment_image_attributes( $attr ) {
		if ( empty( $attr['alt'] ) ) {
			$attr['alt'] = get_the_title() ?? get_option( 'blogname' );
		}

		return $attr;
	}
}
