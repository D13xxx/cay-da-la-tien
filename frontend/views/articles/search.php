<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
use common\models\CatArticles;
?>
<style>
.page-title {
    font-size: 18px;
    font-weight: 600;
    color: #00599f;
    text-transform: uppercase;
}
h2.title_cat{
    font-size: 18px !important;
}
</style>
    
    <!-- main-content -->
    <section class="list_articles_previews">
        <div class="container">
            <div class="row">
                <div class="col-md-12 list_articles_left">
                    <h2 class="title_cat text-center">Từ khóa tìm kiếm : <?= $key?></h2>
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
                    if(!empty($models)){
                        foreach($models as $model){ ?>
                            <div class="item_articles">
                                <div class="col-sm-5 item_articles_img ">
                                    <a href=""><img src="/theme/images/du-lich/img_item_articles.png" alt=""></a>
                                </div>
                                <div class="col-sm-7 item_articles_content">
                                    <a href="">
                                        <h3 class="title"><?= $model->title?></h3>
                                    </a>
                                    <p class="description"><?= $model->description?></p>
                                    <a href="<?= Url::to(['/articles/view','slug'=>$model->slug])?>" class="view_more">XEM CHI TIẾT ></a>
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
                    <div class="bottom-border">
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
