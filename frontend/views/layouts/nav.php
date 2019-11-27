<?php
use yii\helpers\Url;
?>
<div id="menu">
    <div class="topmenu clearfix">
        <div class="container">
            <div class="time"><i class="fal fa-clock"></i> 09:47 Thứ sáu, ngày 6/10/2019</div>
            <img class="logo" src="/theme/images/logo.png" />
            <div class="social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <div class="middle-menu">
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="order-0">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target=".dual-collapse2">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to('/site/index')?>">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to('/site/tin-tuc')?>">TIN TỨC</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to('/site/dac-san-que-huong')?>">ĐẶC SẢN QUÊ HƯƠNG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to('/site/du-lich')?>">DU LỊCH</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to('/site/thu-vien')?>">THƯ VIỆN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to('/site/ban-do')?>">BẢN ĐỒ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to('/site/lien-he')?>">LIÊN HỆ</a>
                        </li>
                        <li>
                            <form action="<?= Url::to(['/articles/search'])?>" method="GET">
                                <input type="text" placeholder="TÌM KIẾM" name="txtSearch">
                                <i class="fal fa-search"></i>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>