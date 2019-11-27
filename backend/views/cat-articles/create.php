<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\CatArticles */

$this->title = 'Thêm mới nhóm bài viết';
$this->params['breadcrumbs'][] = ['label' => 'Cat Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-articles-create">
    <div class="content-frame-top">
        <div class="page-title">
            <h2><span class="fa fa-inbox"></span> <?= $this->title?> </h2>
        </div>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
        'dataCat' => $dataCat,
    ]) ?>

</div>
