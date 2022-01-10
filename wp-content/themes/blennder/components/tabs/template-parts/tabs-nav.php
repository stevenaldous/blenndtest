<?php $tab_count = 1; ?>

<ul class="tabs__nav nav nav-tabs">
	<?php foreach( $fields['tabs'] as $tab ): ?>


		<li class="tabs__nav-item nav-item">
			<a <?php tabs_nav_link_attr([ 'tab' => $tab, 'count' => $tab_count, 'id' => $id ]); ?>>

				<?php if ( has_field( 'tab_image', $tab ) && get_has_field('tab_type', '', $tab ) === 'image' ): ?>
					<div class="tabs__media tabs__media--image">
						<?php acf_image('tab_image', 'medium', ['class' => 'tabs__tab-image'], $tab );?>
					</div>
				<?php endif; ?>

				<?php if ( has_field( 'tab_icon', $tab ) && get_has_field( 'tab_type', '', $tab ) === 'icon' ): ?>
					<div class="tabs__icon-wrap <?php tab_icon_position( $tab ); ?>">
						<div class="tabs__media tabs__media--icon">
							<?php the_tag('i', [ 'class' => [ $tab['tab_icon_style'], 'fa-'.$tab['tab_icon'] ] ], '' ); ?>
						</div>
				<?php endif; ?>

					<?php if ( has_field( 'tab_type', $tab ) && get_has_field( 'tab_type', '', $tab ) !== 'image' ): ?>
						<span class="tabs__label">
							<?php acf_text('tab_label', $tab); ?>
						</span>
					<?php endif; ?>

				<?php if ( has_field( 'tab_icon', $tab ) && get_has_field( 'tab_type', '', $tab ) === 'icon' ): ?>
					</div>
				<?php endif; ?>

			</a>
		</li>
		<?php $tab_count++; ?>
	<?php endforeach; ?>
</ul>