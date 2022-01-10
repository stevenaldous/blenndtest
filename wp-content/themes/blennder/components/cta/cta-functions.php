<?php
declare( strict_types = 1 );

function cta_row() {
	$text_pos = [ 'class' => '' ];
	if( $pos = get_has_field( 'cta_text_positioning', 'center center' ) ) {
		$pos = explode( ' ', $pos );
		$vertical = _align_to_flex( $pos[0] );
		$horizontal = _align_to_flex( $pos[1] );
		$text_pos['class'] .= ' align-items-' . $vertical .  ' justify-content-' . $horizontal . ' text-' . $pos[1];
	}
	return $text_pos;
}

function cta_video_attr() {
	$attr = [
		'id'               => 'cta__video-media',
		'playsinline'      => true,
		'autoplay'         => true,
		'muted'            => get_has_field( 'background_video_muted', false ),
		'loop'             => get_has_field( 'background_video_loop', false ),
		'poster'           => acf_url( 'background_video_poster' ),
		'data-mp4'         => acf_url( 'background_video_desktop_mp4' ),
		'data-mp4-mobile'  => acf_url( 'background_video_mobile_mp4' ),
		'data-webm'        => acf_url( 'background_video_desktop_webm' ),
		'data-webm-mobile' => acf_url( 'background_video_mobile_webm' ),
	];

	html_atts( $attr );
}
