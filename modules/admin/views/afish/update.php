<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Afish */

$this->title = 'Редактировать Афишу: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Afish', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="afish-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
