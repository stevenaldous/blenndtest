<article id="component__blog">
	<div class="sg-example">
		<?php
			$args      = array(
				'no_found_rows'       => true,
				'ignore_sticky_posts' => true,
				'posts_per_page'      => 2,
			);
			$the_query = new WP_Query( $args );
		?>
		<?php if ( $the_query->have_posts() ) : ?>
			<div class="blog-feed blog-feed--list-view">
				<div class="card-deck">
					<?php
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						?>
						<?php get_template_part( 'template-parts/content', 'post' ); ?>
					<?php endwhile; ?>
				</div>
			</div>

			<?php wp_reset_query(); ?>
		<?php endif; ?>

	</div>
	<div class="sg-code">
		<?php echo code_output(
			'<div class="blog-feed blog-feed--list-view">' . PHP_EOL .
			'    <div class="card-deck">' . PHP_EOL .
			'        <!-- Blog Card -->' . PHP_EOL .
			'        <div id="blog-post-xxxx" class="blog-post card">' . PHP_EOL .
			'            <img width="600" height="400" src="..." class="card-img-top" alt="..." loading="lazy">' . PHP_EOL .
			'            <div class="card-body">' . PHP_EOL .
			'                <div class="card-subtitle blog-card__catgeory">...</div>' . PHP_EOL .
			'                <h2 class="card-title blog-card__title">...</h2>' . PHP_EOL .
			'                <div class="card-text blog-card__excerpt">' . PHP_EOL .
			'                    <p>...</p>' . PHP_EOL .
			'                </div>' . PHP_EOL .
			'                <a class="card-link btn btn-primary stretched-link mt-auto" href="#">Read More</a>' . PHP_EOL .
			'            </div>' . PHP_EOL .
			'        </div>' . PHP_EOL .
			'' . PHP_EOL .
			'    </div>' . PHP_EOL .
			'</div>'
		);?>
	</div>
</article>
