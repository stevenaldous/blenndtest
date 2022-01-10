<?php
declare( strict_types = 1 );

/**
 * Generic Theme Functions.
 */

/**
 * Gets the value of a field if it is not empty. Returns the fallback if field is empty.
 *
 * @since 2.2.0
 *
 * @param string $option   Theme option name
 * @param mixed  $fallback Value to fallback to if the theme option is empty
 *
 * @return mixed The requested theme option.
 */
function get_has_theme_option( string $option, $fallback ) {
	$field = get_theme_option( $option );
	return ! empty ( $field ) ? $field : $fallback;
}

/**
 * Returns the theme option.
 *
 * @since 0.9.0
 *
 * @param string $option The requested theme option.
 * @param string $name (Optional) The theme options name. Default 'options'.
 *
 * @return mixed The theme option.
 */
function get_theme_option( string $option, $name = 'options' ) {
	return get_field( $option, $name );
}

/**
 * Prints the theme option if it's a string.
 *
 * @since 0.9.0
 *
 * @param string $option The requested theme option.
 * @param string $name (Optional) The theme options name. Default 'options'.
 */
function the_theme_option( string $option, $name = 'options' ) {
	$option = get_theme_option( $option, $name );
	if( is_string( $option ) ) {
		echo $option;
	}
}

/**
 * Returns whether the footer social media position and location match.
 *
 * @since 0.9.0
 *
 * @param string $pos Footer social media position.
 * @param string $loc (Optional) Footer social media location.
 *
 * @return bool
 */
function footer_social_media( string $pos, string $loc = '' ) : bool {
	$p = get_theme_option( 'footer_social_media_location' );
	if( $p !== $pos ) {
		return false;
	}
	if( '' === $loc ) {
		return true;
	}
	return $loc === get_theme_option( 'footer_social_media_position' );
}

/**
 * Print the footer social medial text alignment.
 *
 * @since 0.9.0
 */
function footer_legal_text_align() {
	$p = get_theme_option( 'footer_social_media_location' );
	if( 'legal' !== $p ) {
		echo 'center';
		return;
	}
	$l = get_theme_option( 'footer_social_media_position' );
	echo $l === 'left' ? 'right' : 'left';
}

/**
 * @TODO Clean up theme functions
 */

/**
 *
 *
 * @param mixed $args An array of arguments. Or a string of the theme location.
 */
function theme_menu( $args = '' ) {
	if( is_string( $args ) ) {
		$a[ 'theme_location' ] = $args;
		unset( $args );
		$args = $a;
	}
	elseif( is_array( $args ) ) {
		$a = $args;
	}
	else {
		return;
	}

	$defaults = [
		'container' => '',
		'depth' => 2,
		'menu_class' => 'navbar-nav mr-md-4 ml-auto',
		'echo' => true,
		'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
		'walker' => new \App\Setup\BootstrapNavWalker(),
	];
	$args = wp_parse_args( $a, $defaults );
	if( ! isset( $args[ 'theme_location' ] ) ) {
		return;
	}
	wp_nav_menu( $args );
}

function theme_header_column( string $option ) {
	$classes = [
		'col',
		'col-xl-4',
		'col-' . get_theme_option( 'dropdown_style' ),
	];
	if( 'logo' === $option ) {
		$classes[] = 'justify-content-' . theme_logo_alignment();
		$classes[] = 'order-' . theme_logo_location();
	}
	elseif( 'menu' === $option ) {
		$classes[] = 'col-md-auto';
		$classes[] = 'order-' . theme_menu_location();
		$classes[] = 'justify-content-' . theme_menu_alignment();
	}
	elseif( 'links' === $option ) {
		$classes[] = 'order-3';
		$classes[] = 'text-right';
		if( 'right' === get_theme_option( 'menu_text_align' ) ) {
			$classes[] = 'col-md-auto';
		}
		if( ! empty( get_theme_option( 'header_link' ) ) && 'full' === get_theme_option( 'button_design' ) ) {
			$classes[] = 'p-btn-full';
		}
	}
	return implode( ' ', $classes );
}

function theme_login_link( string $location = '' ) {
	if( $location !== get_theme_option( 'login_location' ) ) {
		return;
	}

	$login_link = get_theme_option( 'header_login_link' );
	if( ! $login_link ) {
		return;
	}
	if( is_array( $login_link ) ) {
		$login_link = $login_link[ 'url' ] ?? '';
	}
	?>
	<div class="login-link d-none d-md-flex">
		<a class="d-flex align-items-center" href="<?php echo $login_link; ?>"><i class="fas fa-user"></i></a>
	</div>
	<?php
}

function theme_login_button() {
	$login_link = get_theme_option( 'header_login_link' );
	if( ! is_array( $login_link ) ) {
		return;
	}
	acf_link( 'link', [ 'class' => 'btn btn-outline-dark w-100' ], [ 'link' => $login_link ] );
}

function theme_search( string $location = '' ) {
	if( $location !== get_theme_option( 'search_location' ) ) {
		return;
	}
	?>
	<div class="d-none d-md-flex header-search">
		<i class="fas fa-search"></i>
	</div>
	<?php
}

function theme_preheader() {
	if( get_theme_option( 'use_preheader' ) ) {
		include get_stylesheet_directory() . '/template-parts/preheader.php';
	}
}

