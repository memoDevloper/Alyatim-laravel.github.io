const mix = require('laravel-mix');

// Example: Override webpack's configuration
mix.webpackConfig({
    resolve: {
        extensions: ['.js', '.vue', '.json'],
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
});

// Example: Compile assets using Laravel Mix
mix.js('resources/js/app.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css');
