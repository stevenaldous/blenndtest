<?php $heading_layout_columns = ( get_has_field('heading_layout_columns', false ) ); ?>

<div <?php counters_layout_column('left'); ?>>

	<div class="row align-items-center <?php counters_heading_alignment(); ?>">
		<div <?php counters_heading_column(); ?>>
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
</div>