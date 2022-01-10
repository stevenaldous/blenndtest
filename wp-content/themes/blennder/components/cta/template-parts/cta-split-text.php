<div class="jumbotron px-0">
	<div <?php component_container(); ?>>
		<div <?php component_row(); ?>>
			<div class="col-12 col-md-6">

				<?php component_sub_header(); ?>

				<?php component_header(); ?>

			</div>

			<div class="col-12 col-md-6">
				<?php component_text(); ?>

				<?php acf_link( 'cta_button', [ 'class' => [ 'btn btn-primary' ] ] ); ?>
			</div>
		</div>
	</div>
</div>
