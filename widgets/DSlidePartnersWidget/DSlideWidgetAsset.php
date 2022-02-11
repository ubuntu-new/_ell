<?php
namespace app\widgets\DSlidePartnersWidget;

use yii\web\AssetBundle;

class DSlideWidgetAsset extends AssetBundle
{
    public $js = [
        'js/script-partners.js',
    ];

    public $css = [
        'css/style-partners.css',
    ];

    public $depends = [
        \app\widgets\DSlideWidget\DSlideWidgetAsset::class
    ];

    public function init() {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}