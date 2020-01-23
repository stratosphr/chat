const mix = require('laravel-mix')

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
const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin')

if (process.env.npm_lifecycle_event !== 'hot') {
    mix.version()
}
const path = require('path')
// fix css files 404 issue
mix.webpackConfig({
    devServer: {
        contentBase: path.resolve(__dirname, 'public')
    },
    plugins: [
        new VuetifyLoaderPlugin()
    ]
})

.
webpackConfig({
    devServer: {
        proxy: {
            host: '0.0.0.0',
            port: 8080
        },
        watchOptions: {
            aggregateTimeout: 100,
            poll: 1000
        }
    }
})
.js('resources/js/app.js', 'public/js')
.sass('resources/sass/app.scss', 'public/css')
