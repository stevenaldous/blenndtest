<?php
$template_name = ( has_field( 'background_type' ) && 'video' === $fields['background_type'] ) ? 'video' : 'text';
$template = component_part_path( "hero-{$template_name}" );
if( $template ) {
	require $template;
}
?>

<a id="hero-bottom"></a>