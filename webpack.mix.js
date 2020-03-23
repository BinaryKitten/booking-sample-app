const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .js('resources/js/app.js', 'public/js')
    .combine(
        [
            // 'resources/js/theme-scripts/popper.js',
            // 'resources/js/theme-scripts/owl-carousel-thumb.min.js',
            // 'resources/js/theme-scripts/jquery.ajaxchimp.min.js',
            // 'resources/js/theme-scripts/mail-script.js',
            // 'resources/js/theme-scripts/gmaps.min.js',
            'resources/js/theme-scripts/theme.js'
        ],
        'public/js/theme.js'
    )
    .sass('resources/sass/app.scss', 'public/css');
