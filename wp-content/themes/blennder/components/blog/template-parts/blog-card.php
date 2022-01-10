<?php
	$show_image = get_has_field( 'blog_show_featured_image', false );
	$body_class = 'card-body';
	$media_size = 'blog_feed';
	$img_pos = get_has_field( 'blog_cards_image_position', '' );
	if( $show_image === true ){
		$img_class  = 'card-img-top';
		if( $img_pos === 'cover' ) {
			$img_class = 'card-img';
			$body_class = 'card-img-overlay';
			$media_size = 'blog_card';
		}
	}
?>
<div <?php blog_attr(); ?>>
	<?php if( has_post_thumbnail() && ( has_field('blog_show_featured_image') && $fields['blog_show_featured_image'] && $img_pos === 'top' ) ): ?>
		<?php the_post_thumbnail( $media_size, array( 'class' => $img_class ) ); ?>
	<?php endif; ?>
	<div class="<?php echo $body_class; ?>">
		<div class="blog-card__category card-subtitle">
			<?php the_primary_category(); ?>
		</div>
		<h3 class="card-title blog-card__title">
			<?php the_title(); ?>
		</h3>
		<div class="card-text blog-card__excerpt">
			<?php the_excerpt(); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="card-link btn btn-primary stretched-link <?php echo ( $img_pos !== 'cover' ) ? 'mt-auto' : '';?> ">Read More</a>
	</div>
</div>
