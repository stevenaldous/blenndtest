<?php
declare( strict_types = 1 );

function team_row() {
	$attr = [ 'class' => [ 'align-items-center' ] ];

	if( get_has_field( 'cards_carousel_layout', 'title-top' ) === 'title-left' ) {
		$attr['class'][] = 'no-gutters';
	}

	return $attr;
}

function team_query() {
	$args = [
		'post_type'      => 'team',
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
		'posts_per_page' => -1,
	];
	return new \WP_Query( $args );
}

/*
* echo team carousel attributes
*/
function team_carousel_attr() {
	$id = uniqid();
	$pagination_class = ( get_has_field('team_carousel_show_pagination', false ) ) ? 'swiper--pagination-enabled' : 'swiper--pagination-disabled';
	$nav_class = ( get_has_field('team_carousel_show_navigation', false ) ) ? 'swiper--navigation-enabled' : 'swiper--navigation-disabled';
	$attr = [
		'id'    => 'team__slider-'.$id,
		'class' => [
			'swiper',
			'team__slider-wrapper',
			'container-fluid' === get_has_field( 'container', 'container' ) ? 'team__slider--full-width' : 'team__slider--contained',
			$nav_class,
			$pagination_class
		]
	];
	html_atts( $attr );
}

/*
* echo team card grid attributes
*/
function team_card_attr( $card = [] ) {
	global $post;

	$attr = [
		'class' => [ 'card' ]
	];
	if( get_has_field( 'team_show_images', false ) ) {
		$img_pos = get_has_field( 'team_image_position', 'top' );
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

/*
* echo team heading alignment classes
*/
function team_heading_alignment() {
	if ( get_has_field( 'heading_layout_columns', false ) ) return;
	$align = get_has_field( 'heading_alignment', 'center' );
	echo 'text-' . $align . ' justify-content-' . _align_to_flex( $align );
}

/*
* echo team heading column classes
*/
function team_heading_column() {
	$atts = [ 'class' => [ 'col-lg-8', 'col-xl-6' ] ];

	if ( get_has_field('heading_layout_columns', false ) ){
		$atts = [ 'class' => 'col-lg-6'];
	}

	html_atts($atts);
}

/*
* echo the bio js hook class if bio type is set to modal
*/
function team_bio_type_class() {
	echo ( get_has_field( 'team_show_bio_type', 'modal' ) === 'modal' ) ? 'js-team-modal' : '';
}
