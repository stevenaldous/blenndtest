<?php
$layout = get_has_field( 'cards_layout', 'grid' );

if ( has_field( 'cards' ) ) {

	include component_part_path( "cards-{$layout}" );

}