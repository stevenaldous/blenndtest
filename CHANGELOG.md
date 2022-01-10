# Change Log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/)
and this project adheres to [Semantic Versioning](https://semver.org/).

## [2.4.0] - yyyy-mm-dd

### Added

### Changed

### Fixed


## [2.3.0] - 2021-12-12

### Added
- Add component JSON files for default fields.
- Add global components

### Changed
- Rename background color classes
- Remove default CSS on *__header classes
- Abstract component_card_deck() function
- Update requirements
- Remove unused is_components() and get_block_data() functions
- Cleanup component functions DocBlocks
- Cleanup ACF functions
- Remove conditionals around required functions
- Remove {component}_classes() functions
- Remove {component}_container() functions
- Substitute CSS var() for some SCSS variables

### Fixed
- Fix inconsistent classes in testimonials component
- Fix theme.json colors to work with ACF color picker
- Fix duplicate colors in ACF color picker
- Fix component header style not outputting class
- Fix PHP notices when registering REST route
- Remove $classes argument from `component_attributes()`
- Backport changelog to version 1.0.0


## [2.2.0] - 2021-11-26

### Added
- Added CHANGELOG.md
- Added index.php Silence is golden files to directories
- Added PHP strict typing
- Added theme.json

### Changed
- Format the fallback legal footer to match the wp_nav_menu footer
- Removed unnecessary calls to translation functions
- Removed color from theme options
- Remove duplicate row and col classes in search form
- Renamed _search.sss.scss to _search.scss

### Fixed
- Fixed video-player carousel
- Fix header_class() arguments and DocBlock
- Fix duplicate row classes
- Fix tab panel order

## [2.1.0] - 2021-11-26

### Added
- Add primary category function
- Add Gutenberg blocks to page for posts
- Add javascript to make custom background size work
- Add query string to css and js for cache busting

### Changed
- Increase width of interface complementary area
- Update testimonials
- Swiper update
- Swap mobile background image on small devices
- Remove tags from source and replace with lazy loaded images
- Refactor component header, sub_header, and text functions

### Fixed
- Fix related posts template part
- Fix ACF fields not showing on custom post types


## [2.0.0] - 2021-09-22

### Added
- Introduce blennder blocks
- Add ms to unit whitelist
- Commit package-lock.json

### Changed
- Use component_sub_header() on slider component
- Allow .jpeg extensions in image gallery

### Fixed
- Fix header search


## [1.0.0] - 2021-09-13

### Added
- Add client role
- Add capabilities check to ACF fields

### Changed
- Image position center top to fix head cropping

### Fixed
- Return $redirect to avoid category redirect issue
- Body should not be scrollable when mobile menu open
