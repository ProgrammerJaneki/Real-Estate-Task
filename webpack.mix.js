const mix = require('laravel-mix');

mix.browserSync({
    proxy: 'http://real-estate-task.test'

}); 

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/css/style.scss', 'public/css/style.css')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss')
    ]);

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//     ]);
