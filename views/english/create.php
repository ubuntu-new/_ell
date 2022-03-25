<?php

use app\models\Studyabroad;
use yii\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model app\models\Studyabroad */

$this->title = 'Please fill form correctly';
$this->params['breadcrumbs'][] = ['label' => 'Studyabroads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="container">
    <div class="studyabroad-create" >

        <h1 style="margin-top: 100px; color:  #1D386B !important;"><?= Html::encode($this->title) ?></h1>

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>

    </div>
</div>