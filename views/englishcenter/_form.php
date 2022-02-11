<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Englishcenter */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="englishcenter-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'generalenglish')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'esol')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ielts')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'toefl')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sat')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gmat')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'gre')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'visible')->dropDownList([ '0', '1', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
