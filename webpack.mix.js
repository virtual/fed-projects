const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');


mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .sourceMaps(productionToo = true, type = 'eval-source-map')
    .sass('source/_assets/sass/main.scss', 'css/main.css')
    .sass('source/_assets/sass/proj01.scss', 'css/proj01.css')
    .sass('source/_assets/sass/proj02.scss', 'css/proj02.css')
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
