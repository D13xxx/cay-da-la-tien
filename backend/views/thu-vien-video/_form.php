<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ThuVienVideo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-12">
    <div class="page-title">                    
        <h2><span class="fa fa-arrow-circle-o-left"></span> <?= $this->title ?></h2>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <?php $form = ActiveForm::begin(); ?>
            <?php echo $form->errorSummary($model); ?>
          
            <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
    
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
            
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
