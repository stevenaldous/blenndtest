<?php
/**
 * The 404 template file.
 */

get_header(); ?>

<?php
	$attr = ['class' => ['error-404']];
	$theme = get_field( '404_text_theme', 'options' ) ?: 'dark';

	if( $bg = get_field( '404_background_image', 'options' ) ) {
		$attr['style'] = sprintf( 'background-image: url(%s);', $bg );
		$attr['class'][] = 'error-404--bg-img';
	}

	if( $theme ) {
		$attr['class'][] = 'error-404--' . $theme;
	}
?>

<main id="main" class="site-main" role="main">
	<section <?php html_atts($attr);?> >
		<div class="container h-100 py-5">
			<div class="row align-content-center justify-content-center text-center h-100">
				<div class="col-auto">
					<?php
						$header_attr = [];
						if( get_field('404_header_style', 'options') ){
							$header_attr['class'][] = get_field('404_header_style', 'options');
						}
						if( get_field('404_header_custom_class', 'options') ) {
							$header_attr['class'][] =  sanitize_text_field( get_field('404_header_custom_class', 'options') );
						}
						$tag = get_field('404_header_tag', 'options') ?: 'h1';
						the_tag( $tag, $header_attr, get_field('404_header', 'options') ?: 'Looks like you\'re lost' );
					?>

					<?php if(get_field('404_subheading', 'options')) : ?>
						<div class="h4 mb-4 mb-md-5">
							<?php the_field('404_subheading', 'options'); ?>
						</div><!-- .lead -->
					<?php else: ?>
						<p class="h4 mb-4 mb-md-5">We can’t seem to find the page that you’re looking for.</p>
					<?php endif;?>

					<?php if( $link = get_field('404_link', 'options') ) : ?>
						<a class="btn btn-outline-<?php echo $theme; ?>" href="<?php echo $link['url']; ?>" title="<?php echo $link['title']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
					<?php else:?>
						<a class="btn btn-outline-<?php echo $theme; ?>" href="/" title="Return Home">Return Home</a>
					<?php endif;?>

				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section>
</main> <!-- #main -->

<?php get_footer(); ?>
