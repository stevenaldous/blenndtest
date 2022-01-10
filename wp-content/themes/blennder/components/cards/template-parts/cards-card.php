<?php
	$show_image = get_has_field( 'cards_show_images', false );
	$body_class = 'card-body';
	$media_size = 'blog_feed';
	$img_pos = get_has_field( 'cards_image_position', '' );
	if( $show_image === true ){
		$img_class = 'card-img-top';
		//Set classes for the card body and card image based on the position field.
		if( $img_pos === 'cover' ) {
			$img_class = 'card-img';
			$body_class = 'card-img-overlay';
			$media_size = 'blog_card';
		}
	}
?>
<div <?php card_attr( $card ); ?>>
	<?php if( has_field( 'cards_show_images' ) && $fields['cards_show_images'] && has_field( 'card_image', $card )
	&& $fields['cards_image_position'] === 'top'
): ?>
		<?php acf_image('card_image', $media_size, [ 'class' => $img_class ], $card ); ?>
	<?php endif; ?>
	<div class="<?php echo $body_class; ?>">
		<span class="card-subtitle">
			<?php acf_text('card_sub_header', $card); ?>
		</span>
		<h3 class="card-title">
			<?php acf_text('card_header', $card); ?>
		</h3>
		<?php acf_wysiwyg('card_content', ['class'=>['card-text']], $card ); ?>
		<?php acf_link( 'card_link', [ 'class' => [ 'card-link', 'btn', 'btn-primary', 'stretched-link', ( $img_pos !== 'cover' ) ? 'mt-auto' : null ] ], $card ); ?>
	</div>

</div>
