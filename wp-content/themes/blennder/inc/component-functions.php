<?php
declare( strict_types = 1 );

/**
 * Component Functions
 */

/**
 * Returns the component query.
 *
 * @since 0.7.5
 * @since 0.7.6 $fields argument removed.
 *
 * @return \WP_Query The component query.
 */
function component_query() {
	return component_function( 'query' );
}

/**
 * Returns the component directory.
 *
 * @since 0.7.5
 * @since 0.7.6 $fields argument removed.
 */
 function component_directory( $dir = '' ) {
	$dir = ltrim( $dir, '/' );
	$path = get_theme_file_path( 'components' );
	if ( ! empty( $dir ) ) {
		$path = trailingslashit( $path ) . $dir;
	}
	return trailingslashit( $path );
}

/**
 * Return the default component template directory.
 *
 * @since 0.7.4
 *
 * @return string The default component template directory.
 */
function component_default_template() : string {
	return component_directory() . 'template.php';
}

/**
 * Prints the component template.
 *
 * @since 0.7.5
 * @since 0.7.6 $fields argument removed.
 */
function component_template() {
	$fields = $GLOBALS[ 'fields' ];
	$layout = get_has_field( 'acf_fc_layout', '' );
	require component_directory( $layout ) . "$layout.php";
}

/**
 * Return the component block template.
 *
 * @since 2.3.0 Unused $fields parameter removed.
 *
 * @return string The component template.
 */
function component_block_template() : string {
	$layout = get_has_field( 'acf_fc_layout', '' );
	$template = component_directory( $layout ) . "$layout-template.php";
	if( ! file_exists( $template ) ) {
		$template = component_default_template();
	}
	return $template;
}

/**
 * Print the component anchor
 *
 * @since 0.7.5
 * @since 0.7.6 $fields argument removed.
 */
function component_anchor() {
	$layout = get_has_field( 'acf_fc_layout', 'default' );
	$id     = $layout . '-' . uniqid();
	printf( '<a id="%1$s" class="anchor"></a>', $id );
}

/**
 * Prints the component container.
 *
 * @since 0.7.5
 * @since 0.7.6 $fields argument removed.
 */
function component_container() {
	$container = [ get_has_field( 'container', 'container' ) ];
	$layout = get_has_field( 'acf_fc_layout', '' );
	$json = component_json( $layout );
	if( isset( $json->container ) && 'container' === $container[0] ) {
		$container[] = $json->container;
	}
	if( isset( $json->container_fluid ) && 'container-fluid' === $container[0] ) {
		$container[] = $json->container_fluid;
	}
	$attr = component_function( 'container', [ 'class' => $container ] );
	html_atts( $attr );
}

/**
 * Returns the component classes.
 *
 * @since 0.7.5
 * @since 0.7.6 $fields argument removed.
 *
 * @return array An array of the component classes.
 */
function component_classes() : array {
	$layout = get_has_field( 'acf_fc_layout', 'default' );
	$json = component_json( $layout );
	$classes = [];

	if( ! isset( $json->classes ) ) {
		return [];
	}

	foreach( $json->classes as $key => $value ) {
		$classes[] = $layout . '--' . get_has_field( $key, $value );
	}
	return $classes;
}

/**
 * Return attributes from a component function.
 *
 * @since 2.0.0
 *
 * @param string $function The function name appended to the layout.
 * @param array  $attr     (Optional) An array of attributes.
 *
 * @return mixed The results of the dynamically called function.
 */
function component_function( string $function, array $attr = [] ) {
	$name = get_has_field( 'acf_fc_layout', '' );

	$fn = str_replace( '-', '_', "{$name}_{$function}" );

	if( function_exists( $fn ) ) {
		$atts = $fn();
	}

	if( isset( $atts ) && is_array( $atts ) ) {
		$attr = array_merge_recursive( $attr, $atts );
	}

	if( isset( $atts ) && ! is_array( $atts ) ) {
		return $atts;
	}
	return $attr;
}