function preheader_mobile_show( string $name ) {
	echo in_array( $name, get_theme_option( 'preheader_mobile' ) ) ? 'flex' : 'none';
}

function theme_logo_location() {
	return 'left' === get_theme_option( 'logo_location' ) ? '1' : '2';
}

function theme_logo_alignment() {
	return 'left' === get_theme_option( 'logo_location' ) ? 'left' : 'center';
}

function theme_menu_location() {
	return 'left' === get_theme_option( 'logo_location' ) ? '2' : '1';
}

function theme_menu_alignment() {
	$align = get_theme_option( 'menu_text_align' );
	if( 'left' === $align ) {
		return 'start';
	}
	elseif( 'right' === $align ) {
		return 'end';
	}
	elseif( 'center' === $align ) {
		return 'center';
	}
}

function _align_to_flex( string $align ) : string {
	if( 'left' === $align || 'top' === $align ) {
		return 'start';
	}
	elseif( 'right' === $align || 'bottom' === $align ) {
		return 'end';
	}
	elseif( 'center' === $align ) {
		return 'center';
	}
	return '';
}

function theme_header_link( string $location, string $class = "" ) : void {
	if( get_theme_option( 'header_link_location' ) !== $location ) {
		return;
	}
	if( ! $class ) {
		$class = 'btn btn-dark order-first order-md-12 ml-2';
		if( 'full' === get_theme_option( 'button_design' ) ) {
			$class .= ' btn-full';
		}
		if( 'far-right' === get_theme_option( 'hamburger_align' ) ) {
			$class .= ' mx-2';
		}
	}
	acf_single_link( get_theme_option( 'header_link' ) ?? [], [ 'class' => $class ] );
}

function theme_hamburger(
	string $menu,
	string $location,
	bool   $mobile = false,
	string $additional_classes = ''
) : void
{
	$align = get_theme_option( 'hamburger_align' );
	if( true === $mobile ) {
		$align = 'mobile-' . get_theme_option( 'mobile_menu_location' );
	}
	if( $align !== $location ) {
		return;
	}
	$class = $mobile ? 'd-block d-md-none' : 'd-none d-md-block';
	$class = trim( $class . " $additional_classes" );
	?>
	<div class="<?php echo $class; ?>">
		<?php theme_hamburger_menu( "#$menu", $location ); ?>
	</div>
	<?php
}

/**
 *
 */
function theme_hamburger_menu( $args, string $location = '' ) {
	if( is_string( $args ) ) {
		$a[ 'data-target' ] = $args;
		unset( $args );
		$args = $a;
	}
	elseif( is_array( $args ) ) {
		$a = $args;
	}
	else {
		return;
	}

	$defaults = [
		'class'         => 'hamburger-toggler',
		'type'          => 'button',
		'data-toggle'   => 'collapse',
		'data-target'   => '',
		'aria-expanded' => 'false',
		'aria-label'    => 'Toggle navigation',
		'data-location' => $location,
	];
	if( $location === get_theme_option( 'hamburger_align' ) ) {
		$defaults[ 'class' ] .= ' d-inline-block';
	}
	elseif( $location === 'all' ) {
		$defaults[ 'class' ] .= ' d-inline-block';
	}
	elseif( $location === 'mobile-left' && 'left' === get_theme_option( 'mobile_menu_location' ) ) {
		$defaults[ 'class' ] .= ' d-inline-block d-md-none';
	}
	elseif( $location === 'mobile-right' && 'right' === get_theme_option( 'mobile_menu_location' ) ) {
		$defaults[ 'class' ] .= ' d-inline-block d-md-none';
	}
	else {
		$defaults[ 'class' ] .= ' d-none';
	}
	$args = wp_parse_args( $a, $defaults );
	if( empty( $args[ 'data-target' ] ) ) {
		return;
	}

	$args[ 'aria-controls' ] = $args[ 'data-target' ];

	$menu_location = str_replace( '#', '', $args[ 'data-target' ] );
	if( ! has_nav_menu( $menu_location ) ) {
		return;
	}
	?>
		<div class="menu-btn-wrap">
			<button <?php html_atts( $args ) ?>>
				<div class="top-bun"></div>
				<div class="meat"></div>
				<div class="bottom-bun"></div>
			</button>
		</div>
	<?php
}

function theme_menu_dropdown( string $theme_location) {
	$theme_locations = get_nav_menu_locations();
	if( ! $theme_locations[ $theme_location ] ) {
		return;
	}
	$menu_obj = get_term( $theme_locations[ $theme_location ], 'nav_menu' );
	return get_field( 'dropdown', $menu_obj );
}


/**
 * Adds extra variable to a registered script.
 *
 * @since 0.9.0
 *
 * Variable will only be add if the script is already in the queue.
 * Accepts any $data that can be json encoded. Use this as a drop-in
 * replacement for `wp_localize_script()` which until WordPress 4.5
 * was the only way to pass variables from PHP to javascript.
 *
 * @param string $handle Script handle the textdomain will be attached to.
 * @param string $name   The variable name.
 * @param string $data   The variable data value.
 */
function add_inline_variable( string $handle, string $name, $data ) {
	$value = json_encode( $data );
	wp_add_inline_script( $handle, "var $name = $value;", 'before' );
}
