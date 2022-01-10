<div class="jumbotron px-0">
	<div <?php component_container(); ?>>
		<div <?php component_row(); ?>>
			<div class="col-md-11 col-lg-10 col-xl-8">

				<?php component_sub_header(); ?>

				<?php component_header(); ?>

				<?php component_text(); ?>

				<?php acf_link( 'hero_button', [ 'class' => [ 'btn btn-outline-light' ] ] ); ?>

				<?php if ( has_field( 'hero_arrow' ) && true === $fields['hero_arrow'] ) : ?>
					<a href="#hero-bottom" class="hero__scroll">
						<i class="scrollOn far fa-chevron-down lead mt-4 mt-md-5 mt-lg-6"></i>
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php if( has_field( 'background_type' ) && 'video' === $fields['background_type'] ): ?>
	<div class="position-relative z-1">
		<a href="#" class="hero__video-pause" tabindex="0">
			<i class="fas fa-pause-circle"></i>
			<span class="sr-only">Pause Video</span>
		</a>
	</div>
	<?php endif; ?>
</div>