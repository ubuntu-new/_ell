<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EnglishcenterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="englishcenter-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'bday') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'generalenglish') ?>

    <?php // echo $form->field($model, 'esol') ?>

    <?php // echo $form->field($model, 'ielts') ?>

    <?php // echo $form->field($model, 'toefl') ?>

    <?php // echo $form->field($model, 'sat') ?>

    <?php // echo $form->field($model, 'gmat') ?>

    <?php // echo $form->field($model, 'gre') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
