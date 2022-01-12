<?php // ?>
<div class="overlay"></div>
<div class="jumbotron px-0">
	<div <?php component_container(); ?>>
		<div <?php component_row(); ?>>
			<div class="col-md-11 col-lg-10 col-xl-8">

				<?php component_sub_header(); ?>

				<?php component_header(); ?>

				<?php component_text(); ?>

				<div class="btn-wrap d-flex flex-column justify-content-center align-items-center mt-4">

					<div class="tl-wrap mt-md-3 order-md-1">
						<?php acf_link( 'cta_link', [ 'class' => [ 'btn btn-text' ] ] ); ?>
						<span class="d-block"></span>
					</div>

					<?php acf_link( 'cta_button', [ 'class' => [ 'btn btn-secondary testclass mt-5 mt-md-0' ] ] ); ?>

				</div>
			</div>
		</div>
	</div>
</div>
