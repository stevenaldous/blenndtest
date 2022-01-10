<div <?php cards_carousel_attr(); ?> >
	<div <?php component_container();?> >

		<div <?php component_row();?> >
			<div class="col-md-5 col-lg-4 pr-md-3 pr-lg-4 pr-xl-5">
				<?php component_sub_header(); ?>
				<?php component_header(); ?>
				<?php component_text(); ?>
			</div><!-- .col -->
			<div class="col-md-7 col-lg-8">
				<?php include component_part_path('cards-carousel-slider'); ?>
			</div><!-- .col -->
		</div><!-- .row -->
	</div>

	<?php include component_part_path('cards-carousel-controls'); ?>

</div>