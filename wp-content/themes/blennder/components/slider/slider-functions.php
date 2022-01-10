<?php
declare( strict_types = 1 );

/*
 * Echo out the slider html attributes
 */
function slider_attr() {
	$attr = [
		'id'          => 'slider-'. uniqid(),
		'class'       => [ 'slider__slider', 'swiper', 'swiper-container--'. get_has_field( 'container', 'container' ) ],
		'data-config' => component_get_carousel_config( 'slider' ),
	];
	$attr[ 'class' ][] = 'slider--background-' . get_has_field( 'slide_background_color', 'dark' );
	$attr[ 'class' ][] = 'slider--navigation-' . get_has_field( 'navigation_position', 'sides' );
	// $attr[ 'class' ][] = get_has_field( 'show_next_preview', false ) ? 'slider--preview-next' : '' ;
	$img_style = get_has_field( 'image_style', 'full' );
	$attr[ 'class' ][] = 'slider--image-' . $img_style;
	if( 'contained' === $img_style ) {
		$attr[ 'class' ][] = 'slider--image_position-' . get_has_field( 'image_position', 'left' );
		$attr[ 'class' ][] = 'slider--image_text_overlap-' . get_has_field( 'image_text_overlap', 'false' );
	}

	html_atts( $attr );
}

/*
 * Echo out the slide html attributes
 */
function slide_attr( array $slide = [] ) {
	if( empty( $slide ) ) return;

	$image = ( has_field( 'slide_background_image', $slide ) && is_array( $slide['slide_background_image'] ) ) ?  wp_get_attachment_image_url($slide['slide_background_image']['id'], 'post-thumbnail') : $slide['slide_background_image'];

	$attr = [
		'class' => [
			'swiper-slide',
			( has_field( 'slide_image_overlay', $slide ) && $slide['slide_image_overlay'] === true ) ? 'has-overlay' : '',
			( has_field( 'slide_text_position', $slide ) ) ? 'text-'.$slide['slide_text_position'] : 'text-center',
		]
	];
	$slide_style = get_has_field( 'image_style', 'full' );
	$attr[ 'class' ][] = "swiper-slide--$slide_style";
	if( 'contained' === $slide_style ) {
		$attr[ 'class' ][] = 'swiper-slide--img-' . get_has_field( 'image_position', 'full' );
	}

	$bg_color = get_has_field( 'slide_background_color', 'dark', $slide );
	$attr['class'][] = 'dark' === $bg_color ? 'text-white' : 'text-dark';

	if( get_has_field( 'slider_carousel_lazy_load', true ) ) {
		$attr['class'][] = 'swiper-lazy';
		$attr['data-background'] = $image;
	} else {
		$attr['style'] = sprintf('background-image: url(%s);', $image);
	}

	if( get_has_field( 'slide_has_secondary_image', false, $slide ) ) {
		$attr[ 'class' ][] = 'swiper-slide--has-secondary-image';
	}

	html_atts( $attr );
}

/*
 * Echo out the slide header element
 */
function slide_header( array $slide = [] ) {
	if ( ! has_field( 'slide_header', $slide ) ) return;

	$attr = [];
	if( has_field('slide_header_style', $slide) && $slide['slide_header_style'] != 'custom'){
		$attr['class'] = ' ' . $slide['slide_header_style'];
	}else if($slide['slide_header_style'] == 'custom') {
		$attr['class'] = ' ' . $slide['slide_header_custom_class'];
	}else {
		$attr['class'] = ' display-1';
	}
	$attr['data-swiper-parallax'] = '-1800';
	$attr['class'] = sanitize_text_field($attr['class']);
	$tag = ( has_field( 'slide_header_tag', $slide ) ) ? $slide['slide_header_tag'] : 'h2' ;

	the_tag( $tag, $attr, $slide['slide_header'] );
}

/*
 * Echo out the slide preheader element
 */
function slide_preheader( array $slide = [] ) {
	if ( ! has_field( 'slide_preheader', $slide ) ) return;
	$color = get_has_field( 'slide_preheader_color', 'primary', $slide );
	$attr = [
		'class' => "preheader text-$color",
		'data-swiper-parallax' => '-1000',
	];
	the_tag( 'p', $attr, $slide[ 'slide_preheader' ] );
}

function slide_col( array $slide = [], string $width = 'auto', string $order = '' ) {
	$col = 'col';
	if( get_has_field( 'slide_has_secondary_image', false, $slide ) ) {
		$col = "col-md-$width";

		if( 'last' === $order ) {
			$col .= ' mt-5 mt-md-0';
		}
		elseif( 'first' === $order ) {
			$col .= ' mb-5 mb-md-0';
		}
	}
	if( $order ) {
		$col .= " order-$order";
	}
	return $col;
}
