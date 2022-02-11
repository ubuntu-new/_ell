<?php

use app\widgets\DSlideWidgetRight\DSlideWidgetAsset;
use yii\helpers\Html;

DSlideWidgetAsset::register($this);
?>

<div class="row ds-container">

    <div class="large-8 eight columns ds-items-container">
        <div class="row111 ds-items" data-slick='<?= $options ?>'>
            <?php foreach($items as $item): ?>
                <div class="ds-item col-sm-4 col-md-3" data-title="<?= $item->title ?>" data-desc="<?= $item->description ?>" data-name="<?= $item->name ?>">
                    <?= Html::img($item->image, ['alt' => $item->name ,'style' => 'border-radius: ' . $radius . '%']) ?>
                    <h2><?= $item->name ?></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="large-4 four columns ds-main-container hidden-sm" style="background-color: <?= $background ?>; position: relative;">
        <div style=" position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);width: 100%;padding: 100px;">
            <img src="" class="ds-main-img" />
            <h1 class="ds-main-name uppercase text-center"><?= $title ?></h1>
            <h3 class="ds-main-title"></h3>
            <p class="ds-main-desc" style="word-wrap: break-word;"><?= $description ?></p>
        </div>
    </div>
</div>