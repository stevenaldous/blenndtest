<?php
$google_api_key = get_field('google_maps_api_key','options');
wp_enqueue_script('google-maps', "https://maps.googleapis.com/maps/api/js?key=$google_api_key", [], false, true );
?>

<div class="map__header mb-4 mb-md-5">
	<?php component_sub_header(); ?>
	<?php component_header(); ?>
	<?php component_text(); ?>
</div>

<div class="row">
	<?php include component_part_path( get_has_field( 'map_type', 'embed' ) ); ?>
</div>
