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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .scripts([
   	'resources/assets/js/alertify.min.js',
   	'resources/assets/js/moment.min.js'],'public/js/my-app.js')
   .styles('resources/assets/css/alertify.min.css','public/css/my-app.css');
