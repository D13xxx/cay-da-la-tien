<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'Cây đa la tiến';
?>


<section class="img_banner">
    <div class="container">
        <div class="row">
            <img src="/theme/images/banner-dac-san-que-huong.png" alt="">
        </div>
    </div>
</section>
<section class="list_articles_previews">
    <div class="container">
        <div class="row">
            
        </div>
        <div class="row">
            <div class="col-md-8 list_articles_left">
                <div class="title_list_articles">
                    <h3 class="title">Đặc sản quê hương</h3>
                </div>
                <?php 
                if(!empty( $articles)){
                    foreach( $articles as  $article){ ?>
                        <div class="item_articles">
                            <div class="col-sm-5 item_articles_img ">
                                <a href=""><img src="<?= Yii::getAlias('@fakelink/upload/articles/' . $article->avatar) ?>" alt=""></a>
                            </div>
                            <div class="col-sm-7 item_articles_content">
                                <a href="<?= Url::to(['/articles/view','slug'=>$article->slug])?>">
                                    <h3 class="title"><?= $article->title?></h3>
                                </a>
                                <p class="description"><?= $article->description ? $article->description : '' ?></p>
                                <a href="<?= Url::to(['/articles/view','slug'=>$article->slug])?>" class="view_more">XEM CHI TIẾT ></a>
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
                <div class="bottom-border">
                    
                </div>
            </div>
            <div class="col-md-4 list_articles_right">
                <div class="title_list_articles">
                    <h3 class="title">Xem nhiều nhất</h3>
                </div>
                <?php 
                if(!empty($xemNhieuNhats)){
                    foreach($xemNhieuNhats as $xemNhieuNhat ){ ?>
                        <div class="item_articles_more_viewed">
                            <div class="col-sm-4 item_articles_img ">
                                <a href="<?= Url::to(['/articles/view','slug'=>$xemNhieuNhat->slug])?>"><img src="<?= Yii::getAlias('@fakelink/upload/articles/' . $xemNhieuNhat->avatar) ?>" alt=""></a>
                            </div>
                            <div class="col-sm-8 item_articles_content">
                                <a href="<?= Url::to(['/articles/view','slug'=>$xemNhieuNhat->slug])?>">
                                    <h3 class="title"><?= $xemNhieuNhat->title ?></h3>
                                </a>
                            </div>
                        </div>
                    <?php }
                }
                ?>
                
            </div>
        </div>
    </div>
</section>