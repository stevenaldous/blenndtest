<video <?php hero_video_attr(); ?>>
	<?php if( $src = get_has_field( 'background_video_desktop_mp4', false ) ) : ?>
	<source src="<?php echo $src[ 'url' ]; ?>" type="video/mp4" >
	<?php endif; ?>
	<?php if( $src = get_has_field( 'background_video_desktop_webm', false ) ) : ?>
	<source src="<?php echo $src[ 'url' ]; ?>" type="video/webm" >
	<?php endif; ?>
	<?php acf_image( 'background_video_poster' ); ?>
	Your browser does not support the video tag.
</video>