/**
 * Print the component row attributes.
 *
 * @since 0.7.5
 * @since 0.7.6 $fields argument removed.
 */
function component_row() {
	$attr = component_function( 'row', [ 'class' => 'row' ] );
	html_atts( $attr );
}

/**
 * Checks if a field is not empty
 *
 * @since 0.7.5
 *
 * @param string $name field name
 *
 * @return bool Returns a field value
 */
function has_field( string $field, array $fields = [] ) : bool {
	if( empty( $fields ) ){
		$fields = $GLOBALS[ 'fields' ];
	}
	return ! empty( $fields[ $field ] );
}

/**
 * Gets the value of a field if it is not empty. Returns the fallback if field is empty.
 *
 * @since 0.7.5
 *
 * @param string $name field name
 * @param string $fallback value to fallback to if the field is empty
 *
 * @return mixed  Returns a field value
 */
function get_has_field( $name, $fallback, array $fields = [] ) {
	if( empty( $fields ) ){
		$fields = $GLOBALS[ 'fields' ];
	}

	return ( has_field( $name, $fields ) ) ? $fields[ $name ] : $fallback;
}

/**
 * Returns a component template part.
 *
 * @since 0.7.6
 * @since 2.3.0 $fields parameter removed.
 *
 * @param string $part      The component part name.
 * @param string $component The component name.
 * @param array  $fields    The current fields array
 *
 * @return string           The path to the component part.
 */
function component_part_path( string $part, string $component = '' ) : string {
	if ( $component === '' ) {
		$fields = $GLOBALS[ 'fields' ];
		$component = $fields['acf_fc_layout'];
	}

	$template = locate_template( 'components/' . trailingslashit( $component ) . trailingslashit('template-parts') . "$part.php" );

	if( $template ) {
		return $template;
	}else {
		return false;
	}
}

/**
 * Returns the component. A thin wrapper to get the Block component.
 *
 * @since 0.7.5
 *
 * @param string $component The component name.
 * @param array  $args      The arguments to pass to the Block App.
 *
 * @return string The HTML for the component.
 */
function get_component( string $component, array $args = [] ) {
	ob_start();
	the_component( $component, $args );
	return ob_get_clean();
}

/**
 * A thin wrapper to echo the Block component.
 *
 * @since 0.7.5
 *
 * @param string $component The component name.
 * @param array  $args      The arguments to pass to the Block App.
 */
function the_component( string $component, array $args = [] ) {

	$args[ 'acf_fc_layout' ] = $component;
	$fields = $args;
	$fields = component_remove_empty_fields( $fields );

	$name = $fields[ 'acf_fc_layout' ];

	$func_file = component_directory( $name ) . "{$name}-functions.php";
	if( file_exists( $func_file ) ) {
		include_once $func_file;
	}

	$default = [];
	if( $json = component_json( $name ) ) {
		$default = (array) $json->default_fields;
		$fields = array_merge( $default, $fields );
	}

	$GLOBALS[ 'fields' ] = $fields;
	$template = component_block_template( $fields );
	if( file_exists( $template ) ) {
		include $template;
	}
	unset( $GLOBALS[ 'fields' ] );
}

/**
 * Prints the components attributes.
 *
 * @since 0.7.0
 * @since 0.7.6 $fields argument removed.
 * @since 2.3.0 $classes argument removed.
 */
