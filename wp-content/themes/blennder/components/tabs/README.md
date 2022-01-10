# Tabs
Tabs Component for tabbed content. With choises of icon or image tab styles.

## Specs

Field Name (*req) | Field Title  | Field Type | Field Description | Conditional
--- | --- | :---: | --- | ---
`tabs` | Tabs | repeater | The repeater field for the actual tabs/panels
`tab_type` | Tab Type | button_group | Can be `image` or `icon`. Subfield of `tabs`.
`tab_image` | Tab Image | image | Image to be displayed within the tab. Subfield of `tabs`. | `tab_type` == `image`
`tab_icon_style` | Tab Icon Style | button_group | Choose Icon Style **Options**: `far`, `fal`, `fas`
`tab_icon` | Tab Icon | text | Font Awesome icon class to be displayed within the tab. Subfield of `tabs`. | `tab_type` == `icon`
`panel_content` | Panel  Content | wysiwyg | Content to be displayed within the tab's panel. Subfield of `tabs`.
`panel_link` | Panel  Link | link | Link to be displayed within the tab's panel. Returns an array. Subfield of `tabs`.
`tabs_layout` | Tabs Layout | button_group | Choose the tab layout location **Options**: `top`, `left`