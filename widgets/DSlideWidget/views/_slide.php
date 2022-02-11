<?php
use app\widgets\DSlideWidget\DSlideWidgetAsset;
use yii\helpers\Html;

DSlideWidgetAsset::register($this);
$lang_id = Yii::$app->language;
/*if ($lang_id == 'ka-GE'){


}

if ($lang_id == 'en-US'){

}*/

?>

<div class="row ds-container studentebi">
    <div class="large-4 four columns ds-main-container hidden-sm hidden-xs" style="background-color: <?= $background ?>; position: relative;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);width: 100%;padding:20px 60px;">
            <?= Html::img('', ['alt' => '', 'class' => 'ds-main-img', 'style' => 'border-radius: ' . $radius . '%']) ?>
            <h1 class="ds-main-name uppercase" style="font-family: <?= $font_family?>"><?= $title?></h1>
            <div class="ds-main-title" style="font-size: 14px !important; margin-bottom: 10px;font-family: <?= $font_family?>"><?= $name?></div>
            <div class="ds-main-desc" style="font-family: din_light !important;"><p><?= $description ?></p></div>
        </div>
    </div>
    <div class="large-8 eight columns ds-items-container">
        <div class="row ds-items" data-slick='<?= $options ?>' style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);width: 100%;">
            <?php foreach($items as $item): ?>
                <div class="ds-item col-sm-4 col-md-3" style="'width: ' . $width; height: 350px" data-title="<?= $lang_id == 'ka-GE'?$item->title_ge:$item->title?>" data-desc="<?= $lang_id == 'ka-GE'?$item->description_ge:$item->description ?>" data-name="<?=$lang_id == 'ka-GE'?$item->name_ge:$item->name ?>">
                    <?= Html::img($item->image, ['style' => 'border-radius: ' . $radius . '%; width: ' . $width. ';margin: 0 auto;']) ?>
                    <h3 style="font-family: <?= $font_family?>; text-align: center"><?= $lang_id == 'ka-GE'?$item->name_ge:$item->name ?></h3>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>