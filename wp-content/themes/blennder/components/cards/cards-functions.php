<?php
declare( strict_types = 1 );

function cards_row() {
	$attr = [ 'class' => [ 'align-items-center' ] ];

	if ( 'title-left' === get_has_field( 'cards_carousel_layout', '' ) ) {
		$attr['class'][] = 'no-gutters';
	}
	return $attr;
}

/*
* echo cards carousel attributes
*/
function cards_carousel_attr() {
	$id = uniqid();
	$pagination_class = get_has_field( 'cards_carousel_show_pagination', true ) ? 'swiper--pagination-enabled' : 'swiper--pagination-disabled';
	$nav_class = get_has_field( 'cards_carousel_show_navigation', true ) ? 'swiper--navigation-enabled' : 'swiper--navigation-disabled';
	$attr = [
		'id'    => 'cards__slider-'.$id,
		'class' => [
			'swiper',
			'cards__slider-wrapper',
			'container-fluid' === get_has_field( 'container', 'container' ) ? 'cards__slider--full-width' : 'cards__slider--contained',
			$nav_class,
			$pagination_class
		]
	];
	html_atts( $attr );
}

/*
* echo cards card grid attributes
*/
function card_attr( $card = [] ) {
	$attr = [
		'class' => [ 'card' ],
	];
	if( get_has_field( 'cards_show_images', '' ) ){
		$img_pos = get_has_field( 'cards_image_position', 'top' );
		// Add a modifier class to let the card know it has an image
		$attr['class'][] = 'card--has-img';
		// Add a modifier class specifying which image position styles to use
		$attr['class'][] = 'card--img-' . $img_pos;

		if ( $img_pos === 'cover' && has_field( 'card_image', $card ) ) {
			$attr['style'] = [ 'background-image: url('. wp_get_attachment_image_url( $card['card_image']['id'], 'blog_card' ) .');' ];
		}
	}
	// Add animation classes if animation chosen
	if( $animation = get_has_field( 'cards_animation', '' ) ) {
		$attr['data-aos'] = $animation;
	}
	html_atts( $attr );
}
