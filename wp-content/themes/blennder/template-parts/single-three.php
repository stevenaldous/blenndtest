<?php
	the_component( 'hero', [
		'component_header'     => get_the_title(),
		'component_sub_header' => ( get_the_category() ) ? get_primary_term() : '',
		'hero_size' => 'auto',
		'hero_text_positioning' => 'top center',
		'background_type' => 'color',
		'background_color' => '#000000',
	] );
?>
<section class="pb-4 pb-md-5 pb-lg-6">

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-11 col-xl-10">

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'post single__post' ); ?>>

					<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'single__featured-image' ] ); ?>

					<div class="row justify-content-center">
						<div class="col-md-11 col-xl-10">

							<div class="entry-meta d-flex justify-content-between my-4 my-lg-5 py-md-2 pb-lg-3">
								<div class="entry-meta-share"><?php blennder_share_post(); ?></div>
								<div class="entry-meta-posted-on"><?php blennder_posted_on(); ?></div>
							</div><!-- .entry-meta -->

							<div class="entry-content">
								<?php
									the_content();

									wp_link_pages(
										array(
											'before' => '<div class="page-link">Pages:' ),
											'after'  => '</div>',
										)
									);
								?>
							</div><!-- .entry-content -->

							<div class="entry-utility">
								<?php edit_post_link( 'Edit Post<span class="edit-link"><i class="far fa-long-arrow-right"></i></span>' ); ?>
							</div><!-- .entry-utility -->

						</div><!-- .col-md-10 col-xl-9 -->
					</div><!-- .row -->

				</article> <!-- #section -->

			</div>
		</div>
	</div><!-- #container -->

</section>
