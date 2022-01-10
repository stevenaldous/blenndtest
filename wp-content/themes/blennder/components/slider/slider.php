<?php component_sub_header(); ?>
<?php component_header(); ?>

<?php if( has_field( 'slides' ) ): ?>

	<!-- Slider main container -->
	<div <?php slider_attr(); ?>>

		<!-- Additional required wrapper -->
		<div class="swiper-wrapper">

			<?php foreach( $fields['slides'] as $slide ): ?>

				<?php include component_part_path( 'slide' ); ?>

			<?php endforeach; ?>

		</div>

		<?php if( count ($fields['slides'] ) > 1  && get_has_field( 'slider_carousel_show_navigation', false ) ) : ?>
			<!-- If we need navigation buttons -->
			<?php $nav_pos = get_has_field( 'navigation_position', 'sides' );?>
			<div class="swiper-navigation--wrapper swiper-navigation--wrapper-<?php echo $nav_pos;?> container">
				<div class="swiper-navigation swiper-navigation--<?php echo $nav_pos ?>">
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
		<?php endif; ?>

		<?php if( count( $fields['slides'] ) > 1 && get_has_field( 'slider_carousel_show_pagination', false ) ) : ?>
			<!-- If we need pagination -->
			<?php $pag_pos = get_has_field( 'pagination_position', 'center' ); ?>
			<div class="swiper-pagination--wrapper swiper-pagination--wrapper-<?php echo $pag_pos; ?> container">
				<div class="swiper-pagination swiper-pagination--<?php echo $pag_pos; ?>"></div>
			</div>
		<?php endif; ?>

	</div>
<?php endif; ?>
