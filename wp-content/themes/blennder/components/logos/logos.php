<?php include component_part_path( 'logos-header' ); ?>

<?php
$template_name = $fields['logos_template'];
$template = component_part_path( "logos-{$template_name}" );
if( $template ) {
	require $template;
}
?>