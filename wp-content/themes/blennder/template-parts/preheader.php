<nav id="top-nav" class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Top Menu">
	<div class="<?php the_theme_option( 'header_container' ); ?>">
		<div class="row w-100 no-gutters flex-nowrap justify-content-between align-items-center">
			<div class="col col-md-auto d-<?php preheader_mobile_show( 'contact' ); ?> d-md-inline-flex justify-content-center">
				<div class="navbar-nav">
					<?php phone_link( '', [ 'class' => 'nav-link' ] ); ?>
					<?php email_link( '', [ 'class' => 'nav-link' ] ); ?>
				</div>
			</div>
			<div class="col-auto d-<?php preheader_mobile_show( 'menu' ); ?> d-md-inline-flex">
				<?php theme_menu( [ 'theme_location' => 'preheader' ] );?>
			</div>
			<div class="col-auto d-<?php preheader_mobile_show( 'search' ); ?> d-md-inline-flex">
				<?php
				theme_login_link( 'preheader' );
				if( 'preheader' === get_theme_option( 'search_location' ) ) {
					blennder_search_form([
						'form_id' => 'preheader-search',
						'form_class' => 'searchform my-2 my-lg-0 mr-md-2',
						'input_id' => 'preheader-search-input',
						'aria-describedby' => 'preheader-search-btn',
						'button'     => [
							'class' => 'btn btn-light',
							'text'  => '<i class="far fa-chevron-right"></i>',
						],
					]);
				}
				theme_header_link( 'preheader', 'btn btn-primary' );
				?>
			</div>
		</div>
	</div>
</nav>
