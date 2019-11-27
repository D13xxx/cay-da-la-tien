<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php
$id = \Yii::$app->user->identity->id;
$user = \common\models\InfoProfile::find()->where(['user_id'=>$id])->one();
$frontend = \backend\assets\FrontendAsset::register($this);
?>
<?php
$model = \common\models\InfoProfile::find()->where(['user_id'=>$id])->one();

?>
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="<?= Url::to('/site/index')?>">BAOHIEM.VN</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-profile">
            <a href="<?= Url::to(['info-profile/update','id'=>$user->id])?>" class="profile-mini">
                <?php
                if(!empty($model->avatar)){ ?>
                    <?= Html::img(\Yii::$app->request->BaseUrl.'/upload/info-profile/'.$model->avatar,['class'=>'avatar img-circle'])?>
                <?php }else{ ?>
                    <img src="https://via.placeholder.com/200x200" class="avatar img-circle " alt="avatar">
                <?php }
                ?>
            </a>
            <div class="profile">
                <div class="profile-image">
                    <a href="<?= Url::to(['info-profile/update','id'=>$user->id])?>">
                        <?php
                            if(!empty($model->avatar)){ ?>
                                <?= Html::img(\Yii::$app->request->BaseUrl.'/upload/info-profile/'.$model->avatar,['class'=>'avatar img-thumbnail img-circle'])?>
                            <?php }else{ ?>
                                <img src="https://via.placeholder.com/200x200" class="avatar img-circle img-thumbnail" alt="avatar">
                            <?php }
                        ?>
                       
                    </a>
                </div>
                <div class="profile-data">

                    <div class="profile-data-name"><?= $user->full_name ?></div>
                    <div class="profile-data-title">Web Developer/Designer</div>
                </div>
                <div class="profile-controls">

                </div>
            </div>
        </li>
    
        <li class="xn-openable <?=  Yii::$app->controller->id == 'rbac' ? 'active' : ''?>">
            <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">M00 - Cấu hình phân quyền</span></a>
            <ul>
                <li class="<?=  Yii::$app->controller->action->id == 'route' ? 'active' : ''?>"><a href="<?= Url::to('/rbac/route')?>"><span class="xn-text">RBAC Route</span></a></li>
                <li class="<?=  Yii::$app->controller->action->id == 'permission' ? 'active' : ''?>"><a href="<?= Url::to('/rbac/permission')?>"><span class="xn-text">RBAC Permission</span></a></li>
                <li class="<?=  Yii::$app->controller->action->id == 'role' ? 'active' : ''?>"><a href="<?= Url::to('/rbac/role')?>"><span class="xn-text">RBAC Role</span></a></li>
                <li class="<?=  Yii::$app->controller->action->id == 'assignment' ? 'active' : ''?>"><a href="<?= Url::to('/rbac/assignment')?>"><span class="xn-text">RBAC Assignment</span></a></li>
            </ul>
        </li>
        <!-- m01 -->
        <li class="xn-openable <?=  Yii::$app->controller->id == 'user' ? 'active' : ''?>">
            <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">M01 - Cấu hình tài khoản</span></a>
            <ul>
                <li class="<?=  Yii::$app->controller->action->id == 'index' ? 'active' : ''?>"><a href="<?= Url::to('/user/index')?>"><span class="xn-text">Tài khoản quản trị</span></a></li>
            </ul>
        </li>
        <!-- m02 -->
        <li class="xn-openable <?=  Yii::$app->controller->id == 'banner' || Yii::$app->controller->id == 'cat-articles' || Yii::$app->controller->id == 'cat-insurrances' ? 'active' : ''?>">
            <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">M02 - Thiết lập cài đặt</span></a>
            <ul>
                <li class="<?=  Yii::$app->requestedRoute == 'banner/index' ? 'active' : ''?>"><a href="<?= Url::to('/banner/index')?>"><span class="xn-text">Cấu hình banner</span></a></li>
                <li class="<?=  Yii::$app->requestedRoute == 'cat-articles/index' ? 'active' : ''?>"><a href="<?= Url::to('/cat-articles/index')?>"><span class="xn-text"></span> Nhóm tin tức</a></li>
            </ul>
        </li>
        <!-- m03 -->
        <li class="xn-openable <?=  Yii::$app->controller->id == 'articles' ? 'active' : ''?>">
            <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">M03 - Tin tức</span></a>
            <ul>
                <li class="<?=  Yii::$app->controller->action->id == 'create' ? 'active' : ''?>"><a href="<?= Url::to('/articles/create')?>">Thêm mới tin</a></li>
                <li class="<?=  Yii::$app->controller->action->id == 'index' ? 'active' : ''?>"><a href="<?= Url::to('/articles/index')?>">Danh sách Tin tức</a></li>
            </ul>
        </li>

        <li class="xn-openable <?=  Yii::$app->controller->id == 'thu-vien-video' ? 'active' : ''?>">
            <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">M03 - Thư viện Video</span></a>
            <ul>
                <li class="<?=  Yii::$app->controller->action->id == 'create' ? 'active' : ''?>"><a href="<?= Url::to('/thu-vien-video/create')?>">Thêm mới</a></li>
                <li class="<?=  Yii::$app->controller->action->id == 'index' ? 'active' : ''?>"><a href="<?= Url::to('/thu-vien-video/index')?>">Danh sách</a></li>
            </ul>
        </li>
        <li class="xn-openable <?=  Yii::$app->controller->id == 'thu-vien-hinh' ? 'active' : ''?>">
            <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">M03 - Thư viện Album ảnh</span></a>
            <ul>
                <li class="<?=  Yii::$app->controller->action->id == 'create' ? 'active' : ''?>"><a href="<?= Url::to('/thu-vien-hinh/create')?>">Thêm mới</a></li>
                <li class="<?=  Yii::$app->controller->action->id == 'index' ? 'active' : ''?>"><a href="<?= Url::to('/thu-vien-hinh/index')?>">Danh sách</a></li>
            </ul>
        </li>

        <li class="xn-openable <?=  Yii::$app->controller->id == 'huong-ve-que-huong' ? 'active' : ''?>">
            <a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">M04 - Hướng về quê hương</span></a>
            <ul>
                <li class="<?=  Yii::$app->controller->action->id == 'index' ? 'active' : ''?>"><a href="<?= Url::to('/huong-ve-que-huong/index')?>">Danh sách</a></li>
            </ul>
        </li>

    </ul>
    <!-- END X-NAVIGATION -->
</div>