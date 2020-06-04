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
mix.js('resources/Admin/admin.js', 'public/admin/admin.js')
  .postCss('resources/Admin/css/admin.css', 'public/admin/admin.css')
  .webpackConfig({
    output: { chunkFilename: 'admin/[name].js?id=[chunkhash]' },
    resolve: {
      alias: {
        vue$: 'vue/dist/vue.runtime.esm.js',
        '@': path.resolve('resources/Admin'),
      },
    },
  })
  .mergeManifest();

if (mix.inProduction()) {
  mix.version();
}
