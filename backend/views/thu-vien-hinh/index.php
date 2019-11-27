<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\query\ThuVienHinhQuery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Thư viện hình';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-md-12">
    <div class="row">
        <?= $this->render('_search',[
            'model'=>$searchModel,
        ])?>
    </div>
    
    <div class="panel panel-default">
        <div class="page-content-wrap">
            <div class="row">
                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],
                            'avatar',
                            'title',
                            [
                                'header'=>'Chức năng',
                                'format' => 'raw',
                                'contentOptions'=> ['style' => 'vertical-align: middle;font-size:17px; text-align:center'],
                                'value' => function ($data) {
                                   
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
                                    
                                    return  $strButton;
                                },
                            ],
                        ],
                    ]); ?>
            </div>
        </div>

    </div>
</div>
