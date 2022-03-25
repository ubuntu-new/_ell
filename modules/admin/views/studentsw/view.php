<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Studentsw */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Studentsws', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="studentsw-view">

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
            'title:ntext',
            'description:ntext',
            'name',
            'birthdate',
            'item_key',
            'active',
            'position',
            'title_ge:ntext',
            'description_ge:ntext',
            'name_ge',
            [
                'attribute'=>'img',
                'value'=>Yii::getAlias('@web').'/uploads/students/'.$model->img,
                'format'=>['image',['width'=>'150']]
            ],
        ],
    ]) ?>

</div>
