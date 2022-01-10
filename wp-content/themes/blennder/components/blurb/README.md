# Blurb
- Desktop ⅓, ½, and full width layouts, always 1 column on mobile
- Icon to left with left aligned text or icon on top with center aligned text options
- Changeable icon via admin font awesome, jpg, png, gif or SVG
- Optional border under the title
- Optional box around each blurb
- Customizable columns per breakpoint

## Specs

Field Name (*req) | Field Title  | Field Type | Field Description | Conditional
--- | --- | :---: | --- | ---
`blurb_blurbs` | Blurbs | repeater | Collection of blurbs |
`blurb_icon_type` | Blurb Icon Type | button_group | Image Icon | `None`, `Image`, `Font Awesome Icon`, `Custom Font Icon`
`blurb_image_icon` | Image Icon | image | Image Icon | `.jpg`, `.png`, `.gif`
`blurb_font_awesome_icon` | Blurb Icon | text | Font Awesome Icon Class | `.jpg, .png, .gif`
`blurb_font_awesome_icon_style` | Font Awesome Icon Style | radio | Font Awesome Icon Style | `Light`, `Regular`, `Solid`
`blurb_custom_font_icon` | Blurb Icon | text | Custom Font Icon Class |
`blurb_title`* | Blurb Title | title | Blurb Title Field |
`blurb_content` | Blurb Content | wysiwyg | Blurb Content Text |
`blurb_button` | Blurb Button | link | Blurb Button |
`blurb_background_color` | Blurb Background Color | color_picker | Background color for blurb item |
`blurb_icon_position` | Blurb Icon Position | button_group | Choose the position of the Icon | `Top`, `Left`
`blurbs_per_view_sm` | Blurbs Per View SM | number | Breakpoint blurb per row count |
`blurbs_per_view_md` | Blurbs Per View MD | number | Breakpoint blurb per row count |
`blurbs_per_view_lg` | Blurbs Per View LG | number | Breakpoint blurb per row count |
`blurbs_per_view_xl` | Blurbs Per View XL | number | Breakpoint blurb per row count |
