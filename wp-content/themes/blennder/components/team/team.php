<?php
	$the_query = component_query();
	$layout = get_has_field( 'team_layout', 'grid' );
	$template = component_part_path( "team-{$layout}" );

	if( $template ) {
		include $template;
	}

	include component_part_path('team-bio');
?>
