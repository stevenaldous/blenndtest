<?php if( has_field('accordion_items') ): ?>

<div <?php component_row(); ?>>

	<?php include component_part_path( 'accordion-header' ); ?>

	<?php $accordions = accordion_setup(); ?>

	<?php foreach( $accordions as $accordion): ?>

		<div <?php accordion_layout_column('right'); ?>>

			<?php $parent_id = uniqid(); ?>

			<div class="accordion" id="accordion-<?php echo $parent_id; ?>">

				<?php $count = 1; ?>

				<?php foreach( $accordion as $accordion_item): ?>

					<?php include component_part_path( 'accordion-item' ); ?>

					<?php $count++; ?>

				<?php endforeach; ?>

			</div>

		</div>

	<?php endforeach; ?>

</div>

<?php endif; ?>
