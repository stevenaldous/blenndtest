<?php
declare( strict_types = 1 );

function text_media_row() {
	return [ 'class' => [ 'h-100' ] ];
}

/**
 * Determine if the Media Orientation is Horizontal or Vertical Layout
 */
function text_media_orientation() {
	$orientation = 'horizontal';
	$media_pos = get_has_field( 'text_media_media_position', 'right' );
	if( 'top' === $media_pos || 'bottom' === $media_pos ) {
		$orientation = 'vertical';
	}
	return $orientation;
}

/**
 * echos the media column element attributes.
 */
function text_media_media_col_attr() {
	$media_pos = get_has_field( 'text_media_media_position', 'right' );
	$media_width = get_has_field( 'text_media_media_width', '6' );
	$order = ('left' === $media_pos || 'top' === $media_pos) ? 'first' : 'last';
	$attr = [
		'data-aos' => 'fade-up',
		'class' => [
			'px-0',
			'container' === get_has_field( 'container', 'container' ) ? 'px-0' : null,
			( text_media_orientation() === 'horizontal' && $media_pos === 'left' ) ? 'pl-md-0' : null,
			( text_media_orientation() === 'horizontal' && $media_pos === 'right' ) ? 'pr-md-0' : null,
			( text_media_orientation() === 'vertical' ) ? 'px-md-0' : null,
			( 'top' === $media_pos || 'bottom' === $media_pos ) ? 'col-12' : 'col-md-' . $media_width,
			'order-md-' . $order,
		]
	];
	html_atts( $attr );
}

/**
 * echos the content column element attributes.
 */
function text_media_content_col_attr() {
	$media_pos = get_has_field( 'text_media_media_position', 'left' );
	$attr = [
		'class' => [ 'col-md', 'd-flex', 'flex-column', 'justify-content-center', 'py-4', 'py-lg-5', 'py-xl-6' ]
	];

	if( text_media_orientation() === 'horizontal' ) {
		$attr['class'][] = sprintf( 'p%1$s-md-4 p%1$s-lg-5 p%1$s-xl-6',
			'left' === $media_pos ? 'l' : 'r'
		);
	}

	if( 'container' === get_has_field( 'container', 'container' ) ) {
		if( text_media_orientation() === 'horizontal' ) {
			$attr['class'][] = 'left' === $media_pos ? 'pr-md-0' : 'pl-md-0';
		}else {
			$attr['class'][] = 'px-md-0';
		}
	}
	html_atts( $attr );
}

/**
 * echos the content element attributes.
 */
function text_media_content_attr() {
	$attr = [ 'class' => [ 'text-media__content' ] ];

	if( 'container' === get_has_field( 'container', 'container' ) ) {
		if( text_media_orientation() === 'horizontal' ) {
			$attr['class'][] = 'left' === get_has_field( 'text_media_media_position', 'left' ) ? 'padding-right-dynamic' : 'padding-left-dynamic';
		} else {
			$attr['class'][] = 'padding-right-dynamic padding-left-dynamic';
		}
	}
	html_atts( $attr );
}

/**
 * echos the media element attributes.
 */
function text_media_media_attr() {
	$media_attr = [];
	$media_attr['class'][] = 'text-media__media';
	if ( has_field( 'text_media_image' ) ) {
		$position = get_has_field( 'text_media_image_position', 'center center' );
		$size     = get_has_field( 'text_media_image_size', 'cover' );

		if ( 'custom' === $size ) {
			$size = get_has_field( 'text_media_image_custom_size', '100% 100%' );
		}

		if ( ! empty( $position ) ) {
			$media_attr['style'][] = 'background-position: ' . $position . ';';
		}
		if ( ! empty( $size ) ) {
			$media_attr['style'][] = 'background-size: ' . $size . ';';
		}
	}
	return $media_attr;
}

/*
 * echos the text media video element attributes
 */
function text_media_video_attr() {
	$attr = [
		'id'               => 'text-media__video-media',
		'playsinline'      => true,
		'autoplay'         => true,
		'muted'            => true,
		'loop'             => true,
		'poster'           => acf_url( 'text_media_video_poster' ),
	];

	html_atts( $attr );
}

/*
 * Return an image size based on the orientation for best performance
 */
function text_media_image_size() {
	if ( text_media_orientation() === 'horizontal' ) {
		return 'large';
	} elseif ( text_media_orientation() === 'vertical' ) {
		return 'post-thumbnail';
	}
}
