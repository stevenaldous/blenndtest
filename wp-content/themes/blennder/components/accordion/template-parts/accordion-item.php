<?php
	$attr = [
		'id'     => uniqid(),
		'parent' => $parent_id,
		'count'  => $count,
	];
?>

<div <?php accordion_attr(); ?>>
	<div <?php accordion_header_attr( $attr ); ?>>
		<a <?php accordion_button_attr( $attr );?>>

			<?php acf_text( 'accordion_item_title', $accordion_item ); ?>

			<i class="<?php acf_text('accordion_items_icon_type'); ?> fa-<?php acf_text('accordion_items_icon_closed'); ?> float-right icon icon-collapsed"></i>
			<i class="<?php acf_text('accordion_items_icon_type'); ?> fa-<?php acf_text('accordion_items_icon_opened'); ?> float-right icon icon-collapse"></i>
		</a>
	</div>
	<div <?php accordion_content_attr( $attr ); ?>>
		<div class="card-body">
			<?php echo acf_text( 'accordion_item_content', $accordion_item ); ?>
		</div>
	</div>
</div>
