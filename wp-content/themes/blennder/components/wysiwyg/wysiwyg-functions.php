<?php
declare( strict_types = 1 );


function wysiwyg_row() {
	$text_pos = [ 'class' => [ '' ] ];
	$layout = get_has_field('wysiwyg_layout', 'default');
	if ( $layout === 'center' ) {
		$text_pos['class'][] = 'justify-content-center text-center';
	}

	return $text_pos;
}

/*
 * Determind WYSWIYG Column
 */
function wysiwyg_header_column_atts(){
	$atts = ['class' => ['col', 'wysiwyg__header']];
	if ( get_has_field('wysiwyg_layout', 'default') === 'center' ) {
		$atts['class'][] = 'col-md-11 col-lg-10 col-xl-9 px-xl-4';
	}
	html_atts($atts);
}

function wysiwyg_content_column_atts(){
	$atts = ['class' => [ 'col-12', 'wysiwyg__content' ] ];
	$layout = get_has_field('wysiwyg_layout', 'default');
	if ( $layout === 'center' ) {
		$atts['class'][] = 'col-md-11 col-lg-10 col-xl-9 px-xl-4';
	}
	else if ( $layout === 'columns' ) {
		$atts['class'][] = 'col-md-6';
	}
	else if ( $layout === 'content-columns' ) {
		$atts['class'][] = 'mt-3 mt-md-5';
	}
	else {
		$atts['class'][] = 'mt-3';
	}
	html_atts($atts);
}
