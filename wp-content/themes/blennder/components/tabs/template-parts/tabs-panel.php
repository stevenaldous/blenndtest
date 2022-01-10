<?php $panel_count = 1; ?>

<div class="tabs__content tab-content">

	<?php foreach( $fields['tabs'] as $panel ): ?>

		<div <?php tabs_panel_attr([ 'panel' => $panel, 'count' => $panel_count, 'id' => $id ]); ?>>
			<div class="row">

				<?php if( has_field( 'panel_image', $panel ) ): ?>
					<div class="col-12 col-lg-6 tabs__panel-img-col">
						<?php acf_image('panel_image', 'large', ['class' => 'tabs__panel-image'], $panel );?>
					</div>
				<?php endif; ?>

				<div <?php tabs_copy_col_attr( $panel ); ?>>
					<?php if( has_field( 'panel_title', $panel ) ): ?>
						<h4 class="panel-title">
							<?php acf_text('panel_title', $panel); ?>
						</h4>
					<?php endif; ?>

					<?php if( has_field( 'panel_content', $panel ) ): ?>
						<div class="tabs__panel-content">
							<?php acf_wysiwyg( 'panel_content', [], $panel ); ?>
						</div>
					<?php endif; ?>

					<?php acf_link('panel_link', ['class'=>'btn btn-primary'], $panel); ?>
				</div>

			</div>
		</div>
	<?php $panel_count++; ?>
	<?php endforeach; ?>
</div>