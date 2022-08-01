<?php

use mihaildev\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model app\models\Afish */
/* @var $form yii\widgets\ActiveForm */


?>

<?php $form = \yii\widgets\ActiveForm::begin([
    'action'=>['afish/create'],
    'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']])?>

    <div class="form-group">
        <div class="col-md-12">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'id' => 'd-mask-phone'])  ?>

            <?php
                echo $form->field($model, 'content')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                    ],
                ]);
            ?>

            <?= $form->field($model, 'catalog_id')->dropDownList($cataloges) ?>
            <!--                        --><?//= Html::dropDownList('catalog_id','', $cataloges,['class'=>'form-control']) ?>

        </div>
    </div>

    <button type="submit" class="btn send-btn">Отправить</button>
<?php \yii\widgets\ActiveForm::end();?>