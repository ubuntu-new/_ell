<?php
use app\widgets\DSlideWidget\DSlideWidgetAsset;
use yii\helpers\Html;

DSlideWidgetAsset::register($this);
$lang_id = Yii::$app->language;
if (isset($_REQUEST['lang_id'])){
    $lang_id = $_REQUEST['lang_id'];
}
if ($lang_id == 'ka-GE'){
    $font_family = 'bpg-web-001-caps !important';
    $font_size = '1.18vw';

}
if ($lang_id == 'en-US'){
    $font_family = 'nexa !important';
    $font_size = '1.15vw';
}
?>


<div class="row ds-container studentebi" style="background-color: #F2F2F2">
    <div class="large-4 four columns ds-main-container hidden-sm hidden-xs" style="background-color: <?= $background ?>; position: relative; margin-right: 40px">
        <div style="padding:20px 60px;" class="topidan">
            <?= Html::img('', ['alt' => '', 'class' => 'ds-main-img', 'style' => 'border-radius: ' . $radius . '%']) ?>
            <h2 class="ds-main-name sizee uppercase" style="font-family: <?= $font_family?>"><?= $title?></h2>
            <div class="ds-main-title" style="font-size: 14px !important; margin-bottom: 10px;font-family: <?= $font_family?>"><?= $name?></div>
            <div class="ds-main-desc" style="font-family: din_light !important;"><p><?= $description ?></p></div>
        </div>
    </div>
    <div class="large-8 eight columns ds-items-container">
        <div class="row ds-items gacentrili" data-slick='<?= $options ?>'>
            <?php foreach($items as $item): ?>
                <?php
                if ($lang_id == 'ka-GE'){
                    $desc = addslashes(trim($item->description_ge));
                    $name = addslashes($item->name_ge);
                    $title = addslashes($item->title_ge);


                }
                else if ($lang_id == 'en-US'){
                    $desc = addslashes(trim($item->description));
                    $name = addslashes($item->name);
                    $title = addslashes($item->title);
                }
                ?>


                <div class="ds-item col-sm-4 col-md-3" style="" data-name="<?= $name; ?>" data-title="<?= $title; ?>" data-desc="<?= $desc; ?>" >
                    <?= Html::img('uploads/students/'.$item->img, ['style' => 'border-radius: ' . $radius . '%; width: ' . $width. ';margin: 0 auto;']) ?>
                    <?php $studentName = str_replace(" ", " <br> ", $name); ?>
                    <h2 style="color: #1D386B !important; font-family:<?=$font_family?> ; font-size: <?= $font_size?>; line-height: 105%"><?= $studentName ?></h2>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>