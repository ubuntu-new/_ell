<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Contactinfo */

$this->title = 'Create Contactinfo';
$this->params['breadcrumbs'][] = ['label' => 'Contactinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactinfo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