function component_attributes(){
	$fields = $GLOBALS[ 'fields' ];
	$classes = component_classes( $fields );
	$attr = [];

	if(
		'color' !== get_has_field( 'background_type', 'color' ) &&
		true === get_has_field( 'background_enable_overlay', false )
	) {
		$color = get_has_field( 'background_overlay_color', '#000000' );
		$opaci = get_has_field( 'background_overlay_opacity', '30' );
		$opaci = dechex( intval( $opaci / 100 * 0xff ) );
		$fields[ 'background_color' ] = $color . $opaci;

		unset( $fields[ 'background_overlay_color' ] );
		unset( $fields[ 'background_overlay_opacity' ] );
	}

	/**
	 * @todo rename 'background_image_attachment' to 'background_attachment'
	 */
	$lookup = [
		'background_image_attachment' => 'background_attachment',
	];

	if( 'image' === get_has_field( 'background_type', 'color' ) ) {
		$fields[ 'background_repeat' ] = 'no-repeat';
	}
	foreach( $fields as $key => $value ) {
		if( 'background_image' === $key ) {
			$img = _acf_image_process( 'background_image', 'post-thumbnail' );
			$value = 'URL(' . $img[ 'url' ] . ')';
		}
		if( 'background_image_mobile' === $key ) {
			$img = _acf_image_process( 'background_image_mobile', 'large' );
			$value = 'URL(' . $img[ 'url' ] . ')';
		}
		if(
			false === strpos( $key, 'background' ) ||
			! is_string( $value )
		) {
			continue;
		}
		$key = $lookup[ $key ] ?? $key;
		$attr[ "data-$key" ] = $value;
	}

	$attr[ 'class' ] = [ 'component', $fields['acf_fc_layout'] ];
	if( ! empty( $fields[ 'className' ] ) ) {
		$attr[ 'class' ][] = $fields[ 'className' ];
	}
	if( ! empty( $fields[ 'layout' ] ) ) {
		$attr[ 'class' ][] = $fields[ 'acf_fc_layout' ] . '--' . $fields[ 'layout' ];
	}

	$attr[ 'class' ] = array_merge( $attr[ 'class' ], $classes );

	if ( ! empty( $fields[ 'component_color_theme' ] ) ) {
		$attr[ 'class' ][] = $fields[ 'acf_fc_layout' ] . '--background-' . $fields[ 'component_color_theme' ];
	}

	html_atts( $attr );
}

/**
 * Prints the component header
 *
 * @since 0.7.0
 * @since 0.7.6 $fields argument removed.
 * @since 2.0.1 $attributes removed.
 */
function component_header() {
	$header = get_has_field( 'component_header', '' );
	$tag = get_has_field( 'component_header_tag', 'h2' );
	$attr[ 'class' ] = [
		get_has_field( 'acf_fc_layout', 'default' ) . '__header',
		get_has_field( 'component_header_style', '' ),
	];
	the_tag( $tag, $attr, $header );
}

/**
 * Prints the component sub header
 *
 * @since 0.8.0
 * @since 2.0.1 $attributes removed.
 */
function component_sub_header() {
	$subheader = get_has_field( 'component_sub_header', '' );
	$attr[ 'class' ] = get_has_field( 'acf_fc_layout', 'default' ) . '__subheader';
	the_tag( 'span', $attr, $subheader );
}

/**
 * Prints the component intro text
 *
 * @since 0.8.0
 * @since 2.0.1 $attributes removed.
 */
function component_text() {
	acf_wysiwyg( 'component_text' );
}

/**
 * Prepare WP_Query arguments from Blog Component Fields
 *
 * @since 0.7.0
 * @since 0.7.6 $fields argument removed.
 *
 * @todo Use get_has_field
 *
 * @param   string $component Field Name prefix. All the components fields must start with the same prefix.
 * @param   string $post_type Post Type to query. Defaults to 'post'.
 *
 * @return  array         Arguments for WP_Query
 */
