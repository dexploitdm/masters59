<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="auth-block">
    <div class="auth-form">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Для регистрации заполните все поля</p>

        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'fieldConfig' => [
                'template' => "{label}\n<div>{input}</div>\n<div>{error}</div>",
                'labelOptions' => ['class' => 'control-label'],
            ],
        ]); ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email')->textInput() ?>

        <?= $form->field($model, 'password')->passwordInput() ?>



        <div class="form-group">
            <div class="auth-form-btn">
                <?= Html::submitButton('Зарегистрироватся', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
        <?php ActiveForm::end(); ?>

    </div>
</section>
