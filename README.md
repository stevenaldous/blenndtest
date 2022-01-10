# Blennd Theme Starter

Starter Theme for Blennd Client Websites.

Version: `v2.3.0`


## Wordpress Plugin Dependencies

 - Advanced Custom Fields PRO version 5.9 or greater

## Installation

### Requirements

 - WordPress version 5.6 or greater
 - PHP version 7.4 or greater (8.0 or greater recommended)
 - MySQL version 5.6 or greater OR MariaDB version 10.1 or greater
 - Node version 14.18.1 or greater
 - NPM version 7.24.0 or greater
 - WP CLI version 2.1.0 or greater
 - HTTPS support

### Manual

To manually install WordPress core, the Blennder theme, and required plugins, you can run the following command to download all the core files.

```bash
git clone --depth=1 --quiet --progress git@github.com:blenndiris/blennder.git . &&
mkdir ./wp-content/plugins/ &&
git clone git@github.com:blenndiris/blennd-plugins.git ./wp-content/plugins/ &&
rm -rf .git/ &&
rm -rf ./wp-content/plugins/.git/ &&
wp core download &&
npm i &&
git init
```

#### Manual Alternative (Github Template)

Github has introduced a new feature to make a new repository with another repo as a starting template. We have enabeled `blennder` to be a template repo. Using this method, to start a new client project, go to the `blennder` repo in github and click on the `Use this template` button. Enter in the new repository's name on the next screen. It will generate a new repo for you with `blennder`'s files as a starting point. Clone that repo then inside that folder run the following.

```bash
mkdir ./wp-content/plugins/ &&
git clone git@github.com:blenndiris/blennd-plugins.git ./wp-content/plugins/ &&
rm -rf ./wp-content/plugins/.git/ &&
wp core download &&
npm i
```

Once all the files have been downloaded some file configuration will need to take place. First rename the theme folder to match the client name. Then update the paths/names in the following files to match the new theme name.
-  `.gitignore`
-  `.gitattributes`
-  `.stylelintignore`
-  `package.json`
		- `name`
-  `webpack.mix.js`
		- `path`
-  `/wp-content/themes/<theme>/styles.css`
		- `Theme Name`
-  `/wp-content/themes/<theme>/assets/_variables.scss`
		- `$imgpath`
		- `$fa-font-path`

## Development

Once Node has installed its packages, you are ready for development. First update the `webpack.mix.js` file with your local url in the `browserSync proxy` value.

Run the following npm command to watch for SASS, JS and PHP changes.

```bash
npm run watch
```

Your browser should open up a new window with your local site with a url like `localhost:3000`.

### Components

This theme uses ACF to create a custom component architecture for development. Each component's assets are self contained within their folders. Their folder includes the SASS, JS, PHP markup and an ACF fields configuration.


## Production

When a site is ready to go live run the following command. This will minify all css and js assets for production environments.

```bash
npm run production
```

## Project Structure
```
	.
	├── app/
	|   ├── Gutenberg/
	|   |   ├── Animations.php
	|   |   ├── DefaultFields.php
	|   |   ├── Fields.php
	|   |   ├── Register.php
	|   |   ├── Setup.php
	|   ├── PostTypes/
	|   |   ├── AbstractPostType.php
	|   |   ├── InterfacePostType.php
	|   |   └── {PostType}.php
	|   ├── Setup/
	|   |   ├── About.php
	|   |   ├── ACF.php
	|   |   ├── Admin.php
	|   |   ├── Blog.php
	|   |   ├── Body.php
	|   |   ├── BootstrapNavWalker.php
	|   |   ├── Cleanup.php
	|   |   ├── Client.php
	|   |   ├── Footer.php
	|   |   ├── Forms.php
	|   |   ├── Header.php
	|   |   ├── index.php
	|   |   ├── Media.php
	|   |   ├── Menus.php
	|   |   ├── Options.php
	|   |   ├── Scripts.php
	|   |   ├── Shortcodes.php
	|   |   ├── Sidebars.php
	|   |   └── Support.php
	|   └── autoload.php
	├── assets/
	|   ├── admin/
	|   |   ├── css/
	|   |   |   └── acf.css
	|   |   └── js/
	|   |       └── acf.js
	|   ├── fonts/
	|   |   └── font-awesome/
	|   ├── img/
	|   ├── js/
	|   |   ├── modules/
	|   |   ├── bootstrap.js
	|   |   └── scripts.js
	|   └── scss/
	|       ├── elements/
	|       ├── forms/
	|       ├── global/
	|       ├── templates/
	|       ├── _bootstrap.scss
	|       ├── _functions.scss
	|       ├── _mixins.scss
	|       ├── _variables.scss
	|       ├── _variables-bootstrap.scss
	|       └── style.scss
	├── components/
	|   └── {component}/
	|       ├── js/
	|       ├── scss/
	|       ├── template-parts/
	|       |   ├── {component}-{part}.php
	|       |   └── *
	|       ├── index.php
	|       ├── {component}-acf.php
	|       ├── {component}-functions.php
	|       ├── {component}-template.php
	|       ├── {component}.jpg
	|       ├── {component}.json
	|       ├── {component}.php
	|       └── README.md
	├── dist/
	|   ├── css/
	|   |   └── style.css
	|   ├── fonts/
	|   |   └── font-awesome/
	|   |       └── *
	|   └── js/
	|       └── scripts.js
	├── inc/
	|   ├── acf-functions.php
	|   ├── component-functions.php
	|   ├── debug.php
	|   ├── output-helpers.php
	|   ├── template-tags.php
	|   └── theme-functions.php
	├── template-parts/
	|   └── template-page-builder.php
	├── templates/
	|   └── *
	├── 404.php
	├── archive.php
	├── category.php
	├── footer.php
	├── functions.php
	├── header.php
	├── home.php
	├── index.php
	├── page.php
	├── screenshot.jpg
	├── search.php
	├── searchform.php
	├── sidebar.php
	├── single-post-all-fields.php
	├── single.php
	├── style.css
	└── taxonomy.php
```
