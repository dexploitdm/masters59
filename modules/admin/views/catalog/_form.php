<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="catalog-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => [2.55],'class'=>'form-control']) ?>

    <button class="btn btn-default btn--icon"><i class="zmdi zmdi-check"></i></button>

    <?php ActiveForm::end(); ?>

</div>
