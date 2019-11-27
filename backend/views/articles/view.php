<?php

use common\models\Articles;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Articles */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$urlDuyetTin = Url::to(['duyet-tin']);
$urlKhongDuyetTin = Url::to(['khong-duyet-tin']);
$script = <<< JS
    $(".btn-duyet-tin").on("click", function() {
        var thisCtrl = $(this);
        $.ajax({
            type: "POST",
            url: '$urlDuyetTin', // Your controller action
            data: {
                pid: thisCtrl.attr('pid'),
            },
            success: function(data){
                // if(data == 1){
                    location.reload();  
                // }
            }
        });
    })
    $(".btn-khong-duyet-tin").on("click", function() {
        var thisCtrl = $(this);
        $.ajax({
            type: "POST",
            url: '$urlKhongDuyetTin', // Your controller action
            data: {
                pid: thisCtrl.attr('pid'),
            },
            success: function(data){
                // if(data == 1){
                    location.reload();  
                // }
            }
        });
    })
JS;
$this->registerJs($script, \yii\web\View::POS_READY);
?>
<style>
    .block_thumb_slide_show img {
        width: 80% !important;
        margin-left: 10%;
    }
</style>

<div class="articles-view">

    <div class="page-content-wrap">

        <div class="row">
            <div class="col-md-9">

                <div class="panel panel-default">
                    <div class="panel-body posts">

                        <div class="post-item">
                            <div class="post-title">
                                <?= $model->title ?>
                            </div>
                            <div class="post-date"><span class="fa fa-calendar"></span> <?= date("d/m/Y", $model->created_at)?> / <a href="pages-blog-post.html#comments">3 Comments</a> / <a href="pages-profile.html"><?= ucwords($model->user->username) ?></a></div>
                            <div class="post-text">
                                <p style="font-size:10px;"><?= $model->content ? $model->content : 'Nội dung trống' ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <?= Html::a('Cập nhật',['update','id'=>$model->id],['class'=>'btn btn-primary pull-left'])?>  &nbsp;

                    <?= Html::a('Quay lại',['index'],['class'=>'btn btn-default pull-right'])?>
                    <br>
                    <br>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Nhóm tin tức</h3>
                        <div class="links">
                            <?php
                            if (!empty($modelCats)){
                                foreach ($modelCats as $modelCat){?>
                                    <?php
                                        $artilesCat = \common\models\Articles::find()->where(['cat_articles_id'=>$modelCat->id])->count();
                                    ?>
                                    <a href="<?= Url::to(['list-articles-cat','catId'=>$modelCat->id])?>"><?= $modelCat->name ?><span class="label label-default"><?= $artilesCat ? $artilesCat : 0?></span></a>
                                <?php }
                            }
                            ?>

                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Bài viết liên quan</h3>
                        <div class="links small">
                            <?php
                                foreach ($modelBaiVietLienQuans as $modelBaiVietLienQuan){?>
                                    <a href="<?= Url::to(['articles/view','slug'=>$modelBaiVietLienQuan->slug])?>"><?= ucwords($modelBaiVietLienQuan->title) ? ucwords($modelBaiVietLienQuan->title) : ''?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>Tags</h3>
                        <ul class="list-tags push-up-10">
                            <?php
                            if (!empty($tagsNames)){
                                foreach ($tagsNames as $tagsNames=> $values){?>
                                    <li><a href="#"><span class="fa fa-tag"></span> <?= $values ?></a></li>
                                <?php }
                            }
                            ?>
                        </ul>
                    </div>
                </div>
               
            </div>
        </div>

    </div>

</div>
