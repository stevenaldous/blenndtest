# Slider
Full Width Slider Component for image slideshows.

## Specs

Field Name (*req) | Field Title  | Field Type | Field Description | Conditional
--- | --- | :---: | --- | ---
`slides` | Slides | repeater | Repeater Field containing individual slides
`slide_background_image` | Background Image | image |
`slide_has_content` | Has Content | true_false | Check off this box to enable a content editor tab for the slide
`slide_header` | Slide Header | textarea | Choose a component Header Tag
`slide_header_tag` | Header Tag | button_group | Choose a header html tag
`slide_header_style` | Header Style | select | Choose a Header Style (optional).
`slide_header_custom_class` | Header Custom Class | text | Enter a custom class if you chose custom header style.
`slide_content` | Slide Content | wysiwyg | Slide Content
`slide_button` | Button | link | Slide Button Link
`slide_text_position` | Text Position | select | `center`, `left`, `right`
`slide_image_overlay` | Image Overlay | true_false | `true`, `false`
`slider_container` |Slider Container | button_group |
`slider_carousel_show_navigation` | Show Navigation Arrows | true_false | Whether to show the navigation arrows on the slider
`slider_carousel_show_pagination` | Show Pagination Dots | true_false | Whether to show the pagination dots on the slider
`slider_carousel_autoplay` | Autoplay | true_false | Allow the carousel to automatically change slides
`slider_carousel_autoplay_delay` | Autoplay Delay | number | Delay (ms) between slides auto changing.
`slider_carousel_loop` | Loop | true_false | Allow the carousel to loop back to the beginning.
`slider_carousel_speed` | Speed | number | Speed at which the carousel slides.
`slider_carousel_lazy_load` | Lazy Load | true_false | Lazy Load the Slider Images
`slider_carousel_parallax` | Parallax | true_false | Add Parallax Effect to slide Content
`slider_carousel_effect` |  Effect | select | Choose a slide transition effect. Leaving blank defaults to "Slide"