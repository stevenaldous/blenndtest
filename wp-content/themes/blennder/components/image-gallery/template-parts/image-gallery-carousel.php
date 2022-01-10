<div id="image-gallery--carousel-<?php echo uniqid();?>" class="image-gallery__wrapper">
	<!-- Slider main container -->
	<div id="image-gallery__carousel-<?php echo uniqid();?>" class="swiper image-gallery__carousel" data-config="<?php image_gallery_carousel_config(); ?>">
		<div class="swiper-wrapper">

			<?php if( has_field( 'image_gallery' ) ) : ?>
				<?php foreach( $fields[ 'image_gallery' ] as $img ) : ?>
					<div class="swiper-slide">
						<a href="<?php echo wp_get_attachment_image_url($img['id'], 'post-thumbnail'); ?>" data-fancybox="gallery-carousel"><?php echo wp_get_attachment_image($img['id'], 'gallery'); ?></a>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>

		</div>
	</div>
	<?php include component_part_path('image-gallery-controls'); ?>
</div>
