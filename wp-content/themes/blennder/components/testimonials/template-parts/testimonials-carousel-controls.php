<?php
$atts = [
	'class' => [
		'swiper-controls',
		'swiper-controls--' . $fields['testimonials_swiper_controls_layout'] ?: 'center-center',
	]
];

if( $fields['testimonials_swiper_controls_layout'] != 'center-center' && $fields['testimonials_swiper_controls_layout'] != 'center-left'){
	$atts['class'][] = 'swiper-controls--bottom';
}
if( $fields['testimonials_card_template'] != 'semi-transparent'){
	$atts['class'][] = 'container';
} else{
	$atts['class'][] = 'padding-right-dynamic';
}
?>

<div <?php html_atts($atts); ?>>

	<?php if( $the_query->post_count > 1 && $fields['testimonials_carousel_show_pagination'] ): ?>
	<div class="swiper-pagination swiper-pagination--sm"></div>
	<?php endif; ?>

	<?php if( $the_query->post_count > 1 && $fields['testimonials_carousel_show_navigation'] ): ?>
	<div class="swiper-navigation">
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
	<?php endif; ?>

</div>