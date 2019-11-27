<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Thay đổi mật khẩu';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="login-container">

    <div class="login-box animated fadeInDown">
        <div class="login-logo"></div>
        <div class="login-body">
            <div class="login-title"><strong>Welcome</strong>, Please SignUp</div>
            <?php $form = ActiveForm::begin(
                    [
                        'action' => ['change-password-rs'],
                        'method' => 'post',
                    ]
            ); ?>
            
            <div class="form-group">
                <div class="col-md-12">
                    <?= $form->field($model, 'oldPassword')->passwordInput() ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <?= $form->field($model, 'newPassword')->passwordInput() ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <?= $form->field($model, 'confirmPassword')->passwordInput() ?>
                </div>
            </div>
            <div class="form-group">
                <br>
                <div class="col-md-6 col-sm-push-3">
                    <?= Html::submitButton('Cập nhật', ['class' => 'btn btn-info btn-block',]) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
