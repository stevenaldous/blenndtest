<?php
declare( strict_types = 1 );

/**
 * echos the tab label column attributes.
 */
function tabs_label_column() {
	$attr = [ 'class' => [ 'col-12' ] ];
	$layout = get_has_field('tabs_layout', 'top');
	if( $layout === 'left' || $layout === 'right' ) {
		$attr['class'] = ['col-auto'];
		if($layout === 'right') {
			$attr['class'][] = 'order-md-last';
		}
	}

	html_atts( $attr );
}

/*
* echo tabs copy element classes
*/
function tabs_copy_col_attr( $panel ) {
	$attr = ['class'=> [ 'col' ] ];
	if( has_field( 'panel_image', $panel ) ){

		if( $panel['panel_image_position'] === 'left' ) {
			$attr['class'][] = 'order-lg-last pt-lg-5 pr-lg-5';
		}else if( $panel['panel_image_position'] === 'right' ) {
			$attr['class'][] = 'order-lg-first pt-lg-5 pl-lg-5';
		}
	}
	html_atts($attr);
}

/*
* echo tabs nav link attributes
*/
function tabs_nav_link_attr( $config ) {
	$tab_slug = sanitize_title( $config['tab']['tab_label'] .' '. $config['id'] );
	$attr = [
		'class'       => [ 'tabs__nav-link', 'nav-link' ],
		'href'        => sprintf('#%1$s-%2$s', $tab_slug, $config['count']),
		'data-toggle' => 'tab',
	];
	if($config['count'] === 1) {
		$attr['class'][] = 'active';
	}
	html_atts($attr);
}

/*
* echo tabs panel attributes
*/
function tabs_panel_attr( $config ) {
	$panel_slug = sanitize_title( $config['panel']['tab_label'] .' '. $config['id'] );
	$attr = [
		'class'       => [ 'tab-pane', 'fade' ],
		'id'          => sprintf('%1$s-%2$s', $panel_slug, $config['count']),
		'data-toggle' => 'tab',
		'role'        => 'tablpanel',
	];
	if($config['count'] === 1) {
		$attr['class'][] = 'show active';
	}
	html_atts($attr);
}

/*
* echo tabs icon position class
*/
function tab_icon_position( $tab ) {
	if ( has_field( 'tab_icon', $tab ) ) {
		 $icon_pos = get_has_field( 'tab_icon_position', 'none', $tab ) ?: 'left';
		echo 'tabs__icon-wrap--' . $icon_pos;
	}
}

/*
* echo tabs heading alignment classes
*/
function tabs_heading_alignment() {
	if ( get_has_field( 'heading_layout_columns', false ) ) return;
	$align = get_has_field( 'heading_alignment', 'center' );
	echo 'text-' . $align . ' justify-content-' . _align_to_flex( $align );
}

/*
* echo tabs heading column classes
*/
function tabs_heading_column() {
	$atts = [ 'class' => [ 'col-lg-8', 'col-xl-6' ] ];

	if ( get_has_field('heading_layout_columns', false ) ){
		$atts = [ 'class' => 'col-lg-6'];
	}

	html_atts($atts);
}
