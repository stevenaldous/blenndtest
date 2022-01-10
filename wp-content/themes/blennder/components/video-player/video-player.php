<div class="container text-center mb-4 mb-md-5">
	<?php component_sub_header(); ?>
	<?php component_header(); ?>
	<?php component_text(); ?>
</div>

<?php
$template = component_part_path( 'video-player-'. get_has_field('video_player_layout', 'single') );
if( $template ) {
	require $template;
}
?>
