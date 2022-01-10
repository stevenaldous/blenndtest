<?php
/**
 * The single template file.
 */

get_header(); ?>

<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/single', get_field('blog_single_template', 'options') ?: 'one' ); ?>

			<?php get_template_part( 'template-parts/related-posts' ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

</main> <!-- #main -->

<?php get_footer(); ?>
