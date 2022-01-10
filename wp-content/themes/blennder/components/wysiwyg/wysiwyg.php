<div <?php component_row(); ?>>
	<div <?php wysiwyg_header_column_atts();?> >
		<?php component_sub_header(); ?>
		<?php component_header(); ?>
	</div>
	<div <?php wysiwyg_content_column_atts();?> >
		<?php component_text(); ?>
		<?php acf_link( 'wysiwyg_link', [ 'class' => ['btn', 'btn-primary' ] ] ); ?>
	</div>
</div>

