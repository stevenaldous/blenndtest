<?php if( has_field( 'cta_form' ) ): ?>
	<?php
		$header_option = get_has_field( 'cta_form_header_option', 'form');
		$gf_title = ( $header_option === 'form' && $fields['cta_form_show_gf_title'] ) ? true : false;
		$gf_description = ( $header_option === 'form' && $fields['cta_form_show_gf_description'] ) ? true : false;
	?>
	<?php if( $header_option === 'custom' && ( has_field( 'cta_form_custom_header' ) || has_field( 'cta_form_custom_description' ) ) ): ?>
		<div class="gform_heading">
		<?php if( has_field( 'cta_form_header' ) ): ?>
			<h3 class="gform_title">
				<?php acf_text('cta_form_header'); ?>
			</h3>
		<?php endif; ?>
		<?php if( has_field( 'cta_form_custom_description' ) ): ?>
			<div class="gform_description">
				<?php acf_wysiwyg( 'cta_form_custom_description' ); ?>
			</div>
		<?php endif; ?>
		</div>
	<?php endif; ?>
	<?php gravity_form( $fields['cta_form']['id'], $gf_title, $gf_description, $fields['cta_form_display_inactive'], false, $fields['cta_form_ajax'], $fields['cta_form_tabindex'] );	?>
<?php else:	?>
	<p>No Form Chosen</p>
<?php endif; ?>