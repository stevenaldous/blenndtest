<?php
	$show_image = get_has_field( 'team_show_images', false );
	$body_class = 'card-body';
	$media_size = 'blog_card';
	$img_class = 'card-img';

	$img_pos = get_has_field( 'team_image_position', '' );
	//Set classes for the card body and card image based on the position field.
	if( $img_pos === 'cover' ) {
		$body_class = 'card-img-overlay';
	}
?>
<div <?php team_card_attr(); ?>>
	<?php if( has_post_thumbnail() && $show_image && $img_pos === 'top' ): ?>
		<?php the_post_thumbnail( $media_size, [ 'class' => $img_class ] ); ?>
	<?php endif; ?>

	<div class="<?php echo $body_class; ?>">
		<h3 class="card-title">
			<?php the_title(); ?>
		</h3>
		<h4 class="card-subtitle">
			<?php the_field('team_position_title',get_the_ID());	?>
		</h4>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="stretched-link <?php team_bio_type_class(); ?>" data-id="<?php the_ID(); ?>"></a>
	</div>
</div>
