const mix = require('laravel-mix')
require('laravel-mix-merge-manifest')
const cssImport = require('postcss-import')
const cssNesting = require('postcss-nesting')
const path = require('path')
const purgecss = require('@fullhuman/postcss-purgecss')
const tailwindcss = require('tailwindcss')


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
/* App Assets */
mix.js('resources/App/app.js', 'public/app/app.js')
  .postCss('resources/App/css/app.css', 'public/app/app.css')
  .options({
    postCss: [
      cssImport(),
      cssNesting(),
      tailwindcss('tailwind/tailwind.app.js'),
      ...mix.inProduction() ? [
        purgecss({
          content: ['./resources/views/**/*.blade.php', './resources/App/**/*.vue'],
          defaultExtractor: content => content.match(/[\w-/:.]+(?<!:)/g) || [],
          whitelistPatternsChildren: [/nprogress/],
        }),
      ] : [],
    ],
  })
  .webpackConfig({
    output: { chunkFilename: 'app/[name].js?id=[chunkhash]' },
    resolve: {
      alias: {
        vue$: 'vue/dist/vue.runtime.esm.js',
        '@': path.resolve('resources/App'),
      },
    },
  })
  .mergeManifest();

if (mix.inProduction()) {
  mix.version();
}
