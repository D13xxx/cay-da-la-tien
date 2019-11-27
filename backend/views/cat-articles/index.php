<?php

use common\models\Products;
use common\models\query\ArticlesQuery;
use dosamigos\tinymce\TinyMce;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;
use yii\widgets\ActiveForm;
use common\models\CatArticles;

/* @var $this yii\web\View */
/* @var $searchModel common\models\query\ArticlesQuery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tin tức';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="page-content-wrap">
    <?= $this->render('_search',[
        'model'=>$searchModel,
    ])?>
</div>
</div> 
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'code',
                    'name',
                    [
                        'attribute'=>'parent_id',
                        'value'=>function($data){
                            $name = CatArticles::find()->where(['id'=>$data->parent_id])->one();
                            if (!empty($name)){
                                return $name->name;

                            }
                        }
                    ],
                    [
                        'attribute'=>'status',
                        'format'=>'html',
                        'value'=>function($data){
                            return '<span class="label label-'.CatArticles::TT_COLOR_ARRAY()[(int)$data->status].'">'.CatArticles::TT_ARRAY()[(int)$data->status].'</span>';
                        }
                    ],
                    [
                        'header'=>'Chức năng',
                        'format' => 'raw',
                        'contentOptions'=> ['style' => 'vertical-align: middle;font-size:17px; text-align:center'],
                        'value' => function ($data) {
                            if($data->status == CatArticles::IS_ACTIVE){
                                $strButton = '<div class="btn-group">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true"><span class="glyphicon glyphicon-cog"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="'.\yii\helpers\Url::to(['update','id'=>$data->id]).'"><span class="glyphicon glyphicon glyphicon-pencil"></span> Cập nhật</a></li>
                                    </ul>
                                </div>
                                ';
                            }else {
                                $strButton = '<div class="btn-group">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true"><span class="glyphicon glyphicon-cog"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="'.\yii\helpers\Url::to(['update','id'=>$data->id]).'"> Cập nhật</a></li>
                                        <li>
                                            <form action="'.\yii\helpers\Url::to(['delete','id'=>$data->id]).'" method="post" onclick="return confirm(\'Bạn có chắc chắn muốn xóa bài viết này hay không?\');">
                                                <button type="submit" class="btn-submit"> Xóa</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                                ';
                            }
                            
                            return  $strButton;
                        },
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
