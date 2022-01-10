<?php
$locations = get_posts( [
	'post_type'   => 'location',
	'numberposts' => -1,
] );
$marker_data = [];
foreach( $locations as $location ) {
	$latLng = get_field( 'latitude_longitude', $location );
	$latLng = preg_split( "/[\s,]+/", $latLng );
	$marker_data[] = [
		'title'   => get_the_title( $location ),
		'content' => get_the_content( null, false, $location ),
		'url'     => get_the_permalink( $location ),
		'lat'     => $latLng[0],
		'lng'     => $latLng[1],
		'phone'   => get_field( 'phone', $location->ID ),
		'address' => get_field( 'address', $location->ID ),
	];
}
include component_part_path( 'map' );
