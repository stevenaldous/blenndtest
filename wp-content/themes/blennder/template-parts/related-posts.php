<?php
$the_query = blennder_related_posts();
if( ! $the_query->have_posts() ) {
	return;
}
$ids =[];
foreach( $the_query->posts as $p ) {
	$ids[] = $p->ID;
}
$options = [
	'blog_posts_source' => 'post_picker',
	'blog_posts_per_page' => -1,
	'blog_layout' => 'cards',
	'blog_layout_cards' => 'carousel',
	'blog_cards_carousel_layout' => 'title-top',
	'blog_show_featured_image' => true,
	'blog_cards_image_position' => 'top',
	'blog_carousel_loop' => true,
	'blog_carousel_lazy_load' => false,
	'blog_cards_swiper_controls_layout' => 'pagination-navigation',
	'component_header' => get_has_theme_option( 'related_posts_heading', 'Related Posts' ),
	'component_header_tag' => 'h2',
	'blog_ignore_sticky_posts' => true,
	'blog_post_picker' => $ids,
	'blog_carousel_navigation' => true,
	'blog_carousel_pagination' => false,
	'blog_carousel_speed' => 300,
	'container' => 'container',
	'component_color_theme' => 'white',
	'blog_cards_per_view_sm' => 1,
	'blog_cards_per_view_md' => 2,
	'blog_cards_per_view_lg' => 2,
	'blog_cards_per_view_xl' => 2,
	'blog_related_posts' => 'related-posts-true',
	'blog_media_size' => 'blog_home',
];

the_component( 'blog', $options );
