<?php
declare( strict_types = 1 );
namespace App\Gutenberg;

/**
 * Setup class.
 *
 * @category Gutenberg
 */
class Setup {


	public function init() {
		add_filter( 'block_categories_all', [ $this, 'block_categories_all' ], 10, 2 );
		add_action( 'admin_enqueue_scripts', [ $this, 'admin_enqueue_scripts'] );

		add_filter( 'render_block', [ $this, 'render_block' ], 10, 2 );
		add_action( 'admin_enqueue_scripts', [ $this, 'component_rendered' ] );
		add_action( 'wp_head', [ $this, 'component_rendered' ] );

		$register = new \App\Gutenberg\Register();
		$hook = is_admin() ? 'admin_init' : 'wp';
		add_action( $hook, [ $register, 'register' ] );
	}

	public function component_rendered() {
		?>
		<script>
		const event = new Event('component-rendered');
		</script>
		<?php
	}

	public function render_block( $block_content, $block ) {
		if( empty( trim( $block_content ) ) ) {
			return '';
		}
		$wrapper_class = apply_filters( 'gutenblocks_default_wrapper', 'container', $block );
		$section_class = str_replace( '/', ' ' , $block[ 'blockName' ] ?? '' );
		if ( 0 !== strpos( $block[ 'blockName' ] ?? '', 'acf/' ) ) {
			$block_content = '<section class="' . $section_class . '"><div class="' . $wrapper_class . '">' . $block_content . '</div></section>';
		}
		return $block_content;
	}

	public function block_categories_all( $block_categories, $editor_context ) {
		if ( ! empty( $editor_context->post ) ) {
			array_unshift(
				$block_categories,
				[
					'slug'  => 'components',
					'title' => 'Components',
					'icon'  => 'block-default',
				]
			);
		}
		return $block_categories;
	}

	public function admin_enqueue_scripts() {
		wp_enqueue_style( 'blennder-gutenberg-admin', trailingslashit(get_template_directory_uri()) . 'assets/admin/css/gutenberg.css', [], 1.0 );

		$current_screen = get_current_screen();
		if( $current_screen->is_block_editor() ) {
			// load active theme stylesheet
			wp_enqueue_style('main', get_stylesheet_directory_uri().'/dist/css/style.css', [ 'wp-mediaelement' ], THEME_VERSION );

			wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/dist/js/scripts.js', [ 'wp-mediaelement' ], THEME_VERSION, true );
		}
	}
}
