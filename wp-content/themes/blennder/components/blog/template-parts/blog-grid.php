<?php include component_part_path( 'blog-heading' ); ?>

<div <?php component_container();?> >

	<div <?php component_card_deck( 'blog_cards_per_view_' ); ?> >

		<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>

			<?php include component_part_path( 'blog-card' ); ?>

		<?php endwhile; ?>

	</div>

</div>
