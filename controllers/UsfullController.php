<?php

namespace app\controllers;

use app\models\Usfullinks;
use app\models\db\Usfull;

class UsfullController extends \yii\web\Controller
{
    public function actionIndex()
    {
//        $usfulLinks = Usfullinks::find()->where(['hit' => '1'])->limit(6)->all();
        $usfulLinks = Usfullinks::find()->where(['visible' => '1'])->all();
        $usfultxt = Usfull::find()->where(['visible' => '1'])->all();
        return $this->render('index', compact('usfulLinks','usfultxt'));
    }

}
