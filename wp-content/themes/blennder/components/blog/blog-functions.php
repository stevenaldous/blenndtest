<?php
declare( strict_types = 1 );

function blog_row() {
	$attr = [ 'class' => [ 'align-items-center' ] ];

	if ( 'title-left' === get_has_field( 'blog_cards_carousel_layout', 'title-top' ) ) {
		$attr['class'][] = 'no-gutters';
	}
	return $attr;
}

function blog_query() {
	$args = component_get_wp_query_args( get_has_field( 'acf_fc_layout', '' ) );
	return new \WP_Query( $args );
}

/*
* echo blog carousel attributes
*/
function blog_carousel_attr() {
	$id = uniqid();
	$pagination_class = get_has_field( 'blog_carousel_show_pagination', true ) ? 'swiper--pagination-enabled' : 'swiper--pagination-disabled';
	$nav_class = get_has_field( 'blog_carousel_show_navigation', true ) ? 'swiper--navigation-enabled' : 'swiper--navigation-disabled';
	$attr = [
		'id'    => 'blog__slider-'.$id,
		'class' => [
			'swiper',
			'blog__slider-wrapper',
			'container-fluid' === get_has_field( 'container', 'container' ) ? 'blog__slider--full-width' : 'blog__slider--contained',
			$nav_class,
			$pagination_class
		]
	];
	html_atts( $attr );
}

/*
* echo blog card attributes
*/
function blog_attr( ) {
	global $post;

	$attr = [
		'id' => 'blog-card-' . get_the_ID(),
		'class' => [ 'card', 'blog-card' ],
	];
	if( get_has_field( 'blog_show_featured_image', true ) ) {
		$img_pos = get_has_field( 'blog_cards_image_position', '' );
		// Add a modifier class to let the card know it has an image
		$attr['class'][] = 'card--has-img';
		// Add a modifier class specifying which image position styles to use
		$attr['class'][] = 'card--img-' . $img_pos;

		if ( $img_pos === 'cover' ) {
			$attr['style'] = [ 'background-image: url('. get_the_post_thumbnail_url($post->ID, 'blog_card' ) .');' ];
		}
	}
	html_atts( $attr );
}
