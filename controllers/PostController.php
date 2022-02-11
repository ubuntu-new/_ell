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

class PostController extends AppController
{
    public function actionIndex(){
        $id = Yii::$app->request->get('id');
        $postt = Product::find()->where(['id' => $id])->limit(1)->one();
        //debug($postt);

        return $this->render('index', compact('postt'));

    }

    public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        //debug($id);
        $category = Category::findOne($id);
        if(empty($category))
            throw new \yii\web\HttpException(404, 'Nothing to show');


        $products = Product::find()->where(['category_id' => $id])->all();
       // $query = Product::find()->where(['category_id' => $id]);
        /*$pages = new Pagination(['totalCount' => $query->count(),
            'pageSize' => 3,
            'forcePageParam' => FALSE,
            'pageSizeParam' => FALSE]);*/
        //$products = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('view', compact('products'));

    }
}