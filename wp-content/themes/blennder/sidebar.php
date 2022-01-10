<section class="sidebar">
	<ul class="list-group">
		<li class="list-group-item" id="categories">
			<h6><?php _e('Categories'); ?></h6>
			<ul class="list-unstyled">
				<?php
					wp_list_categories(array(
						'title_li' => ''
					));
				?>
			</ul>
		</li>


		<li class="list-group-item" id="archives">
			<h6><?php _e('Archives'); ?></h6>
			<ul class="list-unstyled">
				<?php
					wp_get_archives(array(
						'type' => 'monthly'
					));
				?>
			</ul>
		</li>


		<li class="list-group-item" id="tags">
			<h6><?php _e('Tag Cloud'); ?></h6>
			<ul class="list-unstyled">
				<li><?php wp_tag_cloud( ); ?></li>
			</ul>
		</li>
	</ul>
</section>