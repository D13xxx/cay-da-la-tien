<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ThuVienHinh */

$this->title = 'Thêm mới Albumn ảnh';
?>
<div class="thu-vien-hinh-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
