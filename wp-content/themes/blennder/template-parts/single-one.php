<?php
	the_component( 'hero', [
		'component_header'     => get_the_title(),
		'component_sub_header' => ( get_the_category() ) ? get_primary_term() : ''
	] );
?>

<section class="py-4 py-md-5 py-lg-6">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10 col-lg-8">

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'post single__post' ); ?>>

					<div class="entry-meta d-flex justify-content-between mb-4 mb-md-5">
						<div class="entry-meta-share"><?php blennder_share_post(); ?></div>
						<div class="entry-meta-posted-on"><?php blennder_posted_on(); ?></div>
					</div><!-- .entry-meta -->

					<div class="entry-content">
						<?php
							the_content();

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

				</article> <!-- #section -->

			</div>
		</div>
	</div><!-- #container -->
</section>
