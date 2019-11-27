<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Articles */

$this->title = 'Thêm mới tin tức';
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-create">
    <div class="content-frame-top">
        <div class="page-title">
            <h2><span class="fa fa-inbox"></span> <?= $this->title?> </h2>
        </div>
    </div>

    <div class="page-content-wrap">
        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>

</div>
