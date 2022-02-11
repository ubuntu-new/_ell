<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\EnglishSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Englishes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="english-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create English', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           'id',
  /*           'category_id',*/
            /*'name',
            'content:ntext',*/
            'name_ge',
            'content_ge:ntext',
            //'price',
            //'keywords',
            //'description',
            //'img',
            //'hit',
            //'new',
            //'sale',
            //'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
