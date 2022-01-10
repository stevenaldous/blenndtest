<?php
$atts = [
	'class' => [
		'container',
		'swiper-controls',
		'swiper-controls--bottom',
		'swiper-controls--' . $fields['video_player_swiper_controls_layout'] ?: 'pagination-navigation',
	]
];
?>
<div <?php html_atts($atts); ?>>

	<?php if( count($fields['video_player_items']) > 1 ): ?>
	<div class="swiper-pagination swiper-pagination--sm"></div>
	<?php endif; ?>

	<?php if( count($fields['video_player_items']) > 1 ): ?>
	<div class="swiper-navigation">
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
	<?php endif; ?>

</div>