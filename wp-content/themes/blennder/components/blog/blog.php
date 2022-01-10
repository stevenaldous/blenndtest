<?php
$the_query = component_query();

$is_feed_layout     = has_field( 'blog_layout' ) && 'feed' === $fields[ 'blog_layout' ];
$is_cards_layout    = has_field( 'blog_layout' ) && 'cards' === $fields[ 'blog_layout' ];
$is_grid_layout     = has_field( 'blog_layout_cards' ) && 'grid' === $fields[ 'blog_layout_cards' ];
$is_carousel_layout = has_field( 'blog_layout_cards' ) && 'carousel' === $fields[ 'blog_layout_cards' ];


if( $the_query->have_posts() ) {

	if( $is_feed_layout ) {

		include component_part_path( 'blog-feed' );

	} elseif( $is_cards_layout && $is_grid_layout ) {

		include component_part_path( 'blog-grid' );

	} elseif( $is_cards_layout && $is_carousel_layout ) {

		include component_part_path( 'blog-carousel' );

	}

} else {

	get_template_part( 'template-parts/content', 'none' );

}
