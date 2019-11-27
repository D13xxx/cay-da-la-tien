<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\query\ArticlesQuery */
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
        <?= $form->field($model, 'title') ?>
    </div>
    <div class="col-md-2">
        <?php
        $cat_articles = \common\models\CatArticles::find()->all();
        $list_cat_articles = \yii\helpers\ArrayHelper::map($cat_articles, 'id', 'name');
        ?>
        <?= $form->field($model, 'cat_articles_id')->widget(\kartik\select2\Select2::className(), [
            'data' => $list_cat_articles,
            'options' => [
                'prompt' => Yii::t('backend', 'Lưa chọn tìm kiếm ....'),
            ],
            'pluginOptions' => ['allowClear' => true]
        ]) ?>

    </div>
    <div class="col-md-2">

        <?= $form->field($model, 'status')->widget(\kartik\select2\Select2::className(), [
            'data' => \common\models\Articles::TT_ARRAY(),
            'options' => [
                'prompt' => Yii::t('backend', 'Lưa chọn tìm kiếm ....'),
            ],
            'pluginOptions' => ['allowClear' => true]
        ]) ?>
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