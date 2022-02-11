<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 6/1/2019
 * Time: 1:08 PM
 */
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php
$this->title = 'ELL Educational Agency';
$lang_id = Yii::$app->language;
/**
 * If any parameters are not passed, the widget will use settings from the
 * social module wherever possible. For example `appId` and `secret` will
 * be referred from the module settings for the example below.
 */
?>
<!-- Page -->

<div class="page">
    <div class="row">
<?php
$news = \app\models\News::find()->orderBy(['id' => SORT_DESC])->where(['visible' => '1'])->all();
$newstxt = \app\models\Newstxt::findAll(['visible' => '1']);
foreach ($newstxt as $row){
if ($lang_id == 'ka-GE') {
    $newsTitle = $row['title_ge'];
    $newsDesc = $row['description_ge'];
    $font_family = 'bpg-web-001-caps !important';
}
if ($lang_id == 'en-US') {
    foreach ($newstxt as $row)
    $newsTitle = $row['title'];
    $newsDesc = $row['description'];
    $font_family = 'nexa !important';
}}
?>

        <!-- Page Title -->
        <h1 class="ds-main-name uppercase text-left"
            style="color:#1D386B  !important; font-family: <?= $font_family ?>">
            &nbsp;
        </h1>
    </div><!-- Row Ends -->
    <div class="row">
    <?php foreach ($news as $row) { ?>
        <?php
        if ($lang_id == 'ka-GE') {
            $newsTitle = addslashes(trim($row['name_ge']));
            $newsDesc = addslashes(trim($row['content_ge']));
            $font_family = 'bpg-web-001-caps !important';
        } else if ($lang_id == 'en-US') {
            $newsTitle = addslashes(trim($row['name']));
            $newsDesc = addslashes(trim($row['content']));
            $font_family = 'nexa !important';
        }
        ?>



        <div class="large-4 four columns">
            <a data-fancybox data-animation-duration="700" style="font-family:<?= $font_family ?>" data-src="#newsModal<?= $row->id ?>" href="javascript:;" class="provideLink">
                <div class="thumbnail">
                    <?php $pathnews = 'uploads/news/' . $row['img'] ?>
                    <?= Html::img($pathnews, ['alt' => $newsTitle,  'style' => '  max-height: 190px;width: 100%;object-fit: cover;']); ?>
                    <div class="caption" style="height: 335px; overflow: hidden;">
                        <h3  style="color: #1D386B !important;font-family: <?= $font_family ?>;"><?= str_replace("\\", "",$newsTitle) ?></h3>
                        <p ><?= str_replace("<p>&nbsp;</p>", "",$newsDesc) ?></p>
                        <p><?= $row['date'] ?></p>
                    </div>
                </div>
            </a>
        </div>
        <div style="display: none; border-radius: 0px !important; padding: 0px !important;" id="newsModal<?= $row->id ?>" class="animated-modal modaluriza">
            <div class="large-12 twelve columns" style=" min-height: 350px; padding-left: 0px !important; padding-right: 0px !important;">
                <div style="position: relative; top: 30px ;width: 100%; padding: 0 20px">
                    <?php $pathnews = 'uploads/news/' . $row['img'] ?>
                    <?= Html::img($pathnews, ['alt' => $newsTitle,  'style' => 'max-width: 600px; max-height: 400;object-fit: cover; float:left; margin:0 30px 30px 0']); ?>
                    <h1 style="color: #1D386B !important;font-family: <?= $font_family ?>;"><?= str_replace("\\", "",$newsTitle) ?></h1>
                    <p style="font-family:bpgAlgeti !important"><?= $newsDesc; ?></p>
                </div>
            </div>
        </div>
    <?php } ?>

        </div>
</div><!-- Page Ends -->