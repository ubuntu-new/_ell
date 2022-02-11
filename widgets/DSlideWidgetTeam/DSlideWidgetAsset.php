<?php
namespace app\widgets\DSlideWidgetTeam;

use yii\web\AssetBundle;

class DSlideWidgetAsset extends AssetBundle
{
    public $js = [
        'js/script-team.js',
    ];

    public $css = [
        'css/style-team.css',
    ];

    public $depends = [
        \app\widgets\DSlideWidget\DSlideWidgetAsset::class
    ];

    public function init() {
        $this->sourcePath = __DIR__ . '/assets';
        parent::init();
    }
}