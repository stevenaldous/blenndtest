<div <?php slide_attr( $slide ); ?>>

	<?php if( get_has_field( 'slide_has_content', false, $slide ) ) : ?>

	<div class="slider__content">
		<div class="row align-items-center">
			<div class="<?php echo slide_col( $slide, '8' ); ?> text-<?php echo get_has_field( 'slide_text_position', 'left', $slide ); ?>">

				<?php slide_preheader( $slide ); ?>
				<?php slide_header( $slide ); ?>

				<?php if ( has_field( 'slide_content', $slide ) ): ?>
				<div class="lead" data-swiper-parallax="-2800">
					<?php acf_wysiwyg( 'slide_content', ['class'=>'slide__content'], $slide ); ?>
				</div>
				<?php endif; ?>

				<?php if ( has_field( 'slide_button', $slide ) ): ?>
				<div data-swiper-parallax="-2200">
					<?php $btn_style = get_has_field( 'button_style', 'primary', $slide ); ?>
					<?php acf_link( 'slide_button', [ 'class' => "btn btn-$btn_style" ], $slide); ?>
				</div>
				<?php endif; ?>

			</div><!-- .col -->
			<?php if( get_has_field( 'slide_has_secondary_image', false, $slide ) ) : ?>
				<div class="<?php echo slide_col( $slide, '4', get_has_field( 'slide_secondary_image_position', '', $slide ) ); ?>" data-swiper-parallax="-2400">
					<?php acf_image( 'slide_secondary_image', 'full', [], $slide ); ?>
				</div><!-- .col -->
			<?php endif; ?>
		</div><!-- .row -->
	</div><!-- .container -->

	<?php endif;?>

</div><!-- .swiper-slide -->
