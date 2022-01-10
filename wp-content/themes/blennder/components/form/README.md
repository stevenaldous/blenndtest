# Forms
Component for selecting and showing Gravity Forms on a page.

### Dependencies
 - [Advanced Custom Fields: Gravityforms Add-on](https://wordpress.org/plugins/acf-gravityforms-add-on/)

## Specs

Field Name (*req) | Field Title  | Field Type | Field Description | Conditional
--- | --- | :---: | --- | ---
`form` | Gravity Form | forms | Choose an existing gravity form
`form_header_option` | Header Option | button_group | Choose a Header source
`form_custom_description` | Custom Description | wysiwyg | Custom Description
`form_show_gf_title` | Show Gravity Form Title | boolean | Whether or not to display the gravity form title. Note: has no effect if Custom Header or No Header options are chosen.
`form_show_gf_description` | Show Gravity Form Description | boolean | Whether or not to display the gravity form description. Note: has no effect if Custom Header or No Header options are chosen.
`form_ajax` | Ajax | boolean | Whether or not to use AJAX for form submission
`form_tabindex` | Ajax | boolean | Specify the starting tab index for the fields of this form
`form_display_inactive` | Display Inactive | boolean | Whether or not to display the form even if it is inactive