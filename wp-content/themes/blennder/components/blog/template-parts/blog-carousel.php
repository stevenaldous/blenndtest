<?php include component_part_path( 'blog-heading' ); ?>

<div <?php blog_carousel_attr(); ?> >
	<!-- Slider main container -->
	<div <?php component_container();?> >
		<?php include component_part_path( 'blog-carousel-slider' ); ?>
	</div>

	<?php include component_part_path('blog-carousel-controls'); ?>
</div>
