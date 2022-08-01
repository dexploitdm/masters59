<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>
<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')) { ?>
    <div class="callback-form"><?= Yii::$app->session->getFlash('contactFormSubmitted'); ?></div>
<?php } ?>
<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
    <?= $form->field($model, 'name')->textInput(['placeholder' => 'Ваше имя']) ?>
    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Ваша почта']) ?>
    <?= $form->field($model, 'body')->textarea(['rows' => '6','placeholder' => 'Ваше сообщение']) ?>
    <div class="signupButton">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-orange', 'name' => 'contact-button']) ?>
    </div>
<?php ActiveForm::end(); ?>