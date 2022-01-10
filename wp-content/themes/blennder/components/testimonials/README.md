# Testimonials
A carousel of company testimonials. The Testimonials are a custom post type.

## Specs

Field Name (*req) | Field Title  | Field Type | Field Description | Conditional
--- | --- | :---: | --- | ---
`testimonials` | Testimonials | repeater | The repeater field for the testimonials
`testimonial` | Testimonial | post_object | The Testimonial custom post type itme
`testimonials_layout` | Cards Layout | Radio | Choose the Cards Layout **Options**: Carousel (`carousel`), Grid (`grid`)
`testimonials_cards_per_view_sm` | Cards Per View - Small | number | Number of cards to show on small screens (mobile phones) |
`testimonials_cards_per_view_md` | Cards Per View - Medium | number | Number of cards to show on medium screens (tablet) |
`testimonials_cards_per_view_lg` | Cards Per View - Large | number | Number of cards to show on large screens (desktop) |
`testimonials_cards_per_view_xl` | Cards Per View - XLarge | number | Number of cards to show on Xlarge screens (desktop xl) |
`testimonials_carousel_show_navigation` | Show Navigation Arrows | true_false | Whether to show the navigation arrows on the carousel |
`testimonials_carousel_show_pagination` | Show Pagination Dots | true_false | Whether to show the pagination dots on the carousel |
`testimonials_carousel_autoplay` | Autoplay | true_false | Allow the carousel to loop back to the beginning. |
`testimonials_carousel_autoplay_delay` | Autoplay Delay | number | Delay (ms) between slides auto changing. | `testimonials_carousel_autoplay = true`
`testimonials_carousel_loop` | Loop | true_false | Allow the carousel to loop back to the beginning. |
`testimonials_carousel_speed` | Speed | number | Speed at which the carousel slides |