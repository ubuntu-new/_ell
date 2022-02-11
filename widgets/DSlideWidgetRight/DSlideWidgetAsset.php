<?php
namespace app\widgets\DSlideWidgetRight;

use yii\web\AssetBundle;

class DSlideWidgetAsset extends AssetBundle
{
    public $js = [
        'js/script.js',
        'js/slick.min.js',
    ];

    public $css = [
        'css/style.css',
        'css/slick.css',
        //'css/slick-theme.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset'
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',

    ];

    public function init() {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}