<?php $heading_layout_columns = ( get_has_field('heading_layout_columns', false ) ); ?>

<div <?php accordion_layout_column('left'); ?>>

	<div class="row align-items-center <?php accordion_heading_alignment(); ?>">
		<div <?php accordion_heading_column(); ?>>
			<?php component_sub_header(); ?>
			<?php component_header(); ?>

			<?php if ( ! $heading_layout_columns ): ?>
				<?php component_text(); ?>
			<?php endif;?>
		</div>
		<?php if ( $heading_layout_columns ): ?>
		<div class="col-lg pl-xl-5">
			<?php component_text(); ?>
		</div>
		<?php endif;?>
	</div>

</div>
