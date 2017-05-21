<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Banner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="banner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'text2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>


    <button class="btn btn-default btn--icon"><i class="zmdi zmdi-check"></i></button>
    <?php ActiveForm::end(); ?>

</div>
