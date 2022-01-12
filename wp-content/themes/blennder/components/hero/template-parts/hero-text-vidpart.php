<?php if(  have_rows('video_player_sources') ): 

	$video = $fields[ 'video_player_items' ][0];
?>

	<div class="col-12 hero-video-player">

		<div class="hero-video-player__video">

			<?php  ?>
			<video <?php hero_video_player_video_attr($video); ?>>
				<?php 
					while( have_rows('video_player_sources') ): the_row();
						$vid = get_sub_field('video');					
						$type = pathinfo($vid['url'], PATHINFO_EXTENSION);
				?>
					<source src="<?php echo $vid['url']; ?>" type="video/<?php echo $type; ?>" >

				<?php endwhile; ?>

				<?php acf_image( 'video_player_poster' ); ?>

				Your browser does not support the video tag.
			</video>

		</div>

	</div>
	
<?php endif; 

	
?>