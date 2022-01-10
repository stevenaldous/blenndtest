<?php
/**
 * The single post all fields template file.
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
	<?php
		$options = array(
			'component_header' =>  get_the_title(),
			'component_header_style' => 'display-1',
			'hero_size' => 'md',
		);
		if( has_post_thumbnail() ){
			$options['background_type'] = 'image';
			$options['background_image'] = array( 'url'=> get_the_post_thumbnail_url() );
			$options['background_image_attachment'] = 'fixed';
		}
		the_component( 'hero', $options );
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'post py-3 py-md-5' ); ?>>
		<div class="container">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); ?>
			<div class="row justify-content-center">
				<div class="col-md-12 col-xl-10">
					<div class="row">
						<div class="col-md-8 col-lg-9">

							<div class="entry-meta d-lg-flex justify-content-between border-bottom pb-3 mb-3">
								<span class="entry-meta-posted-in"><?php blennder_posted_in(); ?></span>
								<span class="entry-meta-postd-on"><?php blennder_posted_on(); ?></span>
							</div><!-- .entry-meta -->

							<div class="entry-content">
								<?php the_content(); ?>
								<?php $fields = get_fields(); ?>
									<h2>Fields</h2>
									<div id="acf-text" class="field my-3">
										<?php acf_text( 'text' ); ?>
									</div>
									<div id="acf-wysiwyg" class="field my-3">
										<?php acf_wysiwyg( 'text_area', [ 'class' => 'wysiwyg' ]  ); ?>
									</div>
									<div id="acf-link" class="field my-3">
										<?php acf_link( 'link', [ 'class' => 'link' ] ); ?>
									</div>
									<div id="acf-image" class="field my-3">
										<?php acf_image( 'image', 'full' ); ?>
									</div>
									<div id="acf-image-alt" class="field my-3">
										<?php $fields[ 'image-alt' ] = 'https://picsum.photos/200/300'; ?>
										<?php acf_image( 'image-alt', 'full', [ 'class' => 'image-alt', 'alt' => 'image-alt' ], [ 'image-alt' => 'https://picsum.photos/200/300' ] ); ?>
									</div>
									<div id="acf-gallery" class="field my-3">
										<?php acf_gallery( 'gallery', 'full', [ 'class' => 'gallery-item' ] ); ?>
									</div>
									<div id="acf-background-image" class="field my-3">
										<?php acf_background_image( 'image' ); ?>
									</div>
									<?php
									wp_link_pages(
										array(
											'before' => '<div class="page-link">Pages:',
											'after'  => '</div>',
										)
									);
								?>
							</div><!-- .entry-content -->

							<div class="entry-utility">
								<?php edit_post_link( 'Edit Post<span class="edit-link"><i class="far fa-long-arrow-right"></i></span>' ); ?>
							</div><!-- .entry-utility -->
						</div>
						<div class="col-md-4 col-lg-3">
							<?php get_sidebar();?>
						</div>
					</div>

					<div class="entry-meta mt-3">
						<p class="entry-meta-posted-in"><?php blennder_posted_in('tag'); ?></p>
					</div>

					<div class="navigation d-flex justify-content-between border-top border-bottom py-3">
						<div class="nav-previous">
							<?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'blennder' ) . '</span> %title' ); ?>
							</div>
						<div class="nav-next">
							<?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'blennder' ) . '</span>' ); ?>
						</div>
					</div><!-- #nav-below -->

					<?php
						/* Uncomment if theme supports post comments */
						//comments_template( '', true );
					?>

					<?php get_template_part( 'template-parts/related-posts' ); ?>
				</div>
			</div>
			<?php
				endwhile;
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?>
		</div><!-- #container -->
	</article> <!-- #section -->
</main> <!-- #main -->

<?php get_footer(); ?>
