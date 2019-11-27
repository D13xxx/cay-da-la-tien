<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
/* @var $this yii\web\View */
/* @var $model common\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<style>

</style>
<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form->errorSummary($model); ?>
            <div class="row">
                <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
                <?php
                if ($model->isNewRecord){
                    echo $form->field($model, 'img')->widget(FileInput::classname(), [
                        'options' => ['accept' => 'image/*','id'=>'img'],
                    ]);
                }else{
                    if($model->img==''||$model->img==null){
                        echo '';
                    } else {
                        echo Html::img(Yii::$app->request->baseUrl.'/upload/banner/'.$model->img,[
                            'style'=>['width'=>'30%']
                        ]);
                    }
                    ?>
                    <div style="width:100%">
                        <?= $form->field($model, 'img')->widget(FileInput::className(),[
                            'options'=>['accept'=>['*']],
                            'pluginOptions'=>[
                                'allowedFileExtensions'=>['jpg','jpeg','bmp','png','gif'],
                                'showUpload'=>false,
                                'showPreview'=>false,
                                'showCaption' => false,
                                'showRemove' => false,
                                'browseClass' => 'btn btn-primary btn-block',
                                'browseIcon' => '<i class="glyphicon glyphicon-camera"></i> ',
                                'browseLabel' =>  'Chọn ảnh thẻ'
                            ],
                        ])->label(false)?>
                    </div>
                <?php }
                ?>
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

