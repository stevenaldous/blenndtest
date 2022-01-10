<div <?php logos_grid_attr(); ?> >
	<?php foreach( $fields['logos'] as $logo ): ?>
		<?php include component_part_path('logos-card'); ?>
	<?php endforeach; ?>
</div>
