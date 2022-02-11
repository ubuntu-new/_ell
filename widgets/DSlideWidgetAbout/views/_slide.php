<?php

use app\widgets\DSlideWidgetAbout\DSlideWidgetAsset;
use yii\helpers\Html;

DSlideWidgetAsset::register($this);
?>



<div class="row ds-container-team" style="min-height: 1100px !important; margin: 0px !important;">
    <div class="large-7 seven columns ds-main-container-team blue hidden-sm hidden-xs">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);width: 100%;padding: 40px;">
            <?= Html::img('', ['alt' => '', 'class' => 'ds-main-img-team', 'style' => 'border-radius: ' . $radius . '%']) ?>
            <h1 class="ds-main-name-team uppercase"  style="font-family:<?=$font_family?>"><?= $title?></h1>
            <div class="ds-main-desc-team"><?= $description ?></div>
            <?= Html::img('uploads/main/loggg.png', ['alt' => 'Logo' ,'style' => 'width:340px;border-radius: ' . $radius . '%']) ?>
        </div>
    </div>
    <div class="large-5 five columns  ds-items-container-team " style="background-color: <?= $background ?>; position: relative;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);width: 100%;">
            <div class="ds-items-team" data-slick='<?= $options ?>'>
            <?php foreach($items as $item): ?>
                <div  data-title="<?= $item->title ?>" data-desc="<?= $item->description ?>" data-name="<?= $item->name ?>" >
                    <?= Html::img($item->image, ['alt' => $item->name ,'style' => 'border-radius: ' . $radius . '%', 'width: 800px; height:800px']) ?>
<!--                    <h2><?//= $item->name ?><!--</h2>-->
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>