function component_get_wp_query_args( string $component, string $post_type = 'post' ) : array {
	$fields = $GLOBALS[ 'fields' ];

	$source = $fields[ $component . '_posts_source'];
	$args = [ 'post_type' => $post_type ];

	if( !empty( $source ) && $source == 'wp_query' ) {

		if( !empty( $fields[ $component . '_posts_per_page'] ) ) {
			$args['posts_per_page'] = $fields[ $component . '_posts_per_page'];
		}

		if( !empty( $fields[ $component . '_ignore_sticky_posts'] ) ) {
			$args['ignore_sticky_posts'] = $fields[ $component . '_ignore_sticky_posts'];
		}

		if( !empty( $fields[ $component . '_category'] ) && !empty( $fields[ $component . '_tag'] ) ){
			$args['tax_query'] = array(
				'relation' => $fields[ $component . '_filter_taxonomy_relationship'],
			);
		}

		if( !empty( $fields[ $component . '_category'] ) ) {
			$args['tax_query'][] = [
				'taxonomy' => 'category',
				'terms'    => $fields[ $component . '_category'],
				'operator' => $fields[ $component . '_filter_category_relationship'],
			];
		}

		if( !empty( $fields[ $component . '_tag'] ) ) {
			$args['tax_query'][] = [
				'taxonomy' => 'post_tag',
				'terms'    => $fields[ $component . '_tag'],
				'operator' => $fields[ $component . '_filter_tag_relationship'],
			];
		}

		if( !empty( $fields[ $component . '_sort_order'] ) && $fields[ $component . '_sort_order'] != 'DESC' ) {
			$args['order'] = $fields[ $component . '_sort_order'];
		}

		if( !empty( $fields[ $component . '_sort_orderby'] ) && $fields[ $component . '_sort_orderby'] != 'date' ) {
			if( $component == 'testimonials' && $fields[ $component . '_sort_orderby'] == 'stars' ) {
				$args['meta_key'] = 'testimonial_stars';
				$args['orderby'] = 'meta_value_num';
			}else{
				$args['orderby'] = $fields[ $component . '_sort_orderby'];
			}
		}

	} else if( !empty( $source ) && $source == 'post_picker') {
		$args['posts_per_page'] = -1;
		$args['post__in'] = $fields[ $component . '_post_picker'];
		$args['orderby'] = 'post__in';
		if( !empty( $fields[ $component . '_ignore_sticky_posts'] ) ) {
			$args['ignore_sticky_posts'] = $fields[ $component . '_ignore_sticky_posts'];
		}
	}
	return $args;
}

/**
 * Prepare array of options for blog swiper slider to be passed
 * into a data-config="" attribute as a json string.
 *
 * @since 0.7.0
 * @since 0.7.6 $fields argument removed.
 *
 * @todo Use get_has_field
 *
 * @return  array         Arguments for json_encode
 */
function component_get_carousel_config( $component ){
	$fields = $GLOBALS[ 'fields' ];
	$config = [];
	if( !empty( $fields[ $component . '_cards_per_view_sm'] ) ) {
		$config['slidesPerView'] = $fields[ $component . '_cards_per_view_sm'];
	}
	if( !empty( $fields[ $component . '_cards_per_view_md'] ) ) {
		$config['breakpoints'][768]['slidesPerView' ] = $fields[ $component . '_cards_per_view_md'];
	}
	if( !empty( $fields[ $component . '_cards_per_view_lg'] ) ) {
		$config['breakpoints'][1020]['slidesPerView' ] = $fields[ $component . '_cards_per_view_lg'];
	}
	if( !empty( $fields[ $component . '_cards_per_view_xl'] ) ) {
		$config['breakpoints'][1370]['slidesPerView' ] = $fields[ $component . '_cards_per_view_xl'];
	}
	if( !empty( $fields[ $component . '_carousel_loop'] ) && $fields[ $component . '_carousel_loop'] ) {
		$config['loop'] = $fields[ $component . '_carousel_loop'];
	}
	if( !empty( $fields[ $component . '_carousel_speed'] ) && $fields[ $component . '_carousel_speed'] ) {
		$config['speed'] = $fields[ $component . '_carousel_speed'];
	}
	if( !empty( $fields[ $component . '_carousel_autoplay'] ) && $fields[ $component . '_carousel_autoplay'] ) {
		if( !empty( $fields[ $component . '_carousel_autoplay_delay'] ) && $fields[ $component . '_carousel_autoplay_delay'] ) {
			$config['autoplay']['delay'] = $fields[ $component . '_carousel_autoplay_delay'];
		}else {
			$config['autoplay'] = $fields[ $component . '_carousel_autoplay'];
		}
	}
	if( !empty( $fields[ $component . '_carousel_lazy_load'] ) && $fields[ $component . '_carousel_lazy_load'] ) {
		$config['preloadImages'] = false;
		$config['watchSlidesVisibility'] = true;
		$config['lazy']['loadPrevNext'] = true;
		$config['lazy']['loadOnTransitionStart'] = true;
	}
	if( !empty( $fields[ $component . '_carousel_effect'] ) && $fields[ $component . '_carousel_effect'] ) {
		$config['effect'] = $fields[ $component . '_carousel_effect'];
	}
	if( !empty( $fields[ $component . '_carousel_parallax'] ) && $fields[ $component . '_carousel_parallax'] ) {
		$config['parallax'] = $fields[ $component . '_carousel_parallax'];
	}
	if( !empty( $fields[ $component . '_carousel_centered_slides'] ) && $fields[ $component . '_carousel_centered_slides'] ) {
		$config['centeredSlides'] = $fields[ $component . '_carousel_centered_slides'];
	}
	return blennder_array_to_json( $config );
}

