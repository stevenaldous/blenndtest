<?php include component_part_path('cards-title'); ?>

<div <?php component_container(); ?>>
	<div <?php component_card_deck( 'cards_cards_per_view_' ); ?> >
		<?php foreach( $fields['cards'] as $card ): ?>
			<?php include component_part_path( 'cards-card' ); ?>
		<?php endforeach; ?>
	</div>
</div>
