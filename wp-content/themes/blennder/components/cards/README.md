# Cards
Component for showing a card with some information

## Specs

Field Name (*req) | Field Title  | Field Type | Field Description | Conditional
--- | --- | :---: | --- | ---
`cards` | Cards | repeater | A container of cards.
`card_header` | Header | text | Card Header
`card_content` | Content | wysiwyg |  Card Content
`card_image` | Card Image | image |  Card Image
`card_link` | Card Link | link |  Card Link
`cards_layout` | Cards Layout | Radio | Choose the Cards Layout **Options**: Carousel (`carousel`), Grid (`grid`)
`cards_animation` | Animation | select | Animate.css Favorite Animations
`cards_cards_per_view_sm` | Cards Per View - Small | number | Number of cards to show on small screens (mobile phones) | `cards_layout = cards`
`cards_cards_per_view_md` | Cards Per View - Medium | number | Number of cards to show on medium screens (tablet) | `cards_layout = cards`
`cards_cards_per_view_lg` | Cards Per View - Large | number | Number of cards to show on large screens (desktop) | `cards_layout = cards`
`cards_cards_per_view_xl` | Cards Per View - XLarge | number | Number of cards to show on Xlarge screens (desktop xl) | `cards_layout = cards`
`cards_show_images` | Show Image | true_false | Whether to show the Posts Image in the results. |
`cards_image_position` | Card Image Position | radio | Choose the position of the image on the card. Top shows the image at the top of the card. Background makes the image a background of the card. Option has no effect if Show Image is turned off. **Options**: Top (`top`), Background (`cover`) | `cards_show_images = true`
`cards_carousel_show_navigation` | Show Navigation Arrows | true_false | Whether to show the navigation arrows on the carousel |
`cards_carousel_show_pagination` | Show Pagination Dots | true_false | Whether to show the pagination dots on the carousel |
`cards_carousel_autoplay` | Autoplay | true_false | Allow the carousel to loop back to the beginning. |
`cards_carousel_autoplay_delay` | Autoplay Delay | number | Delay (ms) between slides auto changing. | `cards_carousel_autoplay = true`
`cards_carousel_loop` | Loop | true_false | Allow the carousel to loop back to the beginning. |
`cards_carousel_speed` | Speed | number | Speed at which the carousel slides |
`cards_carousel_lazy_load` | Lazy Load Images | true_false | Lazy Load the Card Images |