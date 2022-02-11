<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EnglishcenterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Englishcenters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="englishcenter-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Englishcenter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'bday',
            'phone',
            'email:email',
            //'generalenglish',
            //'esol',
            //'ielts',
            //'toefl',
            //'sat',
            //'gmat',
            //'gre',
            //'visible',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
