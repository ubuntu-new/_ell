<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\StudentswSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Studentsws';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentsw-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Studentsw', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title:ntext',
            'description:ntext',
            'name',
            'image',
            //'birthdate',
            //'item_key',
            //'active',
            //'position',
            //'title_ge:ntext',
            //'description_ge:ntext',
            //'name_ge',
            //'img',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
