<div class="jumbotron px-0">
	<div <?php component_container(); ?>>
		<div <?php component_row(); ?>>
			<div class="col-12 col-md-6 order-1 order-md-2">

				<?php component_sub_header(); ?>

				<?php component_header(); ?>

				<?php component_text(); ?>

				<?php acf_link( 'cta_button', [ 'class' => [ 'btn btn-primary' ] ] ); ?>

			</div>

			<div class="col-12 col-md-6 order-2 order-md-1 cta__left-form-col">
				<?php include component_part_path('cta-form'); ?>
			</div>
		</div>
	</div>
</div>
