// webpack.mix.js

let mix = require('laravel-mix');

mix.disableSuccessNotifications();

// Compile
mix
.js('src/js/main.js', 'js')
.sass('src/scss/main.scss', 'css').options({
  processCssUrls: false
})
.sass('src/scss/bootstrap.scss', 'css')
.setPublicPath('assets');