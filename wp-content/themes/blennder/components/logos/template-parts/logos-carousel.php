<div <?php logos_carousel_attr(); ?> >
	<!-- Slider main container -->
	<?php $id = uniqid(); ?>
	<div id="logos__slider-<?php echo $id;?>" class="swiper logos__slider" data-config="<?php echo component_get_carousel_config( 'logos' ); ?>">
		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">

			<?php foreach( $fields['logos'] as $logo ): ?>
				<div class="swiper-slide logos__slide">
					<?php include component_part_path('logos-card'); ?>
				</div>
			<?php endforeach; ?>

		</div>
	</div>
</div>
