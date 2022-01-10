<?php $heading_layout_columns = ( get_has_field('heading_layout_columns', false ) ); ?>

<div class="mb-4 mb-md-5 row align-items-center <?php tabs_heading_alignment(); ?>">
	<div <?php tabs_heading_column(); ?>>
		<?php component_sub_header(); ?>
		<?php component_header(); ?>

		<?php if ( ! $heading_layout_columns ): ?>
			<?php component_text(); ?>
		<?php endif;?>
	</div>
	<?php if ( $heading_layout_columns ): ?>
	<div class="col-lg pl-lg-5">
		<?php component_text(); ?>
	</div>
	<?php endif;?>
</div>