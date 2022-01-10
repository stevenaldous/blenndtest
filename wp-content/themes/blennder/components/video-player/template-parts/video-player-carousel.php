<?php $id = uniqid(); ?>
<div <?php video_carousel_attr(); ?> >
	<div <?php component_container(); ?>>
		<div id="video-player__slider-<?php echo $id;?>" class="swiper video-player__slider" data-config="<?php echo component_get_carousel_config( 'video_player' ); ?>">
			<div class="swiper-wrapper">

				<?php if( ! empty( $fields[ 'video_player_items' ]) ) : ?>
					<?php foreach( $fields[ 'video_player_items' ] as $video ) : ?>
						<div class="swiper-slide video-player__slide">
							<?php include component_part_path('video-player-video'); ?>
						</div>
					<?php endforeach; ?>
				<?php endif;?>

			</div>
		</div>
	</div>

	<?php include component_part_path('video-player-carousel-controls'); ?>
</div>


