<?php
declare( strict_types = 1 );
namespace App\Gutenberg;

/**
 * Animations class.
 *
 * @category Gutenberg
 */
class Animations
{
	/**
	 * Returns an array of our favorite animations.
	 *
	 * @since 0.7.0
	 *
	 * @return array Our favorite animations.
	 */
	public static function favorites()
	{
		return array(
			'fade-down' => 'Fade Down',
			'fade-left' => 'Fade Left',
			'fade-right' => 'Fade Right',
			'fade-up' => 'Fade Up',
		);
	}
}
