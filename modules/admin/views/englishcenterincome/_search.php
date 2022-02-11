<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\EnglishcenterincomeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="englishcenterincome-search">

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

    <?php // echo $form->field($model, 'generalenglish') ?>

    <?php // echo $form->field($model, 'esol') ?>

    <?php // echo $form->field($model, 'ielts') ?>

    <?php // echo $form->field($model, 'toefl') ?>

    <?php // echo $form->field($model, 'sat') ?>

    <?php // echo $form->field($model, 'gmat') ?>

    <?php // echo $form->field($model, 'gre') ?>

    <?php // echo $form->field($model, 'visible') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
