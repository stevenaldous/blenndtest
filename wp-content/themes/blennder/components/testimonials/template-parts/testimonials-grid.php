<div <?php component_card_deck( 'testimonials_cards_per_view_' ); ?> >

	<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>

		<?php include component_part_path( 'testimonial-shadowed-boxes' ); ?>

	<?php endwhile; ?>

</div>
