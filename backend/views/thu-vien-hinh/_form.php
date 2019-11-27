<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\ThuVienHinh */
/* @var $form yii\widgets\ActiveForm */
$script = <<< JS
    $("#img1").change(function() {
        let input = document.getElementById("img1");
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('#img1-images').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    });
    $("#img2").change(function() {
        let input = document.getElementById("img2");
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('#img2-images').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    });
    
    $("#img3").change(function() {
        let input = document.getElementById("img3");
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('#img3-images').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    });
    $("#img4").change(function() {
        let input = document.getElementById("img4");
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('#img4-images').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    });
    $("#img5").change(function() {
        let input = document.getElementById("img5");
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('#img5-images').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    });
    $("#img6").change(function() {
        let input = document.getElementById("img6");
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
            $('#img6-images').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    });
JS;
$this->registerJs($script, \yii\web\View::POS_READY);
?>
<style>
  /* .col-md-4.img img {
        width: 300px;
        position: relative;
        height: 200px;
        z-index: 1;
    }

    .col-md-4.img input {
        width: 300px;
        position: absolute;
        height: 200px;
        top: 0 !important;
        opacity: 0!important;
        z-index: 10;
    } */
</style>

<div id="myModal" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cắt ảnh</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10 text-center">
                        <div id="imageArticles" style="width:300px; margin-top:20px"></div>
                    </div>
                    <div class="col-md-2" style="padding-top:20px;">
                        <br />
                        <br />
                        <br/>
                        <button class="btn btn-success crop_imageArticles">Cắt ảnh</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="col-md-12">
    <div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> <?= $this->title ?></h2>
    </div>
    <div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-body">
    </div>
    <div class="col-md-3">

    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form->errorSummary($model); ?>

            <div class="panel-body">
                <div id="uploaded">
                    <?php
                    if(!empty($model->avatar)){ ?>
                        <?= Html::img(\Yii::$app->request->BaseUrl.'/upload/thu-vien-hinh/'.$model->avatar,['class'=>'avatar img-thumbnail','id'=>'avatarNews'])?>
                    <?php }else{ ?>
                        <img src="https://via.placeholder.com/300x200" id="avatarNews"  class="avatar img-thumbnail" alt="avatar">
                    <?php }
                    ?>
                    <input type="file" id="uploadArticles" />
                </div>
                
                <?= $form->field($model, 'avatar')->hiddenInput(['id'=>'dataUpload']) ?>

            </div>
            <div class="col-md-12">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            </div>
            <div class="row">
                <div class="col-md-4 img img1">
                    <!-- <input type="file" id="img1" name="img1" /> -->
                    <?= $form->field($model, 'img1')->fileInput() ?>
                    <img src="https://via.placeholder.com/300x200" id="img1-images"  class="img img-thumbnail" alt="avatar">
                </div>
                <div class="col-md-4 img img2">
                    <input type="file" id="img2" name="ThuVienHinh[img2]" />
                    <img src="https://via.placeholder.com/300x200" id="img2-images"  class="img img-thumbnail" alt="avatar">
                </div>
                <div class="col-md-4 img img3">
                    <input type="file" id="img3" name="ThuVienHinh[img3]" />
                    <img src="https://via.placeholder.com/300x200" id="img3-images"  class="img img-thumbnail" alt="avatar">
                </div>
                <div class="col-md-4 img img4">
                    <input type="file" id="img4" name="ThuVienHinh[img4]" />
                    <img src="https://via.placeholder.com/300x200" id="img4-images"  class="img img-thumbnail" alt="avatar">
                </div>
                <div class="col-md-4 img img5">
                    <input type="file" id="img5" name="ThuVienHinh[img5]" />
                    <img src="https://via.placeholder.com/300x200" id="img5-images"  class="img img-thumbnail" alt="avatar">
                </div>
                <div class="col-md-4 img img6">
                    <input type="file" id="img6" name="ThuVienHinh[img6]" />
                    <img src="https://via.placeholder.com/300x200" id="img6-images"  class="img img-thumbnail" alt="avatar">
                </div>
            </div>
        <div class="panel-footer">
            <?php
            if ($model->isNewRecord){
                echo Html::submitButton('Thêm mới', ['class' => 'btn btn-success']);
            }else{
                echo Html::submitButton('Cập nhật', ['class' => 'btn btn-primary']);
            }?>
            <?= Html::a('Quay lại',['index'],['class'=>'btn btn-default pull-right'])?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

