# Blog
Blog Component to show a list of blog posts in a variety of formats.

## Specs

Field Name (*req) | Field Title  | Field Type | Field Description | Conditional
--- | --- | :---: | --- | ---
`blog_posts_source` | Posts Source | button_group | Choose where the posts get pulled from, Choosing Wordpress will run a normal Wordpress Posts Query with your chosen options. Choosing Post Picker will give you an option to manually choose which posts to show. **Options**: Wordpress (`wp_query`) Post Picker (`post_picker`) |
`blog_ignore_sticky_posts` | Ignore Sticky Posts | true_false | Ignore Sticky Posts stops wordpress from pushing stickied posts to the top of the results. NOTE: Has no effect if using category or tag filtering. |
`blog_posts_per_page` | Posts Per Page | number | Optional. The number of posts to show. If left blank, it defaults to Wordpress settings. | `blog_posts_source = wp_query`
`blog_post_picker` | Post Picker | relationship | Manually select a collection of blog posts from the available items. | `blog_posts_source = post_picker`
`blog_layout` | Layout Type | button_group | Choose the type of layout for the blog posts. Blog Feed is the Default Blog home layout. Blog Cards displays the posts in a card. **Options**: Blog Feed (`feed`), Blog Cards (`cards`) |
`blog_layout_cards` | Cards Layout | radio | Choose the type of Blog Card layout. Grid is a grid of card posts. Carousel is a carousel of card posts. **Options**: Grid (`feed`), Carousel (`cards`)| `blog_layout = cards`
`blog_cards_per_view_sm` | Cards Per View - Small | number | Number of cards to show on small screens (mobile phones) | `blog_layout = cards`
`blog_cards_per_view_md` | Cards Per View - Medium | number | Number of cards to show on medium screens (tablet) | `blog_layout = cards`
`blog_cards_per_view_lg` | Cards Per View - Large | number | Number of cards to show on large screens (desktop) | `blog_layout = cards`
`blog_cards_per_view_xl` | Cards Per View - XLarge | number | Number of cards to show on Xlarge screens (desktop xl) | `blog_layout = cards`
`blog_show_featured_image` | Show Featured Image | true_false | Whether to show the Posts Featured Image in the results. |
`blog_cards_image_position` | Card Image Position | radio | Choose the position of the featured image on the card. Top shows the image at the top of the card. Background makes the featured image a background of the card. Option has no effect if Show Featured Image is turned off. **Options**: Top (`top`), Background (`cover`) | `blog_show_featured_image = true`
`blog_carousel_show_navigation` | Show Navigation Arrows | true_false | Whether to show the navigation arrows on the carousel |
`blog_carousel_show_pagination` | Show Pagination Dots | true_false | Whether to show the pagination dots on the carousel |
`blog_carousel_autoplay` | Autoplay | true_false | Allow the carousel to loop back to the beginning. |
`blog_carousel_autoplay_delay` | Autoplay Delay | number | Delay (ms) between slides auto changing. | `blog_carousel_autoplay = true`
`blog_carousel_loop` | Loop | true_false | Allow the carousel to loop back to the beginning. |
`blog_carousel_speed` | Speed | number | Speed at which the carousel slides |
`blog_carousel_lazy_load` | Lazy Load Images | true_false | Lazy Load the Blog Images |
`blog_category` | Category | taxonomy | Choose categories to filter the results by. |
`blog_filter_category_relationship` | Category Logical Relationship | button_group | Choose the comparison between Categories. ALL (AND) returns posts that satisfy all filters chosen. ANY (OR) returns posts that satisfy any filter chosen. **Options**: ANY (`IN`), ALL (`AND`) | `blog_category != empty`
`blog_tag` | Tag | taxonomy | Choose tags to filter the results by. |
`blog_filter_tag_relationship` | Tag Logical Relationship | button_group | Choose the comparison between Tags. ALL returns posts that satisfy all filters chosen. ANY returns posts that satisfy any filter chosen. **Options**: ANY (`IN`), ALL (`AND`) | `blog_tag != empty`
`blog_filter_taxonomy_relationship` | Taxonomy Logical Relationship | button_group | Choose the logical comparison between Categories & Tags. ANY (OR) returns all posts that satisfy any filter chosen. ALL (AND) returns only posts that satisfy all filters chosen. **Options**: ANY (`OR`), ALL (`AND`) | `blog_category != empty || blog_tag != empty`
`blog_sort_order` | Order | radio | ASC - order from lowest to highest. DESC - order from highest to lowest. **Options**: ASC (`ASC`), DESC (`DESC`) |
`blog_sort_orderby` | Order By | select | The post data to sort by. **Options**: Date (`date`), Title (`title`), Random (`rand`) |