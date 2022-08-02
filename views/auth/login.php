<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="auth-block">
    <div class="auth-form">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Пожалуйста введите свой Email и пароль или войдите через VK</p>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'fieldConfig' => [
                'template' => "{label}\n<div>{input}</div>\n<div>{error}</div>",
                'labelOptions' => ['class' => 'control-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div>{input} {label}</div>\n<div>{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="auth-form-btn">
                <?= Html::submitButton('Вход', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

        <p>Еще не зарегистрированы?</p>
        <div class="form-group">
            <div class="auth-form-btn">
                <a class="btn btn-orange" href="<?= Url::toRoute(['auth/signup']) ?>">Регистрация</a>
            </div>
        </div>
        <p>После регистрации вы получите доступ к публикации своих услуг</p>

        <div class="col-md-1">
            <!-- Put this script tag to the <head> of your page -->
            <script type="text/javascript" src="//vk.com/js/api/openapi.js?146"></script>

            <script type="text/javascript">
                VK.init({apiId: 6034767});
            </script>

            <!-- Put this div tag to the place, where Auth block will be -->
            <div id="vk_auth"></div>
            <script type="text/javascript">
                VK.Widgets.Auth("vk_auth", {authUrl: '/auth/login-vk'});
            </script>
        </div>
    </div>
</section>