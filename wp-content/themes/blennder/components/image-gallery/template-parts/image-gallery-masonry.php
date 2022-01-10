<div class="grid">
	<span class="grid-gutter"></span>
	<?php if( has_field( 'image_gallery' ) ) : ?>

		<?php $sizes = ['gallery_tall', 'blog_feed', 'blog_feed', 'gallery_tall']; ?>

		<?php foreach( $fields[ 'image_gallery' ] as $key => $img ) : ?>
			<div class="grid-item">
				<?php echo wp_get_attachment_image($img['id'], $sizes[$key % 4] ); ?>
			</div>
		<?php endforeach; ?>
	<?php endif; ?>

</div>