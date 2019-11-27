<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HuongVeQueHuong */

$this->title = 'Create Huong Ve Que Huong';
$this->params['breadcrumbs'][] = ['label' => 'Huong Ve Que Huongs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="huong-ve-que-huong-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
