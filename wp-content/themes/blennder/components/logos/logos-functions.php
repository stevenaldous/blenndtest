<?php
declare( strict_types = 1 );

/*
* echo logos carousel layout attributes
*/
function logos_carousel_attr() {
	$id = uniqid();
	$pagination_class = get_has_field( 'logos_carousel_show_pagination', true ) ? 'swiper--pagination-enabled' : 'swiper--pagination-disabled';
	$nav_class = get_has_field( 'logos_carousel_show_navigation', true ) ? 'swiper--navigation-enabled' : 'swiper--navigation-disabled';
	$attr = ['id' => 'logos__slider-'.$id, 'class' => ['logos__slider-wrapper', $nav_class, $pagination_class ] ];

	html_atts( $attr );
}

/*
* echo logos heading alignment classes
*/
function logos_heading_alignment() {
	$align = get_has_field( 'heading_alignment', 'center' );
	if ( get_has_field( 'heading_layout_columns', false ) ) return;

	if ( has_field('heading_alignment') ) {
		echo 'text-' . $align . ' justify-content-' . _align_to_flex( $align );
	}

}

/*
* echo logos heading column classes
*/
function logos_heading_column() {
	$atts = [ 'class' => [ 'col-lg-8', 'col-xl-6' ] ];

	if ( get_has_field('heading_layout_columns', false ) ){
		$atts = [ 'class' => 'col-lg-6'];
	}

	html_atts($atts);
}

/*
* echo logos card attributes
*/
function logos_card_attr() {
	$card_attr = [ 'class' => [ 'card' ] ];

	if( has_field( 'logos_cards_grayscale' ) ) {
		$card_attr['class'][] = 'card--grayscale';
	}

	html_atts( $card_attr );
}

/*
* echo cards card grid attributes
*/
function logos_grid_attr() {
	$total = count( get_has_field('logos', 0) );

	$attr['class'] = [ 'card-deck' ];
	if( $style = get_has_field( 'logos_cards_style', '' ) ) {
		$attr['class'][] = 'card-deck--' . $style;
	}

	foreach( [ 'sm'=>1, 'md'=>2, 'lg'=>3, 'xl'=>3 ] as $bp => $num ){
		if( $f = get_has_field( 'logos_cards_per_view_' . $bp, $num ) ) {
			$attr['class'][] = sprintf('card-deck-%s-%s', $bp, $f );

			$rows = ceil( $total / $f );
			if($rows > 1){
				$attr['class'][] = 'card-deck-' . $bp . '-rows';
			}

			$rows = ($rows > 1) ? $rows - 1 : 1;

			$attr['class'][] = sprintf('card-deck-border-%s-%s', $bp, $rows * $f );
		}
	}
	html_atts( $attr );
}
