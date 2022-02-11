<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Items */

$this->title = 'Update Items: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="items-update">

    <h1><?= Html::encode($model->name) ?></h1><h1><?= Html::encode($model->name_ge) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
