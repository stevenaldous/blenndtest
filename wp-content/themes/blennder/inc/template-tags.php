<?php
declare( strict_types = 1 );

/**
 * Template Tags
 */

/**
 * Adds classes to the header tag based on global positioning option
 *
 * @since 0.7.5
 *
 * @param string[] ...$classes Variable number of classes to add to the header class.
 *
 * @return string Returns an html attributes string
 */
function header_class( ...$classes ) {
	$class = 'fixed' === get_theme_option( 'header_positioning_type' ) ? [ 'fixed-top' ] : [];
	$classes  = array_unique( array_merge( $classes, $class ) );
	if ( empty( $classes ) ) {
		return;
	}
	html_atts( [ 'class' => $classes ] );
}

/**
 * Outputs the theme custom logo if it exists
 *
 * @since 0.7.5
 *
 * @return string Returns an image tag
 */
function the_logo() {
	if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
		the_custom_logo();
	} else {
		printf(
			'<a class="%s" href="%s"><img src="%s/assets/img/logo.png" height="40" alt="%s"/></a>',
			'custom-logo-link',
			get_bloginfo( 'url' ),
			get_template_directory_uri(),
			get_bloginfo( 'title' )
		);
	}
}

/**
 * Strips non numbers from a phone number for use in the href attribute
 *
 * @since 0.7.0
 *
 * @param array $number Raw Phone Number.
 *
 * @return string Returns an cleaned phone number
 */
function clean_formatted_phone_number( $number ) {
	return preg_replace('/[^0-9]/', '', $number);
}

/**
 * Return the HTML tag.
 *
 * @since 0.7.0
 *
 * @param string  $tag        The HTML tag.
 * @param array   $attributes Attributes for the HTML tag.
 * @param string  $content    Content inside the HTML tag.
 *
 * @return string Returns the HTML tag with attributes.
 */
function get_the_tag( $tag, $attributes, $content ) {
	return sprintf(
		'<%1$s %2$s>%3$s</%4$s>',
		$tag,
		get_html_atts( $attributes ),
		$content,
		$tag
	);
}

/**
 * Echo the HTML tag.
 *
 * @since 0.7.3
 *
 * @param string  $tag        The HTML tag.
 * @param array   $attributes Attributes for the HTML tag.
 * @param string  $content    Content inside the HTML tag.
 */
function the_tag( string $tag, array $attributes, string $content ) {
	echo get_the_tag( $tag, $attributes, $content );
}

/**
 * Return an HTML element with attributes.
 *
 * @since 0.7.0
 *
 * @param string $tag        The HTML tag.
 * @param array  $attributes Attributes for the HTML tag.
 *
 * @return string Returns the HTML tag with attributes.
 */
function get_the_single_tag( $tag, $attributes ) {
	return sprintf(
		'<%1$s %2$s/>',
		$tag,
		get_html_atts( $attributes )
	);
}

/**
 * Return an HTML element with attributes.
 *
 * @since 0.7.3
 *
 * @param  string $tag        The HTML tag.
 * @param  array  $attributes Attributes for the HTML tag.
 *
 * @return string Echo the HTML tag with attributes.
 */
function the_single_tag( $tag, $attributes ) {
	echo get_the_single_tag( $tag, $attributes );
}

/**
 * Print HTML with meta information for the current post (category, tags and permalink).
 *
 * @since 0.7.0
 *
 * @param string $type The type of taxonomy
 */
function blennder_posted_in($type = 'category') {
	// Retrieves tag list of current post, separated by commas.
	if($type == 'category'){
		$list = '';
		if ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
			$posted_in = 'Category: %1$s';
			$list = get_the_category_list( ', ' );
		}else {
			$posted_in = '';
		}
	}elseif ($type == 'tag') {
		$list = get_the_tag_list( '', ', ' );
		if ( $list && ! is_wp_error( $list ) ) {
			$posted_in = 'Tags: %1$s';
		}else {
			$posted_in = '';
		}
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		$list
	);
}

/**
 * Print HTML with meta information for the current post-date/time and author.
 *
 * @since 0.7.0
 */
