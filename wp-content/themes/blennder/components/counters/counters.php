<div <?php component_row(); ?>>

	<?php include component_part_path('counters-heading'); ?>

	<?php if ( has_field( 'counters' ) ): ?>

		<div <?php counters_layout_column('right'); ?>>
			<div <?php counters_grid_attr(); ?>>

				<?php foreach( $fields['counters'] as $counter ): ?>

					<div <?php counters_card_attr(); ?>>
						<?php if(has_field('counter_icon', $counter)): ?>
						<div class="card-header py-sm-down-0 px-3 px-md-4 px-xl-5">
							<i class="fal fa-<?php acf_text('counter_icon', $counter); ?>"></i>
						</div>
						<?php endif; ?>
						<div class="card-body p-3 px-md-4 px-xl-5">
							<?php if( has_field('counter_number', $counter) ): ?>
								<span id="counters__number-<?php echo uniqid(); ?>" class="counters__number" data-counter-number="<?php acf_text('counter_number', $counter); ?>" data-config="<?php counters_config( $counter ); ?>">
									<?php acf_text('counter_start_val', $counter); ?>
								</span>
							<?php endif; ?>
							<h5 class="counters__title">
								<?php acf_text('counter_title', $counter); ?>
							</h5>
						</div>
					</div>

				<?php endforeach; ?>

			</div>
		</div>

	<?php endif; ?>
</div>