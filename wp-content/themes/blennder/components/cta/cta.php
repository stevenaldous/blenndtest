<?php
$template_name = ( has_field( 'background_type' ) && 'video' === $fields['background_type'] ) ? 'video' : $fields['cta_template'];
$template = component_part_path( "cta-{$template_name}" );
if( $template ) {
	require $template;
}
?>