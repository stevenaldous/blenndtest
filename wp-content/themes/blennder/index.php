<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 */

get_header(); ?>

<main id="main" class="site-main" role="main">

	<?php the_component( 'hero' ); ?>

	<section class="section py-4 py-md-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-9 col-xl-8">
					<article id="post-<?php the_ID(); ?>" <?php post_class('py-md-4 py-lg-5'); ?>>
						<?php
							if ( have_posts() ) :
								while ( have_posts() ) : the_post();
									the_content();
								endwhile;
							else :
								get_template_part( 'template-parts/content', 'none' );
							endif;
						?>
					</article>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- #container -->
	</section> <!-- #section -->
</main><!-- #main -->

<?php get_footer(); ?>
