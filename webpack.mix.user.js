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
mix.js('resources/User/user.js', 'public/user/user.js')
  .postCss('resources/User/css/user.css', 'public/user/user.css')
  .webpackConfig({
    output: { chunkFilename: 'user/[name].js?id=[chunkhash]' },
    resolve: {
      alias: {
        vue$: 'vue/dist/vue.runtime.esm.js',
        '@': path.resolve('resources/User'),
      },
    },
  })
  .mergeManifest();

if (mix.inProduction()) {
  mix.version();
}
