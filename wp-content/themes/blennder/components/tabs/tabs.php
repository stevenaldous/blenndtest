<?php include component_part_path('tabs-heading'); ?>

<div <?php component_row();?>>

	<?php if( has_field('tabs') ): ?>

		<?php $id = uniqid(); ?>

		<div <?php tabs_label_column(); ?>>

			<?php include component_part_path('tabs-nav'); ?>

		</div>

		<div class="col-md">

			<?php include component_part_path('tabs-panel'); ?>

		</div>

	<?php endif; ?>

	</div><!-- /.col -->

</div><!-- /.row -->
