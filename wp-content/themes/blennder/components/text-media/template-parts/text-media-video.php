<?php if ( ! has_field( 'text_media_video_type' ) ) return; ?>

<?php if( $fields['text_media_video_type'] === 'link' ||  ( $fields['text_media_video_type'] === 'file' && $fields['text_media_video_playback_style'] === 'popup' ) ): ?>

	<?php
		if( $fields['text_media_video_type'] === 'link' ){
			$embed = get_has_field( 'text_media_video_embed', '' );
			preg_match('/src="(.+?)"/', $embed, $matches);
			$link = $matches[1] ?? $embed;
		} else {
			$link = $fields['text_media_video']['url'];
		}
	?>

	<a class="text-media__video-play" data-fancybox="video-link" href="<?php echo $link ?? ''; ?>">
		<i class="fas fa-play"></i>
	</a>

	<?php acf_background_image( 'text_media_video_poster', text_media_image_size(), [ 'class' => 'text-media__media' ] ); ?>

<?php elseif ( $fields['text_media_video_type'] === 'file' && $fields['text_media_video_playback_style'] === 'background' ): ?>

	<div class="text-media__video">
		<a href="#" class="text-media__video-pause" tabindex="0">
			<i class="fas fa-pause-circle"></i>
			<span class="sr-only">Pause Video</span>
		</a>

		<video <?php text_media_video_attr(); ?>>
			<?php if ( has_field( 'text_media_video' ) ): ?>
			<source src="<?php echo $fields['text_media_video']['url']; ?>" type="video/mp4" >
			<?php endif; ?>
			<?php acf_image('text_media_video_poster', 'post-thumbnail'); ?>
			Your browser does not support the video tag.
		</video>
	</div>

<?php endif; ?>
