<?php
use app\widgets\DSlidePartnersWidget\DSlideWidgetAsset;
use yii\helpers\Html;

DSlideWidgetAsset::register($this);
?>

<div class="row ds-container-partner">
    <div class="large-6 six columns ds-main-container-partner  hidden-sm hidden-xs" style="background-color: <?= $background ?>; position: relative;">
        <div style="padding: 20px 60px;" >
            <?= Html::img('', ['alt' => '', 'class' => 'ds-main-img-partner', 'style' => 'border-radius: ' . $radius . '%']) ?>
            <h2 class="ds-main-name-partner uppercase" style="font-family: <?=$font_family?>"><?= $title?></h2>
            <div class="ds-main-desc-partner"><?= $description ?></div>
        </div>
    </div>
    <div class="large-6 six columns ds-items-container-partner" style="background-color: #FFFFFF !important;">
        <div class="row ds-items-partner"  data-slick='<?= $options ?>'>
            <?php foreach($items as $item): ?>

                <div class="ds-item-partner col-sm-4 col-md-3" style="'width: ' . $width" data-title="<?= $item->title ?>" data-desc="<?= $item->description ?>">
                    <?= Html::img('uploads/partners/'.$item->img, ['title' => $item->id ,'style' => 'border-radius: ' . $radius . '%; width: ' . $width. ';margin: 0 auto;']) ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>