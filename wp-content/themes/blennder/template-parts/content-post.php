<div id="blog-post-<?php the_ID(); ?>" <?php post_class('blog-post card'); ?> data-mobile="swiper-slide">
	<?php if( has_post_thumbnail() ): ?>
		<?php the_post_thumbnail('blog_feed', ['class' => 'card-img-top']); ?>
	<?php else: ?>
		<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/screenshot.jpg" alt="<?php the_title(); ?>">
	<?php endif; ?>
	<div class="card-body">
		<?php if( get_the_category() ): ?>
		<div class="card-subtitle blog-card__catgeory">
			<?php the_primary_category(); ?>
		</div>
		<?php endif; ?>
		<h2 class="card-title blog-card__title">
			<?php the_title(); ?>
		</h2>
		<div class="card-text blog-card__excerpt">
			<?php the_excerpt(); ?>
		</div>
		<a class="card-link btn btn-primary stretched-link mt-auto" href="<?php the_permalink(); ?>">Read More</a>
	</div>
</div>
