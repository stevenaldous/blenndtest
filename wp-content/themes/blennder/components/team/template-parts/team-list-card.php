<div class="card mb-4 mb-md-5">
	<?php if( has_post_thumbnail() ): ?>
		<?php the_post_thumbnail( 'team', [ 'class' => 'card-img-top' ] ); ?>
	<?php else: ?>
		<img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/screenshot.jpg" alt="<?php the_title(); ?>">
	<?php endif; ?>

	<div class="card-body">
		<h3 class="card-title h2">
			<?php the_title(); ?>
		</h3>
		<div class="card-subtitle">
			<?php the_field('team_position_title',get_the_ID());	?>
		</div>
		<div class="card-text">
			<?php the_excerpt(); ?>
		</div>

		<a class="card-link btn btn-primary mt-auto mb-4 <?php team_bio_type_class(); ?>" href="<?php the_permalink(); ?>" title="Read <?php the_title(); ?> Bio" data-id="<?php the_ID(); ?>">Read Bio</a>

		<?php if(get_field('team_linkedin',get_the_ID())) : ?>
		<a class="team__social h5" href="<?php the_field('team_linkedin',get_the_ID())['url']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
		<?php endif; ?>
	</div>
</div>
