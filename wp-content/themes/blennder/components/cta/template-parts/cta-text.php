<div class="jumbotron px-0">
	<div <?php component_container(); ?>>
		<div <?php component_row(); ?>>
			<div class="col-md-11 col-lg-10 col-xl-8">

				<?php component_sub_header(); ?>

				<?php component_header(); ?>

				<?php component_text(); ?>

				<div class="btn-wrap d-flex flex-column justify-content-center align-items-center">

					<?php acf_link( 'cta_link', [ 'class' => [ 'btn btn-text mt-md-3 order-md-1' ] ] ); ?>

					<?php acf_link( 'cta_button', [ 'class' => [ 'btn btn-secondary testclass mt-md-3' ] ] ); ?>

					

				</div>
			</div>
		</div>
	</div>
</div>
