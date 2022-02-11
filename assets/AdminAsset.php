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
class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'plugins/crop/css/cropper.min.css',

    ];
    public $js = [
        'https://code.jquery.com/jquery-2.2.0.min.js',
        'js/admin/admin.js',
        'plugins/crop/js/cropper.min.js',
        'plugins/crop/js/crop.js'
    ];
    public $depends = [
       /* 'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',*/
    ];
}
