<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<style>
    span.fa {
        margin-top: 7px;
    }
</style>
<body>
    <?php $this->beginBody() ?>
    
    <?php if (Yii::$app->user->isGuest) { ?>
        <?= $content ?>
    <?php } else { ?>

    <!-- START PAGE CONTAINER -->
    <div class="page-container">

        <!-- START PAGE SIDEBAR -->
        <?= $this->render('page-sidebar')?>
        <!-- END PAGE SIDEBAR -->

        <!-- PAGE CONTENT -->
        <div class="page-content">

            <!-- START X-NAVIGATION VERTICAL -->
            <?= $this->render('x-navigation.php')?>
            <!-- END X-NAVIGATION VERTICAL -->                     

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>                    
                <li class="active"><?= Yii::$app->controller->id ?></li>
                <li class="active"><?= $this->context->action->id //action id ?></li>
            </ul>
            <!-- END BREADCRUMB -->                       

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <?= $content ?>

            </div>
            <!-- END PAGE CONTENT WRAPPER -->                                
        </div>            
        <!-- END PAGE CONTENT -->
    </div>
    <!-- END PAGE CONTAINER -->

    <?php } ?>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
