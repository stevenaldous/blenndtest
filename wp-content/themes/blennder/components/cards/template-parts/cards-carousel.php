<?php
$template_name = $fields['cards_carousel_layout'] ?: 'title-top';

$template = component_part_path( "cards-carousel-{$template_name}" );

if( $template ) {
	require $template;
}
?>
