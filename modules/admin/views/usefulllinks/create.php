<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Usefulllinks */

$this->title = 'Create Usefulllinks';
$this->params['breadcrumbs'][] = ['label' => 'Usefulllinks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usefulllinks-create container">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
