<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ThuVienHinh */

$this->title = 'Update Thu Vien Hinh: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Thu Vien Hinhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="thu-vien-hinh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
