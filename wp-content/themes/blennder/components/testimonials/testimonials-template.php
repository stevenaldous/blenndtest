<section <?php component_attributes(); ?> >

	<?php component_anchor(); ?>

	<?php if( $fields['testimonials_card_template'] == 'semi-transparent' ): ?>
		<div class="testimonial-container padding-left-dynamic">
	<?php else: ?>
		<div <?php component_container(); ?>>
	<?php endif; ?>
		<?php component_template(); ?>
	</div>

</section>