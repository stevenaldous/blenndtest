<!-- Slider main container -->
<?php $id = uniqid(); ?>
<div id="cards__slider-<?php echo $id;?>" class="swiper cards__slider" data-config="<?php echo component_get_carousel_config( 'cards' ); ?>">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">

		<?php foreach( $fields['cards'] as $card ): ?>
			<div class="swiper-slide cards__slide">
				<?php include component_part_path( 'cards-card' ); ?>
			</div>
		<?php endforeach; ?>

	</div>
</div>
