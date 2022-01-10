<?php include component_part_path('team-heading'); ?>

<div <?php component_container(); ?>>
	<div class="team--list">

		<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>

			<?php include component_part_path( 'team-list-card' ); ?>

		<?php endwhile; ?>

	</div>
</div>
