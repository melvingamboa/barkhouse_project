const Mix = require('laravel-mix');

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

Mix.js('resources/js/app.js', 'public/js');
Mix.js('resources/js/menu.js', 'public/js');
Mix.js('resources/js/breed.js', 'public/js');

Mix.sass('resources/sass/app.scss', 'public/css');

Mix.copyDirectory('resources/images/', 'public/images');
