<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( get_theme_option( 'use_preheader' ) ? 'has-preheader' : '' ); ?>>
	<?php wp_body_open(); ?>
	<header id="header" <?php header_class(); ?>>
		<?php theme_preheader()	?>
		<nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
			<div class="<?php the_theme_option( 'header_container' ); ?>">
				<div class="row w-100 no-gutters">
					<?php $dropdown = get_theme_option( 'dropdown_style' ); ?>
					<div class="<?php echo theme_header_column( 'logo' ); ?>">
						<div class="navbar-brand">
							<?php the_logo(); ?>
						</div>
					</div>
					<div class="<?php echo theme_header_column( 'menu' ); ?>">
						<?php theme_hamburger( 'secondary', 'left' ); ?>
						<?php theme_hamburger( 'mobile', 'mobile-left', true ); ?>
						<div id="mainNavbarMenu" class="d-none d-md-block">
							<?php theme_menu( 'primary' ); ?>
						</div>
					</div>
					<div class="<?php echo theme_header_column( 'links' ); ?>">
						<?php
						theme_search( 'header' );
						theme_login_link( 'header' );
						theme_hamburger( 'secondary', 'right' );
						theme_hamburger( 'mobile', 'mobile-right', true );
						theme_header_link( 'header' );
						theme_hamburger( 'secondary', 'far-right', false, 'order-md-last' );
						?>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<?php if( 'header' === get_theme_option( 'search_location' ) ) : ?>
		<div id="header-search" class="shadow w-100 search-<?php the_theme_option( 'search_design' ); ?>">
			<div class="btn-close">
				<i class="fa fa-times"></i>
			</div>
			<div class="d-flex flex-column align-items-center justify-content-center h-100 header-search-wrapper">
				<h3>Search</h3>
				<?php blennder_search_form([
					'form_id' => 'header-search',
					'form_class' => 'searchform my-2 my-lg-0 mr-md-2',
					'input_id' => 'header-search-input',
					'aria-describedby' => 'header-search-btn',
					'button'     => [
						'class' => 'btn btn-light',
						'text'  => '<i class="far fa-chevron-right"></i>',
					],
				]); ?>
			</div>
		</div>
	<?php endif; ?>
	<?php
	get_template_part( 'template-parts/menu', 'secondary' );
	get_template_part( 'template-parts/menu', 'mobile' );
