<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 5/31/2019
 * Time: 10:31 PM
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;
use Faker\Provider\cs_CZ\DateTime;

class AboutController extends AppController
{
    public function actionIndex(){
        $id = Yii::$app->request->get('id');
        $postt = Product::find()->where(['id' => $id])->limit(1)->one();
        //debug($postt);

        return $this->render('index', compact('postt'));

    }
}