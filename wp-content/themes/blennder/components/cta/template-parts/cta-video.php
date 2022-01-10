<div class="cta__video">
	<?php
	get_template_part( 'template-parts/background-video' );
	$inner_template_name = $fields['cta_template'];
	$inner_template = component_part_path( "cta-{$inner_template_name}" );
	if( $inner_template ) {
		require $inner_template;
	}
	?>
</div>
