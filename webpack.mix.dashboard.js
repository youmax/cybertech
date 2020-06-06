const mix = require('laravel-mix')
require('laravel-mix-merge-manifest')

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
mix.disableNotifications();
mix.js('resources/Dashboard/dashboard.js', 'public/dashboard/dashboard.js')
  .postCss('resources/Dashboard/css/dashboard.css', 'public/dashboard/dashboard.css')
  .webpackConfig({
    output: { chunkFilename: 'dashboard/[name].js?id=[chunkhash]' },
    resolve: {
      alias: {
        vue$: 'vue/dist/vue.runtime.esm.js',
        '@': path.resolve('resources/Dashboard'),
      },
    },
  })
  .mergeManifest();

if (mix.inProduction()) {
  mix.version();
}
