<?php
use app\widgets\DSlidePartnersWidget\DSlideWidgetAsset;
use yii\helpers\Html;

DSlideWidgetAsset::register($this);
?>

<div class="row ds-container-partner">
    <div class="large-4 four columns ds-main-container-partner  hidden-sm hidden-xs" style="background-color: <?= $background ?>; position: relative;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);width: 100%;padding: 20px 60px;">
            <?= Html::img('', ['alt' => '', 'class' => 'ds-main-img-partner', 'style' => 'border-radius: ' . $radius . '%']) ?>
            <h1 class="ds-main-name-partner uppercase" style="font-family: <?=$font_family?>"><?= $title?></h1>
            <div class="ds-main-desc-partner"><?= $description ?></div>
        </div>
    </div>
    <div class="large-8 eight columns ds-items-container-partner" style="background-color: #FFFFFF !important;">
        <div class="row ds-items-partner" data-slick='<?= $options ?>'>
            <?php foreach($items as $item): ?>

                <div class="ds-item-partner col-sm-4 col-md-3" style="'width: ' . $width" data-title="<?= $item->title ?>" data-desc="<?= $item->description ?>" data-name="<?= $item->name ?>">
                    <?= Html::img($item->image, ['alt' => $item->name ,'style' => 'border-radius: ' . $radius . '%; width: ' . $width. ';margin: 0 auto;']) ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>