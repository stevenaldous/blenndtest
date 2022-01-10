<div class="jumbotron px-0">
	<div <?php component_container(); ?>>
		<div <?php component_row(); ?>>
			<div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">

				<div class="cta__content-wrap">

					<?php component_sub_header(); ?>

					<?php component_header(); ?>

					<?php component_text(); ?>

					<?php acf_link( 'cta_button', [ 'class' => [ 'btn btn-primary' ] ] ); ?>

				</div>

				<div class="cta__form-wrap">
					<?php include component_part_path('cta-form'); ?>
				</div>
			</div>

		</div>
	</div>
</div>
