<?php

/* @var $this yii\web\View */

use yii\helpers\ArrayHelper;
use mihaildev\ckeditor\CKEditor;

$this->title = 'Добавить объявление';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="afish-block">
    <div class="afish-form">
        <div>
            <h2>Редактирование публикации</h2>
        </div>

        <?php if(Yii::$app->session->getFlash('afish')):?>
            <div class="alert alert-success" role="alert">
                <?= Yii::$app->session->getFlash('afish'); ?>
            </div>
        <?php endif;?>


        <?php $form = \yii\widgets\ActiveForm::begin([
            'action'=>['afish/update', 'id' => $model->id],
            'options'=>['class'=>'contact-form', 'role'=>'form']])?>

        <div class="form-group">
            <div class="afish-form-blocks">
                <div class="afish-form-blocks_item">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'id' => 'd-mask-phone'])  ?>

                    <?= $form->field($model, 'catalog_id')->dropDownList(ArrayHelper::map(\app\models\Catalog::find()->all(), 'id', 'title')) ?>
                </div>
                <div class="afish-form-blocks_item">
                    <?= $form->field($model, 'description')->textarea(['rows' => 8]) ?>
                </div>
            </div>

            <?php
                echo $form->field($model, 'content')->widget(CKEditor::className(),[
                    'editorOptions' => [
                        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
                        'inline' => false, //по умолчанию false
                    ],
                ]); ?>

        </div>

        <button type="submit" class="btn send-btn">Сохранить</button>
        <?php \yii\widgets\ActiveForm::end();?>
    </div>
</section>