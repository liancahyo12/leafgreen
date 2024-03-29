const mix = require('laravel-mix');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.js('resources/js/main.js', 'public/js');
mix.sass('resources/scss/bootstrap.scss', 'public/css/bootstrap.min.css');
mix.copy('resources/css/style.css', 'public/css/style.css');
mix.copy('resources/lib', 'public/lib');
mix.copy('resources/img', 'public/img');

