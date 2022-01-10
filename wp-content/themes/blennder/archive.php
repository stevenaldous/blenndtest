<?php
/**
 * The archive template file.
 */


$args = [
	'hero_size'        => 'sm',
	'component_header' => get_the_archive_title(),
];

get_header(); ?>

<main id="main" class="site-main" role="main">

	<?php the_component( 'hero', $args ); ?>

	<section class="blog py-3 py-md-5">
		<?php if( have_posts() ): ?>
			<div class="container">

				<?php get_template_part( 'template-parts/blog-filter-search' ); ?>

				<div class="blog-feed mb-4 <?php the_blog_feed_view_class(); ?>">
					<div class="card-deck">
						<?php while( have_posts() ): the_post(); ?>

							<?php get_template_part('template-parts/content', 'post'); ?>

						<?php endwhile; ?>
					</div><!-- .card-deck -->
				</div>

				<?php
					the_posts_pagination(array(
						'prev_text' => '<i class="smaller far fa-chevron-left"></i> <span>Prev</span>',
						'next_text' => '<span>Next</span> <i class="smaller far fa-chevron-right"></i>',
					));
				 ?>
			</div>
		<?php else: ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
	</section>
</main>

<?php get_footer(); ?>
