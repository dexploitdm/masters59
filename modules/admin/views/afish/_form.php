<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

/* @var $this yii\web\View */
/* @var $model app\models\Afish */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="afish-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'id' => 'd-mask-phone'])  ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>



    <button class="btn btn-default btn--icon"><i class="zmdi zmdi-check"></i></button>

    <?php ActiveForm::end(); ?>

</div>
