<?php
/**
 * Created by PhpStorm.
 * User: levan
 * Date: 5/31/2019
 * Time: 10:31 PM
 */

namespace app\controllers;
use app\models\Category;
use app\models\Provide;
    use Yii;
    use yii\data\Pagination;
    use Faker\Provider\cs_CZ\DateTime;

        class ProvideController extends AppController
        {
            public function actionIndex(){
//        $id = Yii::$app->request->get('id');
                $pro = Provide::find()->all();


                return $this->render('index', compact('pro'));

    }
}