<?php
declare( strict_types = 1 );

function video_player_container() {
	$attr = [ 'class' => [] ];

	if( 'container-fluid' === get_has_field('container', 'container-fluid') ) {
		if( get_has_field('video_player_carousel_centered_slides', false ) ) {
			$attr['class'][] =  'px-0';
		}else {
			$attr['class'][] =  'pr-0';
			$attr['class'][] =  'padding-left-dynamic';
		}
	}

	return $attr;
}

/*
* echo testimonials carousel attributes
*/
function video_carousel_attr() {
	$id = uniqid();
	$pagination_class = get_has_field( 'video_player_carousel_show_pagination', true ) ? 'swiper--pagination-enabled' : 'swiper--pagination-disabled';
	$nav_class = get_has_field( 'video_player_carousel_show_navigation', true ) ? 'swiper--navigation-enabled' : 'swiper--navigation-disabled';
	$attr = [
		'id'    => 'video_player__slider-' . $id,
		'class' => [
			'video_player__slider-wrapper',
			'swiper--controls-outside',
			$nav_class,
			$pagination_class
		]
	];
	html_atts( $attr );
}

function video_player_classes() {
	$classes   = [ ];
	$classes[] = 'video-player--' . get_has_field( 'video_player_layout', 'single' );
	$classes[] = true === get_has_field( 'video_player_carousel_centered_slides', true ) ? 'video-player--centered' : '';
	return $classes;
}

function video_player_video_attr($video) {

	$attr = [
		'class'       => 'video-player__video-media',
		'playsinline' => true,
		'controls'    => true,
		'preload'     => 'auto',
		'width'       => '100%',
		'poster'      => wp_get_attachment_image_url($video['video_player_poster']['id'] ?? null, 'video') ?? false,
	];

	html_atts( $attr );
}
?>
