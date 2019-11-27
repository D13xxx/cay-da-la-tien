<?php
use yii\widgets\LinkPager;
use yii\helpers\Html;
use yii\helpers\Url;
use  yii\data\Pagination;
/* @var $this yii\web\View */
/* @var $model common\models\Articles */

\yii\web\YiiAsset::register($this);
?>
<style>
    .img-responsive.img-text {
        width: 100% !important;
    }
</style>
<div class="page-title">
    <h2><span class="fa fa-arrow-circle-o-left"></span> <?= $cat->name?></h2>
</div>
<div class="page-content-wrap">

    <div class="row">
        <div class="col-md-9">

            <div class="panel panel-default">
                <div class="panel-body posts">

                    <div class="row">
                        <?php
                            if (!empty($model)){
                                foreach ($model as $article){?>
                                    <div class="col-md-4">

                                        <div class="post-item">
                                            <div class="post-title">
                                                <a href="<?= Url::to(['view','slug'=>$article->slug])?>"><?= $article->title?></a>
                                            </div>
                                            <div class="post-date"><span class="fa fa-calendar"></span> <?= date("d/m/Y", $article->created_at)?> / <a href="pages-blog-post.html#comments">3 Comments</a> / <a href="pages-profile.html">by <?= ucwords($article->user->username) ?></a></div>
                                            <div class="post-text">
                                                <?php
                                                if(!empty($article->avatar)){
                                                    echo Html::img(Yii::$app->request->baseUrl.'/upload/articles/'.$article->avatar,['alt'=>'some', 'class'=>'img-responsive img-text']);
                                                } else {
                                                    echo Html::img(Yii::$app->request->baseUrl.'/upload/articles/default.png',['alt'=>'some', 'class'=>'img-responsive img-text']);
                                                }
                                                ?>

                                                <p><?= $article->desc ? $article->desc : ''?></p>
                                            </div>
                                            <div class="post-row">
                                                <a href="<?= Url::to(['view','slug'=>$article->slug])?>" class="btn btn-default btn-rounded pull-left">Xem chi tiết →</a>
                                            </div>
                                        </div>

                                    </div>
                                <?php }
                            }
                        ?>
                        <?=
                        LinkPager::widget([
                            'pagination' => $pages,
                        ]);
                        ?>
                    </div>
                </div>
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
                    <h3>Lượt xem nhiều nhất nhóm</h3>
                    <div class="links small">
                        <?php
                        if (!empty($articlesViews)){
                            foreach ( $articlesViews as $articlesView){?>
                                <a href="<?= Url::to(['articles/view','slug'=>$articlesView->slug])?>"><?= $articlesView->title ? ucwords($articlesView->title) : ''?></a>
                           <?php  }
                        }
                        ?>

                    </div>
                </div>
            </div>

        </div>
    </div>

</div>