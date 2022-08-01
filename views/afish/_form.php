<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;

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

            <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

            <?= $form->field($model, 'catalog_id')->dropDownList($cataloges) ?>
            <!--                        --><?//= Html::dropDownList('catalog_id','', $cataloges,['class'=>'form-control']) ?>

        </div>
    </div>

    <button type="submit" class="btn send-btn">Отправить</button>
<?php \yii\widgets\ActiveForm::end();?>