<?php
declare( strict_types = 1 );

function counters_config( array $counter = [] ) {
	if ( empty( $counter ) ) return;

	$config = [];
	if ( has_field( 'counter_start_val', $counter ) ) $config['startVal'] = $counter['counter_start_val'];
	if ( has_field( 'counter_duration', $counter ) ) $config['duration'] = $counter['counter_duration'];
	if ( has_field( 'counter_separator', $counter ) ) $config['separator'] = $counter['counter_separator'];
	if ( has_field( 'counter_decimal', $counter ) ) $config['decimal'] = $counter['counter_decimal'];
	if ( has_field( 'counter_decimal_places', $counter ) ) $config['decimalPlaces'] = $counter['counter_decimal_places'];
	if ( has_field( 'counter_prefix', $counter ) ) $config['prefix'] = $counter['counter_prefix'];
	if ( has_field( 'counter_suffix', $counter ) ) $config['suffix'] = $counter['counter_suffix'];
	if ( has_field( 'counter_use_easing', $counter ) ) $config['useEasing'] = $counter['counter_use_easing'] ?: false;
	if ( has_field( 'counter_use_grouping', $counter ) ) $config['useGrouping'] = $counter['counter_use_grouping'] ?: false;
	echo blennder_array_to_json($config);
}



/*
* echo counters card grid attributes
*/
function counters_grid_attr() {
	$total = count( get_has_field('counters', 0) );

	$attr['class'] = [ 'card-deck' ];
	foreach( [ 'sm'=>1, 'md'=>2, 'lg'=>3, 'xl'=>3 ] as $bp => $num ){
		$f = get_has_field( 'counters_cards_per_view_' . $bp, $num );
		$attr['class'][] = sprintf( 'card-deck-%s-%s', $bp, $f );

		$rows = ceil( $total / $f );
		if($rows > 1){
			$attr['class'][] = 'card-deck-' . $bp . '-rows';
		}

		$rows = ($rows > 1) ? $rows - 1 : 1;

		$attr['class'][] = sprintf('card-deck-border-%s-%s',
			$bp,
			$rows * ( $f )
		);
	}
	html_atts( $attr );
}

/*
* echo counters card grid attributes
*/
function counters_card_attr( $card = [] ) {
	$attr = [
		'class' => [ 'card', 'shadow-none', 'rounded-0' ]
	];

	if($align = get_has_field('counters_text_alignment', 'center')){
		$attr['class'][] = 'text-' . $align;
	}

	html_atts( $attr );
}

/*
* echo counters heading alignment classes
*/
function counters_heading_alignment() {
	if ( get_has_field( 'heading_layout_columns', false ) ) return;

	$align = get_has_field( 'heading_alignment', 'left' );
	if ( has_field('heading_alignment') ) {
		echo 'text-' . $align . ' justify-content-' . _align_to_flex( $align );
	}

}

/*
* echo counters heading column classes
*/
function counters_heading_column() {
	$atts = [ 'class' => 'col' ];
	if ( get_has_field('counters_heading_layout', 'top' ) === 'top' ){
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
function counters_layout_column( $side ) {
	$attr = [];
	$header_layout = get_has_field( 'counters_heading_layout', 'top' );

	if($side === 'left'){
		$attr['class'] = ['mb-3', 'mb-md-4', 'mt-md-5', 'pr-lg-5', 'pr-xl-6'];
		$attr['class'][] = ( $header_layout === 'left' ) ? 'col-lg-5' : 'col-12';
	}elseif($side === 'right') {
		$attr['class'] = ( $header_layout === 'left' ) ? 'col-lg-7' : 'col-12';
	}

	html_atts($attr);
}
