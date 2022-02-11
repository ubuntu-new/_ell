<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\English */

$this->title = 'Create English';
$this->params['breadcrumbs'][] = ['label' => 'Englishes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="english-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
