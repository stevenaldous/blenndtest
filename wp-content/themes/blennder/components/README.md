# Global Fields
These Are the Global Fields for all components

## Specs

Field Name (*req) | Field Title  | Field Type | Field Description | Conditional
--- | --- | :---: | --- | ---
`component_sub_header` | Sub Header | text | Component Pre/Sub Header
`component_header` | Header | textarea | Component Header
`component_header_tag` | Header Tag | button_group | Component Header Tag
`component_header_style` | Header Style | select | Component Header Style
`component_text` | Text | wysiwyg | Component Intro Text Block
`background_type` | Background Type | button_group | `color`, `gradient`, `image`, `video`
`background_color` | Color | color_picker | Color Picker for Color BG
`background_linear_gradient_direction` | Linear Gradient Direction | select | `custom`,`to top`,`to right`,`to bottom`,`to left`,`to top Right`,`to top left`,`to bottom right`,`to bottom left`,
`background_linear_gradient_degree` | Linear Gradient Degree | range | Desgree Range (0-360 deg)
`background_gradient_color_stops` | Color Stops | repeater | List of Color Stop Options
`background_color_stop` | Color | color_picker | Color Picker for Color Stop
`background_color_stop_opacity` | Color Opacity | range | Opactiy For Color Stop
`background_color_stop_position` | Color Stop Position | range | Color Stop Position
`background_image` | Image | image | Background Image File
`background_image_mobile` | Mobile Image | image | Mobile Background Image File
`background_image_position` | Background Position | select | `top left`,`top center`,`top right`,`center left`,`center center`,`center right`,`bottom left`,`bottom center`,`bottom right`
`background_image_attachment` | Background Attachment | select | `scroll`,`fixed`,`local`
`background_size` | Background Size | select | `auto`,`cover`,`contain`,`custom`
`background_custom_size` | Background Custom Size | text | Custom Size Field
`background_video_poster` | Poster | image | Video Poster Image File
`background_video_desktop_mp4` | Video Desktop MP4 | file | | if `hero_type` = video | Description
`background_video_desktop_webm` | Video Desktop WebM | file || if `hero_type` = video | Description
`background_video_mobile_mp4` | Video Mobile MP4 | file | | if `hero_type` = video | Description
`background_video_mobile_webm` | Video Mobile WebM | file | | if `hero_type` = video | Description
