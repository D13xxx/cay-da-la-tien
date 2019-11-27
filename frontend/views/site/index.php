<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Products;
$this->title = 'Cây đa la tiến';
$deleteScript = <<< JS
    function postDacSanQueHuong(){
        var full_name = $('input:text[name=txtFullName]').val();
        var cell_phone = $('input:text[name=txtCellPhone]').val();
        var address = $('input:text[name=txtAddress]').val();
    
        var check = true;
        $('.error').hide();

        if(full_name==''){
        $('#confirmFullName').show();
        check = false;
        }
        if(cell_phone==''){
            $('#confirmCellPhone').show();
            check = false;
        }
        if(address==''){
            $('#confirmAddress').show();
            check = false;
        }

        if(check){
            $('#formDacSanQueHuong').submit();
        }
    }

    $(".modal").show();

    $('.close').click(function() {     
        $(".modal").hide();
    });
    setTimeout(function(){
        $(".modal").hide();
    }, 3000);
JS;
$this->registerJs($deleteScript, \yii\web\View::POS_READY);
?>
<style>
.error{
    display: none;
}
.modal-dialog{
    top:20%;
}
</style>
<?php if (Yii::$app->session->hasFlash('success')): ?>
<div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img class="logo" style="width: 20%;" src="/theme/images/logo.png" />
                <p><?= Yii::$app->session->getFlash('success');?></p>
                (Trân thành cảm ơn.)
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<div class="content container">
    <div class="banner_main">
        <div class="wrap-slider">
            <div class="slider_banner owl-carousel owl-theme">
                
                <?php 
                if(!empty($banners)){
                    foreach($banners as $banner){ ?>
                        <div class="item">
                            <div class="banner">
                                <a href="#">
                                    <img class="ispc" src="<?= Yii::getAlias('@fakelink/upload/banner/' . $banner->img) ?>" alt="">
                                </a>
                            </div>
                        </div>
                    <?php }
                }
                ?>
            </div>
            <div class="button-slide">
                <div class="nextBtnNews"><i class="far fa-chevron-left"></i></div>
                <?php 
                if(!empty($banners)){
                    foreach($banners as $banner){ ?>
                        <img src="<?= Yii::getAlias('@fakelink/upload/banner/' . $banner->img) ?>">
                <?php }
                }
                ?>
                <div class="previousNews"><i class="far fa-chevron-right"></i></div>
            </div>

        </div>

    </div>

    <div class="info row">
        <div class="ileft">
            <div class="title">
                <p><span>CÂY ĐA LA TIẾN</span> NHÂN CHỨNG LỊCH SỬ - TỪ NĂM 1946</p>
            </div>
            <p class="text">Cây đa La Tiến nằm trên địa bàn xã Nguyên Hoà, huyện Phù Cừ tỉnh Hưng Yên là nơi ghi dấu
                chiến công
                của quân và dân ta trong cuộc kháng chiến chống thực dân Pháp. Nơi đây, ngày nay đã trở thành địa
                chỉ đỏ nhằm giáo dục cho thế hệ trẻ về truyền thống cách mạng, tinh thần yêu nước, anh dũng kiên
                cường, gan dạ của cán bộ, chiến sỹ và đồng bào ta. </p>
            <p class="text">Cây đa La Tiến đã hàng trăm tuổi, trở thành chỗ dựa tinh thần, luôn bao bọc và che chở
                cho làng quê
                Nguyên Hoà. Cây đa trở thành một biểu tượng đầy tự hào của nhân dân.</p>
            <a href="#">XEM TOÀN BỘ ></a>
        </div>
        <div class="iright">
            <div class="title">
                HƯỚNG VỀ QUÊ HƯƠNG
            </div>
            <p>Người con Quê hương đang sống ở một nơi xa quê và cùng
                nhau chia sẻ tình cảm để giao lưu và giúp đỡ lẫn nhau. Hãy
                chia sẻ và để lại thông tin với Hội đồng hương La Tiến.</p>
                <form action="<?= Url::to(['index'])?>" id="formDacSanQueHuong" method="POST">
                    <div class="form-group">
                        <label for="txtFullName">HỌ TÊN</label>
                        <input type="text" class="form-control" id="txtFullName"  name="txtFullName" aria-describedby="emailHelp"
                            placeholder="Tên đầy đủ">
                            <strong id="confirmFullName" class="error">Họ và tên không được để trống</strong>
                    </div>
                    <div class="form-group">
                        <label for="txtAddress">QUÊ QUÁN</label>
                        <input type="text" class="form-control" id="txtAddress" name="txtAddress" aria-describedby="emailHelp"
                            placeholder="Xã/Huyện/Tỉnh">
                            <strong id="confirmAddress" class="error">Quê quán không được để trống</strong>
                    </div>
                    <div class="form-group">
                        <label for="txtCellPhone">SỐ ĐIỆN THOẠI CỦA BẠN</label>
                        <input type="text" class="form-control" id="txtCellPhone" name="txtCellPhone" aria-describedby="emailHelp"
                            placeholder="Nhập số">
                        <strong id="confirmCellPhone" class="error">Số điện thoại không được để trống</strong>
                    </div>
                    <button class="btn btn-primary" type="submit" onclick="postDacSanQueHuong()">GỬI NGAY</button>
                </form>
        </div>
    </div>
    <div class="history">
        <img class="title pc" src="/theme/images/title-hanh-trinh.jpg" />
        <img class="title mb" src="/theme/images/title-hanh-trinh-mb.jpg" />
        <div class="timeline clearfix">
            <div class="item">
                <p class="title-left">THẾ KỶ 19</p>
                <p class="text text-first">
                    Cây đa La Tiến
                    có niên đại
                    gần 200 năm
                    <img src="/theme/images/muiten.png">
                </p>
            </div>
            <div class="item">
                <p class="title-center">1950</p>
                <p class="text">
                    Bốt La Tiến căn cứ
                    chỉ huy đồn bốt 2
                    bên bờ sông Luộc
                    của Thực dân Pháp
                    <img src="/theme/images/muiten.png">
                </p>
            </div>
            <div class="item">
                <p class="title-center">1954</p>
                <p class="text">
                    Nhân chứng lịch sử
                    1.145 người đã bị giết
                    khi giặc chiếm đóng
                    từ năm 1949 đến 1954
                    <img src="/theme/images/muiten.png">
                </p>

            </div>
            <div class="item">
                <p class="title-center">1/1954</p>
                <p class="text">
                    Trận tiến công tiêu diệt
                    Giặc: Chiến công vang
                    dội của quân và dân
                    tỉnh Hưng Yên
                    <img src="/theme/images/muiten.png">
                </p>
            </div>
            <div class="item">
                <p class="title-center">2019</p>
                <p class="text">
                    Huyện Phù Cừ xây dựng
                    Đền tưởng niệm các
                    anh hùng liệt sỹ cạnh
                    Cây đa La Tiến
                    bên dòng sông Luộc
                    <img src="/theme/images/muiten.png">
                </p>
            </div>
            <div class="item">
                <p class="title-center">2010</p>
                <p class="text">
                    Cây đa và đền La Tiến được
                    Nhà nước công nhận là Di tích
                    lịch sử cấp quốc gia
                    <img src="/theme/images/muiten.png">
                </p>
            </div>
            <div class="item">
                <p class="title-center">24/03/2016</p>
                <p class="text">
                    Xếp hạng di tích lịch sử
                    cấp quốc gia: chứng tích về một
                    khúc tráng ca bất diệt
                    <img src="/theme/images/muiten.png">

                </p>
            </div>
        </div>
    </div>

</div>

<div class="map">
    <div class="container">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.097218790943!2d106.23380681523314!3d20.665623405450877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135eb696cb0ceb7%3A0xc2d83f57f27ec731!2zQ8OieSDEkWEgTGEgVGnhur9u!5e0!3m2!1svi!2s!4v1573809128042!5m2!1svi!2s"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>

