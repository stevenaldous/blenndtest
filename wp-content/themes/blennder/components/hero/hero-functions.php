<?php
declare( strict_types = 1 );


function hero_row() {
	$text_pos = [ 'class' => '' ];
	if ( $pos = get_has_field( 'hero_text_positioning', 'center center' ) ) {
		$pos = explode( ' ', $pos );
		if ( 'top' === $pos[0] ) {
			$vertical = 'start';
		} elseif ( 'center' === $pos[0] ) {
			$vertical = 'center';
		} elseif ( 'bottom' === $pos[0] ) {
			$vertical = 'end';
		}
		if ( 'left' === $pos[1] ) {
			$horizontal = 'start';
		} elseif ( 'center' === $pos[1] ) {
			$horizontal = 'center';
		} elseif ( 'right' === $pos[1] ) {
			$horizontal = 'end';
		}
		$text_pos['class'] .= ' align-items-' . $vertical .  ' justify-content-' . $horizontal . ' text-' . $pos[1];
	}
	return $text_pos;
}

function hero_video_attr() {
	$attr = [
		'id'               => 'hero__video-media',
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

function hero_video_player_video_attr($video) {

	$attr = [
		'class'       => 'video-player__video-media',
		'playsinline' => true,
		'controls'    => true,
		'preload'     => 'auto',
		'width'       => '100%',
		'poster'      => wp_get_attachment_image_url($video['video_player_poster']['id'] ?? null, 'video') ?? false,
	];

	html_atts( $attr );
}
?>

