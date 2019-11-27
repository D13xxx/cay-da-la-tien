<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\query\UserQuery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Tài khoản hệ thống');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    button.btn-submit {
    width: 100%;
    border: none;
    text-align: left;
    padding-left: 12px;
    padding-top: 7px;
    padding-bottom: 7px;
    background: no-repeat;
}
</style>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <?= Html::a('Tạo tài khoản', ['create'], ['class' => 'btn btn-primary']) ?>
            <br>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    
                    'username',
//                    'auth_key',
//                    'password_hash',
//                    'password_reset_token',
                    'email:email',
                    [
                        'attribute'=>'status',
                        'format'=>'html',
                        'filter' => \common\models\User::TT_ARRAY(),
                        'value'=>function($data){
                            return \common\models\User::TT_ARRAY()[(int)$data->status];
                        }
                    ],
                    [
                        'header' => 'Chức năng',
                        'headerOptions' => ['style' => 'width:80px;'],
                        'format' => 'raw',
                        'contentOptions'=> ['style' => 'vertical-align: middle;font-size:17px; text-align:center'],
                        
                        'value' => function ($data) {
                            $strButton = '<div class="btn-group">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="true"><span class="glyphicon glyphicon-cog"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                    <li>
                                        <a href="'.\yii\helpers\Url::to(['rbac/assignment/view','id'=>$data->id]).'" >Phân quyền</a>
                                    </li>
                                    <li>
                                        <a href="'.\yii\helpers\Url::to(['user/reset-password','id'=>$data->id]).'"  onclick="return confirm(\'Bạn có chắc chắn muốn reset mật khẩu hay không?\');">Reset password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="'.\yii\helpers\Url::to(['khoa-tai-khoan','id'=>$data->id]).'" onclick="return confirm(\'Bạn có chắc chắn muốn khóa tài khoản này hay không?\');">Khóa tài khoản
                                        </a>
                                    </li>
                                    <form action="'.\yii\helpers\Url::to(['delete','id'=>$data->id]).'" method="post" onclick="return confirm(\'Bạn có chắc chắn muốn xóa tài khoản này hay không?\');">
                                                <button type="submit" class="btn-submit"> Xóa</button>
                                    </form>     
                                </ul>
                            </div>
                            ';
                            return 	$strButton;
                        },
                    ],
                ],
            ]); ?>
        </div>
    </div>
</div>

<div class="panel panel-default">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <br>
                <?= Html::a('Quay lại',['/site/index'],['class'=>'btn btn-default pull-right'])?>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
