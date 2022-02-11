<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        '//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css',
        'css/foundation3/normalize.css',
        'css/maxResponcive.css',
        'css/foundation.css',
        'css/foundation3/app.css',
        'css/style.css',
        'css/hover.css',
        'css/ie.css',
//        'css/mediaelementplayer.min.css',
        'plugins/crop/css/cropper.min.css',
        'plugins/calendar/flatpickr.min.css',
        'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css',
        'css/flag-icon.css',
//        'js/multislider/css/custom.css',
//        'js/owlcarousel/assets/owl.carousel.min.css',
//        'js/owlcarousel/assets/owl.theme.default.min.css',
    ];

    public $js = [
//        'https://code.jquery.com/jquery-2.2.0.min.js',
//        'http://code.jquery.com/jquery-migrate-1.2.1.min.js',
//        'slick/slick/slick.js',
//        'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js',
//        'max-slider/js/multislider.min.js',
//       'js/multislider/js/multislider.min.js',
//        'js/vendor/jquery.js',
        /* 'js/breifcase-functions.js',
         'js/toucheffects.js',*/

/*        'js/owlcarousel/owl.carousel.min.js',*/
        'js/jquery-animateNumber-master/jquery.animateNumber.min.js',
        'js/admin/admin.js',
        'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        /*'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js',
        'plugins/crop/js/cropper.min.js',
        'plugins/crop/js/crop.js',
        'js/modernizr.custom.js',
        'js/excanvas.compiled.js',
        'js/foundation3/foundation.min.js',
        'js/foundation3/app.js',
        'js/foundation3/respond.min.js',
        'js/fittext.js',
        'plugins/calendar/flatpickr.js',*/
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
