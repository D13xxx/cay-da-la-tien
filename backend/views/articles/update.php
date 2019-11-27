<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Articles */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="articles-update">
    <div class="content-frame-top">
        <div class="page-title">
            <h2><span class="fa fa-inbox"></span> <?= $this->title?> </h2>
        </div>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
