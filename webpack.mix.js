let mix = require('laravel-mix');

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

mix.
    // .webpackConfig({
    //     resolve: {
    //         alias: {
    //             Admin: path.resolve(__dirname, 'resources/assets/admin'),
    //             Assets: path.resolve(__dirname, 'resources/assets')
    //         }
    //     }
    // })
   .sass('resources/assets/sass/app.scss', 'public/css');
   
   if (mix.inProduction()) {
       mix.version();
   }
