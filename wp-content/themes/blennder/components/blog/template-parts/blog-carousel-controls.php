<?php
$atts = [
	'class' => [
		'container',
		'swiper-controls',
		'swiper-controls--bottom',
		'swiper-controls--' . get_has_field( 'blog_cards_swiper_controls_layout', 'pagination-navigation' ),
	]
];
?>

<div <?php html_atts($atts); ?>>

	<?php if( $the_query->post_count > 1 && true === get_has_field( 'blog_carousel_pagination', false ) ): ?>
	<div class="swiper-pagination swiper-pagination--sm"></div>
	<?php endif; ?>

	<?php if( $the_query->post_count > 1 && true === get_has_field( 'blog_carousel_navigation', false ) ): ?>
	<div class="swiper-navigation">
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
	<?php endif; ?>

</div>
