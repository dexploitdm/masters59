<?php

use mihaildev\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Afish */
/* @var $form yii\widgets\ActiveForm */


?>

<?php $form = \yii\widgets\ActiveForm::begin([
    'action'=>['afish/create'],
    'options'=>['class'=>'contact-form', 'role'=>'form']])?>

    <div class="form-group">
        <div class="afish-form-blocks">
            <div class="afish-form-blocks_item">
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'id' => 'd-mask-phone'])  ?>

                <?= $form->field($model, 'catalog_id')->dropDownList($cataloges) ?>
            </div>
            <div class="afish-form-blocks_item">
                <?= $form->field($model, 'description')->textarea(['rows' => 8]) ?>
            </div>
        </div>

        <?php
        echo $form->field($model, 'content')->widget(CKEditor::className(),[
            'editorOptions' => [
                'preset' => 'standard', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                'inline' => false, //по умолчанию false
            ],
        ]);
        ?>
    </div>

    <button type="submit" class="btn send-btn">Отправить</button>
<?php \yii\widgets\ActiveForm::end();?>