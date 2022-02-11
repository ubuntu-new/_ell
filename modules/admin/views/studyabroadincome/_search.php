<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\StudyabroadincomeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="studyabroadincome-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'bday') ?>

    <?= $form->field($model, 'phone') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'uk') ?>

    <?php // echo $form->field($model, 'usa') ?>

    <?php // echo $form->field($model, 'canada') ?>

    <?php // echo $form->field($model, 'europe') ?>

    <?php // echo $form->field($model, 'asia') ?>

    <?php // echo $form->field($model, 'schoolpropgrams') ?>

    <?php // echo $form->field($model, 'bachelormasters') ?>

    <?php // echo $form->field($model, 'phd') ?>

    <?php // echo $form->field($model, 'lsnguageprograms') ?>

    <?php // echo $form->field($model, 'professionalcourses') ?>

    <?php // echo $form->field($model, 'summerschgoolforjuniors') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <?php // echo $form->field($model, 'seen') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
