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
mix.styles(
    [
        'resources/css/layout.css',
        'resources/css/message.css',
        'resources/css/pdf-style.css',
        'resources/css/profile.css',
        'resources/css/style.css',
        'resources/css/table.css',
        'resources/css/util.css',
        'resources/css/bootstrap.css',
        'resources/css/animate.css/animate.css',
        'resources/css/font-awesome/css/font-awesome.css',
        'resources/css/ionicons/css/ionicons.css',
        'resources/css/boxicons/css/boxicons.css',
        'resources/js/owl.carousel/assets/owl.carousel.css',
        'resources/css/venobox.min.css'
    ], 'public/css/app.css');

mix.styles(
    [
        'resources/admin/css/theme.css',
        'resources/admin/css/bootstrap-datetimepicker.min.css',
        'resources/admin/css/font-face.css',
        'resources/css/bootstrap.css'
    ], 'public/admin/css/admin.css');

mix.js(
    [
        'resources/js/app.js'
    ], 'public/admin/js/admin.js');

mix.js(
    [
        'resources/js/app.js',

    ], 'public/js/app.js');




