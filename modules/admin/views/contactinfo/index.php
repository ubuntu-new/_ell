<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contactinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Contactinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'description:ntext',
            'address',
            'email:email',
            //'mob',
            //'facebook',
            //'instagramm',
            //'racxa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
