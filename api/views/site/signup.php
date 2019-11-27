<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'SignUp';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-container">

    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Welcome</strong>, Please SignUp</div>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
            
            <div class="form-group">
                <div class="col-md-12">
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <?= $form->field($model, 'email') ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>
            </div>
            <div class="form-group">
                <br>
                <div class="col-md-6 col-sm-push-3">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-info btn-block', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="login-footer">
            <div class="pull-left">
                &copy; 2019 HelloMedia.vn
            </div>
            <div class="pull-right">
                <a href="#">About</a> |
                <a href="#">Privacy</a> |
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>
    
</div>

<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to login:</p>

    <div class="row">
        <div class="col-lg-5">
           
        </div>
    </div>
</div>
