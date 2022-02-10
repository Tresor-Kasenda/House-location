const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');

mix
    .js('resources/js/app.js', 'public/app/js')
    .vue()
    .postCss('resources/css/app.css', 'public/app/css', [
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('./tailwind.config.js')
        ],
    })
mix.purgeCss({
    enabled: true,
    content: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    folders: ['js', 'scss', 'resources'],
    extensions: ['html', 'js', 'blade', 'scss', 'vue'],
    whitelistPatterns: [],
});
