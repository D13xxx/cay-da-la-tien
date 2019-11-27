<?php
use mludvik\tagsinput\TagsInputWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Articles */
/* @var $form yii\widgets\ActiveForm */
$deleteScript = <<< JS
    
    
    document.getElementById("articles-title").addEventListener("keyup", ChangeToSlug);

    document.getElementById("articles-title").addEventListener("keyup", ChangeToSlug);
    document.getElementById("articles-description").addEventListener("keyup", ChangeToSlug);

    

    function ChangeToSlug()
    {

        countLenghtTitle = document.getElementById("articles-title").value;
        countLenghtDesc = document.getElementById("articles-description").value;
        var title, slug;

        //Lấy text từ thẻ input title
        title = document.getElementById("articles-title").value;
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
        document.getElementById('articles-slug').value = slug;

        document.getElementById("lenghtTitle").innerHTML =  countLenghtTitle.length;
        document.getElementById("lenghtDesc").innerHTML =  countLenghtDesc.length;
    }

    

JS;
$this->registerJs($deleteScript, \yii\web\View::POS_READY);
?>
<style>
    #du-lich, #tin-tuc, #dac-san-que-huong {
    display: none;
  }
    input[type="file"] {
        cursor: pointer !important;
    }
    .tags-input{
        width: 100% !important;
        padding: 4px;
    }
    button.btn.btn-default.btn-secondary.kv-hidden.fileinput-cancel.fileinput-cancel-button {
        display: none !important;
    }
    img.thumbnail {
        width: 200px !important;
        height: 200px !important;
        margin: 0 auto !important;
        margin-bottom: 20px !important;
    }
    .cropper-buttons {
        text-align: center !important;
        margin-bottom: 20px !important;
    }

    .new-photo-area {
        margin: 0 auto 20px !important;
    }
    .new-photo-area{
        width: 200px !important;
        height : 200px !important;
    }
    div#uploaded {
        position: relative !important;
        z-index: 1 !important;
    }

    input#uploadArticles {
        position: absolute !important;
        width: 300px !important;
        height: 200px !important;
        top: 0 !important;
        opacity: 0!important;
    }
    a.maxlength {
        border: 1px solid gold;
        padding: 5px 10px;
        margin-left: 10px;
    }
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
<?php $form = ActiveForm::begin(); ?>
<?php echo $form->errorSummary($model); ?>
<div class="col-md-9">
    <div class="panel panel-default">
        <div class="panel-body">
            <label for="articles-title">Tiêu đề bài viết </label><a href="" class="maxlength" ><span id="lenghtTitle">0</span><span>/70</span></a>
            <?= $form->field($model, 'title')->textInput(['maxlength' => 70,])->label(false) ?>

            <?= $form->field($model, 'slug')->textInput(['maxlength' => true,])->label('Slug * Bạn có thể giữ nguyên theo quy định hoặc thay đổi tùy chỉnh.') ?>
            <?= $form->field($model, 'type')->hiddenInput()->label(false) ?>

            <label for="articles-desc">Mô tả bài viết </label><a href="" class="maxlength" ><span id="lenghtDesc">0</span><span>/160</span></a>
            <?= $form->field($model, 'description')->textarea(['maxlength' => 160,])->label(false) ?>

            <?= $form->field($model, 'content')->textarea(['id' =>'content']) ?>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-body">
            <div id="uploaded">
                <?= $form->field($model, 'avatar')->hiddenInput(['id'=>'dataUpload'])->label(false) ?>
                <?php
                if(!empty($model->avatar)){ ?>
                    <?= Html::img(\Yii::$app->request->BaseUrl.'/upload/articles/'.$model->avatar,['class'=>'avatar img-thumbnail','id'=>'avatarNews'])?>
                <?php }else{ ?>
                    <img src="https://via.placeholder.com/300x200" id="avatarNews"  class="avatar img-thumbnail" alt="avatar">
                <?php }
                ?>
                <input type="file" id="uploadArticles" />
              
                
                <label class="control-label" for="articles-tags">Trang tin</label>
                <select class="form-control select" onchange="showOnChange(this)" style="" id="sizzle1574412721473">
                    <option value="">-- Lựa chọn trang tin -- </option>
                    <option value="1">Du lịch</option>
                    <option value="2">Đặc sản quê hương</option>
                    <option value="3">Tin tức</option>
                </select>
              
                <div id="du-lich""></div>
                <div id="dac-san-que-huong"></div>
                <div id="tin-tuc">
                    <?=
                        $form->field($model, 'cat_articles_id')
                            ->dropDownList(
                                ArrayHelper::map(\common\models\CatArticles::find()->asArray()->all(), 'id', 'name'), ['prompt'=>'Lựa chọn nhóm tin.']
                            )
                    ?>
                </div>


                <?= $form->field($model, 'tags')->widget(TagsInputWidget::className()) ?>

                <?= $form->field($model, 'is_hot_new')->checkbox() ?>
                <?php
                if ($model->isNewRecord){
                    echo Html::submitButton('Thêm mới', ['class' => 'btn btn-success']);
                }else{
                    echo Html::submitButton('Cập nhật', ['class' => 'btn btn-success']);
                }?>
                <?= Html::a('Quay lại',['index'],['class'=>'btn btn-default pull-right'])?>
            </div>
            
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>


<script src="/libs/ckeditor/ckeditor.js?v=4"></script>

    <script>

     CKEDITOR.replace( 'content', {
      height: '300px',
    } );
    </script>
