<?php/** * Created by PhpStorm. * User: levan * Date: 5/31/2019 * Time: 10:31 PM */namespace app\controllers;use app\models\Category;use app\models\Studyabroad;use app\models\Product;use app\models\Provide;use app\models\Providetxt;use Faker\Provider\cs_CZ\DateTime;use Yii;use yii\data\Pagination;class CategoryController extends AppController{    public function actionIndex(){        $model = new Studyabroad();        $time = new \DateTime('now');        $today = $time->format('Y-m-d');        //$hits = Product::find()->where(['>','date' ,  $today])->all();        $hits = Product::find()->orderBy(['date' => SORT_DESC])->limit(5)->all();        $provide = Provide::find()->all();        $provideTxt = Providetxt::find()->all();        if ($model->load(Yii::$app->request->post()) && $model->save()) {            if ($model->save()) {                Yii::$app->session->setFlash('success', 'Your Message Is Sent!');            }            else{                Yii::$app->session->setFlash('error', 'Your Message Was Not Sent!');                /* \Yii::$app->mailer->compose('study', ['model' => $model])                     ->setFrom('levani76@mail.ru')                     ->setTo($model->email)                     ->setSubject("Order")                     ->send();*/            }        }        $model->id = null;        $model->name = null;        $model->bday = null;        $model->phone = null;        $model->email = null;        $model->uk = null;        $model->usa = null;        $model->canada = null;        $model->europe = null;        $model->asia = null;        $model->schoolpropgrams = null;        $model->bachelormasters = null;        $model->phd = null;        $model->asia = null;        $model->lsnguageprograms = null;        $model->professionalcourses = null;        $model->summerschgoolforjuniors = null;        $model->visible = null;        return $this->render('index', [            'model' => $model,            'id' => $model->id,            'provide' => $provide,            'provideTxt' => $provideTxt,        ]);    }    public function actionView($id)    {        $id = Yii::$app->request->get('id');        //debug($id);      /*  $category = Category::findOne($id);        if(empty($category))            throw new \yii\web\HttpException(404, 'Nothing to show');*/        $time = new \DateTime('now');        $today = $time->format('Y-m-d');    if ($id == 2) {        $products = Product::find()->where(['<','date' ,  $today])->all();    } else {        $products = Product::find()->where(['>','date' ,  $today])->all();    }       // $query = Product::find()->where(['category_id' => $id]);        /*$pages = new Pagination(['totalCount' => $query->count(),            'pageSize' => 3,            'forcePageParam' => FALSE,            'pageSizeParam' => FALSE]);*/        //$products = $query->offset($pages->offset)->limit($pages->limit)->all();        if(empty($products))            throw new \yii\web\HttpException(404, 'Nothing to show');        return $this->render('view', compact('products'));    }    public function actionForm(){        $model = new Studyabroad();        if ($model->load(Yii::$app->request->post()) && $model->save()&& $model->validate()) {            if ($model->save()) {                Yii::$app->mailer->compose('study', ['model' => $model])                    ->setFrom('infonargiza@gmail.com')                    ->setTo('infonargiza@gmail.com')                    ->setSubject('Stady Abroad')                    ->send();                Yii::$app->session->setFlash('success', 'Your Message Is Sent!');            }            else{                Yii::$app->session->setFlash('error', 'Your Message Was Not Sent!');                /* \Yii::$app->mailer->compose('study', ['model' => $model])                     ->setFrom('levani76@mail.ru')                     ->setTo($model->email)                     ->setSubject("Order")                     ->send();*/            }        }        $model->id = null;        $model->name = null;        $model->bday = null;        $model->phone = null;        $model->email = null;        $model->uk = null;        $model->usa = null;        $model->canada = null;        $model->europe = null;        $model->asia = null;        $model->schoolpropgrams = null;        $model->bachelormasters = null;        $model->phd = null;        $model->asia = null;        $model->lsnguageprograms = null;        $model->professionalcourses = null;        $model->summerschgoolforjuniors = null;        $model->visible = null;        return $this->render('form', [            'model' => $model,        ]);    }}