<div <?php testimonials_card_attr(); ?>>
	<div class="testimonial__card-inner">
		<div class="testimonial__meta">
			<?php if( has_post_thumbnail( ) ): ?>
				<div class="testimonial__photo">
					<?php echo get_the_post_thumbnail(null, [ 60, 60 ], [ 'class' => 'testimonial__img' ] ); ?>
				</div>
			<?php endif; ?>

			<div class="testimonial__author-stars">
				<?php if( $num_stars = get_field( 'testimonial_stars') ): ?>
				<div class="testimonial__stars">
					<?php for ($x = 1; $x <= $num_stars; $x++): ?>
						<i class="testimonial__star fas fa-star"></i>
					<?php endfor; ?>
				</div>
				<?php endif; ?>
				<?php if( get_field( 'testimonial_author', get_the_ID() ) ): ?>
					<p class="testimonial__author mb-0">
						<?php the_field( 'testimonial_author', get_the_ID() ); ?>
					</p>
				<?php endif; ?>
			</div>
		</div>
		<div class="testimonial__content">
			<?php the_content(); ?>
		</div>
	</div>
</div>
