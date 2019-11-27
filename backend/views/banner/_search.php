<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\query\BannerQuery */
/* @var $form yii\widgets\ActiveForm */
?>
<style>
    a.btn.btn-success.btn-block {
        margin-top: 25px !important;
    }
</style>
<div class="row">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="col-md-10">
        <?= $form->field($model, 'title') ?>
    </div>

    <?php ActiveForm::end(); ?>
    <div class="col-md-2">
        <?= Html::a('Thêm mới','create',['class'=>'btn btn-success btn-block'])?>
    </div>

</div>

