<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
$this->title = 'Cây đa la tiến';
?>
<section class="list_articles_previews">
        <div class="container">
            <div class="row">
                <div class="col-md-8 list_articles_left">
                    <h2 class="title_cat">Tin tức</h2>
                    <div class="title_list_articles">
                        <ul>
                            <?php 
                            if(!empty($cats)){
                                foreach($cats as $cat){ ?>
                                    <li>
                                        <a href="<?= Url::to(['/articles/list-articles-cat','slug'=>$cat->code])?>"><?= $cat->name ?></a>
                                    </li>
                                <?php }
                            }
                            ?>
                        </ul>
                    </div>
                    <?php 
                    if(!empty( $articles)){
                        foreach( $articles as  $article){ ?>
                            <div class="item_articles">
                                <div class="col-sm-5 item_articles_img ">
                                    <a href=""><img src="/theme/images/du-lich/img_item_articles.png" alt=""></a>
                                </div>
                                <div class="col-sm-7 item_articles_content">
                                    <a href="">
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
                    <div class="cat"></div>
                    <div class="title_list_articles">
                        <h3 class="title">Tin nổi bật</h3>
                    </div>
                    <?php 
                    if(!empty($hotNews)){
                        foreach($hotNews as $hotNew){ ?>
                            <div class="item_articles_more_viewed_date">
                                <a href="<?= Url::to(['/articles/view','slug'=>$hotNew->slug])?>">
                                    <h3 class="title_new"><?= $hotNew->title ?></h3>
                                </a>
                                <a href="" class="cat_articles"><?= $hotNew->catArtiles->name ?></a>
                            </div>
                        <?php }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>