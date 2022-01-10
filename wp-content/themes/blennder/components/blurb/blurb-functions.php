<?php
declare( strict_types = 1 );

/*
* echo blurb attributes
*/
function blurb_attr($blurb) {
	$blurb_attr = [ 'class' => ['blurb__card', 'card', 'rounded-0'] ];
	if( has_field( 'blurb_icon_position' ) && get_has_field( 'blurb_icon_type', 'none', $blurb ) !== 'none' ) {
		$blurb_attr['class'][] = 'blurb--' . get_has_field( 'blurb_icon_position', 'top' );
	}
	if( has_field('blurb_icon_type', $blurb ) ) {
		$blurb_attr['class'][] = 'blurb--icon-' . $blurb['blurb_icon_type'];
	}
	if( has_field( 'blurb_box_shadow' ) ) {
		$blurb_attr['class'][] = 'shadow';
	}
	if( has_field( 'blurb_background_color', $blurb ) ) {
		$blurb_attr['style'] = 'background-color:' . $blurb['blurb_background_color'].';';
	}
	if( get_has_field( 'blurb_content_layout_centered', false )){
		$blurb_attr['class'][] = 'text-center';
	}
	html_atts($blurb_attr);
}

/*
* echo title tag attributes
*/
function blurb_title( $blurb ) {
	if( ! has_field( 'blurb_title', $blurb ) ) return;

	$attr = [ 'class' => 'card-title' ];
	$tag = get_has_field( 'blurb_title_tag', 'h3', $blurb ) ?: $blurb[ 'blurb_title_tag' ];
	the_tag( $tag, $attr, $blurb['blurb_title'] );
}


/*
* echo blurb heading alignment classes
*/
function blurb_heading_alignment() {
	if ( get_has_field( 'heading_layout_columns', false ) ) return;
	$align = get_has_field( 'heading_alignment', 'left' );
	if ( has_field('heading_alignment') ) {
		echo 'text-' . $align . ' justify-content-' . _align_to_flex( $align );
	}

}

/*
* echo blurb heading column classes
*/
function blurb_heading_column() {
	$atts = [ 'class' => [ 'col-lg-8', 'col-xl-6' ] ];

	if ( get_has_field('heading_layout_columns', false ) ){
		$atts = [ 'class' => 'col-lg-6'];
	}

	html_atts($atts);
}
