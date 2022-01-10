<?php
/**
 * Template Name: About Us
 */
?>
<?php

get_header(); ?>

	<main id="main" class="site-main">
		<?php

		the_component('hero', [
			'component_header' => get_the_title(),
			'component_text' => get_the_excerpt(),
		]);

		the_component('wysiwyg', [
			'component_text' => get_the_content(),
			'className' => 'bg-light py-5 py-md-6 lead',
		]);

		the_component('text-media', [
			'component_sub_header' => get_field('text_media_1_subheader'),
			'component_header' => get_field('text_media_1_header'),
			'component_text' => get_field('text_media_1_text'),
			'component_header' => get_field('text_media_1_header'),
			'text_media_image' => get_field('text_media_1_image'),
			'text_media_media_type' => 'image',
			'text_media_media_position' => 'left',
			'className' => 'py-5 py-md-6',
		]);

		the_component('text-media', [
			'component_sub_header' => get_field('text_media_2_subheader'),
			'component_header' => get_field('text_media_2_header'),
			'component_text' => get_field('text_media_2_text'),
			'component_header' => get_field('text_media_2_header'),
			'text_media_image' => get_field('text_media_2_image'),
			'text_media_media_type' => 'image',
			'className' => 'pb-5 pb-md-6',
		]);

		$the_blurbs = [];
		foreach( get_field('blurb_blurbs') as $blurb) {
			$the_blurbs[] = array_merge($blurb, [
				'blurb_icon_type' => 'fa',
				'blurb_font_awesome_icon_style' => 'far',
				'blurb_title_tag' => 'h3',
			]);
		}

		the_component('blurb', [
			'blurb_blurbs' => $the_blurbs,
			'blurb_box_shadow' => 1,
			'blurbs_per_view_lg' => 4,
			'className' => 'pb-5 pb-md-6',
		]);

		the_component('testimonials',[
			'testimonials_card_template' => 'total-centered',
			'testimonials_layout_cards' => 'carousel',
			'testimonials_cards_text_align' => 'center',
			'testimonials_cards_per_view_sm' => 1,
			'testimonials_cards_per_view_md' => 1,
			'testimonials_cards_per_view_lg' => 1,
			'testimonials_cards_per_view_xl' => 1,
			'background_type' => 'image',
			'background_image' => get_field('testimonials_background_image'),
			'className' => 'testimonials--about py-5 py-md-6',
			'background_enable_overlay' => 1,
			'background_overlay_color' => '#000000',
			'background_blend_mode'=> 'overlay',
		]);

		the_component('team', [
			'heading_layout_columns' => 0,
			'component_sub_header' => get_field('team_subheader'),
			'component_header' => get_field('team_header'),
			'component_header_tag' => 'h2',
			'team_posts_source' => 'wp_query',
			'team_layout' => 'carousel',
			'team_cards_per_view_md' => 4,
			'team_cards_per_view_lg' => 4,
			'team_swiper_controls_layout' => 'pagination-navigation',
			'team_show_bio_type' => 'modal',
			'className' => 'py-5 py-md-6',
		]);

		the_component('cta', [
			'component_header' => get_field('cta_header'),
			'component_text' => get_field('cta_text'),
			'cta_template' => 'form-right',
			'cta_form' => get_field('cta_form'),
			'background_type' => 'image',
			'background_image' => get_field('cta_background_image'),
		]); ?>
	</main><!-- #main -->

<?php get_footer(); ?>
