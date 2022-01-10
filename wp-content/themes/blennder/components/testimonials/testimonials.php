<?php
$the_query = component_query();

$template_name = get_has_field( 'testimonials_layout_cards', 'list' );
component_sub_header();

component_header();

if( $the_query->have_posts() ) {

	include component_part_path( "testimonials-{$template_name}" );

}
