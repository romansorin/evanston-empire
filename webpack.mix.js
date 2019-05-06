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

mix.js('resources/js/app.js', 'public/js')
   .js('resources/js/slick.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/pages/home.scss', 'public/css/pages')
   .copyDirectory('resources/sass/pages/dashboard', 'public/css/dashboard')
   .copyDirectory('resources/js/dashboard', 'public/js/dashboard')
   .sass('resources/sass/pages/about.scss', 'public/css/pages')
   .sass('resources/sass/pages/apply.scss', 'public/css/pages')
   .sass('resources/sass/pages/team.scss', 'public/css/pages');
