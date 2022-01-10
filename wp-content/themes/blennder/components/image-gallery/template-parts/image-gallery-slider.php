<div id="iamge-gallery--slider-<?php echo uniqid();?>" class="image-gallery__wrapper">
	<!-- Slider main container -->
	<div id="image-gallery__slider-<?php echo uniqid();?>" class="swiper image-gallery__slider" data-config="<?php image_gallery_slider_config(); ?>">
		<div class="swiper-wrapper">

			<?php if( has_field( 'image_gallery' ) ) : ?>
				<?php foreach( $fields[ 'image_gallery' ] as $img ) : ?>
					<div class="swiper-slide">
						<div class="image-gallery__slide-bg swiper-lazy" data-background="<?php echo wp_get_attachment_image_url($img['id'], 'post-thumbnail'); ?>">
							<div class="swiper-lazy-preloader"></div>
						</div>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

		</div>
		<?php include component_part_path('image-gallery-controls'); ?>
	</div>
</div>
