<?php
$key = get_theme_option( 'google_maps_api_key' );
$location = $fields[ 'map' ];
?>
<div class="acf-map">
	<iframe
		width="600"
		height="450"
		style="border:0"
		loading="lazy"
		allowfullscreen
		src="https://www.google.com/maps/embed/v1/place?key=<?php echo $key; ?>&q=<?php echo $location[ 'address' ]; ?>">
	</iframe>
</div>
