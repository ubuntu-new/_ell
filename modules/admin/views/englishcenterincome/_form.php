<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Englishcenterincome */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="englishcenterincome-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'generalenglish')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'esol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ielts')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'toefl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gmat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seen')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'visible')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
