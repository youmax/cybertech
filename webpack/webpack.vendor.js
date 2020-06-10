const mix = require('laravel-mix')
require('laravel-mix-merge-manifest')
const tailwindcss = require('tailwindcss')
const cssImport = require('postcss-import')
const cssNesting = require('postcss-nesting')


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
mix.combine('node_modules/alpinejs/dist/alpine.js', 'public/vendor/alpine.min.js')
  .postCss('node_modules/tailwindcss/tailwind.css', 'public/vendor/tailwind.min.css')
  .options({
    postCss: [
      cssImport(),
      cssNesting(),
      tailwindcss('tailwind/tailwind.vendor.js'),
    ],
  })
  .mergeManifest()
  .version();
