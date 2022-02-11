<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Englishcenter */

$this->title = 'Create English Center';
$this->params['breadcrumbs'][] = ['label' => 'Englishcenters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="englishcenter-create container">
    <h1 style="margin-top: 100px; color:  #1D386B !important;"><?= Html::encode($this->title) ?>ეეე</h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
