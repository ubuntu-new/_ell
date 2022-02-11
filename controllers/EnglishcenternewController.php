<?php

namespace app\controllers;


use Yii;
use yii\filters\AccessControl;
class EnglishcenternewController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
