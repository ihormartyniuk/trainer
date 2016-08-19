<?php

namespace frontend\controllers;

use frontend\models\BlogArticles;
use Yii;
use frontend\models\Trainer;
use frontend\models\TrainerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TrainerController implements the CRUD actions for Trainer model.
 */
class TrainerController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all Trainer models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TrainerSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Trainer model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Trainer model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Trainer();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionCart()
    {
        $model = $this->findModel(Yii::$app->user->id);
        $avatar = $model->avatar;
        if ($model->load(Yii::$app->request->post())) {
            if ($model->avatar=UploadedFile::getInstance($model, 'avatar')){
                $file_string = strval('images/trainer/profile/' . $model->avatar->baseName . Yii::$app->user->identity->id . '.' . $model->avatar->extension);
                $model->avatar->saveAs($file_string);
                $model->avatar = $file_string;
            }else{$model->avatar=$avatar;}
            $model->update();
            Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
            return $this->redirect(['profile']);
        } else {
            return $this->render('cart', [
                'model' => $model,
            ]);
        }
    }

    public function actionProfile(){
        if (Yii::$app->user->identity->name == ''){return $this->redirect(['cart']);}
        $model = new Trainer();
        $id=Yii::$app->user->identity->id;
        $blogModel = new BlogArticles();
        $articles = $blogModel->find()->where(['author_id' => $id])->orderBy(['date' => SORT_DESC])->all();
        return $this->render('profile', [
            'model' => $model,
            'viewmodel' => $this->findModel($id),
            'articles' => $articles,
            'id'=>$id,
        ]);
    }
    /**
     * Updates an existing Trainer model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Trainer model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Trainer model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Trainer the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Trainer::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
