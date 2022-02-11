<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Studyabroadincome */

$this->title = Yii::t('app', 'Create Studyabroadincome');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Studyabroadincomes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studyabroadincome-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
