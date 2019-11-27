<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Banner */

$this->title = 'Create Banner';
$this->params['breadcrumbs'][] = ['label' => 'Banners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-frame-top">
        <div class="page-title">
            <h2><span class="fa fa-inbox"></span> <?= $this->title?> </h2>
        </div>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>