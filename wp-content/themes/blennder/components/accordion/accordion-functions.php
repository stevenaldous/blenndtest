<?php
declare( strict_types = 1 );

/**
 * return the accordion items
 */
function accordion_setup() {
	$layout = get_has_field( 'accordion_type', 'full' );
	$columns = ( $layout === 'halves' ) ? 2 : 1;
	$items = get_has_field( 'accordion_items', [] );
	$max_per_column = intval( ceil( count( $items ) / $columns ) );
	return array_chunk( $items, $max_per_column );
}

/**
 * echos the accordion element attributes.
 */
function accordion_attr() {
	$attr = [ 'class' => [ 'card', 'accordion__card' ] ];

	if ( has_field( 'accordion_box_shadow' ) ) {
		$attr['class'][] = 'shadow';
	}

	html_atts( $attr );
}

/**
 * echos the accordion header element attributes.
 */
function accordion_header_attr( array $attr = [] ) {
	if ( empty( $attr ) ) return;

	html_atts([
		'id' => sprintf( 'accordion-heading-%s-%s',
			$attr['id'],
			$attr['count']
		),
		'class' => [ 'card-header' ],
	]);
}

/**
 * echos the accordion button element attributes.
 */
function accordion_button_attr( array $attr = [] ) {
	if ( empty( $attr ) ) return;

	html_atts([
		'href' => '#',
		'class' => [
			'accordion__btn',
			'btn',
			'btn-' . get_has_field( 'component_color_theme', 'default' ),
			'btn-block',
			$attr['count'] === 0 ? '' : 'collapsed',
		],
		'data-toggle' => 'collapse',
		'data-target' => sprintf('#accordion-collapse-%s-%s',
			$attr['id'],
			$attr['count']
		),
		'aria-expanded' => 'true',
		'aria-controls' => sprintf('#accordion-collapse-%s-%s',
			$attr['id'],
			$attr['count']
		),
	]);
}

/**
 * echos the accordion content element attributes.
 */
function accordion_content_attr( array $attr = [] ) {
	if ( empty( $attr ) ) return;

	html_atts([
		'id' => sprintf( 'accordion-collapse-%s-%s',
			$attr['id'],
			$attr['count']
		),
		'class' => [ $attr['count'] === 0 ? 'collapse show' : 'collapse' ],
		'data-parent' => sprintf('#accordion-%s',
			$attr['parent']
		),
		'aria-labelledby' => sprintf('#accordion-heading-%s-%s',
			$attr['id'],
			$attr['count']
		),
	]);

}

/*
* echo accordion heading alignment classes
*/
function accordion_heading_alignment() {
	if ( get_has_field( 'heading_layout_columns', false ) ) return;

	$align = get_has_field( 'heading_alignment', 'left' );
	if ( has_field('heading_alignment') ) {
		echo 'text-' . $align . ' justify-content-' . _align_to_flex( $align );
	}

}

/*
* echo accordion heading column classes
*/
function accordion_heading_column() {
	$atts = [ 'class' => 'col' ];
	if ( get_has_field('accordion_header_layout', 'top' ) === 'top' ){
		if ( get_has_field('heading_layout_columns', false ) ){
			$atts = [ 'class' => 'col-lg-6'];
		}else {
			$atts = [ 'class' => [ 'col-lg-7', 'col-xl-6' ] ];
		}
	}

	html_atts($atts);
}


/*
* echo accordion heading layout classes
*/
function accordion_layout_column( $side ) {
	$attr = [];
	$header_layout = get_has_field( 'accordion_header_layout', 'top' );

	if($side === 'left'){
		$attr['class'] = ['mb-3', 'mb-md-4'];
		$attr['class'][] = ( $header_layout === 'left' ) ? 'col-lg-5' : 'col-12';
	}elseif($side === 'right') {
		$attr['class'] = ( $header_layout === 'left' ) ? 'col-lg-7' : 'col-12';
	}

	if( 'right' === $side && 'halves' === get_has_field( 'accordion_type', 'full' ) ) {
		$attr[ 'class' ] = 'col-6';
	}

	html_atts($attr);
}
