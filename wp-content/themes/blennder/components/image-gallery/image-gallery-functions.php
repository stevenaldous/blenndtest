<?php
declare( strict_types = 1 );

/*
* echo image gallery heading alignment classes
*/
function image_gallery_heading_alignment() {
	$align = get_has_field( 'heading_alignment', 'center' );
	if ( get_has_field( 'heading_layout_columns', false ) ) return;

	if ( has_field('heading_alignment') ) {
		echo 'text-' . $align . ' justify-content-' . _align_to_flex( $align );
	}

}

/*
* echo image gallery heading column classes
*/
function image_gallery_heading_column() {
	$atts = [ 'class' => [ 'col-lg-8', 'col-xl-6' ] ];

	if ( get_has_field('heading_layout_columns', false ) ){
		$atts = [ 'class' => 'col-lg-6' ];
	}

	html_atts($atts);
}

// Swiper controls atts

function gallery_nav_atts() {
	$atts = [ 'class' => [] ];

	if( get_has_field( 'navigation_position', 'sides' ) === 'sides' ) {
		$atts = [
			'class' => [
				'swiper-navigation--wrapper',
				'container',
				'swiper-navigation--wrapper-'.  get_has_field( 'navigation_position', 'sides' ) ?: 'sides'
			]
		];
	}
	echo html_atts($atts);
}


/*
 * Breakdown the array of image object arrays into an array of just IDs for the gallery shortcode.
 */
function image_gallery_ids() {
	$image_ids = [];
	if( has_field( 'image_gallery' ) ) {
		foreach( get_has_field( 'image_gallery', [] ) as $img ){
			if(is_array($img)){
				$image_ids[] = $img[ 'id' ];
			}elseif(is_int($img)){
				$image_ids[] = $img;
			}
		}
	}
	return $image_ids;
}

/*
 * Return the custom swiper config for the gallery slider layout
 */
function image_gallery_slider_config() {
	echo blennder_array_to_json([
		'slidesPerView' => 'auto',
		'centeredSlides' => true,
		'setWrapperSize' => false,
		'breakpoints' => [
			768 => [
				'slidesPerView'  => 'auto'
			],
			1020 => [
				'slidesPerView'  => 'auto'
			],
			1370 => [
				'slidesPerView'  => 'auto'
			]
		],
		'loop' => true,
		'speed' => 1200,
		'preloadImages' => false,
		'lazy' => [
			'loadPrevNext' => true,
			'loadOnTransitionStart' => true
		]
	]);
}

/*
 * Return the custom swiper config for the gallery carousel layout
 */
function image_gallery_carousel_config() {
	echo blennder_array_to_json([
		'breakpointsInverse' => true,
		'breakpoints' => [
			768 => [
				'slidesPerView' => 2
			],
			1020 => [
				'slidesPerView' => 3
			]
		]
	]);
}

/*
 * echo the controls attributes
 */
function image_gallery_controls_atts() {
	$layout = get_has_field( 'image_gallery_layout', 'carousel' );

	$atts = [
		'class' => [
			'swiper-controls',
			( $layout === 'carousel' ) ? 'swiper-controls--bottom' : null,
			( $layout === 'carousel' ) ? 'swiper-controls--' . get_has_field( 'image_gallery_swiper_controls_layout', 'pagination-navigation' ) ?: 'pagination-navigation' : null,
		]
	];
	echo html_atts($atts);
}

/*
 * echo the pagination size class
 */
function image_gallery_pagination_size() {
	if ( get_has_field( 'image_gallery_layout', 'carousel' ) === 'carousel' ) {
		echo 'swiper-pagination--sm';
	}
}
