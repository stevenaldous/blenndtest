<?php $id = uniqid(); ?>
<div id="team__slider-<?php echo $id;?>" class="swiper team__slider" data-config="<?php echo component_get_carousel_config( 'team' ); ?>">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">

		<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
			<div class="swiper-slide team__slide">
				<?php include component_part_path( 'team-card' ); ?>
			</div>
		<?php endwhile; ?>

	</div>
</div>