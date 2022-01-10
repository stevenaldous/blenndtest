# Team
- Component for showing Team Members from the Team Custom Post Type.
- 3 different layouts (Grid, Carousel & List)
- Options for Full Bio Display
- Heading Layout options between stacked (left and center aligned) and 2 columns.

## Specs

Field Name (*req) | Field Title  | Field Type | Field Description | Conditional
--- | --- | :---: | --- | ---
`heading_layout_columns` | Heading Layout Columns | true_false | Choose whether heading is displayed in 2 columns layout |
`heading_alignment` | Heading Alignment | button_group | If not two columns, choose text alignment (`Left`, `Centered`) |
`team_posts_source` | Teams Source | button_group | Choose whether to load posts using standard `WP_Query` or Custom `Post Picker` |
`team_posts_per_page` | Number of Team Members | number | Number of posts to load if using standard Query |
`team_post_picker` | Team Members | relationship | Choose posts if using `Post Picker` Source |
`team_carousel_show_navigation` | Show Navigation Arrows | true_false | Show or hide the carousel navigation arrows |
`team_carousel_show_pagination` | Show Pagination Dots | true_false | Show or hide the carousel pagination dots |
`team_swiper_controls_layout` | Swiper Controls Layout | button_group | Choose which order the controls display |
`team_carousel_autoplay` | Autoplay | true_false | Autoplay the carousel without user interaction |
`team_carousel_autoplay_delay` | Autoplay Delay | number | Autoplay delay timer between auto changing slides |
`team_carousel_loop` | Loop | true_false | Loop the carousel from end to beginning |
`team_carousel_speed` | Speed | number | Choose the animation speed (default 300 ms) |
`team_sort_order` | Order | radio | Choose the order direction if using `WP_Query` |
`team_sort_orderby` | Order By | select | Choose which data to sort by |
`team_show_bio_type` | Show Bio Type | button_group | Modal or Interior Page |
`team_layout` | Layout | button_group | Choose which layout to use for the component (`Grid`, `Carousel`, `List`) |
`team_cards_per_view_sm` | Cards Per View - Small | number | Number of cards to show per breakpoint view | if `grid` or `carousel` layout
`team_cards_per_view_md` | Cards Per View - Medium | number | Number of cards to show per breakpoint view | if `grid` or `carousel` layout
`team_cards_per_view_lg` | Cards Per View - Large | number | Number of cards to show per breakpoint view | if `grid` or `carousel` layout
`team_cards_per_view_xl` | Cards Per View - XLarge | number | Number of cards to show per breakpoint view | if `grid` or `carousel` layout
`team_show_images` | Show Team Images | true_false | Show or hide the team member images | if `grid` or `carousel` layout
`team_image_position` | Team Card Image Position | radio | Choose which position the image is shown (`top`, `cover`) | if show images enabled
