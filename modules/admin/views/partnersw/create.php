<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Partnersw */

$this->title = 'Create Partnersw';
$this->params['breadcrumbs'][] = ['label' => 'Partnersws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partnersw-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
