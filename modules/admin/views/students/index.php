<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\studentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/*
$this->title = 'Items';
$this->params['breadcrumbs'][] = trim($this->title);*/
?>
<div class="items-index">



    <p>
        <?= Html::a('Create Items', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
/*            'title:ntext',
            'description:ntext',*/
            'name',
/*            'image',*/
            //'birthdate',
            //'item_key',
            //'active',
            //'position',
            //'title_ge:ntext',
            //'description_ge:ntext',
            //'name_ge',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
