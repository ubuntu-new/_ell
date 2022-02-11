<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Items */
/* @var $form yii\widgets\ActiveForm */
use dosamigos\tinymce\TinyMce;

$img = $model->img;

Yii::$app->view->registerJsFile('../../plugins/tinymce/js/tinymce/tinymce.min.js', ['yii\web\JqueryAsset']);
Yii::$app->view->registerJs('tinymce.init({
     selector:"textarea",
     mode : "specific_textareas",
      plugins: [
       "advlist autolink lists link image charmap print preview anchor media",
       "searchreplace visualblocks code fullscreen",
       "insertdatetime media table contextmenu paste jbimages "
   ],
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages media"

})', View::POS_END);
?>

<div class="items-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'name_ge')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'title_ge')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description_ge')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'img')->fileInput() ?>
    <?= Html::img(Yii::getAlias('@web').'/uploads/news/'.$img, ['alt'=>'ell', 'class'=>'thing', 'height'=>'150px', 'width'=>'150px'])?>
    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
    <?/*= $form->field($model, 'birthdate')->textInput() */?><!--
    --><?/*= $form->field($model, 'item_key')->textInput(['maxlength' => true]) */?>
    <?= $form->field($model, 'active')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>
    <?/*= $form->field($model, 'position')->textInput(['maxlength' => true]) */?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
