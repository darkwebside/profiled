let mix = require('laravel-mix');
let build = require('./tasks/build.js');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

mix.js('source/_assets/js/main.js', 'js')
    .copyDirectory('source/_assets/fonts','source/assets/build/fonts/')
    .sass('source/_assets/sass/main.scss', 'css')
    .scripts(['source/_assets/js/jquery-2.1.4.min.js','source/_assets/js/owl.carousel.min.js','source/_assets/js/scrollreveal.min.js','source/_assets/js/smooth-scroll.min.js','source/_assets/js/parallax.js','source/_assets/js/isotope.min.js','source/_assets/js/lightbox.min.js','source/_assets/js/scripts.js'],'source/assets/build/js/main.js')
    .styles(['source/_assets/css/socicon.css','source/_assets/css/iconsmind.css','source/_assets/css/bootstrap.css','source/_assets/css/interface-icons.css','source/_assets/css/lightbox.min.css','source/_assets/css/owl.carousel.css','source/_assets/css/theme.css','source/_assets/css/font-poppinssourcesanspro.css','source/_assets/css/custom.css'], 'source/assets/build/css/main.css')
    .options({
        processCssUrls: false,
    }).version();
