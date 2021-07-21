const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');


mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sourceMaps(productionToo = true, type = 'eval-source-map')
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .options({
        processCssUrls: false,
    })
      // .postCss('source/assets/css/main.css', 'css/main-support.css', [
  //   require('autoprefixer')({
  //       browsers: ['> .001%'],
  //       grid: false
  //   })
  // ])
    .version();
