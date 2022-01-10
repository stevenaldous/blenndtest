<?php
/**
 *
 * Blennd Theme Starter functions and definitions
 *
 */

declare( strict_types = 1 );
define( 'THEME_VERSION', '2.3.0' );

/**
 * Load the autoloader
 */
if( ! class_exists( '\App\Psr4AutoloaderClass' ) ) {
	require __DIR__ . '/app/autoload.php';
}
$loader = new \App\Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace( 'App', __DIR__ . '/app' );

/**
 * Set up theme
 */
App\Setup\ACF::init();
App\Setup\Admin::init();
App\Setup\Cleanup::init();
App\Setup\Header::init();
App\Setup\Body::init();
App\Setup\Footer::init();
App\Setup\Forms::init();
App\Setup\Media::init();
App\Setup\Menus::init();
App\Setup\Options::init();
App\Setup\Sidebars::init();
App\Setup\Support::init();
App\Setup\Blog::init();
App\Setup\About::init();
App\Setup\Client::init();

/**
 * WordPress Widgets
 */
require_once __DIR__ . '/app/Setup/Widgets/Form.php';
require_once __DIR__ . '/app/Setup/Widgets/Links.php';


/**
 * Enqueue scripts and styles
 */
App\Setup\Scripts::enqueue();

/**
 * Set up post types and taxonomies
 */

new App\PostTypes\GlobalComponents();
new App\PostTypes\Team();
new App\PostTypes\Testimonial();
// Uncomment to use the Location Post Type for maps component
// new App\PostTypes\Location();

/**
 * Set up Gutenberg
 */
$gutenberg = new App\Gutenberg\Setup();
$gutenberg->init();

/**
 * Include Output Helper Functions
 */
require_once __DIR__ . '/inc/output-helpers.php';

/**
 * Include Template tag Functions
 */
require_once __DIR__ . '/inc/template-tags.php';


/**
 * Include Theme Functions
 */
require_once __DIR__ . '/inc/theme-functions.php';

/**
 * Include Component Functions
 */
require_once __DIR__ . '/inc/component-functions.php';


/**
 * Include ACF Functions
 */
require_once __DIR__ . '/inc/acf-functions.php';


/**
 * Include Debug Helpers
 */
require_once __DIR__ . '/inc/debug.php';
