<?php $id = uniqid(); ?>
<div id="blog__slider-<?php echo $id;?>" class="swiper blog__slider" data-config="<?php echo component_get_carousel_config( 'blog' ); ?>">
	<!-- Additional required wrapper -->
	<div class="swiper-wrapper">

		<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>
			<div class="swiper-slide blog__slide">
				<?php include component_part_path( 'blog-card' ); ?>
			</div>
		<?php endwhile; ?>

	</div>
</div>