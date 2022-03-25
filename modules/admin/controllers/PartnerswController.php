<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Partnersw;
use app\modules\admin\models\PartnerswSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PartnerswController implements the CRUD actions for Partnersw model.
 */
class PartnerswController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Partnersw models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PartnerswSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Partnersw model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Partnersw model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreateOld()
    {
        $model = new Partnersw();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionCreateOldd()
    {
        $model = new Partnersw();
        $newImg =  $model->img;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->img = UploadedFile::getInstance($model, 'img');
//            $model->item_key = "TEAM";
            $model->save();
            if ($model->save()){
                if(isset($newImg)){
                    $newImg->saveAs('uploads/partners/' .$newImg);
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
public function actionCreate()
    {
        $model = new Partnersw();
//        $newImg =  $model->img;

        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            $model->img = UploadedFile::getInstance($model, 'img');
            $model->img->saveAs('uploads/partners/' . $model->img->baseName . '.' . $model->img->extension);
            $model->save(false);
            if ($model->save(false)) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('create', ['model' => $model]);

    }

    /**
     * Updates an existing Partnersw model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $oldImg = $model->img;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $newImg = UploadedFile::getInstance($model,'img');
            if(isset($newImg)){
                $model->img = $newImg;
            }
            else{
                $model->img = $oldImg;
            }
            if ($model->save()){
                if(isset($newImg)){
                    $newImg->saveAs('uploads/partners/' .$newImg);
                }
            }
            return $this->redirect(['view', 'id' => $model->id]);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Partnersw model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Partnersw model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Partnersw the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Partnersw::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
