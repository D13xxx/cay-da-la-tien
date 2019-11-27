<?php

use dosamigos\tinymce\TinyMce;
use yii\helpers\Html;
use \common\models\Articles;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel common\models\query\ArticlesQuery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tin tức';
$this->params['breadcrumbs'][] = $this->title;
$this->registerJsFile(
    Yii::$app->request->baseUrl . '/js/jquery.timeago.js',
    ['depends' => ['\yii\web\JqueryAsset']]
);
$this->registerJs("jQuery('abbr.timeago').timeago();", \yii\web\View::POS_READY);

?>
<div class="page-content-wrap">
    <?= $this->render('_search',[
        'model'=>$searchModel,
    ])?>
</div>

<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    
                    [
                        'attribute' => 'avatar',
                        'format' => 'html',
                        'value' => function ($data) {
                            return Html::img(\Yii::$app->request->BaseUrl.'/upload/articles/'.$data['avatar'],
                                ['width' => '100px'],['class'=>'thum-nail']);
                        },
                    ],
                    [
                        'attribute' => 'title',
                        'format' => 'html',
                        'value' => function ($data) {
                            return Html::a(ucwords($data->title), ['view','slug'=>$data->slug]);
                        },
                    ],
                    [
                        'attribute'=>'type',
                        'format'=>'html',
                        'contentOptions'=> ['style' => 'vertical-align: middle'],
                        'value'=>function($data){
                            return '<span class="label label-'.Articles::T_COLOR_ARRAY()[(int)$data->type].'">'.Articles::T_ARRAY()[(int)$data->type].'</span>';
                        }
                    ],
                    [
                        'attribute'=>'cat_articles_id',
                        'format'=>'html',
                        'contentOptions'=> ['style' => 'vertical-align: middle'],
                        'value'=>function($data){
                            return $data->cat_articles_id ?  $data->catArtiles->name : '';
                        }
                    ],
                    [
                        'attribute'=>'author',
                        'format'=>'html',
                        'contentOptions'=> ['style' => 'vertical-align: middle'],
                        'value'=>function($data){
                            $fullName = \common\models\InfoProfile::find()->where(['user_id'=>$data->author])->one();
                            return $fullName->full_name;
                        }
                    ],
                    [
                        'attribute'=>'status',
                        'format'=>'html',
                        'contentOptions'=> ['style' => 'vertical-align: middle'],
                        'value'=>function($data){
                            return '<span class="label label-'.Articles::TT_COLOR_ARRAY()[(int)$data->status].'">'.Articles::TT_ARRAY()[(int)$data->status].'</span>';
                        }
                    ],
                    

                    [
                        'attribute'=>'created_at',
                        'format'=>'html',
                        'contentOptions'=> ['style' => 'vertical-align: middle'],
                        'value'=>function($data){
                            return '<abbr class="timeago" title="'.date('Y-m-d H:i:s',$data->created_at).'"></abbr>';
                        }
                    ],
                    [
                        'header'=>'Chức năng',
                        'headerOptions' => ['style' => 'width:80px;'],
                        'format' => 'raw',
                        'contentOptions'=> ['style' => 'vertical-align: middle;font-size:17px; text-align:center'],
                        'value' => function ($data) {
                            if($data->status == Articles::TT_MOI){
                                $strButton = '
                                <div class="btn-group">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true"><span class="glyphicon glyphicon-cog"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="'.\yii\helpers\Url::to(['view','slug'=>$data->slug]).'"><span class="glyphicon glyphicon-eye-open"></span> Xem chi tiết</a></li>
                                        <li><a href="'.\yii\helpers\Url::to(['update','id'=>$data->id]).'"><span class="glyphicon glyphicon glyphicon-pencil"></span> Cập nhật</a></li>
                                        <li><a href="'.\yii\helpers\Url::to(['active','id'=>$data->id]).'" onclick="return confirm(\'Bạn có chắc chắn muốn kích hoạt bài viết này hay không?\');"><span class="glyphicon glyphicon glyphicon-refresh"></span> Kích hoạt bài viết</a></li>
                                        <li><a href="'.\yii\helpers\Url::to(['del','id'=>$data->id]).'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa bài viết này hay không?\');"><span class="glyphicon glyphicon-trash"></span> Xóa</a></li>
                                    </ul
                                </div>
                                ';
                            }else{
                                $strButton = '
                                <div class="btn-group">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true"><span class="glyphicon glyphicon-cog"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="'.\yii\helpers\Url::to(['view','slug'=>$data->slug]).'"><span class="glyphicon glyphicon-eye-open"></span> Xem chi tiết</a></li>
                                        <li><a href="'.\yii\helpers\Url::to(['update','id'=>$data->id]).'"><span class="glyphicon glyphicon glyphicon-pencil"></span> Cập nhật</a></li>
                                        <li><a href="'.\yii\helpers\Url::to(['disable','id'=>$data->id]).'" onclick="return confirm(\'Bạn có chắc chắn muốn ẩn bài viết này hay không?\');"><span class="glyphicon glyphicon glyphicon-lock"></span> Ẩn bài viết</a></li>
                                        <li>
                                            <a href="'.\yii\helpers\Url::to(['del','id'=>$data->id]).'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa bài viết này hay không?\');"><span class="glyphicon glyphicon-trash"></span> Xóa</a></li>
                                    </ul
                                </div>
                                ';
                            }

                            return 	$strButton;
                        },
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
