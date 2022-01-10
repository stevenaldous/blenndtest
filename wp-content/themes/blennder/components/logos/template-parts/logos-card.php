<div <?php logos_card_attr(); ?>>
	<?php if( has_field( 'logo_link', $logo )): ?>
		<a href="<?php echo $logo['logo_link']['url'];?>" title="<?php echo $logo['logo_link']['title'];?>">
	<?php endif; ?>
	<?php echo wp_get_attachment_image($logo['logo_image']['id'], 'logo', false, [ 'class' => 'card-img' ] ); ?>
	<?php if( has_field( 'logo_link', $logo )): ?>
		</a>
	<?php endif; ?>
</div>
