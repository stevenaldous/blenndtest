let mix = require('laravel-mix');
let path = 'wp-content/themes/blennder/';
const StylelintPlugin = require('stylelint-webpack-plugin');

mix.webpackConfig({
    plugins: [
        new StylelintPlugin({
          fix: true
        }),
    ],
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'eslint-loader',
                options: {
                    // eslint options (if necessary)
                },
            },
            {
                test: /\.scss/,
                loader: 'import-glob-loader'
            },
            {
                test: /\.js/,
                loader: 'import-glob-loader'
            }
        ]
        }
    })
    .copy('node_modules/@fortawesome/fontawesome-pro/webfonts', path + 'dist/fonts/font-awesome/webfonts')
    .js(path + 'assets/js/scripts.js', path + 'dist/js')
    .sass(path + 'assets/scss/style.scss', path + 'dist/css', {
        implementation: require('sass')
    })
    .options({
        processCssUrls: false,
        postCss: [
            require('autoprefixer')
        ],
        autoprefixer: {
            options: {
                browsers: [
                    'defaults',
                ]
            }
        }
    })
    .setResourceRoot(path + 'dist')
    .setPublicPath(path + 'dist')
    .browserSync({
        proxy: 'blenndtest.local',
        files: [
            path + 'dist/css/{*,**/*}.css',
            path + 'dist/js/{*,**/*}.js',
            path + '**/*.php'
        ]
    });