# Accordion
- Changeable accordion title color (unexpanded and expanded)
- Changeable accordion background color (unexpanded and expanded)
- Changeable open / close  icon (+/-)
- Desktop ½ and full width layouts, always 1 column on mobile


## Specs

Field Name (*req) | Field Title  | Field Type | Field Description | Conditional
--- | --- | :---: | --- | ---
`accordion_type` | Accordion - Type | select | `full` or `halves` |
`accordion_items_primary` | Accordion Items - Primary | repeater | Accordion items for Primary | if `accordion_type` = `full`
`accordion_items_secondary` | Accordion Items - Secondary | repeater | Accordion items for Secondary | if `accordion_type` = `halves`
`accordion_item_title` | Item - Title | text | Subfield of `accordion_items_*`. The title of the accordion item |
`accordion_item_content` | Item - Content | wysiwyg | Subfield of `accordion_items_*`. The content of the accordion item |
`accordion_items_title_color` | Items Title Color | color picker | Title Color of collapsed items |
`accordion_items_title_color_active` | Items Title Color - Active | color picker | Title Color of active items |
`accordion_items_background` | Items Background | color picker | Background color of collapsed items |
`accordion_items_background_active` | Items Background - Active | color picker | Background color of active items |
`accordion_items_icon_type` |  Icon Type | button_group | `regular`, `solid`, or `light` |
`accordion_items_icon_opened` | Icon Opened | text | The FA class for the opened accordion icon |
`accordion_items_icon_closed` | Icon Closed | text | The FA class for the closed accordion icon |