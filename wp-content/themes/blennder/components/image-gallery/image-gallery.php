<?php include component_part_path('image-gallery-heading'); ?>

<div <?php component_container(); ?>>
<?php
	$template_name = get_has_field( 'image_gallery_layout', 'masonry' );

	$template = component_part_path( "image-gallery-{$template_name}" );
	if( $template ) {
		include $template;
	}
?>
</div>