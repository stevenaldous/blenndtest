<?php $title_layout_columns = (has_field('cards_title_layout_columns') && $fields['cards_title_layout_columns']); ?>
<div class="container mb-4 mb-md-5">
	<?php if($title_layout_columns): ?>
	<div class="row align-items-center">
		<div class="col-md">
	<?php endif;?>
			<?php component_sub_header(); ?>
			<?php component_header(); ?>
		<?php if($title_layout_columns): ?>
		</div>
		<div class="col-md col-lg-5">
		<?php endif;?>
			<?php component_text(); ?>
	<?php if($title_layout_columns): ?>
		</div>
	</div>
	<?php endif;?>
</div>