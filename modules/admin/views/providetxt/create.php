<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Provide */

$this->title = Yii::t('app', 'Create Provide');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Provides'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="provide-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
