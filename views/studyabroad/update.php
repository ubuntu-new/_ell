<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Studyabroad */

$this->title = 'Update Studyabroad: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Studyabroads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="studyabroad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
