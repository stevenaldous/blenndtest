
<?php if( has_field( 'form' ) ): ?>
	<?php
		$header_option = get_has_field( 'form_header_option', 'form');
		$gf_title = ( $header_option === 'form' && $fields['form_show_gf_title'] ) ? true : false;
		$gf_description = ( $header_option === 'form' && $fields['form_show_gf_description'] ) ? true : false;
	?>
	<?php if( $header_option === 'custom' && ( has_field( 'component_header' ) || has_field( 'component_text' ) ) ): ?>
		<div class="gform_heading">
			<?php component_sub_header(); ?>
			<div class="gform_title">
				<?php component_header(); ?>
			</div>
			<div class="gform_description">
				<?php component_text( ); ?>
			</div>
		</div>
	<?php endif; ?>
	<?php gravity_form( $fields['form']['id'], $gf_title, $gf_description, $fields['form_display_inactive'], false, $fields['form_ajax'], $fields['form_tabindex'] );	?>
<?php else:	?>
	<p>No Form Chosen</p>
<?php endif; ?>
