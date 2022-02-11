<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Studyabroadincome */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studyabroadincome-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'canada')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'europe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'schoolpropgrams')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bachelormasters')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lsnguageprograms')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'professionalcourses')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'summerschgoolforjuniors')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'visible')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
