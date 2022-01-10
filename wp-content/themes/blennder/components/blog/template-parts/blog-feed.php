<?php include component_part_path( 'blog-heading' ); ?>

<div <?php component_container();?> >
	<div class="blog-feed blog-feed--list-view">

		<div class="card-deck">
			<?php while( $the_query->have_posts() ): $the_query->the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'post' ); ?>

			<?php endwhile; ?>
		</div><!-- .card-deck -->

	</div>
</div>