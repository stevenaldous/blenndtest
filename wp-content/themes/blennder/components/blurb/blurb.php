<?php $blurb_icon_position = get_has_field( 'blurb_icon_position', 'top' ); ?>

<?php include component_part_path( 'blurb-header' ); ?>

<div <?php component_card_deck( 'blurbs_per_view_' ); ?>>

	<?php foreach($fields['blurb_blurbs'] as $blurb): ?>

		<div <?php blurb_attr( $blurb ); ?>>

			<?php if( get_has_field('blurb_icon_type', 'none', $blurb) !== 'none'): ?>

				<div class="blurb__graphic">

					<?php if($blurb['blurb_icon_type'] === 'image' && has_field('blurb_image_icon', $blurb)): ?>
						<?php echo wp_get_attachment_image($blurb['blurb_image_icon']['id'], [80,80], array('class'=>'card-img-top') )?>
					<?php endif; ?>

					<?php if($blurb['blurb_icon_type'] === 'fa' && has_field('blurb_font_awesome_icon', $blurb)): ?>
						<i class="blurb__icon <?php echo $blurb['blurb_font_awesome_icon_style']; ?> fa-<?php echo $blurb['blurb_font_awesome_icon']; ?>"></i>
					<?php endif; ?>

					<?php if( $blurb_icon_position === 'inline' ): ?>
						<?php blurb_title( $blurb ); ?>
					<?php endif; ?>

				</div>

			<?php endif; ?>

			<div class="card-body">

				<?php if ( $blurb_icon_position !== 'inline'): ?>
					<?php blurb_title( $blurb ); ?>
				<?php endif; ?>

				<div class="card-text">
					<?php acf_wysiwyg('blurb_content', [], $blurb); ?>
				</div>

				<?php acf_link( 'blurb_button', [ 'class' => ['blurb__link', 'btn-text', 'text-primary' ] ], $blurb); ?>

			</div>

		</div>

	<?php endforeach; ?>

</div>
