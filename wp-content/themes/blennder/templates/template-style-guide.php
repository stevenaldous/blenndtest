<?php
/**
 * Template Name: Style Guide
 */
?>

<?php get_header(); ?>

<?php
	$sections = [
		'Branding' => [
			'Logo',
			'Favicon',
		],
		'Typography' => [
			'Fonts',
			'Headings',
			'Display Headings',
			'Paragraphs',
			'Lead Text',
			'Blockquotes',
			'Lists',
			'Horizontal Rules',
			'Tabular Data',
			'Inline Elements',
		],
		'Tables' => [],
		'Icons' => [
			'Icons Theme',
			'Icons Social',
		],
		'Colors' => [
			'Theme',
			'Grays',
		],
		'Buttons' => [
			'Solid',
			'Outline',
			'Sizes',
			'Text Link',
		],
		'Cards' => [],
		'Blog' => [],
		'Pagination' => [],
		'Modals' => [],
		'Accordions' => [],
		'Tabs' => [],
		'Forms' => [],
	];
?>

<main id="main" class="style-guide" role="main">

	<div class="container d-md-none">
		<article class="style-guide__intro mb-4">
			<h2><?php the_title(); ?></h2>
		</article>
	</div><!-- .container -->

	<aside class="style-guide__sidebar">
		<div class="style-guide__sidebar-inner">
			<header class="px-2 py-3 p-lg-4 pt-lg-5 d-none d-md-block">
				<a class="h4 text--dark" href="#"><?php the_title(); ?></a>
			</header>
			<nav class="style-guide__nav nav flex-column">
				<div class="style-guide__nav-inner">

					<?php foreach($sections as $section => $sub_sections): ?>
						<a class="nav-link" href="#<?php echo sanitize_title($section); ?>" role="button" aria-expanded="false" aria-controls="collapseExample"><?php echo ucfirst($section);?> <i data-toggle="collapse" href="#<?php echo 'collapse-'. sanitize_title($section); ?>" class="far fa-chevron-right"></i></a>
						<?php if( ! empty( $sub_sections ) ): ?>
						<div class="style-guide__sub-nav collapse" id="collapse-<?php echo sanitize_title($section); ?>">
							<ul class="">
								<?php foreach($sub_sections as $sub_section): ?>
									<li><a href="#<?php echo sanitize_title($section) . '__' . sanitize_title($sub_section); ?>" data-scroll-offset="-50"><?php echo $sub_section; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>

						<?php endif; ?>
					<?php endforeach; ?>

				</div><!-- .style-guide__nav-inner -->
			</nav>
		</div><!-- .style-guide__sidebar-inner -->
	</aside><!-- .style-guide__sidebar -->

	<section class="style-guide__content p-md-4 p-lg-5">
		<div class="container style-guide__container">

			<?php the_content(); ?>

			<?php foreach($sections as $section => $sub_sections) : ?>
				<article id="<?php echo sanitize_title($section); ?>">
					<a class="anchor" id="<?php echo sanitize_title($section); ?>"></a>
					<h2 class="display-4"><?php echo $section; ?></h2>
					<hr>
					<?php get_template_part('template-parts/style-guide/' . strtolower($section)); ?>
				</article>
			<?php endforeach; ?>

		</div>
	</section>

</main><!-- #main -->

<?php get_footer(); ?>
