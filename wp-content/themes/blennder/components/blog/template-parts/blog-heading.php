<div class="container mb-4 mb-md-5">
	<div class="row align-items-center">
		<div class="col-md">
			<?php component_sub_header(); ?>
			<?php component_header(); ?>
			<?php component_text(); ?>
			<a class="text-uppercase font-weight-bold small mt-3" href="<?php echo get_permalink(get_option('page_for_posts')); ?>"> <i class="fas fa-th-large mr-1"></i> View All</a>
		</div>
		<div class="col-md-6 col-xl-5">
			<div class="row mx-ms-n2 mx-xl-n3">
				<div class="col-md px-md-2 px-lg-3">
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
				</div>
				<div class="col-md px-md-2 px-xl-3">
					<div class="blog-filter__taxonomy my-2 my-lg-0" id="categories">
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
				</div>
			</div>
		</div>
	</div> <!-- .row -->
</div> <!-- .container -->