/**
 * Return the Yoast SEO primary term. Falls back to the first term.
 *
 * @since 2.1.0
 *
 * @param  int    $post_id (Optional) The post ID.
 * @param  string $term    (Optional) The term.
 *
 * @return string Return the primary term if it exists.
 */
function get_primary_term( int $post_id = 0, string $term = 'category' ) : string {

	$primary_cat_id = get_post_meta( $post_id, "_yoast_wpseo_primary_$term", true );
	if ( $primary_cat_id ) {
		$primary_cat = get_term( $primary_cat_id, $term );
		return $primary_cat->name;
	}

	$terms = get_the_terms( $post_id, $term );
	return ( is_array( $terms ) && count( $terms ) >= 1 ) ? $terms[0]->name : '';

}

/**
 * Prints the primary category.
 *
 * @since 2.1.0
 */
function the_primary_category() {
	echo get_primary_term();
}

/**
 * Cleanup $fields array by removing empty elements.
 *
 * @since 2.3.0
 *
 * @param array $fields The fields array.
 *
 * @return array The fields array with empty elements removed.
 */
function component_remove_empty_fields( array $fields ) : array {
	foreach( $fields as $key => $field ) {
		if( empty( $field ) ) {
			unset( $fields[ $key ] );
		}
	}
	return $fields;
}

/**
 * Print the card deck classes.
 *
 * @since 2.3.0
 *
 * @param string $prefix The field prefix for the breakpoints.
 */
function component_card_deck( string $prefix ) {
	$attr[ 'class' ] = [ 'card-deck' ];
	$breakpoints = [ 'sm', 'md', 'lg', 'xl' ];
	foreach( $breakpoints as $key => $breakpoint ){
		$cards_per_view = get_has_field( $prefix . $breakpoint, '' );
		if( $cards_per_view ) {
			$attr[ 'class' ][] = sprintf( 'card-deck-%s-%s', $breakpoint, $cards_per_view );
		}
	}
	html_atts( $attr );
}

/**
 * Returns the component JSON data.
 *
 * @since 2.3.0
 *
 * @param string $component The component acf_fc_layout
 *
 * @return object JSON|null object
 */
function component_json( string $component ) {
	$file = component_directory() . "$component/$component.json";
	if( file_exists( $file ) ) {
		$contents = file_get_contents( $file );
		$json = json_decode( $contents );
		if( $json ) {
			return $json;
		}
	}
}

/**
 * Print the global component.
 *
 * @since 2.3.0
 *
 * @param string $name The slug of the global component
 */
function global_component( string $name ) {
	$args = [
		'post_type' => 'globalcomponents',
		'name'      => $name,
	];
	$the_query = new \WP_Query( $args );

	if ( $the_query->have_posts() ) {
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			the_content();
		}
	}
	wp_reset_postdata();
}
