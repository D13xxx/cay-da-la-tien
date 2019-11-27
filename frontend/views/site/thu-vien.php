<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Products;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;

$this->title = 'Cây đa la tiến';
?>
<div class="content container">
    <section class="banner">
        <img src="/theme/images/hinh-anh/banner.png" alt="">
    </section>
    <section class="thu_vien_anh">
        <h3 class="title"><img src="/theme/images/hinh-anh/icon-thu-muc-hinh.png" alt=""> Thư mục hình</h3>
        <div class="albums">
            <img src="/theme/images/hinh-anh/albums.png" class="avatar" alt="">
            <img src="/theme/images/hinh-anh/albums.png" class="sub_avatar" alt="">
            <a class="" data-toggle="modal" data-target="#exampleModal">Albumn 1 Cây đa la tiến </a>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="owl-carousel owl-theme">
                            <div class="item"><h4>1</h4></div>
                            <div class="item"><h4>2</h4></div>
                            <div class="item"><h4>3</h4></div>
                            <div class="item"><h4>4</h4></div>
                            <div class="item"><h4>5</h4></div>
                            <div class="item"><h4>6</h4></div>
                            <div class="item"><h4>7</h4></div>
                            <div class="item"><h4>8</h4></div>
                            <div class="item"><h4>9</h4></div>
                            <div class="item"><h4>10</h4></div>
                            <div class="item"><h4>11</h4></div>
                            <div class="item"><h4>12</h4></div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="albums">
            <img src="/theme/images/hinh-anh/albums.png" class="avatar" alt="">
            <img src="/theme/images/hinh-anh/albums.png" class="sub_avatar" alt="">
            <a class="" data-toggle="modal" data-target="#exampleModal">Albumn 1 Cây đa la tiến </a>
        </div>
        <div class="albums">
            <img src="/theme/images/hinh-anh/albums.png" class="avatar" alt="">
            <img src="/theme/images/hinh-anh/albums.png" class="sub_avatar" alt="">
            <a class="" data-toggle="modal" data-target="#exampleModal">Albumn 1 Cây đa la tifdgdfgến </a>
        </div>
        <div class="albums">
            <img src="/theme/images/hinh-anh/albums.png" class="avatar" alt="">
            <img src="/theme/images/hinh-anh/albums.png" class="sub_avatar" alt="">
            <a class="" data-toggle="modal" data-target="#exampleModal">Albumn 1 Cây đa la tiến </a>
        </div>
        <div class="albums">
            <img src="/theme/images/hinh-anh/albums.png" class="avatar" alt="">
            <img src="/theme/images/hinh-anh/albums.png" class="sub_avatar" alt="">
            <a class="" data-toggle="modal" data-target="#exampleModal">Albumn 1 Cây đa la tiến </a>
        </div>
        <div class="albums">
            <img src="/theme/images/hinh-anh/albums.png" class="avatar" alt="">
            <img src="/theme/images/hinh-anh/albums.png" class="sub_avatar" alt="">
            <a class="" data-toggle="modal" data-target="#exampleModal">Albumn 1 Cây đa la tiến </a>
        </div>
        <div class="albums">
            <img src="/theme/images/hinh-anh/albums.png" class="avatar" alt="">
            <img src="/theme/images/hinh-anh/albums.png" class="sub_avatar" alt="">
            <a class="" data-toggle="modal" data-target="#exampleModal">Albumn 1 Cây đa la tiến </a>
        </div>
        <nav class="page" aria-label="Page navigation example text-center">
            <ul class="pagination">
                <li class="prev disabled"><span>«</span></li>
                <li class="active"><a href="/goc-chuyen-gia.html?page=1&amp;per-page=10" data-page="0">1</a>
                </li>
                <li><a href="/goc-chuyen-gia.html?page=2&amp;per-page=10" data-page="1">2</a></li>
                <li class="next"><a href="/goc-chuyen-gia.html?page=2&amp;per-page=10" data-page="1">»</a>
                </li>
            </ul>
        </nav>
    </section>
    <section class="thu_vien_video">
        <h3 class="title"><img src="/theme/images/hinh-anh/icon-thu-vien-video.png" alt=""> Thư mục video</h3>
        <?php 
        Pjax::begin();
        if(!empty($thuVienVideos)){
            foreach($thuVienVideos as $thuVienVideo){ ?>
            <div class="videos">
                <iframe width="100%" height="" src="<?= $thuVienVideo->link ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a class=""><?= $thuVienVideo->title ?> </a>
            </div>
            <?php }
            }
        ?>
        <nav class="page" aria-label="Page navigation example text-center">
            <?=
                LinkPager::widget([
                    'pagination' => $pages,
                ]);
                Pjax::end();
            ?>
        </nav>
    </section>
</div>