function blennder_posted_on() {
	$show_auth = get_field('blog_show_author', 'options');
	$show_date = get_field('blog_show_date', 'options');
	printf(
		'%1$s %2$s %3$s',
		( $show_auth ) ? sprintf(
			'By: <span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			esc_attr( sprintf( 'View all posts by %s', get_the_author() ) ),
			get_the_author()
		) : '',
		( $show_date && $show_auth ) ? '|' : '',
		( $show_date ) ? sprintf(
			'<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		) : ''
	);
}

/**
 * Output the Social Share icons
 *
 * @since 0.7.6
 */
function blennder_share_post() {
	$share_urls = [
		'facebook' => [
			'url'=> 'https://www.facebook.com/sharer/sharer.php?u=',
			'icon' => 'facebook',
		],
		'twitter' => [
			'url'=> 'https://twitter.com/home?status=',
			'icon' => 'twitter',
		],
		'linkedin' => [
			'url'=> 'https://www.linkedin.com/sharing/share-offsite/?url=',
			'icon' => 'linkedin',
		],
	];
	$platforms = get_field( 'blog_social_share_platforms', 'options' );
	if( ! is_array( $platforms ) ) {
		return;
	}
	foreach( $platforms as $social ){
		printf( '<a href="%1$s%2$s" target="_blank"><i class="fab fa-%3$s"></i></a>',
			$share_urls[$social]['url'],
			get_the_permalink(),
			$share_urls[$social]['icon']
		);
	}
}

/**
 * Get related posts by tag to the current post
 *
 * @since 0.7.0
 *
 * @param int $num (optional) An integer number of related posts.
 *
 * @return \WP_Query The WP_Query object for the related posts.
 */
function blennder_related_posts($num = 3) {
	global $post;
	$current_post = $post->ID;
	$tags = wp_get_post_tags( $post->ID );
	$tag_ids = array();
	if ( $tags ) {
		foreach( $tags as $tag ){
			array_push( $tag_ids, $tag->term_id );
		}
	}
	$defaults = array(
		'post__not_in'   => array( $current_post ),
		'no_found_rows'  => true,
		'cache_results'  => false,
		'orderby'        => 'rand',
		'ignore_sticky_posts'  => true
	);
	$args1 = array_merge( $defaults, array(
		'posts_per_page' => $num,
		'tag__in'        => $tag_ids,
	));
	$the_query = new WP_Query( $args1 );

	if( $the_query->post_count < $num ){

		$opts['posts_per_page'] = ( $num - $the_query->post_count );
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				 $the_query->the_post();
				$defaults['post__not_in'][] = $post->ID;
			}
		}
		$args2 = array_merge( $defaults,  $opts);
		$query2 = new WP_Query( $args2 );

		if( $query2->have_posts() ){

			$new_query = new WP_Query();
			$new_query->posts = array_merge( $the_query->posts, $query2->posts );
			// we also need to set post count correctly so as to enable the looping
			$new_query->post_count = count( $new_query->posts );
			$the_query = $new_query;
		}
	}

	return $the_query;
}

/**
 * Social Media Icons
 *
 * Output the social media icons list based on
 * the links added in global theme options
 *
 * @since 0.7.5
 */
function social_media_icons() {
	$social_media = array(
		array(
			'name' => 'facebook',
			'icon' => 'facebook-f',
		),
		array(
			'name' => 'instagram',
			'icon' => 'instagram',
		),
		array(
			'name' => 'twitter',
			'icon' => 'twitter',
		),
		array(
			'name' => 'youtube',
			'icon' => 'youtube',
		),
		array(
			'name' => 'linkedin',
			'icon' => 'linkedin-in',
		),
		array(
			'name' => 'pinterest',
			'icon' => 'pinterest',
		),
		array(
			'name' => 'flickr',
			'icon' => 'flickr',
		),
		array(
			'name' => 'google_plus',
			'icon' => 'google-plus-g',
		),
	);

	?>
	<ul class="social-share list-inline list-unstyled">
	<?php
	foreach ( $social_media as $sm ) {
		if ( get_field( $sm['name'] . '_link', 'options' ) ) {
			printf(
				'<li class="social-icon list-inline-item mr-3">%s</li>',
				sprintf(
					'<a href="%s" title="%s" class="%s" target="_blank"> %s %s </a>',
					esc_url( get_field( $sm['name'] . '_link', 'options' ) ),
					ucfirst( $sm['name'] ),
					'social-' . $sm['name'],
					sprintf(
						'<i class="fab fa-%s"></i>',
						$sm['icon']
					),
					sprintf(
						'<span class="sr-only">%s</span>',
						ucfirst( $sm['name'] )
					)
				)
			);

		}
	}
	?>
	</ul>
	<?php
}

