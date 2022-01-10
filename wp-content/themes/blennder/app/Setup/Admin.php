<?php
declare( strict_types = 1 );
namespace App\Setup;

class Admin
{
	/**
	 * Initialization
	 * This method should be run from functions.php
	 */
	public static function init()
	{
		add_action( 'login_enqueue_scripts', [__CLASS__, 'admin_login_logo'] );
		add_filter( 'login_headerurl', [__CLASS__, 'login_head_url'] );
	}

	/**
	 * Changes URL of the Login Logo from wordpress.com to our site.
	 */
	public static function login_head_url( $url ) {
		return home_url( '/' );
	}

	/**
	 * Changes out the logo for the WordPress Login screen
	 */
	public static function admin_login_logo() {
		$login_form_width = 320;

		if ( !empty( get_field('login_logo', 'options') ) ) {
			$logo_url = get_field('login_logo', 'options')['url'];
			$sizes = wp_get_attachment_metadata( get_field('login_logo', 'options')['id'] );
		} elseif ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
			$logo_url =  wp_get_attachment_image_url( get_theme_mod( 'custom_logo' ) , 'full' );
			$sizes = wp_get_attachment_metadata( get_theme_mod( 'custom_logo' ) );
		} else {
			$logo_url =  get_template_directory_uri() . '/assets/img/logo.png';
			$img_size = getimagesize($logo_url);
			$sizes['width'] = $img_size[0];
			$sizes['height'] = $img_size[1];
		}

		// If the chosen image is larger than the login form area, scale it down proportionally to fit
		if( $sizes['width'] > $login_form_width ){
			$ratio = $sizes['width'] / $sizes['height'];
			$new_height = $login_form_width / $ratio;
			$sizes['width'] = $login_form_width;
			$sizes['height'] = $new_height;
		}

		if( !empty( get_field('login_bg_type', 'options') ) ) {
			if( get_field('login_bg_type', 'options') == 'color' ) {
				if( !empty( get_field('login_bg_color', 'options') ) ) {
					$login_bg_color = get_field('login_bg_color', 'options');
				}
			}elseif( get_field('login_bg_type', 'options') == 'image' ) {
				if( !empty( get_field('login_bg_image', 'options') ) ) {
					$login_bg_image = get_field('login_bg_image', 'options')['url'];
				}
			}
		}

		ob_start( );
		?>
		<style type="text/css">
			#login h1 a, .login h1 a {
				background-image: url(<?php echo $logo_url; ?>);
				height: <?php echo $sizes['height'] . 'px'; ?>;
				width: <?php echo $sizes['width'] . 'px'; ?>;
				background-size: <?php echo $sizes['width'] . 'px ' . $sizes['height'] . 'px'; ?>;
				background-repeat: no-repeat;
				background-position: center;
			}
			<?php if( isset( $login_bg_color ) || isset( $login_bg_image ) ): ?>
			.login {
				<?php if( isset( $login_bg_color ) ): ?>
				background-color: <?php echo $login_bg_color; ?>;
				<?php elseif( isset( $login_bg_image ) ): ?>
				background-image: url(<?php echo $login_bg_image; ?>);
				background-size: cover;
				background-position: center;
				background-repeat: no-repeat;
				<?php endif; ?>
			}
			<?php endif; ?>
		</style>
		<?php echo ob_get_clean();
	}
}
