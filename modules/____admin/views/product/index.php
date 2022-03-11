<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'name',
            'content:ntext',
            'romeli',
            //'client',
            //'price',
            //'keywords',
            //'description',
            //'img',
            //'hit',
            //'new',
            //'sale',
            //'quantity',
            //'additionalInfo:ntext',
            //'visible',
            //'imgGalerry',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
