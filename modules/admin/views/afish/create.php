<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Afish */

$this->title = 'Create Afish';
$this->params['breadcrumbs'][] = ['label' => 'Afish', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="afish-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