/**
 * Fallback menu if the footer legal nav menu is not assigned
 *
 * @since 0.7.5
 */
function footer_legal_fallback() {
	$links = [
		[
			'url' => esc_url( trailingslashit( home_url( 'privacy-policy' ) ) ),
			'title' => 'Privacy Policy',
			'value' => 'Privacy Policy',
			'target' => '_self',
		],
		[
			'url' => esc_url( home_url( 'sitemap_index.xml' ) ),
			'title' => 'Sitemap',
			'value' => 'Sitemap',
			'target' => '_self',
		],
		[
			'url' => esc_url( trailingslashit( home_url( 'privacy-policy' ) ) ),
			'title' => 'Blennd',
			'value' => 'Website Design',
			'target' => '_blank',
		],
	];
	?>
		<ul id="footer-legal" class="d-inline-block list-inline footer-legal">
			<?php foreach( $links as $link ) : ?>
				<li class="menu-item list-inline-item">
					<?php
						printf(
							'<a href="%1$s" title="%2$s" target="%3$s">%4$s</a>',
							$link[ 'url' ],
							$link[ 'title' ],
							$link[ 'target' ],
							$link[ 'value' ]
						);
					?>
				</li>
			<?php endforeach; ?>
		</ul>
	<?php
}

/**
 * Outputs the search form.
 *
 * @since 0.7.3
 *
 * @param array $args {
 *     Optional. Array of display arguments.
 *
 *     @type string $title            The title of the form.
 *     @type string $placeholder      The placeholder of the form.
 *     @type string $aria-label       ARIA label for the search form. Useful to distinguish
 *                                    multiple search forms on the same page and improve
 *                                    accessibility. Default empty.
 *     @type string $aria-describedby ARIA label for the search form. Useful to distinguish
 *                                    multiple search forms on the same page and improve
 *                                    accessibility. Default empty.
 *     @type array $button {
 *       @type string 'class'         The button class.
 *       @type string 'text'          The button text.
 *     }
 *  }
 */
function blennder_search_form( array $args = array() ) {
	global $blennder_search_form_atts;
	$default_args              = array(
		'form_id'          => 'search',
		'form_class'       => 'searchform my-2 my-lg-0',
		'input_id'         => 'search-input',
		'title'            => 'Search',
		'placeholder'      => 'Search',
		'aria-label'       => 'Search',
		'aria-describedby' => 'search-btn',
		'button'           => array(
			'class' => 'btn btn-light',
			'text'  => '<i class="far fa-chevron-right"></i>',
		),
	);
	$blennder_search_form_atts = wp_parse_args( $args, $default_args );
	get_search_form();
}

/**
 * Print the search query results.
 *
 * @since 0.9.0
 */
function the_search_query_results() {
	global $wp_query;
	$total = $wp_query->found_posts;
	$page  = $wp_query->query[ 'paged' ] ?? 1;
	$per   = $wp_query->query_vars[ 'posts_per_page' ];
	$low   = ( $page - 1 ) * $per + 1;
	$high  = $low + $per - 1;
	if( $high > $total ) {
		$high = $total;
	}
	echo "$low - $high of $total";;
}

/**
 * Prints the footer widgets.
 *
 * @param int $number_of_widgets (Optional) The number of widgets to print.
 *
 * @since 0.9.0
 */
