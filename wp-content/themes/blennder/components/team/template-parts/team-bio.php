<!-- Modal -->
<div class="modal fade team__modal" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="teamModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="row">
				<div class="col-lg-5 pr-md-0">
					<div class="modal-img h-100" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
						<button type="button" class="close d-md-none" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>
				<div class="col-lg pl-lg-5">
					<div class="modal-header">
						<h4 class="modal-title" id="teamModalLabel">Name</h4>
						<button type="button" class="d-none d-md-inline close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-meta"></div>
					<div class="modal-body">Bio</div>
				</div>
			</div>
		</div>
	</div>
</div>