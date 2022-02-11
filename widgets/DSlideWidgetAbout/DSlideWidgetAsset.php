<?php
namespace app\widgets\DSlideWidgetAbout;

use yii\web\AssetBundle;

class DSlideWidgetAsset extends AssetBundle
{
    public $js = [
        'js/script-about.js',
    ];

    public $css = [
        'css/style-about.css',
    ];

    public $depends = [
        \app\widgets\DSlideWidget\DSlideWidgetAsset::class
    ];

    public function init() {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}