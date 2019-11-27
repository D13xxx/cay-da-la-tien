<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\query\HuongVeQueHuongQuery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Huong Ve Que Huongs';
$this->params['breadcrumbs'][] = $this->title;
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
                    
                    'full_name',
                    'cell_phone',
                    'address',

                    [
                        'attribute'=>'created_at',
                        'format'=>'html',
                        'contentOptions'=> ['style' => 'vertical-align: middle'],
                        'value'=>function($data){
                            return '<abbr class="timeago" title="'.date('Y-m-d H:i:s',$data->created_at).'"></abbr>';
                        }
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>
