<?php

namespace backend\controllers;

use Yii;
use common\models\ThuVienHinh;
use common\models\query\ThuVienHinhQuery;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ThuVienHinhController implements the CRUD actions for ThuVienHinh model.
 */
class ThuVienHinhController extends Controller
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
     * Lists all ThuVienHinh models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ThuVienHinhQuery();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ThuVienHinh model.
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
     * Creates a new ThuVienHinh model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        
        $model = new ThuVienHinh();

        if ($model->load(Yii::$app->request->post())) {
            // convert base64 to image
             // convert base64 to image
             $data = $model->avatar;
             $fileName = explode('+', $data);
             $strFileName = $fileName[0];
 
             $position = strpos($strFileName, '.', 0);
             $strFileName = substr($strFileName, 0, $position) . strtotime("now") . '.png';
 
             $strEx = explode('base64,', $data);
             $imgFile = base64_decode($strEx[1]);
 
             file_put_contents(Yii::$app->basePath . '/web/upload/thu-vien-hinh-albumn/' . $strFileName, $imgFile);
             $model->avatar = $strFileName;

            $img1 = UploadedFile::getInstances($model,'img1');
            $img2 = UploadedFile::getInstances($model, 'img2');
            $img3 = UploadedFile::getInstances($model, 'img3');
            $img4 = UploadedFile::getInstances($model, 'img4');
            $img5 = UploadedFile::getInstances($model, 'img5');
            $img6 = UploadedFile::getInstances($model, 'img6');
            echo $img1["name"];
            die();
            if(!empty($img1)){
                $temp1 = $img1->name. strtotime("now") ;
                echo $temp1;die();
                $path = Yii::$app->basePath.'/web/upload/thu-vien-hinh-albumn/'.$temp1;
                $img1->saveAs($path);
                $model->img1= $temp1;
                echo '<pre>';
                print_r($img1);
                die();
            }
            if(!empty($img2)){
                $temp2 = $img2->name . strtotime("now") ;
                $path = Yii::$app->basePath.'/web/upload/thu-vien-hinh-albumn/'.$temp2;
                $img2->saveAs($path);
                $model->img2= $temp2;
            }
            if(!empty($img3)){
                $temp3 = $img3->name . strtotime("now") ;
                $path = Yii::$app->basePath.'/web/upload/thu-vien-hinh-albumn/'.$temp3;
                $img3->saveAs($path);
                $model->img3= $temp3;
            }
            if(!empty($img4)){
                $temp4 = $img4->name . strtotime("now") ;
                $path = Yii::$app->basePath.'/web/upload/thu-vien-hinh-albumn/'.$temp4;
                $img4->saveAs($path);
                $model->img4= $temp4;
            }
            if(!empty($img5)){
                $temp5 = $img5->name . strtotime("now") ;
                $path = Yii::$app->basePath.'/web/upload/thu-vien-hinh-albumn/'.$temp5;
                $img5->saveAs($path);
                $model->img5= $temp5;
            }
            if(!empty($img6)){
                $temp6 = $img6->name . strtotime("now") ;
                $path = Yii::$app->basePath.'/web/upload/thu-vien-hinh-albumn/'.$temp6;
                $img6->saveAs($path);
                $model->img6= $temp6;
            }
            echo '<pre>';
            print_r($model);
            die();
            if($model->save()){
                Yii::$app->session->setFlash('success','Thêm mới albumn ảnh thành công');
                return $this->redirect('index');
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ThuVienHinh model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing ThuVienHinh model.
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
     * Finds the ThuVienHinh model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ThuVienHinh the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ThuVienHinh::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
