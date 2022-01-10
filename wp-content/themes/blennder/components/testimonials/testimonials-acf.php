<?php

return array(
    'key' => 'group_testimonials',
    'title' => 'Testimonials',
    'fields' => array(
        array(
            'key' => 'field_5ce58ec1396f2',
            'label' => 'Testimonials Source',
            'name' => 'testimonials_posts_source',
            'type' => 'button_group',
            'instructions' => 'Choose where the Testimonials get pulled from, Choosing Wordpress will run a normal Wordpress Query with your chosen options. Choosing Manual Picker will give you an option to manually choose which Testimonials to show. To add a testimonial to the system, visit the Testimonials Section on the menu.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'wp_query' => 'Wordpress',
                'post_picker' => 'Manual Picker',
            ),
            'allow_null' => 0,
            'default_value' => 'wp_query',
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        array(
            'key' => 'field_5ce5917eb73d7',
            'label' => 'Number of Testimonials',
            'name' => 'testimonials_posts_per_page',
            'type' => 'number',
            'instructions' => 'Optional. The number of testimonials to show. If left blank, it defaults to Wordpress settings.',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5ce58ec1396f2',
                        'operator' => '==',
                        'value' => 'wp_query',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Posts Per Page (Optional)',
            'prepend' => '',
            'append' => '',
            'min' => '',
            'max' => '',
            'step' => 1,
        ),
        array(
            'key' => 'field_5bce6ecf82b3a',
            'label' => 'Testimonials',
            'name' => 'testimonials_post_picker',
            'type' => 'relationship',
            'instructions' => 'Choose which testimonials to show.',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5ce58ec1396f2',
                        'operator' => '==',
                        'value' => 'post_picker',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array(
                0 => 'testimonial',
            ),
            'taxonomy' => '',
            'filters' => array(
                0 => 'search',
            ),
            'elements' => array(
                0 => 'featured_image',
            ),
            'min' => '',
            'max' => '',
            'return_format' => 'id',
        ),
        array(
            'key' => 'field_395ydksbwksua',
            'label' => 'Carousel',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_dsjfhn3487ksl',
                        'operator' => '==',
                        'value' => 'carousel',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_3498dbf93dks0',
            'label' => 'Show Navigation Arrows',
            'name' => 'testimonials_carousel_show_navigation',
            'type' => 'true_false',
            'instructions' => 'Whether to show the navigation arrows on the carousel',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '49',
                'class' => '',
                'id' => '',
            ),
            'message' => 'Show Arrows',
            'default_value' => 1,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_s8b34bo83sk30',
            'label' => 'Show Pagination Dots',
            'name' => 'testimonials_carousel_show_pagination',
            'type' => 'true_false',
            'instructions' => 'Whether to show the pagination dots on the carousel',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '51',
                'class' => '',
                'id' => '',
            ),
            'message' => 'Show Dots',
            'default_value' => 1,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_3498bj879nvadqrey',
            'label' => 'Swiper Controls Layout',
            'name' => 'testimonials_swiper_controls_layout',
            'type' => 'button_group',
            'instructions' => 'Choose the Layout of the swiper controls',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'center-center' => 'Center ^ Center',
                'center-left' => 'Center ^ Left',
                'pagination-navigation' => 'Pagination <-> Navigation',
                'navigation-pagination' => 'Navigation <-> Pagination',
            ),
            'allow_null' => 0,
            'default_value' => 'center-center',
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        array(
            'key' => 'field_7sb3ksio03sx2',
            'label' => 'Autoplay',
            'name' => 'testimonials_carousel_autoplay',
            'type' => 'true_false',
            'instructions' => 'Allow the carousel to loop back to the beginning.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '51',
                'class' => '',
                'id' => '',
            ),
            'message' => 'Autoplay',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_384ksdh03cjc9',
            'label' => 'Autoplay Delay',
            'name' => 'testimonials_carousel_autoplay_delay',
            'type' => 'number',
            'instructions' => 'Delay (ms) between slides auto changing.',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_7sb3ksio03sx2',
                        'operator' => '==',
                        'value' => '1',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '49',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 3000,
            'placeholder' => 3000,
            'prepend' => '',
            'append' => 'milliseconds',
            'min' => '',
            'max' => '',
            'step' => 100,
        ),
        array(
            'key' => 'field_39bdck38s29x0',
            'label' => 'Loop',
            'name' => 'testimonials_carousel_loop',
            'type' => 'true_false',
            'instructions' => 'Allow the carousel to loop back to the beginning.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '51',
                'class' => '',
                'id' => '',
            ),
            'message' => 'Loop',
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        array(
            'key' => 'field_4kdkd839skk9s',
            'label' => 'Speed',
            'name' => 'testimonials_carousel_speed',
            'type' => 'number',
            'instructions' => 'Speed at which the carousel slides',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '49',
                'class' => '',
                'id' => '',
            ),
            'default_value' => 300,
            'placeholder' => 300,
            'prepend' => '',
            'append' => 'milliseconds',
            'min' => '',
            'max' => '',
            'step' => 50,
        ),
        array(
            'key' => 'field_5ce59253f08a7',
            'label' => 'Sorting',
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_5ce58ec1396f2',
                        'operator' => '==',
                        'value' => 'wp_query',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        array(
            'key' => 'field_5ce5926ff08a8',
            'label' => 'Order',
            'name' => 'testimonials_sort_order',
            'type' => 'radio',
            'instructions' => 'ASC - order from lowest to highest.
            DESC - order from highest to lowest.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'ASC' => 'ASC',
                'DESC' => 'DESC',
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'default_value' => 'DESC',
            'layout' => 'horizontal',
            'return_format' => 'value',
            'save_other_choice' => 0,
        ),
        array(
            'key' => 'field_5ce592a7f08a9',
            'label' => 'Order By',
            'name' => 'testimonials_sort_orderby',
            'type' => 'select',
            'instructions' => 'The Testimonial data to sort by',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'stars' => 'Stars',
                'title' => 'Title',
                'date' => 'Date',
                'rand' => 'Random',
            ),
            'default_value' => array(
            ),
            'allow_null' => 1,
            'multiple' => 0,
            'ui' => 0,
            'return_format' => 'value',
            'ajax' => 0,
            'placeholder' => '',
        ),
    ),
    'design_tab' => array(
        array(
            'key' => 'field_b8kbjkh87h84b3b',
            'label' => 'Testimonial Card Template',
            'name' => 'testimonials_card_template',
            'type' => 'select',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'total-centered' => 'Total Center',
                'image-left' => 'Avatar Image Left',
                'semi-transparent' => 'Semi Transparent',
                'shadowed-boxes' => 'Shadowed Boxes',
            ),
            'default_value' => 'total-centered',
            'allow_null' => 0,
            'multiple' => 0,
            'ui' => 0,
            'ajax' => 0,
            'return_format' => 'value',
            'placeholder' => '',
        ),
         array(
            'key' => 'field_dsjfhn3487ksl',
            'label' => 'Cards Layout',
            'name' => 'testimonials_layout_cards',
            'type' => 'button_group',
            'instructions' => 'Choose the type of Testimonials Card layout.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'list' => 'List',
                'grid' => 'Grid',
                'carousel' => 'Carousel',
            ),
            'allow_null' => 0,
            'default_value' => 'list',
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        array(
            'key' => 'field_dsjfadgbliu7887ksl',
            'label' => 'Cards Text Align',
            'name' => 'testimonials_cards_text_align',
            'type' => 'button_group',
            'instructions' => 'Choose the type of Testimonials Card layout.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'left' => 'Left',
                'center' => 'Center',
            ),
            'allow_null' => 0,
            'default_value' => 'left',
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        array(
            'key' => 'field_xeor83470vka3',
            'label' => 'Cards Per View - Small',
            'name' => 'testimonials_cards_per_view_sm',
            'type' => 'number',
            'instructions' => 'Number of cards to show on small screens (mobile phones)',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_dsjfhn3487ksl',
                        'operator' => '!=',
                        'value' => 'list',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Cards Per View',
            'prepend' => '',
            'append' => 'card(s)',
            'min' => 1,
            'max' => 6,
            'step' => .1,
        ),
        array(
            'key' => 'field_s9347kdmquy0x',
            'label' => 'Cards Per View - Medium',
            'name' => 'testimonials_cards_per_view_md',
            'type' => 'number',
            'instructions' => 'Number of cards to show on medium screens (tablet)',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_dsjfhn3487ksl',
                        'operator' => '!=',
                        'value' => 'list',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Cards Per View',
            'prepend' => '',
            'append' => 'card(s)',
            'min' => 1,
            'max' => 6,
            'step' => .1,
        ),
        array(
            'key' => 'field_38djxpwje8mlp',
            'label' => 'Cards Per View - Large',
            'name' => 'testimonials_cards_per_view_lg',
            'type' => 'number',
            'instructions' => 'Number of cards to show on large screens (desktop)',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_dsjfhn3487ksl',
                        'operator' => '!=',
                        'value' => 'list',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Cards Per View',
            'prepend' => '',
            'append' => 'card(s)',
            'min' => 1,
            'max' => 6,
            'step' => .1,
        ),
        array(
            'key' => 'field_2938shf38l2bn',
            'label' => 'Cards Per View - XLarge',
            'name' => 'testimonials_cards_per_view_xl',
            'type' => 'number',
            'instructions' => 'Number of cards to show on Xlarge screens (desktop xl)',
            'required' => 0,
            'conditional_logic' => array(
                array(
                    array(
                        'field' => 'field_dsjfhn3487ksl',
                        'operator' => '!=',
                        'value' => 'list',
                    ),
                ),
            ),
            'wrapper' => array(
                'width' => '25',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => 'Cards Per View',
            'prepend' => '',
            'append' => 'card(s)',
            'min' => 1,
            'max' => 6,
            'step' => .1,
        ),
    ),
);