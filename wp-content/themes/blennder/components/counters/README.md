# Counters
Component for showing a Counter of information where the number starts from 0 (or otherwise specified) and counts to the specified number.

## Specs

Field Name (*req) | Field Title  | Field Type | Field Description | Conditional
--- | --- | :---: | --- | ---
`counters` | Counter | repeater | Container of Counter Items
`counter_prefix` | Counter Prefix | text | Character shown before the number
`counter_number` | Final Number | number | Number to count up to
`counter_suffix` | Counter Suffix | text | Character shown after the number
`counter_title` | Title | text | Main title below the number
`counter_subheading` | Subheading | text | Secondary heading below the title
`counter_start_val` | Starting Value | number | The number to start counting from. (Default 0).
`counter_use_easing` | Use Easing | true_false | Ease Animation
`counter_duration` | Counter Duration | number | How long to take to count from the starting number to the final number (in seconds).
`counter_use_grouping` | Use Grouping | true_false | Example: 1,000 vs 1000
`counter_separator` | Separator | text | Grouping Separator (',')
`counter_decimal` | Decimal | text | Decimal ('.')
`counter_decimal_places` | Decimal Places | number | Number of Decimal Places
`counter_animation` | Counter Animation | select | Choose the type of animation to show the numbers on load.
`counter_column_width` | Counter Column Width | text | Add a custom column size for the counter.