<?php

namespace backend\controllers;

use Yii;
use common\models\HuongVeQueHuong;
use common\models\query\HuongVeQueHuongQuery;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HuongVeQueHuongController implements the CRUD actions for HuongVeQueHuong model.
 */
class HuongVeQueHuongController extends Controller
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
     * Lists all HuongVeQueHuong models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HuongVeQueHuongQuery();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
