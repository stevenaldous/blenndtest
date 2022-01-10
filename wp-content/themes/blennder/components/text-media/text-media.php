<div <?php component_row(); ?>>
	<div <?php text_media_media_col_attr(); ?>>
		<?php if( has_field('text_media_media_type') && $fields['text_media_media_type'] === 'image'): ?>
			<?php acf_background_image('text_media_image', text_media_image_size(), text_media_media_attr() );?>
		<?php elseif( has_field('text_media_media_type') && $fields['text_media_media_type'] === 'video'): ?>
			<?php include component_part_path('text-media-video'); ?>
		<?php endif; ?>
	</div>
	<div <?php text_media_content_col_attr(); ?>>
		<div <?php text_media_content_attr(); ?>>
			<?php component_sub_header(); ?>
			<?php component_header(); ?>
			<div data-aos="fade-down" class="text-media__text">
				<?php component_text(); ?>
			</div>
			<?php acf_link('text_media_button', [ 'class' => 'btn btn-primary', 'data-aos' => 'fade-down' ] ); ?>
		</div>
	</div>
</div>