function footer_widgets( int $number_of_widgets = 4 ) {
	$is_last_wide = 'fixed' === get_theme_option( 'footer_final_widget_width' );

	for ( $i = 1; $i <= $number_of_widgets; $i++ ) {
		$className = 'col-footer col-12 col-md text-center text-md-left d-flex flex-column justify-content-center justify-content-md-';
		$className .= get_field( 'footer_vertical_align', 'options' );
		$id = 1 === $i ? 'footer' : 'footer-' . $i;

		if ( is_active_sidebar( $id ) ){
			if( 0 === $number_of_widgets || $i === $number_of_widgets ) {
				$className .= ' flex-column';
			}
			if( $i === $number_of_widgets && $is_last_wide ) {
				$className .= ' col-md-4 col-lg-3';
			}
			?>
			<div class="<?php echo $className; ?>">
				<?php
				dynamic_sidebar( $id );
				if( $i === $number_of_widgets && footer_social_media( 'main', 'right' ) ) {
					?>
					<div class="footer-social footer-social-main footer-social-right">
						<?php social_media_icons(); ?>
					</div>
					<?php
				} ?>
			</div>
			<?php
		}
		if( $i === $number_of_widgets && ! is_active_sidebar( $id ) && footer_social_media( 'main' ) ) {
			?>
			<div class="col-footer col-12 col-md-4 col-lg-3 text-center text-md-right footer-social footer-social-legal footer-social-right order-<?php social_media_order(); ?> d-flex flex-column justify-content-<?php the_theme_option( 'footer_vertical_align' ); ?>">
				<?php social_media_icons(); ?>
			</div>
			<?php
		}
	}
}

/**
 * Prints the order for the social media icons.
 *
 * @since 0.9.0
 */
function social_media_order() {
	$pos = get_theme_option( 'footer_social_media_position' );

	switch( $pos ) {
		case 'left':
			echo 'first';
			break;
		case 'right':
			echo 'last';
			break;
		default:
			echo ' d-none';
	}
}

/**
 * Blog Feed View Class
 *
 * Output the class for the blog feed view
 * based on the custom field chosen
 *
 * @since 0.7.6
 */
function the_blog_feed_view_class() {
	$view = get_field('blog_default_post_view', get_option('page_for_posts'));
	printf( 'blog-feed--%s-view', $view );
}

/**
 * Custom WP Dropdown Categories
 *
 * Determine the arguments for the dropdown filter
 * based on current taxonomy
 *
 * @since 0.7.6
 */
function blennder_wp_dropdown_categories() : array {
	$query_object = get_queried_object();

	$dropdown = [
		'show_option_all' => 'Choose Category',
		'class'			      => 'custom-select blog-filter__taxonomy-dropdown',
		'id'			        => 'blog-filter__category',
	];

	if( is_a( $query_object, 'WP_Term' ) && ! empty( $query_object ) ) {
		if ( $query_object->taxonomy !== 'category' ) {
			if ( $query_object->taxonomy === 'post_tag' ) {
				$dropdown['name'] = 'tag';
			} else {
				$dropdown['name'] = $query_object->taxonomy;
			}
			$dropdown['show_option_all'] = 'Choose ' . get_taxonomy($query_object->taxonomy)->labels->singular_name;
			$dropdown['id']              = 'blog-filter__' . $query_object->taxonomy;
			$dropdown['taxonomy']        = $query_object->taxonomy;
			$dropdown['value_field']     = 'slug';
			$dropdown['selected']        = $query_object->slug;
		}
	}

	return $dropdown;
}

/**
 * Print the phone link
 *
 * @param string $phone The phone number to print.
 *
 * @since 0.7.6
 */
function phone_link( string $phone = '', array $atts = []  ) {
	if( '' === $phone ) {
		$phone = get_theme_option( 'phone_number' ) ?? '';
	}
	if( '' === $phone ) {
		return;
	}
	$n = clean_formatted_phone_number( $phone );
	$p = esc_html( $phone );

	$href = [
		'href' => 'tel:' . $n,
	];
	$atts = wp_parse_args( $href, $atts );
	the_tag( 'a', $atts, '<i class="fal fa-phone mr-2"></i> ' . $p );
}

/**
 * Print the email link
 *
 * @param string $email The email address to print.
 *
 * @since 0.7.6
 */
function email_link( string $email = '', array $atts = [] ) {
	if( '' === $email ) {
		$email =  get_theme_option( 'email' ) ?? '';
	}
	if( '' === $email ) {
		return;
	}
	$e = esc_html( $email );
	$href = [
		'href' => 'mailto:' . $e,
	];
	$atts = wp_parse_args( $href, $atts );
	the_tag( 'a', $atts, '<i class="fal fa-envelope mr-2"></i> ' .$e );
}
