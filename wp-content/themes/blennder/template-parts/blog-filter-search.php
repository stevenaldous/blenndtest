<div class="row mb-4 mb-lg-5 align-items-center justify-content-between">
	<div class="col-md-6 col-lg-4">

		<?php if ( get_field( 'blog_show_search_box', get_option('page_for_posts') ) ): ?>
		<div class="blog-filter__search">
			<?php
				blennder_search_form([
					'form_id' => 'search-blog',
					'input_id' => 'search-blog-btn',
					'aria-describedby' => 'search-blog-submit',
					'button' => ['class'=>'btn btn-light']
				]);
			?>
		</div>
		<?php endif; ?>
	</div>

	<div class="col-md-6 col-lg-5">
		<div class="row align-items-center justify-content-end">

			<?php if ( get_field( 'blog_show_category_taxonomy_dropdown', get_option('page_for_posts') ) ): ?>
				<div class="col">
					<div class="blog-filter__taxonomy" id="categories">
						<?php wp_dropdown_categories( blennder_wp_dropdown_categories() ); ?>
						<script type="text/javascript">
							jQuery(".blog-filter__taxonomy-dropdown").on('change', function(e){
								if ( this.options[this.selectedIndex].value != 0 ) {
									location.href = "<?php echo esc_url( home_url( '/' ) ); ?>?"+this.name+"="+this.options[this.selectedIndex].value;
								}else {
									location.href = "<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>";
								}
							});
						</script>
					</div>
				</div><!-- .col-auto -->
			<?php endif; ?>

			<?php if ( get_field( 'blog_show_view_toggle', get_option('page_for_posts') ) ): ?>
				<?php $view = get_field('blog_default_post_view', get_option('page_for_posts')); ?>
				<div class="col-auto blog-filter__view">
					<a href="#" class="<?php echo ($view === 'grid')? 'active' : ''; ?>" data-blog-view="grid"><i class="fas fa-th"></i></a>
					<a href="#" class="<?php echo ($view === 'list')? 'active' : ''; ?>" data-blog-view="list"><i class="fas fa-list"></i></a>
				</div><!-- .col-auto -->
			<?php endif; ?>

		</div><!-- .row -->
	</div><!-- .row -->
</div>
