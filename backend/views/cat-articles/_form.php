<?php

use dosamigos\tinymce\TinyMce;
use kartik\widgets\FileInput;
use mludvik\tagsinput\TagsInputWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\CatArticles;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\CatArticles */
/* @var $form yii\widgets\ActiveForm */
$deleteScript = <<< JS
    
    document.getElementById("catarticles-name").addEventListener("keyup", ChangeToSlug);
    function ChangeToSlug()
    {
        var title, slug,lenght;
        //Lấy text từ thẻ input title
        title = document.getElementById("catarticles-name").value;
        
        //Đổi chữ hoa thành chữ thường
        slug = title.toLowerCase();

        //Đổi ký tự có dấu thành không dấu
        slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
        slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký tự đặt biệt
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //Đổi khoảng trắng thành ký tự gạch ngang
        slug = slug.replace(/ /gi, "-");
        //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
        //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký tự gạch ngang ở đầu và cuối
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        //In slug ra textbox có id “slug”
        document.getElementById('catarticles-code').value = slug;
        
    }

JS;
$this->registerJs($deleteScript, \yii\web\View::POS_READY);
?>
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form->errorSummary($model); ?>
            <div class="row">
                <div class="col-md-12">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>
                </div>
                <div class="col-md-6">
                    <?= $form->field($model,'parent_id')->dropDownList($dataCat,['prompt'=>'- Chọn danh mục -']);?>
                </div>
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
