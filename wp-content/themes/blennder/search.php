<?php
/**
 * The search template file.
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
	<section id="search-feed-<?php echo uniqid(); ?>" class="search-feed py-4 py-md-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-11">

					<?php get_template_part('template-parts/search-bar'); ?>

					<?php if( have_posts() ): ?>
						<p class="mb-md-4 mb-lg-5">Results <?php the_search_query_results(); ?> for <span class="font-weight-bold"><?php the_search_query(); ?></span></p>

						<div class="search-feed__results">

							<?php while( have_posts() ): the_post(); ?>

								<?php get_template_part('template-parts/content', 'search'); ?>

							<?php endwhile; ?>

						</div>
					<?php else: ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>

					<div class="search-feed__pagination">
						<?php
							the_posts_pagination(array(
								'prev_text' => '<i class="smaller far fa-chevron-left"></i> <span>Prev</span>',
								'next_text' => '<span>Next</span> <i class="smaller far fa-chevron-right"></i>',
							));
						?>
					</div>
				</div><!-- .col-md-10 -->
			</div><!-- .row -->
		</div>
	</section>
</main>

<?php get_footer(); ?>
