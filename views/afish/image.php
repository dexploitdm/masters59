<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'masters59 | Добавление/замена обложки';
/* @var $this yii\web\View */
/* @var $model app\models\Afish */
/* @var $form yii\widgets\ActiveForm */
?>

<section class="latest-news blog blog-single padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="text-center">
                    <h2>Добавление/замена обложки для записи</h2>
                </div>
                <?php if (Yii::$app->session->getFlash('afish')): ?>
                    <div class="alert alert-success" role="alert" style="margin-bottom: 50px;">
                        <?= Yii::$app->session->getFlash('afish'); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="afish view">

                <div class="upload-block">
                    <div class="upload-block-box">
                        <i class="fa-solid fa-upload"></i>
                    </div>
                    <img class="prevImage" src="#" alt="Image" />
                </div>

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'image')->fileInput(['maxlength' => true, 'class' => 'js-upload',  'accept' => 'image/*']) ?>
                <div class="form-group">
                    <?= Html::submitButton('Загрузить', ['class' =>'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>

            <a href="/afish/main" class="btn btn-orange">Мои публикации</a>

        </div>
    </div>
</section>

