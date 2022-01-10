<?php
$atts = [
	'class' => [
		'container',
		'swiper-controls',
		'swiper-controls--bottom',
		'swiper-controls--' . $fields['cards_swiper_controls_layout'] ?: 'pagination-navigation',
	]
];
?>
<div <?php html_atts($atts); ?>>

	<?php if( count($fields['cards']) > 1 && $fields['cards_carousel_show_pagination'] ): ?>
	<div class="swiper-pagination swiper-pagination--sm"></div>
	<?php endif; ?>

	<?php if( count($fields['cards']) > 1 && $fields['cards_carousel_show_navigation'] ): ?>
	<div class="swiper-navigation">
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
	<?php endif; ?>

</div>