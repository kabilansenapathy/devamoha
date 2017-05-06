const { mix } = require('laravel-mix');

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

//  mix.js('resources/assets/js/app.js', 'public/js')
//     .sass('resources/assets/sass/app.scss', 'public/css');


mix.js([
    'resources/assets/js/app.js',
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/material.min.js',
    'resources/assets/js/nouislider.min.js',
    'resources/assets/js/bootstrap-datepicker.js',
    'resources/assets/js/material-kit.js',


],'public/js/all.js');

mix.styles([
     'resources/assets/css/app.css',
     'resources/assets/css/bootstrap.min.css',
     'resources/assets/css/material-kit.css',
     'resources/assets/css/main.css'
 ], 'public/css/all.css');
