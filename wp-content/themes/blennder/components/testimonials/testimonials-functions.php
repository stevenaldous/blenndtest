<?php
declare( strict_types = 1 );

function testimonials_query() {
	$args = component_get_wp_query_args( get_has_field( 'acf_fc_layout', 'testimonial' ), 'testimonial' );
	return new \WP_Query( $args );
}

/*
* echo testimonials carousel attributes
*/
function testimonials_carousel_attr() {
	$id = uniqid();
	$pagination_class = get_has_field( 'testimonials_carousel_show_pagination', true ) ? 'swiper--pagination-enabled' : 'swiper--pagination-disabled';
	$nav_class = get_has_field( 'testimonials_carousel_show_navigation', true ) ? 'swiper--navigation-enabled' : 'swiper--navigation-disabled';
	$attr = [
		'id'    => 'testimonials__slider-' . $id,
		'class' => [
			'testimonials__slider-wrapper',
			'swiper--controls-outside',
			$nav_class,
			$pagination_class
		]
	];
	html_atts( $attr );
}

/*
* echo testimonials card attributes
*/
function testimonials_card_attr( $card = [] ) {
	$attr = [
		'class' => [ 'card testimonial' ],
	];

	$attr['class'][] = get_has_field( 'testimonials_layout_cards', 'list' );

	$attr['class'][] = 'testimonial--' . get_has_field( 'testimonials_cards_text_align', 'left' );

	$attr['class'][] = 'testimonial--' . get_has_field( 'testimonials_card_template', 'total-centered' );

	if( get_has_field('testimonials_card_template','') === 'shadowed-boxes'){

		$attr['class'][] = 'shadow';
	}

	html_atts( $attr );
}
