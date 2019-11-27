<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ThuVienVideo */

$this->title = 'Thêm mới thư viện Video';
?>

<div class="thu-vien-video-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
