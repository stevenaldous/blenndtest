<video <?php video_player_video_attr($video); ?>>
	<?php if( ! empty( $video[ 'video_player_sources' ]) ) :
		foreach( $video[ 'video_player_sources' ] as $source ) :
			$url = $source['video']['url'];
			$ext = array_values(array_slice(explode('.',$url), -1))[0];
			?>
			<source src="<?php echo $url; ?>" type="video/<?php echo $ext; ?>">
		<?php endforeach; ?>
	<?php endif; ?>
</video>

<div class="video-player__content">
	<h4><?php acf_text('video_player_title', $video); ?></h4>
	<p><?php acf_text('video_player_description', $video); ?></p>
</div>
