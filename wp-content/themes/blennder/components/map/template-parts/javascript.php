<?php
$map_markers = get_has_field( 'map_markers', [] );
$marker_data = [];
foreach( $map_markers as $map_marker ) {
	$latLng = preg_split( "/[\s,]+/", $map_marker[ 'map_marker' ] );
	$marker_data[] = [
		'title' => $map_marker[ 'map_marker_title' ],
		'lat'   => $latLng[0],
		'lng'   => $latLng[1],
		'phone'   => $map_marker[ 'map_marker_phone' ] ?? '',
		'address' => $map_marker[ 'map_marker_address' ] ?? '',
	];
}
include component_part_path( 'map' );
