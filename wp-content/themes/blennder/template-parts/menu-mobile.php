<div class="collapse navbar-collapse mobile-align-<?php echo the_theme_option( 'mobile_flyout_align' ); ?>" id="mobile">
	<div id="mobileMenuContainer" class="container d-flex flex-column align-items-<?php echo _align_to_flex( ( get_theme_option( 'mobile_flyout_align' ) ) ?? 'left' ); ?>">
		<?php blennder_search_form([
			'form_class' => 'searchform my-2 my-lg-0 mr-md-2',
			'button'     => [
				'class' => 'btn btn-light',
				'text'  => '<i class="far fa-chevron-right"></i>',
			],
		]); ?>
		<?php theme_menu( [ 'theme_location' => 'mobile', 'menu_class' => 'navbar-nav', ] ); ?>
		<?php acf_single_link( get_theme_option( 'header_link' ) ?? [], [ 'class' => 'btn btn-dark w-100 my-2' ] ); ?>
		<?php theme_login_button(); ?>
		<?php phone_link( '', [ 'class' => 'nav-link mt-3' ] ); ?>
		<?php email_link( '', [ 'class' => 'nav-link' ] ); ?>
		<?php social_media_icons(); ?>
	</div>
</div>
