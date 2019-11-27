<?php

namespace backend\controllers;

use common\models\query\CatInsurrancesQuestionQuery;
use Yii;
use common\models\CatArticles;
use common\models\query\CatArticlesQuery;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CatArticlesController implements the CRUD actions for CatArticles model.
 */
class CatArticlesController extends Controller
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
     * Lists all CatArticles models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CatArticlesQuery();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single CatArticles model.
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
     * Creates a new CatArticles model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionCreate()
    {
        $model = new CatArticles();
        $dataCat = $model->getCat();
        
        if ($model->load(Yii::$app->request->post())) {
            $model->status = CatArticles::IS_NEW;
            if($model->save()){
                Yii::$app->session->setFlash('success', Yii::t('app','Thêm mới thành công.'));
                return $this->redirect('index');
            }
        }
        return $this->render('create', [
            'model' => $model,
            'dataCat' => $dataCat,

        ]);
    }

    /**
     * Updates an existing CatArticles model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $dataCat = $model->getCat();
        if ($model->load(Yii::$app->request->post())) {
            if($model->save()){
                Yii::$app->session->setFlash('success', Yii::t('app','Thêm mới thành công.'));
                return $this->redirect('index');
            }
        }

        return $this->render('update', [
            'model' => $model,
            'dataCat' => $dataCat,
        ]);
    }

    /**
     * Deletes an existing CatArticles model.
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
     * Finds the CatArticles model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CatArticles the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CatArticles::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
