<?php $id = uniqid(); ?>
<div <?php testimonials_carousel_attr(); ?> >
	<div id="testimonails__slider-<?php echo $id;?>" class="swiper testimonials__slider" data-config="<?php echo component_get_carousel_config( 'testimonials' ); ?>">
		<div class="swiper-wrapper">

			<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>

				<div class="swiper-slide">
					<?php 
					$testimonial_card_template = get_has_field( 'testimonials_card_template', 'testimonial' );
					include component_part_path( "testimonial-{$testimonial_card_template}" );
					?>
				</div>

			<?php endwhile; ?>

		</div>
	</div>

	<?php include component_part_path('testimonials-carousel-controls'); ?>

</div>
