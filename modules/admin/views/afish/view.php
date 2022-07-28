<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Afish */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Afish', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afish-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Публикация:
        <?php if($model->isAllowed()):?>
            <a class="btn btn-warning" href="<?= Url::toRoute(['afish/disallow', 'id'=>$model->id]);?>">Запретить</a>
        <?php else:?>
            <a class="btn btn-success" href="<?= Url::toRoute(['afish/allow', 'id'=>$model->id]);?>">Разрешить</a>
        <?php endif?>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Загрузка изображения', ['set-image', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Выбор каталога', ['set-catalog', 'id' => $model->id], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'description:html',
            'content:html',
            'phone:html',
            //'image',
            [
                'format' =>'html',
                'label'=> 'image',
                'value'=>function($data){
                    return Html::img($data->getImage(),['width'=>200]);
                }
            ],
            'viewed',
            //'catalog_id',
            [                      // the owner name of the model
                'label' => 'Каталог',
                'value' => $model->catalog->title,
            ],
        ],
    ]) ?>
    <div class="container">
        <a href="/admin/afish/index" class="btn btn-danger btn--icon"><i class="zmdi zmdi-arrow-back"></i></a>
    </div>
</div>
