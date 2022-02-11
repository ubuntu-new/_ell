<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Studyabroad */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studyabroad-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bday')->textInput() ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uk')->dropDownList([ '0', '1', ]) ?>

    <?= $form->field($model, 'usa')->dropDownList([ '0', '1', ]) ?>

    <?= $form->field($model, 'canada')->dropDownList([ '0', '1', ]) ?>

    <?= $form->field($model, 'europe')->dropDownList([ '0', '1', ]) ?>

    <?= $form->field($model, 'asia')->dropDownList([ '0', '1', ]) ?>

    <?= $form->field($model, 'schoolpropgrams')->dropDownList([ '0', '1']) ?>

    <?= $form->field($model, 'bachelormasters')->dropDownList([ '0', '1']) ?>

    <?= $form->field($model, 'phd')->dropDownList([ '0', '1', ]) ?>

    <?= $form->field($model, 'lsnguageprograms')->dropDownList([ '0', '1']) ?>

    <?= $form->field($model, 'professionalcourses')->dropDownList([ '0', '1']) ?>

    <?= $form->field($model, 'summerschgoolforjuniors')->dropDownList([ '0', '1']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn small red uppercase']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
