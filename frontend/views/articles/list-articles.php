<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>


<div class="banner_main bk-detail-product">
    <div class="breadcrumb">
        <p>
            <a href="#">Góc chuyên gia</a>
            <i class="fal fa-chevron-right"></i>
            <a href="#">Câu chuyện</a>
        </p>
    </div>
</div>
<!-- end header -->
<div id="wrapper" class="check">

    <!-- main-content -->
    <div class="news">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="ileft col-lg-9">
                                <?php
                                if (!empty($models)){
                                    foreach ($models as $model) {?>
                                        <div class="item row">
                                            <div class="image col-md-6">
                                                <a href="<?= \yii\helpers\Url::to(['/articles/view','slug'=>$model->slug])?>">
                                                    <?php
                                                    if(!empty($model->avatar)){?>
                                                        <img src="<?= Yii::getAlias('@fakelink/articles/'.$model->avatar)?>" class="avatar  img-thumbnail" >
                                                    <?php }else{?>
                                                        <img src="https://via.placeholder.com/300x200" id="avatarPro"  class="avatar  img-thumbnail" alt="avatar">
                                                    <?php }
                                                    ?>
                                                </a>
                                            </div>
                                            <div class="info col-md-6">
                                                <a href="<?= \yii\helpers\Url::to(['/articles/view','slug'=>$model->slug])?>" class="title"><?= $model->title ?></a>
                                                <p><?= $model->desc ? $model->desc : ''?> …</p>
                                                <a href="<?= \yii\helpers\Url::to(['/articles/view','slug'=>$model->slug])?>" class="more">Chi tiết <i class="far fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    <?php }
                                }
                                ?>

                            <nav class="page" aria-label="Page navigation example text-center">
                                <?=
                                    LinkPager::widget([
                                        'pagination' => $pages,
                                    ]);
                                ?>
                            </nav>
                        </div>
                        <div class="iright col-lg-3">
                            <h3>Góc chuyên gia</h3>
                            <ul>
                                <?php
                                if (!empty($catArticles)){
                                    foreach ($catArticles as $catArticle){?>
                                        <li><a href="<?= Url::to(['/articles/list-articles-cat','code'=>$catArticle->code])?>"><?= $catArticle->name ?></a></li>
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

    <!-- partner -->
    <?= $this->render('/layouts/parter') ?>
    <!-- end  parter-->

</div>