<?php

/* @var $this yii\web\View */

use yii\helpers\ArrayHelper;
use mihaildev\ckeditor\CKEditor;

$this->title = 'Добавить объявление';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="latest-news blog blog-single padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
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

                        <?= $form->field($model, 'catalog_id')->dropDownList(ArrayHelper::map(\app\models\Catalog::find()->all(), 'id', 'title')) ?>
                        
                    </div>
                </div>

                <button type="submit" class="btn send-btn">Сохранить</button>
                <?php \yii\widgets\ActiveForm::end();?>


            </div>
        </div>
    </div>
    </div>
</section>