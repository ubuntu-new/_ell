<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Studyabroad */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Studyabroads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
<div class="studyabroad-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'bday',
            'phone',
            'email:email',
            'uk',
            'usa',
            'canada',
            'europe',
            'asia',
            'schoolpropgrams',
            'bachelormasters',
            'phd',
            'lsnguageprograms',
            'professionalcourses',
            'summerschgoolforjuniors',
            'visible',
        ],
    ]) ?>

</div>
</div>