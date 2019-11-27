<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\query\HuongVeQueHuongQuery */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    a.btn.btn-success.btn-block {
        margin-top: 21px !important;
    }
</style>
<div class="row">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="col-md-4">
        <?= $form->field($model, 'full_name') ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'cell_phone') ?>
    </div>
    <div class="col-md-2">
        <?= $form->field($model, 'address') ?>
    </div>
    
    <div class="col-md-2" style="padding-top: 4px;">
        <br>
        <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-primary btn-block btn-routed']) ?>
    </div>

    <?php ActiveForm::end(); ?>

    <div class="col-md-2">
        <?= Html::a('Thêm mới', 'create', ['class' => 'btn btn-success btn-block']) ?>
    </div>

</div>
