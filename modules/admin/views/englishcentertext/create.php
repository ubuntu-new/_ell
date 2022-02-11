<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Englishcentertext */

$this->title = Yii::t('app', 'Create Englishcentertext');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Englishcentertexts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="englishcentertext-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
