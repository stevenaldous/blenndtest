<div <?php image_gallery_controls_atts(); ?>>

	<?php if( count( $fields['image_gallery'] ) > 1 && get_has_field( 'image_gallery_carousel_show_pagination', false ) === true ): ?>
	<div class="swiper-pagination <?php image_gallery_pagination_size() ?>"></div>
	<?php endif; ?>

	<?php if( count( $fields['image_gallery'] ) > 1 && get_has_field( 'image_gallery_carousel_show_navigation', false ) === true ): ?>
	<?php $nav_pos = get_has_field( 'navigation_position', 'sides' );?>
	<div <?php gallery_nav_atts();?>>
		<div class="swiper-navigation">
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	</div>
	<?php endif; ?>

</div>