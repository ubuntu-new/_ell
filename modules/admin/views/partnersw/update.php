<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Partnersw */

$this->title = 'Update Partnersw: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Partnersws', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="partnersw-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
