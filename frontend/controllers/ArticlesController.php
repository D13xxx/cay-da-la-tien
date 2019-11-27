<?php

namespace frontend\controllers;

use common\models\Banner;
use common\models\CatArticles;
use common\models\Parter;
use common\models\Products;
use Yii;
use common\models\Articles;
use common\models\query\ArticlesQuery;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\Pagination;

/**
 * ArticlesController implements the CRUD actions for Articles model.
 */
class ArticlesController extends Controller
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
     * Lists all Articles models.
     * @return mixed
     */
    public function actionListArticles()
    {
        $query = Articles::find()->where(['is_del'=>Articles::IS_ACTIVE])->orderBy(['id'=>SORT_DESC]);
        $countQuery = clone $query;
        $pages = new Pagination(['pageSize' => 5,'totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $catArticles = CatArticles::find()->all();
        return $this->render('list-articles', [
            'models' => $models,
            'pages' => $pages,
            'catArticles' => $catArticles,
        ]);
    }
    public function actionListArticlesCat($code)
    {
        $catArticlesName = CatArticles::find()->where(['code'=>$code])->one();
        $query = Articles::find()->andWhere(['cat_articles_id'=>$catArticlesName->id])->andWhere(['is_del'=>Articles::IS_ACTIVE]);
        $countQuery = clone $query;
        $pages = new Pagination(['pageSize' => 5,'totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $catArticles = CatArticles::find()->all();
        return $this->render('list-articles-cat', [
            'models' => $models,
            'pages' => $pages,
            'catArticles' => $catArticles,
            'catArticlesName' => $catArticlesName,
        ]);
    }

    /**
     * Displays a single Articles model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($slug)
    {
       $articles = Articles::find()->where(['slug'=>$slug])->one();
        return $this->render('view', [
            'articles' => $articles,
        ]);
    }

    public function actionSearch(){
        $key = Yii::$app->request->get('txtSearch');
        $query = Articles::find()->where(['like', 'title', $key])
            ->orWhere(['like', 'slug', $key])
            ->orWhere(['like', 'slug', $key]);
        $countQuery = clone $query;
        $pages = new Pagination(['pageSize' => 10,'totalCount' => $countQuery->count()]);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        // $catArticles = CatArticles::find()->all();
        return $this->render('search',[
            'models'=>$models,
            'key'=>$key,
            'pages'=>$pages,
            // 'catArticles'=>$catArticles,
        ]);
    }
    protected function findModel($id)
    {
        if (($model = Articles::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
