<section class="hero-single pb-md-5 pb-xl-6">

	<div class="row h-100 no-gutters">

		<div class="col-md px-3 px-md-0">
			<div class="padding-left-dynamic py-4 py-md-5 pr-md-4 pr-lg-5 pr-xl-6 d-flex flex-column justify-content-center h-100">
				<span class="hero__pre-header">
					<?php echo ( get_the_category() ) ? get_primary_term() : ''; ?>
				</span><!-- .hero__pre-header -->

				<h1 class="hero-single__header display-1"><?php the_title(); ?></h1>

				<div class="entry-meta">
					<div class="entry-meta-posted-on mt-3 mt-md-4 pt-md-2"><?php blennder_posted_on(); ?></div>
					<div class="entry-meta-share mt-3 mt-md-4 pt-md-2"><?php blennder_share_post(); ?></div>
				</div><!-- .entry-meta -->
			</div><!-- .padding-left-dynamic -->
		</div><!-- .col-md -->


		<div class="col-md-5 px-0 hero-single__image" style="background-image:url(<?php the_post_thumbnail_url('large', ['class'=>'single__featured-image']); ?>);">
			<?php the_post_thumbnail('blog_feed', ['class'=>'w-100 d-md-none single__featured-image']); ?>
		</div>

	</div><!-- .row -->

</section><!-- .hero-single -->

<section class="bg-light py-sm-5 py-xl-6">
	<div class="container px-xs-down-0">
		<div class="row justify-content-center no-gutters">
			<div class="col-lg-11 col-xl-10">

				<article id="post-<?php the_ID(); ?>" <?php post_class( 'post single__post px-3 py-4 px-sm-4 p-md-5 px-lg-6 bg-white' ); ?>>

					<div class="entry-content py-lg-4">
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
